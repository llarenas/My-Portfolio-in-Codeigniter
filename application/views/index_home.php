<!DOCTYPE html>
<html lang="en">
<!-- *************************** from head to title to link of bootstrap and jquery.-->
<head>

<meta charset="utf-8">   
<title>Ronel B. Llarenas Portfolio</title>

<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>assets/css/freelancer.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src ="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"> </script>
<script type="text/javascript" src ="<?php echo base_url(); ?>assets/js/ron.js"> </script>

</head>
<!-- *************************** *********************************** ****************************-->




<!-- ***************** my own css, most on  declarinng background************************************ -->

<style>

.bgground {
    background:url(<?php echo base_url(); ?>assets/images/bgground.jpg) ;
}

 .bgg1 {
    background:url(<?php echo base_url(); ?>assets/images/bgport.jpg) ;
}

 .bgabout1 {
    background:url(<?php echo base_url(); ?>assets/images/bgabout1.jpg) ;
}

 .bgcontact {
    background:url(<?php echo base_url(); ?>assets/images/bgcontact.jpg) ;
}

 .bged {
    background:url(<?php echo base_url(); ?>assets/images/bged.jpg) ;
}

 .bgall {
    background:url(<?php echo base_url(); ?>assets/images/bgall.jpg) ;
}

 .photobg {
    background:url(<?php echo base_url(); ?>assets/images/photobg.jpg) ;
}

.container{
    text-align: center;
    padding-top: 15px; 
    padding-right: 15px; 
    padding-left: 15px; 
    margin-right: auto; 
    margin-left: auto;
}

</style>
<!-- *************************** *********************************** ****************************-->




<body id="page-top" class="index">

<!-- *********************************************** follow me on facebook script-->
<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '908382189226579',
          xfbml      : true,
          version    : 'v2.4'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
<!-- *************************** ************************************************* -->



<!-- *************************** NAVAGATION Bar  ************************************************* -->
<nav class="navbar navbar-default navbar-fixed-top bgground">
        <div class="container ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><u><i>Ronel B. Llarenas</i></u></a>
            </div>
 <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio"><u>Portfolio</u></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><u>About</u></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><u>Contact</u></a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
</nav>
<!-- *************************** *********************************************** ********************* -->




<div class="bgall"> <!-- ** Overall background. ang jade bg./green color.** -->


     <div class="container"> <!-- ** container halin sa portfolio, about, and contact, para mag center sila. .** -->


<!-- *****************Header, like nga may coverphto k, and my DP.  ***************** -->
 <header class="bgg1">
<div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <img src="<?php echo base_url(); ?>assets/images/profile1.jpg" class="img-responsive" alt="" width="150px" height="140px" >
                   
             </div>
 <div class="col-sm-12">
                    <div class="intro-text">
                        <h2>Hi, I'm Ronel Llarenas, Web Developer</h2>
                        <hr class="star-light">
                        <span class="skills">PHP Web Developer - Software Developer - Freelancer</span>
                    </div>
                </div>

</div>
</header>
<!-- *************************************************************************************  ***************** -->



 <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
    <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/portfolio/safe.png" class="img-responsive" alt="" width="350px" height="350px" >
                    </a>
    </div>

    <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/portfolio/submarine.png" class="img-responsive" alt="" width="350px" height="250px">
                    </a>
    </div>


    <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/portfolio/game.png" class="img-responsive" alt="">
                    </a>
    </div>
               
               
    <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/portfolio/game.png" class="img-responsive" alt="">
                    </a>
    </div>

    <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/portfolio/safe.png" class="img-responsive" alt="">
                    </a>
    </div>


    <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
        </div>


               
            </div>
        </div>
    </section>





  <!-- About Section ************************* -->
  
    <section class="bgabout1 " id="about">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3><code>About</code></h3>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>	<font color="white">	<u>I'm Ronel B. Llarenas, 22 years of age. Now I'm a Freelance Programmer, Web Developer. I'm in software development such as PHP, MYSQL, CSS, Javascript, VB.Net, C/C++ and Java/Android programming.</u></font></p>
                </div>
                <div class="col-lg-4">
                    <p>		<font color="white"> <u>I also have a big interest about Ethical Hacking, Artificial Intelligence, Troubleshooting and in Computer Hardware.</u> </font> </p>
                </div>

                 

                <div class="col-lg-5 col-lg-offset-2 text-center">
                    
                </div>
            </div>
        </div>
    </section>



 <!-- Contact Section -->
    <section class="bgcontact" id="contact">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3><code>Contact Me</code></h3>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    
                    

<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
 

<?php
    $this->load->helper("form");
      echo $message; // message if success
      echo validation_errors(); //validation error kung hndi success
      echo form_open('portfolio/send_email'); // location sang maproccess sa controller
                
//////////////////////////////////////////////
echo '<div class="row control-group">';
echo ' <div class="form-group has-success col-xs-6 "> ';

                

                echo form_label("Name: ", "fullname"); //label, not bigdeal
                /////////////////////////////////////////////////
                        $data = array (

                                "name"   => "fullname",
                                "id"     => "fullname",
                                "value"  => set_value("fullname") // set value para bisan tapos isend ara gyapon ang value


                                );
                         echo form_input($data);

