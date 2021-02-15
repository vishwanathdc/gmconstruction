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

 <?php $data['active'] = 'gallery';
 $this->load->view('frontend/includes/header');?>
 <!-- Breadcroumb Area -->

 <!-- Breadcroumb Area -->

 <div class="breadcroumb-area bread-bg">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <div class="breadcroumb-title text-center">
           <h1>Gallery</h1>
           <h5><a href="<?php base_url();?>home">Home</a> / Gallery</h5>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Blog Section -->

 <div class="blog-area section-padding">
   <div class="container">
     <div class="row">
       <div class="col-lg-4 col-md-6 col-12">
         <div class="single-blog mb-150 wow fadeInLeft" data-wow-delay=".3s">
           <a href="single-blog.html" class="blog-img"><img src="assets/img/blog/1.jpeg" class="img-fluid" alt=""></a>
           <div class="blog-content"> <span><a href="#">Interior Design</a></span>
             <h3><a href="single-blog.html">What to Expect When Working with an Interior Designer</a></h3>
             <div class="blog-date">
               <p>April 10, 2019</p>
             </div>
             <a href="single-blog.html" class="read-more">Read More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-12">
         <div class="single-blog wow fadeInLeft" data-wow-delay=".4s">
           <a href="single-blog.html" class="blog-img"><img src="assets/img/blog/2.jpeg" class="img-fluid" alt=""></a>
           <div class="blog-content"> <span><a href="#">Architecture</a></span>
             <h3><a href="single-blog.html">Private Contemporary Home Balancing Openness</a></h3>
             <div class="blog-date">
               <p>May 23, 2019</p>
             </div>
             <a href="single-blog.html" class="read-more">Read More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-12">
         <div class="single-blog wow fadeInLeft" data-wow-delay=".5s">
           <a href="single-blog.html" class="blog-img"><img src="assets/img/blog/3.jpeg" class="img-fluid" alt=""></a>
           <div class="blog-content"> <span><a href="#">Exterior Design</a></span>
             <h3><a href="single-blog.html">Stylish Modern Ranch Exuding a Welcoming Feel</a></h3>
             <div class="blog-date">
               <p>June 07, 2019</p>
             </div>
             <a href="single-blog.html" class="read-more">Read More</a>
           </div>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 col-12">
         <div class="single-blog wow fadeInLeft" data-wow-delay=".6s">
           <a href="single-blog.html" class="blog-img"><img src="assets/img/blog/4.jpeg" class="img-fluid" alt=""></a>
           <div class="blog-content"> <span><a href="#">Interior Design</a></span>
             <h3><a href="single-blog.html">What to Expect When Working with an Interior Designer</a></h3>
             <div class="blog-date">
               <p>April 10, 2019</p>
             </div>
             <a href="single-blog.html" class="read-more">Read More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-12">
         <div class="single-blog wow fadeInLeft" data-wow-delay=".7s">
           <a href="single-blog.html" class="blog-img"><img src="assets/img/blog/5.jpeg" class="img-fluid" alt=""></a>
           <div class="blog-content"> <span><a href="#">Architecture</a></span>
             <h3><a href="single-blog.html">Private Contemporary Home Balancing Openness</a></h3>
             <div class="blog-date">
               <p>May 23, 2019</p>
             </div>
             <a href="single-blog.html" class="read-more">Read More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-12">
         <div class="single-blog mb-150 wow fadeInLeft" data-wow-delay=".8s">
           <a href="single-blog.html" class="blog-img"><img src="assets/img/blog/6.jpeg" class="img-fluid" alt=""></a>
           <div class="blog-content"> <span><a href="#">Exterior Design</a></span>
             <h3><a href="single-blog.html">Stylish Modern Ranch Exuding a Welcoming Feel</a></h3>
             <div class="blog-date">
               <p>June 07, 2019</p>
             </div>
             <a href="single-blog.html" class="read-more">Read More</a>
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

<!-- Copied from http://capricorn-theme.net/html/archipix/blog.html by Cyotek WebCopy 1.5.0.516, Wednesday, October 14, 2020, 1:52:47 PM -->
</html>
