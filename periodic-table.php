<?php

/*
  Plugin Name: PeriodicTable
  Plugin URI:
  Description:
  Version: 1.0.0
  Author: Renkin42
  Author URI:
  License: MPL 2.0

  Copyright (C) 2015 Austin Leydecker
  
  This Source Code Form is subject to the terms of the Mozilla Public License, 
  v. 2.0. If a copy of the MPL was not distributed with this file, You can 
  obtain one at http://mozilla.org/MPL/2.0/.
 */

$search = array('%nameupper%', '%namelower%', '%symbolupper%', '%symbollower%', '%number%', '%0number%' , '%group%');

/* Elements */
$H = array('Hydrogen', 'hydrogen', 'H', 'h', 1, '001', 'nonmetal');
$He = array('Helium', 'helium', 'He', 'he', 2, '002', 'noble-gas');
$Li = array('Lithium', 'lithium', 'Li', 'li', 3, '003', 'alkali-metal');
$Be = array('Beryllium', 'beryllium', 'Be', 'be', 4, '004', 'alkaline-metal');
$B = array('Boron', 'boron', 'B', 'b', 5, '005', 'metalloid');
$C = array('Carbon', 'carbon', 'C', 'c', 6, '006', 'nonmetal');
$N = array('Nitrogen', 'nitrogen', 'N', 'n', 7, '007', 'nonmetal');
$O = array('Oxygen', 'oxygen', 'O', 'o', 8, '008', 'nonmetal');
$F = array('Fluorine', 'fluorine', 'F', 'f', 9, '009', 'halogen');
$Ne = array('Neon', 'neon', 'Ne', 'ne', 10, '010', 'noble-gas');
$Na = array('Sodium', 'sodium', 'Na', 'na', 11, '011', 'alkali-metal');
$Mg = array('Magnesium', 'magnesium', 'Mg', 'mg', 12, '012', 'alkaline-metal');
$Al = array('Aluminum', 'aluminum', 'Al', 'al', 13, '013', 'metal');
$Si = array('Silicon', 'silicon', 'Si', 'si', 14, '014', 'metalloid');
$P = array('Phosphorus', 'phosphorus', 'P', 'p', 15, '015', 'nonmetal');
$S = array('Sulfur', 'sulfur', 'S', 's', 16, '016', 'nonmetal');
$Cl = array('Chlorine', 'chlorine', 'Cl', 'cl', 17, '017', 'halogen');
$Ar = array('Argon', 'argon', 'Ar', 'ar', 18, '018', 'noble-gas');
$K = array('Potassium', 'potassium', 'K', 'k', 19, '019', 'alkali-metal');
$Ca = array('Calcium', 'calcium', 'Ca', 'ca', 20, '020', 'alkaline-metal');
$Sc = array('Scandium', 'scandium', 'Sc', 'sc', 21, '021', 'transition-metal');
$Ti = array('Titanium', 'titanium', 'Ti', 'ti', 22, '022', 'transition-metal');
$V = array('Vanadium', 'vanadium', 'V', 'v', 23, '023', 'transition-metal');
$Cr = array('Chromium', 'chromium', 'Cr', 'cr', 24, '024', 'transition-metal');
$Mn = array('Manganese', 'manganese', 'Mn', 'mn', 25, '025', 'transition-metal');
$Fe = array('Iron', 'iron', 'Fe', 'fe', 26, '026', 'transition-metal');
$Co = array('Cobalt', 'cobalt', 'Co', 'co', 27, '027', 'transition-metal');
$Ni = array('Nickel', 'nickel', 'Ni', 'ni', 28, '028', 'transition-metal');
$Cu = array('Copper', 'copper', 'Cu', 'cu', 29, '029', 'transition-metal');
$Zn = array('Zinc', 'zinc', 'Zn', 'zn', 30, '030', 'transition-metal');
$Ga = array('Gallium', 'gallium', 'Ga', 'ga', 31, '031', 'metal');
$Ge = array('Germanium', 'germanium', 'Ge', 'ge', 32, '032', 'metallod');
$As = array('Arsenic', 'arsenic', 'As', 'as', 33, '033', 'metalloid');
$Se = array('Selenium', 'selenium', 'Se', 'se', 34, '034', 'nonmetal');
$Br = array('Bromine', 'bromine', 'Br', 'br', 35, '035', 'halogen');
$Kr = array('Krypton', 'krypton', 'Kr', 'kr', 36, '036', 'noble-gas');
$Rb = array('Rubidium', 'rubidium', 'Rb', 'rb', 37, '037', 'alkali-metal');
$Sr = array('Strontium', 'strontium', 'Sr', 'sr', 38, '038', 'alkaline-metal');
$Y = array('Yttrium', 'yttrium', 'Y', 'y', 39, '039', 'transition-metal');
$Zr = array('Zirconium', 'zirconium', 'Zr', 'zr', 40, '040', 'transition-metal');
$Nb = array('Niobium', 'niobium', 'Nb', 'nb', 41, '041', 'transition-metal');
$Mo = array('Molybdenum', 'molybdenum', 'Mo', 'mo', 42, '042', 'transition-metal');
$Tc = array('Technetium', 'technetium', 'Tc', 'tc', 43, '043', 'transition-metal');
$Ru = array('Ruthenium', 'ruthenium', 'Ru', 'ru', 44, '044', 'transition-metal');
$Rh = array('Rhodium', 'rhodium', 'Ru', 'ru', 45, '045', 'transition-metal');
$Pd = array('Palladium', 'palladium', 'Pd', 'pd', 46, '046', 'transition-metal');
$Ag = array('Silver', 'silver', 'Ag', 'ag', 47, '047', 'transition-metal');
$Cd = array('Cadmium', 'cadmium', 'Cd', 'cd', 48, '048', 'transition-metal');
$In = array('Indium', 'indium', 'In', 'in', 49, '049', 'metal');
$Sn = array('Tin', 'tin', 'Sn', 'sn', 50, '050', 'metal');
$Sb = array('Antimony', 'antimony', 'Sb', 'sb', 51, '051', 'metalloid');
$Te = array('Tellurium', 'tellurium', 'Te', 'te', 52, '052', 'metalloid');
$I = array('Iodine', 'iodine', 'I', 'i', 53, '053', 'halogen');
$Xe = array('Xenon', 'xenon', 'Xe', 'xe', 54, '054', 'noble-gas');

