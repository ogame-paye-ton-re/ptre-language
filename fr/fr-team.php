<?php

    $lang_team = array(
        "team_title" => "Gestion de l'équipe : ",
        'team_managment_title' => 'Administration de l\'Equipe : ',
        'team_meta_team_title' => 'Gestion de vos Coalitions',
        "team_connected_as_admin" => "Vous êtes connecté en tant qu'admin de la team ",
        "team_no_discord_server" => '<span class="status_negatif">Aucun serveur Discord n\'est associé à votre équipe ! Faire l\'association vous permettra de pusher vos RE depuis Discord ou d\'effectuer des recherches, etc.</span><br><br>=> <a href="/?page=discord_integration">Configurer l\'intégration Discord</a>',
        "team_discord_server_status" => " serveur(s) Discord associé(s) à votre équipe !</span><br>Si le nombre vous parait anormal, contacter le support.",
        "team_invit_key_title" => "Clé d'équipe (Clé d'invitation)",
        "team_invit_key_comment" => "Vous pouvez donner cette clé aux membres de votre équipe<br>afin qu'ils se connectent au site et puissent consulter vos RE privés.",
        "team_admin_key_title" => "Clé Admin",
        "team_admin_key_comment" => '<span class="status_warning">A donner uniquement aux admins (chefs, par exemple).</span><br><span class="status_negatif">A conserver préciseusement !</span><br>Cette clé est sensée être enregistrée dans votre navigateur afin que vous puissiez vous reconnecter en admin (ne fonctionne pas en navigation privée). Vous pouvez noter cette clé ailleurs, au cas ou vos "cookies" seraient nettoyés.',
        "team_wo_key_title" => "Clé API-WO",
        "team_wo_key_comment" => 'Clé d\'association pour les bots / discord<br>Une fois le bot PTRE installé sur votre serveur Discord (<a href="/?page=discord_integration">procédure ici</a>),<br>copier cette clé sur un des chans oû se trouve le bot PTRE afin d\'effectuer l\'association entre votre équipe et votre serveur Discord.',

        "team_member_title" => "Membre de l'Equipe ",
        "team_admin_title" => "Admin de l'Equipe ",
        "team_member_comment_part1" => 'Vous êtes connecté en tant que <span class="status_warning">membre</span> de l\'équipe <span class="status_positif">',
        "team_member_comment_part2" => '</span>.<br>Seul un <span class="status_warning">Admin</span> de l\'équipe peut gérer l\'équipe.',
        "team_member_no_discord_server" => 'Aucun serveur Discord n\'est associé à votre équipe !<br>Demander à un Admin (le créateur de votre équipe, par exemple) de le faire.',

        "team_multi_team_title" => "Gestion Multi-Teams",
        "team_multi_team_comment" => 'Ici, <span class="status_positif">vous pouvez rejoindre d\'autres Equipes PTRE</span> sans vous déconnecter de votre Equipe actuelle.<br><b>Ajouter une nouvelle équipe (TM-XXXX ou AD-XXXX)</b> : ',
        "team_multi_team_list_title" => "Liste de vos équipes disponibles :",
        "team_multi_team_name" => "Nom",
        "team_multi_team_swap_title" => "Basculer vers<br>cette équipe",
        "team_multi_team_delete_title" => "Supprimer cette clé",
        "team_multi_team_swap_link" => "Basculer",
        "team_multi_team_swap_tooltip" => "Se connecter à cette équipe",
        "team_multi_team_delete_link" => "Supprimer",
        "team_multi_team_delete_tooltip" => "Supprimer cette clé",
        "team_multi_add_button" => "Ajouter une Equipe",
        "team_multi_table_warning" => '<i>Il n\'est pas nécessaire d\'ajouter votre équipe actuelle.<br>Il est normal que la liste soit vide si vous n\'êtes connecté qu\'à une seule équipe.</i>',

        "team_pub_connect_title" => "Se connecter à une équipe existante",
        "team_pub_connect_comment" => 'Entrer la <span class="status_positif">clé d\'équipe (ou la clé admin)</span> PTRE ci-dessous :<br><br>
            (si vous n\'avez pas la clé d\'équipe : la demander au créateur de votre équipe)',
        "team_pub_connect_button" => "Me connecter à mon Equipe",

        "team_pub_create_title" => "Créer une nouvelle équipe",
        "team_pub_create_comment" => 'Créer une équipe vous permettra de <span class="status_positif">disposer d\'un espace privé</span> (sur le site PTRE) dans lequel vous pourrez <span class="status_positif">ajouter vos propres RE qui deviendront privés</span>.<br>
            Ces RE seront <span class="status_positif">uniquement visible par les membres de votre équipe</span> (les personnes à qui vous donnerez les accès du site via une clé d\'invitation).<br><br>
            Vous pourrez aussi <span class="status_positif">stocker / partager / rechercher tous vos RE via votre discord</span>.<br><br>
            Une équipe peut correspondre à :<br>
                - une seule alliance IG<br>
                - un regroupement de plusieurs alliances<br>
                - un groupe de joueurs<br><br><br>

            Entrer le <span class="status_positif">nom de votre équipe</span> :',
        "team_pub_create_button" => "Créer une nouvelle équipe/alliance",
        "team_pub_create_warning" => '<span class="status_warning">Warning : Vous n\'avez pas besoin de créer une nouvelle équipe lorsque vous changer d\'univers<br>Une équipe peut gérer de multiples univers</span>',
        "team_pub_contact_msg" => '<span class="status_warning large_text">En cas de soucis (clé PTRE perdue, bug, etc), contacter GeGe sur le <a href="https://discord.gg/WsJGC9G" target="_blank">Discord PTRE</a>.</span>',
        "team_rename_title" => 'Renommer votre Equipe',
        "team_reset_team_key" => 'Reset TeamKey',
        "team_reset_sr" => 'Signaler puis supprimer tous les RE',
        "team_reset_team_key_message" => 'Régénérer la TeamKey va déconnecter tous les membres de votre Team.<br>Vous devrez redonner la nouvelle clé à tous vos alliés.',
        "team_reset_sr_message" => 'Si vous souhaitez supprimer tous les RE de cet univers :<br>tous les RE seront signalés et supprimés dans une semaine.',
        "team_rename_button" => 'Renommer',
        "team_rename_comment" => 'Vous pouvez renommer votre Equipe. Entre 2 et 30 caratères.',
        "team_not_admin" => 'Erreur : Il faut être Admin pour renommer l\'équipe.',
        "team_same_name" => 'Erreur : Veuillez choisir un nom différent de l\'actuel.',
        "team_rename_ok" => 'Votre Equipe a été renommée.',
        "team_meta_team_intro" => '<span class="status_positif">Une Coalition est un regroupement de deux Equipes PTRE qui souhaient mettre en commun TOUS leurs relevés d\'activiés Ingame <br>ainsi que les informations liées à la galaxie (telle que les volantes).</span><br>Si vous faites partie d\'une Coalition, alors toutes les activités PTRE seront partagées entre vos deux Equipes.<br>Cela ne présente un intérêt que si les deux Equipes alliées jouent sur le même univers.<br><span class="status_warning">Les rapports d\'espionnages ne sont pas partagés.</span><br><br>Pour créer une Coalition, vous devez <span class="status_positif">ajouter ci-dessous le nom de l\'autre Equipe et attendre qu\'un de leurs Admins approuve l\'invitation : </span><br>',
        "team_main_discord" => 'Ce Discord recevra les notifications externes (OGLight)',
        "team_disconnect_discord" => 'DECONNECTER',
        "team_login_keys" => "Clés de connexion",
        "team_discord_servers" => "Serveurs Discord",



  );