$(document).ready(function () {
    var mensagem = $("#mensagem");
    var preloader = $("#preloader");
    var barra = $("#barra");
    $("#editarFoto").hide();
   

    $("#bnt_editar_foto").on('click', function () {
        $("#editarFoto").toggle();

    });
});