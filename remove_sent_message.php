<?php include('admin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("DELETE FROM message_sent WHERE message_id = '$id'")or die(mysql_error());
?>

