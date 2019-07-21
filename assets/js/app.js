/**
 *  Los metodos para poder gestionar la entidad categorias 
 * */
const url='http://localhost/evalme/'

function mostrarCategorias() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('main-content').innerHTML=this.responseText;
            mostrarTablaCategorias();
            mostrarFormCategorias();
        }
    };
    request.open('GET',url+'categorias/')
    request.send()
}

function mostrarTablaCategorias() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('tbl-categorias').innerHTML=this.responseText;
        }
    };

    request.open('GET',url+'categorias/recargarTabla')
    request.send()
}

function mostrarFormCategorias() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('frm-categorias').innerHTML=this.responseText;
        }
    };
    request.open('GET',url+'categorias/recargarFrm')
    request.send()
}

function mostrarFormCategoriasData(id) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('frm-categorias').innerHTML=this.responseText;
        }
    };
    var data = new FormData();
    data.append('id_categoria',id)

    request.open('POST',url+'categorias/recargarFrmData/')
    request.send(data)
}


function agregarCategoria() {
    var nombre = document.getElementById('nombreCategoria').value;
    var estado = document.getElementById('estadoCategoria').value;
    var descripcion = document.getElementById('descripcionCategoria').value;

    if (nombre == '' || descripcion == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresa datos en los campos"
    } else {
        document.getElementById('mensajes').innerHTML=""
            var request = new XMLHttpRequest();

            request.onreadystatechange = function () {
                if(request.readyState == 4){
                    mostrarFormCategorias()
                    mostrarTablaCategorias()
                }
            };

            var data = new FormData();
            data.append('nombre',nombre)
            data.append('descripcion',descripcion)
            data.append('estado',estado)

            request.open('POST',url+'categorias/create')
            request.send(data)
            
    }
}

function actualizarCategoria() {
    var id = document.getElementById('idCategoria').value;
    var nombre = document.getElementById('nombreCategoria').value;
    var estado = document.getElementById('estadoCategoria').value;
    var descripcion = document.getElementById('descripcionCategoria').value;

    if (nombre == '' || descripcion == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresa datos en los campos"
    } else {
        document.getElementById('mensajes').innerHTML=""
            var request = new XMLHttpRequest();

            request.onreadystatechange = function () {
                if(request.readyState == 4){
                    mostrarFormCategorias()
                    mostrarTablaCategorias()
                }
            };

            var data = new FormData();
            data.append('nombre',nombre)
            data.append('descripcion',descripcion)
            data.append('estado',estado)
            data.append('id',id)

            request.open('POST',url+'categorias/update')
            request.send(data)
            
    }
}

function eliminarCategoria(id) {
    var conf= confirm('¿Esta seguro que desea eliminar este registro?')
    if (conf) {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if(request.readyState == 4){
                mostrarTablaCategorias()
            }
        };

        var data = new FormData();
        data.append('id',id)

        request.open('POST',url+'categorias/eliminar/')
        request.send(data)
    } 
}

function editarCategoria(id) {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if(request.readyState == 4){
            mostrarFormCategoriasData()
        }
    };

    var data = new FormData();
    data.append('id_categoria',id)

    request.open('POST',url+'categorias/recargarFrmData')
    request.send(data)
}


/**
 *  Los metodos para poder gestionar la entidad instituciones
 */
function mostrarInstituciones() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('main-content').innerHTML=this.responseText;
            mostrarTablaInstituciones();
            mostrarFormInstituciones();
        }
    };
    request.open('GET',url+'Instituciones/')
    request.send()
}

function mostrarTablaInstituciones() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('tbl-instituciones').innerHTML=this.responseText;
        }
    };

    request.open('GET',url+'Instituciones/recargarTabla')
    request.send()
}

function mostrarFormInstituciones() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('frm-instituciones').innerHTML=this.responseText;
        }
    };
    request.open('GET',url+'Instituciones/recargarFrm')
    request.send()
}

function mostrarFormInstitucionesData(id) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('frm-instituciones').innerHTML=this.responseText;
        }
    };
    var data = new FormData();
    data.append('id_institucion',id)
    request.open('POST',url+'instituciones/recargarFrmData/')
    request.send(data)
}


