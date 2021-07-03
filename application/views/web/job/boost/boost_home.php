<section class="bredcrumb-area boost-bredcrumb">
    <div class="container">
        <h1>Boost</h1>
        <h2>your job</h2>
        <p>when you use 10 free bid or invest you can purchase an essential subscription For you need Par day.</p>
    </div>
</section>

<main class="body-padding bpadding-bredcrumb">
    <section class="subscription-all">
        <div class="container">
            <div class="row justify-content-md-center gy-4 gx-5">
                <div class="col-lg-3 col-md-6">
                    <div class="subscription-single">
                        <h4>Regular <span>Post</span></h4>
                        <p class="height73">Regular Job Post is ordinary Job Post-it reached people as organic</p>
                        <h2>Free <span>Daly</span></h2>
                        <p class="height95">* No Need VAT & local taxes</p>
                        <a href="#" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return make_payment();">Active</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="subscription-single">
                        <h4>Urgent <span>Post</span></h4>
                        <p class="height73">You can Bid More Then Regular Subscription with</p>
                        <h2>50 <span>tk Daly</span></h2>
                        <p class="height95">* No Need VAT & local taxes</p>
                        <a href="#" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return make_payment();">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="subscription-single">
                        <h4>Very <span>Urgent</span></h4>
                        <p class="height73">You can Unlimited Bid per month with</p>
                        <h2>100 <span>*TK Month</span></h2>
                        <p class="height95">* No Need VAT & local taxes</p>
                        <a href="#" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return make_payment();">Buy Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>


<div class="modal inmodal" id="load_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="title"></h4>
            </div>
            <div class="modal-body">
                <div id="load_from">

                </div>
                <p class="m-t text-center">
                    <small><?php echo $this->session->userdata('powered_by'); ?>
                        <br><?php echo $this->session->userdata('copy_write'); ?>
                    </small>
                </p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function make_payment() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>payment/create_boost_payment',
            success: function (result) {
                if (result) {
                    $('#title').html('Do Job Boost Payment');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>
