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

<h1>Menyu Add <h3 style="color: darkred"><?php if ($cafe_id != 0){ echo "Cafe: ".rawurldecode($cafe_name); } ?></h3> </h1>
<form action="<?php echo base_url('Menu/add_menu_act') ?>" method="post" enctype="multipart/form-data">

    <?php if ($cafe_id != 0){ ?>
        <input type="hidden" name="cafe" value="<?php echo $cafe_id ?>">
    <?php }else{ ?>
        <label for="cafe">Cafe</label>
    <select name="cafe" id="cafe" class="form-control">
        <option value="">sec</option>
        <?php foreach ($cafes as $cafe) { ?>
            <?php foreach ($allmenu as $single_menu){
                if ($single_menu['place_id'] == $cafe['id']){
                    $menucheck = 0;
                    break;
                }else{ $menucheck = 1; }
            } ?>
            <?php if ($menucheck != 0) { ?>
        <option value="<?php echo $cafe['id'] ?>"><?php echo $cafe['name'] ?></option>
            <?php } ?>
        <?php } ?>
    </select>
    <?php } ?>

<?php for ($i = 2; $i <= count($menu) - 1 ; $i++){ ?>
    <br>
<label for="trigger"><h3 style="color: #09743e">  <?php  echo $menu[$i] ?></h3></label>
<input id="trigger" type="checkbox" name="<?php echo $menu[$i] ?>">

<div class="box">
    <?php foreach (array_slice(${$menu[$i]},1) as $sub) { ?>
    <h3><label for="" class="badge badge-light" ><?php echo $sub ?></label></h3>
    <input class="form-control" type="text" name="<?php echo $sub ?>">
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
