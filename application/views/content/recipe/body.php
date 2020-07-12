 
<!-- Start body area-->
<div class="sale-statistic-area">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <div class="notika-shadow mg-tb-30">
                    <?php $this->load->view('content/recipe/search_box');?>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                <div class="sale-statistic-inner notika-shadow mg-tb-30">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <?php 
                                if(!empty($category) && !empty($sub_category))
                                { ?>
                                    <h2><?php echo ucwords($category).', '.ucwords($sub_category); ?></h2>
                                <?php 
                                } else 
                                { ?>
                                    <h2><?php echo (!empty($page_name))?ucwords($page_name):'Resepi Terbaru'; ?></h2>
                                <?php 
                                }
                            ?>
                            
                        </div>
                    </div>

                    <div class="row">
                        <?php if(!empty($recipes)) foreach($recipes as $key => $recipe){ ?>
                        <div class="col-lg-4 col-md-6 col-xs-12 curved-ctn mb-1">
                            <a href="<?php echo base_url('recipe/details_recipe/'.$recipe['id']);?>"><img src="<?php echo base_url('template/notika/img/test.jpg'); ?>" />
                                <p><?php echo ucfirst($recipe['title']); ?></p>
                            </a>
                        </div>
                        <?php } ?>
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