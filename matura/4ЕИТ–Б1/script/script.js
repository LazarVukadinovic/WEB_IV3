for(let i=1; i<11; i++)
{
    document.getElementById('slike'+i.toString()).addEventListener('click', function() {
        document.getElementById('slika').src = this.src;
    });
}

