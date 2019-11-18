<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title">Dropzone</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">
                <form data-url="<?php echo base_url('cafe/cafe_gallery_refresh/'.$id)?>" action="<?php echo base_url('cafe/cafe_gallery_add_act/'.$id)?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url('cafe/cafe_gallery_add_act/'.$id)?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Drop files here or click to upload.</h3>
                        <p class="m-b-lg text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->
<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <b>aa</b> kaydına ait Resimler
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body gallery_render">

                    <?php $this->load->view("cafe/render/render_gallery") ?>


            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>