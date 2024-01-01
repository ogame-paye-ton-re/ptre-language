<?php

    $lang_discord_integration = array(
        "discord_integration_title" => "<h2>PTRE / Configuración de discord</h2>",
        "discord_integration_intro" => '<center><b>Esta acción permite al bot PTRE buscar y guardar todos los informes de espionaje publicados en tu servidor de Discord.</b></center><br><br>',
        "discord_integration_not_connected" => 'Debes estar conectado como administrador (creador) para obtener tu clave de asociación de Discord.<br>Necesitas conectar Discord a tus equipos.</span><br><br><a href="/?page=team">Conectar | Crear equipo</a>',
        
        "discord_integration_steps_part1" => '<h3>Pasos de integración:</h3><ol>
        <li><b></span><a href="/?page=team">Crear un equipo</a>. Guarde la clave ADMIN y da la clave de EQUIPO a tus compañeros.</b></li>
        <li><b>Invita al bot PTRE a tu servidor de Discord</b>  <b>conectate a Discord</b> en tu navegador y usa el <a href="https://discordapp.com/oauth2/authorize?&client_id=512294332058042388&scope=bot" target="_blank">enlace para invitar al bot PTRE</a>.<br>(El bot PTRE NO necesita ningún derecho de administrador).</li>
        <li><b>Configurar el acceso del bot</b>: Agrega un bot al canal donde quieras que detecte informes de espionaje.<br>(<i>También puedes crear un "<b>paye-ton-re</b>" canal e invitarlo solo en este canal</i>).</li>
        <li>En un canal PTRE, <b>copiar la clave WO</b> ',

        "discord_integration_steps_part2" => 'para hacer coincidir tu servidor de Discord con tu equipo.</b>.<br>Si recibes un mensaje que dice "<i>Asociación hecha.</i>" Todo está bien !</li>
        <li><b>Copia una clave API de informe de espionaje en Discord.</b> Debe importarse a su equipo PTRE..</li>
        <li>Agregua un universo predeterminado con el comando <b>!ptre !default [pais]-[universo_id]</b>.</li>
        <li>Consulta la ayuda: <b>!ptre</b></li>
        </ol>
        <br><br><h3>Notas:</h3>
        <ul><li>Si no realizas la coincidencia entre tu servidor de Discord y tu equipo, todos los informes publicados serán públicos (ya que el bot PTRE no sabrá a qué equipo asociarlo).</li>
        <li><b>Un servidor de Discord solo puede asociarse a un único equipo</b> (Tu equipo).</li>
        <li>Pero, <b>Se pueden asociar varios servidores de Discord al mismo equipo PTRE.</b> (tu servidor de Discord + el de tu amigo, por ejemplo). Solo necesitas copiar la misma clave WO en cada servidor de Discord</li>
        <li>Puedes cambiar el equipo asociado a un servidor de Discord (copiando una nueva clave WO)</li>
        <li><a href="/?page=privacy">política de privacidad</a></li>
        </ul>',
        "discord_integration_copy_key" => "Copia esta clave en Discord: ",

  );