<?php include('header_dashboard.php'); 
 include('admin/dbcon.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<li><a href="#"><b>KCC</b></a><span class="divider">/</span></li>
								<li><a href="#">Farmers: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <?php
if(isset($_GET['delete'] , $_GET['id'])){
$user_id = (int) $_GET['id']; 
mysql_query("DELETE FROM `tbluser` WHERE `user_id` = '" .stripslashes($user_id)."' ") ; 
echo (mysql_affected_rows()) ? "farmer deleted.<br /> " : "Nothing deleted.<br /> ";
}
?> 
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<a class="btn btn-large btn-primary" href="Addfarmer.php"><i class="icon-plus icon-white"></i>Add Farmer</a><br/><br/>
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
        <th>Farmer ID:</th>
         <th>firstname:</th>
        <th>lastname:</th>
        <th>category</th>
        <th>Account No:</th>
        <th>last paid</th>
        <th>Phone No:</th>
        
        </thead>
    <tbody>
  <?php

$query = mysql_query("SELECT * FROM tbluser LEFT JOIN accounts ON accounts.user_id=tbluser.user_id WHERE category='farmer'")or die(mysql_error());
$i=0;
 while($row = mysql_fetch_array($query)){
$i+=1;
    echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$row['user_id'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['category'].'</td>';
        echo '<td>'.$row['acc_no'].'</td>';
        echo '<td>'.$row['last_paid'].'</td>';
        echo '<td>'.$row['phone'].'</td>';
         
             //echo '<td  style="text-align: center">
              //  <a href="Editfarmer.php?edit=1&id='.$row['user_id'].'" class="btn btn-primary btn-mini"><i class="icon-edit icon-white"></i>Edit</a> | 
               // <a href="?delete=1&id='.$row['user_id'].'" class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i>Delete</a> 
            // </td>';
         

    echo '</tr>';
}
?>
</tbody>
</table>
<form>
    <input type="hidden" name="f_no" value="<?php echo $row['f_no'];?>" />
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
