// Retrieving needed elements for function below from HTML file
var twofive = document.getElementById("twofive");
var qc = document.getElementById("qc");
var form = document.getElementById("form");
var btn = document.getElementById('btn');

// Creating fieldset and assigning it the fieldset3 class
var field = document.createElement("FIELDSET")
field.className = "fieldset3";

// Creating legend, assigning it the legend3 class and populating it
var legend = document.createElement("LEGEND")
legend.className = "legend3";
var title = document.createTextNode("Expert Suggestion");

// Creating ul with 1 li and a text node to display suggestion message
var ulist = document.createElement("UL");
var list = document.createElement("LI");
var msg = document.createTextNode("It is very difficult to find a cottage with this size at Quebec City");

function showSuggestion() {

  if (twofive.checked && qc.checked) {  //checks if the necesssary boxes are selected by user

    // Appending fieldset to form, legend to fieldset and title to legend
    form.appendChild(field);
    field.appendChild(legend);
    legend.appendChild(title);

    // Appending ul to fielset, li to ul and suggestion message to li
    field.appendChild(ulist);
    ulist.appendChild(list);
    list.appendChild(msg);

  }

  // this else statement makes the suggestion disappear if the form is submitted afterwards
  // with at least one of the 2/5 and Quebec City fields unchecked
  else
    form.removeChild(field);
} // end of function

// Resets all fields of the form to empty
function formReset() {
  form.reset();
	form.removeChild(field);
}
