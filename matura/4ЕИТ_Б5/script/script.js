//onclick prelaz na novu stranicu
const vrste = ['zicani', 'zicani', 'specijalne', 'specijalne', 'specijalne', 'duvacki'];

for(let i=0; i<6; i++)
{
    document.getElementById('p'+(i+1)).addEventListener('click', function(){
        window.open('./pages/info/' + vrste[i] +'.html','name','width=200, height=400')
    });
}

//pustanje sounda
for(let i=0; i<6; i++)
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