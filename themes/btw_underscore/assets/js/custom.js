$(document).ready(function() {
    // $("#collapsibleNavbar ul").addClass("navbar-nav");
    // $("#collapsibleNavbar ul li").addClass("nav-item");
    // $("#collapsibleNavbar ul li a").addClass("nav-link");
});


// Smooth Scroll Product Page
$(document).ready(function(){
    // Add smooth scrolling to all links
    $(".ti_cat_item a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: ($(hash).offset().top - 60)
        }, 500, function(){
      
          // Add hash (#) to URL when done scrolling (default click behavior)
          // window.location.hash = hash;
        });
      } // End if
    });
  });