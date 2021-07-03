<table class="table">
    <thead>
    <tr>
        <th>SL</th>
        <th>Organization Name</th>
        <th>Office Address</th>
        <th>Phone</th>
        <th>Job Title</th>
        <th>Type</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    foreach ($all_applyer as $v_applyer) {
        $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $v_applyer->organization_name; ?></td>
            <td><?php echo $v_applyer->office_address; ?></td>
            <td><?php echo $v_applyer->official_contact; ?></td>
            <td><?php echo $v_applyer->job_title; ?></td>
            <?php if($v_applyer->job_type==1){?>
                <td>Bidder</td>
            <?php } else{?>
                <td>Investor</td>
            <?php }?>
            <td>
                <?php if ($v_applyer->status == 1) { ?>
                    <p>Short Listed</p>
                <?php } else if ($v_applyer->status == 3) { ?>
                    <p style="color: green; font-size: 18px;">Confirmed Job</p>
                <?php } else { ?>
                    <a href="#" type="button" onclick="Select_applyer(<?php echo $v_applyer->id; ?>)"
                       class="btn btn-success">Selected</a>
                <?php } ?>
                <a href="<?php echo base_url()?>job_approve/job_applyer_details/<?php echo $v_applyer->id; ?>"
                   class="btn btn-info">Details</a>
                <p id="done<?php echo $v_applyer->id ?>"></p>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<!---->
<script>
    function Select_applyer($id) {
        var set_id = $id;
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>job_approve/select_applyer_for_job/' + $id,
            success: function (result) {
                if (result) {
                    $('#done' + set_id + "").html('<p style="color: green;">Done</p>');
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

