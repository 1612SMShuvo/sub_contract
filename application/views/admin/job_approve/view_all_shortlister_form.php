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

    foreach ($all_shortlister as $v_shortlister) {
        ?>
        <tr>
            <td>1</td>
            <td><?php echo $v_shortlister->organization_name; ?></td>
            <td><?php echo $v_shortlister->office_address; ?></td>
            <td><?php echo $v_shortlister->official_contact; ?></td>
            <td><?php echo $v_shortlister->job_title; ?></td>
            <td>
                <?php if ($v_shortlister->status == 3) { ?>
                    <p style="color: green; font-size: 16px;">Confirmed</p>
                <?php } else { ?>
                <a href="#" type="button"
                   onclick="Select_applyer_confirm(<?php echo $v_shortlister->id; ?>)"
                   class="btn btn-success">Confirm</a>
                <p id="done<?php echo $v_shortlister->id ?>"></p>
            </td>

            <?php } ?>
        </tr>
    <?php } ?>
    </tbody>
</table>

<script>
    function Select_applyer_confirm($id) {
        var set_id = $id;
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>job_approve/job_confirmed/' + $id,
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