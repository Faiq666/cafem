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

<h1 >Menyular</h1>
<form action="<?php echo base_url('Menu/add_menu_act') ?>" method="post" enctype="multipart/form-data">
    <label for="cafe">Cafe</label>
    <select name="cafe" id="cafe" class="form-control">
        <option value="">sec</option>
        <?php foreach ($cafes as $cafe) { ?>
        <option value="<?php echo $cafe['id'] ?>"><?php echo $cafe['name'] ?></option>
        <?php } ?>
    </select>
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
