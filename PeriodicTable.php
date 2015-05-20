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
 * Copyright (C) 2015 Austin Leydecker
 * 
 * This Source Code Form is subject to the terms of the Mozilla Public License, 
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can 
 * obtain one at http://mozilla.org/MPL/2.0/.
 */

$url;
$num;
$search = ['%nameupper%', '%namelower%', '%symbolupper%', '%symbollower%', '%number%', '%0number%' ];

/* Elements */
$H = array('Hydrogen', 'hydrogen', 'H', 'h', '1', '001' );
$He = array('Helium', 'helium', 'He', 'he', '2', '002' );
$Li = array('Lithium', 'lithium', 'Li', 'li', '3', '003' );
$Be = array('Beryllium', 'beryllium', 'Be', 'be', '4', '004' );
$B = array('Boron', 'boron', 'B', 'b', '5', '005' );
$C = array('Carbon', 'carbon', 'C', 'c', '6', '006' );
$N = array('Nitrogen', 'nitrogen', 'N', 'n', '7', '007' );
$O = array('Oxygen', 'oxygen', 'O', 'o', '8', '008' );
$F = array('Fluorine', 'fluorine', 'F', 'f', '9', '009' );
$Ne = array('Neon', 'neon', 'Ne', 'ne', '10', '010' );
$Na = array('Sodium', 'sodium', 'Na', 'na', '11', '011' );
$Mg = array('Magnesium', 'magnesium', 'Mg', 'mg', '12', '012' );
$Al = array('Aluminum', 'aluminum', 'Al', 'al', '13', '013' );
$Si = array('Silicon', 'silicon', 'Si', 'si', '14', '014' );
$P = array('Phosphorus', 'phosphorus', 'P', 'p', '15', '015' );
$S = array('Sulfur', 'sulfur', 'S', 's', '16', '016' );
$Cl = array('Chlorine', 'chlorine', 'Cl', 'cl', '17', '017' );
$Ar = array('Argon', 'argon', 'Ar', 'ar', '18', '018' );
$K = array('Potassium', 'potassium', 'K', 'k', '19', '019' );
$Ca = array('Calcium', 'calcium', 'Ca', 'ca', '20', '020' );
$Sc = array('Scandium', 'scandium', 'Sc', 'sc', '21', '021' );
$Ti = array('Titanium', 'titanium', 'Ti', 'ti', '22', '022' );
$V = array('Vanadium', 'vanadium', 'V', 'v', '23', '023' );
$Cr = array('Chromium', 'chromium', 'Cr', 'cr', '24', '024' );
$Mn = array('Manganese', 'manganese', 'Mn', 'mn', '25', '025' );
$Fe = array('Iron', 'iron', 'Fe', 'fe', '26', '026' );
$Co = array('Cobalt', 'cobalt', 'Co', 'co', '27', '027' );
$Ni = array('Nickel', 'nickel', 'Ni', 'ni', '28', '028' );
$Cu = array('Copper', 'copper', 'Cu', 'cu', '29', '029' );
$Zn = array('Zinc', 'zinc', 'Zn', 'zn', '30', '030' );
$Ga = array('Gallium', 'gallium', 'Ga', 'ga', '31', '031' );
$Ge = array('Germanium', 'germanium', 'Ge', 'ge', '32', '032' );
$As = array('Arsenic', 'arsenic', 'As', 'as', '33', '033' );
$Se = array('Selenium', 'selenium', 'Se', 'se', '34', '034' );
$Br = array('Bromine', 'bromine', 'Br', 'br', '35', '035' );
$Kr = array('Krypton', 'krypton', 'Kr', 'kr', '36', '036' );

