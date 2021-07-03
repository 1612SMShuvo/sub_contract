<main class="body-padding">
    <section class="requestinvite-area specification-area">
        <div class="container">
            <div class="publisher-menu mb-4">
                <ul>
                    <li><a href="<?php echo base_url() ?>payment_as_publisher/all_payment_as_publisher">Publisher Payment</a></li>
                    <li><a  class="active"  href="<?php echo base_url() ?>payment_as_publisher/all_payment_as_investor">Investor Payment</a></li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-earning" role="tabpanel"
                     aria-labelledby="pills-earning-tab"><br>
                    <div class="row " style="margin-left: 200px;">
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;" class="budget">Total Budget</h5><br><br>
                            <h3 class="">
                                <?php
                                $budget=0;
                                foreach($total_budget as $data)
                                {
                                    $budget =$data->invest_amount + $budget;
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
                                    $request_money += (int)$request->amount;

                                    echo $request_money;
                                    ?>
                                <?php }?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Approve Money</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $totalapprove =0;
                                foreach($total_approve as $approved)
                                {
                                    $totalapprove += (int)$approved->amount;
                                }
                                echo $totalapprove;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Remaining</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $remaining = $budget - $totalapprove;
                                echo $remaining;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Total Paid</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $totalpaid =0;
                                foreach($total_paid as $paid)
                                {
                                    $totalpaid = $paid->amount + $totalpaid;
                                }
                                echo $totalpaid;
                                ?></h3>
                        </div>
                    </div><br>
                    <div class="milestone pt-4">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Tender ID</th>
                                <th>Agreement Money</th>
                                <th>Requested</th>
                                <th>Approve Money</th>
                                <th>Remaining</th>
                                <th>Total Paid</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $total_earning = 0;
                            $agreement_money = 0;
                            $request_money=0;
                            $approved=0;
                            $remaining=0;
                            $total_paid=0;
                            $i=0;
                            foreach ($payment_terms as $v_payment_term) { ?>
                                <tr>
                                    <td>
                                        <?php
                                        $i++; echo "SL No.". $i;
                                        ?>
                                    </td>
                                    <td><a href="<?php echo base_url() ?>my_work/my_work_pending_details/<?php echo $v_payment_term->post_id; ?>" >Tender ID <?php echo $v_payment_term->post_id; ?></a></td>
                                    <td><?php echo $v_payment_term->invest_amount; ?></td>
                                    <td>
                                        <?php
                                        $agreement_id= $v_payment_term->id;
                                        $payment_count = $this->Payment_as_publisher_model->select_all_payment_per_post_as_investor($agreement_id);
                                        foreach($payment_count as $payment_agreement){
                                            if ($payment_agreement->status == 2) {
                                                $request_money = $payment_agreement->amount + $request_money;
                                            }
                                        }
                                        echo $request_money;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        foreach($payment_count as $payment_agreement){
                                            if ($payment_agreement->status == 3){
                                                $approved = $payment_agreement->amount + $approved;
                                            }
                                        }
                                        echo $approved;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        foreach($payment_count as $payment_agreement){
                                            if ($payment_agreement->status <= 2){
                                                $remaining = $payment_agreement->amount + $remaining;
                                            }
                                        }
                                        echo $remaining;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        foreach($payment_count as $payment_agreement){
                                            if ($payment_agreement->status == 5){
                                                $total_paid = $payment_agreement->amount + $total_paid;
                                            }
                                        }
                                        echo $total_paid;
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
