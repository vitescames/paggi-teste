var baseUrl = $("#base_url").val();

$("#form_create_credit_card").submit(function(e){

    e.preventDefault();

    var data = $('#form_create_credit_card').serialize();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: baseUrl + "/cartaoCredito/criar",
        method: "post",
        data: data,
        success: function (retorno) {
            alert("Cartão de Crédito criado com ID " + retorno)
        }
    });

});

$("#form_search_credit_card").submit(function(e){

    e.preventDefault();

    var data = $('#form_search_credit_card').serialize();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: baseUrl + "/cartaoCredito/buscar",
        method: "get",
        data: data,
        success: function (retorno) {
            if(retorno != 'null'){
                var obj = JSON.parse(retorno);
                $("#number").val(obj.number);
                $("#holder").val(obj.holderName);
                $("#cvv").val(obj.cvv);
    
                $("#form_update_credit_card").css("display", "initial");
            } else{
                alert('Esse ID não existe, confira a lista dos cartões caso necessário.');
            }
        }
    });

});

$("#form_update_credit_card").submit(function(e){

    e.preventDefault();

    var data = $('#form_update_credit_card').serialize();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: baseUrl + "/cartaoCredito/atualizar",
        method: "post",
        data: data,
        success: function (retorno) {
            alert(retorno);
        }
    });

});