function generate_table_func( $atts ) {
	$a = shortcode_atts(array(
		'url' => 'http://renkin42.net/project-updates/other/elements/%0number%-%namelower%/',
		'num' => 118
	), $atts);
	$GLOBALS['url'] = $a['url'];
	$GLOBALS['num'] = $a['num'];
	$table = '<table class="periodic-table">
		<tr>
		<td class="element nonmetal">'.get_element_link('H', 1).'</td>
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
		<td class="element noble-gas">'.get_element_link('He', 2).'</td>
		</tr>
		<tr>
		<td class="element alkali-metal">'.get_element_link('Li', 3).'</td>
		<td class="element alkaline-metal">'.get_element_link('Be', 4).'</td>
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
		<td class="element metalloid">'.get_element_link('B', 5).'</td>
		<td class="element nonmetal">'.get_element_link('C', 6).'</td>
		<td class="element nonmetal">'.get_element_link('N', 7).'</td>
		<td class="element nonmetal">'.get_element_link('O', 8).'</td>
		<td class="element halogen">'.get_element_link('F', 9).'</td>
		<td class="element noble-gas">'.get_element_link('Ne', 10).'</td>
		</tr>
		<tr>
		<td class="element alkali-metal">'.get_element_link('Na', 11).'</td>
		<td class="element alkaline-metal">'.get_element_link('Mg', 12).'</td>
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
		<td class="element metal">'.get_element_link('Al', 13).'</td>
		<td class="element metalloid">'.get_element_link('Si', 14).'</td>
		<td class="element nonmetal">'.get_element_link('P', 15).'</td>
		<td class="element nonmetal">'.get_element_link('S', 16).'</td>
		<td class="element halogen">'.get_element_link('Cl', 17).'</td>
		<td class="element noble-gas">'.get_element_link('Ar', 18).'</td>
		</tr>
		<tr>
		<td class="element alkali-metal">'.get_element_link('K', 19).'</td>
		<td class="element alkaline-metal">'.get_element_link('Ca', 20).'</td>
		<td class="element transition-metal">'.get_element_link('Sc', 21).'</td>
		<td class="element transition-metal">'.get_element_link('Ti', 22).'</td>
		<td class="element transition-metal">'.get_element_link('V', 23).'</td>
		<td class="element transition-metal">'.get_element_link('Cr', 24).'</td>
		<td class="element transition-metal">'.get_element_link('Mn', 25).'</td>
		<td class="element transition-metal">'.get_element_link('Fe', 26).'</td>
		<td class="element transition-metal">'.get_element_link('Co', 27).'</td>
		<td class="element transition-metal">'.get_element_link('Ni', 28).'</td>
		<td class="element transition-metal">'.get_element_link('Cu', 29).'</td>
		<td class="element transition-metal">'.get_element_link('Zn', 30).'</td>
		<td class="element metal">'.get_element_link('Ga', 31).'</td>
		<td class="element metalloid">'.get_element_link('Ge', 32).'</td>
		<td class="element metalloid">'.get_element_link('As', 33).'</td>
		<td class="element nonmetal">'.get_element_link('Se', 34).'</td>
		<td class="element halogen">'.get_element_link('Br', 35).'</td>
		<td class="element noble-gas">'.get_element_link('Kr', 36).'</td>
		</tr>
		<tr>
		<td class="element alkali-metal">Rb</td>
		<td class="element alkaline-metal">Sr</td>
		<td class="element transition-metal">Y</td>
		<td class="element transition-metal">Zr</td>
		<td class="element transition-metal">Nb</td>
		<td class="element transition-metal">Mo</td>
		<td class="element transition-metal">Tc</td>
		<td class="element transition-metal">Ru</td>
		<td class="element transition-metal">Rh</td>
		<td class="element transition-metal">Pd</td>
		<td class="element transition-metal">Ag</td>
		<td class="element transition-metal">Cd</td>
		<td class="element metal">In</td>
		<td class="element metal">Sn</td>
		<td class="element metalloid">Sb</td>
		<td class="element metalloid">Te</td>
		<td class="element halogen">I</td>
		<td class="element noble-gas">Xe</td>
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

function get_element_link($element, $atomic_num) {
	if($GLOBALS['num'] >= $atomic_num) {
		$link = str_replace( $GLOBALS['search'], $GLOBALS[$element], $GLOBALS['url'] );
		return '<a href="'.$link.'">'.$element.'</a>';
	} else {
		return $element;
	}
}

add_shortcode( 'periodic_table', 'generate_table_func' );
