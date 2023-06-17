"use strict";

// ①シンプルな実装（toggleClassで実装）
$(function () {

	// ボタンがクリックされたら発動
	$(".blog-btn").on("click", function () {

		// ドロワーメニュー部分のアニメーション
		// ついてなかったら付けて、ついてたら外す
		$(".blog-btn").toggleClass("is-active");

		// ボタン部分のアニメーション
		$(".blog-btn").toggleClass("is-active");

	});

});
