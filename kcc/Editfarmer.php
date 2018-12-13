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
//if (isset($_GET['edit']) && isset($_GET['id'])) {
    $user_id = (int) $_GET['id'];
    if (isset($_POST['f_no'])) {
        // 
       $sql = mysql_query("UPDATE farmers SET  f_no =  '{$_POST['f_no']}' ,f_id =  '{$_POST['f_id']}' ,  f_name =  '{$_POST['f_name']}' , f_locallity =  '{$_POST['f_locallity']}' ,  f_ac =  '{$_POST['f_ac']}' ,  f_phone =  '{$_POST['f_phone']}'   WHERE f_no = '$f_no' ")or die(mysql_error());
       
            $user_id =  $_POST['user_id'];
            echo (mysql_affected_rows()) ? " Saved successfully.<br />" : "Nothing changed. <br />";
            echo ""; 
            
        }
 else {
            echo "";
 }
    
    $query = mysql_query("select * from tbluser WHERE user_id =". stripslashes($user_id) )or die(mysql_error());
 $row = mysql_fetch_array($query);
     //echo $validation['nulls'];
    ?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">



  								<a href='farmer.php' class='btn btn-primary'>Back To Farmers</a>
<form action='' method='POST' class="form-horizontal"> 
        <div class="control-group">
            <label class="control-label" for="f_no"> Farmer ID:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="user_id" name='user_id' value='<?php echo stripslashes($row['user_id']) ?>'/> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_id"> FIRSTNAME:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="firstname" name='firstname' value='<?php echo stripslashes($row['firstname']) ?>'/> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_name"> LASTNAME:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="lastname" name='lastname' value='<?php echo stripslashes($row['lastname']) ?>'/> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_locallity"> CATEGORY:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="Category" name='category' value='<?php echo stripslashes($row['category']) ?>'/> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_ac">  A/C NO:</label >
            <div class="controls">
                <?php 
  $query = mysql_query("select acc_no from accounts WHERE user_id =". stripslashes($user_id) )or die(mysql_error());
 $row = mysql_fetch_array($query);
                ?>
                <input  class="input-xlarge" type="text" placeholder="Bank account number ******.." name='acc_no' value='<?php echo stripslashes($row['acc_no']) ?>' /> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_phone"> PHONE NO:</label >
            <div class="controls">
                <?php 
  $query = mysql_query("select phone from tbluser WHERE user_id =". stripslashes($user_id) )or die(mysql_error());
 $row = mysql_fetch_array($query);
                ?>
                <input class="input-xlarge" type="text" placeholder="07_ _" name='phone'  value='<?php echo stripslashes($row['phone']) ?>' /> 
            </div>
        </div>
        <div class="control-group">

            <div class="controls">
                <input type='submit' value='Save' class="btn btn-primary btn-large " /> 
                <input type='hidden' value='1' name='submitted' /> 
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
