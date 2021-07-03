<main>
    <section class="publisher-area">
        <?php
        $user_id = $this->session->userdata("user_id");
        $basic = $this->Frontend_model->basic_info($user_id);
        $management = $this->Frontend_model->management_info($user_id);
        $area = $this->Frontend_model->work_area_info($user_id);
        $experience = $this->Frontend_model->experience_info($user_id);
        $financial = $this->Frontend_model->financial_info($user_id);
        $legal = $this->Frontend_model->legal_info($user_id);
        $award = $this->Frontend_model->award_certification_info($user_id);
        $portfolio = $this->Frontend_model->portfolio_link_info($user_id);
        $official = $this->Frontend_model->official_contract_info($user_id);
        $nominee = $this->Frontend_model->nominee_info($user_id);

        if (($basic) and ($management) and ($area) and ($experience) and ($financial) and ($legal) and ($award) and ($portfolio) and ($official) and ($nominee)) {
            ?>
            <div class="container">
                <div class="publisher-menu mb-4">
                    <ul>
                        <li><a href="<?php echo base_url() ?>active_job_publiser/all_active_job_publiser">Active Job</a></li>
                        <li><a href="<?php echo base_url() ?>pending_job/all_pending_job">Pending Job</a></li>
                        <li><a href="<?php echo base_url() ?>my_job/all_my_job">New Job</a></li>
                        <li><a class="active" href="<?php echo base_url() ?>job_post/create_job_post">Post New Job</a>
                        </li>
                    </ul>
                </div>
                <form action="<?php echo base_url() ?>job_post/add_job" method="post"
                      enctype="multipart/form-data">
                    <div class="newjob-area">
                        <div class="newjob-left">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-bidder-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-bidder" type="button" role="tab"
                                            aria-controls="pills-bidder"
                                            aria-selected="true">Bidder
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">Investor
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-bidder" role="tabpanel"
                                     aria-labelledby="pills-bidder-tab">
                                    <div class="bidder-single">
                                        <p>You Need Bidder</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="need_bidder"
                                                   name="need_bidder"
                                                   value="1">Yes
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="need_bidder"
                                                   name="need_bidder"
                                                   value="2">No
                                        </div>
                                    </div>
                                    <div class="bidder-single">
                                        <p>Work Type</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_type_bidder"
                                                   id="work_type_bidder" value="1">Goods
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_type_bidder"
                                                   id="work_type_bidder" value="2">Service
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_type_bidder"
                                                   id="work_type_bidder" value="3">Work
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_type_bidder"
                                                   id="work_type_bidder" value="4">Others
                                        </div>
                                    </div>

                                    <div class="bidder-single bidder-spec">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="spec" type="checkbox" id="spec"
                                                   value="spec">
                                            <label class="form-check-label" for="spec">Spec</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="catalog" type="checkbox" id="catalog"
                                                   value="catalog">
                                            <label class="form-check-label" for="catalog">Catalog</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="time" id="time"
                                                   value="time">
                                            <label class="form-check-label" for="time">Time</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="workprocess"
                                                   id="workprocess"
                                                   value="workprocess">
                                            <label class="form-check-label" for="workprocess">Work Process</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="manpower"
                                                   id="manpower"
                                                   value="manpower">
                                            <label class="form-check-label" for="manpower">Man Power</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="quotation"
                                                   id="quotation"
                                                   value="quotation">
                                            <label class="form-check-label" for="quotation">Quotation</label>
                                        </div>
                                    </div>

                                    <div class="bidder-single">
                                        <p>Legal</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tin" name="tin_bidder"
                                                   value="TIN">
                                            <label class="form-check-label" for="tin">TIN</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="bin" name="bin_bidder"
                                                   value="BIN">
                                            <label class="form-check-label" for="bin">BIN</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="nid" value="NID"
                                                   name="nid_bidder">
                                            <label class="form-check-label" for="nid">NID</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="taxreturn_bidder" value="Tax Return" name="taxreturn_bidder">
                                            <label class="form-check-label" for="taxreturn">Tax Return</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="trade_licence_bidder" name="trade_licence_bidder" value="Trade Licence">
                                            <label class="form-check-label" for="taxreturn">Trade Licence</label>
                                        </div>
                                    </div>
                                    <div class="bidder-single">
                                        <p>Audit Report</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="audit_report_bidder"
                                                   id="audit_report_bidder" value="1">Yes
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="audit_report_bidder"
                                                   id="audit_report_bidder1" value="2">No
                                        </div>
                                    </div>
                                    <div class="bidder-single">
                                        <label>Years</label>
                                        <input type="number"class="bidder_year" name="audit_year_bidder" id="bidder_years" placeholder="00">
                                    </div>
                                    <div class="bidder-single">
                                        <p>Similar Work Experience</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="similar_work_bidder"
                                                   id="similar_work_bidder" value="1">Yes
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="similar_work_bidder"
                                                   id="similar_work_bidder1" value="2">No
                                        </div>
                                    </div>
                                    <div class="bidder-single" id="similar_work_years_bidder_all">
                                        <label>Years</label>
                                        <input type="number" class="bidder_year" id="similar_work_years" name="similar_work_years_bidder" placeholder="00">
                                    </div>
                                    <div class="bidder-single" id="similar_work_amount_bidder_all">
                                        <label>Amount</label>
                                        <input type="number" class="bidder_year" id="similar_work_amount" name="similar_work_amount_bidder" placeholder="00">
                                    </div>
                                    <div class="bidder-single" id="similar_work_exp_type_bidder_all">
                                        <p>Similar Experience Type</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="similar_work_exp_type_bidder" name="similar_work_exp_type_bidder"
                                                   value="Govt">
                                            <label class="form-check-label" for="Govt">Govt</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="similar_work_exp_type_bidder" name="similar_work_exp_type_bidder"
                                                   value="Private">
                                            <label class="form-check-label" for="Private">Private</label>
                                        </div>
                                    </div>
                                    <div class="bidder-single">
                                        <p>Similar Work Order</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_order"
                                                   id="general_work_bidder" value="1">Yes
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_order"
                                                   id="general_work_bidder" value="2">No
                                        </div>
                                    </div>

                                    <div class="bidder-single">
                                        <p>General Work Experience</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="general_work_bidder"
                                                   id="general_work_bidder" value="1">Yes
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="general_work_bidder"
                                                   id="general_work_bidder" value="2">No
                                        </div>
                                    </div>

                                    <div class="bidder-single">
                                        <div class="form-single">
                                            <p>Payment Term (<span id="percent_progress_bidder">0</span>%)</p>
                                            <select id="payment_term_bidder" name="payment_term_bidder"
                                                    class="form-select form-select-sm" tabindex="0"
                                                    onchange="check_bidder_installment_type()">
                                                <option value="">Select One</option>
                                                <option value="1">1 Installment</option>
                                                <option value="2">2 Installment</option>
                                                <option value="3">3 Installment</option>
                                                <option value="4">4 Installment</option>
                                                <option value="5">5 Installment</option>
                                                <option value="6">6 Installment</option>
                                                <option value="7">7 Installment</option>
                                                <option value="8">8 Installment</option>
                                                <option value="9">9 Installment</option>
                                                <option value="10">10 Installment</option>
                                            </select>
                                        </div>
                                    </div>
                                    <span id="load_field"></span>
                                    <div class="bidder-single bidder-amount">
                                        <label>Security Money</label>
                                        <input type="text" readonly="readonly " name="security_bidder"
                                               id="security_bidder" value="10%"
                                        >
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">
                                    <div class="bidder-single">
                                        <p>You Need Investor</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="need_investor" name="need_investor" value="1">Yes
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="need_investor1" name="need_investor" value="2">No
                                        </div>
                                    </div>


                                    <div class="bidder-single">
                                        <p>Work Type<span id="u2" style="color:red;">* Please Fill It</span></p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_type_investor"
                                                   id="work_type_investor" value="1">Goods
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_type_investor"
                                                   id="work_type_investor" value="2">Service
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_type_investor"
                                                   id="work_type_investor" value="3">Work
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="work_type_investor"
                                                   id="work_type_investor" value="4">Others
                                        </div>
                                    </div>

                                    <div class="bidder-single">
                                        <p>Legal</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tin" name="tin_investor"
                                                   value="TIN">
                                            <label class="form-check-label" for="tin">TIN</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="bin" name="bin_investor"
                                                   value="BIN">
                                            <label class="form-check-label" for="bin">BIN</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="nid" value="NID"
                                                   name="nid_investor">
                                            <label class="form-check-label" for="nid">NID</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="taxreturn_investor" value="Tax Return" name="taxreturn_investor">
                                            <label class="form-check-label" for="taxreturn">Tax Return</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="trade_licence_investor" name="trade_licence_investor" value="Trade Licence">
                                            <label class="form-check-label" for="taxreturn">Trade Licence</label>
                                        </div>
                                    <div class="bidder-single">
                                        <p>Audit Report</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="audit_report_investor"
                                                   id="audit_report_investor" value="1">Yes
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="audit_report_investor"
                                                   id="audit_report_investor1" value="2">No
                                        </div>
                                    </div>
                                    <div class="bidder-single" id="hide_years">
                                        <label>Years</label>
                                        <input type="number" class="bidder_year" name="audit_year_investor" placeholder="00">
                                    </div>
                                    <div class="bidder-single">
                                        <p>Similar Work Experience</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="similar_work_investor"
                                                   id="similar_work_investor" value="1">Yes
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="similar_work_investor"
                                                   id="similar_work_investor1" value="2">No
                                        </div>
                                    </div>

                                    <div class="bidder-single" id="similar_work_years_investor_all">
                                        <label>Years</label>
                                        <input type="number" class="bidder_year" id="similar_work_years_investor" name="similar_work_years_investor" placeholder="00">
                                    </div>
                                    <div class="bidder-single" id="similar_work_amount_investor_all">
                                        <label>Amount</label>
                                        <input type="number" class="bidder_year" id="similar_work_amount_investor" name="similar_work_amount_investor" placeholder="00">
                                    </div>
                                    <div class="bidder-single" id="similar_work_exp_type_investor_all">
                                        <p>Similar Experience Type</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="similar_work_exp_type_investor" name="similar_work_exp_type_investor"
                                                   value="Govt">
                                            <label class="form-check-label" for="Govt">Govt</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="similar_work_exp_type_investor" name="similar_work_exp_type_investor"
                                                   value="Private">
                                            <label class="form-check-label" for="Private">Private</label>
                                        </div>
                                    </div>

                                    <div class="bidder-single">
                                        <p>General Work Experience</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="general_work_investor"
                                                   id="general_work_investor" value="1">Yes
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="general_work_investor"
                                                   id="general_work_investor" value="2">No
                                        </div>
                                    </div>
                                    <div class="bidder-single">
                                        <label>Investor Required</label>
                                        <input type="number" class="bidder_year" name="investor_required"
                                               placeholder="00">
                                    </div>
                                    <div class="bidder-single bidder-amount">
                                        <label>Investment Amount</label>
                                        <input type="number" name="investment_amount" placeholder="50,000">
                                    </div>
                                    <div class="bidder-single">
                                        <label>Profit Share</label>
                                        <input type="text" class="bidder_year" name="profit_share" placeholder="40%"
                                               value="40%" readonly="readonly">
                                    </div>

                                    <div class="bidder-single">
                                        <div class="form-single">
                                            <p>Invest Process (<span id="percent_progress_investor">0</span>%)</p>
                                            <select id="invest_process" name="invest_process_type"
                                                    class="form-select form-select-sm" tabindex="0"
                                                    onchange="check_investor_installment_type()">
                                                <p id="instant" style="color: red; font-size: 12px;"></p>
                                                <option value="">Select One</option>
                                                <option value="1">1 Installment</option>
                                                <option value="2">2 Installment</option>
                                                <option value="3">3 Installment</option>
                                                <option value="4">4 Installment</option>
                                                <option value="5">5 Installment</option>
                                                <option value="6">6 Installment</option>
                                                <option value="7">7 Installment</option>
                                                <option value="8">8 Installment</option>
                                                <option value="9">9 Installment</option>
                                                <option value="10">10 Installment</option>
                                            </select>
                                        </div>

                                    </div>
                                    <span id="load_field1"></span>
                                    <div class="bidder-single bidder-amount">
                                        <label>Security Money</label>
                                        <input type="text" name="security_investor" id="security_investor" value="10%"
                                               readonly="readonly">
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        <div class="newjob-forms">
                            <div class="newjobfrom-single">
                                <label for="job_title">Name of the Job Title <span>*</span></label>
                                <input type="text" id="job_title" placeholder="The Job Title" name="job_title">
                            </div>


                            <div class="newjobfrom-single">
                                <label for="job_title">Work Authority <span>*</span></label>
                                <select class="search-select" name="work_authority">
                                    <option value="1">Select One</option>
                                    <?php foreach ($work_authority as $v_work_authority) { ?>
                                        <option
                                            value="<?php echo $v_work_authority->id ?>"><?php echo $v_work_authority->work_authority_name; ?></option>
                                    <?php } ?>


                                </select>
                            </div>


                            <div class="newjobfrom-single">
                                <label for="job_title">Work Category <span>*</span></label>
                                <select id="work_category_id" name="work_category_id" class="search-select"
                                        onchange="select_sub_category()">
                                    <option value="1">Select One</option>
                                    <?php foreach ($all_category as $v_category) { ?>
                                        <option
                                            value="<?php echo $v_category->id ?>"><?php echo $v_category->category_name; ?></option>
                                    <?php } ?>

                                </select>
                                <div class="mb-2"></div>
                                <select class="search-selected form-select" name="sub_category_id"
                                        id="sub_category_id">
                                    <option value="1">Select One</option>
                                </select>
                            </div>
                            <style>
                                .search-selected.form-select:focus {
                                    box-shadow: inherit;
                                }

                                .search-selected.form-select {
                                    background: #004793;
                                    color: #ffffff;
                                    border-radius: 7px;
                                }
                            </style>

                            <div class="newjobfrom-single">
                                <label for="job_title">Approximate Budget <span>*</span></label>
                                <input type="number" placeholder="Type Budget Here, e.g 5000000"
                                       name="approximate_budget" id="approximate_budget">
                            </div>
                            <div class="newjobfrom-single">
                                <label for="job_title">Agreement Date <span>*</span></label>
                                <input type="date" name="signup_date" id="signup_date" onchange="signup_date_validation()">
                                <span id="signup_date_u"></span>
                            </div>
                            
                            <div class="newjobfrom-single">
                                <label for="job_title">Work Completion Date <span>*</span></label>
                                <input type="date" name="work_completion_date" id="work_completion_date" onchange="completion_date_validation()">
                                <span id="work_completion_date_u"></span>
                            </div>
                            <div class="newjobfrom-single">
                                <label for="job_title">Work Description/Specification/Tor/Boq <span>*</span></label>
                                <textarea id="newtext" name="work_description"></textarea>
                                <div class="form-single">
                                    <input type="file" id="work_description_file" name="work_description_file"
                                           tabindex="0" onchange="work_description_pdf()">
                                    <p id="description" style="color:red; font-size: 12px;"></p>
                                </div>
                            </div>
                            <div class="newjobfrom-single">
                                <label for="job_title">Qualifications <span>*</span></label>
                                <textarea id="newtext2" name="qualifications"></textarea>
                                <div class="form-single">
                                    <input type="file" id="qualifications_file" name="qualifications_file"
                                           tabindex="0" onchange="qualifications_pdf()">
                                    <p id="qualifications" style="color:red; font-size: 12px;"></p>
                                </div>
                            </div>
                            <div class="newjobfrom-single">
                                <label for="job_title">Terms & Conditions <span>*</span></label>
                                <textarea id="newtext3" name="terms_conditions"></textarea>
                                <div class="form-single">
                                    <input type="file" id="terms_and_conditions_file" name="terms_and_conditions_file"
                                           tabindex="0" onchange="terms_and_conditions_pdf()">
                                    <p id="terms_and_conditions" style="color:red; font-size: 12px;"></p>
                                </div>
                            </div>
                        </div>
                        <div class="newjob-right">
                            <div class="newjobright-single mb-5">
                                <div class="newjobfrom-single">
                                    <?php
                                    $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));


                                    ?>
                                    <label>Publish Date</label>
                                    <input value="<?php echo $dt->format("d-m-Y"); ?> " name="publish_date">
                                </div>
                                <div class="newjobfrom-single">
                                    <label>Last Date of Submission</label>
                                    <input type="date" name="submit_date" id="last_date_submission" onchange="last_date_submission_validation()">
                                    <span id="last_date_submission_u"></span>
                                </div>

                                <div class="bidder-single">
                                    <p>Priority of Works</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="priority_of_works" value="1"
                                               name="priority_of_works" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal">
                                        <label class="form-check-label" for="urgent">Urgent Work</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="priority_of_works"
                                               name="priority_of_works" value="2" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal">
                                        <label class="form-check-label" for="vurgent">Very Urgent Work</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="priority_of_works"
                                               name="priority_of_works" value="3">
                                        <label class="form-check-label" for="warm">Regular Work</label>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-area">
                                                <div class="modal-headerarea">
                                                    <h2>Boost your Job</h2>
                                                    <p>when you use 10 free bid or invest you can purchase an essential
                                                        subscription For you need Par day.</p>
                                                </div>
                                                <div class="modalarea-content">
                                                    <ul>
                                                        <li>Regular Post <a href="#">Free</a></li>
                                                        <li>Urgent Post <a href="#">50 TK</a></li>
                                                        <li>Very Urgent <a href="#">100 TK</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    X
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="newjobpost-button">
                                <button>Post Now</button>
                            </div>
                            <br>
                        </div>
                    </div>
                </form>
            </div>

            <!--If The profile is uncomplete then this section will be shown-->
        <?php } else {
            ?>
            <div class="container">
                <div class="bs-example">
                    <div class="alert alert-warning alert-dismissible fade show">
                        <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> Warning!</h4>
                        <hr>
                        <p>Please Complete your Profile Then Post your Job.......! <a
                                href="<?php echo base_url() ?>frontend">Create a specialized profile.</a></p>
                    </div>
                </div>
            </div><br>

            <div class="container">
                <div class="publisher-menu mb-4">
                    <ul>
                        <li><a href="">Active Job</a></li>
                        <li><a href="">Pending Work</a></li>
                        <li><a href="">New Job</a></li>
                        <li><a class="active" href="">Post a Job</a></li>
                    </ul>

                </div>
                <div class="newjob-area">

                    <div class="newjob-left">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Home
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Investor
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <div class="bidder-single">
                                    <p>You Need Bidder</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                               value="option1" unchecked disabled>
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckboxw"
                                               value="optionw" unchecked disabled>
                                        <label class="form-check-label" for="inlineCheckboxw">No</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <p>Work Type</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="goods" value="goods"
                                               unchecked disabled>
                                        <label class="form-check-label" for="goods">Goods</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="service"
                                               value="service" unchecked disabled>
                                        <label class="form-check-label" for="service">Service</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="work" value="work"
                                               unchecked disabled>
                                        <label class="form-check-label" for="work">Work</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="others"
                                               value="others" unchecked disabled>
                                        <label class="form-check-label" for="others">Others</label>
                                    </div>
                                </div>
                                <div class="bidder-single bidder-spec">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="spec" value="spec"
                                               unchecked disabled>
                                        <label class="form-check-label" for="spec">Spec</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="catalog"
                                               value="catalog" unchecked disabled>
                                        <label class="form-check-label" for="catalog">Catalog</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="time" value="time"
                                               unchecked disabled>
                                        <label class="form-check-label" for="time">Time</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="workprocess"
                                               value="workprocess" unchecked disabled>
                                        <label class="form-check-label" for="workprocess">Work Process</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="manpower"
                                               value="manpower" unchecked disabled>
                                        <label class="form-check-label" for="manpower">Man Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="quotation"
                                               value="quotation" unchecked disabled>
                                        <label class="form-check-label" for="quotation">Quotation</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <p>Legal</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="tin" value="tin"
                                               unchecked disabled>
                                        <label class="form-check-label" for="tin">TIN</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="bin" value="bin"
                                               unchecked disabled>
                                        <label class="form-check-label" for="bin">BIN</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="nid" value="nid"
                                               unchecked disabled>
                                        <label class="form-check-label" for="nid">NID</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="texreturn"
                                               value="texreturn" name="tax_return_bidder">
                                        <label class="form-check-label" for="texreturn">Tax Return</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="trade_licence_bidder"
                                               value="texreturn" name="trade_licence_bidder">
                                        <label class="form-check-label" for="texreturn">Trade Licence</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <p>Audit Report</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="ayes" value="yes"
                                               unchecked disabled>
                                        <label class="form-check-label" for="ayes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="yno" value="no"
                                               unchecked disabled>
                                        <label class="form-check-label" for="yno">No</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <label>Years</label>
                                    <input type="text" class="bidder_year" name="audit_year_bidder" placeholder="1" readonly>
                                </div>
                                <div class="bidder-single">
                                    <p>Similar Work Experience</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="similar_work_bidder" id="eyes" value="yes"
                                               unchecked disabled>
                                        <label class="form-check-label" for="eyes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="eno" value="no"
                                               unchecked disabled>
                                        <label class="form-check-label" for="eno">No</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <p>General Work Experience</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="gyes" value="yes"
                                               unchecked disabled>
                                        <label class="form-check-label" for="gyes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="gno" value="no"
                                               unchecked disabled>
                                        <label class="form-check-label" for="gno">No</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <div class="form-single">
                                        <p>Payment Term</p>
                                        <select class="form-select form-select-sm" tabindex="0" unchecked
                                                disabled>
                                            <option selected="">30% - 30% - 40%</option>
                                            <option value="1">30% - 40% - 30%</option>
                                            <option value="2">40% - 40% - 20%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <div class="form-single">
                                        <p>Security Term</p>
                                        <select class="form-select form-select-sm" tabindex="0" unchecked
                                                disabled>
                                            <option selected="">10%</option>
                                            <option value="1">20%</option>
                                            <option value="1">30%</option>
                                            <option value="2">40%</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">

                                <div class="bidder-single">
                                    <p>You Need Bidder</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1t"
                                               value="option1" unchecked disabled>
                                        <label class="form-check-label" for="inlineCheckbox1t">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckboxww"
                                               value="optionw" unchecked disabled>
                                        <label class="form-check-label" for="inlineCheckboxww">No</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <p>Work Type</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="ggoods"
                                               value="goods" unchecked disabled>
                                        <label class="form-check-label" for="ggoods">Goods</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="sservice"
                                               value="service" unchecked disabled>
                                        <label class="form-check-label" for="sservice">Service</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="wwork" value="work"
                                               unchecked disabled>
                                        <label class="form-check-label" for="wwork">Work</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="oothers"
                                               value="others" unchecked disabled>
                                        <label class="form-check-label" for="oothers">Others</label>
                                    </div>
                                </div>
                                <div class="bidder-single bidder-spec">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="specc" value="spec"
                                               unchecked disabled>
                                        <label class="form-check-label" for="specc">Spec</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="catalogg"
                                               value="catalog" unchecked disabled>
                                        <label class="form-check-label" for="catalogg">Catalog</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="timee" value="time"
                                               unchecked disabled>
                                        <label class="form-check-label" for="timee">Time</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="workprocesss"
                                               value="workprocess" unchecked disabled>
                                        <label class="form-check-label" for="workprocesss">Work Process</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="manpowerr"
                                               value="manpower" unchecked disabled>
                                        <label class="form-check-label" for="manpowerr">Man Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="quotationn"
                                               value="quotation" unchecked disabled>
                                        <label class="form-check-label" for="quotationn">Quotation</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <p>Legal</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="tinn" value="tin"
                                               unchecked disabled>
                                        <label class="form-check-label" for="tinn">TIN</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="binn" value="bin"
                                               unchecked disabled>
                                        <label class="form-check-label" for="binn">BIN</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="nidd" value="nid"
                                               unchecked disabled>
                                        <label class="form-check-label" for="nidd">NID</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="texreturnn"
                                               value="texreturn" unchecked disabled>
                                        <label class="form-check-label" for="texreturnn">Tax Return</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <p>Audit Report</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="aayes" value="yes"
                                               unchecked disabled>
                                        <label class="form-check-label" for="aayes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="yyno" ba value="no"
                                               unchecked disabled>
                                        <label class="form-check-label" for="yyno">No</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <label>Years</label>
                                    <input type="text" class="bidder_year" name="audit_year_investor" placeholder="02" unchecked disabled>
                                </div>
                                <div class="bidder-single">
                                    <p>Similar Work Experience</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="eeyes" value="yes"
                                               unchecked disabled>
                                        <label class="form-check-label" for="eeyes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="eeno" value="no"
                                               unchecked disabled>
                                        <label class="form-check-label" for="eeno">No</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <p>General Work Experience</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="ggyes" value="yes"
                                               unchecked disabled>
                                        <label class="form-check-label" for="ggyes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="ggno" value="no"
                                               unchecked disabled>
                                        <label class="form-check-label" for="ggno">No</label>
                                    </div>
                                </div>
                                <div class="bidder-single">
                                    <label>Investment Required</label>
                                    <input type="text" class="bidder_year" placeholder="05" readonly>
                                </div>
                                <div class="bidder-single bidder-amount">
                                    <label>Investment Amount</label>
                                    <input type="text" placeholder="50,000" readonly>
                                </div>
                                <div class="bidder-single">
                                    <label>Profit Share</label>
                                    <input type="text" class="bidder_year" placeholder="40%" readonly>
                                </div>
                                <div class="bidder-single">
                                    <p>Invest Process</p>
                                    <label>First Invest</label>
                                    <input type="text" class="bidder_year" placeholder="10%" readonly>
                                    <br>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="newjob-forms">
                        <div class="newjobfrom-single">
                            <label for="job_title">Name of the Job Title <span>*</span></label>
                            <input type="text" id="job_title" placeholder="The Job Title" name="" readonly>
                        </div>
                        <div class="newjobfrom-single">
                            <label for="job_title">Work Authority <span>*</span></label>
                            <select class="search-select" disabled readonly>

                            </select class="search-select" >
                        </div>
                        <div class="newjobfrom-single">
                            <label for="job_title">Work Category <span>*</span></label>
                            <select class="search-select" readonly>

                            </select>
                            <div class="mb-2"></div>
                            <select class="search-select" readonly>

                            </select>
                        </div>
                        <div class="newjobfrom-single">
                            <label for="job_title">Approximate Budget <span>*</span></label>
                            <select class="search-select" readonly>

                            </select>
                        </div>
                        <div class="newjobfrom-single">
                            <label for="job_title">Signup Date <span>*</span></label>
                            <input type="date" name="" readonly>
                        </div>
                        <div class="newjobfrom-single">
                            <label for="job_title">Work Completion Date <span>*</span></label>
                            <input type="date" name="" readonly>
                        </div>
                        <div class="newjobfrom-single">
                            <label for="job_title">Work Description/Specification <span>*</span></label>
                            <textarea id="newtext" readonly></textarea>
                            <div class="divupload">
                                <label class="upload" for="upload1">
                                    <i class="fas fa-plus-square"></i>
                                    <p>PDF/Image</p>
                                </label>
                                <input type="file" id="upload1" style="display: none" readonly>
                            </div>
                        </div>
                        <div class="newjobfrom-single">
                            <label for="job_title">Qualifications <span>*</span></label>
                            <textarea id="newtext2" unchecked disabled></textarea>
                            <div class="divupload">
                                <label class="upload" for="upload2">
                                    <i class="fas fa-plus-square"></i>
                                    <p>PDF/Image</p>
                                </label>
                                <input type="file" id="upload2" style="display: none" readonly>
                            </div>
                        </div>
                        <div class="newjobfrom-single">
                            <label for="job_title">Terms & Conditions <span>*</span></label>
                            <textarea id="newtext3" unchecked disabled></textarea>
                            <div class="divupload">
                                <label class="upload" for="upload3">
                                    <i class="fas fa-plus-square"></i>
                                    <p>PDF/Image</p>
                                </label>
                                <input type="file" id="upload3" style="display: none" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="newjob-right">
                        <div class="newjobright-single mb-5">
                            <div class="newjobfrom-single">
                                <label>Publish Date</label>
                                <input type="date" name="" readonly>
                            </div>
                            <div class="newjobfrom-single">
                                <label>Last Date of Submission</label>
                                <input type="date" name="last_date_submission" id="last_date_submission" readonly>
                                <span id></span>
                            </div>

                            <div class="bidder-single">
                                <p>Priority of Works</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="urgent" value="urgent"
                                           unchecked disabled>
                                    <label class="form-check-label" for="urgent">Urgent</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="vurgent" value="vurgent"
                                           unchecked disabled>
                                    <label class="form-check-label" for="vurgent">Very Urgent</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="warm" value="work"
                                           unchecked disabled>
                                    <label class="form-check-label" for="warm">Warm</label>
                                </div>
                            </div>
                        </div>

                        <div class="newjobpost-button">
                            <button>Post Now</button>
                        </div>
                    </div>
                </div>


            </div>

        <?php } ?>


    </section>
