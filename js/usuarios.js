$(document).ready(function(){
    $('#guardar-registro').on('submit', function(e){
        e.preventDefault();

        // VERIFICAMOS QUE ESTEMOS SELECCIONANDO EL SUBMIT
        // console.log('Hiciste click en submit');

        //OBTENEMOS LOS VALORES DE NUESTRO FORMULARIO
        var datos = $(this).serializeArray();
        console.log('Datos', datos);

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success:function(data){
                console.log('Datos: ', data);

                var resultado = data;

                if(resultado.respuesta == 'exito'){
                    Swal.fire(
                        'Correcto!',
                        'Se guardó correctamente!',
                        'success'
                    )
                    setTimeout(function(){
                        window.location.href = 'index.php';
                    },2000);
                }else{
                    Swal.fire({
                        type: 'error',
                        title: 'Error',
                        text: 'Hubo un error!'
                    })
                }
            }
        });
    });



     // Login
     $('#guardar-login').on('submit', function(e){
        e.preventDefault();
        // console.log('Hiciste click');

        var datos = $(this).serializeArray();
        // console.log('Login: ', datos);

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success:function(respuesta){
                console.log('Login: ', respuesta);
                var resultado = respuesta;

                if(resultado.respuesta == 'exito'){
                    Swal.fire(
                        'Login Correcto!',
                        'Bienvenido ' +resultado.usuario+ '!!',
                        'success'
                    )
                    setTimeout(function(){
                        window.location.href = 'admin.php';
                    },2000);
                }else{
                    Swal.fire({
                        type: 'error',
                        title: 'Error',
                        text: 'Usuario o Password Incorrectos!'
                    })
                }
            }
        });
    
    });
});