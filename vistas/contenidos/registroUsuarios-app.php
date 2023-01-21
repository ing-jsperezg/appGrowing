<!-- Nested Row within Card Body -->
<hr>
<div class="col-lg-6 mx-auto text-center">
    <h1 class="h4 text-gray-900 mb-4">Registro de Usuarios</h1>
</div>
<hr>
<span>Todos los campos son obligatorios</span>
<div class="col-lg-6 mx-auto">
    
    <form  class="user FormularioAjax" action = "<?php echo _SERVERURL;?>ajax/usuarioAjax.php" method="POST" data-form ="save" autocomplete = off>
        
        <div class="form-group">
            <select class="form-control form-select" aria-label="Default select example" name="UserReg" required>
                <option selected>Quien puede Ingresar?</option>
                <option value="1">Carlos</option>
                <option value="2">Pedro</option>
                <option value="3">Alfonso</option>
                <option value="4">Camilo</option>
                <option value="5">Lorena</option>
                <option value="6">Ana</option>
            </select>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="exampleFirstName"
                    placeholder="Nombre de usuario"  name="nomUsuerReg" pattern="[a-zA-Z0-9]{4-15}" maxlength="15" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" id="exampleFirstName"
                    placeholder="Contraseña"  name="pswUserReg" pattern="[a-zA-Z0-9]{8-15}"  maxlength="10" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" id="exampleFirstName"
                    placeholder="Confirmar Contraseña"  name="pswUserReg2" pattern="[a-zA-Z0-9]{8-15}"  maxlength="10" required>
        </div>

        <div class="form-group">
            <select class="form-control form-select" aria-label="Default select example" name="tUserReg" required>
                <option selected>Tipo de Usuario</option>
                <option value="1">Administrador</option>
                <option value="2">Asesor de venta</option>
            </select>
        </div>

        <div class="form-group">
            <select class="form-control form-select" aria-label="Default select example" name="estUserReg" required>
                <option selected>Estado del usuario</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
        </div>

        <hr>
        <div class="form-group">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Registrar 
                </button>
        </div>
    </form>
</div>