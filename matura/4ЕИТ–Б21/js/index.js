//VARIJABLE ZA RASTUCI ILI OPADAJUCI NIZ
var ni = 0;
var ii = 0;
var pi = 0;

//Sortiranje po rednim brojevima
function Sortn() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("Tabela");
    switching = true;

    //Rastuce
    if (ni % 2 == 0) {
        // Petlja radi sve dok se ne izvrsi pomeraj 
        while (switching) {

            switching = false;
            rows = table.rows;

            // Petlja radi kroz sve redove izuzev prvog koji sadrzi naslove 
            for (i = 1; i < (rows.length - 1); i++) {
                
                shouldSwitch = false;

                // Uzimanje dva elementa radi poredjenja - jedan iz trenutnog reda i jedan iz sledeceg
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];

                // Provera da li treba da se izvrsi zamena
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                // Vrsi se razmestaj
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
        ni++;
    } else {
        // Opadajuci

        // Petlja radi sve dok se ne izvrsi pomeraj 
        while (switching) {
            
            switching = false;
            rows = table.rows;

            // Petlja radi kroz sve redove izuzev prvog koji sadrzi naslove 
            for (i = 1; i < (rows.length - 1); i++) {
                
                shouldSwitch = false;

                // Uzimanje dva elementa radi poredjenja - jedan iz trenutnog reda i jedan iz sledeceg
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];
                
                // Provera da li treba da se izvrsi zamena
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                // Vrsi se razmestaj
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
        ni++;
    }
}

// Sortiranje po Imenu
function Sorti() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("Tabela");
    switching = true;

    // Rastuce
    if (ii % 2 == 0) {
        // Petlja radi sve dok se ne izvrsi pomeraj 
        while (switching) {
            
            switching = false;
            rows = table.rows;
            
            // Petlja radi kroz sve redove izuzev prvog koji sadrzi naslove 
            for (i = 1; i < (rows.length - 1); i++) {
                
                shouldSwitch = false;
                
                // Uzimanje dva elementa radi poredjenja - jedan iz trenutnog reda i jedan iz sledeceg
                x = rows[i].getElementsByTagName("TD")[1];
                y = rows[i + 1].getElementsByTagName("TD")[1];
                
                // Provera da li treba da se izvrsi zamena
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                // Vrsi se razmestaj
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
        ii++;
    } else {
        // Opadajuci

        // Petlja radi sve dok se ne izvrsi pomeraj 
        while (switching) {
            
            switching = false;
            rows = table.rows;
            
            // Petlja radi kroz sve redove izuzev prvog koji sadrzi naslove 
            for (i = 1; i < (rows.length - 1); i++) {
                
                shouldSwitch = false;
                
                // Uzimanje dva elementa radi poredjenja - jedan iz trenutnog reda i jedan iz sledeceg
                x = rows[i].getElementsByTagName("TD")[1];
                y = rows[i + 1].getElementsByTagName("TD")[1];
                
                // Provera da li treba da se izvrsi zamena
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                // Vrsi se razmestaj
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
        ii++;
    }
}

// Sortiranje po Prezimenu
function Sortp() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("Tabela");
    switching = true;

    // Rastuce
    if (pi % 2 == 0) {
        // Petlja radi sve dok se ne izvrsi pomeraj 
        while (switching) {
            
            switching = false;
            rows = table.rows;
            
            // Petlja radi kroz sve redove izuzev prvog koji sadrzi naslove 
            for (i = 1; i < (rows.length - 1); i++) {
                
                shouldSwitch = false;
                
                // Uzimanje dva elementa radi poredjenja - jedan iz trenutnog reda i jedan iz sledeceg
                x = rows[i].getElementsByTagName("TD")[2];
                y = rows[i + 1].getElementsByTagName("TD")[2];

                // Provera da li treba da se izvrsi zamena
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                // Vrsi se razmestaj
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
        pi++;
    } else {
        // Opadajuce

        // Petlja radi sve dok se ne izvrsi pomeraj 
        while (switching) {
            
            switching = false;
            rows = table.rows;
            
            // Petlja radi kroz sve redove izuzev prvog koji sadrzi naslove 
            for (i = 1; i < (rows.length - 1); i++) {
                
                shouldSwitch = false;
                
                // Uzimanje dva elementa radi poredjenja - jedan iz trenutnog reda i jedan iz sledeceg
                x = rows[i].getElementsByTagName("TD")[2];
                y = rows[i + 1].getElementsByTagName("TD")[2];
                
                // Provera da li treba da se izvrsi zamena
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                // Vrsi se razmestaj
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
        pi++;
    }
}