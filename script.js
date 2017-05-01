function please_log_in(){
    document.getElementById("output").textContent = "Please login to add this item to your cart";
}
window.onload = function () {
    document.getElementById("b1").onclick = please_log_in;
    document.getElementById("b2").onclick = please_log_in;
    document.getElementById("b3").onclick = please_log_in;
    document.getElementById("b4").onclick = please_log_in;
    document.getElementById("b5").onclick = please_log_in;
}

// Remove all DOM-tree child elements from the parent (by id string).
function clear(parentId) {
	var parent = $(parentId);
	if (parent)
		for (var c = parent.firstChild; c; c = parent.firstChild)
			parent.removeChild(c);
}

// Callback function for successful reply.
// (Merge AJAX response into current page.)
function ajaxCompleted(ajax) {
	var resp = JSON.parse(ajax.responseText);
	console.log(ajax.responseText);
	console.log(resp);
	var stat = "";
    
	if (resp.status=='failed'){
        $("reg").disabled = false;
        $("name").style.backgroundColor = "#98FB98";

    }
    else{
        $("reg").disabled=true;
        $('errors').textContent = $("name").value + " is taken ";
        $("name").style.backgroundColor = "#ff6666";
    }
}


// Callback function if AJAX fails or results are unreadable.
// If it did not work, show why.
function ajaxFailed(ajax) {
	$('errors').textContent = $("name").value + " is taken ";
    $("reg").disabled = true;
}

function ajaxLookup(event) {
	// Input has changed so erase prior status
	
	clear("errors");
  
	// read username
	var iname = $("name").value;

	// Only bother making a query if something is entered:
	if (iname) {
		/*
		 * Set up and launch the Ajax request using the prototype.js
		 * helper class.  The parameters field consists of stuff to POST.
		 */
		new Ajax.Request(
			"adaptor.php",
			{	
				onSuccess:ajaxCompleted ,
				onFailure: ajaxFailed ,
				//onException: ajaxCompleted,
				parameters:
				{
					name: iname
				}
			}
		);
	}
}


// Set up all the event handlers
window.onload = function() {
	$("name").onblur = ajaxLookup;
}
