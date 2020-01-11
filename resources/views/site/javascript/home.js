//contador de escassez
function oferta_limitada() {
    let timer = 3600;
    let l = document.getElementById('contador');

    let myVar = setInterval(function(){

        let min = parseInt(timer/60);
        let sec = parseInt(timer%60);

        if(sec.toString().length < 2 && min.toString().length < 2){
            l.innerHTML = "0" + min  + " : 0" + sec;
        }else if(sec.toString().length < 2 && min.toString().length >= 2){
            l.innerHTML = min  + " : 0" + sec;
        }else if(sec.toString().length >= 2 && min.toString().length < 2){
            l.innerHTML = "0" + min  + " : " + sec;
        }else if(sec.toString().length >=2 && min.toString().length >= 2){
            l.innerHTML = min  + " : " + sec;
        }

        timer--;


        if (timer === 0){
            l.innerHTML = '00:00';
            timer = 0;
            clearInterval(myVar);
        }

    }, 1000);
}
