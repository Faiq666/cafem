<form action="<?php echo base_url("Cafe/add_action")?> " method="post" enctype="multipart/form-data">
    <label for="">Ad</label>
    <input type="text" name="name" class="form-control" placeholder="name"> <br>
    <select name="type" class="form-control">
        <option value="">Secin</option>
        <option value="ailevi">Ailevi</option>
        <option value="diiger">Diger</option>
    </select> <br>
    <input type="text" name="location" class="form-control" placeholder="location"> <br>
    <input type="text" name="cost" class="form-control" placeholder="cost"> <br>
    <input type="text" name="place" class="form-control" placeholder="place"> <br>


    <button type="submit" class="btn btn-info">Daxil Et</button>
</form>