</main>


<input type="hidden" id="total_percent_bidder" value="0">
<script>
    $('#job_title').click(function () {
        var set_value1 = $('#total_percent_bidder').val();
        var check = $('#payment_term_bidder').val();
        if (check > 0) {
            if (set_value1 < 100) {
                var set_message1 = "You Are Complete" + " " + " " + set_value1 + "Please complete Payment Term 100%";
                alert(set_message1);
            }
        }
    });
</script>

<input type="hidden" id="total_percent_investor" value="0">
<script>
    $('#job_title').click(function () {
        var check = $('#invest_process').val();
        if (check > 0) {
            var set_value = $('#total_percent_investor').val();
            if (set_value < 100) {
                var set_message = "You Are Complete" + " " + set_value + " " + "Please complete Invest Process 100%";
                alert(set_message);
            }
        }
    });
</script>

<script>
    function check_percent_investor($id) {
        var total = $('#invest_process').val();
        var set_id = $id;
        var get_percent = $('#percent_partial' + set_id + "").val();
        if (get_percent > 0) {
            var set_percent = get_percent;
        } else {
            var count = 0;
            var get_initial_value = $('#total_percent_investor').val(0);
            for (var i = 1; i <= total; i++) {
                var get_percent = $('#percent_partial' + i + "").val();
                if (get_percent > 0) {
                    count += parseInt(get_percent);
                }
            }
            $('#total_percent_investor').val(parseInt(count));
            $('#percent_progress_investor').html(parseInt(count));
            var set_percent = 0;
        }
        var get_initial_value = $('#total_percent_investor').val();
        var set_total = parseInt(get_initial_value) + parseInt(set_percent);
        if (set_total > 100) {
            alert('You have cross the limit !!!');
            $('#percent_partial' + set_id + "").val('');
            var count = 0;
            var get_initial_value = $('#total_percent_investor').val(0);
            for (var i = 1; i <= total; i++) {
                var get_percent = $('#percent_partial' + i + "").val();
                if (get_percent > 0) {
                    count += parseInt(get_percent);
                }
            }
            $('#total_percent_investor').val(parseInt(count));
            $('#percent_progress_investor').html(parseInt(count));
        } else {
            $('#total_percent_investor').val(set_total);
            $('#percent_progress_investor').html(set_total);
        }

    }