function pt_generate_table_func( $atts ) {
	$a = shortcode_atts(array(
		'url' => 'http://renkin42.net/project-updates/other/elements/%0number%-%namelower%/',
		'num' => 118
	), $atts);
	$url = $a['url'];
	$num = $a['num'];
	$table = '<table class="periodic-table">
		<tr>
		'.pt_get_element_table_slot('H', $url, $num).'
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		'.pt_get_element_table_slot('He', $url, $num).'
		</tr>
		<tr>
		'.pt_get_element_table_slot('Li', $url, $num).'
		'.pt_get_element_table_slot('Be', $url, $num).'
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		'.pt_get_element_table_slot('B', $url, $num).'
		'.pt_get_element_table_slot('C', $url, $num).'
		'.pt_get_element_table_slot('N', $url, $num).'
		'.pt_get_element_table_slot('O', $url, $num).'
		'.pt_get_element_table_slot('F', $url, $num).'
		'.pt_get_element_table_slot('Ne', $url, $num).'
		</tr>
		<tr>
		'.pt_get_element_table_slot('Na', $url, $num).'
		'.pt_get_element_table_slot('Mg', $url, $num).'
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		'.pt_get_element_table_slot('Al', $url, $num).'
		'.pt_get_element_table_slot('Si', $url, $num).'
		'.pt_get_element_table_slot('P', $url, $num).'
		'.pt_get_element_table_slot('S', $url, $num).'
		'.pt_get_element_table_slot('Cl', $url, $num).'
		'.pt_get_element_table_slot('Ar', $url, $num).'
		</tr>
		<tr>
		'.pt_get_element_table_slot('K', $url, $num).'
		'.pt_get_element_table_slot('Ca', $url, $num).'
		'.pt_get_element_table_slot('Sc', $url, $num).'
		'.pt_get_element_table_slot('Ti', $url, $num).'
		'.pt_get_element_table_slot('V', $url, $num).'
		'.pt_get_element_table_slot('Cr', $url, $num).'
		'.pt_get_element_table_slot('Mn', $url, $num).'
		'.pt_get_element_table_slot('Fe', $url, $num).'
		'.pt_get_element_table_slot('Co', $url, $num).'
		'.pt_get_element_table_slot('Ni', $url, $num).'
		'.pt_get_element_table_slot('Cu', $url, $num).'
		'.pt_get_element_table_slot('Zn', $url, $num).'
		'.pt_get_element_table_slot('Ga', $url, $num).'
		'.pt_get_element_table_slot('Ge', $url, $num).'
		'.pt_get_element_table_slot('As', $url, $num).'
		'.pt_get_element_table_slot('Se', $url, $num).'
		'.pt_get_element_table_slot('Br', $url, $num).'
		'.pt_get_element_table_slot('Kr', $url, $num).'
		</tr>
		<tr>
		'.pt_get_element_table_slot('Rb', $url, $num).'
		'.pt_get_element_table_slot('Sr', $url, $num).'
		'.pt_get_element_table_slot('Y', $url, $num).'
		'.pt_get_element_table_slot('Zr', $url, $num).'
		'.pt_get_element_table_slot('Nb', $url, $num).'
		'.pt_get_element_table_slot('Mo', $url, $num).'
		'.pt_get_element_table_slot('Tc', $url, $num).'
		'.pt_get_element_table_slot('Ru', $url, $num).'
		'.pt_get_element_table_slot('Rh', $url, $num).'
		'.pt_get_element_table_slot('Pd', $url, $num).'
		'.pt_get_element_table_slot('Ag', $url, $num).'
		'.pt_get_element_table_slot('Cd', $url, $num).'
		'.pt_get_element_table_slot('In', $url, $num).'
		'.pt_get_element_table_slot('Sn', $url, $num).'
		'.pt_get_element_table_slot('Sb', $url, $num).'
		'.pt_get_element_table_slot('Te', $url, $num).'
		'.pt_get_element_table_slot('I', $url, $num).'
		'.pt_get_element_table_slot('Xe', $url, $num).'
		</tr>
		<tr>
		<td class="element alkali-metal">Cs</td>
		<td class="element alkaline-metal">Ba</td>
		<td>*</td>
		<td class="element transition-metal">Hf</td>
		<td class="element transition-metal">Ta</td>
		<td class="element transition-metal">W</td>
		<td class="element transition-metal">Re</td>
		<td class="element transition-metal">Os</td>
		<td class="element transition-metal">Ir</td>
		<td class="element transition-metal">Pt</td>
		<td class="element transition-metal">Au</td>
		<td class="element transition-metal">Hg</td>
		<td class="element metal">Tl</td>
		<td class="element metal">Pb</td>
		<td class="element metal">Bi</td>
		<td class="element metal">Po</td>
		<td class="element metalloid">At</td>
		<td class="element noble-gas">Rn</td>
		</tr>
		<tr>
		<td class="element alkali-metal">Fr</td>
		<td class="element alkaline-metal">Ra</td>
		<td>**</td>
		<td class="element transition-metal">Rf</td>
		<td class="element transition-metal">Db</td>
		<td class="element transition-metal">Sg</td>
		<td class="element transition-metal">Bh</td>
		<td class="element transition-metal">Hs</td>
		<td class="element unknown">Mt</td>
		<td class="element unknown">Ds</td>
		<td class="element unknown">Rg</td>
		<td class="element transition-metal">Cn</td>
		<td class="element unknown">Uut</td>
		<td class="element metal">Fl</td>
		<td class="element unknown">Uup</td>
		<td class="element unknown">Lv</td>
		<td class="element unknown">Uus</td>
		<td class="element unknown">Uuo</td>
		</tr>
		<tr>
		<td> </td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>
		<tr>
		<td></td>
		<td>*</td>
		<td class="element lanthanide">La</td>
		<td class="element lanthanide">Ce</td>
		<td class="element lanthanide">Pr</td>
		<td class="element lanthanide">Nd</td>
		<td class="element lanthanide">Pm</td>
		<td class="element lanthanide">Sm</td>
		<td class="element lanthanide">Eu</td>
		<td class="element lanthanide">Gd</td>
		<td class="element lanthanide">Tb</td>
		<td class="element lanthanide">Dy</td>
		<td class="element lanthanide">Ho</td>
		<td class="element lanthanide">Er</td>
		<td class="element lanthanide">Tm</td>
		<td class="element lanthanide">Yb</td>
		<td class="element lanthanide">Lu</td>
		<td></td>
		</tr>
		<tr>
		<td></td>
		<td>**</td>
		<td class="element actinide">Ac</td>
		<td class="element actinide">Th</td>
		<td class="element actinide">Pa</td>
		<td class="element actinide">U</td>
		<td class="element actinide">Np</td>
		<td class="element actinide">Pu</td>
		<td class="element actinide">Am</td>
		<td class="element actinide">Cm</td>
		<td class="element actinide">Bk</td>
		<td class="element actinide">Cf</td>
		<td class="element actinide">Es</td>
		<td class="element actinide">Fm</td>
		<td class="element actinide">Md</td>
		<td class="element actinide">No</td>
		<td class="element actinide">Lr</td>
		<td></td>
		</tr>
		</table>';
	return $table;
}

function pt_get_element_table_slot($element, $url, $num) {
	$el_ar = $GLOBALS[$element];
	$el_sym = str_replace(" ", "&nbsp;", str_pad($el_ar[2], 3));
	if($num >= $el_ar[4]) {
		$link = str_replace( $GLOBALS['search'], $el_ar, $url );
		return '<td class="element '.$el_ar[6].'" id="'.$el_ar[3].'"><a href="'.$link.'"><abbr title="'.$el_ar[0].'">'.$el_sym.'</abbr></a></td>';
	} else {
		return '<td class="element '.$el_ar[6].'" id="'.$el_ar[3].'"><abbr title="'.$el_ar[0].'">'.$el_sym.'</abbr></td>';
	}
}

function pt_register_scripts() {
	wp_enqueue_style('periodic-table', plugins_url('style.css', __FILE__));
	wp_enqueue_script('jquery');
	wp_enqueue_script('periodictable', plugins_url('functions.js', __FILE__), array('jquery'));
}

add_action('wp_enqueue_scripts', 'pt_register_scripts');
add_shortcode( 'periodic_table', 'pt_generate_table_func' );
