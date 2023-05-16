    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $('.backButton').click(function() {
        window.location = "index.php";
        });
        if (window.navigator.userAgent.indexOf("Mobile") > - 1) {
            $("#accordionSidebar").hide();
        }
        if (window.navigator.userAgent.indexOf("Mobile") > - 1) {
            $("nav").addClass("fixed-top");
        }
        $('.hamburger').on('click', function(){
            $("#accordionSidebar").show();
            $("body").toggleClass("sidebar-toggled");
            $(".sidebar").toggleClass("toggled");
            if ($(".sidebar").hasClass("toggled")) {
            $('.sidebar .collapse').collapse('hide');
            }
        });

        if (window.navigator.userAgent.indexOf("Mobile") > - 1) {
            $("#backButton").show();
        }else {
            $("#backButton").hide();
        }
    </script>