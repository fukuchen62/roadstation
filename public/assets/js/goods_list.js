"use strict";

$(document).ready(function () {

    // 初期表示の時に、１つ目の詳細を表示させる
    // 全部非表示処理
    $(".detailContainer").each(function (i, elem) {
        // console.log(i + ': ' + $(elem).text());
        $(elem).addClass('displayNone');
    });

    // 指定IDを表示させる
    $('#type-1').removeClass('displayNone');


    // clickイベンド
    $('a.btns').click(function () {

        const btnid = $(this).attr('id');

        const pos = btnid.indexOf('-');
        const id = btnid.substr(pos + 1);
        console.log('ID:' + id);

        const typeid = '#type-' + id;

        // 全部非表示処理
        $(".detailContainer").each(function (i, elem) {
            // console.log(i + ': ' + $(elem).text());
            $(elem).addClass('displayNone');
        });

        // 指定IDを表示させる
        $(typeid).removeClass('displayNone');
    });


});
