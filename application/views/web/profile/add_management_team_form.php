<form action="#" method="post" id="add_team_frm" enctype="multipart/form-data">
    <div class="col-md-12  mb-4">
        <div class="signin-form postjob-form">
            <h3>Management & Team</h3>
            <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
            <form action="#" method="post" id="management_team" enctype="multipart/form-data">
                <div class="postjob-det">
                    <div class="form-single">
                        <label for="name">Name <span>*</span></label>
                        <input type="text" id="name" name="name" placeholder="Name"
                               required="required">
                    </div>
                    <div class="form-single">
                        <label for="desination">Desination <span>*</span></label>
                        <input type="text" id="desination" name="designation"
                               placeholder="Designation" required="required">
                    </div>
                    <div class="form-single">
                        <label for="nid">NID <span>*</span></label>
                        <input type="number" onblur="check_nid()" onkeyup="validation_nid()" id="nid" name="nid"
                               placeholder="Only 10 and 13 and 17 Digit Nid Number"
                               required="required">
                        <p id="nid1" style="color:red"></p>
                        <p id="err_nid" style="display: none; color: red; font-size: 12px;">This
                            NID Already exist !!!</p>
                    </div>
                    <div class="form-single">
                        <label for="tin">TIN <span>*</span></label>
                        <input type="number" id="tin" onblur="check_tin()" onkeyup="validation_tin()" name="tin"
                               placeholder="Only 12 Digit Tin Number"
                               required="required">
                        <p id="tin1" style="color: red; font-size: 12px;"></p>
                        <p id="err_tin" style="display: none; color: red; font-size: 12px;">This
                            TIN Number Already Exist !!!</p>
                    </div>
                    <div class="form-single">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" id="email" onblur="check_email()"
                               name="email"
                               placeholder="Enter Your Email" required="required">
                        <p id="err_email" style="display: none; color: red; font-size: 12px;">
                            This
                            Email Already Exist !!!</p>
                    </div>
                    <div class="form-single">
                        <label for="phone">Phone Number <span>*</span></label>

                        <input type="number" onkeyup="validation_phone()" id="phone"
                               onblur="check_phone()"
                               name="phone"
                               placeholder="Enter Your Phone Number" required="required">
                        <p id="ban" style="color: red; font-size: 12px;"></p>
                        <p id="err_phone" style="display: none; color: red; font-size: 12px;">

                            This Phone Number Already Exist !!!</p>
                    </div>
                    <div class="form-single">
                        <label for="certificate">Profile Picture <span>*</span></label>
                        <input type="file" id="profile_picture" name="profile_picture"
                               tabindex="0">
                    </div>
                    <div class="postjob-button row">
                        <div class="form-check mb-4 col-6">
                            <input class="form-check-input" class="form-control" required="required" type="hidden" value="1" id="flexCheckChecked" checked>
                        </div>

                    </div>
                    <div class="postjob-button row">
                        <div class="signin-button col-8">
                            <button class="btn btn-primary btn-sm">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<p id="management_msg"
   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center; color: white;height: 41px;padding-top: 7px;">
    Management Team information successfully added</p>
<p id="management_err"
   style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
    Your Management Team information already exist !!!</p>


<script>
    $(document).ready(function () {
        $('#add_team_frm').submit(function () {
            $('#hide_add_button').hide();
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_management_team',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result == 1) {
                        $('#management_msg').show();
                        $('#management_msg').delay(5000).fadeOut(1000);
                        $('#add_team_frm').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/management_team_view";
                        }, 3000);
                        return false;
                    } else {
                        $('#management_err').show();
                        $('#management_err').delay(6000).fadeOut(1000);
                        $('#add_team_frm').trigger("reset");
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




