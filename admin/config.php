<?php
    if (! current_user_can ('manage_options')) wp_die (__ ("You don't have permissions to access this page."));

    // Si enviamos el movil, lo actualizamos en options de la BD
    if (isset($_POST['wcw_mobile_number'])) {
        $value = $_POST['wcw_mobile_number'];
        update_option('wcw_mobile_number', $value);
    }
    // Cogemos el valor del options y si no existe colocamos el string para operar
    $value = get_option('wcw_mobile_number', 'Set your whatsapp number');
    $autoOpen = get_option('opening', true);

    $incorrectPhone = false;

    // Disparador para mostrar mensaje si no tenemos configurado el teléfono
    if ($value == 'Set your whatsapp number' || strlen($value) < 3) {
        $incorrectPhone = true;
    }
?>

	<div class="wrap">
		<h2><?php _e( 'WhatsApp Chat WP', 'wcw' ) ?></h2>
		Bienvenido a la página de configuración del plugin WhatsApp Chat WP
    </div>

<?php if($incorrectPhone === true) : ?>
    <div class="update-nag notice wcw-d-block">
        <p>Rellena tu número de teléfono para activar el funcionamiento del plugin</p>
    </div>
<?php endif; ?>


    <div class="wrap wcw-mt-35">
        <form method="POST">
            <div class="form-group">
                <label for="wcw_mobile_number">Número de teléfono: </label>
                <input type="text" name="wcw_mobile_number" id="wcw_mobile_number" value="<?php echo $value; ?>">
                <p class="tip">*Prefijo + número sin espacios</p>
            </div>

            <div class="form-group">
                <label for="wcw_opening">Abrir popup automáticamente: </label>
                <input type="checkbox" name="wcw_opening" id="wcw_opening" value="<?php echo $autoOpen; ?>">
            </div>
            <div class="form-group" id="delay_field">
                <label for="wcw_delay">Delay (seconds): </label>
                <input type="number" name="wcw_delay" id="wcw_delay" value="<?php echo $value; ?>">
            </div>

            <div class="form-group">
                <label for="wcw_text1">Texto 1: </label>
                <input type="text" name="wcw_text1" id="wcw_text1" value="<?php echo $value; ?>">
            </div>
            <div class="form-group">
                <label for="wcw_text2">Texto 2: </label>
                <input type="text" name="wcw_text2" id="wcw_text2" value="<?php echo $value; ?>">
            </div>
            <div class="form-group">
                <label for="wcw_text3">Texto 3: </label>
                <input type="text" name="wcw_text3" id="wcw_text3" value="<?php echo $value; ?>">
            </div>

            <?php submit_button();?>
        </form>
    </div>

<?php
 ?>