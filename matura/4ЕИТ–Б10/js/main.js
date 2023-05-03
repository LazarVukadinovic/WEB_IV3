document.getElementById('izbor').addEventListener('change', function() {
    let e = document.getElementById("izbor");
    console.log(e.value);

    document.getElementById('srp').value = "";
    document.getElementById('eng').value = "";
    document.getElementById('opis').value = "";

    if(e.value == "engleski")
    {
        document.getElementById('srp').setAttribute('readonly', true);
        document.getElementById('eng').removeAttribute('readonly');
        document.getElementById('eng').focus();
    }
    if(e.value == "srpski")
    {
        document.getElementById('eng').setAttribute('readonly', true);
        document.getElementById('srp').removeAttribute('readonly');
        document.getElementById('srp').focus();
    }
    if(e.value == "default")
    {
        document.getElementById('eng').setAttribute('readonly', true);
        document.getElementById('srp').setAttribute('readonly', true);
    }
});