
<form action="" method="POST" id="add_boots_payment_frm" enctype="multipart/form-data">
    <div class="form-group">
        <input id="account_no" name="account_no" type="text" required="required" class="form-control" placeholder="Mobile Banking Number....">
        <span id="m1"></span>
    </div><br>
    <div class="form-group">
        <input id="txn_id" name="txn_id" type="text" required="required" class="form-control" placeholder="Transiction ID....">
        <span id="m1"></span>
    </div><br>
    <div class="form-group">
        <input id="amount" name="amount" type="text" required="required" class="form-control" placeholder="Paid Amount....">
        <span id="m1"></span>
    </div><br>
    <div class="form-group">
        <input id="account_no" name="post_id" type="text" required="required" class="form-control" placeholder="Job Tendar No.....">
        <span id="m1"></span>
    </div><br>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" value="Send">
    </div><br><br>
    <div id="add_msg" class="text-center"></div>
</form>


<script>
    $(document).ready(function () {
        $('#add_boots_payment_frm').submit(function () {
            var dataString = $('#add_boots_payment_frm').serialize();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>payment/store_boost_payment',
                data: dataString,
                success: function (result) {
                    if (result) {
                        $('#add_msg').html(result);
                        $('#add_msg .alert').delay(5000).fadeOut(1000);
                        $('#add_boots_payment_frm').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>boost/boost_all";
                        }, 1000);
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