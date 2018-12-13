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
								<li><a href="#">Sales rates: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <?php
if(isset($_GET['delete'] , $_GET['id'])){
$id = (int) $_GET['id']; 
mysql_query("DELETE FROM `settings_rates` WHERE `id` = '$id' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> ";
}
?> 
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<a class="btn btn-large btn-primary" href="Addrates.php"><i class="icon-plus icon-white"></i>Add Rates</a><br/><br/>
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
        <th>From:</th>
         <th>To:</th>
        <th>Rate:</th>
        <th>Tasks</th>
        </thead>
    <tbody>
  <?php

$query = mysql_query("select * from settings_rates ")or die(mysql_error());
$i=0;
 while($row = mysql_fetch_array($query)){
$i+=1;
    echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$row['from'].'</td>';
        echo '<td>'.$row['to'].'</td>';
        echo '<td>'.$row['rate'].'</td>';
        
         
             echo '<td  style="text-align: center">
                <a href=Editrates.php?edit=1&id=' . $row['id'] . ' class="btn btn-primary btn-mini"><i class="icon-edit icon-white"></i>Edit</a> | 
                <a href=?delete=1&id=' . $row['id'] . ' class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i>Delete</a> 
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
