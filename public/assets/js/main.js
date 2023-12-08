$(document).ready(function () {
    $("#formulario").submit(function (event) {
      let formData = {
        name: $("#nome").val(),
        lastName: $("#sobreNome").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "teste/cliente.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        alert("Resultado: "+data.msg);
      });
  
      event.preventDefault();
    });

    $("#button").click(function () {
    
        $.ajax({
          type: "POST",
          url: "teste/curl.php",
        }).done(function (data) {
          alert("Resultado: Lado:"+data.lado+" Numero de Palavras: "+data.numPalavras+" Texto Reverso: "+data.textoReverso);
        });
    
      });

    $("#buttonQuery").click(function () {
  
      $.ajax({
        type: "POST",
        url: "teste/query.php",
      }).done(function (data) {
        $("#tabela").html(data);
      });
  
    });
});