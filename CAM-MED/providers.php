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
			<td><!-- InstanceBeginEditable name="MainContent" --><img src="images/gen_amb.jpg" width="703" height="287" /> <img src="images/providersbanner.jpg" width="704" height="43" />
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="images/providers_gr.jpg" width="323" height="283" border="0" usemap="#Map4" />
							<map name="Map4" id="Map4">
								<area shape="rect" coords="18,119,282,251" href="http://www.workpartners.com/" target="_blank" />
							</map></td>
						<td><img src="images/factsheet_gr.jpg" width="262" height="157" />
							<div id="genfax">
								<div id="factsheets">
									<ul>
										<li><a href="pdf/upmcemsmarketing.pdf" target="_blank">_ UPMC EMS marketing</a></li>
										<li><a href="pdf/upmcwcpresentation.pdf" target="_blank">_ UPMC Workers' Comp Presentation</a></li>
									</ul>
								</div>
							</div></td>
					</tr>
				</table>
				<h2 style="border-top-color:#600F28; border-top-style:solid; border-top-width:2px; padding-top:0; margin-top:8px; margin-bottom:0; height:1px;">&nbsp;</h2>
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="images/amerihealth.jpg" width="323" height="161" border="0" /></td>
						<td><img src="images/factsheet_gr_short.jpg" width="262" height="78" />
							<div id="genfax">
								<div id="factsheets">
									<ul>
										<li><a href="pdf/amerihealthems.pdf" target="_blank">_ Amerihealth EMS Marketing</a></li>
										<li><a href="pdf/amerihealthsupplemental.pdf" target="_blank">_ Amerihealth Supplemental App.</a></li>
									</ul>
								</div>
							</div></td>
					</tr>
				</table>
				<h2 style="border-top-color:#600F28; border-top-style:solid; border-top-width:2px; padding-top:16px; margin-top:8px;">Additional Provider Benefits</h2>
				<ul id="providerList">
					<li>Workplace safety awareness</li>
					<li>Return-to-work management</li>
					<li>Program management</li>
					<li>Competitive pricing with flexible pay</li>
					<li>Expert risk/loss control</li>
					<li>Risk control and reduction</li>
					<li>Claims management efficiencies</li>
					<li>Certified Safety Committee Development</li>
					<li>Provider Panel Services</li>
					<li>Cost savings on Pharmacy Benefits, Physical Therapy, And MRI/Trauma/Burn Services</li>
					<li>Nurse Case Managers</li>
					<li>Health Management Services</li>
					<li>On-site Resources</li>
					<li>On-line claims inquiry and reporting systems</li>
					<li>Medical Bill Review</li>
					<li>Trend Analysis</li>
					<li>Accident Investigation</li>
					<li>Absence Management Services</li>
					<li>Insuring businesses since 1939</li>
					<li>Client Connect services</li>
					<li>Independent Analysis/Review</li>
				</ul>
				<!-- InstanceEndEditable --></td>
			<td><script type="text/javascript">
			<!--
			document.write(testimonial);
			//-->
			</script>
				<noscript>
				<!-- InstanceBeginEditable name="DefaultTestimonial" --><img src="images/testimonials/t2.jpg" width="268" /><!-- InstanceEndEditable -->
				</noscript>
				<br />
				<!-- InstanceBeginEditable name="RightColumn" -->
				<div id="gen_events">
					<div id="events"> <?php echo $shortEvents; ?> </div>
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
