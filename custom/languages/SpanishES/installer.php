<?php
/*
 *  Translated by ManiaNetwork
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr10
 *
 *  License: MIT
 *
 *  Spanish/Spain Language - Installation
 */

$language = array(
    /*
     *  Installation
     */
    'install' => 'Instalar',
    'pre-release' => 'antes del lanzamiento',
    'installer_welcome' => 'Bienvenido al pre-lanzamiento de la versión 2.0 de NamelessMC.',
    'pre-release_warning' => 'Tenga en cuenta que esta versión preliminar no está pensada para su uso en un sitio público.',
    'installer_information' => 'El instalador le guiará a través del proceso de instalación.',
    'terms_and_conditions' => 'Al continuar, usted acepta los términos y condiciones.',
    'new_installation_question' => 'En primer lugar, ¿se trata de una instalación nueva?',
    'new_installation' => 'Nueva instalación &raquo;',
    'upgrading_from_v1' => 'Actualizar desde la v1 &raquo;',
    'requirements' => 'Requisitos:',
    'config_writable' => 'core/config.php Escribible',
    'cache_writable' => 'Caché escribible',
    'template_cache_writable' => 'Plantilla de caché escribible',
    'exif_imagetype_banners_disabled' => 'Sin la función exif_imagetype, los banners del servidor estarán desactivados.',
    'requirements_error' => 'Debe tener todas las extensiones requeridas instaladas, y tener los permisos correctos establecidos, para poder proceder con la instalación.',
    'proceed' => 'Proceder',
    'database_configuration' => 'Configuración de la base de datos',
    'database_address' => 'Dirección de la base de datos',
    'database_port' => 'Puerto de la base de datos',
    'database_username' => 'Nombre de usuario de la base de datos',
    'database_password' => 'Contraseña de la base de datos',
    'database_name' => 'Nombre de la base de datos',
    'nameless_path' => 'Ruta de instalación',
    'nameless_path_info' => 'Esta es la ruta en la que se instala Nameless, relativa a su dominio. Por ejemplo, si Nameless está instalado en ejemplo.es/foro, debe ser <strong>foro</strong>. Déjelo vacío si Nameless no está en una subcarpeta.',
    'friendly_urls' => 'URLs amigables',
    'friendly_urls_info' => 'Las URLs amigables mejorarán la legibilidad de las URLs en su navegador.<br />Por ejemplo: <br /><code>ejemplo.es/index.php?route=/foro</code><br />se convertiría en:<br /><code>ejemplo.es/foro</code><br /><div class="ui inverted orange segment"><i class="exclamation circle icon"></i><strong>¡Importante!</strong><br />Su servidor debe estar configurado correctamente para que esto funcione. Puede ver si puede activar esta opción haciendo clic <a href="./rewrite_test" target="_blank" style="color:#2185D0">aquí</a>.</div>',
    'enabled' => 'Activado',
    'disabled' => 'Desactivado',
    'character_set' => 'Juego de caracteres',
    'database_engine' => 'Motor de almacenamiento de bases de datos',
    'host' => 'Nombre del host',
    'host_help' => 'El nombre del host es la <strong>URL base</strong> de su sitio web. No incluya las subcarpetas del campo Ruta de instalación ni http(s):// aquí.',
    'database_error' => 'Por favor, asegúrese de que todos los campos han sido rellenados.',
    'submit' => 'Enviar',
    'installer_now_initialising_database' => 'El instalador está ahora inicializando la base de datos. Esto puede tardar un poco...',
    'configuration' => 'Configuración',
    'configuration_info' => 'Por favor, introduzca información básica sobre su sitio. Estos valores pueden ser modificados posteriormente a través del panel de administración.',
    'configuration_error' => 'Por favor, introduzca un nombre de sitio válido de entre 1 y 32 caracteres, y direcciones de correo electrónico válidas de entre 4 y 64 caracteres.',
    'site_name' => 'Nombre del sitio',
    'contact_email' => 'Dirección de correo electrónico de contacto',
    'outgoing_email' => 'Dirección de correo electrónico de salida',
    'language' => 'Idioma',
    'initialising_database_and_cache' => 'Iniciando base de datos y caché, por favor espere...',
    'unable_to_login' => 'No se puede iniciar sesión.',
    'unable_to_create_account' => 'No se puede crear una cuenta',
    'input_required' => 'Introduzca un nombre de usuario, una dirección de correo electrónico y una contraseña válidos.',
    'input_minimum' => 'Asegúrese de que su nombre de usuario tenga un mínimo de 3 caracteres, su dirección de correo electrónico un mínimo de 4 caracteres y su contraseña un mínimo de 6 caracteres.',
    'input_maximum' => 'Asegúrese de que su nombre de usuario tenga un máximo de 20 caracteres, y que su dirección de correo electrónico y su contraseña tengan un máximo de 64 caracteres.',
    'email_invalid' => 'Su dirección de correo electrónico no es válido.',
    'passwords_must_match' => 'Sus contraseñas deben coincidir.',
    'creating_admin_account' => 'Creación de una cuenta de administrador',
    'enter_admin_details' => 'Introduzca los datos de la cuenta de administrador.',
    'username' => 'Nombre de usuario',
    'email_address' => 'Dirección de correo electrónico',
    'password' => 'Contraseña',
    'confirm_password' => 'Confirme la contraseña',
    'upgrade' => 'Actualizar',
    'input_v1_details' => 'Introduzca los datos de la base de datos de su instalación de Nameless versión 1.',
    'installer_upgrading_database' => 'Por favor, espere mientras el instalador actualiza su base de datos...',
    'errors_logged' => 'Se han registrado errores. Haga clic en "Continuar" para seguir con la actualización.',
    'continue' => 'Continuar',
    'convert' => 'Convertir',
    'convert_message' => 'Por último, ¿quieres convertir desde un software de foro diferente?',
    'yes' => 'Sí',
    'no' => 'No',
    'converter' => 'Convertidor',
    'back' => 'Volver',
    'unable_to_load_converter' => 'No se puede cargar el convertidor.',
    'finish' => 'Finalizar',
    'finish_message' => '¡Gracias por instalar NamelessMC! Ahora puede pasar al panel de administración, donde puede seguir configurando su sitio web.',
    'support_message' => 'Si necesitas ayuda, consulta nuestra página web <a href="https://namelessmc.com" target="_blank">aquí</a>, o también puedes visitar nuestro <a href="https://discord.gg/nameless" target="_blank">servidor de Discord</a> o nuestro <a href="https://github.com/NamelessMC/Nameless/" target="_blank">repositorio de GitHub</a>.',
    'credits' => 'Créditos',
    'credits_message' => 'Un enorme agradecimiento a todos los <a href="https://github.com/NamelessMC/Nameless/graphs/contributors" target="_blank">colaboradores de NamelessMC</a> desde 2014',

    'step_home' => 'Inicio',
    'step_requirements' => 'Requisitos',
    'step_general_config' => 'Configuración general',
    'step_database_config' => 'Configuración de la base de datos',
    'step_site_config' => 'Configuración del sitio web',
    'step_admin_account' => 'Cuenta del administrador',
    'step_conversion' => 'Conversión',
    'step_finish' => 'Finalizar',

    'general_configuration' => 'Configuración general',
    'reload' => 'Recargar',
    'reload_page' => 'Recargar la página',
    'no_converters_available' => 'No hay convertidores disponibles.',
    'config_not_writable' => 'El archivo de configuración no es escribible.',

    'session_doesnt_exist' => 'No se puede detectar la sesión. Guardar las sesiones es un requisito para utilizar Nameless. Por favor, inténtelo de nuevo y, si el problema persiste, póngase en contacto con su proveedor de servidores web para obtener ayuda.'
);