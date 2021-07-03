<form action="" method="POST" id="add_agreement_frm" enctype="multipart/form-data">
    <div class="form-group">
        <input name="title" type="text" class="form-control" placeholder="Agreements Title....">
    </div><br>
    <div class="form-group">
        <textarea name="short_description" type="text" class="form-control" placeholder="Short Description...."></textarea>
    </div><br>
    <div class="form-group">
        <input name="aggrement_file" type="file" class="form-control" placeholder="Agreement File....">
    </div><br>
    <div class="form-group">
        <input name="date" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" placeholder="Date...." readonly>
    </div><br>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" value="Add Agreements">
    </div><br><br>
    <div id="add_msg" class="text-center"></div>
</form>

<script>
    $(document).ready(function () {
        $('#add_agreement_frm').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>agreements/create_agreements_pdf",
                data: dataString,
                async: false,
                success: function (result) {
                    if (result == 1) {
                        alert(result);
                        $('#add_agreement_frm').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>agreements/all_agreements_list";
                        }, 3000);
                        return false;
                    } else {
                        $('#').show();
                        $('#msg_basic_err').delay(6000).fadeOut(1000);
                        $('#add_agreement_frm').trigger("reset");
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
    });
</script>

