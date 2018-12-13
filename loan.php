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
                                <li><a href="#">Loan: </a></li>
                        </ul>
                         <!-- end breadcrumb -->
                     
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    
                                                                     <?php

if (isset($_POST['loan'])) {
$id = $session_id;
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $amount=$_POST['amount'];
    $monthly_repay=$_POST['monthly_repay'];
    $noOfMonths=$_POST['noOfMonths'];
    $interest_rate=$_POST['interest_rate'];

  
 $result = mysql_query("SELECT * FROM loans  where user_id = '$id' ")or die(mysql_error());
    $row = mysql_fetch_array($result);
    if (empty($row)) {
        
            
       
$sql = mysql_query("INSERT INTO loans( user_id, firstname, lastname, amount, monthly_repay, noOfMonths, interest_rate) 
VALUES('$id','$firstname','$lastname','$amount','$monthly_repay','$noOfMonths','$interest_rate')")  
or die (mysql_error());

     $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $amount=$_POST['amount'];
    $monthly_repay=$_POST['monthly_repay'];
    $noOfMonths=$_POST['noOfMonths'];
    $interest_rate=$_POST['interest_rate'];
        

        
        echo "Request Submitted.<br />";
       
    
}else {
        echo "Nothing Submitted. <br />";
    }
}
?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
    
                              
<form action='' method='post' class="form-horizontal"> 
    <div class="control-group">
        <label class="control-label" for="f_no"> FirstName:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="firstname"  name='firstname'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_no"> LastName:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="lastname"  name='lastname'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_no"> Loan Amount:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="KSh"  name='amount'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_id">Monthly Repayment:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="monthly payment" name='monthly_repay'/> 

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_id">Number of Months:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="months" name='noOfMonths'/> 

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_id">Interest Rates:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" value="5%" name='interest_rate'  /> 

        </div>
    </div>
   
    <div class="control-group">

        <div class="controls">
            
            <input type='submit' name="loan" value='Submit' class="btn btn-primary btn-large" /> 
             
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
