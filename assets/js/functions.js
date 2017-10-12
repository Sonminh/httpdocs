/*=========================================
animation
===========================================*/
$(function(){
	wow = new WOW({
		boxClass: 'wow', // default
		animateClass: 'animated', // default
		offset:0// アニメーションをスタートさせる距離
	});
	wow.init();


	AOS.init({
		easing: 'ease-in-out-sine'
	});

});

/*=========================================
ヘッダー サブメニュー
===========================================*/
$(function(){
	$('.c-headPC > ul > li').hover(function(){
		childPanel = $(this).children('.c-headPC__wrap');
		childPanel.each(function(){
			childPanel.css({height:'0',display:'block',opacity:'0'}).stop().animate({height:'185px',opacity:'1'},300,'swing');
		});
	},function(){
			childPanel.css({display:'none'});
	});
});



/*=========================================
製品情報 ローカルメニュー開閉
===========================================*/
$(function(){
	var $win = $(window);
	$(".openMenu .c-title4").click(function() {
		if (window.matchMedia("(max-width:600px)").matches) {
			$(this).next(".c-navi2").stop().slideToggle(400);
			$(this).toggleClass("is-open");
		}
	});

});

/*=========================================
SP フッター メニュー開閉
===========================================*/
$(function(){

	$(".p-footSP1 p").click(function() {
		$(this).next("ul").stop().slideToggle(400);
		$(this).toggleClass("is-open");
	});

});

/*=========================================
SP ヘッダー メニュー・アイコン開閉
===========================================*/
$(function(){
	//$(".c-headSP-submenu").hide();
	$(".c-headSP__menu").click(function() {
		$(".c-headSP-submenu").stop().slideToggle(400);
		$(".menuicon").toggleClass("is-open");
		$("body").toggleClass("is-open");
	});

});

/*=========================================
SP ヘッダー サブメニュー開閉
===========================================*/
$(function(){

	$(".c-headSP-submenu p").click(function() {
		$(this).next("ul").stop().slideToggle(400);
		$(this).toggleClass("is-open");
	});

});





