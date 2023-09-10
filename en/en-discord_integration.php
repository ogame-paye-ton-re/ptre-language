        "discord_integration_title" => "<h2>PTRE / Discord Setup</h2>",
        "discord_integration_intro" => '<center><b>This action allows PTRE bot to fetch and save all spy reports posted into your Discord server.</b></center><br><br>',
    	"discord_integration_not_connected" => 'You need to be connected as administrator (creator) to get your Discord association key.<br>You need to connect Discord to your Teams.</span><br><br><a href="/?page=team">Connect | Create Team</a>',
    	
    	"discord_integration_steps_part1" => '<h3>Integration steps:</h3><ol>
    	<li><b></span><a href="/?page=team">Create a team</a>. Save ADMIN key and give TEAM key to your mates.</b></li>
    	<li><b>Invit the PTRE bot to your Discord server</b> by <b>conecting yourself to Discord</b> in your browser and follow the <a href="https://discordapp.com/oauth2/authorize?&client_id=512294332058042388&scope=bot" target="_blank">link to invit PTRE bot</a>.<br>(PTRE bot does NOT need any administrator rights).</li>
    	<li><b>Configure bot\'s access</b>: Add bot to chan where you want it to detect spy reports.<br>(<i>You may also create a "<b>paye-ton-re</b>" channel and invit it only in this channel</i>).</li>
    	<li>Into a PTRE channel, <b>copy the WO key</b> ',

    	"discord_integration_steps_part2" => 'to match your Discord server with your team.</b>.<br>If you get a message saying "<i>Association done.</i>" its all fine !</li>
    	<li><b>Copy a spy report API key into Discord.</b> It should be imported into your PTRE Team.</li>
    	<li>Add a default universe with the command <b>!ptre !default [country]-[universe_id]</b>.</li>
    	<li>Check the help: <b>!ptre</b></li>
    	</ol>
    	<br><br><h3>Notes:</h3>
    	<ul><li>If you dont do the match between your Discord server and your Team, all reports posted will be public (as PTRE bot will not know to what team associate it).</li>
    	<li><b>A Discord server can only be associated to one single Team</b> (your team).</li>
    	<li>But, <b>several Discord servers can be associated to same PTRE Team</b> (your Discord server + your mate\'s one, for instance). You only need to copy the same WO key on each Discord servers</li>
    	<li>You may change the Team associated to a Discord server (by copying a new WO key)</li>
        <li><a href="/?page=privacy">Privacy Policy</a></li>
    	</ul>',
        "discord_integration_copy_key" => "Copy this key into Discord: ",