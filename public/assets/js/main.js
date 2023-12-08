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

    $('#buttonArray').click(function(){
      let array = [];
      $('.et_pb_blurb_container > .et_pb_blurb_description').each(function() {
        let titulo = $(this).children('h1').text();
        let descricao = $(this).children('p').text();
        array.push({titulo: titulo, descricao: descricao});
      });

      $('#resultado').html('<h4>Resultado:</h4>'+
          (array.map((elem) => { return `<br/>Título: ${elem.titulo}, Descrição: ${elem.descricao}`})).concat());
    });

    $("#formularioSalario").submit(function (event) {
      let formData = {
       salario: $("#money-field1").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "teste/ajuste.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        alert(data);
      });
  
      event.preventDefault();
    });
});