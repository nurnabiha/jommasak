
<!-- Start Login area-->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="notika-shadow mg-tb-30">
                </div>
            </div>
        </div>
        
        <div class="row">

            <div class="col-xs-12">
                <div class="sale-statistic-inner notika-shadow mg-tb-30">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-wrap mg-t-30">
                                
                                <form action="<?php echo base_url('login/verify');?>" method="post">
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="hrzn-fm">Emel</label>
                                                </div>
                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control input-sm" placeholder="Masukkan emel" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental mg-t-15">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="hrzn-fm">Kata Laluan</label>
                                                </div>
                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input type="password" class="form-control input-sm" placeholder="Masukkan kata laluan" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="form-example-int mg-t-15">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <button class="btn btn-success notika-btn-success">Daftar Masuk</button> <br><br>
                                                Belum mendaftar? Tekan <a href="<?php echo base_url('login/register_page');?>">sini</a> untuk mendaftar. 
                                            </div>
                                            
                                        </div>
                                    </div>
                                </form>
                                
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Login area-->