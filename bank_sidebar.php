<div class="span3" id="sidebar">
	<img id="avatar" src="admin/<?php echo $row['location']; ?>" class="img-polaroid">
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="dasboard.php"><i class="icon-chevron-right"></i><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<li class=""><a href="create_account.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;CREATE ACCOUNT</a></li>
				<li class=""><a href="account_summary.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;ACCOUNT SUMMARY</a></li>
				<li class=""><a href="account_statement.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;ACCOUNT STATEMENT</a></li>
				<li class=""><a href="deposit.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;DEPOSIT</a></li>
				<li class=""><a href="withdraw.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;CASH WITHDRAWAL</a></li>
				<li class=""><a href="loan.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-upload"></i>&nbsp;REQUEST LOAN</a></li>
				
				<!--<li class=""><a href="equity.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;EQUITY BANK</a></li>
				<li class="active"><a href="myevents.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp;My Events</a></li>-->
		</ul>
</div>