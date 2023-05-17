for(let i=2; i<=53; i++){
    document.getElementById('s_' + i).addEventListener('click', function() {
        document.getElementById('sediste').value = i;
    });
}
