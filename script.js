document.write("<form><input value='Je suis une petite perruche'></form>");

document.write("<br><br><br>")

function validerform() {
    var x, text;
  
    // Get the value of the input field with id="numb"
    x = document.getElementById("myField");
  
    // If x is Not a Number or less than one or greater than 10
    if (x="") {
      text = "Input not valid";
    } else {
      text = "Input OK";
    }
    document.getElementById("erreurlabel").innerHTML = text;
  }

