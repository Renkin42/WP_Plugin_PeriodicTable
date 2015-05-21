/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(window).load(resize_table);

jQuery(window).resize(resize_table);

function resize_table() {
    jQuery(".periodic-table").each(function (index, element) {
        var textSize = 100;
        do {
            jQuery(element).css('font-size', textSize);
            textSize--;
        } while (jQuery(element).width() > jQuery(element).parent().width())
    });
}
