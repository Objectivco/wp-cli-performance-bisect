<?php
/*
Plugin Name: WP-CLI Plugin Bisect
Plugin URI: https://objectiv.co
Description: CLI tool for identifying problematic plugins.
Version: 1.0.0
Author: Objectiv
Author URI: https://objectiv.co

------------------------------------------------------------------------
Copyright 2009-2017 Clif Griffin Development Inc.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

namespace ObjectivPluginBisect;

define('OBJECTIV_PLUGIN_BISECT_SELF', plugin_basename(__FILE__) );

/**
 * Autoloader
 */
require_once 'lib/autoload.php';

/* Main Plugin Class */
$ObjectivPluginBisect = new App\Main();
$ObjectivPluginBisect->run();