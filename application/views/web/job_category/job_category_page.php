<!-- listwork-area start -->
<section class="listwork-area">
    <div class="container">
        <div class="row">
            <h1>Browse Enlisted Work</h1>
        </div>
        <div class="row gx-5 gy-5">
	        <?php 
	        	$i=0;
	        	foreach ($job_category as $category) {
	        ?>
            <div class="col-lg-3 col-md-6">
            	<a href="<?php echo base_url();?>welcome/search_job_home/<?php echo $category->id;?>">
                <div class="listwork-single">
                	<?php 
                		$i++;
                		if($i%4==0) {
                	?>
                    <img src="<?php echo base_url() ?>web_assets/images/work1.png" alt="image">
                	<?php } elseif ($i%3==0) { ?>
                    <img src="<?php echo base_url() ?>web_assets/images/work2.png" alt="image">
                    <?php } elseif($i%2==0) { ?>
                    <img src="<?php echo base_url() ?>web_assets/images/work3.png" alt="image">
                    <?php } else{ ?>
                    <img src="<?php echo base_url() ?>web_assets/images/work4.png" alt="image">
                	<?php } ?>
                    <p><h3><?php echo $category->category_name;?></h3></p>
                </div>
            </a>
            </div>
        	<?php }?>
        </div>
    </div>
</section>
<!-- listwork-area end -->

<!-- quote-area start -->
<section class="quote-area">
    <div class="container">
        <div class="row">
            <div class="quotefull">
                <h1>Get Quotes From Top <span>Enlisted Professionals For Free!</span></h1>
                <div class="quote-button">
                        <a href="<?php echo base_url() ?>welcome/sign_in/1">Post a New Work</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- quote-area end -->

<!-- client-area start -->
<section class="client-area">
    <div class="container">
        <div class="row">
            <div class="client-full">
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/unicef.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/ubisoft.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/navigare.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/film.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/diamond.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/unicef.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/ubisoft.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/navigare.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/film.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/diamond.png"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client-area end -->

<!-- footer-area start -->

<script src="web_assets/js/jquery-3.6.0.min.js"></script>
<script src="web_assets/js/bootstrap.bundle.min.js"></script>
<script src="web_assets/js/slick.min.js"></script>
<script src="web_assets/js/script.js"></script>

        <script>
            $('.client-full').click({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    } ]
            });
        </script>
