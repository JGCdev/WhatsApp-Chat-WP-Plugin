<?php
    if (! current_user_can ('manage_options')) wp_die (__ ("You don't have permissions to access this page."));

    // Si enviamos el movil, lo actualizamos en options de la BD
    if (isset($_POST['wcw_mobile_number'])) {
        $value = $_POST['wcw_mobile_number'];
        update_option('wcw_mobile_number', $value);
    }
    // Cogemos el valor del options y si no existe colocamos el string para operar
    $value = get_option('wcw_mobile_number', 'Set your whatsapp number');
    
    $firstInit = false;

    // Disparador para mostrar mensaje si no tenemos configurado el teléfono
    if ($value == 'Set your whatsapp number') {
        $firstInit = true;
    }
?>

	<div class="wrap">
		<h2><?php _e( 'WhatsApp Chat WP', 'wcw' ) ?></h2>
		Bienvenido a la página de configuración del plugin WhatsApp Chat WP
    </div>

<?php if($firstInit === true) : ?>
    <div class="update-nag notice wcw-d-block">
        <p>Rellena tu número de teléfono para activar el funcionamiento del plugin</p>
    </div>
<?php endif; ?>


    <div class="wrap wcw-mt-35">
        <form method="POST">
            <label for="wcw_mobile_number">Número de teléfono: </label>
            <input type="text" name="wcw_mobile_number" id="wcw_mobile_number" value="<?php echo $value; ?>">
            <?php submit_button();?>
        </form>
    </div>

<?php
 ?>