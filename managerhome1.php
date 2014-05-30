<?php
require_once('connection.php');
?>
<html>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/gif" 
      href="icon 2.gif">
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="template.css" rel="stylesheet" type="text/css">
<style>
#form td
{
font-family:Cambria;
size:12px;
}
#report
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
widtd:100%;
border-collapse:collapse;
}
#report th, #report td 
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
text-align:center;
}
#report td 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#A7C942;
color:#ffffff;
text-align:center;
}
#report tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}
</style>
</head>
<body bgcolor="#333333">
<div class="page">
<div class="up">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="kogo 9.png">
</div>
<div class="bottom" style="height:550px;">
 <div id="cssmenu">
  <ul>
   <li><a href='staffhome.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Event&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Event&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Artist&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Artist&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Artist&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Band&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Band&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Band&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vendor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='addvendor.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='searchvendor.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Search Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='viewvendors.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;View Vendors&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vendor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
 </ul>
 </div>
 <div class="ex" style="margin-left:250px;width:500px;float:left">
  <div class="heading">
   &nbsp;&nbsp;<b>Have to approve Events</b>
   </div>
   <table id="form" cellpadding="8" border="0">
   <?php
   $mid=$_SESSION['mid'];
   $result=mysql_query("select * from concert where status='created' and manager_id='$mid'");
   while($row=mysql_fetch_row($result))
   {
	?>
	 <tr><td>
	 <a href="managerapproval.php?concert=<?php echo $row[0]; ?>" >
	 <?php 
	 echo $row[8]; 
	 echo " ";
	 echo $row[1];
	 echo " ";
	 echo $row[2];
	 echo " ";
	 echo $row[3];
	 echo " ";
	 ?>
	 </a></td></tr>
	<?php
	}
  ?>
   
</div>
</div>
</div>
</body>
</html>