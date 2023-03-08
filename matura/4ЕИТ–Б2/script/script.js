const zivotinja = ['pas', 'patka', 'macka', 'pile', 'krava'];

for(let i=0; i<5; i++)
{
    document.getElementById('animal'+(i+1)).addEventListener('click', function(){
        window.open('./pages/zivotinje/' + zivotinja[i] +'.html','name','width=500, height=500')
    });
}

for(let i=0; i<5; i++)
{
    document.getElementById('animal'+(i+1)).addEventListener('mouseover', function() {
        PlaySound('audio'+(i+1));
    });

    document.getElementById('animal'+(i+1)).addEventListener('mouseout', function() {
        StopSound('audio'+(i+1));
    });
}

function PlaySound(soundobj) {
    var thissound=document.getElementById(soundobj);
    thissound.play();
}

function StopSound(soundobj) {
    var thissound=document.getElementById(soundobj);
    thissound.pause();
    thissound.currentTime = 0;
}