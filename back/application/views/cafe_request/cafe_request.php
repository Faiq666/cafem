
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
                                    <th>Number</th>
                                    <th>Location</th>
                                    <th>Desc</th>
                                </tr>
                                </thead>
                                <tbody>
             <?php foreach ($cafejoins as $cafejoin) {?>
                                    <tr>
                                        <td><?php echo $cafejoin['name'] ?></td>
                                        <td><?php echo $cafejoin['number'] ?></td>
                                        <td><?php echo $cafejoin['location'] ?></td>
                                        <td><?php echo $cafejoin['description'] ?></td>
                                        <td><a  href="<?php echo base_url('Cafejoin/delete/'.$cafejoin['id']) ?>" class="btn btn-deepOrange">Delete</a></td>

                                    </tr>
<?php } ?>
                                <tbody>



                        </div><!-- .row -->
    </section><!-- .app-content -->
</div><!-- .wrap -->

<br>