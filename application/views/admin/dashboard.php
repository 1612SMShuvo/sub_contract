<main class="adminpopular-wrapper">
    <div class="container-fluid">
        <!-- breadcum -->
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Dashboard</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i>Home</a>
                </li>
                <li>Dashboard</li>
            </ul>
        </div>
        <!-- End breadcum -->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="<?php echo base_url() ?>job_approve/all_job_approve">
                    <section class="widget-medium bg-primary">
                        <div class="symbol"><i class="fas fa-concierge-bell"></i></div>
                        <div class="value">
                            <h1 class="counter"><?php echo count($new_job_count); ?></h1>
                            <p>New Job Posts</p>
                        </div>
                    </section>
                </a>
            </div>
            <!-- <i class="fa fa-send"></i> -->
            <div class="col-lg-3 col-sm-6">
                <a href="<?php echo base_url() ?>job_approve/all_job_approve">
                    <section class="widget-medium bg-info">
                        <div class="symbol"><i class="fas fa-address-card"></i></div>
                        <div class="value">
                            <h1 class="counter"><?php echo count($job_count); ?></h1>
                            <p>All Job Posts</p>
                        </div>
                    </section>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="<?php echo base_url() ?>bidder/all_user">
                    <section class="widget-medium bg-warning">
                        <div class="symbol"><i class="fas fa-user-friends"></i></div>
                        <div class="value white">
                            <?php
                            $all_user= $this->Main_model->count_all_user();
                            ?>
                            <h1 class="counter"><?php echo count($all_user); ?></h1>
                            <p>All Users</p>
                        </div>
                    </section>
                </a>
            </div>
            <!-- <i class="fa fa-cloud-upload"></i> -->
            <div class="col-lg-3 col-sm-6">
                <section class="widget-medium bg-danger">
                    <div class="symbol"><i class="fa fa-bullseye"></i></div>
                    <div class="value">
                        <h1 class="counter">2345</h1>
                        <p>Unique Visit</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-6">
                <div class="title">
                    <h3 class="title-text">Line Chart</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="title">
                    <h3 class="title-text">Bar Chart</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="title">
                    <h3 class="title-text">New Job List</h3>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table f-border-none">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="th-content">Tender ID</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Title</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Budget</div>
                                    </th>
                                    <th>
                                        <div class="th-content th-heading">Publish Date</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Status</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                foreach($new_job_count as $n_job){
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name">
                                                Tender ID: <?php echo $n_job->id;?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">
                                                <?php echo $n_job->job_title;?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing">
                                                <span class=""><?php echo $n_job->approximate_budget;?> BDT</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content">
                                                <?php echo $n_job->publish_date; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content">
                                                <a href="<?php echo base_url() ?>job_approve/all_job_approve">
                                                    <span class="badge outline-badge-primary" style="color:red;">View</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="widget widget-transactions">
                    <div class="widget-heading mb-10">
                        <h5 class="">Pending For Activation</h5>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table f-border-none">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="th-content">Tender ID</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Title</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Budget</div>
                                    </th>
                                    <th>
                                        <div class="th-content th-heading">Publish Date</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Status</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                foreach($pending_job_count as $n_job){
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name">
                                                Tender ID: <?php echo $n_job->id;?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">
                                                <?php echo $n_job->job_title;?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing">
                                                <span class=""><?php echo $n_job->approximate_budget;?> BDT</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content">
                                                <?php echo $n_job->publish_date; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content">
                                                <a href="<?php echo base_url() ?>job_approve/all_job_approve">
                                                    <span class="badge outline-badge-primary" style="color:red;">View</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Jquery javascript library -->
