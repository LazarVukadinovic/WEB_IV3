document.getElementById('izbor').addEventListener('change', function() {
    let e = document.getElementById("izbor");
    console.log(e.value);
    if(e.value == "engleski")
    {
        document.getElementById('srp').setAttribute('readonly', true);
        document.getElementById('eng').removeAttribute('readonly');
    }
    if(e.value == "srpski")
    {
        document.getElementById('eng').setAttribute('readonly', true);
        document.getElementById('srp').removeAttribute('readonly');
    }
    if(e.value == "default")
    {
        document.getElementById('eng').setAttribute('readonly', true);
        document.getElementById('srp').setAttribute('readonly', true);
    }
});