</script>
<script>
    function check_bidder_installment_type() {
        var payment_term = $('#payment_term_bidder').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>job_post/check_bidder_installment_type',
            data: {payment_term: payment_term},
            success: function (result) {
                if (result) {
                    $('#load_field').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<!------------------------------------------------------------Investor Installment---------------------------------------------------->

<script>
    function check_investor_installment_type() {
        var invest_process = $('#invest_process').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>job_post/check_investor_installment_type',
            data: {invest_process: invest_process},
            success: function (result) {
                if (result) {
                    $('#load_field1').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>
<script>
    function select_sub_category() {
        var category_id = $('#work_category_id').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>job_post/select_sub_category',
            data: {category_id: category_id},
            success: function (result) {
                if (result) {
                    $('#sub_category_id').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<!------------------------------------------------------------Investor Installment---------------------------------------------------->
<!------------------------------------------------------------investor Audit Year Show And Hide---------------------------------------------------->
<script>
    $('#audit_report_investor1').click(function () {
        var get_value = $('#audit_report_investor').val();
        if (get_value == 1) {
            $('#hide_years').hide();
        }
    });
</script>

<script>
    $('#audit_report_investor').click(function () {
        var get_value = $('#audit_report_investor').val();
        if (get_value == 1) {
            $('#hide_years').show();
        }
    });
</script>
<!------------------------------------------------------------Investor Audit Year Show And Hide---------------------------------------------------->


<!------------------------------------------------------------Bidder Installment---------------------------------------------------->
<script>
    function check_percent_bidder($id) {
        var total = $('#payment_term_bidder').val();
        var set_id = $id;
        var get_percent = $('#percent_partial1' + set_id + "").val();
        if (get_percent > 0) {
            var set_percent = get_percent;
        } else {
            var count = 0;
            var get_initial_value = $('#total_percent_bidder').val(0);
            for (var i = 1; i <= total; i++) {
                var get_percent = $('#percent_partial1' + i + "").val();
                if (get_percent > 0) {
                    count += parseInt(get_percent);
                }
            }
            $('#total_percent_bidder').val(parseInt(count));
            $('#percent_progress_bidder').html(parseInt(count));
            var set_percent = 0;
        }
        var get_initial_value = $('#total_percent_bidder').val();
        var set_total = parseInt(get_initial_value) + parseInt(set_percent);
        if (set_total > 100) {
            alert('You have cross the limit !!!');
            $('#percent_partial1' + set_id + "").val('');
            var count = 0;
            var get_initial_value = $('#total_percent_bidder').val(0);
            for (var i = 1; i <= total; i++) {
                var get_percent = $('#percent_partial1' + i + "").val();
                if (get_percent > 0) {
                    count += parseInt(get_percent);
                }
            }
            $('#total_percent_bidder').val(parseInt(count));
            $('#percent_progress_bidder').html(parseInt(count));
        } else {
            $('#total_percent_bidder').val(set_total);
            $('#percent_progress_bidder').html(set_total);
        }

    }
</script>
<!------------------------------------------------------------End Bidder Installment---------------------------------------------------->


<!------------------------------------------------------------Bidder Audit Year Show And Hide---------------------------------------------------->
<script>
    $('#audit_report_bidder1').click(function () {
        var get_value = $('#audit_report_bidder').val();
        if (get_value == 1) {
            $('#bidder_years').hide();
        }
    });
</script>

<script>
    $('#audit_report_bidder').click(function () {
        var get_value = $('#audit_report_bidder').val();
        if (get_value == 1) {
            $('#bidder_years').show();
        }
    });
</script>

<!------------------------------------------------------------End Bidder Audit Year Show And Hide---------------------------------------------------->

<!------------------------------------------------------------Bidder Similar Year, Amount, Type Show And Hide---------------------------------------------------->
<script>
    $('#similar_work_bidder').click(function () {
        var get_value = $('#similar_work_bidder').val();
        if (get_value == 1) {
            $('#similar_work_years_bidder_all').show();
            $('#similar_work_amount_bidder_all').show();
            $('#similar_work_exp_type_bidder_all').show();
        }
    });
</script>

<script>
    $('#similar_work_bidder1').click(function () {
        var get_value = $('#similar_work_bidder').val();
        if (get_value == 1) {
            $('#similar_work_years_bidder_all').hide();
            $('#similar_work_amount_bidder_all').hide();
            $('#similar_work_exp_type_bidder_all').hide();
        }
    });
</script>

<!------------------------------------------------------------End Bidder Similar Year, Amount, Type Show And Hide---------------------------------------------------->


<!------------------------------------------------------------Investor Similar Year, Amount, Type Show And Hide---------------------------------------------------->
<script>
    $('#similar_work_investor').click(function () {
        var get_value = $('#similar_work_investor').val();
        if (get_value == 1) {
            $('#similar_work_years_investor_all').show();
            $('#similar_work_amount_investor_all').show();
            $('#similar_work_exp_type_investor_all').show();
        }
    });
</script>

<script>
    $('#similar_work_investor1').click(function () {
        var get_value = $('#similar_work_investor').val();
        if (get_value == 1) {
            $('#similar_work_years_investor_all').hide();
            $('#similar_work_amount_investor_all').hide();
            $('#similar_work_exp_type_investor_all').hide();
        }
    });
</script>

<!------------------------------------------------------------End Bidder Similar Year, Amount, Type Show And Hide---------------------------------------------------->

<!-------------------------------PDF Validation---------------------------------------------------------------------------->
<script type="text/javascript">
    function work_description_pdf() {
        var fname = $('#work_description_file').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("description").innerHTML = "";

        }
        else {
            document.getElementById("description").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>

<script type="text/javascript">
    function qualifications_pdf() {
        var fname = $('#qualifications_file').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("qualifications").innerHTML = "";

        }
        else {
            document.getElementById("qualifications").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>

<script type="text/javascript">
    function terms_and_conditions_pdf() {
        var fname = $('#terms_and_conditions_file').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("terms_and_conditions").innerHTML = "";

        }
        else {
            document.getElementById("terms_and_conditions").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>

<!-------------------------------End PDF Validation---------------------------------------------------------------------------->
<!-------------------------------Start Agreements Date Validation-------------------------------------------------------------->
<script type="text/javascript">
    function signup_date_validation() {
        var signup_date = document.getElementById('signup_date').value;
        var myDate = new Date(signup_date);
        var today = new Date();
        if ( myDate < today ) { 
            $('#signup_date').val(today);
            $('#signup_date_u').html("<code class='err_msg'>* You cannot enter a date in the past!. *</code>");
            $("#signup_date_u .err_msg").delay(3000).fadeOut(800);
            $("#signup_date").focus();
            return false;
        }
        return true;
    }
</script>

<!---------------------------------End Agreements Date Validation-------------------------------------------------------------->

<!-------------------------------Start Work Completion Date Validation---------------------------------------------------------->
<script type="text/javascript">
    function completion_date_validation() {
        var work_completion_date = document.getElementById('work_completion_date').value;
        var signup_date = document.getElementById('signup_date').value;
        var myDate = new Date(work_completion_date);
        var signup = new Date(signup_date);
        if ( myDate < signup ) { 
            $('#work_completion_date').val(signup);
            $('#work_completion_date_u').html("<code class='err_msg'>* You cannot enter a date before the agreement date!. *</code>");
            $("#work_completion_date_u .err_msg").delay(3000).fadeOut(800);
            $("#work_completion_date").focus();
            return false;
        }
        return true;
    }
</script>

<!-------------------------------End Work Completion Date Validation---------------------------------------------------------->

<!-------------------------------Start Work submisstion Date Validation---------------------------------------------------------->
<script type="text/javascript">
    function last_date_submission_validation() {
        var signup_date = document.getElementById('signup_date').value;
        var last_date_submission = document.getElementById('last_date_submission').value;
        var myDate = new Date(last_date_submission);
        var completion = new Date(signup_date);
        var toDay = new Date();
        if ( today > myDate > completion ) { 
            $('#last_date_submission').val(completion);
            $('#last_date_submission_u').html("<code class='err_msg'>* You cannot enter a date from past and after agreement date!. *</code>");
            $("#last_date_submission_u .err_msg").delay(3000).fadeOut(800);
            $("#last_date_submission").focus();
            return false;
        }
        return true;
    }
</script>
<!-------------------------------End Work submisstion Date Validation---------------------------------------------------------->
<!-------------------------------Starts Investor Selection Validation---------------------------------------------------------->
<script>
    $('#need_investor').click(function () {
        var get_value = $('#need_investor').val();
        if (get_value == 1) {
            $('#u2').show();
         }
    });
</script>
<script>
    $('#need_investor1').click(function () {
        var get_value = $('#need_investor1').val();
        if(get_value == 2){
            $('#u2').hide();
        }
    });
</script>