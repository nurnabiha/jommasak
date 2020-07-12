 
<!-- Start body area-->
<div class="sale-statistic-area">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <div class="notika-shadow mg-tb-30">
                    <?php $this->load->view('content/recipe/search_box'); ?>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                <div class="sale-statistic-inner notika-shadow mg-tb-30">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn title-center">
                            <?php 
                            if(!empty($recipe_name) && !empty($recipe_owner) )
                            { ?>
                                <h3><?php echo ucwords($recipe_name); ?></h3>
                                oleh <a href="#"><?php echo ucwords($recipe_owner); ?></a>
                            <?php 
                            } ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 mx-auto mb-1">
                            <img src="<?php echo base_url('template/notika/img/test.jpg'); ?>" />   
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12 curved-ctn mb-1">
                            <p>Diterbitkan : <?php echo $publish_date; ?></p> 
                            <p>Kategori : <?php echo ucwords($category).', '.ucwords($sub_category); ?></p>
                            <p>Masa Penyediaan : <?php echo $preparation_time; ?></p>
                            <p>Hidangan : <?php echo $people_per_serve; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12 curved-ctn mb-1">
                            <h2>Bahan-bahan</h2>
                            <div class="tpgp-al-cl">
                                <ul class="tpdg-ul-circle">
                                    <?php echo $ingredients; ?>
                                   
                                
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12 curved-ctn mb-1">
                            <h2>Cara Penyedian</h2>
                            <?php echo $steps; ?>
                            
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                    <div class="past-day-statis">
                        <h2>Pautan Popular</h2>
                    </div>

                    <?php if(!empty($popular_recipes))foreach($popular_recipes as $key => $popular){ ?>
                    <div class="past-day-statis">
                        <a href="<?php echo base_url('recipe/details_recipe/'.$popular['id']); ?>"><img src="<?php echo base_url('template/notika/img/test.jpg'); ?>" />
                            <p><?php echo $popular['title']; ?> </p>
                        </a>
                    </div>
                    <?php } ?>


                    <div class="past-day-statis">
                        <a href="#">
                            Lihat lagi <i class="notika-icon notika-arrow-right atc-sign"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End body area-->