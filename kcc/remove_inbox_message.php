<?php include('admin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("DELETE FROM kcc_message WHERE message_id = '$id'")or die(mysql_error());
?>

