<?php include('header_dashboard.php'); 
include('admin/dbcon.php');
?>
    <body>
        <?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include('kcc_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- breadcrumb --> 
                         <ul class="breadcrumb">
                                <li><a href="#"><b>KCC</b></a><span class="divider">/</span></li>
                                <li><a href="#">Delivery: </a></li>
                        </ul>
                         <!-- end breadcrumb -->
                     
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <?php

if (isset($_POST['submitted'])) {
    $kg=$_POST['kg'];
   
    $query1 = mysql_query("SELECT * FROM tbluser WHERE user_id = '$session_id'")or die(mysql_error());
$row1 = mysql_fetch_array($query1);
$name1 = $row1['firstname']." ".$row1['lastname'];
       
       
       mysql_query("INSERT INTO delivery (user_id,kg,date,deliverer) values('$session_id','$kg',NOW(),'$name1')")or die(mysql_error());
        echo "Milk Delivered!.<br />";
        //echo "<a href='index.php' class='btn btn-primary'>Back To Deliveries</a>";
    
}
?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <!--<a href='delivery.php' class='btn btn-primary'>Back To Deliveries</a>-->
<form action='' method='post' class="form-horizontal"> 
   
    <div class="control-group">
        <label class="control-label" for="kg">Milk in KGs:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="kg" name='kg'/> 

        </div>
    </div>
    
   
    
    <div class="control-group">

        <div class="controls">
            <input type='hidden' value='1' name='submitted' />
            <input type='submit' value='Deliver' class="btn btn-primary btn-large" /> 
             
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
