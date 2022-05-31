function abrirCategoria(evt, Produtos) {
    var i, x, troca;
    x = document.getElementsByClassName("produtos-1");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    document.getElementById(Produtos).style.display = "block";

}
document.getElementById("ID-Produtos").click();

function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}