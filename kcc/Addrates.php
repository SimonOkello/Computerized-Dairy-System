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
                                    $id=0;
if (isset($_POST['submitted'])) {
    foreach ($_POST AS $key => $value) {
        $_POST[$key] = mysql_real_escape_string($value);
    }
  $from=  date("Y-m-d",strtotime($_POST['from']) );
  $to= date("Y-m-d",strtotime($_POST['to']) );

    $sql = mysql_query("INSERT INTO `settings_rates` ( `from` ,  `to` ,  `rate`  ) VALUES(  '{$from}' ,  '{$to}' ,  '{$_POST['rate']}'  )")or die(mysql_error());


    
    echo "Added row.<br />";
   
     
} else {
        echo "Nothing Added. <br />";
    }


 ?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
    
  								<a href='farmerRates.php' class='btn btn-primary'>Back To Rates</a>
<form action='' method='POST' class="form-horizontal"> 
        <div class="control-group">
        <label class="control-label" for="from"> From:</label >
        <div id="datetimepicker1" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="text" data-format="yyyy-mm-dd"  placeholder="yyyy-mm-dd" name='from' /> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
           </div>
    </div>
      <div class="control-group">
        <label class="control-label" for="to"> To:</label >
        <div id="datetimepicker2" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="text" data-format="yyyy-mm-dd"  placeholder="yyyy-mm-dd" name='to' /> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
           </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="rate"> Rate ( KSH/KG)</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="4**" name='rate' id='r_kg' /> 
    </div>
    </div>  <div class="control-group">

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
