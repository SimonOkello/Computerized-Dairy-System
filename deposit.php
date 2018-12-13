<?php include('header_dashboard.php'); ?>
    <body>
        <?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include('bank_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- breadcrumb --> 
                         <ul class="breadcrumb">
                                <li><a href="#"><b>Farmer</b></a><span class="divider">/</span></li>
                                <li><a href="#"><b>Banking</b></a><span class="divider">/</span></li>
                                <li><a href="#">Deposit: </a></li>
                        </ul>
                         <!-- end breadcrumb -->
                     
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
<?php
if (isset($_POST['deposit'])) {
$id = $session_id;
    $names=$_POST['names'];
    //$amount=$_POST['amount'];
    $acc_no=$_POST['acc_no'];
    //$balance=$_POST['balance'];
    $credit=$_POST['credit'];
  
$query = mysql_query("SELECT balance FROM accounts WHERE user_id='$session_id'")or die(mysql_error());

 while($row = mysql_fetch_array($query)){

                                 $balance = $row['balance'];
                                
}
     
    
           $remainder= $balance + $credit ; 
       
$sql = mysql_query("INSERT INTO transactions( user_id, names, transactiondate,acc_no, credit) 
VALUES('$id','$names', NOW(),'$acc_no','$credit')")  
or die (mysql_error());

        
$up_d = mysql_query("UPDATE accounts SET 
balance='$remainder'
 where  user_id='$id' ORDER BY balance ASC LIMIT 1 ");
        
        echo "Money have Added.<br />";
       
    
}else {
        echo "Nothing Added. <br />";
    }

?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
    
                               <?php
                                        $query = mysql_query("SELECT balance FROM accounts WHERE user_id='$session_id'")or die(mysql_error());

 while($row = mysql_fetch_array($query)){

                                 $balance = $row['balance'];
                                
}
     
    ?>
    <p><span class="heading"><strong>YOUR CURRENT BALANCE: </strong></span><?php echo $balance;?></p>
<form action='' method='post' class="form-horizontal"> 
     <div class="control-group">
        <label class="control-label" for="f_no"> Names:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="Names"  name='names'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_no"> Amount:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="Enter amount to Deposit (Ksh)"  name='credit'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_id">Account Number:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="Account Number" name='acc_no'/> 

        </div>
    </div>
   
    <div class="control-group">

        <div class="controls">
            
            <input type='submit' name="deposit" value='Deposit' class="btn btn-primary btn-large" /> 
             
        </div>
    </div>
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
