function jQuery(){
var group, name, pass;   
    
if(flexCapturistas.checked == true){
    group = flexCapturistas.value;
}if (flexRoot.checked == true) {
    group = flexRoot.value;
} if(flexContadores.checked == true) {
    group = flexContadores.value;
}

name = exampleDataList.value !=''? exampleDataList.value: "";
pass = inputPassword.value; 
var parametros =  {
    'Nombre': name,
    'Contraseña': pass,
    'Grupo': group
};

if(name != "" && pass !=""){
    $.ajax({
    data: parametros,
    url: '/../include/addUser.php',
    type: 'POST',

    beforesend: function(){
      $('#ID_Mostrar_info').html("Mensaje antes de enviar");
    },
    
    success: function(mensaje_mostrar){
        $('#ID_Mostrar_info').html(mensaje_mostrar);
        alert("Usuario agregado");
    }
});
exampleDataList.value = "";
inputPassword.value = ""; 
}else{
    alert("Complete todos los campos");
}

}