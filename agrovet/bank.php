<?php include('header_dashboard.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
										<div class="span12">
							<!-- block -->
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">BANK</div>
										</div>
										<div id='calendar'></div>		
							<!-- block -->
									</div>
										
							
							<!--<img src="admin/images/agrovet.jpg" width="1400" height="500">-->
						
										</div>

                                </div>
                               
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <br>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
		
    </body>
</html>