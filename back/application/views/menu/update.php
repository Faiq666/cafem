<style>
    .box {
        display: none;
        /*background: #ccc;*/
        /*width: 200px;*/
        /*height: 100px;*/
    }
    #trigger:checked + .box {
        display: contents;
    }
</style>

<?php //for ($i = 2; $i <= count($menu) - 1 ; $i++){ ?>
<!--    <h1 style="color: #09743e">  --><?php // echo $menu[$i] ?><!--</h1> <br>-->
<!--    --><?php //foreach (array_slice(${$menu[$i]},1) as $sub) { ?>
<!--        <h3><label for="" class="badge badge-light" >--><?php //echo $sub ?><!--</label></h3>-->
<!--        <input class="form-control" type="text">-->
<!--    --><?php //}?>
<?php //} ?>

<h1>Menyu Add <h3 style="color: darkred"><?php echo $cafe['name'] ?></h3> </h1>
<form action="<?php echo base_url('Menu/update_act/'.$single_menu['id']) ?>" method="post" enctype="multipart/form-data">


        <input type="hidden" name="cafe" value="<?php echo $cafe['id'] ?>">


    <?php for ($i = 2; $i <= count($menu) - 1 ; $i++){ ?>
        <br>
        <label for="trigger"><h3 style="color: #09743e">  <?php  echo $menu[$i] ?></h3></label>
        <input id="trigger" type="checkbox" name="<?php echo $menu[$i] ?>" <?php if ($single_menu[$menu[$i]] != 0){ echo "checked"; } ?>>

        <div class="box">
            <?php foreach (array_slice(${$menu[$i]},1) as $sub) { ?>
                <h3><label for="" class="badge badge-light" ><?php echo $sub ?></label></h3>
                <input class="form-control" type="text" name="<?php echo $sub ?>" value="<?php  echo ${"$menu[$i]_single"}[$sub] ?>">
            <?php }?>
        </div>

    <?php } ?>
    <br>
    <button class="btn btn-default">add</button>
</form>
<?php
$this->session->unset_userdata('cafe_id');
$this->session->unset_userdata('cafe_name');
?>
