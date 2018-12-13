<?php include('header_dashboard.php'); 

$query1 = mysql_query("select * from tbluser where user_id = '$session_id'")or die(mysql_error());
$row1 = mysql_fetch_array($query1);
$authority = $row1['firstname']." ".$row1['lastname'];
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
								<li><a href="#"><b>Payment</b></a><span class="divider">/</span></li>
								<li><a href="#">Receipt: </a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right"><a href="payment.php"><i class="icon-arrow-left"></i> Back</a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <?php
  								if (isset($_GET['user_id'])) {
    $user_id = mysql_real_escape_string($_GET['user_id']);
    $start = mysql_real_escape_string($_REQUEST['start']);
    $end = mysql_real_escape_string($_REQUEST['end']);
    $authority = '';

    $rates = mysql_query("SELECT * FROM `settings_rates` WHERE `to` <='$end'") ;
    $rate = (int) mysql_result($rates, 0, 'rate');
    //echo $rate;
//$rates = mysqli_fetch_row($ratesrows);

    $farmer = mysql_fetch_array(mysql_query("SELECT user_id,firstname,lastname,last_paid FROM tbluser WHERE user_id=$user_id"));
    //$farmer = mysqli_fetch_row($farmers);
       
$query = mysql_query("SELECT acc_no FROM accounts WHERE user_id='$user_id'")or die(mysql_error());

 while($row = mysql_fetch_array($query)){

                                 $acc_no = $row['acc_no'];
                                
}

    $result = mysql_query("SELECT * FROM `delivery` WHERE `user_id`=$user_id AND `date` >='$start' AND `date` <= '$end'") or trigger_error(mysql_error());




    $farmer_total = 0;

    $authority = $row1['firstname']." ".$row1['lastname'];
    $datetime = strtotime(date('y-m-d'));
    $mysqldate = date("Y-m-d", $datetime);
    $updatesql="UPDATE `tbluser` SET  `last_paid` =  '$mysqldate' WHERE  `user_id` =  '$user_id'";
    
    $insertcmd = mysql_query($updatesql); 

    $query = mysql_query("SELECT balance FROM accounts WHERE user_id='$user_id'")or die(mysql_error());

 while($row = mysql_fetch_array($query)){

                                 $balance = $row['balance'];
                                
}
 
$remainder=$balance + $farmer_total * $rate;;
    $up_d = mysql_query("UPDATE accounts SET 
balance='$remainder'
 where  user_id='$user_id' ORDER BY balance ASC LIMIT 1 ");
    ?>
    <div id="printable">
        <table id="receipt"  >
            <thead style="margin-bottom: 20px">
            <th colspan="2"  ><h1>Computerized Dairy Faming Business</h1></th>
                
            <tr><th colspan="2"  ><h3>Payment Receipt</h3></th></tr>
            </thead>
            <tbody>
                <tr><td><strong>Paid to</strong></td><td><?php echo $user_id . ' -- ' . $farmer['firstname'].$farmer['lastname']; ?> </td></tr>
                <tr><td><strong>In Account No</strong></td><td> <?php echo $acc_no; ?></td></tr>
                <tr><td><strong>Rates</strong></td><td> <?php echo $rate ?></td></tr>
                <tr><td><strong>For sales between</strong></td><td> <?php echo $start . ' to ' . $end ?></td></tr>
                <tr><td><strong>Paid on</strong></td><td> <?php echo date('y-m-d'); ?> </td></tr>
                
                <tr><td><strong>Authorized by:</strong></td><td><?php echo $authority; ?></td></tr>
        </table>  
        <h3>Details</h3>
        <?php
        echo '<table id="details" class="table table-hover table-striped table-condensed table-bordered">';
        echo '<thead class="" ><th>#</th><th>Date</th><th>LITRES:</th></thead><tbody>';
        $count = 0;
$query = mysql_query("SELECT * FROM delivery WHERE user_id='$user_id'")or die(mysql_error());


                                 $kg = $row['kg'];
                                $date=$row['date'];

        while ($row = mysql_fetch_array($query)) {
            foreach ($row AS $key => $value) {
                $row[$key] = stripslashes($value);
            }
            $count+=1;
            $farmer_total+=$row['kg'];
            echo "<tr>";
            echo '<td>' . $count . '</td>';
            echo "<td valign='top'>" . $date . "</td>";
            echo "<td valign='top'>" . $kg . "</td>";
            echo "</tr>";
        }
        echo "<tr><td>Total</td><td></td><td><strong> $farmer_total</strong></td><tr>";
        echo '</tbody></table>';
        echo '<h4>Total amount KSh:'. $farmer_total * $rate .'</h4>';

        $query = mysql_query("SELECT balance FROM accounts WHERE user_id='$user_id'")or die(mysql_error());

 while($row = mysql_fetch_array($query)){

                                 $balance = $row['balance'];
                                
}
  $farmer_total+=$row['kg'];
$remainder=$balance + $farmer_total * $rate;;
    $up_d = mysql_query("UPDATE accounts SET 
balance='$remainder'
 where  user_id='$user_id' ORDER BY balance ASC LIMIT 1 ");
        ?>


    </div>
    <br/><br/>

    <form method="post" action="" class="form-inline">
        <!--<label for="authority">Authorized By:</label><input type="text" id="authority" name="authority" >-->
        <input type="submit" id="print" class="btn btn-primary" value="PRINT RECEIPT">

    </form>
    <?php
}
?>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#print').on('click', function() {
            printDiv('printable');

        });

    });
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
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
