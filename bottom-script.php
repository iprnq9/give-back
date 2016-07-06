<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
            $('.profile-image').addClass("scroll");
        }
        else{
            $('.profile-image').removeClass("scroll");
        }
    });

    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
        $('.btn').addClass('blue darken-4');
        $(".button-collapse").sideNav();
        $('.scrollspy').scrollSpy();
        $('.parallax').parallax();


    });
</script>