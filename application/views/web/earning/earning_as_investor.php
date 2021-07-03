<main class="body-padding">
    <section class="requestinvite-area specification-area">
        <div class="container">
            <div class="publisher-menu mb-4">
                <ul>
                    <li><a href="<?php echo base_url() ?>earning/all_earning">Earning As Bidder</a></li>
                    <li><a class="active" href="<?php echo base_url() ?>earning/all_earning_as_investor">Earning As Investor</a></li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-earning" role="tabpanel"
                     aria-labelledby="pills-earning-tab"><br>
                    <div class="row " style="margin-left: 200px;">
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;" class="budget">Investable Amount</h5><br><br>
                            <h3 class="">
                                <?php
                                    $budget=0;
                                    foreach($total_budget as $data)
                                    {
                                        $budget = $data->invest_amount + $budget;
                                    }
                                	echo $budget;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Remindered Amount</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $request_money =0;
                                foreach($total_request as $request)
                                {
                                    $request_money = $request->amount + $request_money;
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
                                    $totalmilestone = $milestone->amount + $totalmilestone;
                                }
                                echo $totalmilestone;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Remaining</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $remaining=0;
                                foreach($total_remain as $milestone){
                                $remaining = $milestone->amount + $remaining;
                            	}
                                echo $remaining;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Total Receivable</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $gainable=0;
                                foreach($total_gainable as $data){
                                $gainable = $data->amount + $gainable;
                            	}
                            	$gainable = $gainable + $gainable*0.4;
                                echo $gainable;
                                ?>
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Total Profit</h5><br>
                            <h3 class="pt-4 pr-2">
                                <?php
                                $total=0;
                                foreach($total_gainable as $data){
                                $total = $data->amount + $total;
                            	}
                            	$gainable = $total + $total*0.4;
                                $profit= $gainable - $total;
                                echo $profit;
                                ?>
                                </h3>
                        </div>
                    </div><br>
                    <div class="milestone pt-4">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Tender Name</th>
                                <th>Invest Amount</th>
                                <th>Receivable Amount</th>
                                <th>Profit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            	$i=0;
                            	foreach($investment_list as $data){
                            ?>
                            	<tr>
                            		<td><?php $i++; echo $i;?></td>
                            		<td>
                            			<a href="<?php echo base_url() ?>my_work/my_work_pending_details/<?php echo $data->post_id; ?>" >Tender ID <?php echo $data->post_id; ?></a>
                            		</td>
                            		<td><?php echo $data->invest_amount;?></td>
                            		<td><?php echo $data->total_benifit_amount;?></td>
                            		<td>
                            			<?php
                            			$invest=$data->invest_amount;
                            			$total= $data->total_benifit_amount;
                            			$profit= $total - $invest;
                            			 echo $profit;
                            			?>
                            		</td>
                            	</tr>

                            	<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
