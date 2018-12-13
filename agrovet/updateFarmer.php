<?php include('header_dashboard.php'); ?>
    <body>
        <?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include('sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- breadcrumb --> 
                         <ul class="breadcrumb">
                                <li><a href="#"><b>AGROVET</b></a><span class="divider">/</span></li>
                                <li><a href="#">Create Update: </a></li>
                        </ul>
                         <!-- end breadcrumb -->
                     
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    
                                                                       <?php

if (isset($_POST['update'])) {
$id = $session_id;
    $title=$_POST['title'];
    $message=$_POST['message'];

            
       
$sql = mysql_query("INSERT INTO updates( user_id, title, message, update_date) 
VALUES('$id','$title','$message',NOW())")  
or die (mysql_error());


        
        echo "Update Added.<br />";
       
    
}else {
        echo "Nothing Added. <br />";
    }

?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
    
                               <!-- <a href='farmer.php' class='btn btn-primary'>Back To Farmers</a>-->
<form action='' method='post' class="form-horizontal"> 
    <div class="control-group">
        <label class="control-label" for="title"> UpdateTitle:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="title" name='title'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="message">Content:</label >
        <div class="controls">
            <textarea   name="message" placeholder="Message" ></textarea> 

        </div>
    </div>
    
    <div class="control-group">

        <div class="controls">
            
            <input type='submit' name="update" value='Post Update' class="btn btn-primary btn-large" /> 
             
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
