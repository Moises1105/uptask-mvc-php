<div class="contenedor olvide">
            <h1 class="uptask">UpTask</h1>
    <div class="contenedor-sm">

        <p class="descripcion-pagina">Recupera tu Acceso UpTask</p>

        <?php include_once __DIR__ .'/../templates/alertas.php'; ?>

        <form class="formulario" method="POST" action="/olvide">
            <div class="campo">
                <label for="email">Correo Electrónico</label>
                <input 
                    type="email"
                    id="email"
                    placeholder="Tu Correo Electrónico"
                    name="email"
                />
            </div>
            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? obtener una</a>
        </div>
    </div> <!--.contenedor-sm -->
</div>