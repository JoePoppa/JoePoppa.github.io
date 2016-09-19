<?php
require_once("debug/fb.php4");
$xml=simplexml_load_file("xml/events_xml.xml");
$eventCount=0;
$shortEvents=$longEvents="";
foreach($xml->event as $event){
	if(!isset($event['exp_date']) or strtotime($event['exp_date'])>=strtotime("today")){
		// This code already has the auto expire feature built.  Just add the exp_date attribute to the event elements in the XML file to make it work.
		$thisBlock="<div class=\"eventblock\"><strong>".$event->dates.":</strong> ".$event->maintext;
		$longEvents.=$thisBlock.$event->extratext;
		if($event->link!=""){
			$link=$event->link;
			$longEvents.="&nbsp;<a href=\"$link\"";
			$longEvents.=$link['new_win']=="true" ? " target=\"_blank\"" : "";
			$longEvents.=">".$link['link_display']."</a>";
		}
		$longEvents.="</div>\n";
		if($eventCount<3){
			$shortEvents.=$thisBlock."</div>\n";
		}
		$eventCount++;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/master.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- InstanceBeginEditable name="doctitle" -->
<title>HHM Insurors</title>
<!-- InstanceEndEditable -->
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="scripts/scripts.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- InstanceParam name="HomeBoxes" type="boolean" value="false" -->
</head>
<body>
<div id="container"><img src="images/header.jpg" width="972" height="174" border="0" usemap="#Map" />
	<?php require_once("inc/nav.php"); ?>
	<div id="contact">214 Pleasant Drive&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suite A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aliquippa, PA 15001&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1-866-339-3920</div>
	<table id="content" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td><img src="images/spacer.gif" width="703" height="7" /></td>
			<td><img src="images/spacer.gif" width="269" height="7" /></td>
		</tr>
		<tr>
			<td><!-- InstanceBeginEditable name="MainContent" --><img src="images/gen_amb.jpg" width="703" height="287" /> <img src="images/successbanner.jpg" width="703" height="43" />
				<h2>Savings Examples</h2>
				<div class="lined">
					<p>1. EMS in Lancaster County saved $15,000.</p>
					<p>2. EMS in Allegheny County saved $10,000.</p>
					<p>3. EMS in Beaver County saved $25,000.</p>
					<p>4. EMS in Monroe County saved $35,000.</p>
					<p>5. EMS in Cambria County saved $7,500.</p>
					<p>6. EMS Service in Fayette County saved $15,000.</p>
					<p>7. EMS Service in Luzerne County $13,000.</p>
					<p>8. EMS Service in Butler County $20,000.</p>
				</div>
				<!-- InstanceEndEditable --></td>
			<td><script type="text/javascript">
			<!--
			document.write(testimonial);
			//-->
			</script>
				<noscript>
				<!-- InstanceBeginEditable name="DefaultTestimonial" --><img src="images/testimonials/t4.jpg" width="268" /><!-- InstanceEndEditable -->
				</noscript>
				<br />
				<!-- InstanceBeginEditable name="RightColumn" -->
				<div id="gen_events">
					<div id="events">
	<?php echo $shortEvents; ?>
</div>
				</div>
				<div id="sidebar_factsheet">
					<?php require_once("inc/factsheets.php"); ?>
				</div>
				<img src="images/pamap.jpg" width="268" height="259" border="0" usemap="#Map3" />
				<map name="Map3" id="Map3">
					<area shape="rect" coords="47,82,233,187" href="clients.php" title="Clients" />
				</map>
				<!-- InstanceEndEditable --></td>
		</tr>
	</table>
	
	<div id="bottomBorder">&nbsp;</div>
</div>
<div id="footShadow"><img src="images/footer_bg.png" width="984" height="6" /></div>
<map name="Map" id="Map">
	<area shape="rect" coords="689,7,824,47" href="#" target="_blank" />
	<area shape="rect" coords="826,7,962,47" href="https://www.hhminsurance.com/" target="_blank" />
</map>
<map name="Map2" id="Map2">
	<area shape="rect" coords="3,31,265,161" href="http://www.workpartners.com/" target="_blank" />
</map>
</body>
<!-- InstanceEnd --></html>
