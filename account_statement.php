<?php include('header_dashboard.php'); 
 include('admin/dbcon.php');
//$id = $session_id;
  ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('bank_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<li><a href="#"><b>User</b></a><span class="divider">/</span></li>
								<li><a href="#"><b>Events</b></a><span class="divider">/</span></li>
								<li><a href="#">Manager: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    ACCOUNT STATEMENT
                                    <!--<?php
if(isset($_GET['delete'] , $_GET['id'])){
$f_no = (int) $_GET['id']; 
mysql_query("DELETE FROM `farmers` WHERE `f_no` = '" .stripslashes($f_no)."' ") ; 
echo (mysql_affected_rows()) ? "farmer deleted.<br /> " : "Nothing deleted.<br /> ";
}
?> -->
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
        <th>Transaction Date:</th>
         <th>Name:</th>
         <th>Account Number</th>
        <th>Deposited:</th>
        <th>Withrew</th>
                
        </thead>
    <tbody>
  <?php

$query = mysql_query("SELECT * FROM transactions  WHERE user_id='$session_id'")or die(mysql_error());
$i=0;
 while($row = mysql_fetch_array($query)){
$i+=1;
    echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$row['transactiondate'].'</td>';
        echo '<td>'.$row['names'].'</td>';
        echo '<td>'.$row['acc_no'].'</td>';
        echo '<td>'.$row['credit'].'</td>';
        echo '<td>'.$row['debit'].'</td>';
        
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
                        <?php
 $query = mysql_query("SELECT balance FROM accounts WHERE user_id='$session_id'")or die(mysql_error());

 while($row = mysql_fetch_array($query)){

$balance = $row['balance'];
                                
}
     
    ?>
        <h3><span class="heading"><strong>ACCOUNT BALANCE: KSH </strong></span><?php echo $balance;?></h3>
                        <!-- /block -->
                    </div>

                </div>
	
            </div>
		
        </div>
        <?php include('footer.php'); ?>
		<?php include('script.php'); ?>
		
    </body>
</html>
