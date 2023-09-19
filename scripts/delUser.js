function delButton(num,name){
var delButton = "delButton"+num;
var succesSpan = "succesSpan"+num;
num = num+1;
var parametros = {
    'name' :  name,
    'num' : num
};
$.ajax({
    data: parametros,
    url: '/../include/delUser.php',
    type: 'POST',

    beforesend: function(){
      $('#ID_Mostrar_info').html("Mensaje antes de enviar");
    },
    
    success: function(mensaje_mostrar){
        $('#ID_Mostrar_info').html(mensaje_mostrar);
    }
});
document.getElementById(delButton).classList.add('none');
document.getElementById(succesSpan).classList.remove('none');
}