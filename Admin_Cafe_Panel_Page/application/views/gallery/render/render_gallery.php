<table class="table table-bordered table-striped table-hover pictures_list">
    <thead>
    <th>Image</th>
    <th>Image Name</th>
    <th>Status</th>
    <th>İşlem</th>
    </thead>
    <tbody>
<?php foreach ($gallery as $gal) {?>
    <tr>
        <td class="w100 text-center">
            <img width="30" src="<?php echo base_url('uploads/cafe_gallery/'.$gal['image']) ?>" alt="" class="img-responsive">
        </td>
        <td><?php echo $gal['image'] ?>></td>
        <td class="w100 text-center">
            <input
                data-url="<?php echo base_url("cafe/gallery_active/".$gal['id']); ?>"
                class="isActive"
                type="checkbox"
                data-switchery
                data-color="#10c469"
                <?php echo (true) ? "checked" : ""; ?>
            />
        </td>
        <td class="w100 text-center">
            <button
                data-url="<?php echo base_url("Cafe/gallery_delete/".$gal["id"]."/".$id); ?>"
                class="btn btn-sm btn-danger btn-outline remove-btn btn-block delete">
                <i class="fa fa-trash"></i> Sil
            </button>
        </td>
    </tr>
<?php } ?>



</tbody>
</table>