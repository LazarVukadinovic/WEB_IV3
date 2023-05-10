let url = "https://naslovi.net/vremenska-prognoza/";
function funkcija() {
    let grad = document.querySelector("#izbor").value;
    document.querySelector("#promena").src = url + grad;
    window.open("./pages/gradovi/"+grad+".html", "", "width=300,height=300");
}