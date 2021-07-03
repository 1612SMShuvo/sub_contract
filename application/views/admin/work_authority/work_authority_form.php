<form action="" method="POST" id="add_work_authority_frm" enctype="multipart/form-data">

    <div class="form-group">
        <input id="work_authority_name"  name="work_authority_name" type="text" class="form-control"
               placeholder="Work Authority Name....">
        <span id="u2"></span>
    </div><br>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" value="Add Work Authority">
    </div>
    <div id="add_msg" class="text-center"></div>
</form>
<p id="add_msg"
   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
    Work Authority Add successfully added</p>
<p id="management_err"
   style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
    Category already exist !!!</p>
</div>

<script>
    $(document).ready(function () {
        $('#add_work_authority_frm').submit(function () {
            var dataString = $('#add_work_authority_frm').serialize();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>work_authority/create_work_authority',
                data: dataString,
                success: function (result) {
                    if (result) {
                        $('#add_msg').html(result);
                        $('#add_msg .alert').delay(5000).fadeOut(1000);
                        $('#add_work_authority_frm').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>work_authority/all_work_authority";
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


