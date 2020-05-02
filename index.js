(function() {

    var validar_registro = function(e) {


        var formulario = document.getElementsByName('formulario')[e];
        var elementos = formulario.elements;

        var validarNombre = function(e) {
            if (formulario.nombre_usuario.value == 0 || formulario.nombre_usuario.value == "               ") {

                alert("completa el nombre por que se encuentra vacio como tu corazon despues de que ella se fuera");
                e.preventDefault();
                console.log('completa el nombre por que se encuentra vacio como tu corazon despues de que se fuera');

            }
            if (formulario.nombre_usuario.length > 30 || formulario.nombre_usuario.length < 3) {
                alert(" El Nombre contiene menos de 3 o mas de 30 letras");
                e.preventDefault();
                console.log('El Nombre contiene menos de 3 o mas de 30 letras');
            }
        };

        var validarcontrasena = function(e) {
            if (formulario.contrasena.value == 0 || formulario.contrasena.value == "               ") {
                alert("completa la contraseña, por que esta vacia,  como las ganas de ella por ti");
                e.preventDefault();
                console.log('completa la contraseña, por que esta vacia, como las ganas de ella por ti');
            }
            if (formulario.contrasena.length > 20 || formulario.contrasena.length < 3) {
                alert(" La contraseña contiene menos de 3 o mas de 20 caracteres");
                e.preventDefault();
                console.log('La contraseña contiene menos de 3 o mas de 20 caracteres');
            }

        };


        validarNombre(e);
        validarcontrasena(e);

    };
    formulario.addEventListener("submit", validar_registro);

}())