

<!--<script src="--><?php //echo base_url()?><!--admin_assets/dist/js/bootstrap.min.js"></script>-->
<script src="<?php echo base_url()?>admin_assets/js/jquery.min.js"></script>
<!-- Bootstrap bundle javascript -->
<script src="<?php echo base_url()?>admin_assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scrollbar javascript -->
<script src="<?php echo base_url()?>admin_assets/vendors/scroll/scrollbar.min.js"></script>
<!-- Waypoints javascript -->
<script src="<?php echo base_url()?>admin_assets/js/waypoints.min.js"></script>
<!-- Chart javascript -->
<script src="<?php echo base_url()?>admin_assets/js/chart.js"></script>
<!-- Jquery counterup javascript -->
<script src="<?php echo base_url()?>admin_assets/js/jquery.counterup.min.js"></script>
<!-- Custom script -->
<script src="<?php echo base_url()?>admin_assets/js/functions.js"></script>
<script src="<?php echo base_url()?>admin_assets/js/admin.js"></script>
<script>
    var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56],
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86],
            },
        ],
    };
    var pdata = [
        {
            value: 300,
            color: "#F7464A",
            highlight: "#FF5A5E",
            label: "Red",
        },
        {
            value: 50,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Green",
        },
        {
            value: 100,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "Yellow",
        },
    ];

    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxb = $("#barChartDemo").get(0).getContext("2d");
    var barChart = new Chart(ctxb).Bar(data);

    var ctxr = $("#radarChartDemo").get(0).getContext("2d");
    var radarChart = new Chart(ctxr).Radar(data);

    var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
    var polarChart = new Chart(ctxpo).PolarArea(pdata);

    var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);

    var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
    var doughnutChart = new Chart(ctxd).Doughnut(pdata);

    var ctxd = $("#chart-area").get(0).getContext("2d");
    var doughnutChart = new Chart(ctxd).PolarArea(pdata);
</script>


<!--Frontend Design-->

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