<?php include('header_dashboard.php'); 
 include('admin/dbcon.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<li><a href="#"><b>BANK</b></a><span class="divider">/</span></li>
								<li><a href="#">Farmer Accounts: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <?php
if(isset($_GET['delete'] , $_GET['id'])){
$user = (int) $_GET['id']; 
mysql_query("DELETE FROM `accounts` WHERE `user_id` = '" .stripslashes($user_id)."' ") ; 
echo (mysql_affected_rows()) ? "Account deleted.<br /> " : "Nothing deleted.<br /> ";
}
?> 
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<!--<a class="btn btn-large btn-primary" href="create_account.php"><i class="icon-plus icon-white"></i>Add Account</a><br/><br/>-->
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
        <th>Farmer ID:</th>
         <th>firstname:</th>
        <th>lastname:</th>
        <th>gender:</th>
        <th>date of birth:</th>
        <th>account type:</th>
        <th>balance:</th>
        <th>branch:</th>
        <th>status:</th>
        <th>Tasks</th>
        </thead>
    <tbody>
  <?php

$query = mysql_query("select * from accounts ")or die(mysql_error());
$i=0;
 while($row = mysql_fetch_array($query)){
$i+=1;
    echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$row['user_id'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['gender'].'</td>';
        echo '<td>'.$row['dob'].'</td>';
        echo '<td>'.$row['acc_type'].'</td>';
        echo '<td>'.$row['balance'].'</td>';
        echo '<td>'.$row['branch'].'</td>';
        echo '<td>'.$row['status'].'</td>';
         
             echo '<td  style="text-align: center">
                
                <a href="?delete=1&id='.$row['user_id'].'" class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i>Delete</a> 
             </td>';
         

    echo '</tr>';
}
?>
</tbody>
</table>
<form>
    <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>" />
</form>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                </div>
	
            </div>
		
        </div>
        <?php include('footer.php'); ?>
		<?php include('script.php'); ?>
		
    </body>
</html>
