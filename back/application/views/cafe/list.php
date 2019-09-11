
    <div class="wrap">
        <section class="app-content">
            <div class="row">

                <div class="col-md-12">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">Default DataTable</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Location</th>
                                        <th>Cost</th>
                                        <th>Place</th>
                                        <th>menu</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($places as $place) { ?>
                                    <tr>
                                        <td><?php echo $place['name'] ?></td>
                                        <td><?php echo $place['type'] ?></td>
                                        <td><?php echo $place['location'] ?></td>
                                        <td><?php echo $place['cost'] ?></td>
                                        <td><?php echo $place['place'] ?></td>
                                        <td><a href="<?php echo base_url('Menu/index/').$place['id'] ?>" class="btn btn-deepOrange">Menu</a></td>
                                    </tr>
                                    <?php }?>
                                    <tbody>



            </div><!-- .row -->
        </section><!-- .app-content -->
    </div><!-- .wrap -->

    <br>