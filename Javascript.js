
$("#FormCadastro").on(submit, function(event){
    event.preventDefault();
    var Dados = $(this).serialize();

    $.ajax({
        url: 'Controlers/ControllerCadastro.php',
        type: 'POST',
        dataType: 'html',
        data: Dados,
        success: function(Dados){
            $('.Resultado').show().html(Dados);
        }
    })
});

$('.Deletar').on('click', function(event){
    event.preventDefault();

    var Link=$(this).attr('href');

    if(Confirm("Deseja mesmo apagar esse dado?")){
        window.location.href = Link;
    }else{
        return false;
    }

    });