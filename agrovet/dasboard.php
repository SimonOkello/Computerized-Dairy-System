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
											<div class="muted pull-left">AGROVET</div>
										</div>
										<div id='calendar'></div>		
							<!-- block -->
									</div>
										
							
							<img src="admin/images/agrovet.jpg" width="1400" height="500">
						
										</div>

                                </div>
                                <center>
                                <h3><i>We are a diversified Agrovet company</i></h3>
<h2>Our mission is to improve the productivity of farmers by innovating
products and services that sustainably increase crop and livestock yields.</h2>
</center>
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