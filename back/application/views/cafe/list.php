
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
                                        <th>username</th>
                                        <th>password</th>
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
                                        <td><?php echo $place['username'] ?></td>
                                        <td><?php echo $place['password'] ?></td>
                                        <td><?php echo $place['type'] ?></td>
                                        <td><?php echo $place['location'] ?></td>
                                        <td><?php echo $place['cost'] ?></td>
                                        <td><?php echo $place['place'] ?></td>
                                        <?php foreach ($allmenu as $single_menu){
                                            if ($single_menu['place_id'] == $place['id']){
                                                $menucheck = 0;
                                                break;
                                            }else{ $menucheck = 1; }
                                        } ?>
                                        <td><a href="<?php echo base_url('Cafe/cafe_gallery_add/'.$place['id']) ?>" class="btn btn-info">Gallery</a></td>
                                        <td><a href="" class="btn btn-deepOrange">Update</a></td>
                                        <td><a href="<?php echo base_url('Cafe/delete/'.$place['id']) ?>" class="btn btn-deepOrange">Delete</a></td>
                                        <?php if ($menucheck == 0) { ?>


                                        <td><a href="<?php echo base_url('Menu/index/').$place['id'] ?>" class="btn btn-deepOrange">Menu</a></td>
                                        <?php }else{ ?>



                                        <td><a  href="<?php echo base_url('Menu/menu_add/').$place['id']."/".$place['name'] ?>" class="btn btn-deepOrange">Menu add</a></td>
                                        <?php } ?>
                                    </tr>
                                    <?php }?>
                                    <tbody>



            </div><!-- .row -->
        </section><!-- .app-content -->
    </div><!-- .wrap -->

    <br>