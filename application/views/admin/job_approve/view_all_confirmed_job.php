<table class="table">
    <thead>
    <tr>
        <th>SL</th>
        <th>Organization Name</th>
        <th>Office Address</th>
        <th>Phone</th>
        <th>Job Title</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    foreach ($confirmed_job as $v_confirmed_job) {
        $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $v_confirmed_job->organization_name; ?></td>
            <td><?php echo $v_confirmed_job->office_address; ?></td>
            <td><?php echo $v_confirmed_job->official_contact; ?></td>
            <td><?php echo $v_confirmed_job->job_title; ?></td>
            <td>Confirmed</td>
        </tr>
    <?php } ?>
    </tbody>
</table>