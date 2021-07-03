<section class="bredcrumb-area">
    <div class="container">
        <img src="<?php echo base_url() ?>web_assets/images/email.png" alt="image">
        <h2>Subscribe</h2>
        <p>Subscribe to our Enlistwork News Feed!</p>
    </div>
</section>

<main class="body-padding bpadding-bredcrumb">
    <section class="subscription-all">
        <div class="container">
            <div class="row gy-4 gx-5">
                <div class="col-lg-3 col-md-6">
                    <div class="subscription-single">
                        <h4>Regular <br><span>Subscription</span></h4>
                        <p class="height73">You Can Bid 10 Project</p>
                        <h2>Free <span>daly</span></h2>
                        <p class="height95">* No Need VAT & local taxes</p>
                        <a href="#">Active</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="subscription-single">
                        <h4>ESSENTIAL <br><span>Subscription</span></h4>
                        <p class="height73">You can Bid More Then Regular Subscription with</p>
                        <h2>Essential <span>Package Daly</span></h2>
                        <p class="height95"><span>Billed Daly</span> <br> As you Chose your Package * VAT & local taxes may apply</p>
                        <a href="<?php echo base_url() ?>subscription_view/daily_subscription_show">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="subscription-single">
                        <h4>MONTHLY <br><span>Platinum</span></h4>
                        <p class="height73">You can Unlimited Bid per month with</p>
                        <h2>1000 <span>*TK Month</span></h2>
                        <p class="height95"><span>Billed Daly</span> <br> as one payment of 1,000 TK* * VAT & local taxes may apply</p>
                        <a href="#" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return make_payment();">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="subscription-single">
                        <h4>ANNUAL <br><span>Premium</span></h4>
                        <p class="height73">You can Unlimited Bid per Annually with</p>
                        <h2>10,000 <span>*TK Anually</span></h2>
                        <p class="height95"><span>Billed Daly</span> <br> as one payment of 10,000 TK* * VAT & local taxes may apply</p>
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
            url: '<?php echo base_url() ?>payment/payment_page',
            success: function (result) {
                if (result) {
                    $('#title').html('Do Payment');
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