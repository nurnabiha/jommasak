<div class="row">
    <div class="col-xs-12">
        <img src="<?php echo base_url('assets/img/jommasak-logo.png'); ?>" alt="" class="img img-fluid">
    </div>
    <div class="col-xs-12 col-sm-4 mx-auto" style="margin-top:25px;">
        <form action="<?php echo base_url('recipe/search_recipe'); ?>" method="post">
            <input type="text" class="form-control" name="keywords">
            <br>
            <button type="submit" class="btn btn-info">carian</button>
        </form>
    </div>
</div>