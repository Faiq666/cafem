<div class="col-md-12">
    <h1 class="m-b-lg"><?php echo $cafe['name'] ?></h1>
    <?php for ($i = 2; $i <= (count($menu) - 1); $i++){ ?>
        <?php if ($single_menu[$menu[$i]] != 0) { ?>
    <div class="widget p-lg">

        <h4 class="m-b-lg"><?php echo $menu[$i] ?></h4>


        <table class="table">
            <?php for ($x = 1; $x <= (count(${$menu[$i]}) - 1); $x++){ ?>
            <tr>
                <th><?php echo ${$menu[$i]}[$x] ?></th>
                <th><?php echo ${"$menu[$i]_single"}[${$menu[$i]}[$x]] ?></th>
                <th></th>
            </tr>
            <?php } ?>
        </table>

            <br>
            <br>

    </div><!-- .widget -->
            <a class="btn btn-danger" href="<?php echo base_url('Menu/delete/'.$single_menu['id']."/".$single_menu[$menu[$i]]."/".$menu[$i]."/".$id) ?>">delete</a>
            <br>
            <br>
        <?php } ?>
    <?php } ?>
</div><!-- END column -->