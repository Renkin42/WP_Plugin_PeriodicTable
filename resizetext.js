/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(".periodic-table").each(function(index, element) {
    var textSize = 100;
    while (jQuery(element).width() > jQuery(element).parent().width()) {
        textSize -= 1;
        jQuery(element).css('font-size', textSize);
    }
});
