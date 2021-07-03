<form action="" method="POST" id="add_sub_category_frm" enctype="multipart/form-data">
    <div class="form-group">
        <select class="form-control" name="category_id" id="category_id">
            <option value="">Select Category</option>
            <?php foreach ($sub_category as $v_sub) { ?>
                <option value="<?php echo $v_sub->id; ?>"><?php echo $v_sub->category_name; ?></option>
            <?php } ?>
        </select>
        <span id="u1"></span>
    </div><br>
    <div class="form-group">
        <input id="sub_category_name"  name="sub_category_name" type="text" class="form-control"
               placeholder="Sub Category Name....">
        <span id="u2"></span>
    </div><br>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" value="Add Sub Category">
    </div>
    <div id="add_msg" class="text-center"></div>
</form>
<p id="add_msg"
   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
    Sub Category Add successfully added</p>
<p id="management_err"
   style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
   Sub Category already exist !!!</p>
</div>

<script>
    $(document).ready(function () {
        $('#add_sub_category_frm').submit(function () {
            var dataString = $('#add_sub_category_frm').serialize();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>job_sub_category/create_sub_category',
                data: dataString,
                success: function (result) {
                    if (result) {
                        $('#add_msg').html(result);
                        $('#add_msg .alert').delay(5000).fadeOut(1000);
                        $('#add_sub_category_frm').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>job_sub_category/all_sub_category";
                        }, 2000);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;

        });
        
    });
</script>


