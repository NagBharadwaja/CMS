<?php ob_start();?>
<?php
session_start();
require_once('connection.php');
$name=$_POST['a_name'];
$_SESSION['name']=$name;
$phone=$_POST['a_phne'];
$_SESSION['phone']=$phone;
$cell=$_POST['a_cphne'];
$_SESSION['cell']=$cell;
$email=$_POST['a_email'];
$_SESSION['email']=$email;
$addr1=$_POST['ar_adr'];
$_SESSION['addr1']=$addr1;
$city=$_POST['ar_city'];
$_SESSION['city']=$city;
$state=$_POST['state'];
$_SESSION['state']=$state;
$zip=$_POST['ar_zip'];
$_SESSION['zip']=$zip;
 mysql_query("insert into agent(name,addrl1,email_id,office_phone,cell_phone,city,state,zip) values('$name','$addr1','$email','$phone','$cell','$city','$state','$zip')");
 $result=mysql_query("select agent_id from agent where name='$name'");
 $row=mysql_fetch_row($result);
 $_SESSION['agentid']=$row[0];
 header('Location: http://students.cs.niu.edu/~cs56712/agentadded.php');
?>
<?php ob_flush();?>






