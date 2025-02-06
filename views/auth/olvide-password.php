<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu Password escribiendo tu email a continuacion</p>

<?php  
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Tu email"
        >
    </div>

    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>

<div class="acciones">
    <a href='/'>¿Ya tienes cuenta? Inicia Sesion</a>
    <a href='/crear-cuenta'>¿Aun no tienes una cuenta? Crea una</a>
</div>

