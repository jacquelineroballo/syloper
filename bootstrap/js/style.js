$(document).ready(function () {
    $("#top").hide();
    $(function toTop() {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#top').fadeIn();
            } else {
                $('#top').fadeOut();
            }
        });

        $('#top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});

















//Smooth Scroll
/* $(document).ready(function () {
    // all links
    $("a").on('click', function (event) {
    // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
}); */





// Scroll to top
/* mybutton = document.getElementById("scroll-top");

window.onscroll = function () { scrollFunction() };
 */
// function scroll
/* function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
} */

//function go to top
/* function topFunction() {
    document.body.scrollTop = 0; // safari
    document.documentElement.scrollTop = 0; // chrome, firefox, IE y opera
} */