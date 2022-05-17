$("#form input").on('blur', function() {
    let campo = $(this).attr('name');
    let valor = $(this).val();
    let form = $('#form').serialize();


    if (campo == 'cep') {
        let cep = valor.replace(/\D/g, '');
        let validaCep = /^[0-9]{8}$/;

        if (validaCep.test(cep)) {
            console.log('cep valido');
        } else {
            console.log('cep invalido');
        }
    }



    if (campo && valor) {
        $('.remove-msg').remove();
        $.ajax({
            type: 'get',
            url: "php/validaCampos.php",
            data: {
                dados: form
            },
            success: function(data) {
                if (data == 'incompleto') {
                    $("#form .verify").each(function(key, value) {
                        if (!value.value) {
                            $('<span class="remove-msg" style="color:red">Campo obrigatório</span>').insertAfter(value);
                        }
                    })
                }
            },
            error: function(error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Ops',
                    text: 'Ocorreu uma falha'
                })
            }
        })

    }
})