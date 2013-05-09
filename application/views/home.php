<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title;?></title>
<script language="javascript" src="<?php echo base_url()?>scripts/jsval1.js"
type="text/javascript"></script>
<script language="javascript" src="<?php echo base_url()?>scripts/country.js"
type="text/javascript"></script>
<link type="text/css" href="<?php echo base_url();?>css/style.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="../style-projects-jquery.css" />

<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery.lightbox-0.5.css" media="screen" />

</head>

<body>

        <div id="wrapper">
		<div id="header">
        
		<div id="banner"></div>
		  </div>


                    <div id="menu_wrapper">
                    <div id="menu">
		    		<div class="menu_styles style7" ><a href="<?php echo base_url()?>main_page/index.html/">Home</a></div>
                    <div class="menu_styles style7"><a href="<?php echo base_url()?>main_page/syl.html/">Syllabus List</a></div>
                   
                    <div class="menu_styles style7"><a href="<?php echo base_url()?>main_page/about.html/">About Us</a></div>
                    <?php if($this->session->userdata('user_id'))
                {
                ?>
                     <div class="menu_styles style7"><a href="<?php echo secure_base_url()?>main_page/gallery.html/">Photo Gallery</a></div>
                     <div class="menu_styles style7"><a href="<?php echo base_url()?>profile/index.html/">Profile</a></div>
                    <div class="menu_styles style7"><a href="<?php echo base_url()?>login/logout.html/">Logout</a></div>


                    <?php

                         }
                         else{
                    ?>
                    <div class="menu_styles style7"><a href="<?php echo base_url()?>login/index.html/">Admin</a></div>
                    <div class="menu_styles style7"><a href="<?php echo base_url()?>registration/index.html">Registration</a></div>
                    <?php } ?>
                     </div>
                    </div>


                                        <div id="content_wrapper">
										<div id="left">
										<div id="left_top">
											<div id="left_top_wrapper">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div id="sidebar1" class="sidebar">
										<div id="menu_sidebar">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <ul>
			      	    <li>
						 <div align="left" class="style1 style4 style7"><strong><a href="<?php echo base_url()?>main_page/index.html/">Home</a></strong></div>
			        	  </li>

                          <li class="style1 style3">
				          <div align="left" class="style1 style4 style7"><a href="<?php echo base_url()?>main_page/syl.html/">Syllabus List</a></div>
			         	 </li>


						  <li class="style1 style3">
				          <div align="left" class="style1 style4 style7"><a href="<?php echo secure_base_url()?>main_page/photo.html/">Photo Gallery </a></div>
     			          </li>

                          <li class="style1 style3">
				          <div align="left" class="style1 style4 style7"><a href="<?php echo base_url()?>main_page/about.html/">About Us</a></div>
			          	  </li>

                          <li class="style1 style3">
				          <div align="left" class="style1 style4 style7"><a href="#">Edit</a></div>
			              </li>
                                      <?php if($this->session->userdata('user_id'))
                                        {
                                        ?>
                                      <li class="style1 style3">
				          <div align="left" class="style1 style4 style7"><a href="<?php echo base_url()?>contact/add_contact.html/">Add Contact</a></div>
			              </li>
                                       <li class="style1 style3">
				          <div align="left" class="style1 style4 style7"><a href="<?php echo base_url()?>contact/index.html/">View Contact</a></div>
			              </li>
                                        <?php
                                        }

                                        ?>
					   </ul>
                       </li>
				       </ul>
                       </div>
					   </div>
					   </div>
					   </div>


						<div id="left_bottom">
							<div id="left_bottom_wrapper">
			            <div id="sidebar1" class="sidebar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <ul>
                                         <li></li>
			       			</ul>
						
			<p><marquee>The Intra University IT Carnival 2011 hold at the Patuakhali Science and Technology University on 12 March, 2011.</marquee></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			</div>
			</div>
			</div>
			</div>



                       <div id="content">
                      <?php echo $mainContent;?>
		      		 </div>



                              <div id="right">
                               <div id="right_top">
							   		<div id="right_top_wrapper">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <form id="searchform" method="get" action="#"><br />
            <div>
            <input type="text" name="s" id="s" size="12" value="" />
            <input type="submit" name="Submit" value="Go" /></div>
             </form>&nbsp;</p>
		      </div></div>



                                <div id="right_bottom">
								<div id="right_bottom_wrapper">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<div id="right_bottom_pic">
								  <?php echo $pic;?> 
								</div></div>
			      			  	</div>
								</div>
								</div>
	
	
	<div id="footer">
	  <div align="center" class="style11 style1 style2">��2011 All Rights Reserved ��Design by SHARMIN RASHID </div>
	</div>

</div>
</body>
</html>
