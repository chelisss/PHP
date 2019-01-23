var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click', function(){
    var peticion = new XMLHttpRequest();
    //peticion.open('GET', 'http://www.json-generator.com/api/json/get/cfOWQaIaBe?indent=2');
    peticion.open('GET', 'php/usuarios.php');

    loader.classList.add('active');

    peticion.onload = function(){
        //console.log(JSON.parse(peticion.responseText)[0].nombre);
    
        var datos = JSON.parse(peticion.responseText);
        
   
    for(var i =0; i< datos.length; i++){
        var elemento = document.createElement('tr');
                 elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
                 elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
                 elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
                 elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
                 elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
                 document.getElementById('tabla').appendChild(elemento);
    }

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

