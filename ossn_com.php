<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@openteknik.com>
 * @copyright (C) Engr.cArsalan Shah
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
function unloggedin_users_menu() {
			//if(!ossn_isLoggedin()){
				ossn_extend_view('ossn/site/head', 'unloggedinmenu/head');
		//	}
}
ossn_register_callback('ossn', 'init', 'unloggedin_users_menu');
