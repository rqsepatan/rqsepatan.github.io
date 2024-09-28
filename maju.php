<div class="footer fixed-bottom">
    RUANG UJI COBA
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/timmutqin.js"></script>
<link rel="stylesheet" href="css/timmutqin.css">


<?php
	$countdown = "2022-11-20 21:27:00";
?>


<div data-date="<?php echo $countdown; ?>" id="count-down"></div>


<input type="hidden" id="timer_mutqin" value="<?php echo $countdown; ?>">


<script type="text/javascript">
    $(function () {
        $("#count-down").TimeCircles({
        	count_past_zero: true
        });

        var timer_value = document.getElementById("timer_mutqin").value;
        var date = new Date(timer_value);

      

    });
</script>

<style>
    .fixed-bottom {
        width: 100%;
        background-color: lightseagreen;
        color: white;
        text-align: center;
        padding: 25px;
        font-size: 20px;
    }
    body {
        margin: 0px;
    }
</style>