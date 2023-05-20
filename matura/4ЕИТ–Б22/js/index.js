//Sortiranje po poenima opadajuce
function Sort()
{
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("Tabela");
        switching = true;
        
        // Petlja radi sve dok se ne izvrsi pomeraj 
        while (switching) {
          
          switching = false;
          rows = table.rows;

          // Petlja radi kroz sve redove izuzev prvog koji sadrzi naslove 
          for (i = 1; i < (rows.length - 1); i++) {
            
            shouldSwitch = false;
            
            // Uzimanje dva elementa radi poredjenja - jedan iz trenutnog reda i jedan iz sledeceg
            x = rows[i].getElementsByTagName("TD")[4];
            y = rows[i + 1].getElementsByTagName("TD")[4];
            
            // Provera da li treba da se izvrsi zamena
            if (x.innerHTML < y.innerHTML) {
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
}

// Boji u sivo neparne redove
function Oboji()
{
    var table = document.getElementById("Tabela");
    var rows = table.rows;
    for(i=0;i<rows.length;i++)
    {
        if(i%2!=0)
        {
            rows[i].classList.add("bojaG");
        }
    }
}

// Boji u zeleno one koji su prosli
function Prosli()
{
    var table = document.getElementById("Tabela");
    var rows = table.rows;
    for(i=1;i<rows.length;i++)
    {
        if(rows[i].getElementsByTagName("TD")[4].innerHTML>50)
        {
            rows[i].classList.add("prosli");
        }
    }
}

//Boji u crveno one koji nisu prosli
function NeProsli()
{
    var table = document.getElementById("Tabela");
    var rows = table.rows;
    for(i=1;i<rows.length;i++)
    {
        if(rows[i].getElementsByTagName("TD")[4].innerHTML<50)
        {
            rows[i].classList.add("neprosli");
        }
    }
}

// Izdvaja one koji su prosli
function Izdvoji()
{
    var table = document.getElementById("Tabela");
    var rows = table.rows;
    for(i=1;i<rows.length;i++)
    {
        if(rows[i].getElementsByTagName("TD")[4].innerHTML<50)
        {
            table.deleteRow(i);
        }
    }
    Sort();
}