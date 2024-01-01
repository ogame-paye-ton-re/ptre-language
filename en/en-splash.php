<?php

    $lang_splash = array(
        "splash_title" => "PTRE PRESENTATION",
        "splash_top_features_title" => "Top Features",
        "splash_configuration_title" => "PTRE configuration",
        "splash_features_title" => "Other Features",
        "splash_splash" => '<b>PTRE is an easy-to-use tool to save and share spy reports.</b> You can save spy reports from:
        <ul><li><b>Discord</b>, by installing the PTRE bot</li>
        <li><a href="https://openuserjs.org/scripts/nullNaN/OGLight" target="_blank">OGLight</a>, by installing the add-on into your browser</li>
        <li><a href="https://openuserjs.org/scripts/GeGe_GM/EasyPTRE" target="_blank">EasyPTRE for AGR</a></li>
        <li>OGame Infinity</li>
        <li>Directly through the website</li></ul>

        <b>Your spy reports will be shared only with your team mates</b>. PTRE can also create an ingame activity profile, manage and sort spy reports. 
        <br><br>To get started, you just need to <a href="/?page=team">create your team</a> and <a href="https://discordapp.com/oauth2/authorize?&client_id=512294332058042388&scope=bot" target="_blank">install PTRE bot</a>.
        <br><br>Bellow, you will find all PTRE features.',
        "splash_invitation_bot" => '<h3>Invit PTRE bot to your Discord server</h3>
            <br>To fully use PTRE features, you have to <a href="https://discordapp.com/oauth2/authorize?&client_id=512294332058042388&scope=bot" target="_blank">invit the PTRE bot</a> to your Discord server. 
            <br><br>The bot does <b>not need any administrator rights</b>.
            <br><br>And it does not need to be in each and every channels of your server.',
        "splash_channel" => '<h3>Configure bot\'s access</h3>
                    <br>As a basic user, invit the bot to some channels where you want it to detect spy reports:
                    <ul>
                        <li>To all your channels</li>
                        <li>Or only to a dedicated channel</li>
                    </ul>',
        "splash_associate" => '<h3>Create a Team and associate your Discord server</h3>
                    <a href="/?page=team">Create your Team</a> on the PTRE website. Then, get your <b>API-WO</b> key and copy it on a Discord channel to match your server to your team.

                    <br><br>All spy reports posted will be private to your team.
                    <br>You may associate several Discord servers to a same Team.

                    <br><br>Without association, spy reports will be public.',
        "ptre_example" => '<h3>Import spy reports from Discord</h3>
                    Copy-past spy reports API keys to your Discord server: it will be directly sent to the PTRE website and store into your team timeless database.<br><br><b>In addition, fleet evolution will be displayed!</b>',
        "splash_re" => '<h3>Check fleet evolution</h3>
                    Your spy reports are stored till you delete them. Even after being removed from OGame API, it will still be available for your team.

                    <br><br>In addition, <b>PTRE displays fleet evolution</b> across spy reports.',
        "splash_recherche" => '<h3>Player search via Discord</h3>
                    Find <b>all your spy reports via Discord</b>.<br><br>The player preview will contain: <ul><li>the best report</li><li>a link to PTRE profile</li><li>all his fleet last locations</li><li>number of ingame activities</li><li>previous nicknames</li></ul>',
        "splash_alias" => '<h3>Add an alias to spy reports</h3>
                    You can tag any spy report:
                    <ul>
                        <li>To <b>easily find it</b> during researches</li>
                        <li>Track IG boring renaming</li>
                    </ul>',
        "ptre_help" => '<h3>Advanced Discord research</h3>
                    The PTRE bot have many search options (universe, fleet, bunkers, etc).
                    <br><br><b>You can even manage multiple universes on your Discord server.</b>',
        "splash_search" => '<h3>Advanced research via PTRE</h3>
                    You may also use advanced research on the PTRE website.',
        "splash_report" => '<h3>Report deprecated spy reports</h3>
                    You can <b>report deprecated spy reports</b> to clean your database.',
        "splash_gestion" => '<h3>Spy reports management</h3>
                    Reported spy reports will be deleted after one week. You can cancel a reporting.

                    <br><br>You may also <b>archive spy reports</b> to keep them aside.',
        "multi_teams" => '<h3>Multi-Team management</h3>
                    You can join <b>several Teams</b> to use PTRE for each and every universe you are playing.

                    <br><br><b>Swap from a team to another with a simple click !</b>',
        "splash_flash" => '<h3>Flash report</h3>
                    Via one Discord command, <b>list all fleet positions</b> of any player!<br>(banks will be skipped)',
        "splash_oglight" => '<h3>OGLight / Infinity integration</h3>
                    
                    <b>PTRE is integrated with OGLight.</b> You can <b>directly push</b> your spy reports <b>from ingame through OGLight!</b>
                    <br><br>OGLight / PTRE can <b>display an ingame activity profile</b> (details bellow).
                    <br><br><a href="https://openuserjs.org/scripts/nullNaN/OGLight" target="_blank">Get started with OGLight!</a>
                    <br><i>(OGLight is not mandatory, but recommended)</i>',
        "oglight_activity_planning" => '<h3>Ingame activity profile (vie OGL)</h3>The <b>OGL/PTRE activity graphic is directly displayed ingame</b>.<br><br>The PTRE button (in the OGL pinned pannel) will display :<ul><li>the PTRE informations of the target</li><li>the activity profile</li><li>a link to the PTRE profile</li><li>a link to the best report</li></ul>',
        "ptre_activity_graph_short" => '<h3>Detailed activity profile</h3>On the PTRE website, you can have access to a detailed activity profile, such as :<ul><li><b>filtering only main planet activities</li><li>filtering week / week-end</li><li>filtering only ennemis spys (counter-spys)</li></ul></b>',
        "oglight_settings" => '<h3>OGLight Configuration</h3>Enter your Team key (TM-XXXX) in the OGLight settings.',
        "meta_team" => '<h3>Coalition</h3>A Coalition allow <b>two PTRE Teams to share all their ingame activites and galaxy informations (as mobiles planets).</b><br><br><i>(Spy reports will not be shared.)</i>',
        "ptre_profile" => 'On the PTRE profile page, you will find :<ul><li>the best report available</li><li>planet locations</li><li>activity graphic</li><li>all the spy reports</li></ul>',
        "oglight_import_spy_report_acti" => '<h3>Counter-Spy reports</h3>
        <b>All counter-spy reports are sent to PTRE to update activity database.</b> <br><br>(Thoses actvities stacks with classic activities catched from galaxy view)',
        "oglight_sync_planets" => '<h3>Planet / Moon sync over PTRE</h3>
                <b>PTRE/OGL syncs galaxy informations (coordinates) accross PTRE Coalition\'s users.</b><br><br>To demonstrate this feature: if Arthur finds Valentin\'s mobile moon in the galaxy, all members of Arthur\'s Coalition (and Team) will be able to see Valentin\'s mobile when they display OGL coordinates (even if they never saw Valentin\'s mobile).',
        "galaxy_event_explorer" => '<h3>Galaxy Event Explorer</h3><b>Follow what is going on ingame!</b><br>This feature merges data from public API (like in MMORPG) <b>with data sent by OGLight and Infinity</b>. Data are updated when you browse the galaxy and shared with your teamates.<br><br><a href="/?page=galaxy_event_explorer">TRY GALAXY EVENT EXPLORER</a>',
        "oglight_versus_infinity_1" => '<h3>Tool compatibility: OGLight VS OGame Infinity</h3><br>PTRE is fully integrated to OGLight.<br><br>On the OGame Infinity side (an OGLight fork): few features are missing, but you may still use the main features.<br><br>',
        "oglight_versus_infinity_2" => '<table class="main_tab" style="margin-bottom: 20px;" border="1" width="90%"><tr><td align="center"><b>Tool Feature</b></td><td align="center" width="150px"><span class="status_positif">OGLight</span></td><td align="center" width="150px"><b>Infinity</b></td><td align="center" width="150px"><b>EasyPTRE<br>(for AGR)</b><br><a href="https://openuserjs.org/scripts/GeGe_GM/EasyPTRE" target="_blank">Install</a></td></tr>
        <tr><td><img src="/img/ogame/mini/ship_210.png" width="20px"> [<a href="#splash_oglight">details</a>] Saving Spy Reports to PTRE</td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td></tr>
        <tr><td><img src="/img/discord-logo.png" width="20px"> [<a href="#ptre_example">details</a>] Pushing Spy Reports to Discord</td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td></tr>
        <tr><td><img src="/img/ogame/rank_military.png" width="20px"> [<a href="#oglight_activity_planning">details</a>] Displaying ingame PTRE best Spy report</td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_negatif">NO</span></td></tr>
        <tr><td><img src="/img/ogame/rank_defense.png" width="20px"> [<a href="#splash_oglight">details</a>] Sending player\'s actvities to PTRE</td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td></tr>
        <tr><td><img src="/img/ogame/research_106.png" width="20px"> [<a href="#oglight_import_spy_report_acti">details</a>] Sending counter spy messages to activity database</td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_negatif">NO</span></td></tr>
        <tr><td><img src="/img/ogame/research_108.png" width="20px"> [<a href="#oglight_activity_planning">details</a>] Displaying activity graphic</td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_negatif">NO</span></td></tr>
        <tr><td><img src="/img/ogame/planet_9.png" width="20px"> [<a href="#oglight_sync_planets">details</a>] Detecting and sending new planets / moons to Team database</td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_negatif">NO</span></td></tr>
        <tr><td><img src="/img/ogame/moon_3.gif" width="20px"> [<a href="#oglight_sync_planets">details</a>] Syncing back ingame new planets / moons from PTRE</td><td align="center"><span class="status_positif">YES</span></td><td align="center"><span class="status_negatif">NO</span></td><td align="center"><span class="status_negatif">NO</span></td></tr>
        <tr><td><img src="/img/ogame/player.png" width="20px"> [<a href="#ptre_target_list">details</a>] Syncing Ingame Team targets</td><td align="center"><span class="status_negatif">NO</span></td><td align="center"><span class="status_negatif">NO</span></td><td align="center"><span class="status_positif">YES</span></td></tr></table>',
        'easyptre' => '<h3>EasyPTRE for AGR</h3><b>If you are an AGR user</b>, you can install <a href="https://openuserjs.org/scripts/GeGe_GM/EasyPTRE" target="_blank">EasyPTRE</a>.<br>It\'s a tolerated tool that provides PTRE basic features for AGR.',
        "splash_position_8_finder" => '<h3>Position 8 Finder</h3>
                                       <a href="/?page=position_8_finder">An simple tool</a> to easily find the spot you need in your universe.<br><br>Just select the spot you want and browse free systems...',
        "oglight_sync_targets" => '<h3>Targets sync</h3>Sync targets over your Team.<br>Thoses targets will be available to activity tracking, data sharing and highlighted in galaxy.',
        "ptre_lifeforms_support" => '<h3>Lifeforms support</h3>PTRE supports Lifeforms: buildings, researchs, bonuses.',
        "ptre_moonbreak" => '<h3>Moonbreak calculator</h3>PTRE give you the right number of DS needed to get a 100% moonbreak.',
        "ptre_target_list" => '<h3>Ingame target list management</h3>Via PTRE website, manage targets you want to push ingame to your teammates. Thoses targets will be synced for activity tracking and highlighted in galaxy.',
        "galaxy_notification" => '<h3>Galaxy notifications</h3>Get notifications overs Discord about what is going on ingame. New moons created, player leaving positions, etc.<br><br>You may click on link to display Galaxy Event Explorer.',
        "ptre_auto_channel" => '<h3>Discord multi-universe</h3>If your Team is playing on several universes, you may use this setting to get clean notifications. Create channel alike the screenshot and type "!ptre !autochannel" on Discord to enable the feature.',
        "splash_compatibility_table_title" => 'Tools compatibility table',
  );