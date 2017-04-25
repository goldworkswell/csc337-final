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