echo '</div>';
echo '</div>';

////////////////////////////////////////////////



/////////////////////////////////////////////////
                
echo '<div class="row control-group">';

echo ' <div class="form-group has-success col-xs-6 "> ';



                echo form_label("Email: ", "email"); //label
                        $data = array (

                                "name" => "email",
                                "id" => "email",
                                "value" => set_value("email")

                                );

                         echo form_input($data);

echo '</div>';
echo '</div>';
//////////////////////////////////////////////////////


/////////////////////////////////////////////////////////                 
echo '<div class="row control-group">';
echo ' <div class="form-group has-success col-xs-6 "> ';

                echo form_label("Message: ", "message"); //label
                echo '<br>';
                            
                         $data = array ( //ang unod sang array, name, id, value, ibutang sa variable $data

                                "name"  => "message",
                                "id"    => "message",
                                "value" => ""

                                );

                         echo form_textarea($data); //ang value sang textarea amo ang variable nga may unod array

echo '</div>';
echo '</div>';
////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////
echo '<div class="row control-group">';

echo ' <div class="form-group has-success col-xs-6 "> ';

echo    form_submit("contactsubmit", "Send!"); // ciempre pag submit malakat sa location sang action sa babaw, sa may controller

echo '</div>';
echo '</div>';
///////////////////////////////////////////////////////////////


echo form_close();

 ?>
 <!-- *************************************************************************-->


                  <!--   <form action="mail/ok" name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                         
                            <div class="form-group has-success col-xs-6 "> 
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" id="name" required data-validation-required-message="Please enter your name.">
                                

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                           
                                 <div class="form-group has-success col-xs-6 "> 
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                          
                                  <div class="form-group has-success col-xs-6 "> 

                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                          
                                      <div class="form-group has-success col-xs-6 "> 
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </section>

<!-- ******* ************************************************************************************************** -->





  <!-- Footer -->
<footer class="text-center">
        <div class="footer-above">


    <div class="container">
    <div class="row">


<div class="footer-col col-md-4">
                <h4><code>Location</code></h4>
                <address> <strong>Sto. Rosario Subd.</strong><br> Hinigaran,<br>
                        Negros Occidental<br> 
  <abbr title="Phone">P: (+63) 930-8370-191 </abbr>
   </address>

   <address> <strong>Ronel B. Llarenas</strong><br> 
    <a href="mailto:#">ronllarenas@yahoo.com</a> </address>
</div>



<!-- ******************************* -->
    <div class="footer-col col-md-4">
    <h5>Around the Web</h5>
            <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/Uy.KaCute" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                           
                           
                        </ul>
                        <br/>
                            <pre>https://www.facebook.com/Uy.KaCute </pre>

    </div>
    <!-- ************************************************** -->            


    <div class="footer-col col-md-4">

                       
    <div class="fb-follow" data-href="https://www.facebook.com/Uy.KaCute" data-width="55" data-height="55" data-layout="standard" data-show-faces="true"></div>


    </div>
     </div>
<!-- ************************************************** --> 


            </div>
        </div>
</footer>
  <!-- ************************************************** --> 


</div>

</div>


<!-- ******************FOOTER************* --> 
 <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        Copyright &copy; Ronel B. Llarenas 2015
                    </div>
                </div>
            </div>
        </div>
  
</footer>

<!-- ************************************************** --> 

 



    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) (y)-->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>




 <!-- MGA MODAL
**********************************************************************************
**********************************************************************************
**********************************************************************************
**********************************************************************************

-->


  <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">



        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>



            <div class="container">



<div class="row">
<div class="col-lg-8 col-lg-offset-2">
    <h2>Quotes</h2>
    <hr class="star-primary">

</div>
</div>





<div class="row">
                    <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                            <cite title="">
                                    The Quieter You Become The More You Can Hear.
                            </cite>
                           <!--  <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                
                            </ul> -->

                        </div>
                    </div>



                       <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                            <cite title="">
                                    The most free person in the world is the one who has nothing to hide.
                            </cite>
                            <!-- <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                
                            </ul> -->

    

                        </div>
                    </div>


                       <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                            <cite title="">
                                    When you judge another, you do not define them, you define yourself.
                            </cite>
                            <!-- <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                
                            </ul> -->

    

                        </div>
                    </div>


</div>




  <div class="container">

                <div class="row">
                    <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                            <cite title="">
                                 Sometimes the hardest thing and the right thing are the same.
                            </cite>
                           <!--  <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                
                            </ul> -->

                        </div>
                    </div>



                       <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                            <cite title="">
                                   There is a crack in everything, 
                                   that's how the lights get in.
                            </cite>
                            <!-- <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                
                            </ul> -->

    

                        </div>
                    </div>


                       <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                            <cite title="">
                                   Good people bring out the good in other people.
                            </cite>
                            <!-- <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                
                            </ul> -->

    

                        </div>
                    </div>

                </div>









                </div>



            </div>


  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
             
        </div>


    </div>







