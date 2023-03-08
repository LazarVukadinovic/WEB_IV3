const drzave = ['Srbija', 'Madjarska', 'Rumunija', 'Bugarska', 'Makedonija', 'Albanija', 'Crna Gora', 'Bosna', 'Hrvatska'];

for(let i=0; i<9; i++)
{
    document.getElementById('p'+(i+1)).addEventListener('click', function(){
        window.open('./pages/info/' + drzave[i] +'.html','name','width=500, height=500')
    });
}

for(let i=0; i<9; i++)
{
    document.getElementById('img'+(i+1)).addEventListener('mouseover', function() {
        PlaySound('audio'+(i+1));
    });

    document.getElementById('img'+(i+1)).addEventListener('mouseout', function() {
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