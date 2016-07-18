<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 120, // Creates a dropdown of 15 years to control year
        min: new Date(1900,1,1),  // start date
        max: new Date(),  // specific end date
    });
    $('input.timepicker').timepicker();

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