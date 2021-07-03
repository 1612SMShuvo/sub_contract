<main class="fullpage-area">
    <section class="postjob-area">
        <div class="container">
            <div class="row">
                <div class="project-slides">
                    <div class="project-singleslide">
                        <div class="row">
                            <?php
                            $user_id = $this->session->userdata("user_id");
                            $portfolio = $this->Frontend_model->portfolio_link_info($user_id);
                            if (!$portfolio) {
                                ?>
                                <div class="col-md-6 mb-4">
                                    <div class="signin-form postjob-form link">
                                        <h3>Portfolio Link</h3>
                                        <form id="portfolio_profile" method="post" action="#"
                                              enctype="multipart/form-data">
                                            <div class="postjob-det">
                                                <div class="form-single">
                                                    <label for="pclient">Project Name <span>*</span></label>
                                                    <input type="text" id="pclient" placeholder="Project Name"
                                                           name="project_name">
                                                           <span id="u1"></span>
                                                </div>
                                                <div class="form-single">
                                                    <label for="ptype">Project Type <span>*</span></label>
                                                    <input type="text" id="ptype" placeholder="Project Type"
                                                           name="project_type">
                                                           <span id="u2"></span>
                                                </div>
                                                <div class="form-single">
                                                    <label for="pdesc">Description <span>*</span></label>
                                                    <input type="text" id="pdesc" placeholder="Project Description"
                                                           name="description" >
                                                           <span id="u3"></span>
                                                </div>
                                                <div class="form-single">
                                                    <label for="pvalue">Value <span>*</span></label>
                                                    <input type="text" id="pvalue" placeholder="Project Value"
                                                           name="project_value">
                                                           <span id="u4"></span>
                                                </div>
                                                <div class="form-single">
                                                    <label for="pclientn">Client Name <span>*</span></label>
                                                    <input type="text" id="pclientn" placeholder="Client Name"
                                                           name="client_name">
                                                           <span id="u5"></span>
                                                </div>
                                                <div class="form-single">
                                                    <label for="Link">Link</label>
                                                    <input type="url" pattern="https://.*" id="Link" placeholder="Link" name="link"
                                                    >
                                                    <span id="u6"></span>
                                                </div>

                                                <div class="form-single">
                                                    <label for="certificate">Image or PDF<span>*</span></label>
                                                    <input type="file" id="board_of_resolution"
                                                           name="board_of_resolution"
                                                           tabindex="0" readonly="readonly">
                                                </div>

                                                <div class="postjob-button row pt-4">
                                                    <div class="form-check mb-4 col-6">
                                                        <input class="form-check-input" type="hidden" value="1" id="vice" name="terms_condition">
                                                    </div>


                                                    <div class="postjob-button pt-3">
                                                        <div class="signin-button">
                                                            <button>
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>


                                        </form>
                                        <p id="portfolio_profile_msg"
                                           style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                            Portfolio Profile Successfully Added</p>
                                    </div>
                                </div>
                            <?php } else {
                                ?>
                                <div class="col-md-6 mb-4" style="opacity:0.5">
                                    <div class="signin-form postjob-form link">
                                        <h3>Portfolio Link</h3>
                                        <form id="portfolio_profile" method="post" action="#"
                                              enctype="multipart/form-data">
                                            <div class="postjob-det">
                                                <div class="form-single">
                                                    <label for="pclient">Project Name <span>*</span></label>
                                                    <input type="text" id="pclient" placeholder="Project Name"
                                                           name="project_name" required="required" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="ptype">Project Type <span>*</span></label>
                                                    <input type="text" id="ptype" placeholder="Project Type"
                                                           name="project_type" required="required" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="pdesc">Description <span>*</span></label>
                                                    <input type="text" id="pdesc" placeholder="Project Description"
                                                           name="description" required="required" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="pvalue">Value <span>*</span></label>
                                                    <input type="text" id="pvalue" placeholder="Project Value"
                                                           name="project_value" required="required" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="pclientn">Client Name <span>*</span></label>
                                                    <input type="text" id="pclientn" placeholder="Client Name"
                                                           name="client_name" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="Link">Link </label>
                                                    <input type="url" pattern="https://.*" id="Link" placeholder="Link"
                                                           name="link" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="certificate">Image<span>*</span></label>
                                                    <input type="file" id="board_of_resolution"
                                                           name="board_of_resolution"
                                                           tabindex="0" readonly="readonly">
                                                </div>

                                                <div class="postjob-button row pt-4">
                                                    <div class="form-check mb-4 col-6">
                                                        <input class="form-check-input" type="hidden" value="1" id="vice" name="terms_condition"> 
                                                    </div>
                                        </form>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6  mb-4">
                        <div class="signin-form postjob-form award">
                            <h3>Award & Certification</h3>
                            <form id="award_profile" method="post" action="#" enctype="multipart/form-data">
                                <div class="postjob-det">

                                    <div class="form-single">
                                        <label for="aname">Award Name <span>*</span></label>
                                        <input type="text" id="aname" placeholder="Award Name "
                                               name="award_name">
                                               <span id="v1"></span>
                                    </div>
                                    <div class="form-single">
                                        <label for="cname">Categories Name <span>*</span></label>
                                        <input type="text" id="acname" placeholder="Categories Name "
                                               name="categories_name">
                                               <span id="v2"></span>
                                    </div>
                                    <div class="form-single">
                                        <label for="uthorized">Authorized By <span>*</span></label>
                                        <input type="text" id="aauthorized"
                                               placeholder="Authorized by " name="authorized_by"
                                               required="required">
                                               <span id="v3"></span>
                                    </div>
                                    <div class="form-single">
                                        <label for="certificate">Image or PDF <span>*</span></label>
                                        <input type="file" id="aimage" name="image"
                                               tabindex="0">
                                               <span id="v4"></span>
                                    </div>
                                    <div class="form-single">
                                        <label for="ption">Description <span>*</span></label>
                                        <input type="text" id="adesc" placeholder="Type Description "
                                               name="description" required="required">
                                               <span id="v5"></span>
                                    </div>
                                    <div class="postjob-button row pt-4">
                                        <div class="form-check mb-4 col-6">
                                            <input class="form-check-input" type="hidden" value="1"
                                                   id="ported" name="terms_condition"> 
                                        </div>
                                        <div class="row">
                                            <div class="signin-button col-6">
                                                <button>Save</button>

                                            </div>
                                            <div class="signin-button col-6">
                                                <a href="<?php echo base_url() ?>frontend/nominee_official_contract" >Skip</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p id="award_profile_msg"
                               style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                Award Profile Successfully Added</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<script>
    $(document).ready(function () {
        $('#portfolio_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            if (validation() == true) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_portfolio_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#portfolio_profile_msg').show();
                        $('#portfolio_profile_msg .alert').delay(5000).fadeOut(1000);
                        $('#portfolio_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/portfolio_award";
                        }, 3000);
                        return false;
                    } else {
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            } else {
                        return false;
                    }
            return false;
        });
        function validation() {
                        var pclient = $('#pclient').val();
                        var ptype = $('#ptype').val();
                        var pdesc = $('#pdesc').val();
                        var pvalue = $('#pvalue').val();
                        var pclientn = $('#pclientn').val();
                        var board_of_resolution = $('#board_of_resolution').val();
                      

                        if (pclient.length == "" || ptype.length=="" || pdesc.length == "" || pvalue.length == "" || pclientn.length == ""|| board_of_resolution.length == "") {
                            if (pclient.length == "") {
                                $('#u1').html("<code class='err_msg'>* Project Name field is Mandatory *</code>");
                                $("#u1 .err_msg").delay(3000).fadeOut(800);
                                $("#pclient").focus();
                            }
                            if (ptype.length == "") {
                                $('#u2').html("<code class='err_msg'>* Project Type field is mandatory *</code>");
                                $("#u2 .err_msg").delay(3000).fadeOut(800);
                                $("#ptype").focus();
                            }
                            if (pdesc.length == "") {
                                $('#u3').html("<code class='err_msg'>* Project Description field is mandatory *</code>");
                                $('#u3 .err_msg').delay(3000).fadeOut(800);
                                $('#pdesc').focus();
                            }
                            if (pvalue.length == "") {
                                $('#u4').html("<code class='err_msg'>*Project Value field is mandatory *</code>");
                                $('#u4 .err_msg').delay(3000).fadeOut(800);
                                $('#pvalue').focus();
                            }
                            if (pclientn.length == "") {
                                $('#u5').html("<code class='err_msg'>*Client Name field is mandatory *</code>");
                                $('#u5 .err_msg').delay(3000).fadeOut(800);
                                $('#pclientn').focus();
                            }
                            if (board_of_resolution.length == "") {
                                $('#u6').html("<code class='err_msg'>*Image field is mandatory *</code>");
                                $('#u6 .err_msg').delay(3000).fadeOut(800);
                                $('#board_of_resolution').focus();
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
    $(document).ready(function () {
        $('#award_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            if (validation() == true) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_award_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#award_profile_msg').show();
                        $('#award_profile_msg .alert').delay(5000).fadeOut(1000);
                        $('#award_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/nominee_official_contract";
                        }, 3000);
                        return false;
                    } else {
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            }); 
           } else {
                        return false;
                    }
            return false;
        });
        
        function validation() {
                        var aname = $('#aname').val();
                        var acname = $('#acname').val();
                        var aauthorized = $('#aauthorized').val();
                        var aimage = $('#aimage').val();
                        var adesc = $('#adesc').val();
                      

                        if (aname.length == "" || acname.length=="" || aauthorized.length == "" || aimage.length == "" || adesc.length == "") {
                            if (aname.length == "") {
                                $('#v1').html("<code class='err_msg'>* Name field is Mandatory *</code>");
                                $("#v1 .err_msg").delay(3000).fadeOut(800);
                                $("#aname").focus();
                            }
                            if (acname.length == "") {
                                $('#v2').html("<code class='err_msg'>* Categories Name field is mandatory *</code>");
                                $("#v2 .err_msg").delay(3000).fadeOut(800);
                                $("#acname").focus();
                            }
                            if (aauthorized.length == "") {
                                $('#v3').html("<code class='err_msg'>* Authorized By field is mandatory *</code>");
                                $('#v3 .err_msg').delay(3000).fadeOut(800);
                                $('#aauthorized').focus();
                            }
                            if (aimage.length == "") {
                                $('#v4').html("<code class='err_msg'>*Image or PDF field is mandatory *</code>");
                                $('#v4 .err_msg').delay(3000).fadeOut(800);
                                $('#aimage').focus();
                            }
                            if (adesc.length == "") {
                                $('#v5').html("<code class='err_msg'>*Description is mandatory *</code>");
                                $('#v5 .err_msg').delay(3000).fadeOut(800);
                                $('#adesc').focus();
                            }
                            return false;
                        }
                        else {
                            return true
                        }
                    }
    });
</script>
