<?php include('header_dashboard.php');
include('admin/dbcon.php'); 
$start = isset($_REQUEST['from']) ? $_REQUEST['from'] : '';
$end = isset($_REQUEST['to']) ? $_REQUEST['to'] : '';

 ?>
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
								<li><a href="#">Payment: </a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<h1>FARMER PAYMENT</h1>
<form class=" form-inline" method="post" action="">
    <div class="control-group">
        <label class="control-label" for="from"> From:</label >
        <div id="datetimepicker1" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="date" data-format="yyyy-mm-dd"  placeholder="yyyy-mm-dd" name='from' value='<?php echo $start; ?>'/> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
        </div>

        <label class="control-label" for="to"> To:</label >
        <div id="datetimepicker2" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="date" data-format="yyyy-mm-dd"  placeholder="yyyy-mm-dd" name='to' value='<?php echo $end; ?>'/> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
        </div>

        <input type="submit" class="btn btn-info" value="Get Records">
    </div>
</form>
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <tr>
            <th>#</th>
            <th>Farmer NO:</th>
            <th>Farmer Name:</th>
            <th>Last Paid on:</th>
            <th>Total LITRE(S):</th>
            <th>Pay</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_POST['from'])) {
            $start = mysql_real_escape_string($_REQUEST['from']);
            $end = mysql_real_escape_string($_REQUEST['to']);

            $farmers = mysql_query("SELECT user_id,firstname,last_paid FROM tbluser WHERE category='farmer'") or die("unable to fetch records" . mysqli_error());
            $i = 0;
            $total = 0;
            while ($farmer = mysql_fetch_array($farmers)) {
                //$i+=1;
                $user_id = $farmer['user_id'];
                $result = mysql_query("SELECT kg FROM `delivery` LEFT JOIN tbluser ON tbluser.user_id=delivery.user_id WHERE delivery.user_id=$user_id and `date` >='$start' and `date` <= '$end'") or trigger_error(mysql_error());

$query = mysql_query("SELECT kg FROM delivery WHERE user_id='$user_id'")or die(mysql_error());


                                 
                $farmer_total = 0;
                while ($row = mysql_fetch_array($query)) {
                    $kg = $row['kg'];
                                
                    foreach ($row AS $key => $value) {
                        $row[$key] = stripslashes($value);
                    }

                    $farmer_total+=$kg;
                }
                $i+=1;
                $total+=$farmer_total;
                echo "<tr>";
                echo '<td>' . $i . '</td>';
                //echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";  
                echo "<td valign='top'>" . $farmer['user_id'] . "</td>";
                echo "<td valign='top'>" . $farmer['firstname'] . "</td>";
                echo "<td valign='top'>" . $farmer['last_paid'] . "</td>";
                // echo "<td valign='top'>" . $row['kg'] . "</td>";
                echo "<td valign='top'>" . $farmer_total . "</td>";
                if ($start > $farmer['last_paid']) {
                    echo "<td valign='top'><a href='pay.php?user_id=$user_id&start=$start&end=$end' class='btn btn-info'>Pay</a></td>";
                } else {
                    echo "<td valign='top'><a href='#' class='btn btn-danger'>Paid</a></td>";
                }
                echo "</tr>";
            }
            echo "<tr class='success'><td><strong>Total</strong></td><td><strong>All</strong><td>--</td><td>--</td><td>$total Litres</td><td>--</td></tr>";
        }
        ?>
    </tbody>
</table>
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
