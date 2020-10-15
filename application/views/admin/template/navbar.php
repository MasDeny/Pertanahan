<!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">

                <a href="dashboard" class="navbar-brand" style="padding-left: 0px">
                 Admin Panel
                </a>


              <ul class="nav navbar-nav navbar-right user-nav" style="padding-right: 35px">
                <li class="user-name"><span><?php echo $user; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo base_url(); ?>assets/images/photos/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#" data-toggle="modal" data-target="#unvailable"><span class="fa fa-envelope-o text-info"></span> Pesan</a></li>
                     <li><a href="#" data-toggle="modal" data-target="#unvailable"><span class="fa fa-calendar text-primary"></span> Agenda</a></li>
                     <li role="separator" class="divider bg-warning"></li>
                      <li><a href="<?php echo base_url('cache/logout'); ?>"><span class="fa fa-sign-out text-danger"></span> Keluar</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
