<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('frontend/includes/head');?>
<style>
  .Modern-Slider .item h5 {
  width: 100% !important;
  }
  .pr_40 {
    padding-right: 30px !important;
}
padding.margin.css:121
.pl_40 {
    padding-left: 30px !important;
}
.service_section .img_over_content {
    background: #F6F3EF none repeat scroll 0 0;
    height: 100%;
    padding: 16px 25px 20px !important;
    position: absolute;
    top: 0;
    width: 100%;
}
.active{
 color: #dfb163 !important;
   background: #fff;
   border-bottom: 2px solid #dfb163
}
.help-block{
    color: #f3064c;
}
</style>
<body>
 <!-- Pre-Loader -->
 <div id="loader">
   <div class="loading">
     <div></div>
   </div>
 </div>

 <!-- Header Area -->

 <?php $data['active'] = 'service';
 $this->load->view('frontend/includes/header');?>

 <div class="breadcroumb-area bread-bg">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <div class="breadcroumb-title text-center">
           <h1>Services</h1>
           <h5><a href="<?php base_url();?>home">Home</a> / Services</h5>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Services Area-->

 <div class="services-area section-padding">
   <div class="container">
     <div class="row">
       <div class="offset-lg-2 col-lg-8 text-center">
         <div class="section-title">
           <h2>We are provided great<b><br> Architecture Professional</b></h2>
           <p>Combining Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laboriosam omnis cum, natus doloremque perferendis.</p>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service-area wow fadeInUp" data-wow-delay=".3s">
           <div class="service-icon">
             <i class="flaticon-architecture"></i>
           </div>
           <h5>Architecture</h5>
           <p>Architecture Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, libero.</p>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service-area service-2 wow fadeInUp" data-wow-delay=".4s">
           <div class="service-icon">
             <i class="flaticon-sketch"></i>
           </div>
           <h5>Exterior & Interior</h5>
           <p>Architecture Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, libero.</p>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service-area service-3 wow fadeInUp" data-wow-delay=".5s">
           <div class="service-icon">
             <i class="flaticon-floor-plan"></i>
           </div>
           <h5>Project Planning</h5>
           <p>Architecture Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, libero.</p>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service-area service-4 wow fadeInUp" data-wow-delay=".6s">
           <div class="service-icon">
             <i class="flaticon-town"></i>
           </div>
           <h5>Landscape Design</h5>
           <p>Architecture Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, libero.</p>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service-area service-5 wow fadeInUp" data-wow-delay=".7s">
           <div class="service-icon">
             <i class="flaticon-city-hall"></i>
           </div>
           <h5>Commercial Design</h5>
           <p>Architecture Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, libero.</p>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service-area service-6 wow fadeInUp" data-wow-delay=".8s">
           <div class="service-icon">
             <i class="flaticon-home"></i>
           </div>
           <h5>Residential Design</h5>
           <p>Architecture Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, libero.</p>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!--Process Area -->

 <div class="featured-process-area">
   <div class="content-area">
     <div class="process-grids bg-cover clearfix">
       <div class="overlay-2"></div>
       <div class="grid">
         <div class="inner">
           <span class="count">01.</span>
           <h3>Reasearch & Analysis</h3>
           <p>Travelling salesman and above it there hung a picture that he had recently cut out</p>
           <a href="#" class="main-btn">Read More</a>
         </div>
       </div>
       <div class="grid">
         <div class="inner">
           <span class="count">02.</span>
           <h3>Creative Solutions</h3>
           <p>Travelling salesman and above it there hung a picture that he had recently cut out</p>
           <a href="#" class="main-btn">Read More</a>
         </div>
       </div>
       <div class="grid">
         <div class="inner">
           <span class="count">03.</span>
           <h3>Project Launch</h3>
           <p>Travelling salesman and above it there hung a picture that he had recently cut out</p>
           <a href="#" class="main-btn">Read More</a>
         </div>
       </div>
       <div class="grid">
         <div class="inner">
           <span class="count">04.</span>
           <h3>Building</h3>
           <p>Travelling salesman and above it there hung a picture that he had recently cut out</p>
           <a href="#" class="main-btn">Read More</a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Services Area -->

 <div id="service-3" class="services-area section-padding">
   <div class="container">
     <div class="row">
       <div class="offset-lg-2 col-lg-8 text-center">
         <div class="section-title">
           <h6>Best Feature</h6>
           <h2>Innovative <b>Services</b></h2>
           <p>Combining Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laboriosam omnis cum, natus doloremque perferendis.</p>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service wow fadeInLeft" data-wow-delay=".3s">
           <div class="service-bg">
             <img src="assets/img/service/1.jpeg" alt="">
           </div>
           <div class="service-content">
             <h3>Interior Design</h3>
             <a href="<?php base_url();?>service" class="read-more">Read More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service wow fadeInLeft" data-wow-delay=".4s">
           <div class="service-bg">
             <img src="assets/img/service/2.jpeg" alt="">
           </div>
           <div class="service-content">
             <h3>Exterior Design</h3>
             <a href="<?php base_url();?>service" class="read-more">Read More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service wow fadeInLeft" data-wow-delay=".5s">
           <div class="service-bg">
             <img src="assets/img/service/3.jpeg" alt="">
           </div>
           <div class="service-content">
             <h3>Floor Design</h3>
             <a href="<?php base_url();?>service" class="read-more">Read More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service wow fadeInLeft" data-wow-delay=".6s">
           <div class="service-bg">
             <img src="assets/img/service/4.jpeg" alt="">
           </div>
           <div class="service-content">
             <h3>Home Decor</h3>
             <a href="<?php base_url();?>service" class="read-more">Read More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service wow fadeInLeft" data-wow-delay=".7s">
           <div class="service-bg">
             <img src="assets/img/service/5.jpeg" alt="">
           </div>
           <div class="service-content">
             <h3>Interior Design</h3>
             <a href="<?php base_url();?>service" class="read-more">Read More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="single-service wow fadeInLeft" data-wow-delay=".8s">
           <div class="service-bg">
             <img src="assets/img/service/6.jpeg" alt="">
           </div>
           <div class="service-content">
             <h3>Exterior Design</h3>
             <a href="<?php base_url();?>service" class="read-more">Read More</a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Footer Area -->

<?php $this->load->view('frontend/includes/footer');?>

 <div class="footer-bottom">
   <div class="container">
     <div class="row justify-content-center align-items-center">
       <div class="col-lg-6 col-md-6 col-sm-12">
         <p class="copyright-line">© 2020 Archipix. All rights reserved.</p>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-12">
         <p class="privacy">Privacy Policy | Terms &amp; Conditions</p>
       </div>
     </div>
   </div>
 </div>

 <!-- Scroll Top Area -->
 <a href="#top" class="go-top"><i class="las la-angle-up"></i></a>

<?php $this->load->view('frontend/includes/foot');?>
</body>
</html>
