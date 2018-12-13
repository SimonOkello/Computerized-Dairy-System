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
								<li><a href="#"><b>AGROVET</b></a><span class="divider">/</span></li>
								<li><a href="#">Manage Updates: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <?php
if(isset($_GET['delete'] , $_GET['id'])){
$update_id = (int) $_GET['id']; 
mysql_query("DELETE FROM `updates` WHERE `update_id` = '" .stripslashes($update_id)."' ") ; 
echo (mysql_affected_rows()) ? "Update deleted.<br /> " : "Nothing deleted.<br /> ";
}
?> 
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<!--<a class="btn btn-large btn-primary" href="Addfarmer.php"><i class="icon-plus icon-white"></i>Add Farmer</a><br/><br/>-->
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
        <th>update id:</th>
         <th>title:</th>
        <th>message:</th>
        <th>updated on</th>
        <th>Tasks</th>
        </thead>
    <tbody>
  <?php

$query = mysql_query("select * from updates ")or die(mysql_error());
$i=0;
 while($row = mysql_fetch_array($query)){
$i+=1;
    echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$row['update_id'].'</td>';
        echo '<td>'.$row['title'].'</td>';
        echo '<td>'.$row['message'].'</td>';
        echo '<td>'.$row['update_date'].'</td>';
        
         
             echo '<td  style="text-align: center">
                <a href="editUpdates.php?edit=1&id='.$row['update_id'].'" class="btn btn-primary btn-mini"><i class="icon-edit icon-white"></i>Edit</a> | 
                <a href="?delete=1&id='.$row['update_id'].'" class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i>Delete</a> 
             </td>';
         

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
