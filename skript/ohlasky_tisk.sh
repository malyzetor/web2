#!/bin/bash
soubor=$1

#datum vkladu do "datum_ohlasek.inc"
mesic=([1]=ledna února března dubna května června července srpna září října listopadu prosince)
day=(`date +%-d`)
mon=(`date +%-m`)
yea=(`date +%Y`)
echo "Vloženo $day.&nbsp;${mesic[$mon]}&nbsp;$yea." > /tmp/datum_ohlasek.inc


(
echo "12"
echo "# Konvertuji na PDF"
libreoffice "-env:UserInstallation=file:///tmp/XyY" --headless --invisible --convert-to pdf --outdir /tmp "$soubor"
tmp=${soubor##*/}

echo "24"
echo "# Tisk: Příprava dvojstránky"
pdftk /tmp/${tmp%.odt}.pdf cat 1 1 output /tmp/out.pdf

echo "36"
echo "# Tisk: Příprava stránky 2xA5"
java -jar /home/jager/bin/pdf/nup_pdf.jar /tmp/out.pdf /tmp/out2.pdf 2

echo "48"
echo "# Tisk: Sestava 4xA4 a 2xA5"
pdftk /tmp/out.pdf /tmp/out.pdf /tmp/out2.pdf cat output /tmp/out3.pdf
pocet=`pdfinfo /tmp/out3.pdf |grep Pages|awk '{print $2}'`

echo "60"
echo "# Tisk: Kontrola před tiskem"
if [ "$pocet" -eq 5 ]
then
   echo "# Tisk: OK"
   lp -d HP_LaserJet_Professional_P1606dn /tmp/out3.pdf
else
   zenity --error --text "Tisk: Něco je v prdeli!"
   evince /tmp/out3.pdf
   exit
fi

echo "72"
echo "# Web: Odesílání na server"
#anonymizovany pristup
lftp -e "set ssl:verify-certificate no; ls; put /tmp/${tmp%.odt}.pdf -o ./www_root/ohlasky.pdf; put /tmp/datum_ohlasek.inc -o ./www_root/datum_ohlasek.inc; bye" -u XYZ -p 990 ABC

echo "84"
echo "# Web: Přijímání ze serveru"
wget http://svetla.farnost.cz/ohlasky.pdf -O /tmp/ohlasky.pdf

echo "100"
echo "# Web: Kontrola webu"
if cmp -s "/tmp/${tmp%.odt}.pdf" "/tmp/ohlasky.pdf"
then
   zenity --info --text "Ohlášky ${tmp%.odt} jsou vytištěny a na webu."
   exit
else
   zenity --error --text "Něco je v prdeli!"
fi

) |
zenity --progress --title="Tisk a odeslání ohlášek na web" --auto-close --percentage=0