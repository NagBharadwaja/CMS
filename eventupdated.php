<?php
session_start();
require_once('connection.php');
$status=$_POST['status'];
$desc=$_POST['desc'];
$cid=$_SESSION['concertid'];
mysql_query("update concert set status='$status' where concert_id='$cid'");
mysql_query("update concert set notes='$desc' where concert_id='$cid'");
?>
<html>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/gif" 
      href="icon 2.gif">

<link href="styles.css" rel="stylesheet" type="text/css">
<link href="template.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<style>
#form td
{
font-family:Cambria;
size:12px;
}
#matter
{
font-family:Cambria;
size:14px;
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
<script>
$(document).ready(function(){
$('#ok').click(function() {
    window.location.href = 'http://students.cs.niu.edu/~cs56712/managerhome.php';
    return false;
});
});
$(document).ready(function(){
$('#update').click(function() {
    window.location.href = 'http://students.cs.niu.edu/~cs56712/managerapproval.php?concert=<?php echo $_SESSION['concertid']; ?>';
    return false;
});
});
</script>



</head>
<body bgcolor="#333333">
<div class="page">
<div class="up">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="kogo 9.png">
</div>
<div class="bottom" style="height:450px;">
 <div id="cssmenu">
  <ul>
   <li><a href='managerhome.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Events&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='assignedevents.php'><span>Assigned Events&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='events_to_approve.php'><span>Events to be approved</span></a></li>
   </ul>
   </li>
   <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
   <li><a href='logout1.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   </li>
 </ul>
 </div>
 <div id="matter">
 <br/>
 <br/>
 <center>
<div><img src="success-tick.png"></div><div>You have successfully updated Concert&nbsp;<?php 
echo $_SESSION['concertname'];
?></div>
<br>
<div class="ex" style="margin-left:225px;width:500px;float:left">
   <div class="heading">
   &nbsp;&nbsp;<b>Concert Details</b>
   </div>
    <table id="form" border="0" align="center">
	<?php
	$result=mysql_query("select * from concert where concert_id='$cid'");
	$row=mysql_fetch_row($result);
	?>
		<tr><td>Name:</td><td><?php echo $row[10]; ?></td></tr>
		<tr><td>Location:</td><td>
		<?php
		echo $row[1];
		?>
		</td></tr>
		<tr><td>Date:</td><td><?php echo $row[2];?></td></tr>
		<tr><td>Time:</td><td><?php echo $row[3];?></td></tr>
		<tr><td>Seating Capacity:</td><td><?php echo $row[5];?></td></tr>
		<tr><td>Description:</td><td><?php echo $row[7];?></td></tr>
		<tr><td>Status:</td><td><? echo $row[4]; ?></td></tr>
		<tr><td></td><td><input type="button" name="ok" id="ok" value="OK"><input type="button" id="update" name="update" value="Edit"></td></tr>
	</table>
   </form>
 </div>
 </div>






</center>
</div>
</body>
</html>