<?php include('header_dashboard.php');
$id = $session_id;
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
                                    
                                                                    <?php

if (isset($_POST['create'])) {
$id = $session_id;
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $acc_type=$_POST['acc_type'];
    $acc_no=$_POST['acc_no'];
    $branch=$_POST['branch'];
    $balance=$_POST['balance'];
  
 $result = mysql_query("SELECT * FROM accounts  where user_id = '$id' ")or die(mysql_error());
    $row = mysql_fetch_array($result);
    if (empty($row)) {
        
            
       
$sql = mysql_query("INSERT INTO accounts( user_id, firstname, lastname, gender, dob, acc_type, acc_no,balance, branch) 
VALUES('$id','$firstname','$lastname','$gender','$dob','$acc_type','$acc_no','$balance','$branch')")  
or die (mysql_error());

                                $firstname = $_POST['firstname'];
                                 $lastname = $_POST['lastname'];
                                 $gender = $_POST['gender'];
                                 $dob = $_POST['dob'];
                                 $acc_type = $_POST['acc_type'];
                                 $branch = $_POST['branch'];
                                 $balance=$_POST['balance'];
        

        
        echo "Account Added.<br />";
       
    
}else {
        echo "Nothing Added. <br />";
    }
}
?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
    
                              
<form action='' method='post' class="form-horizontal"> 
    <div class="control-group">
        <label class="control-label" for="f_no"> First Name:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="firstname"  name='firstname'/>

        </div>
    </div>
        <div class="control-group">
        <label class="control-label" for="f_no"> Last Name:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="lastname"  name='lastname'/>

        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="f_no"> Gender:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="gender"  name='gender'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_no"> Date Of Birth:</label >
        <div class="controls">
            <input class="input-xlarge" type="date" placeholder="YY-mm-dd"  name='dob'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_no"> Account Type:</label >
        <div class="controls">
            <select name="acc_type"  required >
                <option value="" disabled="disabled" selected="selected">Select Account type</option>
                                                         
             <option value="Savings">Savings</option>
            <option value="Fixed Deposit">Fixed Deposit</option>
            
             
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_id">Account Number:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="123456789" name='acc_no'/> 

        </div>
    </div>
     <div class="control-group">
        <label class="control-label" for="f_id">First Deposit:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="Ksh" name='balance'/> 

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_id">Branch:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="eg Juja" name='branch'/> 

        </div>
    </div>
   
    <div class="control-group">

        <div class="controls">
            
            <input type='submit' name="create" value='CREATE' class="btn btn-primary btn-large" /> 
             
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
