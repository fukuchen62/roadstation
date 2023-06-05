// 自定義Javascriptファイル

/**
 * 新規登録・編集時の確認
 * @returns
 */
function saveComfirm(title) {
    let res = confirm("「" + title + "」を登録します、よろしいでしょうか。");
    if (res == true) {
        return true;
    } else {
        return false;
    }
}

/**
 * データ削除の確認
 * @param {*} title
 * @param {*} url
 */
function deleteComfirm(title, url) {
    let res = confirm("「" + title + "」を削除します、よろしいでしょうか。");
    if (res == true) {
        // OKなら移動
        window.location.href = url;
    }
}

// slick//
$(function () {
    $('.slide-items').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        adaptiveHeight: true,
        dots: true,
    });
});

// ハンバーガーメニューの設定
$(function () {
    $(".btn-gnavi").on("click", function () {

        var rightVal = 0;
        if ($(this).hasClass("open")) {
            rightVal = -2000;
            $(this).removeClass("open");
        } else {
            $(this).addClass("open");
        }
        $("#global-navi").stop().animate({
            right: rightVal
        }, 1000);
    });
});

// ヘッダーメニューの固定
var navPos = jQuery('#global-nav').offset().top; // グローバルメニューの位置
var navHeight = jQuery('#global-nav').outerHeight(); // グローバルメニューの高さ
jQuery(window).on('scroll', function () {
    if (500 < jQuery(this).scrollTop()) { // 〇〇px以上スクロールしたら
        jQuery('#global-nav').addClass('m_fixed');
    } else {
        jQuery('#global-nav').removeClass('m_fixed');
    }
});
