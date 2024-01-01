<?php

    $lang_discord_integration = array(
        "discord_integration_title" => "<h2>Configuration PTRE / Discord</h2>",
        "discord_integration_intro" => '<center><b>Cette action permet au bot PTRE de récupérer toutes les API de RE<br> que vous posterez sur les channels de votre discord.</b></center><br><br>',
        "discord_integration_not_connected" => 'Vous devez être connecté en tant qu\'administrateur (ou créateur) d\'équipe pour récupérer votre clé d\'association Discord.<br>Sans cela, vous ne pourrez pas connecter votre Discord à votre équipe.</span><br><br><a href="/?page=team">Se connecter | Créer Equipe</a>',
        
        "discord_integration_steps_part1" => '<h3>Etapes à suivre :</h3><ol>
        <li><b></span><a href="/?page=team">Créer une Equipe</a>. Sauvegarder la clé ADMIN, donner la clé TEAM à vos alliés.</b></li>
        <li><b>Inviter le bot PTRE sur votre serveur Discord</b>. Pour cela, <b>connecter vous à Discord</b> dans votre navigateur et suivez le <a href="https://discordapp.com/oauth2/authorize?&client_id=512294332058042388&scope=bot" target="_blank">lien afin d\'inviter le bot Paye-Ton-RE</a>.<br>(Il n\'est pas nécessaire que le bot ait les droits administrateur).</li>
        <li><b>Configurer les droits d\'accès du bot</b> : Ajouter le bot dans les canaux oû vous souhaiter détecter et sauvegarder les RE.<br>(<i>Vous pouvez, par exemple, créer un channel dédié "<b>paye-ton-re</b>" et ne pas l\'inviter ailleurs</i>).</li>
        <li>Dans un channel oû le bot PTRE se trouve, <b>copier la clé WO</b> ',

        "discord_integration_steps_part2" => 'afin d\'effectuer la <b>correspondance entre votre équipe et votre serveur Discord</b>.<br>Si vous recevez un message du bot disant "<i>Association faite.</i>" alors le tour est joué !</li>
        <li><b>Copier/coller une clé API de RE sur votre Discord.</b> Celui-sera alors importé dans votre Equipe.</li>
        <li>Ajouter un univers par défaut via la commande <b>!ptre !default [pays]-[univers_id]</b>.</li>
        <li>Consulter l\'aide : <b>!ptre</b></li>
        </ol>
        <br><br><h3>Notes :</h3>
        <ul><li>Si vous ne faites pas la correspondance WO entre votre serveur Discord et votre équipe, alors tous les RE postés sur votre Discord seront publics (étant donné que le bot ne saura pas à qui les attribuer).</li>
        <li><b>Un serveur Discord ne peut pointer que vers une seule Equipe</b> (la votre).</li>
        <li>Par contre, <b>plusieurs serveurs Discord différents peuvent pointer vers la même Equipe</b> (votre serveur + le serveur de vos alliés, par exemple). Il suffit que les serveurs Discord alliés utilisent la clé WO de la même équipe.</li>
        <li>Vous pouvez changer l\'équipe associée à votre serveur Discord à tout moment (en copiant-collant une autre clé WO).</li>
        <li><a href="/?page=privacy">Politique de confidentialité</a></li>
        </ul>',
        "discord_integration_copy_key" => "Copier cette clé dans Discord : ",

  );