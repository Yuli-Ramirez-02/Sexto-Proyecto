document.addEventListener('DOMContentLoaded', function() {
    iniciarApp()
});

function iniciarApp() {
    buscarPorFecha();
}

function buscarPorFecha() {
    const fecha = document.querySelector('#fecha');
    fechaInput.addEventListener('input', function() {
        const fechaSeleccionada = e.target.value;
        window.location = `?fecha=${fechaSeleccionada}`;
    });
    
}