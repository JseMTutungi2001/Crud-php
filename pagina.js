(function() {

    var validar_agregar = function(e) {


        var formularioa = document.getElementsByName('formulario')[e];
        var elementos = formulario.elements;
        var expresion = /\w+@+[a-z]+\.+[a-z]/;

        var validarNombre = function(e) {
            if (formulario.nombre.value == 0 && formulario.nombre.value == "  ") {

                alert("completa el nombre por que se encuentra vacio como tu corazon despues de que ella se fuera");
                e.preventDefault();
                console.log('completa el nombre por que se encuentra vacio como tu corazon despues de que ella se fuera');

            }
            if (formulario.nombre.length > 30 && formulario.nombre.length < 3) {
                alert(" El Nombre contiene menos de 3 o mas de 30 letras");
                e.preventDefault();
                console.log('El Nombre contiene menos de 3 o mas de 30 letras');
            }
        };

        var validar_ci = function(e) {
            if (isNaN(formularioa.ci.value)) {
                alert("La cedula de identidad debe contener al menos 7 numeros y maximo de 9, no debe conetener letras ");
                e.preventDefault();
                console.log('La cedula de identidad debe contener al menos 7 numeros y maximo de 9 no debe contener letras');
                return false;
            }
            if (formulario.ci.length > 6 && formulario.contrasena.length < 10) {
                alert(" La cedula de identidad debe contener al menos 7 numeros y maximo de 9");
                e.preventDefault();
                console.log('La cedula de identidad debe contener al menos 7 numeros y maximo de 9');
                return false;
            }
        };

        var validarcorreo = function(e) {
            if (formulario.correo.value == 0 && formulario.correo.value == "  ") {

                alert("completa el nombre por que se encuentra vacio como tu corazon despues de que ella se fuera");
                e.preventDefault();
                console.log('completa el nombre por que se encuentra vacio como tu corazon despues de que ella se fuera');

            }
            if (!expresion.test(correo)) {
                alert("El correo no es valido");
                return false;
            }
        };


        validarNombre(e);
        validar_ci(e);
        validarcorreo(e);

        formularioa.addEventListener("submit", validar_agregar);

    }






}())