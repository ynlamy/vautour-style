$(document).ready(function() {
	var heads = $("h2");
	heads.css("cursor", "pointer");
	heads.prepend('<img src="images/interface/menu_less.gif" alt="" />');
	heads.click(function() {
		$("img", this).attr("src", function(i, src) {
			return src == "images/interface/menu_more.gif" ? "images/interface/menu_less.gif" : "images/interface/menu_more.gif";
		});
		$(this).next().slideToggle();
	});
	var link = $("div#menu ul li a");
	link.on("mouseenter", function() {
		$(this).parent().stop();
		$(this).parent().animate({"padding-left": "20px"}, 200);
	});
	link.on("mouseleave", function() {
		$(this).parent().stop();
		$(this).parent().animate({"padding-left": "10px"}, 200);
	});
});