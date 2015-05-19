<?php

/*
Plugin Name: PeriodicTable
Plugin URI: 
Description: 
Version: 1.0.0
Author: Renkin42
Author URI: 
License: MPL 2.0
*/

/* 
 * Copyright (C) 2015 arleydecker
 * 
 * This Source Code Form is subject to the terms of the Mozilla Public License, 
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can 
 * obtain one at http://mozilla.org/MPL/2.0/.
 */

function generate_table_func($atts) {
	return "foo";
}

add_shortcode('periodic_table', 'generate_table_func');
