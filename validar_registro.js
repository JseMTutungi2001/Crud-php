(function() {

    /*   function validarespacios(parametro) {

          var patron = /^\s+$/;

          if (patron.test(parametro)) {
              return false;
          } else {
              return true;
          }

      } */


    var validar_registro = function(e) {


        var formulario = document.getElementsByName('formulario')[e];
        var elementos = formulario.elements;
        var patron = /^\s+$/;

        var validarespacios = function(e) {
            if (formulario.nombre_usuario.value == patron) {
                alert("completa el nombre por que se encuentra vacio como tu corazon despues de que se fuera");
                e.preventDefault();
                return false;
            }
        }

        var validarNombre = function(e) {
            if (formulario.nombre_usuario.value == 0 /* || validarespacios(formulario.nombre_usuario.value) == false */ ) {

                alert("completa el nombre por que se encuentra vacio como tu corazon despues de que se fuera");
                e.preventDefault();
                console.log('completa el nombre por que se encuentra vacio como tu corazon despues de que se fuera');
                return false;

            }



            if (formulario.nombre_usuario.length > 30 || formulario.nombre_usuario.length < 3) {
                alert(" El Nombre es muy largo, contiene mas de 30 o menos de 3 caracteres");
                e.preventDefault();
                console.log('El Nombre es muy largo, contiene mas de 30 o menos de 3 caracteres');
            }
        };


        var validarcontrasena = function(e) {
            if (formulario.contrasena.value == 0) {
                alert("completa la contraseña, por que esta vacia,  como las ganas de ella por ti");
                e.preventDefault();
                console.log('completa la contraseña, por que esta vacia,  como las ganas de ella por ti');
            }
            if (formulario.contrasena.length > 20 || formulario.contrasena.length < 3) {
                alert(" La contraseña contiene menos de 3 o mas de 20 caracteres");
                e.preventDefault();
                console.log('La contraseña contiene menos de 3 o mas de 20 caracteres');
            }

        };
        var validarcontrasena2 = function(e) {
            if (formulario.contrasena2.value == 0) {
                alert("completa la contraseña, por que esta vacia,  como las ganas de ella por ti");
                e.preventDefault();
                console.log('completa la contraseña, por que esta vacia,  como las ganas de ella por ti');
            }
            if (formulario.contrasena2.length > 20 || formulario.contrasena2.length < 3) {
                alert(" La contraseña contiene menos de 3 o mas de 20 caracteres");
                e.preventDefault();
                console.log('La contraseña contiene menos de 3 o mas de 20 caracteres');
            }

        };




        validarespacios(e);
        validarNombre(e);
        validarcontrasena(e);
        validarcontrasena2(e);

    };
    formulario.addEventListener("submit", validar_registro);




}())