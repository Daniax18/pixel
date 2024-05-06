      <!-- *************
				************ Main container start *************
			************* -->
      <div class="main-container">

        <!-- Page header starts -->
        <div class="page-header">

          <div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>

            <!-- Breadcrumb start -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <i class="<?php echo $icon ?>"></i>
              </li>
              <li class="breadcrumb-item breadcrumb-active" aria-current="page">
                <?php echo $page_title ?>
              </li>
            </ol>
            <!-- Breadcrumb end -->

            <!-- Header actions ccontainer start -->
            <div class="header-actions-container">

              <!-- Header actions start -->
              <ul class="header-actions">

                <!-- Messages end -->
                <li class="dropdown">
                  <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name d-none d-md-block">Bonjour Admin</span>
                    <span class="avatar">
                      <img src="<?php echo base_url() ?>assets/bo/images/user3.png" alt="Free Admin Templates">
                      <span class="status busy"></span>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                      <a href="profile.html">Profile</a>

                      <a href="<?php echo site_url("fo/connexion/logout") ?>">Logout</a>
                    </div>
                  </div>
                </li>
              </ul>
              <!-- Header actions end -->

            </div>
            <!-- Header actions ccontainer end -->

          </div>
          <!-- Page header ends -->

          <!-- Content wrapper scroll start -->
          <div class="content-wrapper-scroll">

            <!-- Content wrapper start -->
            <div class="content-wrapper">