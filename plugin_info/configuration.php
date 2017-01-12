<?php
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
include_file('core', 'authentification', 'php');
if (!isConnect()) {
	include_file('desktop', '404', 'php');
	die();
}
?>


<form class="form-horizontal">
    <fieldset>
            <legend><i class="icon loisir-darth"></i> {{Aide au développement}}</legend>
			<span><i>Ce plugin est gratuit, le don est laissé au libre choix de chacun en fonction de sa satisfaction pour m'aider au développement. Merci.</i></span>
			<div class="form-group" align="center">	
                <div align="center">
					<a class="btn" id="bt_paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7BBF45ZDD9Y8L" target="_new" >
					<img src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" alt="{{Faire un don via Paypal au développeur}}">
					<img alt="" border="0" src="https://www.paypalobjects.com/fr_XC/i/scr/pixel.gif" width="1" height="1">
					</a>
               </div>
           </div>		
    </fieldset>

	<fieldset>
            <legend><i class="icon loisir-darth"></i> {{Fréquence d'actualisation des Flux RSS}}</legend>
			<div class="form-group">
            <label class="col-sm-4 control-label">{{Actualiser le Flux RSS : }}</label>
				<div class="col-sm-2">
					<select class="configKey form-control" data-l1key="frequence">
						<option value="1m">toutes les minutes</option>
						<option value="5m">toutes les 5 minutes</option>
						<option value="15m">toutes les 15 minutes</option>
						<option value="30m">toutes les 30 minutes</option>
						<option value="1h">1 fois par heure</option>
						<option value="1j">1 fois par jour</option>
					</select>
               </div>
           </div>		
    </fieldset>
</form>