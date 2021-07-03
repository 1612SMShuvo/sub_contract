<main class="body-padding">
    <section class="requestinvite-area specification-area">
        <div class="container">
            <div class="publisher-menu mb-4">
                <ul>
                    <li><a class="active"  href="<?php echo base_url() ?>payment_as_publisher/all_payment_as_publisher">Publisher Payment</a></li>
                    <li><a href="<?php echo base_url() ?>payment_as_publisher/all_payment_as_investor">Investor Payment</a></li>
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
                                foreach($total as $request)
                                {
                                    if($request->status==2){
                                        $request_money = $request->request_money + $request_money;
                                    }
                                }
                                echo $request_money;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Approve Money</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $totalapprove =0;
                                foreach($total as $approved)
                                {
                                    if($approved->status==3 || $approved->status==4){
                                        $totalapprove = $approved->request_money + $totalapprove;
                                    }
                                }
                                echo $totalapprove;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Remaining</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $remaining=0;
                                foreach($total as $remain)
                                {
                                    if($remain->status!=5){
                                        $remaining = $remain->request_money + $remaining;
                                    }
                                }
                                echo $remaining;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Total Paid</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $totalpaid =0;
                                foreach($total as $paid)
                                {
                                    if($paid->status==5){
                                        $totalpaid = $paid->request_money + $totalpaid;
                                    }
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
                                <th>Installment</th>
                                <th>Agreement Money</th>
                                <th>Requested</th>
                                <th>Approve Money</th>
                                <th>Remaining</th>
                                <th>Total Paid</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            foreach ($payment_terms as $v_payment_term) { ?>
                                <tr>
                                    <td>
                                        <?php
                                        $i++; echo "SL No.". $i;
                                        ?>
                                    </td>
                                    <td><a href="<?php echo base_url() ?>my_work/my_work_pending_details/<?php echo $v_payment_term->post_id; ?>" >Tender ID <?php echo $v_payment_term->post_id; ?></a></td>
                                    <td><?php echo $v_payment_term->work_description; ?></td>
                                    <td><?php echo $v_payment_term->budget; ?></td>
                                    <td>
                                        <?php
                                        $request_money=0;
                                        $post_id= $v_payment_term->post_id;
                                        $agreement_id= $v_payment_term->agreement_id;
                                        $payment_count = $this->Payment_as_publisher_model->select_all_payment_per_post_as_publisher($agreement_id);
                                        foreach($payment_count as $payment_agreement){
                                            if ($payment_agreement->status == 2) {
                                                $request_money = $payment_agreement->request_money + $request_money;
                                                echo $request_money;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $approved=0;
                                        foreach($payment_count as $payment_agreement){
                                            if ($payment_agreement->status == 3 || $payment_agreement->status == 4){
                                                $approved = $payment_agreement->request_money + $approved;
                                            }
                                        }
                                        echo $approved;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $remaining=0;
                                        foreach($payment_count as $payment_agreement){
                                            if ($payment_agreement->status != 5){
                                                $remaining = $v_payment_term->budget - ($request_money + $approved);
                                            }
                                        }
                                        echo $remaining;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $total_paid=0;
                                        foreach($payment_count as $paid){
                                            if($paid->status==5){
                                                $total_paid = $paid->request_money + $total_paid;
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
