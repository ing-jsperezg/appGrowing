<!-- Nested Row within Card Body -->
<div class="px-5 mt-5 pt-5">
    <div class="col-lg-12">
        <div class="mx-auto px-5">
        <div class="RespuestaAjax"></div>
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registro de Datos Básicos Clientes</h1>
            </div>
            <div> * campos obligatorios</div>
            <form class="user FormularioAjax" action="" method="POST" data-form ="save" autocomplete = off>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="exampleFirstName"
                            placeholder="Número de identificación *" name="txtId" pattern="[0-9]{6,12}" maxlength="30" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="exampleFirstName"
                            placeholder="Primer Nombre *"  name="txtNombre1" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]{1,30}" maxlength="30" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleLastName"
                            placeholder="Segundo Nombre"  name="txtNombre2" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]{1,30}" maxlength="30">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="exampleFirstName"
                            placeholder="Primer Apellido"  name="txtApellido1" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]{1,30}" maxlength="30">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleLastName"
                            placeholder="Segundo Apellido"  name="txtApellido2" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]{1,30}" maxlength="30">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="exampleFirstName"
                            placeholder="Teléfono Fijo"  name="txtTelefono" pattern="[0-9]{0,12}" maxlength="12">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleLastName"
                            placeholder="Teléfono Celular *"  name="txtCelular" pattern="[0-9]{0,12}" maxlength="12" required>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail"
                        placeholder="Dirección"  name="txtDireccion" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9-]{0,150}" maxlength="150">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control " id="exampleInputEmail"
                        placeholder="Correo Electrónico"  name="txtEmail">
                </div>

                <div class="form-group row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <input type="date" class="form-control " id="exampleFirstName"
                            placeholder="Fecha de Nacimiento" name="txtNacimiento">
                    </div>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <select class="form-control form-select" aria-label="Default select example" name="txtGenero">
                            <option selected>Genero</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otros</option>
                        </select>
                    </div>  
                </div>
                
                <div class="form-group row"> 
                    <div class="col-sm-9 mb-3 mb-sm-0">
                        <label>Adjuntar foto
                        <input type="file" id="exampleLastName" 
                        placeholder="FotoCliente"  name="txtFoto"></label>
                    </div>
                </div>

                <input type="hidden"  name="tPersona" value="2"> 
                <hr>
                <div class="form-group text-center">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Guardar Cliente
                        </button>
                    </div>
                </div>
            </form>
            <div class="RespuestaAjax"></div>
        </div>
    </div>
</div>