function agregarInstitucion() {
    var nombre = document.getElementById('nombreInstitucion').value;
    var estado = document.getElementById('estadoInstitucion').value;
    var direccion = document.getElementById('direccionInstitucion').value;
    var codigo = document.getElementById('codigoInstitucion').value;

    if (nombre == '' || direccion == '' || codigo == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresa datos en los campos"
    } else {
        document.getElementById('mensajes').innerHTML=""
            var request = new XMLHttpRequest();

            request.onreadystatechange = function () {
                if(request.readyState == 4){
                    mostrarFormInstituciones()
                    mostrarTablaInstituciones()
                }
            };

            var data = new FormData();
            data.append('nombre',nombre)
            data.append('direccion',direccion)
            data.append('estado',estado)
            data.append('codigo',codigo)

            request.open('POST',url+'instituciones/create')
            request.send(data)
            
    }
}

function actualizarInstitucion() {
    var nombre = document.getElementById('nombreInstitucion').value;
    var estado = document.getElementById('estadoInstitucion').value;
    var direccion = document.getElementById('direccionInstitucion').value;
    var codigo = document.getElementById('codigoInstitucion').value;
    var id = document.getElementById('idInstitucion').value;

    if (nombre == '' || direccion == '' || codigo == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresa datos en los campos"
    } else {
        document.getElementById('mensajes').innerHTML=""
            var request = new XMLHttpRequest();

            request.onreadystatechange = function () {
                if(request.readyState == 4){
                    mostrarFormInstituciones()
                    mostrarTablaInstituciones()
                }
            };

            var data = new FormData();
            data.append('nombre',nombre)
            data.append('direccion',direccion)
            data.append('estado',estado)
            data.append('codigo',codigo)
            data.append('id',id)

            request.open('POST',url+'instituciones/update')
            request.send(data)
            
    }
}

function eliminarInstitucion(id) {
    var conf= confirm('¿Esta seguro que desea eliminar este registro?')
    if (conf) {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if(request.readyState == 4){
                mostrarTablaInstituciones()
            }
        };

        var data = new FormData();
        data.append('id',id)

        request.open('POST',url+'instituciones/eliminar/')
        request.send(data)
    } 
}



/**
 *  Los metodos para poder gestionar la entidad especialidades
 */

function mostrarEspecialidades() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('main-content').innerHTML=this.responseText;
            mostrarTablaEspecialidades();
            mostrarFormEspecialidades();
        }
    };
    request.open('GET',url+'especialidades/')
    request.send()
}

function mostrarTablaEspecialidades() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('tbl-especialidades').innerHTML=this.responseText;
        }
    };

    request.open('GET',url+'especialidades/recargarTabla')
    request.send()
}

function mostrarFormEspecialidades() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('frm-especialidades').innerHTML=this.responseText;
        }
    };
    request.open('GET',url+'especialidades/recargarFrm')
    request.send()
}

function mostrarFormEspecialidadesData(id) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('frm-especialidades').innerHTML=this.responseText;
        }
    };
    var data = new FormData();
    data.append('id_especialidad',id)

    request.open('POST',url+'especialidades/recargarFrmData/')
    request.send(data)
}


function agregarEspecialidad() {
    var estado = document.getElementById('estadoEspecialidad').value;
    var nombre = document.getElementById('nombreEspecialidad').value;

    if (nombre == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresa datos en los campos"
    } else {
        document.getElementById('mensajes').innerHTML=""
            var request = new XMLHttpRequest();

            request.onreadystatechange = function () {
                if(request.readyState == 4){
                    mostrarFormEspecialidades()
                    mostrarTablaEspecialidades()
                }
            };

            var data = new FormData();
            data.append('nombre',nombre)
            data.append('estado',estado)

            request.open('POST',url+'especialidades/create')
            request.send(data)
            
    }
}

function actualizarEspecialidad() {
    var id = document.getElementById('idEspecialidad').value;
    var estado = document.getElementById('estadoEspecialidad').value;
    var nombre = document.getElementById('nombreEspecialidad').value;

    if (nombre == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresa datos en los campos"
    } else {
        document.getElementById('mensajes').innerHTML=""
            var request = new XMLHttpRequest();

            request.onreadystatechange = function () {
                if(request.readyState == 4){
                    mostrarFormEspecialidades()
                    mostrarTablaEspecialidades()
                }
            };

            var data = new FormData();
            data.append('nombre',nombre)
            data.append('estado',estado)
            data.append('id',id)

            request.open('POST',url+'especialidades/update')
            request.send(data)
            
    }
}

function eliminarEspecialidad(id) {
    var conf= confirm('¿Esta seguro que desea eliminar este registro?')
    if (conf) {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if(request.readyState == 4){
                mostrarTablaEspecialidades()
            }
        };

        var data = new FormData();
        data.append('id',id)

        request.open('POST',url+'especialidades/eliminar/')
        request.send(data)
    } 
}