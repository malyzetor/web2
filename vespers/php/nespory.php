<?php 
include "2021_10_10.inc";

$ant1= array("", "Hospodin řekl mému Pánu: Seď po mé pravici, aleluja.", "Kristus je kněz navěky podle Melchizedechova řádu, aleluja.", "Hospodin řekl mému Pánu: Seď po mé pravici, aleluja.", "Ode dne zrození je ti určeno vládnout v&nbsp;posvátném lesku, aleluja.");
$ant2= array("", "Země se zachvěla před tváří Páně, aleluja.", "Bůh náš je na nebesích, učinil všechno, co chtěl, aleluja.", "Vypravujte mezi všemi národy o&nbsp;Hospodinových divech, aleluja.", "Blahoslavení, kdo lační a&nbsp;žízní po spravedlnosti, neboť oni budou nasyceni.");
$ant3= array("", "Pán, náš Bůh všemohoucí, se ujal království, aleluja.", "Chvalte Boha, všichni, kdo mu sloužíte, malí i velcí, aleluja.", "Pán, náš Bůh všemohoucí, se ujal království, aleluja.", "Chvalte Boha, všichni, kdo mu sloužíte, malí i velcí, aleluja.");
$zalm= array("", "114.inc", "115.inc", "111.inc", "112.inc");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="Author" content="Juraj Videky; Pavel Jäger" />
	<link rel="stylesheet" type="text/css" href="breviar.css" />
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0" />
<title>Liturgie hodin | <?php echo $datum; ?> – nešpory</title>
</head>

<body>
<div id="contentRoot">



<h2><?php echo $datum; ?></h2>

<h2><span class="bold"><span class="redtitle"><?php echo $nedele; ?></span></span> <br />
<span class="redtitle"><?php echo $tyden; ?>. týden žaltáře</span></h2>

<div class="tts_heading"><!---->


<p class="center"><span class="uppercase">Druhé nešpory</span><br />

<!--NADPIS:end--></p>

<!----></div><!---->

<div class="respons">
<p class="respV">Bože, pospěš mi na pomoc.</p>
<p class="respO">Slyš naše volání.</p>
</div>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->

<div class="respons">
    <p class="respV">Sláva Otci i&nbsp;Synu i&nbsp;Duchu Svatému,</p>
    <p class="respO">jako byla na počátku, i&nbsp;nyní i&nbsp;vždycky a&nbsp;na věky věků. Amen. Aleluja.</p>
</div>


<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->


<p class="redsmall">HYMNUS</p>

<?php include $hymnus; ?>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->

<p class="redsmall">ŽALMY</p> 

<p class="strong"><span class="red">1. ant.</span> <?php echo $ant1[$tyden]; ?></p>
<div class="psalm">
<div class="psalm-name">Žalm 110 (109), 1-5.7</div>
<!----><div class="psalm-subtitle">Mesiáš, vítězný král a kněz</div><!---->
<!----><div class="psalm-idea"><i>On musí kralovat, dokud mu Bůh nepoloží všechny jeho nepřátele k&nbsp;nohám.</i> (1&nbsp;Kor 15, 25)</div><!---->
<p class="verse start first"><sup>1</sup>Hospodin řekl mému Pánu:&nbsp;†</p>
<p class="verse cont">„Seď po mé pravici,&nbsp;*</p>
<p class="verse cont"><!---->dokud nepoložím tvé nepřátele za podnož tvým nohám.“</p>
<p class="verse start"><sup>2</sup>Žezlo moci ti podává Hospodin ze Siónu:&nbsp;*</p>
<p class="verse cont">„Panuj uprostřed svých nepřátel!</p>
<p class="verse start"><sup>3</sup>Ode dne zrození je ti určeno vládnout v&nbsp;posvátném lesku:&nbsp;*</p>
<p class="verse cont last">zplodil jsem tě jako rosu před jitřenkou.“</p>

<p class="verse start"><sup>4</sup>Hospodin přísahal a nebude toho litovat:&nbsp;*</p>
<p class="verse cont">„Ty jsi kněz navěky podle řádu Melchizedechova!“</p>
<p class="verse start"><sup>5</sup>Hospodin je po tvé pravici,&nbsp;*</p>
<p class="verse cont">potře krále v&nbsp;den svého hněvu.</p>

<p class="verse start"><sup>7</sup>Cestou se napije z&nbsp;potoka,&nbsp;*</p>
<p class="verse cont">proto povznese hlavu.</p>
<!----><!---->
<!---->
<p class="verse start first">Sláva Otci i&nbsp;Synu&nbsp;*</p>
<p class="verse cont">i&nbsp;Duchu Svatému,</p>
<p class="verse start">jako byla na počátku, i&nbsp;nyní i&nbsp;vždycky&nbsp;*</p>
<p class="verse cont">a na věky věků. Amen.</p>
<!---->
</div>
<p class="strong"><span class="red">Ant.</span> <?php echo $ant1[$tyden]; ?></p>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->


