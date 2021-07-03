
<script src="<?php echo base_url() ?>web_assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url() ?>web_assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>web_assets/js/slick.min.js"></script>
<script src="<?php echo base_url() ?>web_assets/js/script.js"></script>
<script src="<?php echo base_url() ?>web_assets/js/searchscript.js"></script>
<script>
    $('.project-slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        arrows: true,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
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
<script>
    $('.client-full').slick({
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
</body>
</html>