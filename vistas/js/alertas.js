const formularios_ajax = document.querySelectorAll(".FormularioAjax");

function enviar_formulario_ajax(e){
    e.preventDefault();

    let data = new FormData(this);
    let method = this.getAttribute("method");
    let action  = this.getAttribute("action");
    let tipo = this.getAttribute("data-form");

    let encabezados = new Headers();

    let config = {
        method: method,
        headers: encabezados,
        mode: 'cors',
        cahche: 'no-cache',
        body: data
    }

    let texto_alerta;
    if(tipo === 'save'){
        texto_alerta = "los Datos serán almacenados en el sistema";

    }else if(tipo === 'delete'){
        texto_alerta = "los Datos serán eliminados del sistema";

    }else if(tipo === 'update'){
        texto_alerta = "los Datos serán actualizados en el sistema";

    }else if(tipo === 'search'){
        texto_alerta = "Se eliminara el termino de busqueda, tendrá que escribir uno nuevo";

    }else if(tipo === 'loans'){
        texto_alerta = "Desea remover los datos seleccionados para prestamos o reservaciones?";
    }else{
        texto_alerta = "Quieres realizar la operación solicitada?"
    }


    Swal.fire({
        title: 'Estas seguro?',
        text: texto_alerta,
        type: 'question',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result)=>{
        if(result.value){
            fetch(action, config)
            .then(respuesta => respuesta.json())
            .then(respuesta => {
                return alertas_ajax(respuesta);
            });
        }
    });
}

formularios_ajax.forEach(formularios => {
    formularios.addEventListener("submit", enviar_formulario_ajax);
});

function alertas_ajax(alerta){
    if(alerta.Alerta === "simple"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            confirmButtonText: 'Aceptar'
        });
    }else if(alerta.Alerta === "recargar"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            confirmButtonText: 'Aceptar'
        }).then((result)=>{
            if(result.value){
                location.reload();
            }
        });
    }else if(alerta.Alerta === "limpiar"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            confirmButtonText: 'Aceptar'
        }).then((result)=>{
            if(result.value){
                document.querySelector(".FormularioAjax").reset();
            }
        });
    }else if(alerta.Alerta === "redireccionar"){
        windows.location.href = alerta.URL;
    }

}