<div class="portfolio-modal modal fade bged" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">


        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>



       




            <div class="container">

<div class="row">
<div class="col-lg-8 col-lg-offset-2">
    <h2>Photos</h2>
    <hr class="star-primary">

</div>
</div>





                <div class="row">
                    <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                            <img src="<?php echo base_url(); ?>assets/images/mypic/1.jpg" width="200px" height="250px">
                           
                                <li>
                                   
                                     <cite title="">
                                   Picture of me during the pictorial
                            </cite>
                                </li>
                            
                                
                           

    

                        </div>
                    </div>



                       <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                           <img src="<?php echo base_url(); ?>assets/images/mypic/2.jpg" width="300px" height="250px">
                         
                                <li>
                                     <cite title="">
                                   with my classmates
                            </cite>
                                </li>
                                
                           

    

                        </div>
                    </div>


                       <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                         <img src="<?php echo base_url(); ?>assets/images/mypic/3.jpg" width="300px" height="250px">
                           
                                <li>
                                    <cite title="">
                                   During Graduation
                            </cite>
                                </li>
                                
                           
                        </div>
                    </div>





                </div>



 <div class="row">
                    <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                            <img src="<?php echo base_url(); ?>assets/images/mypic/4.jpg" width="300px" height="250px">
                          
                                <li>
                                    <cite title="">
                                  Me during the pictorial
                            </cite>
                                </li>
                    

                        </div>
                    </div>



                       <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                           <img src="<?php echo base_url(); ?>assets/images/mypic/5.jpg" width="300px" height="250px">
                          
                                <li>
                                     <cite title="">
                                  Me
                            </cite>
                                </li>
                                
                         

    

                        </div>
                    </div>


                       <div class="col-xs-4 col-lg-offset-2">
                        <div class="modal-body">
                        
                            
                          
                         <img src="<?php echo base_url(); ?>assets/images/mypic/6.jpg" width="220px" height="250px">
                          
                                <li>
                                    <cite title="">
                                   Picture of me during the Graduation
                            </cite>
                                </li>
                                
                          

    

                        </div>
                    </div>





                </div>




            </div>

 <div class="container">
  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
</div>
        </div>


    </div>






 <div class="portfolio-modal modal fade photobg" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-2">


                        <div class="modal-body">
                            <h2>Educational Background</h2>
                            <hr class="star-primary">
           
</div>
                    </div>
                </div>
            </div>




 
                <div class="">
                    <div class="col-lg-10 col-lg-offset-2">


                            <table class="table">

 <caption><font color="yellow">  From Elementary to College. </font></caption>
  


  <thead>
   
   <tr class="active">
<th>Course</th>
 <th>School</th>
 <th>Year</th>
  </tr>

</the




<tbody>

 <tr class="success"> 
    <td>Elementary</td>
     <td>Sto. Rosario Elementary School</td>
      <td>1999-2005</td>
 </tr> 

  <tr class="warning">
       <td>High School</td>
        <td>Hinigaran National High School</td>
        <td>2005-2009</td>

  </tr>



  <tr class="danger">
       <td>Computer Programming NCIV</td>
        <td>Bago City College</td>
        <td>2009-2011</td>

  </tr> 



 <tr class="success">
       <td>Bachelor of Science in Information Technology</td>
        <td>Central Philippines State University (Hinigaran Campus)</td>
        <td>2011-2015</td>

  </tr> 


</tbody>


 </table> <!-- table closing!-->


                          
                            <div class="container">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                       </div>


                        </div>
                    </div>
</div>
</div>

  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">



        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>



            <div class="container">



<div class="row">
<div class="col-lg-8 col-lg-offset-2">
    <h4>Under Maintenance</h4>
    <hr class="star-primary">

</div>
</div>


  <div class="container">

             

 <div class="col-sm-12">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/undermain.jpg" alt=""  width="150px" height="140px">
             </div>
</div>

                </div>



            </div>


  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
             
        </div>


    </div>







  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">



        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>



            <div class="container">



<div class="row">
<div class="col-lg-8 col-lg-offset-2">
    <h4>Under Maintenance</h4>
    <hr class="star-primary">

</div>
</div>








  <div class="container">

             

 <div class="col-sm-12">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/undermain.jpg" alt=""  width="150px" height="140px">
             </div>
</div>









                </div>



            </div>


  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
             
        </div>


    </div>






  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">



        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>



            <div class="container">



<div class="row">
<div class="col-lg-8 col-lg-offset-2">
    <h4>Under Maintenance</h4>
    <hr class="star-primary">

</div>
</div>








  <div class="container">

             

 <div class="col-sm-12">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/undermain.jpg" alt=""  width="150px" height="140px">
             </div>
</div>









                </div>



            </div>


  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
             
        </div>


    </div>

















     <!-- jQuery -->
   

    <!-- Bootstrap Core JavaScript ,,  para ni sa modal view!!-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   
    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
   


   
</body>

</html>

