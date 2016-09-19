<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/jp_template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Joseph Poppa - Graphic Design - Animation - Interactive Design - Illustration - 3D Modelling</title>
<!-- InstanceEndEditable -->
<script type="text/javascript" src="includes/jquery-1.6.min.js"></script>

<script type="text/javascript" src="includes/cycle_full.js"></script>
<script type="text/javascript"> 
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});

// Tabs & Slideshow:
$j("#ws_tabs div").mouseover(function(){
$j("#ws_yellow_arrow").css({"top" : ($j(this).index()*57.5)+20+"px"}).show();
});
$j("#ws_tabs div").mouseout(function(){
$j("#ws_yellow_arrow").hide();
});
$j("#ws_tabs div").click(function(){
$j("#ws_slideshow").cycle($j(this).index()).cycle("pause");
}); 
</script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="container">
	<div id="header"></div>
		<div id="menu">   
            <ul id="nav">
                <li>
                    <a href="index.html">HOME</a>
                </li>            
                <li>
                    <a href="portfolio.html">PORTFOLIO</a>
                    <ul>
                        <li><a href="port_int_01.html">INTERFACE DESIGN</a></li>            
                        <li><a href="port_email_01.html">E-MAIL DESIGN</a></li>
                        <li><a href="port_modeling_01.html">3D MODELING & ANIMATION</a></li>
                        <li><a href="port_print_01.html">PRINTED DESIGN</a></li>
                        <li><a href="port_other_01.html">OTHER DESIGN</a></li>
                    </ul>
                </li>
                <li>
                    <a href="designer.html">THE DESIGNER</a>
            
                    <ul>
                        <li><a href="Jwpoppa_2011_resume.doc" target="_blank">MY RESUME</a></li>            
                        <li><a href="http://www.linkedin.com/profile/view?id=4352093&trk=tab_pro" target="_blank">LINKED-IN PROFILE</a></li>
                    </ul>
            
                </li>
                <li>
                    <a href="contact.php">CONTACT ME</a>
                </li>
            </ul>          
  		</div>
        <!--END HEADER-->
        
        <div id="body"> 
        
       	  <div id="leftCol"><!-- InstanceBeginEditable name="Left Column" -->
          
          
          <!--BODY ARTICLES OF THE PAGE BELOW LEFT COLUMN-->
          <h1>Contact</h1>
          <h2>A valid email is required for a response.</h2>
          <p>                        
                <table width="550" border="0" align="center" cellpadding="15" cellspacing="1">
                <tr>
                <td><form name="form1" method="post" action="send_contact.php">
                <table width="100%" border="0" cellspacing="1" cellpadding="6">
                <tr>
                <td width="16%">Subject</td>
                <td width="2%">:</td>
                <td width="82%"><input name="subject" type="text" id="subject" size="50"></td>
                </tr>
                <tr>
                <td>Detail</td>
                <td>:</td>
                <td><textarea name="detail" cols="50" rows="20" id="detail"></textarea></td>
                </tr>
                <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" id="name" size="50"></td>
                </tr>
                <tr>
                <td>Email</td>
                <td>:</td>
                <td><input name="customer_mail" type="text" id="customer_mail" size="50"></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
                </tr>
                </table>
                </form>
                </td>
                </tr>
            </table>
 
 
 
 
 


          </p>
          <p>&nbsp;</p>
          
          
          
       	  <!-- InstanceEndEditable --></div>
      <div id="rightCol"><!-- InstanceBeginEditable name="Right Column" -->
      <h2>More About the Designer</h2>
      <p><img src="images/home_me.jpg" alt="Me" width="260" height="140" /></p>
      <p>What better way to research work history and peruse a few references?</p>
      <p><a href="http://www.linkedin.com/profile/view?id=4352093&amp;trk=tab_pro" target="_blank">Visit my Linked-In Profile »</a></p>
      <p>&nbsp;</p>
      
      
      <!-- InstanceEndEditable --></div>    
          
          
<!--FOOTER-->
          <div id="footer">
          	<ul id="footer_text">
                <li>
                    <a href="index.html">HOME</a>
                </li>            
                <li>
                    <a href="portfolio.html">PORTFOLIO</a>
                    <ul>
                        <li><a href="port_int_01.html">INTERFACE DESIGN</a></li>            
                      <li><a href="port_email_01.html">E-MAIL DESIGN</a></li>
                        <li><a href="port_modeling_01.html">3D MODELING</a></li>
                        <li><a href="port_print_01.html">PRINTED DESIGN</a></li>
                        <li><a href="port_other_01.html">OTHER DESIGN</a></li>
                    </ul>
                </li>
                <li>
                    <a href="designer.html">THE DESIGNER</a>
            
                    <ul>
                        <li><a href="Jwpoppa_2011_resume.doc" target="_blank">MY RESUME</a></li>            
                      <li><a href="http://www.linkedin.com/profile/view?id=4352093&trk=tab_pro" target="_blank">LINKED-IN PROFILE</a></li>
                    </ul>
            
                </li>
                <li>
                    <a href="contact.php">CONTACT ME</a>
                </li>
            </ul>        
          </div>
<!--END FOOTER-->          
          
          
        </div>

</div>

</body>
<!-- InstanceEnd --></html>
