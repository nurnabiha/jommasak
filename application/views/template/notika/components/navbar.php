<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="<?php echo base_url('recipe');?>" class="codacaption">
                        <img src="<?php echo base_url('assets/img/jommasak-logo.png'); ?>" alt="jommasak logo" class="brand-logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <?php 
                        if($this->session->has_userdata('user')) 
                        { ?>
                            <li class="nav-item dropdown">
                                <a href="<?php echo base_url('recipe/create_recipe');?>">
                                    <button class="btn notika-btn-lightgreen btn-reco-mg btn-button-mg waves-effect" style="font-weight:600;">Tambah Resepi</button>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="<?php echo base_url('login/logout');?>">
                                    <button class="btn notika-btn-lightgreen btn-reco-mg btn-button-mg waves-effect" style="font-weight:600;">Daftar Keluar</button>
                                </a>
                            </li>
                        <?php 
                        } 
                        else 
                        { ?>
                            <li class="nav-item dropdown">
                                <a href="<?php echo base_url('login');?>">
                                    <button class="btn notika-btn-lightgreen btn-reco-mg btn-button-mg waves-effect" style="font-weight:600;">Daftar Masuk</button>
                                </a>
                            </li>
                        <?php 
                        } ?>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>