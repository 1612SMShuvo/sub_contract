<section class="bredcrumb-area">
    <div class="container">
        <img src="<?php echo base_url() ?>web_assets/images/email.png" alt="image">
        <h2>Subscribe</h2>
        <p>Subscribe to our Enlistwork News Feed!</p>
    </div>
</section>

<main class="body-padding bpadding-bredcrumb">
    <section class="subscription2-all">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>ESSENTIAL <span>Subscription</span></h4>
                    <p class="pb-4">when you use 10 free bid or invest you can purchase an essential subscription For you need Par day.</p>

                    <div class="othersub-single">
                        <div class="sub-text">
                            <p>5 bid after  10 Free bit</p>
                            <h2>50 TK</h2>
                        </div>
                        <div class="sub-buy">
                            <a href="#" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return make_payment();">Buy Now</a>
                        </div>
                    </div>
                    <div class="othersub-single">
                        <div class="sub-text">
                            <p>10 bid after  10 Free bit</p>
                            <h2>100 TK</h2>
                        </div>
                        <div class="sub-buy">
                            <a href="#" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return make_payment();">Buy Now</a>
                        </div>
                    </div>
                    <div class="othersub-single">
                        <div class="sub-text">
                            <p>15 bid after  10 Free bit</p>
                            <h2>50 TK</h2>
                        </div>
                        <div class="sub-buy">
                            <a href="#" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return make_payment();">Buy Now</a>
                        </div>
                    </div>
                    <div class="othersub-single">
                        <div class="sub-text">
                            <p>20 bid after  10 Free bit</p>
                            <h2>100 TK</h2>
                        </div>
                        <div class="sub-buy">
                            <a href="#" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return make_payment();">Buy Now</a>
                        </div>
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