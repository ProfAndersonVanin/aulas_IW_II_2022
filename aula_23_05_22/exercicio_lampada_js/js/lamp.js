var btn = document.getElementById('clicker')
var lamp = document.getElementById('lamp')

btn.onclick = function(){
    //alert('teste')
    if(btn.value == 'Acender'){
        lamp.src='./img/acesa.jpg'
        btn.value = 'Apagar'
        btn.innerHTML = 'Apagar'
    }else{
        lamp.src = './img/apagada.jpg'
        btn.value = 'Acender'
        btn.innerHTML = 'Acender'
    }
}