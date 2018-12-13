<div class="span3" id="sidebar">
	<img id="avatar" src="admin/<?php echo $row['location']; ?>" class="img-polaroid">
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="dasboard.php"><i class="icon-chevron-right"></i><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<li class=""><a href="farmer.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;FARMERS</a></li>
				<li class=""><a href="delivery.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;DELIVERIES</a></li>
				<li class=""><a href="payment.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;PAYMENT</a></li>
				<li class=""><a href="report.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;REPORTS</a></li>
				<li class=""><a href="farmerRates.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-upload"></i>&nbsp;SALES RATES</a></li>
				<li class=""><a href="message.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;MESSAGES</a></li>
				<!--<li class=""><a href="kcc_notification.php<?php //echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;NOTIFICATION</a></li>-->
				
		</ul>
</div>