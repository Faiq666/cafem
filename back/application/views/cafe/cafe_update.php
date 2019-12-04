<?php $this->load->view('includes/head') ?>

<?php if($this->session->userdata('err')){ ?>
    <div class="alert alert-danger">
        <?php echo $this->session->userdata('err'); $this->session->unset_userdata('err') ?>
    </div>
<?php } ?>


    <form action="<?php echo base_url("Cafe/updateAct/").$getNew["id"]?> " method="post" enctype="multipart/form-data">
        <label for="">Ad</label>
        <input type="text" name="name" class="form-control" placeholder="name" value="<?php echo $getNew["name"]?>"> <br>
        <input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $getNew["username"]?>"> <br>
        <input type="password" name="password" class="form-control" placeholder="password" value="<?php echo $getNew["password"]?>"> <br>
        <select name="type" class="form-control">
            <option <?php if($getNew["type"] == ""){ echo"selected"; } ?> value="">Secin</option>
            <option  <?php if($getNew["type"] == "ailevi"){ echo"selected"; } ?> value="ailevi">Ailevi</option>
            <option  <?php if($getNew["type"] == "diger"){ echo"selected"; } ?> value="diiger">Diger</option>
        </select> <br>
        <input type="text" name="location" class="form-control" placeholder="location" value="<?php echo $getNew["location"]?>"> <br>
        <input type="text" name="cost" class="form-control" placeholder="cost" value="<?php echo $getNew["cost"]?>"> <br>
        <input type="text" name="place" class="form-control" placeholder="place" value="<?php echo $getNew["place"]?>"> <br>


        <button type="submit" class="btn btn-info">Update</button>
    </form>

<?php $this->load->view('includes/foot') ?>