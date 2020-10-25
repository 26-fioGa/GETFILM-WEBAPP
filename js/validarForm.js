document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();
    var telefono = document.getElementById('telefono').value;
    var numeroCuenta = document.getElementById('nCuenta').value;
    if (telefono.length < 9 || telefono.length > 9) {
        alert('El teléfono debe tener 9 digitos');
        return;
    }
    if (numeroCuenta.length < 14 || numeroCuenta.length > 14) {
        alert('El número de cuenta debe tener 14 dígitos');
        return;
    }
    this.submit();
}