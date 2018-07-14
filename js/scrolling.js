$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Overriding this shit.
    if (this.hash !== "") {
      // Anchoring event
      event.preventDefault();

      // Store hash or (#)
      var hash = this.hash;

      // animated scrolling using 800 ms.
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add has (#) when clicked
        window.location.hash = hash;
      });
    } // End if
  });
});