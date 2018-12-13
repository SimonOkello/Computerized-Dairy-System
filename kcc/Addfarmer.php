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
								<li><a href="#">Add Farmer: </a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    
                                                                    <?php

if (isset($_POST['submitted'])) {
//    foreach ($_POST AS $key => $value) {
//        $_POST[$key] = mysqli_real_escape_string($conn, $value);
//    }
            $sql = mysql_query("INSERT INTO `tbluser` ( `firstname` ,`lastname` , `username` , `password` ,  `phone` ,  `category`  ) VALUES(  '{$_POST['firstname']}' ,'{$_POST['lastname']}' , '{$_POST['username']}' , '{$_POST['password']}' ,  '{$_POST['phone']}' ,  '{$_POST['category']}'  )")or die(mysql_error());
       
            

        

        
        echo "Farmer Added.<br />";
       
    
}else {
        echo "Nothing Added. <br />";
    }
?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
    
  								<a href='farmer.php' class='btn btn-primary'>Back To Farmers</a>
<form action='' method='post' class="form-horizontal"> 
    <div class="control-group">
        <label class="control-label" for="firstname"> Firstname:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="firstname" name='firstname'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="lastname">Lastname:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="lastname" name='lastname'/> 

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="username"> Username:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="username" name='username'/> 
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password"> Password:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="password" name='password'/> 
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="phone"> Phone number:</label >
        <div class="controls">
            <input  class="input-xlarge" type="text" placeholder="phone number" name='phone'/> 
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="category"> Category:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="category" name='category'/> 
        </div>
    </div>
    <div class="control-group">

        <div class="controls">
            <input type='hidden' value='1' name='submitted' />
            <input type='submit' value='Add Farmer' class="btn btn-primary btn-large" /> 
             
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
