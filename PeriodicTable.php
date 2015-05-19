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

$url;
$search = ['%nameupper%', '%namelower%', '%symbolupper%', '%symbollower%', '%number%', '%0number%' ];

/* Elements */
$H = ['Hydrogen', 'hydrogen', 'H', 'h', '1', '001' ];
$He = ['Helium', 'helium', 'He', 'he', '2', '002' ];
$Li = ['Lithium', 'lithium', 'Li', 'li', '3', '003' ];
$Be = ['Beryllium', 'beryllium', 'Be', 'be', '4', '004' ];
$B = ['Boron', 'boron', 'B', 'b', '5', '005' ];
$C = ['Carbon', 'carbon', 'C', 'c', '6', '006' ];
$N = ['Nitrogen', 'nitrogen', 'N', 'n', '7', '007' ];
$O = ['Oxygen', 'oxygen', 'O', 'o', '8', '008' ];
$F = ['Fluorine', 'fluorine', 'F', 'f', '9', '009' ];
$Ne = ['Neon', 'neon', 'Ne', 'ne', '10', '010' ];
$Na = ['Sodium', 'sodium', 'Na', 'na', '11', '011' ];
$Mg = ['Magnesium', 'magnesium', 'Mg', 'mg', '12', '012' ];
$Al = ['Aluminum', 'aluminum', 'Al', 'al', '13', '013' ];
$Si = ['Silicon', 'silicon', 'Si', 'si', '14', '014' ];
$P = ['Phosphorus', 'phosphorus', 'P', 'p', '15', '015' ];
$S = ['Sulfur', 'sulfur', 'S', 's', '16', '016' ];
$Cl = ['Chlorine', 'chlorine', 'Cl', 'cl', '17', '017' ];
$Ar = ['Argon', 'argon', 'Ar', 'ar', '18', '018' ];

function generate_table_func( $atts ) {
	$GLOBALS['url'] = 'http://renkin42.net/project-updates/other/elements/%0number%-%namelower%/';
	$table = '<table class="periodic-table">
		<tr>
		<td class="element nonmetal"><a href="'.get_element_link('H').'">H</a></td>
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
		<td class="element noble-gas"><a href="'.get_element_link('He').'">He</a></td>
		</tr>
		<tr>
		<td class="element alkali-metal"><a href="'.get_element_link('Li').'">Li</a></td>
		<td class="element alkaline-metal"><a href="'.get_element_link('Be').'">Be</a></td>
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
		<td class="element metalloid"><a href="'.get_element_link('B').'">B</a></td>
		<td class="element nonmetal"><a href="'.get_element_link('C').'">C</a></td>
		<td class="element nonmetal"><a href="'.get_element_link('N').'">N</a></td>
		<td class="element nonmetal"><a href="'.get_element_link('O').'">O</a></td>
		<td class="element halogen"><a href="'.get_element_link('F').'">F</a></td>
		<td class="element noble-gas"><a href="'.get_element_link('Ne').'">Ne</a></td>
		</tr>
		<tr>
		<td class="element alkali-metal"><a href="'.get_element_link('Na').'">Na</a></td>
		<td class="element alkaline-metal"><a href="'.get_element_link('Mg').'">Mg</a></td>
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
		<td class="element metal"><a href="'.get_element_link('Al').'">Al</a></td>
		<td class="element metalloid"><a href="'.get_element_link('Si').'">Si</a></td>
		<td class="element nonmetal"><a href="'.get_element_link('P').'">P</a></td>
		<td class="element nonmetal"><a href="'.get_element_link('S').'">S</a></td>
		<td class="element halogen"><a href="'.get_element_link('Cl').'">Cl</a></td>
		<td class="element noble-gas"><a href="'.get_element_link('Ar').'">Ar</a></td>
		</tr>
		<tr>
		<td class="element alkali-metal"><a href="http://renkin42.net/project-updates/other/elements/019-potassium/">K</a></td>
		<td class="element alkaline-metal"><a href="http://renkin42.net/project-updates/other/elements/020-calcium/">Ca</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/021-scandium/">Sc</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/022-titanium/">Ti</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/023-vanadium/">V</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/024-chromium/">Cr</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/025-manganese/">Mn</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/026-iron/">Fe</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/027-cobalt/">Co</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/028-nickel/">Ni</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/029-copper/">Cu</a></td>
		<td class="element transition-metal"><a href="http://renkin42.net/project-updates/other/elements/030-zinc/">Zn</a></td>
		<td class="element metal">Ga</td>
		<td class="element metalloid">Ge</td>
		<td class="element metalloid">As</td>
		<td class="element nonmetal">Se</td>
		<td class="element halogen">Br</td>
		<td class="element noble-gas">Kr</td>
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

function get_element_link( $element ) {
	return str_replace( $GLOBALS['search'], $GLOBALS[$element], $GLOBALS['url'] );
}

add_shortcode( 'periodic_table', 'generate_table_func' );
