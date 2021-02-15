<!-- Header Area -->
<div id="style-1" class="header-area">
  <div class="sticky-area">
    <div class="navigation">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="logo">
              <a href="#"><img src="assets/img/logo.jpg" alt="archipix-logo"></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="main-menu">
              <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>" class="nav-link <?php  if (isset($active)) { echo  ($active == 'home') ? 'active':'' ; }?>">Home</a>
                    </li>
                    <li class="nav-item">
                      <a  href="<?php echo base_url(); ?>about" class="nav-link <?php  if (isset($active)) { echo  ($active == 'about') ? 'active':'' ; }?>">About</a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>service" class="nav-link <?php  if (isset($active)) { echo  ($active == 'service') ? 'active':'' ; }?>">Services</a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>contact" class="nav-link <?php  if (isset($active)) { echo  ($active == 'contact') ? 'active':'' ; }?>">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