<p class="strong"><span class="red">2. ant.</span> <?php echo $ant2[$tyden]; ?></p>
<div class="psalm">
    <?php include $zalm[$tyden]; ?>
</div>
<p class="strong"><span class="red">Ant.</span> <?php echo $ant2[$tyden]; ?></p>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->

<p class="strong"><span class="red">3. ant.</span> <?php echo $ant3[$tyden]; ?></p>
<div class="psalm">
<div class="psalm-name">Kantikum</div>
<!----><div class="psalm-subtitle">Beránkova svatba</div><!---->
<p class="bibleref">Srov. Zj 19, 1-2.5-7</p>
<p style="font-style:italic; font-weight:400; text-align: right;">N: anonym (<abbr title="Arcibiskupský seminář, Praha">ArcS</abbr>)</p>
<img src="zj19.webp" alt="Beránkova svatba" style="width: 100%; padding: 1em 0 1em 0;" />

<p class="verse start first">Aleluja. <sup>1</sup>Vítězství, sláva a&nbsp;moc naše<u>mu</u> <i>Bo</i>hu,</p>
<p class="verse start"><span class="red"><!--R.-->O.</span> aleluja.<span class="red"></span></p>
<p class="verse start"><sup>2</sup><!---->neboť jeho soudy jsou pravdivé a&nbsp;<u>spra</u>ve<i>dli</i>vé.</p>
<p class="verse start last"><span class="red"><!--R.-->O.</span> Aleluja. <span class="red"></span>Aleluja.<span class="red"></span></p>

<p class="verse start">Aleluja. <sup>5</sup>Chvalte našeho Boha, všichni, kdo <u>mu</u> sloužíte</p>
<p class="verse start"><span class="red"><!--R.-->O.</span> aleluja.<span class="red"></span></p>
<p class="verse start">a kdo se ho bojíte, ma<u>lí</u> i&nbsp;<i>vel</i>cí!</p>
<p class="verse start last"><span class="red"><!--R.-->O.</span> Aleluja. <span class="red"></span>Aleluja.<span class="red"></span></p>

<p class="verse start">Aleluja. <sup>6</sup>Pán, náš Bůh vševládný, se u<u>jal</u> království!</p>
<p class="verse start"><span class="red"><!--R.-->O.</span> aleluja.<span class="red"></span></p>
<p class="verse start"><sup>7</sup>Radujme se, jásejme a <u>vzdej</u>me <i>mu</i> čest!</p>
<p class="verse start last"><span class="red"><!--R.-->O.</span> Aleluja. <span class="red"></span>Aleluja.<span class="red"></span></p>

<p class="verse start">Aleluja. Neboť nadešla Beránko<u>va</u> <i>sva</i>tba,</p>
<p class="verse start"><span class="red"><!--R.-->O.</span> aleluja.<span class="red"></span></p>
<p class="verse start">jeho nevěsta se <u>při</u>pra<i>vi</i>la.</p>
<p class="verse start last"><span class="red"><!--R.-->O.</span> Aleluja. <span class="red"></span>Aleluja.<span class="red"></span></p>
<!----><!---->
<!---->
<p class="verse start">Aleluja. Sláva Otci i&nbsp;Synu i&nbsp;Du<u>chu</u> Svatému,</p>
<p class="verse start"><span class="red"><!--R.-->O.</span> aleluja.<span class="red"></span></p>
<p class="verse start">jako byla na počátku, i&nbsp;nyní i&nbsp;vždycky a&nbsp;na věky <u>vě</u>ků. Amen.</p>
<p class="verse start last"><span class="red"><!--R.-->O.</span> Aleluja. <span class="red"></span>Aleluja.<span class="red"></span></p>
<!---->
</div>
<p class="strong"><span class="red">Ant.</span> <?php echo $ant3[$tyden]; ?></p>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->

<p class="redsmall">KRÁTKÉ ČTENÍ</p>
<p class="bibleref"><?php echo $cteni[0]; ?></p>
<p><i><?php echo $cteni[1]; ?></i></p>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->

<p class="redsmall">ZPĚV PO KRÁTKÉM ČTENÍ</p>

<div class="respons">
    <p style="font-style:italic; font-weight:400; text-align: right;">N: J. Gałuszka OP; T: Bodnár OP (<abbr title="Koinonia, 2016">Koi</abbr>&nbsp;90a)</p>
<img src="resp-O_Boze.webp" alt="Responsorium" style="width: 100%; padding: 1em 0 1em 0;" />

