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
								<li><a href="#"><b>Loans</b></a><span class="divider">/</span></li>
								<li><a href="#">Requests: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <?php
if(isset($_GET['delete'] , $_GET['id'])){
   
$user_id = (int) $_GET['id']; 

$query = mysql_query("SELECT amount FROM loans WHERE user_id='" .stripslashes($user_id)."'")or die(mysql_error());

 while($row = mysql_fetch_array($query)){

                                 $amount = $row['amount'];


$query = mysql_query("SELECT balance FROM accounts WHERE user_id='" .stripslashes($user_id)."'")or die(mysql_error());

 while($row = mysql_fetch_array($query)){

                                 $balance = $row['balance'];
                                
           $remainder= $amount + $balance ; 

           
mysql_query("UPDATE `loans` SET status='GRANTED' WHERE`user_id` = '" .stripslashes($user_id)."' ") ; 
echo (mysql_affected_rows()) ? "Loan Granted.<br /> " : "Nothing Granted.<br /> ";


$up_d = mysql_query("UPDATE accounts SET 
balance='$remainder'
 where  user_id='" .stripslashes($user_id)."' ORDER BY balance ASC LIMIT 1 ");
}
}
}
?> 
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<!--<a class="btn btn-large btn-primary" href="kcc_Addfarmer.php"><i class="icon-plus icon-white"></i>Add Farmer</a><br/><br/>-->
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
        <th>Farmer ID:</th>
         <th>firtname:</th>
        <th>lastname:</th>
        <th>amount</th>
        <th>monthly repayment:</th>
        <th>no of months:</th>
        <th>interest rate:</th>
        <th>status:</th>
        <th>Tasks</th>
        </thead>
    <tbody>
  <?php

$query = mysql_query("select * from loans ")or die(mysql_error());
$i=0;
 while($row = mysql_fetch_array($query)){
$i+=1;
    echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$row['user_id'].'</td>';
        echo '<td>'.$row['firstname'].'</td>';
        echo '<td>'.$row['lastname'].'</td>';
        echo '<td>'.$row['amount'].'</td>';
        echo '<td>'.$row['monthly_repay'].'</td>';
        echo '<td>'.$row['noOfMonths'].'</td>';
        echo '<td>'.$row['interest_rate'].'</td>';
        echo '<td>'.$row['status'].'</td>';
         
             echo '<td  style="text-align: center">
                 
                <a href="?delete=1&id='.$row['user_id'].'" class="btn btn-primary btn-mini"><i class="icon-edit icon-white"></i>Grant Loan</a> 
             </td>';
         

    echo '</tr>';
}
?>
</tbody>
</table>
<form>
    <input type="hidden" name="amount" value="<?php echo $row['amount'];?>"/>
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
