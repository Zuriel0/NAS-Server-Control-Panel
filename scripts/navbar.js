$(document).ready(function() {
    $('#div-btn1').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('lista-usuarios.php');
        return false;
    });

    $('#div-btn2').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('add-users.php');
        return false;
    });

    $('#div-btn3').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('del-users.php');
        return false;
    });

    $('#div-btn4').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('memoria.php');
        return false;
    });
    $('#div-btn5').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $("#central").load('disco.php');
        return false;
    });
});

function init() {
    $('.navbar-nav li').removeClass('active');
    $("#central").load('memoria.php');
    return false;
}
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));