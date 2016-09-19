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
			<td><!-- InstanceBeginEditable name="MainContent" --><img src="images/gen_amb.jpg" width="703" height="287" /> <img src="images/clientsbanner.jpg" width="703" height="43" /> <img src="images/paclients.jpg" width="279" height="181" />
				<h2 style="margin-bottom:4px;">Payroll Insured by County Through HHM:</h2>
				<table border="0" cellpadding="0" cellspacing="0" id="clientTable">
					<tr><td><img src="images/spacer.gif" width="245" height="1" /></td><td><img src="images/spacer.gif" width="1" height="1" /></td></tr>
					<tr>
						<td>Allegheny County</td>
						<td class="numbers">$8,878,696</td>
					</tr>
					<tr>
						<td>Armstrong County</td>
						<td>$390,000</td>
					</tr>
					<tr>
						<td>Monroe County</td>
						<td>$675,000</td>
					</tr>
					<tr>
						<td>Cambria County</td>
						<td>$2,904,905</td>
					</tr>
					<tr>
						<td>Lackawanna County</td>
						<td>$750,000</td>
					</tr>
					<tr>
						<td>Butler County</td>
						<td>$518,403</td>
					</tr>
					<tr>
						<td>Lancaster County</td>
						<td>$5,280,496</td>
					</tr>
					<tr>
						<td>Cameron County</td>
						<td>$224,962</td>
					</tr>
					<tr>
						<td>Fayette County</td>
						<td>$3,000,000</td>
					</tr>
					<tr>
						<td>Lawrence County</td>
						<td>$850,000</td>
					</tr>
					<tr>
						<td>Dauphin County</td>
						<td>$2,026,169</td>
					</tr>
					<tr>
						<td>Wayne County</td>
						<td>$725,000</td>
					</tr>
					<tr>
						<td>Elk County</td>
						<td>$220,000</td>
					</tr>
					<tr>
						<td>Chester County</td>
						<td>$261,936</td>
					</tr>
					<tr>
						<td>Luzerne County</td>
						<td>$360,851</td>
					</tr>
					<tr>
						<td>Bradford County</td>
						<td>$757,000</td>
					</tr>
					<tr>
						<td>Bucks County</td>
						<td>$449,350</td>
					</tr>
					<tr>
						<td>Perry County</td>
						<td>$169,856</td>
					</tr>
					<tr>
						<td>Indiana County</td>
						<td>$625,000</td>
					</tr>
					<tr>
						<td>Washington County</td>
						<td>$1,975,675</td>
					</tr>
				</table>
				<!-- InstanceEndEditable --></td>
			<td><script type="text/javascript">
			<!--
			document.write(testimonial);
			//-->
			</script>
				<noscript>
				<!-- InstanceBeginEditable name="DefaultTestimonial" --><img src="images/testimonials/t3.jpg" width="268" /><!-- InstanceEndEditable -->
				</noscript>
				<br />
				<!-- InstanceBeginEditable name="RightColumn" -->
				<div id="gen_events">
					<div id="events"> <?php echo $shortEvents; ?> </div>
				</div>
				<div id="sidebar_factsheet">
					<?php require_once("inc/factsheets.php"); ?>
				</div>
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
