<?php

/**
 * LICENSE:
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @package		Bright Game Panel V2
 * @version		0.1
 * @category	Systems Administration
 * @author		warhawk3407 <warhawk3407@gmail.com> @NOSPAM
 * @copyright	Copyleft 2014, Nikita Rousseau
 * @license		GNU General Public License version 3.0 (GPLv3)
 * @link		http://www.bgpanel.net/
 */

/**
 * Load Plugin Controller
 */

require( MODS_DIR . '/' . basename(__DIR__) . '/admin.box.controller.class.php' );

// Init Controller
$controller = new BGP_Controller_Admin_Box();


// Get the method
if ( isset($_POST['task']) ) {
	$task = $_POST['task'];
}
else if ( isset($_GET['task']) ) {
	$task = $_GET['task'];
}
else {
	$task = 'None';
}


// Call the method
switch ($task)
{
	default:
		Flight::redirect('/400');
}

Flight::redirect('/403');