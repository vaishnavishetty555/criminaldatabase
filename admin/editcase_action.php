<?php
 include("../db/db.php");
$caseid=$_GET['caseid'];
$courtid=$_GET['courtid'];
$status=$_GET['status'];

$sql="UPDATE `case_detail` SET `court_id`=$courtid,`status`=$status WHERE `case_id`=".$caseid;
if($conn->query($sql)){
    echo "<script>alert('Case updated...!');
				window.location.href='/criminaldatabase/admin/admin_home.php'</script>";	
}else{
    echo $sql;
}






?>