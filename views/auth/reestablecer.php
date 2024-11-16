<div class="contenedor reestablecer">
            <h1 class="uptask">UpTask</h1>
    <div class="contenedor-sm">

        <p class="descripcion-pagina">Coloca tu nueva Contraseña</p>

        <?php include_once __DIR__ .'/../templates/alertas.php'; ?>

        <?php if($mostrar) { ?>

        <form class="formulario" method="POST">
            <div class="campo">
                <label for="password">Guarda tu Nueva Contraseña</label>
                <input 
                    type="password"
                    id="password"
                    placeholder="Tu Nueva Contraseña"
                    name="password"
                />
            </div>
            <input type="submit" class="boton" value="Guardar Nueva Contraseña">
        </form>

        <?php } ?>

        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? obtener una</a>
        </div>
    </div> <!--.contenedor-sm -->
</div>