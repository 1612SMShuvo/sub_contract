<form action="" method="POST" id="cancel_reason_frm" enctype="multipart/form-data">
    
    <div class="form-group">
        <input type="hidden" name="job_id" value="<?php echo $id; ?>">
        <textarea name="reason" class="form-control" placeholder="Reason" style="margin-top:0px; margin-bottom:0px; height:124px;"></textarea>
        <span id="u2"></span>
    </div><br>
   
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" onclick="job_inactive(<?php echo $id; ?>)"  value="Reason">
    </div>
    <div id="add_msg" class="text-center"></div>
</form>
<p id="add_msg"
   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
    Reason information successfully Submitted</p>
</div>

<script>
    $(document).ready(function ($id) {
        $('#cancel_reason_frm').submit(function () {
                var dataString = $('#cancel_reason_frm').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>job_approve/create_reason',
                    data: dataString,
                    success: function (result) {
                        if (result) {
                            $('#add_msg').html(result);
                            $('#add_msg .alert').delay(5000).fadeOut(1000);
                            $('#add_user_frm').trigger("reset");
                            window.setTimeout(function () {
                                window.location.href = "<?php echo base_url()?>job_approve/all_job_approve";
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



<script>
    function job_inactive($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>job_approve/job_approve_inactive/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>job_approve/all_job_approve";
                    }, 100);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

