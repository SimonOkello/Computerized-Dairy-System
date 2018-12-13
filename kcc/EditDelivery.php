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
                                    
                                    if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    if (isset($_POST['submitted'])) {
        
        
       
            $datetime = strtotime($_POST['r_dt']);
            $mysqldate = date("Y-m-d H:i:s", $datetime);

                 $sql = mysql_query("UPDATE `delivery` SET  `r_f_no` =  '{$_POST['r_f_no']}' ,  `r_kg` =  '{$_POST['r_kg']}' ,  `r_dt` =  '{$mysqldate}' ,  `r_deliverer` =  '{$_POST['r_deliverer']}'   WHERE `id` = '$id' ")or die(mysql_error());

            
            echo (mysql_affected_rows()) ? "Changes Saved.<br />" : "Nothing changed. <br />";
            
         //else {
           // echo "<span class='error  badge badge-warning'>Errors found.</span>";
        }
    }

        $query = mysql_query("SELECT * FROM delivery WHERE id ='$id'")or die(mysql_error());
 $row = mysql_fetch_array($query);
    


?>

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<a href='delivery.php' class='btn btn-primary'>Back To Deliveries</a>
<form action='' method='POST' class="form-horizontal" name="delivery"> 
    <div class="control-group">
        <label class="control-label" for="r_f_no">Farmer No:</label >
        <div class="controls">
            <input id="f_no" class="input-xlarge" type="text" placeholder="CCF****" name='r_f_no' value='<?php echo isset($row)?stripslashes($row['r_f_no']):''; ?>'/> 

           
        </div>

    </div>
    <div id="farmercheck" class="">

    </div>
    <div class="control-group">
        <label class="control-label" for="r_kg"> Milk in Kgs:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="4**" name='r_kg' value='<?php echo isset($row)?stripslashes($row['r_kg']):''; ?>'/> 
            
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="r_dt"> Time Delivered:</label >
        <div id="datetimepicker1" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="datetime" data-format="yyyy-mm-dd hh:mm:ss"  placeholder="yyyy-mm-dd hh:mm:ss" name='r_dt' value='<?php echo isset($row)?stripslashes($row['r_dt']):''; ?>'/> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
            
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="r_deliverer"> Milk Delived by:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="Deliverer-X.." name='r_deliverer' value='<?php echo isset($row)?stripslashes($row['r_deliverer']):'' ?>'/> 
        </div>
    </div>
    <div class="control-group">

        <div class="controls">
            <input type='submit' value='Save' class="btn btn-primary btn-large " /> 
            <input type='hidden' value='1' name='submitted' /> 
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $('#datetimepicker1').datetimepicker({
                language: 'pt-BR',
                format: 'yyyy-MM-dd hh:mm:ss'
            });
        });
        $("#f_no").on("keyup", function(thisevent) {
            $.post('checkfarmer.json.php', {fname: delivery.f_no.value}, function(jsondata) {
                $('#farmercheck').html(jsondata);
                //$('#farmercheck').addClass('control-group');
            });

        });
    });
</script>
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
