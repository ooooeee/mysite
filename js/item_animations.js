const _ITEMS_MAIN_BLOCK = '#items_main_block_2';
const _STEP = 0;
const _ITEM_ID_PREFIX = '#item_2_';
const _ITEM_ATTR_NAME = 'showed';

const _ITEMS_COUNT = 4;
const _ITEMS_BLOCK_HEIGHT = $(_ITEMS_MAIN_BLOCK).offset()['top'] + _STEP;

var _is_avaibled = true;

// $(window).scroll(function(){
//     if ($(window).scrollTop() >= _ITEMS_BLOCK_HEIGHT - 100) {
//         anim_show_items(1);
//     }
// })


$(window).scroll(function(){
    if ($(window).scrollTop() >= _ITEMS_BLOCK_HEIGHT - 800) {
        anim_show_items(1);
    }
})


function anim_show_items(index) {
    if (_is_avaibled) {
        var item_id = _ITEM_ID_PREFIX + index;
        $(item_id).attr(_ITEM_ATTR_NAME, '');
        
        if (index >= _ITEMS_COUNT)
        _is_avaibled = false;
        else
            setTimeout(function() { anim_show_items(index + 1) }, 500);
    }
}


// $('.grow_skew_forward').mouseleave(
//     function(){
//         $('.grow_skew_forward').css({background: "#f76e31"})
//     }
// )