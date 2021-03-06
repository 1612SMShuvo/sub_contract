<form action="" method="POST" id="add_district_frm" enctype="multipart/form-data">
    <div class="form-group">
        <select class="form-control" name="division_id" id="division_id">
            <option value="">Select Division</option>
            <?php foreach ($division as $v_division) { ?>
                <option value="<?php echo $v_division->id; ?>"><?php echo $v_division->division_name; ?></option>
            <?php } ?>
        </select>
        <span id="m1"></span>
    </div><br>
    <div class="form-group">
        <input id="district_name" onblur="check_duplicate()" name="district_name" type="text" class="form-control" placeholder="District Name....">
        <span id="m2"></span>
    </div><br>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" value="Add District">
    </div><br><br>
    <div id="add_msg" class="text-center"></div>
</form>


<script>
    $(document).ready(function () {
        $('#add_district_frm').submit(function () {
            if (validation() == true) {
                var dataString = $('#add_district_frm').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>district/create_district',
                    data: dataString,
                    success: function (result) {
                        if (result) {
                            $('#add_msg').html(result);
                            $('#add_msg .alert').delay(5000).fadeOut(1000);
                            $('#add_district_frm').trigger("reset");
                            window.setTimeout(function () {
                                window.location.href = "<?php echo base_url()?>district/all_district";
                            }, 2000);
                            return false;
                        } else {
                            return false;
                        }
                    }
                });
                return false;
            } else {
                return false;
            }
        });

        function validation() {
            var division_id = $('#division_id').val();
            var district_name = $('#district_name').val();

            if (division_id.length == "" || district_name.length == "") {
                if (division_id.length == "") {
                    $('#m1').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $("#m1 .err_msg").delay(3000).fadeOut(800);
                    $("#division_id").focus();
                }
                if (district_name.length == "") {
                    $('#m2').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $("#m2 .err_msg").delay(3000).fadeOut(800);
                    $("#district_name").focus();
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
        var district_name = $('#district_name').val();
        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>master/district/check_duplicate_data/'+district_name,
            success:function (result) {
                if(result){
                    $('#district_name').val('');
                    $('#m2').html(result);
                    return false;
                }else{
                    $('#m2').html('');
                    return false;
                }
            }
        });
        return false;
    }
</script>


