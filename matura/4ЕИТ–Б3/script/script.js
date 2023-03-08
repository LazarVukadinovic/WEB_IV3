const drzave = ['Srbija', 'Madjarska', 'Rumunija', 'Bugarska', 'Makedonija', 'Albanija', 'Crna Gora', 'Bosna', 'Hrvatska'];

for(let i=0; i<10; i++)
{
    document.getElementById('p'+(i+1)).addEventListener('click', function(){
        window.open('./pages/info/' + drzave[i] +'.html','name','width=300, height=200')
    })
}