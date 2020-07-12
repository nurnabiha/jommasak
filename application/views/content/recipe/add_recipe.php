 
<!-- Start body area-->
<div class="sale-statistic-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                <div class="sale-statistic-inner notika-shadow mg-tb-30">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-wrap">
                                <div class="cmp-tb-hd cmp-int-hd">
                                    <h2>Tambah Resepi</h2>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Tajuk Resepi</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Tajuk Resepi" id="title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Kategori</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" id="category">
                                                        <?php 
                                                        foreach($category as $key)
                                                        { ?>
                                                            <option value="<?php echo $key['id']; ?>"><?php echo ucwords($key['cat_name']); ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>      
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Masa Penyediaan</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Masa Penyediaan" id="duration">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Hidangan</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Hidangan" id="serves">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Bahan-bahan</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="summernote-area">
                                                    <div class="summernote-wrap summernote-no-padding">
                                                        <div class="html-editor" id="ingredients"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Cara Penyedian</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="summernote-area">
                                                    <div class="summernote-wrap summernote-no-padding">
                                                        <div class="html-editor" id="steps"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental mg-t-15">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Gambar Masakan</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 text-center">
                                                <div id="dropzone1" class="multi-uploader-cs">
                                                    <form action="/upload" class="dropzone dropzone-nk needsclick" id="demo1-upload">
                                                        <div class="dz-message needsclick download-custom">
                                                            <i class="notika-icon notika-cloud"></i>
                                                            <h2>Lepaskan gambar disini atau tekan untuk memuat naik gambar.</h2>
                                                            <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                            </p>
                                                        </div>
                                                    </form>
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
                                            <button class="btn btn-success notika-btn-success" id="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>

            

            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                    <div class="past-day-statis">
                        <h2>Pautan Popular</h2>
                    </div>

                    <div class="past-day-statis">
                        <a href="#"><img src="<?php echo base_url('template/notika/img/test.jpg'); ?>" />
                            <p> sila tekan nak kemana mana ok!, bawah ade link lagi. </p>
                        </a>
                    </div>

                    <div class="past-day-statis">
                        <a href="#"><img src="<?php echo base_url('template/notika/img/test.jpg'); ?>" />
                            <p> sila tekan nak kemana mana ok!, bawah ade link lagi. </p>
                        </a>
                    </div>

                    <div class="past-day-statis">
                        <a href="#"><img src="<?php echo base_url('template/notika/img/test.jpg'); ?>" />
                            <p> sila tekan nak kemana mana ok!, bawah ade link lagi. </p>
                        </a>
                    </div>

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

<script>
    $(function(){

        $('#submit').click(function(){
            
            $.ajax({
                url : '<?php echo base_url('recipe/add_recipe');?>',
                type: 'post',
                data : {
                    title:$('#title').val(), 
                    category:$('#category').val(), 
                    duration:$('#duration').val(), 
                    serves:$('#serves').val(), 
                    ingredients:$('#ingredients').code(),
                    steps:$('#steps').code(),
                }
            }).done(function(response){ //
                console.log(response);
                location.reload();
            });
        });
        
    });
</script>
<!-- End body area-->