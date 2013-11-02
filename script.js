function checkFormAlert(alertMessage) {
  $("#check-form-message").text(alertMessage)
    .removeClass("hidden");
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