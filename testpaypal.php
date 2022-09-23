<?php
require("db.php");
session_start();
$_SESSION['logged']="active";
$item_number = $_SESSION['ID'];
mysql_query("UPDATE member SET verification ='yes WHERE memberid ='$item_number' ")or die (mysql)
header("location:myaccount.php");
?>
<input type="text' value="type something" />
										 
										 
<script>
$('input').bind('blur', function(){

$(this).val(funtion(1, val) {
alert($(this).val());
										 
});
										 
});
										 
//value = $("txt_nameem.val();
//value = $("#txt_name")0.attr('value'