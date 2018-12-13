<?php include('header_dashboard.php'); 
 include('admin/dbcon.php'); ?>

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
								<li><a href="#">Account Summary: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    ACCOUNT SUMMARY
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
                                    <?php
                
                          

  	$query = mysql_query("SELECT * FROM accounts LEFT JOIN user_log ON user_log.user_id = accounts.user_id WHERE accounts.user_id='$session_id'")or die(mysql_error());

 while($row = mysql_fetch_array($query)){

                                 $balance = $row['balance'];
                                 $acc_no = $row['acc_no'];
                                 $branch = $row['branch'];
                                 $status = $row['status'];
                                 $acc_type = $row['acc_type'];
                                 $login_date = $row['login_date'];
}
     
    ?>
                    <div class="span">
        
        <div class="span span3" >
            <p><span class="heading"><strong>ACCOUNT TYPE:</strong> </span><?php echo $acc_type;?> Account</p>
            <p><span class="heading"><strong>ACCOUNT NUMBER:</strong> </span><?php echo $acc_no;?></p>
            <p><span class="heading"><strong>BRANCH:</strong> </span><?php echo $branch;?></p>
            
        </div>
        <div class="span span3" >
           <p><span class="heading"><strong>BALANCE: </strong></span><?php echo $balance;?></p>
            <p><span class="heading"><strong>ACCOUNT STATUS: </strong></span><?php echo $status;?></p>
            <p><span class="heading"><strong>LAST LOGIN: </strong></span><?php echo $login_date;?></p> 
            
        </div>
        
        
    </div>


    
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
