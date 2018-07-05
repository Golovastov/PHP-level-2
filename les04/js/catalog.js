"use strict";

let goodsOnPage = {count:0};
$(document).ready(function() {
    loadMoreGoods(goodsOnPage);
    $('#load_more_goods').click(loadMoreGoods(goodsOnPage));
});

function loadMoreGoods (goodsOnPage) {
    $.post('engine/loadMoreGoods.php', goodsOnPage, function (data) {
        $('#goods').append(data);
    });
}