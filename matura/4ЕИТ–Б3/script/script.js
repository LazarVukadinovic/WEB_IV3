const drzave = ['Srbija', 'Madjarska', 'Rumunija', 'Bugarska', 'Makedonija', 'Albanija', 'Crna Gora', 'Bosna', 'Hrvatska'];

for(let i=0; i<=9; i++)
{
    console.log(i)
    document.getElementById('p'+(i+1)).addEventListener('click', function(){
        window.open('./pages/info/' + drzave[i] +'.html','name','width=300, height=200')
    })
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