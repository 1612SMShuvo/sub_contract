<form action="#" method="post" id="payment_request">
    <div class="form-single">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="certificate">Work Process<span>*</span></label>
        <input type="text" id="work_process" name="work_process"
               tabindex="0">
    </div>
    <div class="form-single">
        <label for="certificate">Attachment<span>*</span></label>
        <input type="file" id="attachment" name="attachment"
               tabindex="0">
    </div>
    <div class="form-single">
        <label for="certificate">Request Money<span>*</span></label>
        <input type="number" id="request_money" name="request_money"
               tabindex="0">
    </div>

    
    <div class="form-single">
        <input type="submit" value="Submit" class="btn btn-success btn-sm">
    </div>
</form>

<script>
    $(document).ready(function () {
        $('#payment_request').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>my_work/create_payment_request',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#add_msg').html(result);
                        $('#add_msg .alert').delay(5000).fadeOut(1000);
                        $('#payment_request').trigger("reset");
                        
                        return false;
                    } else {
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

