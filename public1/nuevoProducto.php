<?php include("vistas/cabecera.php"); ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Producto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Producto</li>
            </ol>
          </div>            
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <!-- Main content -->
      <section> 
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-#F1F2F2">
                <div class="card-header">
                  <form class="needs-validation" id="nuevoProducto" >
                    
                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label for="txtCategoria">Categoria</label>
                        <input type="text" name="txtCategoria" class="form-control" id="txtCategoria" placeholder="Ingrese su categoria" autocomplete="off">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" name="txtNombre" class="form-control" id="txtNombre" placeholder="Ingrese su nombre">
                      </div>
                      
                      
                      <div class="col-md-2 mb-4">
                        <label for="txtPrecio">Precio</label>
                        <input type="number" name="txtPrecio" class="form-control" id="txtPrecio" placeholder="Ingrese el precio">
                      </div>

                      <div class="col-md-2 mb-3">
                        <label for="txtPresentacion">Presentacion</label>
                        <input type="text" name="txtPresentacion" class="form-control" id="txtPresentacion" placeholder="Presentacion">
                      </div>
                     
                      <div class="col-md-3 mb-3">
                        <label for="txtMarca">Marca</label>
                        <input type="text" name="txtMarca" class="form-control" id="txtMarca" placeholder="Ingrese la Marca">
                      </div>
                     
                     </div>
                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <div>
                          <button class="btn btn-success mr-1" type="submit">Guardar</button>
                          
                          <!--  onclick="ConfirmarEliminarProducto()" -->
                          <a class="btn btn-danger" href="home.php" role="button">Cancelar</a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>

<?php include("vistas/pie.php"); ?>
<script type="text/javascript">
  
  $('#nuevoPaciente').submit(function(e){
    e.preventDefault();

  });

  $('#nuevoPaciente').validate({
    rules: {
      validationTooltip01: {
        required: true,      
      },
      validationTooltip02: {
        required: true,
      },
      validationTooltip04: {
        required: true,
      },
      validationTooltip05: {
        required: true,
      },
      validationTooltip08: {
        required: true,
      },
      validationTooltip09: {
        required: true,     
      },
      validationTooltip10: {
        required: true,    
      },
      validationTooltip11: {
        required: true,
      },
      validationTooltip12: {
        required: true,      
      },
      validationTooltip13: {
        required: true,
      }, 
      validationTooltip14: {
        required: true,
      },
          
    },

    messages: {
      validationTooltip01: {
        required: "Necesita ingresar el apellido completo"
      },
      validationTooltip02: {
        required: "Necesita ingresar el nombre completo",
      },
      validationTooltip04: {
        required: "Seleccione fecha de nacimiento",
      },    
      validationTooltip05: {
        required: "Necesita ingresar la edad",
      }, 
      validationTooltip08: {
         required: "Necesita ingresar el documento",
      },     
      validationTooltip09: {
        required: "Necesita ingresar el documento",
      },
      validationTooltip10: {
        required: "Necesita ingresar el número telefónico",
      },
      validationTooltip11: {
        required: "Necesita ingresar el domicilio",
      },
      validationTooltip12: {
        required: "Necesita ingresar la ocupación",
      },
      validationTooltip13: {
        required: "Necesita ingresar las alergias",
      },
      validationTooltip14: {
        required: "Necesita ingresar intervenciones quirúrgicas",
      },

      
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },

    submitHandler : function()
    {
      $.ajax(
      {
        method:"post",
        data:
          {
            apellidos:$("#validationTooltip01").val(),
            nombres:$("#validationTooltip02").val(),            
            sexo:$("#validationTooltip03").val(),
            edad:$("#validationTooltip04").val(),         
            fech_nac:$("#validationTooltip05").val(),
            estado_civil:$("#validationTooltip06").val(),
            tipo_documento:$("#validationTooltip07").val(),
            dni:$("#validationTooltip08").val(),
            celular:$("#validationTooltip09").val(),
            domicilio:$("#validationTooltip10").val(),
            correo:$("#validationTooltip11").val(),
            ocupacion:$("#validationTooltip12").val(),
            alergias:$("#validationTooltip13").val(),
            intervencion_quirurgicas:$("#validationTooltip14").val(),
            vacunas:$("#validationTooltip15").val()
          },
            url:"http://api.miapp.com/api/v1/paciente"
        }
      )
      .done(function(response){
        console.log("paciente agregado");      
        /* Línea para cerrar modal una vez ingresado los datos */
        $('#nuevoPaciente').modal('hide');
      });
    }
    
  });
</script>
