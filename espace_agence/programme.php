<?php

	require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <meta property="og:url"content="http://agences-ouvertes.com/programme.php" />
    <meta property="og:type"content="website" />
    <meta property="og:title"content="Journée Agences Ouvertes 2016" />
    <meta property="og:description"content="#JAO2016 : une journée à part le mardi 22 mars 2016 dans près de 80 agences-conseils en communication à Paris, en région et dans les DOM-TOM. Programme & info pour s’inscrire : www.agences-ouvertes" />
    <meta property="og:image"content="http://agences-ouvertes.com/img/Post_FP_JAO2016.jpg" />
    <meta property="og:image:width" content="630" />
	<meta property="og:image:height" content="315" />

    <title>JAO2016</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet"/>
    <link href="css/font-awesome.css" rel="stylesheet" />
    
    <script language="javascript" src="js/list.js" type="text/javascript"></script>
    <script language="javascript" src="js/filtres/type.js" type="text/javascript"></script>
    <script language="javascript" src="js/filtres/zone.js" type="text/javascript"></script>
    <script language="javascript" src="js/filtres/malvoyant.js" type="text/javascript"></script>
    <script language="javascript" src="js/filtres/malentendant.js" type="text/javascript"></script>
    <script language="javascript" src="js/filtres/mobilite.js" type="text/javascript"></script>
    <script language="javascript" src="js/filtres/all.js" type="text/javascript"></script>
	 <script language="javascript" src="js/popup.js" type="text/javascript"></script>
    
    <script>
    
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
    
    </script>
    
    
   <!-- <script type=”text/javascript” language=”JavaScript”>
		
		function mySetCookie(c_name,value,expiredays){
			var exdate=new Date()exdate.setDate(exdate.getDate()+expiredays)
			document.cookie=c_name+ “=” +escape(value)+
			((expiredays==null) ? “” : “;expires=”+exdate.toGMTString())
			}
			
			function myGetCookie(c_name)
			{
			if (document.cookie.length>0)
			  {
			  c_start=document.cookie.indexOf(c_name + “=”)
			  if (c_start!=-1)
				{
				c_start=c_start + c_name.length+1
				c_end=document.cookie.indexOf(“;”,c_start)
				if (c_end==-1) c_end=document.cookie.length
				return unescape(document.cookie.substring(c_start,c_end))
				}
			  }
			return “”
			}

		
		
		function showPopupOnce() {
		   var hasSeenPopup = myGetCookie(“has_seen_popup”);
		  if (hasSeenPopup == null || hasSeenPopup == “”){
			 // the user has never seen the popup, so show him!
			window.open(“http://mywebsite.com/popup.html“, “myPopupWindow”);
		   }
		
		   // either way, set the cookie so the user will never see the window again
		   mySetCookie(“has_seen_popup”, “true”, 365); // 365 days = 1 year
		}

	</script>-->
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!--<body onLoad=”showPopupOnce();”>-->








<?php 

	

?>











<!-- Save for Web Slices (MAKET_HOME_JAO.psd) -->
<section class="menu_wide">
<table id="Tableau_01" width="1920" height="1081" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="33">
			<img src="images/MAKET_HOME_JAO_01.jpg" width="1920" height="314" alt=""></td>
	</tr>
	<tr>
		<td colspan="33">
			<a href="en_bref.php"><img src="images/MAKET_HOME_JAO_02.jpg" width="1920" height="57" alt=""></a></td>
	</tr>
	<tr>
		<td colspan="33">
			<img src="images/MAKET_HOME_JAO_04.jpg" width="1920" height="74" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/MAKET_HOME_JAO_05.jpg" width="84" height="97" alt=""></td>
		<td colspan="3" bgcolor="#fff">
			<a href="#ancre"><button type="button" name="Workshop" value="Workshop" class="workshop" onClick="show_type(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_07.jpg" width="24" height="97" alt=""></td>
		<td colspan="3" bgcolor="#fff">
			<a href="#ancre"><button type="button" name="Rencontre" value="Rencontre" class="rencontre" onClick="show_type(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_09.jpg" width="22" height="97" alt=""></td>
		<td colspan="2" bgcolor="#fff">
			<a href="#ancre"><button type="button" name="Exposition" value="Exposition" class="exposition" onClick="show_type(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_11.jpg" width="20" height="97" alt=""></td>
		<td colspan="2" bgcolor="#fff">
			<a href="#ancre"><button type="button" name="Concours" value="Concours" class="concours" onClick="show_type(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_13.jpg" width="20" height="97" alt=""></td>
		<td colspan="2" bgcolor="#fff">
			<a href="#ancre"><button type="button" name="Conférence" value="Conférence" class="conference" onClick="show_type(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_15.jpg" width="20" height="97" alt=""></td>
		<td colspan="2" bgcolor="#fff">
			<a href="#ancre"><button type="button" name="Projection" value="Projection" class="projection" onClick="show_type(this.value)"></button></a></td>
		<td colspan="8" rowspan="2">
			<img src="images/MAKET_HOME_JAO_17.jpg" width="1133" height="97" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/MAKET_HOME_JAO_18.jpg" width="99" height="22" alt=""></td>
		<td colspan="3">
			<img src="images/MAKET_HOME_JAO_19.jpg" width="98" height="22" alt=""></td>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_20.jpg" width="100" height="22" alt=""></td>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_21.jpg" width="100" height="22" alt=""></td>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_22.jpg" width="100" height="22" alt=""></td>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_23.jpg" width="100" height="22" alt=""></td>
	</tr>
	<tr>
		<td colspan="33">
			<img src="images/MAKET_HOME_JAO_24.jpg" width="1920" height="79" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/MAKET_HOME_JAO_25.jpg" width="87" height="75" alt=""></td>
		<td colspan="2" bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="Paris/RP" value="Paris/RP" class="paris" onClick="show_zone(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_27.jpg" width="23" height="99" alt=""></td>
		<td colspan="3" bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="Bordeaux" value="Bordeaux" class="bordeaux" onClick="show_zone(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_29.jpg" width="23" height="99" alt=""></td>
		<td colspan="2" bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="Lille" value="Lille" class="lille" onClick="show_zone(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_31.jpg" width="23" height="99" alt=""></td>
		<td colspan="2" bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="Lyon" value="Lyon" class="lyon" onClick="show_zone(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_33.jpg" width="24" height="99" alt=""></td>
		<td colspan="2" bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="Montpellier" value="Montpellier" class="montpellier" onClick="show_zone(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_35.jpg" width="23" height="99" alt=""></td>
		<td colspan="2" bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="Nantes" value="Nantes" class="nantes" onClick="show_zone(this.value)"></button></a></td>
		<td rowspan="2">
			<img src="images/MAKET_HOME_JAO_37.jpg" width="23" height="99" alt=""></td>
		<td bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="Strasbourg" value="Strasbourg" class="strasbourg" onClick="show_zone(this.value)"></button></a></td>
		<td rowspan="2">
			<img src="images/MAKET_HOME_JAO_39.jpg" width="23" height="99" alt=""></td>
		<td bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="Toulouse" value="Toulouse" class="toulouse" onClick="show_zone(this.value)"></button></a></td>
		<td rowspan="2">
			<img src="images/MAKET_HOME_JAO_41.jpg" width="23" height="99" alt=""></td>
		<td bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="Outre-Mer" value="Outre-Mer" class="outre_mer" onClick="show_zone(this.value)"></button></a></td>
		<td rowspan="2">
			<img src="images/MAKET_HOME_JAO_43.jpg" width="748" height="99" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_44.jpg" width="86" height="24" alt=""></td>
		<td colspan="3">
			<img src="images/MAKET_HOME_JAO_45.jpg" width="101" height="24" alt=""></td>
		<td colspan="3">
			<img src="images/MAKET_HOME_JAO_46.jpg" width="100" height="24" alt=""></td>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_47.jpg" width="100" height="24" alt=""></td>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_48.jpg" width="100" height="24" alt=""></td>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_49.jpg" width="100" height="24" alt=""></td>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_50.jpg" width="100" height="24" alt=""></td>
		<td>
			<img src="images/MAKET_HOME_JAO_51.jpg" width="100" height="24" alt=""></td>
		<td>
			<img src="images/MAKET_HOME_JAO_52.jpg" width="100" height="24" alt=""></td>
		<td>
			<img src="images/MAKET_HOME_JAO_53.jpg" width="100" height="24" alt=""></td>
	</tr>
	<tr>
		<td colspan="33">
			<img src="images/MAKET_HOME_JAO_54.jpg" width="1920" height="82" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_55.jpg" width="86" height="99" alt=""></td>
		<td colspan="3" bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="oui" value="oui" class="malvoyant" onClick="show_handicap_malvoyant(this.value)"></button></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/MAKET_HOME_JAO_57.jpg" width="23" height="99" alt=""></td>
		<td colspan="3" bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="oui" value="oui" class="malentendant" onClick="show_handicap_malentendant(this.value)"></button></a></td>
		<td rowspan="2">
			<img src="images/MAKET_HOME_JAO_59.jpg" width="17" height="99" alt=""></td>
		<td colspan="2" bgcolor="#f4fcfb">
			<a href="#ancre"><button type="button" name="oui" value="oui" class="mobilite" onClick="show_handicap_mobilite(this.value)"></button></a></td>
		<td colspan="20" rowspan="2">
			<img src="images/MAKET_HOME_JAO_61.jpg" width="1493" height="99" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/MAKET_HOME_JAO_62.jpg" width="101" height="24" alt=""></td>
		<td colspan="3">
			<img src="images/MAKET_HOME_JAO_63.jpg" width="100" height="24" alt=""></td>
		<td colspan="2">
			<img src="images/MAKET_HOME_JAO_64.jpg" width="100" height="24" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/MAKET_HOME_JAO_65.jpg" width="84" height="66" alt=""></td>
		<td colspan="7">
			<a href="#ancre"><button type="button" name="admin" value="non" class="all_wide" onClick="show_all(this.value)"></button></a></td>
		<td colspan="25">
			<img src="images/MAKET_HOME_JAO_67.jpg" width="1637" height="67" alt=""></td>
	</tr>
	<tr>
		<td colspan="33">
			<img src="images/MAKET_HOME_JAO_69.jpg" width="1920" height="112" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="84" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="96" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="20" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="3" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="73" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="22" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="5" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="17" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="6" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="94" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="6" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="14" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="9" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="91" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="9" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="11" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="87" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="7" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="16" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="84" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="16" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="23" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="100" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="23" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="100" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="23" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="100" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="748" height="1" alt=""></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</section>

<section class="menu_little">
	<hr color="rgba(255,255,255,0.00)">
	<img src="img/header.jpg" alt="" width="100%"> 
    
    
    
    <div class="container">
			<div class="row">
            
			<hr color="rgba(255,255,255,0.00)">
			   
			   <div class="col-lg-12">
					<div style="background-color: #000000; border-top-left-radius:10px; border-top-right-radius:10px; padding-top:10px; padding-bottom:10px; padding-left:15px;"><img src="img/programmez_votre_journee.png" alt="" width="50%"></div>
			   </div>
			   
			   
			   <div class="col-lg-12">
					<table>
						<tbody>
							<tr>
								<tr bgcolor="#f4fcfb"><td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding-right:5px;"> <div style="border:solid 0.5px; width:130px; padding-left:5px; padding-top:5px; padding-bottom:5px;"><img src="img/event.png" alt="" ></div></td></tr>
									<form>
									
                                        <td bgcolor="#f4fcfb" style="padding-left:15px; padding-bottom:15px;" class="bloc_menu_little">
                                            <button type="button" name="Workshop" value="Workshop" class="workshop" onClick="show_type(this.value)"></button>
                                            <button type="button" name="Rencontre" value="Rencontre" class="rencontre" onClick="show_type(this.value)"></button>
                                            <button type="button" name="Projection" value="Projection" class="projection" onClick="show_type(this.value)"></button>
                                        
                                            <button type="button" name="Exposition" value="Exposition" class="exposition" onClick="show_type(this.value)"></button>
                                            <button type="button" name="Concours" value="Concours" class="concours" onClick="show_type(this.value)"></button>
                                            <button type="button" name="Conférence" value="Conférence" class="conference" onClick="show_type(this.value)"></button>
                                        </td>
										
									</form>
                                    
								</tr>
								
								<tr height="10px"></tr>
								
								<tr>
									<tr bgcolor="#f4fcfb"><td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding-right:5px;"> <div style="border:solid 0.5px; width:70px; padding-left:5px; padding-top:5px; padding-bottom:5px;"><img src="img/lieux.png" alt="" ></div></td></tr>
									<form>
									
										<td bgcolor="#f4fcfb" style="padding-left:15px; padding-bottom:15px; padding-right:2px;">
                                            <button type="button" name="Paris/RP" value="Paris/RP" class="paris" onClick="show_zone(this.value)"></button>
                                            <button type="button" name="Bordeaux" value="Bordeaux" class="bordeaux" onClick="show_zone(this.value)"></button>
                                            <button type="button" name="Lille" value="Lille" class="lille" onClick="show_zone(this.value)"></button>
                                            <button type="button" name="Lyon" value="Lyon" class="lyon" onClick="show_zone(this.value)"></button>
                                            <button type="button" name="Montpellier" value="Montpellier" class="montpellier" onClick="show_zone(this.value)"></button>
                                            <button type="button" name="Nantes" value="Nantes" class="nantes" onClick="show_zone(this.value)"></button>
                                            <button type="button" name="Strasbourg" value="Strasbourg" class="strasbourg" onClick="show_zone(this.value)"></button>
                                            <button type="button" name="Toulouse" value="Toulouse" class="toulouse" onClick="show_zone(this.value)"></button>
                                            <button type="button" name="Outre-Mer" value="Outre-Mer" class="outre_mer" onClick="show_zone(this.value)"></button>
										</td>
									
									</form>
								</tr>
								
                                <tr height="10px"></tr>
								
								<tr>
                                <tr bgcolor="#f4fcfb"><td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding-right:5px;"> <div style="border:solid 0.5px; width:190px; padding-left:5px; padding-top:5px; padding-bottom:5px;"><img src="img/handi_accueillant.png" alt="" ></div></td></tr>
									<form>
										<td bgcolor="#f4fcfb" style="padding-left:15px; padding-bottom:15px;">
                                            <button type="button" name="oui" value="oui" class="malvoyant" onClick="show_handicap_malvoyant(this.value)"></button>
                                            <button type="button" name="oui" value="oui" class="malentendant" onClick="show_handicap_malentendant(this.value)"></button>
                                            <button type="button" name="oui" value="oui" class="mobilite" onClick="show_handicap_mobilite(this.value)"></button>
           								 </td>
									</form>
								</tr>
                                
                                <tr height="10px"></tr>
                                
                                <tr>
									<form>
										<td bgcolor="#f4fcfb" style="padding-left:15px; padding-top:10px; padding-bottom:10px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;">
                                            <div style="border:solid 0.5px; width:200px; padding-left:5px; padding-top:5px; padding-bottom:5px;"><button type="button" name="admin" value="non" class="all" onClick="show_all(this.value)"></button></div>
           								 </td>
									</form>
								</tr>
								
								
								
							
						</tbody>	
					</table>
				</div>
                </div>
                

</section>


















<?php
$nav = include('nav.php');
 /*echo $_COOKIE["auth"];*/ 
 
 
  /*include("config.php");
 $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
 $sql->execute(array($_SESSION['user']));
 while($r=$sql->fetch()){
 }*/
	
	//include("header.php");
	
	
	
	
	
	
	echo '
	<section class="index">
		<div class="container">
		
			<!--<div class="row">
			
			   
			   <div class="col-lg-12">
					<h1 class="page-header">Programmez votre journée</h1>
			   </div>
			   
			   
			   <div class="col-lg-12">
					<table>
						<tbody>
							<tr>
								<td>
									<form>
									
									<p>
										<button type="button" name="Workshop" value="Workshop" class="workshop" onClick="show_type(this.value)"></button>
										<button type="button" name="Conférence" value="Conférence" class="conference" onClick="show_type(this.value)"></button>
										<button type="button" name="Exposition" value="Exposition" class="exposition" onClick="show_type(this.value)"></button>
									</p>
									
									<p>
										<button type="button" name="Concours" value="Concours" class="concours" onClick="show_type(this.value)"></button>
										<button type="button" name="Concours" value="Concours" class="concours" onClick="show_type(this.value)"></button>
										<button type="button" name="Rencontre" value="Rencontre" class="rencontre" onClick="show_type(this.value)"></button>
									</p>
										
									</form>
								</td>
								
								<td width="100px"></td>
								
								<td>
									
									<form>
									
										<p>
											<button type="button" name="Paris/RP" value="Paris/RP" class="paris" onClick="show_zone(this.value)"></button>
											<button type="button" name="Région" value="Bordeaux" value="Toulouse" value="Strasbourg" class="region" onClick="show_zone(this.value)"></button>
											<button type="button" name="Outre-Mer" value="Outre-Mer" class="outre_mer" onClick="show_zone(this.value)"></button>
										</p>
									
									</form>-->
								
								
								
								
									<!--<form method="post">
										<button type="submit" name="zone" value="Paris/RP" class="none">Paris/RP</button>
										<button type="submit" name="zone" value="Bordeaux" class="none">Bordeaux</button>
										<button type="submit" name="zone" value="Toulouse" class="none">Toulouse</button>
										<button type="submit" name="zone" value="Outre-Mer" class="none">Outre-Mer</button>
									</form>-->
								<!--</td>
								
								<td width="100px"></td>
								
							</tr>
						</tbody>	
					</table>
				</div>-->
				
				
				<span id="ancre"></span>
				
				<br>
				
				<div id="txtHint"><b></b></div>
				
				<div>
				</section>
				
				
				
				
				<section class="index">
					<div class="container">
					
						<div class="row">
						
						   <div class="col-lg-12">
								<h1 class="page-header">Agences participantes</h1>
						   </div>

				';
				   
				   
				   
				   $sql=$dbh->prepare("SELECT * FROM users WHERE admin='non' AND zone='Paris/RP' ORDER BY nom_agence ASC");
				   $sql->execute();
				   $r=$sql->fetchAll();	
				   
				   	echo'   
					
					<div class="col-lg-12">
						 <h4 class="page-header">Paris et région parisienne</h4>
					</div>';
						
				   for($i=0; $i<$sql->rowCount(); $i++){
					
					if($r[$i]['zone']=='Paris/RP' AND $r[$i]['admin']=='non'){	
					echo'   
					<form method="post" action="programme">
							<button class="col-lg-3 col-md-4 col-xs-6 thumb" name="submit">
								<span class="thumbnail">							
									<input type="hidden" name="nom_agence" value="'.$r[$i]['nom_agence'].'"/>
									<input type="hidden" name="id" value="'.$r[$i]['id'].'"/>
									<img class="img-responsive" src="uploads/'.$r[$i]['logo_agence'].'" width="400" height="300" alt="'.$r[$i]['nom_agence'].'">
								</span>						
							</button>
						</form>';
					  }
				   }
				   echo'
				   </section>
				   
				   	<section class="index">
					<div class="container">
					
						<div class="row">
						   
				   	';
					
					   
				   $sql=$dbh->prepare("SELECT * FROM users WHERE admin='non' AND zone !='Paris/RP' OR zone != 'Outre-Mer' ORDER BY nom_agence ASC ");
				   $sql->execute();
				   $r=$sql->fetchAll();
	
					echo'   
					<div class="col-lg-12">
						 <h4 class="page-header">Région</h4>
					</div>';
					
				   for($i=0; $i<$sql->rowCount(); $i++){
					if($r[$i]['zone']!='Paris/RP' AND $r[$i]['zone']!='Outre-Mer' AND $r[$i]['admin']=='non'){	
					echo'   
					
					<form method="post" action="fiche_agence.php">
							<button class="col-lg-3 col-md-4 col-xs-6 thumb" name="submit">
								<span class="thumbnail">							
									<input type="hidden" name="nom_agence" value="'.$r[$i]['nom_agence'].'"/>
									<input type="hidden" name="id" value="'.$r[$i]['id'].'"/>
									<img class="img-responsive" src="uploads/'.$r[$i]['logo_agence'].'" width="400" height="300" alt="'.$r[$i]['nom_agence'].'">
								</span>						
							</button>
						</form>';
					  }
				   }
				   echo'
				   
				   </section>
				   
				   	<section class="index">
					<div class="container">
					
						<div class="row">
						   
				   	';
				   
				   echo'
					<div class="col-lg-12">
						 <h4 class="page-header">Outre-Mer</h4>
					</div>';
					
					$sql=$dbh->prepare("SELECT * FROM users WHERE zone ='Outre-Mer' ORDER BY nom_agence ASC ");
				   $sql->execute();
				   $r=$sql->fetchAll();
						
				   for($i=0; $i<$sql->rowCount(); $i++){
					if($r[$i]['zone']=='Outre-Mer'){
					echo'   
					   <form method="post" action="fiche_agence	.php">
							<button class="col-lg-3 col-md-4 col-xs-6 thumb" name="submit">
								<span class="thumbnail">							
									<input type="hidden" name="nom_agence" value="'.$r[$i]['nom_agence'].'"/>
									<input type="hidden" name="id" value="'.$r[$i]['id'].'"/>
									<input type="hidden" name="user_id" value="'.$r[$i]['user_id'].'"/>
									<input type="hidden" name="event_id" value="'.$r[$i]['event_id'].'"/>
									<img class="img-responsive" src="uploads/'.$r[$i]['logo_agence'].'" width="400" height="300" alt="'.$r[$i]['nom_agence'].'">
								</span>						
							</button>
						</form>';
					}
				}
				
				   
					
				
				
					echo '
					</section>
				</div>
			</div>
    
	
	';

?>

        <hr>
      
     <section>  
     <div class="container">
        <div class="row">

            <!--<div class="col-lg-12">
                <h1 class="page-header">Fil d'actualités</h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>-->
                        
        </div>
    </div>
    </section>
	<!-- /.container -->

    <!-- Footer -->
    <?php $footer = include("footer.php"); ?>    
    
    
  <!-- <div class="container">
  <h2>Popup</h2>
   Trigger the modal with a button 
  <button type="button" class="btn btn-info btn-lg none" data-toggle="modal" data-target="#myModal">Ouvrir</button>-->

  <!-- Modal 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">-->
    
      <!-- Modal content
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close none" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         	<img src="img/GIF_Pre-Home_JAO.gif" alt="JAO" width="99%" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default none" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>-->
    
 <?php   
$cookie = "dewplayer";
if (isset($_COOKIE[$cookie])) {
	?>

 <script language="javascript" src="js/popup.js" type="text/javascript"></script>
<?php
	
} else { setcookie($cookie, '1') ;
}
?>
    


  <!-- Modal Appli -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close none" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         	
			<img src="img/JAO2016.jpg" alt="JAO" width="99%" />
			Géolocalisation, agenda, liste des agences...<br/>
			Tout pour réussir votre ‪#‎JAO2016‬ en 1 appli ici : <a href="http://bit.ly/AppliJAO2016" target="_blank">iOS</a> / <a href="https://play.google.com/store/apps/details?id=com.odysys.aacc" target="_blank">Androïd</a>
</a>

			
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default none" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    
           
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	
</body>
</html>