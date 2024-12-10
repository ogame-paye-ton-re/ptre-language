<?php

    $lang_team = ["team_title" => "Gestión de equipos: ", 'team_managment_title' => 'Administración del equipo: ', 'team_meta_team_title' => 'Gestión de coaliciones',
"team_connected_as_admin" => "Estás conectado como Administrador del equipo ",
"team_no_discord_server" => '<span class="status_negatif">¡No hay ningún servidor de Discord asociado a tu equipo! Configurar la asociación te permitirá enviar informes de espionaje desde Discord, realizar búsquedas, etc.</span><br><br>=> <a href="/?page=discord_integration">Configurar la integración de Discord</a>',
"team_discord_server_status" => " ¡Servidores de Discord asociados a tu equipo!</span><br>Si no es correcto, comunícate con el soporte.",
"team_invit_key_title" => "Clave de equipo (clave de invitación)",
"team_invit_key_comment" => "Puede proporcionar esta clave a todos los miembros de tu equipo/alianza<br>para permitirles conectarse al sitio web de PTRE y obtener informes de espionaje privados.",
"team_admin_key_title" => "clave de administrador",
"team_admin_key_comment" => '<span class="status_warning">Solo para administradores (jefes, etc.).</span> <span class="status_negatif">¡Manténla segura!</span><br>Esta clave debes guardarla en tu navegador<br>para permitir volver a conectarte como administrador la próxima vez (no funciona con navegación privada).<br>Debes guardar esta clave en otro lugar, en caso de que limpies tus "cookies".',
"team_wo_key_title" => "Clave API-WO (discord)",
"team_wo_key_comment" => 'Clave de asociación para el bot de Discord<br>Una vez que el bot PTRE esté instalado en tu servidor de Discord (<a href="/?page=discord_integration">marca aquí</a>),<br>copia y pega esta clave en un canal para que tu servidor de Discord coincida con tu equipo.',
"team_member_title" => "Miembro del equipo de ",
"team_admin_title" => "administrador de ",
"team_member_comment_part1" => 'Estas conectado como <span class="status_warning">miembro</span> de <span class="status_positif">',
"team_member_comment_part2" => '</span>.<br>Sólo un <span class="status_warning">Administrador</span> puede gestionar el equipo.',
"team_member_no_discord_server" => '¡No hay ningún servidor de Discord asociado a tu equipo!<br>Pídele a un administrador (como creador el tu equipo) que lo haga.',
"team_multi_team_title" => "Gestión de equipos múltiples",
"team_multi_team_comment" => 'Aquí, <span class="status_positif">puedes unirte a otros equipos PTRE</span> sin desconectarte de tu equipo actual.<br><b>Agregar un nuevo equipo (TM-XXXX o AD-XXXX)</b> : ',
"team_multi_team_list_title" => "Lista de tus equipos disponibles actualmente:",
"team_multi_team_name" => "Nombre",
"team_multi_team_swap_title" => "Cambiar a este equipo",
"team_multi_team_delete_title" => "Eliminar esta clave",
"team_multi_team_swap_link" => "Intercambio",
"team_multi_team_swap_tooltip" => "Conéctate al equipo",
"team_multi_team_delete_link" => "Borrar",
"team_multi_team_delete_tooltip" => "Eliminar esta clave",
"team_multi_add_button" => "Agregar un equipo",
"team_multi_table_warning" => '<i>No es necesario que agregues tu equipo actual.<br>La tabla estará vacía si estás conectado a un solo equipo.</i>',
"team_pub_connect_title" => "Conéctate a un equipo existente",
"team_pub_connect_comment" => 'Introduce tu PTRE <span class="status_positif">Clave de equipo (o clave de administrador)</span>:<br><br>
            (Si no tienes ninguna clave, pregunta al creador del equipo.)',
"team_pub_connect_button" => "Conéctate a mi equipo",
"team_pub_create_title" => "Crear un nuevo equipo",
"team_pub_create_comment" => 'Crear un equipo te permitirá <span class="status_positif">obtener una area privada</span> (en el sitio web de PTRE) donde podrás <span class="status_positif">agregar informes de espionaje privados</span>.<br>
        Esos informes <span class="status_positif">solo se compartiran entre los miembros de tu equipo</span> (personas que obtengan la clave de invitación).<br><br>
        Tu también puedes <span class="status_positif">envíar / compartir / investigar todos los informes de espionaje directamente desde Discord</span>.<br><br>
            Un equipo podría ser:<br>
                - una alianza dentro del juego<br>
                - una fusión de múltiples alianzas dentro del juego<br>
                - Un grupo de amigos<br><br><br>

                Ingresar <span class="status_positif">el nombre de tu equipo</span>:',
"team_pub_create_button" => "Crear mi nuevo Equipo/Alianza",
"team_pub_create_warning" => '<span class="status_warning">Advertencia: no necesitas crear un nuevo equipo cuando cambias tu universo dentro del juego.<br>Un equipo puede gestionar varios universos.</span>',
"team_pub_contact_msg" => '<span class="status_warning large_text">Si tienes algún problema (pérdida de clave PTRE, preguntas), comunícate con GeGe al <a href="https://discord.gg/WsJGC9G" target="_blank">Servidor de Discord PTRE</a>.</span>',
"team_rename_title" => 'Cambia el nombre de tu equipo',
"team_reset_team_key" => 'Restablecer clave de equipo',
"team_reset_sr" => 'Informar y purgar todos los RS',
"team_reset_team_key_message" => 'Restablecer TeamKey desconectará a todos los miembros del equipo.<br>Después de restablecerlo, debes darle la nueva TeamKey a los miembros de tu equipo.',
"team_reset_sr_message" => 'Si quieres purgar todos los RS de este universo:<br>Todos los informes de este universo se informarán y eliminarán en una semana.',
"team_rename_button" => 'Renombrar',
"team_rename_comment" => 'Puedes cambiar el nombre de tu equipo: de 2 a 30 caracteres',
"team_not_admin" => 'Error: Necesitas ser administrador para cambiar el nombre de tu equipo.',
"team_same_name" => 'Error: Por favor elige un nombre diferente.',
"team_rename_ok" => 'Tu equipo ha sido renombrado.',
"team_meta_team_intro" => '<span class="status_positif">Una coalición permite que dos equipos PTRE compartan todas sus actividades dentro del juego e información de galaxias (como planetas móviles).</span><br>Si eres parte de una Coalición, todas tus actividades se compartirán con tus compañeros de gira.<br>Esto es útil sólo si juegas en el mismo universo.<br><span class="status_warning">Los informes de espionaje no se comparten en una coalición.</span><br><br>Para crear una coalición, <span class="status_positif">agregue su nombre a continuación y espera la aprobación del administrador: </span><br>',
"team_main_discord" => 'Este Discord recibirá tus notificaciones externas. (OGLight)',
"team_disconnect_discord" => 'DESCONECTAR',
"team_login_keys" => "Claves de conexión",
"team_discord_servers" => "Servidores de discord"];