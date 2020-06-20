var nilai = window.pageYOffset;
window.onscroll = function () {
    var nilaibaru = window.pageYOffset;
    if (nilai > nilaibaru) {
        document.getElementById("menu").style.top = "0";
    } else {
        document.getElementById("menu").style.top = "-200px";
    }
    nilai = nilaibaru;
}
