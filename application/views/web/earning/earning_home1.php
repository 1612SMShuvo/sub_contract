<main class="body-padding">
    <section class="requestinvite-area specification-area">
        <div class="container">

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-earning" role="tabpanel"
                     aria-labelledby="pills-earning-tab"><br>
                    <div class="row " style="margin-left: 200px;">
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;" class="budget">Budget</h5><br><br>
                            <h3 class="">
                                <?php
                                    $budget=0;
                                    foreach($total_budget as $data)
                                    {
                                        $budget = $data->budget + $budget;
                                    }
                                echo $budget;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Requested</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $request_money =0;
                                foreach($total_request as $request)
                                {
                                    $request_money = $request->request_money + $request_money;
                                }
                                echo $request_money;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Milestone</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $totalmilestone =0;
                                foreach($total_milestone as $milestone)
                                {
                                    $totalmilestone = $milestone->request_money + $totalmilestone;
                                }
                                echo $totalmilestone;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Remaining</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $remaining = $budget - $totalmilestone;
                                echo $remaining;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Total Earning</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $totalmilestone =0;
                                foreach($total_milestone as $milestone)
                                {
                                    $totalmilestone = $milestone->request_money + $totalmilestone;
                                }
                                echo $totalmilestone;
                                ?></h3>
                        </div>
                    </div><br>
                    <div class="milestone pt-4">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Tender Name</th>
                                <th>Budget</th>
                                <th>Requested</th>
                                <th>Milestone</th>
                                <th>Remaining</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $total_earning = 0;
                            $agreement_money = 0;
                            $request_money=0;
                            $milestone=0;
                            $remaining=0;
                            $total_earn=0;
                            $i=0;
                            foreach ($payment_term as $v_payment_term) { ?>
                                <tr>
                                    <td>
                                        <?php
                                            $i++; echo "SL No.". $i;
                                        ?>
                                    </td>
                                    <td><a href="<?php echo base_url() ?>my_work/my_work_pending_details/<?php echo $v_payment_term->post_id; ?>" >Tender ID <?php echo $v_payment_term->post_id; ?></a></td>
                                    <td><?php echo $v_payment_term->project_budget ?></td>
                                    <td>
                                        <?php
                                        $post_id= $v_payment_term->post_id;
                                        $agreement_id= $v_payment_term->agreement_id;
                                        $payment_count = $this->Earning_model->select_all_payment_per_post($agreement_id);
                                        foreach($payment_count as $payment_agreement){
                                        if ($payment_agreement->status == 2) {
                                            $request_money = $payment_agreement->request_money + $request_money;
                                            echo $request_money;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($payment_agreement->status == 3 || $payment_agreement->status == 4){
                                        $milestone = $payment_agreement->request_money + $milestone;
                                        echo $milestone;
                                        ?>
                                    </td>
                                    <?php } }?>
                                    <td>
                                        <?php
                                        $remaining = $v_payment_term->project_budget - ($request_money + $milestone);
                                        echo $remaining;
                                        ?>
                                    </td>

                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
