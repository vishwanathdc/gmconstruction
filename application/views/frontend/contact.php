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

 <!-- Header Area -->

 <?php $data['active'] = 'contact';
 $this->load->view('frontend/includes/header');?>

 <!-- Breadcroumb Area -->

 <div class="breadcroumb-area bread-bg">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <div class="breadcroumb-title text-center">
           <h1>Contact</h1>
           <h5><a href="<?php base_url();?>home">Home</a> / Contact</h5>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Contact Section -->

 <div class="contact-section section-padding">
   <div class="container">
     <div class="row">
       <div class="col-lg-6 col-md-6 col-12 wow fadeInLeft">
         <div class="contact-info">
           <div class="section-title">
             <h6>Contact Us</h6>
             <h2>Get in <b>Touch</b></h2>
           </div>
           <p>If you have a contact Lorem ipsum dolor sit amet cum maiores, excepturi fuga, est doloremque praesentium!</p>
           <div class="contact-content">
             <div class="contact-inner">
               <i class="las la-map-marker"></i>
               <h6>Visit Us</h6>
               <p>66 Broklyn Streen NY, USA</p>
             </div>
             <div class="contact-inner">
               <i class="las la-envelope"></i>
               <h6>Email Address</h6>
               <p>info@archipix.com</p>
             </div>
             <div class="contact-inner">
               <i class="las la-phone"></i>
               <h6>Call Now</h6>
               <p>+88 120 2468</p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-lg-6 col-md-6 col-12 wow fadeInRight">
         <div class="contact-form">
           <form id="contactform" action="<?php echo base_url().'contact'; ?>" enctype="multipart/form-data" method="POST">
             <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                 <input type="text" name="name" tabindex="1" class="form-control" value="" placeholder="Your Name" required=" ">
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                 <input type="email" name="email" tabindex="2" class="form-control" value="" placeholder="E-mail" required=" ">
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                 <input type="tel" name="phone" tabindex="3" class="form-control contact_phone" value="" placeholder="Phone Number" required=" ">
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                 <input type="text" name="subject" tabindex="4" class="form-control" value="" placeholder="Subject" required=" ">
               </div>
               <div class="col-lg-12">
                 <textarea name="message" tabindex="5" class="form-control" value=""  cols="30" rows="10" placeholder="Write Message" required=" "></textarea>
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                 <button type="submit" class="main-btn">Submit</button>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Footer Area -->
<?php $this->load->view('frontend/includes/footer');?>

 <!-- Scroll Top Area -->
 <a href="#top" class="go-top"><i class="las la-angle-up"></i></a>
<?php $this->load->view('frontend/includes/foot');?>
<script src="<?php echo base_url() ;?>assets/js/bootstrapValidator.min.js"></script>
<script src="<?php echo base_url() ;?>assets/js/jquery.mask.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$(".contact_phone").mask("999-999-9999");
$('#contactform').bootstrapValidator({
   message: 'This value is not valid',
      fields: {
       name: {
             validators: {
               notEmpty: {
                   message: 'This field is required '
               },
               regexp: {
                     regexp: /^([a-zA-Z]+([. s]?[a-zA-Z])*)$/,
                     message: 'Enter name  like Jhon / Doe'
                 }
             }
       },
       phone: {
       validators: {
           notEmpty: {
               message: 'This field is required'
           },
           regexp: {
                 regexp: /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/,
                 message: 'Enter phone like 123-456-7890'
             }
       }
   },
       email: {
       validators: {
           notEmpty: {
               message: 'This field is required'
           },
           emailAddress: {
               message: 'The input is not a valid email address'
           }
       }
   },
   subject: {
   validators: {
       notEmpty: {
           message: 'This field is required'
       },
       subject: {
           message: 'Enter subject'
       }
   }
},
   message: {
       validators: {
         notEmpty: {
             message: 'This field is required '
         },
         stringLength: {
             min: 5,
             max: 500,
           message: 'Mininum 5 characters required'
         },
       }
 },
     }
   });
});
</script>
</body>
</html>
