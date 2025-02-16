$("#btn_salvar").on("click", function(){

    var txt_nome = $("#name").val();
    var txt_mensagem = $("#mensagem").val();
    console.log("TESTE: " + txt_mensagem);

    $.ajax({
        url: "http://34.118.226.12:30006/",
        type: "post",
        data: {name: txt_nome, mensagem: txt_mensagem},
        beforeSend: function(){
            $("#resposta").html("Enviando...");
        }

    }).done(function(e){
        $("#resposta").html("Dados Salvos....");
    })

})