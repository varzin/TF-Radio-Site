
function checkFormAlert(alertMessage) {
  $("#check-form-message").text(alertMessage)
    .removeClass("hide");
}

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

$(function () { //Retina support. Use: Set real width and .hires class for images.
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


//Add IDs to H3 tags for scrollspy navigation
// $( "#readme-content h3" ).each(function( index ) {
//   $( this ).attr('id', 'readme-item-' + index ); // For each add ID: #readme-item-0, #readme-item-1, #readme-item-2, etc.
// });



