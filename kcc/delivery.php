<?php include('header_dashboard.php'); ?>
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
								
								<li><a href="#">Deliveries: </a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    
                           <?php         
if(isset($_GET['delete'])){
    $user_id = (int) $_GET['id']; 
mysql_query("DELETE FROM `delivery` WHERE `user_id` = '$user_id' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
}
?>

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<!--<a class="btn btn-large btn-primary" href="AddDelivery.php"><i class="icon-plus icon-white"></i>Add Delivery</a><br/><br/>-->
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
       <th>Farmer NO:</th>
        <th>KGs:</th>
        <th>Date</th>
        <th>Deliverer:</th>
        <th>Tasks</th>
        </thead>
    <tbody>
   <?php
 

$query = mysql_query("select * from delivery ")or die(mysql_error());
$i=0;
 while($row = mysql_fetch_array($query)){
$i+=1;
    echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$row['user_id'].'</td>';
        echo '<td>'.$row['kg'].'</td>';
        echo '<td>'.$row['date'].'</td>';
        echo '<td>'.$row['deliverer'].'</td>';
        
         
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
