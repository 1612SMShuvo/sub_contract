<main class="body-padding">
    <section class="specification-top">
        <div class="container">
            <div class="row d-flex align-items-center">
                <?php
                foreach ($my_invest_details as $v_my_invest_details)
                {?>
                <div class="col-md-8">
                    <div class="specification-topleft">

                        <h4>Tender ID <?php echo $v_my_invest_details->id ?></h4>
                        <h4><span><?php echo $v_my_invest_details->job_title ?></span></h4>
                        <ul>
                            <li>Work Type: <span>
                                                 <?php
                                                 if ($v_my_invest_details->work_type_bidder == 1) {
                                                     echo "Goods";
                                                 } else if ($v_my_invest_details->work_type_bidder == 2) {
                                                     echo "Service";
                                                 } else if ($v_my_invest_details->work_type_bidder == 3) {
                                                     echo "Work";
                                                 } else if ($v_my_invest_details->work_type_bidder == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span></li>
                            <li>Work Authority:<span><?php echo $v_my_invest_details->work_authority_name; ?></span></li>
                            <li>Department: <span>
                                                 <?php
                                                 if ($v_my_invest_details->work_category_id == 1) {
                                                     echo "Web Development";
                                                 } else if ($v_my_invest_details->work_category_id == 2) {
                                                     echo "Software Development";
                                                 } else if ($v_my_invest_details->work_category_id == 3) {
                                                     echo "App Development";
                                                 } else if ($v_my_invest_details->work_category_id == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span>
                            </li>
                            <li>Job Category: <span><?php echo $v_my_invest_details->category_name; ?></span></li>
                            <li>Job Sub-Category: <span><?php echo $v_my_invest_details->sub_category_name; ?></span></li>
                            <li>Tender Caller: <span><?php echo $v_my_invest_details->organization_name; ?></span></li>
                            <li>Published in: <span><?php echo $v_my_invest_details->publish_date; ?></span></li>
                            <li>Closing date: <span><?php echo $v_my_invest_details->submit_date; ?></span></li>
                            <li>Approve Budget: <span><?php echo $v_my_invest_details->quotation_price_for_bidder; ?>TK</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="specification-topright">
                        <div>
                            <img src="<?php echo base_url()?>public/user_profile/<?php echo $v_my_invest_details->company_logo; ?>" alt="image">
                        </div>
                        <div>
                            <h4><?php echo $v_my_invest_details->organization_name; ?></h4>
                            <p><?php echo $v_my_invest_details->office_address; ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="requestinvite-area specification-area">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Milestone</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Agreement, T&C </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Spec & Requerment</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="milestone pt-4">
                        <table class="table table-striped table-bordered ">
                            <thead>
                            <tr>
                                <th>Payment Date</th>
                                <th>Work Process</th>
                                <th>Budget</th>
                                <th>Requested</th>
                                <th>Milestone Paid</th>
                                <th>Remaining</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> <input type="date" name="payment_date" ></td>
                                <td>10,000</td>
                                <td><?php echo $v_my_invest_details->quotation_price_for_bidder; ?></td>
                                <td><input type="number" name="Requested_money" ></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm">Payment</button>
                                    <button type="button" class="btn btn-secondary btn-sm">Approve</button>
                                    <button type="button" class="btn btn-success btn-sm">Proceess</button>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <?php }?>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="agrement-all pt-4">
                        <div class="agremetn-single">
                            <h5>Agreement</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                        <div class="agremetn-single">
                            <h5>Terms of Service</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                        <div class="agremetn-single">
                            <h5>Condiion</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                        <div class="agremetn-single">
                            <h5>Privacy & Policy</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="reqinvite-right pt-4">
                        <div class="reqinvite-rightsingle">
                            <div class="reqinvite-righttop">
                                <div class="reqinvite-righttop-left">
                                    <h4>Cover Latter for this Project</h4>
                                </div>
                                <div class="reqinvite-righttop-right">
                                    <p>Budget <span class="ml-20">1,00,000</span></p>
                                    <p>Quotation Price <span class="ml-20">80,000</span></p>
                                </div>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        </div>

                        <div class="reqinvite-rightsingle pt-4">
                            <h4 class="pb-4">Specification</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            <ul class="legal">
                                <li><a href="#"><img src="<?php echo base_url()?>web_assets/images/book2.png"></a></li>

                            </ul>
                        </div>

                        <div class="reqinvite-rightsingle pt-4">
                            <h4 class="pb-4">Work Process</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            <ul class="legal">
                                <li><a href="#"><img src="<?php echo base_url()?>web_assets/images/book3.png"></a></li>

                            </ul>
                        </div>

                        <div class="reqinvite-rightsingle pt-4">
                            <h4 class="pb-4">Budget</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            <ul class="legal">
                                <li><a href="#"><img src="<?php echo base_url()?>web_assets/images/book4.png"></a></li>

                            </ul>
                        </div>

                        <div class="reqinvite-rightsingle pt-4">
                            <h4 class="pb-4">Manpower</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

                        </div>

                        <div class="reqinvite-rightsingle pt-4">
                            <h4 class="pb-4">Manpower</h4>
                            <ul class="legal">
                                <li><a href="#"><img src="<?php echo base_url()?>web_assets/images/catalog1.png"></a></li>
                                <li><a href="#"><img src="<?php echo base_url()?>web_assets/images/catalog2.png"></a></li>
                                <li><a href="#"><img src="<?php echo base_url()?>web_assets/images/catalog3.png"></a></li>
                                <li><a href="#"><img src="<?php echo base_url()?>web_assets/images/catalog4.png"></a></li>
                                <li><a href="#"><img src="<?php echo base_url()?>web_assets/images/catalog5.png"></a></li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>



        </div>
    </section>
</main>