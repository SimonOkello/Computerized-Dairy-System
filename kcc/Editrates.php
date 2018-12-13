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
    if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    if (isset($_POST['submitted'])) {

        $sql = mysql_query("UPDATE `settings_rates` SET  `from` =  '{$_POST['from']}' ,  `to` =  '{$_POST['to']}' ,  `rate` =  '{$_POST['rate']}'   WHERE `id` = '$id'  ")or die(mysql_error());

       
        echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
       
    }
    $row = mysql_fetch_array(mysql_query("SELECT * FROM `settings_rates` WHERE `id` = '$id' "));
  
    } ?> 
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">



  								<a href='farmerRates.php' class='btn btn-primary'>Back To Rates</a>
<form action='' method='POST' class="form-horizontal"> 
        <div class="control-group">
        <label class="control-label" for="from"> From:</label >
        <div id="datetimepicker1" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="text" data-format="yyyy-mm-dd"  placeholder="yyyy-mm-dd" name='from' value='<?php echo stripslashes($row['from']) ?>'/> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
           </div>
    </div>
      <div class="control-group">
        <label class="control-label" for="to"> To:</label >
        <div id="datetimepicker2" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="text" data-format="yyyy-mm-dd"  placeholder="yyyy-mm-dd" name='to' value='<?php echo stripslashes($row['to']) ?>'/> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
           </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="rate"> Rate ( KSH/KG)</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="4**" name='rate' id='r_kg' value='<?php echo stripslashes($row['rate']) ?>'/> 
    </div>
    </div>  <div class="control-group">

        <div class="controls">
            <input type='submit' value='Save' class="btn btn-primary btn-large " /> 
            <input type='hidden' value='1' name='submitted' /> 
        </div>
    </div>
</form> 
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $('#datetimepicker1,#datetimepicker2').datetimepicker({
                language: 'pt-BR',
                pickTime:false,
                format:'yyyy-MM-dd'
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
		<script src="../farmer/kcc/bootstrap/js/jquery-ui.js"></script>
    </body>
</html>
