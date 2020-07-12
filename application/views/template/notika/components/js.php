
<!-- bootstrap JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/bootstrap.min.js');?>"></script>
<!-- wow JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/wow.min.js');?>"></script>
<!-- price-slider JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/jquery-price-slider.js');?>"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/owl.carousel.min.js');?>"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/jquery.scrollUp.min.js');?>"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/meanmenu/jquery.meanmenu.js');?>"></script>
<!-- counterup JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/counterup/jquery.counterup.min.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/counterup/waypoints.min.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/counterup/counterup-active.js');?>"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js');?>"></script>
<!-- jvectormap JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/jvectormap/jquery-jvectormap-2.0.2.min.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/jvectormap/jvectormap-active.js');?>"></script>
<!-- sparkline JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/sparkline/jquery.sparkline.min.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/sparkline/sparkline-active.js');?>"></script>
<!-- sparkline JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/flot/jquery.flot.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/flot/jquery.flot.resize.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/flot/curvedLines.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/flot/flot-active.js');?>"></script>
<!-- knob JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/knob/jquery.knob.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/knob/jquery.appear.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/knob/knob-active.js');?>"></script>
<!--  wave JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/wave/waves.min.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/wave/wave-active.js');?>"></script>
<!--  todo JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/todo/jquery.todo.js');?>"></script>
<!-- plugins JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/plugins.js');?>"></script>
<!--  Chat JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/chat/moment.min.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/chat/jquery.chat.js');?>"></script>
<!-- main JS
    ============================================ -->
<script src="<?php echo base_url('template/notika/js/main.js');?>"></script>

<!--  summernote JS
		============================================ -->
<script src="<?php echo base_url('template/notika/js/summernote/summernote-updated.min.js');?>"></script>
<script src="<?php echo base_url('template/notika/js/summernote/summernote-active.js');?>"></script>
<!-- dropzone JS
		============================================ -->
<script src="<?php echo base_url('template/notika/js/dropzone/dropzone.js');?>"></script>
<!-- bootstrap select JS
		============================================ -->
<script src="<?php echo base_url('template/notika/js/bootstrap-select/bootstrap-select.js');?>"></script>
<!-- sweet alert JS
		============================================ -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    <?php if($this->session->flashdata('error'))
    { ?>
        Swal.fire({
            icon: 'error',
            title: 'Ralat',
            html: "<?php echo trim(strip_tags($this->session->flashdata('error'))); ?>",
            // footer: '<a href>Why do I have this issue?</a>'
        })
    <?php 
    } ?>

    <?php if($this->session->flashdata('success'))
    { ?>
        Swal.fire({
            icon: 'success',
            title: 'Berjaya',
            html: "<?php echo trim(strip_tags($this->session->flashdata('success'))); ?>",
            // footer: '<a href>Why do I have this issue?</a>'
        })
    <?php 
    } ?>
    

</script>