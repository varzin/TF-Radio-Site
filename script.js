
// Show alert messages
function checkFormAlert(alertMessage) {
  $("#check-form-message").text(alertMessage)
    .removeClass("hide");
}

// Mail form validation
function checkForm(obj, elems) {  
var alertMessage;
var element, pattern; 
  for (var i = 0; i < obj.elements.length; i++) {  // check all form elements
    element = obj.elements[i];  
    // only required fields
    if (elems != undefined) 
      if (elems.join().indexOf(element.type) < 0) continue; 
    // if have check_message attribute  
    if (!element.getAttribute("check_message")) continue; 
    if (pattern = element.getAttribute("check_pattern")) {  // if have pattern
      pattern = new RegExp(pattern, "g"); 
      if (!pattern.test(element.value)) { 
        
        alertMessage = element.getAttribute("check_message");
        checkFormAlert(alertMessage);
        
        element.focus();  
        return false; 
      } 
    } else if(/^\s*$/.test(element.value)) {  // elese find empty fields  
      
      alertMessage = element.getAttribute("check_message");
      checkFormAlert(alertMessage);        
      
      element.focus();  
      return false; 
    } 
  } 
return true;  
}


// Retina support. 
// Use: Set real width/height and add .hires class for retina images.
$(function () { 
  if (window.devicePixelRatio == 2) {
    var images = $("img.hires");
    // loop through the images and make them hi-res
    for(var i = 0; i < images.length; i++) {
      // create new image name
      var imageType = images[i].src.substr(-4);
      var imageName = images[i].src.substr(0, images[i].src.length - 4);
      imageName += "@2x" + imageType;
      //rename image
      images[i].src = imageName;
    }
  }
});


// .affix-container's used to prevent "jump" of content below an affix element when it get position:fixed (.affix-top -> .affix)
// We get height of each needed affix element and assign it to its container.
// So we get an improvised indentation.
$(".affix-container").each(function() {
  var affixElementHeight = $(this).children().outerHeight();
  $(this).height(affixElementHeight);
});
// affix
$('#readme-nav').affix({
    offset: {
      top: 405
    }
});


// Create Readme Navigation
// Script add IDs to generated H3 tags
$( "#readme-content h3" ).each(function( index ) {
  $( this ).attr('id', 'readme-item-' + index ); // For each H3 add ID: #readme-item-0, #readme-item-1, #readme-item-2, etc.
  var h3text = $(this).html(); // Get content of H3
  $("#readme-nav ul").append("<li><a href='#readme-item-"+index+"'>"+h3text+"</a></li>"); //And create links to #readme-nav
});

// Make first Readme Navigation item active
$('#readme-nav ul li:first-child').addClass("active");

// Prevent <a> default action and add smooth scroll to an element
$("#readme-nav ul li a").click(function(e)  { 
  e.preventDefault();
  var href = $(this).attr("href");
  var navHeight = $('#readme-nav').height();
  $('html, body').animate({
    scrollTop: $(href).offset().top-(navHeight+20)
  }, 1000);
});

//Turn-on scrollspy
$('body').scrollspy({ target: '#readme-nav', offset:110 });



