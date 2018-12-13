<?php include('header_dashboard.php'); 
 include('admin/dbcon.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('agrovet_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<li><a href="#"><b>AGROVET</b></a><span class="divider">/</span></li>
								
								<li><a href="#">Products: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                   AGROVET PRODUCTS
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								
                    <div class="span">
        
        <div class="span span3" >
            
                <img src="admin/images/bypro.jpg"><br/>
                
            
        </div>
        
        <div class="span span3" >
            <h4><strong>Description</strong></h4>
            <p><b>We are offeing dairy cattle feed 
available with us is the dairy cattle feed that is an excellent feed for milk producing cows and buffalos. Manufactured as per the nrc recommendations in preparation of cattle feeds, our dairy cattle feed increases more productivity of the milk. </b></p>
        </div>
            <div class="span span3" >
            <h4><strong>Benefits</strong></h4>
            <p><b>It is rich in bypass protein and improves the yield of high milk-producing animals. </b></p>
        </div>
    </div>
       
    <div class="span">
        <div class="span span3" >
            
                <img src="admin/images/silobac.jpg"><br/>
                
            
        </div>
        
        <div class="span span3" >
            <h4><strong>Description</strong></h4>
            <p><b>
Silobac® 5 is the inoculant for corn silage and sugarcane containing two single strains of Lactobacillus plantarum - CH6072 and L286, which preserve the nutritive value of ensiled fodder by combating the five main strains of yeasts that cause decay of the ensiled mass. </b></p>
        </div>
            <div class="span span3" >
            <h4><strong>Benefits</strong></h4>
            <p><b>Its silage ready to be used 7 days after closing. <br>
Significant reduction of dry matter losses. <br>
25 hours more of fresh corn silage in the trough.<br>
35 hours more of fresh cane silage in the trough. 
 </b></p>
        </div>
        
    </div>
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
