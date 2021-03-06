<?php
/**
 * fbsync
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author NOIJN <skjnldsv@protonmail.com>
 * @copyright NOIJN 2015
 */
?>

<div id="app-settings">
	<div id="app-settings-header">
		<button class="settings-button"
				data-apps-slide-toggle="#app-settings-content"
		></button>
		<div id="login-status" class="tooltipped" title="Facebook status">Facebook status: <span>loading</span></div>
	</div>
	<div id="app-settings-content">
		<i>Credentials</i><br>
		<input type="text" id="fbemail" placeholder="User" /><br>
		<input type="password" id="fbpass" placeholder="Password" />
		<input type="button" value="Login"
			   title="Login will override previously stored credentials" class="tooltipped" id="fblogin" />
		<button id="delcookie" class="fa-trash tooltipped" title="Remove stored credentials"></button>
	</div>
</div>