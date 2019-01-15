var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click', function(){
    var peticion = new XMLHttpRequest();
    peticion.open('GET', 'http://www.json-generator.com/api/json/get/cfOWQaIaBe?indent=2');

    loader.classList.add('active');

    peticion.onload = function(){
        //console.log(JSON.parse(peticion.responseText)[0].nombre);
    
        var datos = JSON.parse(peticion.responseText);
        
        datos.forEach(persona => {
            var elemento = document.createElement('tr');
            elemento
        });
    }


    peticion.onreadystatechange = function(){        
        if (peticion.readyState == 4 && peticion.status==200){
            //2 - peticion recibida
            //3 - petición está siendo procesada
            //4 - petición finalizada y respuesta lista

            //status 200 - Todo está correcto y si lo encuentra
            //sino... error 404

            loader.classList.remove('active');
        }
    }

    peticion.send();
});