<p>Ó, Bože, světlo naše, je důstojné Tě chválit, Otce, Syna i&nbsp;Ducha Svatého.<br />
Ó, Bože, světlo naše, celý vesmír se Ti klaní, Otci, Synu i&nbsp;Duchu Svatému.</p>

</div>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->


<p><span class="redsmall">KANTIKUM PANNY MARIE</span></p>

<p class="strong"><span class="red">Antifona ke kantiku Panny Marie:</span> <?php echo $antPM; ?></p>

<p style="font-style:italic; font-weight:400; text-align: right;">T: paraf. Magnificat; N:&nbsp;roráty, 16. století (<abbr title="Kancionál">K</abbr>&nbsp;813B)</p>
<img src="813B-jag.webp" alt="Velebí má duše" style="width: 100%; padding: 1em 0 1em 0;" />
<div class="hymn">

    <p class="first"><span class="red">1.</span> Velebí má duše s&nbsp;jásotem, radostí</p>
<p>Pána věčné spásy, který dnes z výsosti</p>
<p>pohlédl k&nbsp;své dívce</p>
<p class="last">pokorného srdce v lásce a milosti.</p>

<p><span class="red">2.</span> Již od této chvíle zástupy národů</p>
<p>v neustálé chvále po světa obvodu</p>
<p>slaviti mě budou,</p>
<p class="last">dívku Páně chudou, v&nbsp;radostném závodu.</p>

<p><span class="red">3.</span> Veliké mi věci Hospodin učinil,</p>
<p>Pán můj nejvýš svatý ve mně si zalíbil.</p>
<p>Duši bohabojné</p>
<p class="last">dary nebes hojné od věků připravil.</p>

<p><span class="red">4.</span> Ramenem své moci on pyšné rozptýlil,</p>
<p>sesadil i mocné, pokorné povýšil.</p>
<p>Sytí všechny lačné,</p>
<p class="last">bohaté a pyšné s prázdnou pryč propustil.</p>

<p><span class="red">5.</span> V lásce své se ujal národa svatého,</p>
<p>pamětliv je slibu praotcům daného,</p>
<p>že z Judova rodu</p>
<p class="last">přijde spása lidu od Boha věčného.</p>

</div>
<p class="strong"><span class="red">Ant.</span> <?php echo $antPM; ?></p>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->


<p class="redsmall">PROSBY</p>

<!--ZVOLANIA:begin--><span class="red" style="font-size: 14px;">pro díky: <i style="color: #1a1a1a;">Díky tobě, Pane.</i><br />
pro chvály: <i style="color: #1a1a1a;">Chvála tobě, Pane.</i><br /> 
pro prosby/přímluvy: <i style="color: #1a1a1a;">Prosíme tě, vyslyš nás.</i></span>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->

<p class="redsmall">MODLITBA PÁNĚ</p>
<p class="strong">Otče náš, jenž jsi na nebesích,<br />
    posvěť se jméno tvé.<br />
    Přijď království tvé.<br />
    Buď vůle tvá jako v&nbsp;nebi, tak i&nbsp;na zemi.<br />
    Chléb náš vezdejší dej nám dnes.<br />
    A&nbsp;odpusť nám naše viny,<br />
    jako i&nbsp;my odpouštíme našim viníkům.<br />
    A&nbsp;neuveď nás v&nbsp;pokušení,<br />
    ale zbav nás od zlého.<br />
    Neboť tvé je království i&nbsp;moc i&nbsp;sláva navěky.</p>

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->

<p class="redsmall">MODLITBA</p>
<p class="strong"><?php echo $modlitba; ?></p>

<!----><!---->

<!--tts:section:begin-->
<div class="tts_section"></div>
<!--tts:section:end-->

<p class="redsmall">SALVE REGINA</p>
<p style="font-style:italic; font-weight:400; text-align: right;">Zdrávas, Královno; T:&nbsp;asi Heřman z&nbsp;Reichenau, 11. století; N:&nbsp;chorál (<abbr title="Mešní zpěvy, Praha, 1990">MZ</abbr>&nbsp;1001)</p>
<img src="salve_regina.webp" alt="Salve Regina" style="width: 100%; padding: 1em 0 1em 0;" />
<div class="hymn">

<p class="first">Salve, Regína, <span class="red">*</span> mater misericórdiæ,</p>
<p>vita dulcédo et spes nostra, salve.</p>
<p>Ad te clamámus, éxules, fílii Hevæ.</p>
<p>Ad te suspirámus, geméntes et flentes in hac lacrimárum valle.</p>
<p>Eia ergo, advocáta nostra, illos tuos misericórdes óculos ad nos convérte.</p>
<p>Et Iesum, benedíctum fructum ventris tui, nobis post hoc exílium osténde.</p>
<p>O&nbsp;clemens, o&nbsp;pia, o&nbsp;dulcis Virgo María.</p>


</div>

</div>


</body></html>