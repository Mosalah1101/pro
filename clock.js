function showtime()
{
    "use strict";

    var now =new Date(),
        houer= now.getHours(),
        minuts= now.getMinutes(),
        second= now.getUTCSeconds();

    if (houer<10)
    {
        houer = '0' + houer;
    }    
    if ( minuts<10)
    {
        minuts= '0' + minuts;
    } 
    if (second<10)
    {
        second='0' + second;
    } 

    if(houer>12){
        houer=houer-12;
    }
    document.getElementById('span').textContent=second + ' : ' + minuts + ' : ' + houer;    
}

window.onload= function(){
    'use strict';

    setInterval(showtime,.5);
}
