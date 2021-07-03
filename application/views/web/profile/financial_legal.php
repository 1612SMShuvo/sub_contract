<main class="fullpage-area">
    <section class="postjob-area">
        <div class="container">
            <div class="row">
                <div class="project-slides">
                    <div class="project-singleslide">
                        <div class="row">
                            <?php
                            $user_id = $this->session->userdata("user_id");
                            $financial = $this->Frontend_model->financial_info($user_id);
                            if (!$financial) {
                                ?>
                                <div class="col-md-6 mb-4">
                                    <div class="signin-form postjob-form financial">
                                        <h3>Financial</h3>
                                        <form id="financial_profile" method="post" action="#"
                                              enctype="multipart/form-data">
                                            <div class="postjob-det">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-single">
                                                            <label for="certificate">Financial Statement
                                                                <span>*</span></label>
                                                            <input type="file" id="financial_statement"
                                                                   name="financial_statement"
                                                                   tabindex="0" onblur="Checkfiles()">
                                                                   <span id="u1"></span>
                                                            <p style="color: red;" id="pdf"></p>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="certificate">Bank Solvency<span>*</span></label>
                                                            <input type="file" id="bank_solvency" name="bank_solvency"
                                                                   tabindex="0" onblur="Checkfiles1()">
                                                                   <span id="u2"></span>
                                                            <p style="color: red;" id="pdf1"></p>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="certificate">Credit Line
                                                                Letter<span>*</span></label>
                                                            <input type="file" id="credit" name="credit"
                                                                   tabindex="0" onblur="Checkfiles2()">
                                                                   <span id="u3"></span>
                                                            <p style="color: red;" id="pdf2"></p>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="certificate">Bank Statement
                                                                <span>*</span></label>
                                                            <input type="file" id="bank_statement" name="bank_statement"
                                                                   tabindex="0" onblur="Checkfiles4()">
                                                                   <span id="u4"></span>
                                                            <p style="color: red;" id="pdf4"></p>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="certificate">Liquid Money<span>*</span></label>
                                                            <input type="file" id="liquid_money" name="liquid_money"
                                                                   tabindex="0" onblur="Checkfiles3()">
                                                                   <span id="u5"></span>
                                                            <p style="color: red;" id="pdf3"></p>
                                                        </div>
                                                        <div class="postjob-button row">
                                                            <div class="form-check mb-4 col-6">
                                                                <input class="form-check-input" type="hidden" value="1"id="flexCheckChecked" name="terms_condition"
                                                                >
                                                            </div>


                                                            <div class="postjob-button pt-3">
                                                                <div class="signin-button">
                                                                    <button>
                                                                        Save
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                        </form>
                                        <p id="financial_profile_msg" style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                        Financial Profile Successfully Added</p>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="col-md-6 mb-4" style="opacity: 0.5">
                                    <div class="signin-form postjob-form financial">
                                        <h3>Financial</h3>
                                            <div class="postjob-det">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-single">
                                                            <label for="certificate">Financial Statement
                                                                <span>*</span></label>
                                                            <input type="file" id="financial_statement"
                                                                   name="financial_statement"
                                                                   tabindex="0" onblur="Checkfiles()">
                                                            <p style="color: red;" id="pdf"></p>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="certificate">Bank Solvency<span>*</span></label>
                                                            <input type="file" id="bank_solvency" name="bank_solvency"
                                                                   tabindex="0" onblur="Checkfiles1()">
                                                            <p style="color: red;" id="pdf1"></p>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="certificate">Credit Line
                                                                Letter<span>*</span></label>
                                                            <input type="file" id="credit" name="credit"
                                                                   tabindex="0" onblur="Checkfiles2()">
                                                            <p style="color: red;" id="pdf2"></p>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="certificate">Bank Statement
                                                                <span>*</span></label>
                                                            <input type="file" id="bank_statement" name="bank_statement"
                                                                   tabindex="0" onblur="Checkfiles4()">
                                                            <p style="color: red;" id="pdf4"></p>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="certificate">Liquid Money<span>*</span></label>
                                                            <input type="file" id="liquid_money" name="liquid_money"
                                                                   tabindex="0" onblur="Checkfiles3()">
                                                            <p style="color: red;" id="pdf3"></p>
                                                        </div>
                                                        <div class="postjob-button row">
                                                            <div class="form-check mb-4 col-6">
                                                                <input class="form-check-input" type="hidden" value="1" id="flexCheckChecked" name="terms_condition">
                                                            </div>
                                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-6  mb-4">
                    <div class="signin-form postjob-form legal">
                        <h3>Legal</h3>
                        <form action="#" method="post" id="legal_profile" enctype="multipart/form-data">
                            <div class="postjob-det">
                                <div class="form-single">
                                    <label for="certificate">Audit Report<span>*</span></label>
                                    <input type="file" id="audit_report" name="audit_report"
                                           tabindex="0" onblur="Checkfiles5()">
                                           <span id="v1"></span>
                                    <p style="color: red;" id="pdf5"></p>
                                </div>
                                <div class="form-single">
                                    <label for="certificate">Trade License<span>*</span></label>
                                    <input type="file" id="trade_license" name="trade_license"
                                           tabindex="0"onblur="Checkfiles6()">
                                           <span id="v2"></span>
                                    <p style="color: red;" id="pdf6"></p>
                                </div>
                                <div class="form-single">
                                    <label for="certificate">Tin<span>*</span></label>
                                    <input type="file" id="tin" name="tin"
                                           tabindex="0"onblur="Checkfiles7()">
                                           <span id="v3"></span>
                                    <p style="color: red;" id="pdf7"></p>
                                </div>

                                <div class="form-single">
                                    <label for="certificate">Bin<span>*</span></label>
                                    <input type="file" id="bin" name="bin"
                                           tabindex="0"onblur="Checkfiles8()">
                                           <span id="v4"></span>
                                    <p style="color: red;" id="pdf8"></p>
                                </div>
                                <div class="form-single">
                                    <label for="certificate">Income TAX Certificate<span>*</span></label>
                                    <input type="file" id="income_tax" name="income_tax"
                                           tabindex="0"onblur="Checkfiles9()">
                                           <span id="v5"></span>
                                    <p style="color: red;" id="pdf9"></p>
                                </div>

                                <div class="form-single">
                                    <label for="certificate">Brochure<span>*</span></label>
                                    <input type="file" id="brochure" name="brochure"
                                           tabindex="0"onblur="Checkfiles10()">
                                           <span id="v6"></span>
                                    <p style="color: red;" id="pdf10"></p>
                                </div>
                                <div class="form-single">
                                    <label for="certificate">Joint Venture (JV)<span>*</span></label>
                                    <input type="file" id="joint_venture" name="joint_venture"
                                           tabindex="0"onblur="Checkfiles11()">
                                           <span id="v7"></span>
                                    <p style="color: red;" id="pdf11"></p>
                                </div>

                                <div class="form-single">
                                    <label for="certificate">Board of resolution<span>*</span></label>
                                    <input type="file" id="board_of_resolution" name="board_of_resolution"
                                           tabindex="0"onblur="Checkfiles12()">
                                           <span id="v8"></span>
                                    <p style="color: red;" id="pdf12"></p>
                                </div>
                                <div class="form-single">
                                    <label for="certificate">Completion letter<span>*</span></label>
                                    <input type="file" id="completion_letter" name="completion_letter"
                                           tabindex="0"onblur="Checkfiles13()">
                                           <span id="v9"></span>
                                    <p style="color: red;" id="pdf13"></p>
                                </div>
                                <div class="form-single">
                                    <label for="certificate">Work Orders<span>*</span></label>
                                    <input type="file" id="work_orders" name="work_orders"
                                           tabindex="0"onblur="Checkfiles14()">
                                           <span id="v10"></span>
                                    <p style="color: red;" id="pdf14"></p>
                                </div>
                                <div class="postjob-button row pt-4">
                                    <div class="form-check mb-4 col-6">
                                        <input class="form-check-input" type="hidden" value="1" id="legal" name="terms_condition" required="required">
                                    </div>
                                    <div class="postjob-button row ">
                                        <div class="signin-button col-6">
                                            <button>Save</button>
                                        </div>
                                        <div class="signin-button col-6">
                                            <a href="<?php echo base_url() ?>frontend/portfolio_award">Skip</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <p id="legal_profile_msg"
                       style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                        Legal Information Successfully Added</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    $(document).ready(function () {
        $('#financial_profile').submit(function () {
             if (validation() == true) {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_financial_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#financial_profile_msg').show();
                        $('#financial_profile_msg .alert').delay(5000).fadeOut(1000);
                        $('#financial_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/financial_legal";
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
            return false;
            } else {
                return false;
            }
        });


        function validation() {
            var financial_statement = $('#financial_statement').val();
            var bank_solvency = $('#bank_solvency').val();
            var credit = $('#credit').val();
            var bank_statement = $('#bank_statement').val();
            var liquid_money = $('#liquid_money').val();
            
             if (financial_statement.length == "" || bank_solvency.length == "" || credit.length == "" || bank_statement.length == "" || liquid_money.length == "") {
                if (financial_statement.length == "") {
                    $('#u1').html("<code class='err_msg'>* This Financial Statement Field Is Mandatory *</code>");
                    $("#u1 .err_msg").delay(3000).fadeOut(800);
                    $("#financial_statement").focus();
                }
                if (bank_solvency.length == "") {
                    $('#u2').html("<code class='err_msg'>* This Bank Solvancy Field Is Mandatory *</code>");
                    $("#u2 .err_msg").delay(3000).fadeOut(800);
                    $("#bank_solvency").focus();
                }
                if (credit.length == "") {
                    $('#u3').html("<code class='err_msg'>* This credit Field Is Mandatory *</code>");
                    $('#u3 .err_msg').delay(3000).fadeOut(800);
                    $('#credit').focus();
                }
                if (bank_statement.length == "") {
                    $('#u4').html("<code class='err_msg'>* This Income Tax Field Is Mandatory *</code>");
                    $('#u4 .err_msg').delay(3000).fadeOut(800);
                    $('#bank_statement').focus();
                }
                if (liquid_money.length == "") {
                    $('#u5').html("<code class='err_msg'>* This Liquid Money Field Is Mandatory *</code>");
                    $('#u5 .err_msg').delay(3000).fadeOut(800);
                    $('#liquid_money').focus();
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
        $('#legal_profile').submit(function () {
            if (validation() == true) {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_legal_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#legal_profile_msg').show();
                        $('#legal_profile_msg .alert').delay(5000).fadeOut(1000);
                        $('#legal_profile').trigger("reset");
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
            return false;
            } else {
                return false;
            }
        });
    

        function validation() {
            var audit_report = $('#audit_report').val();
            var trade_license = $('#trade_license').val();
            var tin = $('#tin').val();
            var bin = $('#bin').val();
            var income_tax = $('#income_tax').val();
            var brochure = $('#brochure').val();
            var joint_venture = $('#joint_venture').val();
            var board_of_resolution = $('#board_of_resolution').val();
            var completion_letter = $('#completion_letter').val();
            var work_orders = $('#work_orders').val();
            
             if (audit_report.length == "" || trade_license.length == "" || tin.length == "" || bin.length == "" || brochure.length == "" || income_tax.length == "" || joint_venture.length == "" || board_of_resolution.length == "" || completion_letter.length == "" || work_orders.length == "") {
                if (audit_report.length == "") {
                    $('#v1').html("<code class='err_msg'>* This audit report Field Is Mandatory *</code>");
                    $("#v1 .err_msg").delay(3000).fadeOut(800);
                    $("#audit_report").focus();
                }
                if (trade_license.length == "") {
                    $('#v2').html("<code class='err_msg'>* This trade license field is mandatory *</code>");
                    $("#v2 .err_msg").delay(3000).fadeOut(800);
                    $("#trade_license").focus();
                }
                if (tin.length == "") {
                    $('#v3').html("<code class='err_msg'>* This tin field is mandatory *</code>");
                    $('#v3 .err_msg').delay(3000).fadeOut(800);
                    $('#tin').focus();
                }
                if (bin.length == "") {
                    $('#v4').html("<code class='err_msg'>* This bin field is mandatory *</code>");
                    $('#v4 .err_msg').delay(3000).fadeOut(800);
                    $('#bin').focus();
                }
                if (income_tax.length == "") {
                    $('#v5').html("<code class='err_msg'>* This income tax field is mandatory *</code>");
                    $('#v5 .err_msg').delay(3000).fadeOut(800);
                    $('#income_tax').focus();
                }
                if (brochure.length == "") {
                    $('#v6').html("<code class='err_msg'>* This brochure field is mandatory *</code>");
                    $('#v6 .err_msg').delay(3000).fadeOut(800);
                    $('#brochure').focus();
                }
                if (joint_venture.length == "") {
                    $('#v7').html("<code class='err_msg'>* This joint venture field is mandatory *</code>");
                    $('#v7 .err_msg').delay(3000).fadeOut(800);
                    $('#joint_venture').focus();
                }
                if (board_of_resolution.length == "") {
                    $('#v8').html("<code class='err_msg'>* This board of resolution field is mandatory *</code>");
                    $('#v8 .err_msg').delay(3000).fadeOut(800);
                    $('#board_of_resolution').focus();
                }
                if (completion_letter.length == "") {
                    $('#v9').html("<code class='err_msg'>* This completion letter field is mandatory *</code>");
                    $('#v9 .err_msg').delay(3000).fadeOut(800);
                    $('#completion_letter').focus();
                }
                if (work_orders.length == "") {
                    $('#v10').html("<code class='err_msg'>* This work orders field is mandatory *</code>");
                    $('#v10 .err_msg').delay(3000).fadeOut(800);
                    $('#work_orders').focus();
                }
                return false;
            }
            else {
                return true
            }
        }
    });
</script>


<script type="text/javascript">
    function Checkfiles() {
        var fname = $('#financial_statement').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf").innerHTML = "";
        }
        else {
            document.getElementById("pdf").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles1() {
        var fname = $('#bank_solvency').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf1").innerHTML = "";
        }
        else {
            document.getElementById("pdf1").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles2() {
        var fname = $('#credit').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf2").innerHTML = "";
        }
        else {
            document.getElementById("pdf2").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>


<script type="text/javascript">
    function Checkfiles4() {
        var fname = $('#bank_statement').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf4").innerHTML = "";
        }
        else {
            document.getElementById("pdf4").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles3() {
        var fname = $('#liquid_money').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf3").innerHTML = "";
        }
        else {
            document.getElementById("pdf3").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>


<!------------------------------------------------Legal Information------------------------------------------------------------------------>

<script type="text/javascript">
    function Checkfiles5() {
        var fname = $('#audit_report').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf5").innerHTML = "";
        }
        else {
            document.getElementById("pdf5").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles6() {
        var fname = $('#trade_license').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf6").innerHTML = "";
        }
        else {
            document.getElementById("pdf6").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles7() {
        var fname = $('#tin').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf7").innerHTML = "";
        }
        else {
            document.getElementById("pdf7").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles8() {
        var fname = $('#bin').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf8").innerHTML = "";
        }
        else {
            document.getElementById("pdf8").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles9() {
        var fname = $('#income_tax').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf9").innerHTML = "";
        }
        else {
            document.getElementById("pdf9").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles10() {
        var fname = $('#brochure').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf10").innerHTML = "";
        }
        else {
            document.getElementById("pdf10").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles11() {
        var fname = $('#joint_venture').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf11").innerHTML = "";
        }
        else {
            document.getElementById("pdf11").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles12() {
        var fname = $('#board_of_resolution').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf12").innerHTML = "";
        }
        else {
            document.getElementById("pdf12").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles13() {
        var fname = $('#completion_letter').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf13").innerHTML = "";
        }
        else {
            document.getElementById("pdf13").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>

<script type="text/javascript">
    function Checkfiles14() {
        var fname = $('#work_orders').val();
        var re = /(\.pdf)$/i;

        if (re.exec(fname)) {

            document.getElementById("pdf14").innerHTML = "";
        }
        else {
            document.getElementById("pdf14").innerHTML = " Invalid File Extension Only Pdf!";
        }
    }
</script>




