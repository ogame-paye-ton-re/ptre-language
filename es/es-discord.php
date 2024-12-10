<?php

    $lang_discord = ["discord_univers_label" => "Ninguno",
"discord_yes" => "Sí",
"discord_no" => "No",
"discord_force_filtering" => "Solo filtrado ",
"discord_no_association" => "Ningún equipo asociado a este Discord. Debes copiar y pegar tu clave de Discord aquí (wo-xxxx-xxxx...).\nConfiguración de Discord: https://ptre.chez.gg/?page=discord_integration",
"discord_help_title" => "**Ayuda PTRE**\n\n",
"discord_help_config" => "**Configuración:**",
"discord_help_team" => "Tu equipo: ",
"discord_help_def" => "Universo predeterminado: ",
"discord_help_ogl_chan" => "Canal de empuje: ",
"discord_help_auto_chan" => "canales de búsqueda automática: ",
"discord_help_galainfo_chan" => "Notificaciones de galaxias: ",
"discord_help_verbose" => "Informes detallados: ",
"discord_help_graveyard" => "Cementerio: ",
"discord_help_1" => "**Comandos de configuración:**\n",
"discord_help_2" => "`!ptre !lang <lang>`: Establecer idioma. Ej: `!ptre !lang en`\n",
"discord_help_3" => "`!ptre !default <country>-<universe_id>` (ejemplo: `!ptre !default en-123`) : Establecer universo predeterminado para todos los comandos.\n",
"discord_help_4" => "`!ptre !push`: Establezca el canal predeterminado para las notificacións de informes de espionaje: todos los informes (como los de OGLight, Infinity, EasyPTRE) se enviarán aquí.\n",
"discord_help_5" => "`!ptre !details`: Alternar el modo detallado.\n",
"discord_help_6" => "`!ptre !gala <rank>`: Habilitar notificaciones de galaxias (top 2000 máx.)\n",
"discord_help_7" => "`!ptre !autochannel`: Habilite la detección automática de canales. Usa esta opción si estás jugando en varios universos. PTRE encontrará el canal correcto para publicar: tendrás que cambiar el nombre de los canales como `ptre-fr-123`\n\n",
"discord_help_8" => "**Comandos:**\n",
"discord_help_9" => "`!ptre`: Muestra ayuda.\n`!ptre palabra`: busca el juego que coincida con la palabra y muestra el resumen del jugador (no es necesario escribir el nombre completo del juego, puedes escribir `!ptre lex` para encontrar a Alexander).\n`!ptre \"ingame name\"`: Haga una búsqueda EXACTA y muestra el resumen del reproductor (debe escribir `!ptre \"alexander\"` para encontrar a alejandro).\n",
"discord_help_10" => "`!ptre !last [!uni <country>-<universe_id>]`: Muestra los últimos informes de espionaje.\n",
"discord_help_11" => "`!ptre !last !bunk [!uni <country>-<universe_id>]`: Muestra los últimos búnkers.\n",
"discord_help_12" => "`!ptre !top [!uni <country>-<universe_id>]`: Muestra flotas.\n",
"discord_help_13" => "`!ptre !mb <moon size>`: Calcule la cantidad de estrellas de la muerte necesarias para destruir la luna (100%).\n\n",
"discord_help_14" => "**Note:**\n",
"discord_help_15" => "Los comandos entre [] no son obligatorios.\n",
"discord_help_16" => "Agregar `!uni <country>-<universe_id>` para filtrar a este universo.\n\n",
"discord_help_17" => "**Ejemplos:**\n",
"discord_help_18" => "`!ptre !last`: Últimos informes de espionaje para todo su universo (o solo el universo predeterminado si está definido).\n",
"discord_help_19" => "`!ptre !top !uni fr-111`: Flotas para FR-111.\n",
"discord_help_20" => "`!ptre john !uni fr-111`: Informe de espionaje de John en FR-111.\n",
"discord_help_21" => "`!ptre !default fr-111`: Establece FR-111 como universo predeterminado.\n\n **Política de privacidad:** https://ptre.chez.gg/?page=privacy \n",
"discord_last_sr" => "Últimos informes de espionaje",
"discord_def_chan_on" => "OGLight / El canal predeterminado está configurado: todos los informes se enviarán a este canal (la detección automática de canales está deshabilitada).",
"discord_def_chan_off" => "OGLight / Se eliminó el canal predeterminado: los informes se enviarán al último canal utilizado durante los envíos de Discord. Puede escribir el comando nuevamente para habilitar el canal predeterminado.",
"discord_def_chan_auto_is_on" => "OGLight / El canal predeterminado está configurado (el modo de canal automático aún está activado).",
"discord_auto_chan_on" => "La detección automática de canales está habilitada. PTRE encontrará automáticamente canales coincidentes.\n1. Para informes de espionaje, nombre sus canales como `ptre-XX-YYY` (como `ptre-fr-123` y `ptre-de-666`). Este canal actual (el de aquí) se utilizará si no se encuentra ningún canal coincidente (según el nombre del canal).\n2. Para notificaciones de galaxias, nombre sus canales como `ptre-XX-YYY-gala` (como `ptre-fr-123-gala` y `ptre-de-666-gala`). Es posible que desees habilitar las notificaciones de galaxias escribiendo `!ptre !gala` en su canal de galaxia predeterminado.\n\nEjemplos:\n```\nptre-default\nptre-fr-123\nptre-de-666\nptre-fr-123-gala\nptre-de-666-gala\nptre -gala-default```",
"discord_auto_chan_off" => "Canal automático deshabilitado. Escriba `!ptre` para mostrar la configuración. Puedes reconfigurar el canal predeterminado y el canal de notificaciones de Galaxy..",
"graveyard_chan_on" => "El canal Cementerio está configurado: todas las notificaciones se enviarán aquí.\nPara deshabilitar las notificaciones: `!ptre !graveyard off`.\nPuntos militares mínimos = ",
"graveyard_chan_off" => "El canal Graveyard ha sido desactivado: ya no recibirás notificaciones.",
"galainfos_chan_on" => "El canal predeterminado de notificaciones de Galaxy está configurado: las notificaciones de Galaxy se enviarán aquí.\nPara deshabilitar las notificaciones: `!ptre !gala off`.\nPara actualizar el umbral (rango general máximo) : `!ptre !gala <rank>`, ej : `!ptre !gala 500`\nRango mínimo actual para notificar = ",
"galainfos_chan_off" => "El canal Gala Infos ha sido deshabilitado: ya no recibirás notificaciones.",
"verbose_mode_on" => "El modo detallado ha sido habilitado.",
"verbose_mode_off" => "El modo detallado ha sido deshabilitado.",
"discord_fleet_top" => "Parte superior de la flota",
"discord_search" => "Investigación",
"discord_exact_search" => "investigacion exacta",
"discord_parsing_error" => "Error de sintáxis. Escriba `!ptre` para mostrar la ayuda.\nLa palabra clave buscada debe estar justo después `!ptre`.\n",
"discord_sr_already_in_bdd" => "RS ya existe: ",
"discord_import_error" => "No puedo agregar este informe: ",
"discord_set_default_uni" => "Universo predeterminado: ",
"discord_set_default_uni_missing_sr" => "Advertencia: no se encontró ningún informe de espionaje para este universo.",
"discord_import_new_sr" => "Nuevo informe de espía: ",
"discord_import_invalid_request" => "Error. Solicitud no válida.",
"discord_fleet_point" => "Puntos de flota: ",
"discord_ship_nb" => "Número de naves: ",
"discord_resources" => "Recursos: ",
"discord_defences" => "Defensas: ",
"discord_tech" => "Investigaciones: ",
"discord_fleet" => "Flota: ",
"discord_player_profile" => "Perfil PTRE, flota superior, actividades dentro del juego",
"moon" => "Moon",
"planet" => "Planet",
"moon_short" => "M",
"planet_short" => "P",
"class_label" => "Clase: ",
"collector" => "Recolector",
"general" => "General",
"discoverer" => "Descubridor",
"no_class" => "Sin clase",
"activity_label" => "Actividad: ",
"spy_label" => "Espiar: ",
"profile_label" => "Perfil: ",
"best_report_label" => "Mejor informe de flota : ",
"mb_tool_before" => "Tamaño de la luna: ",
"mb_tool_after" => " Se necesitan estrellas de la muerte para tener un 100% de posibilidades de destruir la luna..",
"flash_no_def_uni" => "**Error: Necesitas seleccionar un universo.:** `!ptre !default fr-666`, por ejemplo.",
"flash_exact_match_fail_before" => "**No puedo encontrar una coincidencia EXACTA para \"",
"flash_exact_match_fail_after" => "\".\nIntenta buscar sin \" \" .**",
"flash_search_fail_before" => "**No puedo encontrar pareja para \"",
"flash_search_fail_after" => "\". Pruebe con menos letras o vuelva a verificar el universo predeterminado.**",
"flash_player_found_no_sr_before" => "**Jugador encontrado \"",
"flash_player_found_no_sr_middle" => "\" (#",
"flash_player_found_no_sr_after" => "): pero no se encontró ningún informe.**",
"flash_ingame_activities" => "Actividades dentro del juego: ",
"flash_techno" => "Investigaciones: ",
"discord_no_fleet" => "Sin flota",
"ship_202" => "Nave pequeña de carga",
"ship_203" => "Nave grande de carga",
"ship_204" => "Cazador ligero",
"ship_205" => "Cazador pesado",
"ship_206" => "Crucero",
"ship_207" => "Nave de batalla",
"ship_208" => "Colonizador",
"ship_209" => "Reciclador",
"ship_210" => "Sonda de espionaje",
"ship_211" => "Bombardero",
"ship_212" => "Satélite solar",
"ship_213" => "Destructor",
"ship_214" => "Estrella de la muerte",
"ship_215" => "Acorazado",
"ship_217" => "Taladrador",
"ship_218" => "Segador",
"ship_219" => "Explorador",
"research_106" => "Tecnología de espionaje",
"research_108" => "Tecnología de computación",
"research_109" => "Tecnología militar",
"research_110" => "Tecnología de defensa",
"research_111" => "Tecnología de blindaje",
"research_113" => "Tecnología de energía",
"research_114" => "Tecnología de hiperespacio",
"research_115" => "Motor de combustión",
"research_117" => "Motor de impulso",
"research_118" => "Propulsor hiperespacial",
"research_120" => "Tecnología láser",
"research_121" => "Tecnología iónica",
"research_122" => "Tecnología de plasma",
"research_123" => "Red de investigación intergaláctica",
"research_124" => "Astrofísica",
"research_199" => "Tecnología de gravitón",
"def_401" => "Lanzamisiles",
"def_402" => "Láser pequeño",
"def_403" => "Láser grande",
"def_404" => "Cañón gauss",
"def_405" => "Cañón iónico",
"def_406" => "Cañón de plasma",
"def_407" => "Cúpula pequeña de protección",
"def_408" => "Cúpula grande de protección",
"def_502" => "Misiles antibalísticos",
"def_503" => "Misil interplanetario",
"building_1" => "Mina de metal",
"building_2" => "Mina de cristal",
"building_3" => "Sintetizador de deuterio",
"building_4" => "Planta de energía solar",
"building_12" => "Planta de fusión",
"building_14" => "Fábrica de robots",
"building_15" => "Fábrica de nanobots",
"building_21" => "Hangar",
"building_22" => "Almacén de metal",
"building_23" => "Almacén de cristal",
"building_24" => "Contenedor de deuterio",
"building_31" => "Laboratorio de investigación",
"building_33" => "Terraformer",
"building_34" => "Depósito de la alianza",
"building_36" => "Astillero orbital",
"building_41" => "Base lunar",
"building_42" => "Sensor Phalanx",
"building_43" => "Salto cuántico",
"building_44" => "Silo",
"no_previous_report_found" => "No hay RS previo para comparar"];