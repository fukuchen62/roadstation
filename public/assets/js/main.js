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
    var pos = $('#menu').offset().top;
    $(window).scroll(function () {
        if ($(this).scrollTop() > pos) { //570px以上スクロールした固定
            $('#menu').addClass('fixed');
            $("body").css("padding-top", height);
        } else {
            $('#menu').removeClass('fixed');
            $("body").css("padding-top", 0);
        }
    });
});

// リロードをする
function doReload(url) {
    // window.location.reload();
    window.location.href = url;
}


// アニメーションフェードイン
$(function () {
    const fade_bottom = 200; // 画面下からどの位置でフェードさせるか(px)
    const fade_move = 100; // どのぐらい要素を動かすか(px)
    const fade_time = 500; // フェードの時間(ms)
    // フェード前のcssを定義
    $(".scroll-fade-up").css({
        opacity: 0,
        transform: "translateY(" + fade_move + "px)",
        transition: fade_time + "ms",
    });
    // スクロールまたはロードするたびに実行
    $(window).on("scroll load", function () {
        const scroll_top = $(this).scrollTop();
        const scroll_bottom = scroll_top + $(this).height();
        const fade_position = scroll_bottom - fade_bottom;
        $(".scroll-fade-up").each(function () {
            const this_position = $(this).offset().top;
            if (fade_position > this_position) {
                $(this).css({
                    opacity: 1,
                    transform: "translateY(0)",
                });
            }
        });
    });
});

// 左右からフェードイン
$(function () {
    const fade_bottom = 50; // 画面下からどの位置でフェードさせるか(px)
    const fade_move = 100; // どのぐらい要素を動かすか(px)
    const fade_time = 800; // フェードの時間(ms)
    // フェード前のcssを定義
    $(".scroll-fade-side").css({
        opacity: 0,
        transform: "translateX(" + fade_move + "px)",
        transition: fade_time + "ms",
    });
    // スクロールまたはロードするたびに実行
    $(window).on("scroll load", function () {
        const scroll_top = $(this).scrollTop();
        const scroll_bottom = scroll_top + $(this).height();
        const fade_position = scroll_bottom - fade_bottom;
        $(".scroll-fade-side").each(function () {
            const this_position = $(this).offset().top;
            if (fade_position > this_position) {
                $(this).css({
                    opacity: 1,
                    transform: "translateX(0)",
                });
            }
        });
    });
});


// フッターガタゴトアニメ

$(document).ready(function () {
    $('.demo_wrap').on('animationend', function () {
        if ($(this).attr('data-order') === 'left') {
            $(this).attr('data-order', 'right');
        } else {
            $(this).attr('data-order', 'left');
        }
    });
});
