<?php foreach ($update_team as $v_team) { ?>
    <form action="#" method="post" id="update_team_frm" enctype="multipart/form-data">
        <div class="form-single">
            <label for="name">Name <span>*</span></label>
            <input type="hidden" name="id" value="<?php echo $v_team->id; ?>">
            <input type="text" value="<?php echo $v_team->name; ?>" id="name" name="name" placeholder="Name"
                   required="required">
        </div>
        <div class="form-single">
            <label for="designation">Designation <span>*</span></label>
            <input type="text" value="<?php echo $v_team->designation; ?>" id="designation" name="designation"
                   placeholder="Designation" required="required">
        </div>
        <div class="form-single">
            <label for="nid">NID <span>*</span></label>
            <input type="text" id="nid" name="nid"
                   placeholder="Enter Your NID" value="<?php echo $v_team->nid; ?>"
                   required="required" onkeyup="validation_nid()"  placeholder="Only 10 and 13 and 17 Digit Nid Number">
            <p id="nid1" style="color:red"></p>
            <p id="err_nid" style="display: none; color: red; font-size: 12px;">This
                NID Already exist !!!</p>
        </div>
        <div class="form-single">
            <label for="tin">TIN <span>*</span></label>
            <input type="text" id="tin" name="tin" value="<?php echo $v_team->tin; ?>"
                   placeholder="TIN"
                   required="required" onkeyup="validation_tin()" >
            <p id="tin1" style="color: red; font-size: 12px;"></p>
            <p id="err_tin" style="display: none; color: red; font-size: 12px;">This
                TIN Number Already Exist !!!</p>
        </div>
        <div class="form-single">
            <label for="email">Email <span>*</span></label>
            <input type="email" id="email"
                   name="email"
                   placeholder="Enter Your Email" value="<?php echo $v_team->email; ?>" required="required">
            <p id="err_email" style="display: none; color: red; font-size: 12px;">
                This
                Email Already Exist !!!</p>
        </div>
        <div class="form-single">
            <label for="phone">Phone Number <span>*</span></label>
            <input type="tel" id="phone" pattern="[0-9]{11}"
                   name="phone"
                   placeholder="Enter Your Phone Number" value="<?php echo $v_team->phone; ?>" required="required" onkeyup="validation_phone()">
            <p id="ban" style="color: red; font-size: 12px;"></p>
            <p id="err_phone" style="display: none; color: red; font-size: 12px;">
                This
                Phone Number Already Exist !!!</p>
        </div>
        <div class="form-single">
            <label for="certificate">Profile Picture <span>*</span></label>
            <input type="file" id="profile_picture" name="profile_picture"
                   tabindex="0">
            <img src="<?php echo base_url() ?>public/user_profile/<?php echo $v_team->profile_picture; ?>" height="50"
                 width="50">
        </div>
        <div class="postjob-button row">
            <div class="form-check mb-4 col-6">
                <input class="form-check-input" type="hidden" value="1"
                       id="flexCheckChecked">
            </div>
        </div>
        <div class="form-group">
            <input type="submit" id="hide_update_button" class="form-control btn btn-success" value="Update">
        </div>
    </form>
<?php } ?>

<p id="management_msg"
   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center; color: white;height: 41px;padding-top: 7px;">
    Management Team information successfully updated</p>

<script>
    $(document).ready(function () {
        $('#update_team_frm').submit(function () {
            $('#hide_update_button').hide();
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/update_management_team',
                data: dataString,
                async: false,
                success: function (result) {
                    $('#management_msg').show();
                    $('#management_msg').delay(5000).fadeOut(1000);
                    $('#update_team_frm').trigger("reset");
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>frontend/management_team_view";
                    }, 3000);
                    return false;
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
    });
</script>

<script type="text/javascript">
    function validation_phone() {
        var phone = document.getElementById("phone").value;
        var phonepattern = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
        if (phonepattern.test(phone)) {

            document.getElementById("ban").innerHTML = "";
        }
        else {
            document.getElementById("ban").innerHTML = "Phone Number Invalid!";
        }
    }

</script>

<script type="text/javascript">
    function validation_nid() {
        var nid = document.getElementById("nid").value;
        var nidpattern = /^\+?([0-9]{17})\)?$/;
        var nidpattern1 = /^\+?([0-9]{13})\)?$/;
        var nidpattern2 = /^\+?([0-9]{10})\)?$/;
        if (nidpattern.test(nid) || nidpattern1.test(nid)|| nidpattern2.test(nid) ) {

            document.getElementById("nid1").innerHTML = "";
        }
        else {
            document.getElementById("nid1").innerHTML = "NID Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function validation_tin() {
        var tin = document.getElementById("tin").value;
        var tinpattern = /^\+?([0-9]{12})\)?$/;
        if (tinpattern.test(tin)) {

            document.getElementById("tin1").innerHTML = "";
        }
        else {
            document.getElementById("tin1").innerHTML = "TIN Invalid!";
        }
    }

</script>
