// JavaScript Document
var rand=Math.ceil(Math.random()*6);
var testimonial='<img src="images/testimonials/t'+rand+'.jpg" width="268" />';
var cache = [];
preLoadImages = function() {
	var args_len = arguments.length;
	for (var i = args_len; i--;) {
		var cacheImage = document.createElement('img');
		cacheImage.src = arguments[i];
		cache.push(cacheImage);
	}
}
$(function(){
	preLoadImages("images/home_ro.gif", "images/providers_ro.gif", "images/ems_ro.gif", "images/success_ro.gif", "images/events_ro.gif", "images/videos_ro.gif", "images/forms_ro.gif", "images/other_ro.gif");
	$("#nav img").hover(function(){
		this.src=this.src.replace("_reg", "_ro");
	}, function(){
		this.src=this.src.replace("_ro", "_reg");
	});
	$("#homeboxes #events .eventblock:last").css("border-bottom", "none");
	$("#homeboxes #events .eventblock").each(function(){
		$(this).html($(this).html()+' ...&nbsp;<a href="events.php">more info</a>');
	});
	$("#gen_events .eventblock").each(function(){
		$(this).wrapInner("<a href='events.php' />");
	});
	$('#clientTable td:last-child').addClass('numbers');
	$("#genfax .np").hide();
	$("#genfax #factsheets li").each(function(){
		$(this).html($(this).html()+"&nbsp;&nbsp;(PDF)");
	});
	$(".lined p:last, .lined #events .eventblock:last").css({"border-bottom-width": "1px", "padding-bottom": "14px"});
});