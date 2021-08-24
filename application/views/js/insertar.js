$(document).ready(function () {
  
  $("#fraddemp").validate({
    rules: { 
        NOMBRE: {
          required: true,
        },
        SALARIO: {
          required: true,
        },
    },
    
    submitHandler: function (form) { 
    
        $.ajax({
        method: "POST",
        url: "insertar",
        data: $(form).serialize(),
        success: function (e) { 
            location.href="../Welcome";
        },
        });
    },
    });

    $("#fraddsoli").validate({
      rules: { 
        CODIGO: {
            required: true,
          },
          DESCRIPCION: {
            required: true,
          },
          RESUMEN: {
            required: true,
          },
          ID_EMPLEADO: {
            required: true,
          },
      },
      
      submitHandler: function (form) { 
      
          $.ajax({
          method: "POST",
          url: "insertar",
          data: $(form).serialize(),
          success: function (e) { 
              location.href="../Welcome";
          },
          });
      },
      });
  })