/* 
 This Source Code Form is subject to the terms of the Mozilla Public License, 
 v. 2.0. If a copy of the MPL was not distributed with this file, You can 
 obtain one at http://mozilla.org/MPL/2.0/.
 */

jQuery(window).load(resize_table);

jQuery(window).resize(resize_table);

function resize_table() {
    jQuery(".periodic-table").each(function (index, element) {
        var textSize = 100;
        do {
            jQuery(element).css('font-size', textSize);
            textSize -= 3;
        } while (jQuery(element).width() > jQuery(element).parent().width())
    });
}
