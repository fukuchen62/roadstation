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

// topへ戻るボタン
$(".scroll-top").hide();

$(window).scroll(function () {
    if ($(this).scrollTop() > 800) {
        $(".scroll-top").fadeIn();
    } else {
        $(".scroll-top").fadeOut();
    }
});

$("ボタンを指定").click(function () {
    $("html, body").animate({
        scrollTop: 0
    }, 1000);
    return false;
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
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 700) { //570px以上スクロールした固定
            $('#menu').addClass('fixed');
        } else {
            $('#menu').removeClass('fixed');
        }
    });
});
