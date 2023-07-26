
function Validar() {

    var form = document.getElementById("Registro").addEventListener("submit", function(evento){
        
        var psswrd = document.getElementById("password").value;
        var psswd = document.getElementById("password2").value;
        var usu = document.getElementById("usuario").value;
        
        if (psswrd == psswd) {
            alert("Bienvenido "+ usu + " Disfruta de nuestros deliciosos panes");
        }
        else{
            alert("Las contraseñas no coinciden");
            evento.preventDefault();
        }
    });
}


function ValidarEmpleado() {

    var form = document.getElementById("Registro").addEventListener("submit", function(evento){
        
        var psswrd = document.getElementById("password").value;
        var psswd = document.getElementById("password2").value;
        var usu = document.getElementById("usuario").value;
        
        if (psswrd == psswd) {
            alert("El Empleado Se Registro Correctamente");
        }
        else{
            alert("Las Contraseñas No Coinciden");
            evento.preventDefault();
        }
    });
}

function alertaeliminar() 
{
    var option = confirm("Desea eliminar el producto");

    if (option == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function eliminarEmpleado() 
{
    var option = confirm("Desea Eliminar El Empleado");

    if (option == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function alertaActualizar() 
{
    var option = confirm("Desea actualizar el producto");

    if (option == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function ActualizarEmpleado() 
{
    var option = confirm("Desea Actualizar El Empleado");

    if (option == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function CerrarSesion() 
{
    var option = confirm("Desea Cerrar Sesión");

    if (option == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}

