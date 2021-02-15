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

 <?php $data['active'] = 'about';
 $this->load->view('frontend/includes/header');?>
 <!-- Breadcroumb Area -->

 <div class="breadcroumb-area bread-bg">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <div class="breadcroumb-title text-center">
           <h1>About Us</h1>
           <h5><a href="<?php base_url();?>home">Home</a> / About</h5>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Intro Section-->

 <div id="info-2" class="about-area section-padding">
   <div class="container">
     <div class="row">
       <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
         <div class="about-bg">
           <img src="assets/img/info/about-2.jpeg" alt="">
         </div>
       </div>
       <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
         <div class="info-content-area">
           <div class="section-title">
             <h6>Introduction</h6>
             <h2>Creative Solutions by <br><b>Professional Architect</b></h2>
           </div>
           <p class="heading"><b>We believe the designer willl be able to design a good for learnin suit lead project. We are readly to create various architechural design.</b></p>

           <p class="highlight"><i class="las la-check-square"></i>Since starting our launch to deliver high value project.</p>
           <p class="highlight"><i class="las la-check-square"></i>We always build superior & latest concept design</p>
           <p class="highlight"><i class="las la-check-square"></i>Uninque latest equipment used the project build.</p>
           <p>We are buildi hight quality projects lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea enim et, similique, minus soluta ducimus.</p>
           <div class="row founded">
             <div class="col-lg-4">
               <div class="years"><span>25</span>Year of Success</div>
             </div>
             <div class="col-lg-8">
               <div class="text">Since we established in 1987 experience &amp; still a growing protfolio day by day!</div>
             </div>
           </div>
         </div>

       </div>

     </div>
   </div>
 </div>


 <!-- Choose Area -->

 <div class="choose-us-area section-padding">
   <div class="container">
     <div class="row">
       <div class="offset-lg-2 col-lg-8 text-center">
         <div class="section-title">
           <h6>Why Choose Us</h6>
           <h2>We offer <b>perfect real</b> <br>architecture service</h2>
         </div>
       </div>
     </div>
     <div class="choose-us-wrapper wow fadeInUp" data-wow-delay=".3s">
       <div class="row no-gutters">
         <div class="col-lg-3 col-md-6 col-12">
           <div class="choose-us-inner">
             <div class="choose-us-icon">
               <img src="assets/img/icon/town.png" alt="">
             </div>
             <h5>High Quality Build</h5>
             <p>We help you find a architect by offering interior experience</p>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
           <div class="choose-us-inner">
             <div class="choose-us-icon">
               <img src="assets/img/icon/architect.png" alt="">
             </div>
             <h5>Experienced Architect</h5>
             <p>We help you find a architect by offering interior experience</p>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
           <div class="choose-us-inner">
             <div class="choose-us-icon">
               <img src="assets/img/icon/house-design.png" alt="">
             </div>
             <h5>Modern Concept</h5>
             <p>We help you find a architect by offering interior experience</p>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12">
           <div class="choose-us-inner">
             <div class="choose-us-icon">
               <img src="assets/img/icon/blueprint.png" alt="">
             </div>
             <h5>Unique Solution</h5>
             <p>We help you find a architect by offering interior experience</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 <div class="spacer section-padding">
 </div>
 <!-- Achievement Section -->

 <!-- Footer Area -->
 <?php $this->load->view('frontend/includes/footer');?>

 <!-- Scroll Top Area -->
 <a href="#top" class="go-top"><i class="las la-angle-up"></i></a>
<?php $this->load->view('frontend/includes/foot');?>
</body></html>
