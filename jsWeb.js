
jQuery(document).ready(function(){

jQuery("a#subirTopo").hide();

jQuery('a#subirTopo').click(function () {
         jQuery('body,html').animate({
           scrollTop: 0
         }, 0);
        return false;
   });

jQuery(window).scroll(function () {
         if (jQuery(this).scrollTop() > 0) {
            jQuery('#subirTopo').fadeIn();
         } else {
            jQuery('#subirTopo').fadeOut();
         }
     });
});

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
