<div id="dashboard">

    <!-- Navigation
    ================================================== -->

    <!-- Responsive Navigation Trigger -->
    <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

    <div class="dashboard-nav">
        <div class="dashboard-nav-inner">

            <ul data-submenu-title="Main">
<!--                //class active-->
                <li><a href="<?php echo base_url('statistika/').$_SESSION['lg'] ?>"><i class="sl sl-icon-settings"></i> Statistika</a></li>
                <li><a href="<?php echo base_url('qalereya') ?>"><i class="sl sl-icon-gallery"></i> Qalereya <span class="nav-tag messages">2</span></a></li>
<!--                <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Mesajlar <span class="nav-tag messages">2</span></a></li>-->
            </ul>



            <ul data-submenu-title="Account">

                <li><a href="<?php echo base_url('cixis') ?>"><i class="sl sl-icon-power"></i> Çıxış</a></li>
            </ul>

        </div>
    </div>
    <!-- Navigation / End -->