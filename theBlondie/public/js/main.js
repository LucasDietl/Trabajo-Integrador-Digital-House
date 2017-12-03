window.onscroll = function() {navbar()};
document.querySelector("#navbarPeque").style="display:none;";
function navbar() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector("#navbarEntero").style="display:none;";
        document.querySelector("#navbarPeque").style="display:block;";
    }else{
        document.querySelector("#navbarEntero").style="display: block;"
        document.querySelector("#navbarPeque").style="display:none;";
    }
}
console.log("probando");