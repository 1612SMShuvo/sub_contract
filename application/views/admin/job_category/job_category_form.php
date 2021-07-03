<form action="" method="POST" id="add_category_frm" enctype="multipart/form-data">

    <div class="form-group">
        <input id="category_name"  name="category_name" type="text" class="form-control"
               placeholder="Category Name....">
        <span id="u2"></span>
    </div><br>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" value="Add Category">
    </div>
    <div id="add_msg" class="text-center"></div>
</form>
<p id="add_msg"
   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
    Category Add successfully added</p>
<p id="management_err"
   style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
    Category already exist !!!</p>
</div>

<script>
    $(document).ready(function () {
        $('#add_category_frm').submit(function () {
                var dataString = $('#add_category_frm').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>job_category/create_category',
                    data: dataString,
                    success: function (result) {
                        if (result) {
                            $('#add_msg').html(result);
                            $('#add_msg .alert').delay(5000).fadeOut(1000);
                            $('#add_category_frm').trigger("reset");
                            window.setTimeout(function () {
                                window.location.href = "<?php echo base_url()?>job_category/all_job_category";
                            }, 2000);
                            return false;
                        } else {
                            return false;
                        }
                    }
                });
                return false;
            
        });

        function validation() {
            var role_id = $('#role_id').val();
            var user_name = $('#user_name').val();
            var password = $('#password').val();

            if (role_id.length == "" || user_name.length == "" || password.length == "") {
                if (role_id.length == "") {
                    $('#u1').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $("#u1 .err_msg").delay(3000).fadeOut(800);
                    $("#role_id").focus();
                }
                if (user_name.length == "") {
                    $('#u2').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $("#u2 .err_msg").delay(3000).fadeOut(800);
                    $("#user_name").focus();
                }
                if (password.length == "") {
                    $('#u3').html("<code class='err_msg'>* This Message is mandatory *</code>");
                    $('#u3 .err_msg').delay(3000).fadeOut(800);
                    $('#password').focus();
                }
                return false;
            }
            else {
                return true
            }
        }
    });
</script>

<script>
    function check_duplicate() {
        var user_name = $('#user_name').val();
        var role_id = $('#role_id').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url()?>user/check_duplicate_data',
            data: {user_name: user_name, role_id: role_id},
            success: function (result) {
                if (result) {
                    $('#user_name').val('');
                    $('#u2').html(result);
                    return false;
                } else {
                    $('#u2').html('');
                    return false;
                }
            }
        });

    }
</script>

