<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<br><br>
<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="demo.css" media="all" />
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style1.css?v=<?php echo time();?>">
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- FlexSlider -->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" charset="utf-8">
var $ = jQuery.noConflict();
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "fade"
    });

    $(function() {
        $('.show_menu').click(function() {
            $('.menu').fadeIn();
            $('.show_menu').fadeOut();
            $('.hide_menu').fadeIn();
        });
        $('.hide_menu').click(function() {
            $('.menu').fadeOut();
            $('.show_menu').fadeIn();
            $('.hide_menu').fadeOut();
        });
    });
});
</script>

<section class="home">

    <div class="content">
        <h3>Register in the <span style="color:var(--red);">college event</span> <br> in second.</h3>
    </div>

</section>

<?php include 'includes/footer.php';?>
</body>

</html>