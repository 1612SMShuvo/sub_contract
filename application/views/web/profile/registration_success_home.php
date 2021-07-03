<main class="body-padding">
    <section class="welcome-area">
        <div class="container">
            <div class="row">
                <div class="welcome-full">
                    <h1>Registration <br> Successfully <br> <span>Done</span></h1>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function () {
        $('#view_job').trigger("reset");
        window.setTimeout(function () {
            window.location.href = "<?php echo base_url()?>job_view/all_job";
        }, 3000);
    });
</script>