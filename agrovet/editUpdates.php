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
                                <li><a href="#"><b>Updates</b></a><span class="divider">/</span></li>
                                <li><a href="#">Edit: </a></li>
                        </ul>
                         <!-- end breadcrumb -->
                     
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                                                        <?php
if (isset($_GET['id'])) {
    $update_id = (int) $_GET['id'];
    if (isset($_POST['submitted'])) {
        // 
       $sql = mysql_query("UPDATE updates SET  title =  '{$_POST['title']}' ,message =  '{$_POST['message']}' ,  update_date =  '{$_POST['update_date']}'  WHERE update_id = '$update_id' ")or die(mysql_error());
       
            //$update_id =  $_POST['update_id'];
            echo (mysql_affected_rows()) ? " Saved successfully.<br />" : "Nothing changed. <br />";
            echo ""; 
          }  
        }
 else {
            echo "";
 }
    
    $query = mysql_query("select * from updates WHERE update_id =". stripslashes($update_id) )or die(mysql_error());
 $row = mysql_fetch_array($query);
     //echo $validation['nulls'];
    ?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">



                                <a href='manageUpdates.php' class='btn btn-primary'>Back To Updates</a>
<form action='' method='POST' class="form-horizontal"> 
        <div class="control-group">
            <label class="control-label" for="title"> TITLE:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="title" name='title' value='<?php echo stripslashes($row['title']) ?>'/> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="message"> MESSAGE:</label >
            <div class="controls">
                <textarea name = "message" class="input-xlarge">
<?php echo $row['message'] ?>
</textarea> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="update_date"> UPDATED ON:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="update_date" name='update_date' value='<?php echo stripslashes($row['update_date']) ?>'/> 
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
