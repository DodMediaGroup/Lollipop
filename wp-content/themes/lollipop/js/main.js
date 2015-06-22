var currentTop;

jQuery(document).ready(function($) {
	$.init();
});

jQuery(window).load(function() {
	$('.slider .set-position').each(function(index, el) {
		$.setPositionSlide($(this));
	});
});

$.setDimencionHeader = function(){
	var heightWindow = $(window).height();
	if(heightWindow < 550)
		heightWindow = 550;

	$('#header-lollipop').css('height', heightWindow);
}
$.moveDivsHeader = function(){
	var scroll = $(document).scrollTop() * 0.3;

	$('#header-lollipop .parallax').each(function(index, el) {
		var move = scroll * parseInt($(this).attr('data-mov'));
		
		$(this).css('transform', 'translateY('+move+'px)');
	});
}
$.menuFixed = function(){
	var menuTop = $('#header-lollipop').height() - 80;

	if($(document).scrollTop() > menuTop)
		$('.principal-menu').addClass('menu-fixed');
	else
		$('.principal-menu').removeClass('menu-fixed');
}
$.changeColorMenu = function(){
	var windowTop = $(document).scrollTop();

	$('.change-menu').each(function(index, el) {
		var sectionTop = $(this).position().top;
		var sectionHeight = $(this).outerHeight();
		var menuHeight = $('.principal-menu').outerHeight() + 1;

		if((windowTop + menuHeight) > sectionTop && windowTop <= (sectionTop + sectionHeight - menuHeight)){
			$('.principal-menu').attr('data-current-class', $(this).attr('data-class'));
			$('.principal-menu').addClass($(this).attr('data-class'));
		}
		else if($('.principal-menu').attr('data-current-class') != $(this).attr('data-class'))
			$('.principal-menu').removeClass($(this).attr('data-class'));
	});
}
$.showMenu = function(){
	var menu = $('.principal-menu');

	if(menu.hasClass('activate'))
		menu.removeClass('activate');
	else
		menu.addClass('activate');
}
$.setPositionSlide = function(element){
	var height = element.outerHeight();
	var heightDad = $('.slider').height();

	element.css('transform', 'translateY('+(heightDad-height)+'px)');
}
$.addMap = function(element){
	element.gmap3({
		map:{
			options: {
				center:[4.6312817,-74.0942151],
				zoom: 14,
                scrollwheel: false,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL
                },
                panControl: false,
                styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#63C8D4"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"transit.line","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"labels.text.fill","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit.station","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]
			},
		},
		marker:{
			latLng: [4.619069, -74.080504],
			options:{
				icon: url_template + "/images/map.svg"
			}
		},
		overlay:{
			latLng: [4.619069, -74.080504],
			options:{
				content:'<div class="map-overlay">'+
							'<h1>Hacienda San Rafael</h1>'+
							'<p>Carrera 57 # 132 <small>Bogotá, Colombia</small></p>'+
						'</div>',
			}
		}
	});
};
$.imgToSvg = function(image){
	var $img = image;
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
        var $svg = jQuery(data).find('svg');
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);

        if($img.hasClass('map-animate'))
        	$.myScrollAnimate();
    }, 'xml');
}
$.resizing = function(element){
	$(window).resize(function() {
        var width = element.outerWidth();
        element.css({
            "height": width * eval(element.attr('data-resizing'))
        });
        if(element.hasClass('panel')){
        	element.parent().find('.panel').css({
        		"height": width * eval(element.attr('data-resizing'))
        	});
        }
    }).resize();
}
$.scrollAnimate = function(){
	wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 15,
		mobile: true,
		live: true
	});
	wow.init();
}
$.myScrollAnimate = function(){
	var scrollWindow = $(document).scrollTop();
	var scrollMap = $('#actividades .map-activities').position().top;
	var heightWindow = $(window).height();
	var heightMap = $('#actividades .map-activities').outerHeight();

	if((scrollWindow + heightWindow - (heightMap * 0.2)) > scrollMap && scrollWindow < (scrollMap + (heightMap * 0.3))){
		$(document).find('.my-wow').each(function(index, el) {
			var element = $(this);
			var time = parseInt($(this).attr('data-wow-delay'));
			var add = 'my-wow animated '+$(this).attr('data-wow-class');

			setTimeout(function(){
			    element.attr('class', add);
			}, time);
		});
	}

	function addClass(element, add){
		element.attr('class', add);
	}
}

$.init = function(){
	currentTop = $(document).scrollTop();

	$('.js-img-to-svg').each(function(index, el) {
		$.imgToSvg($(this));
	});

	$('.js-resizing').each(function(index, el) {
		$.resizing($(this));
	});

	$('.slider').fractionSlider({
		'dimensions': $('.slider').width()+','+$('.slider').height(),
		'fullWidth': false,
		'responsive': true
	});

	$.addMap($('#ubicacion .google-map'));

	$.scrollAnimate();

	$(document).on('scroll', function(event) {
		$.moveDivsHeader();
		$.menuFixed();
		$.changeColorMenu();

		if($('#actividades').length)
			$.myScrollAnimate();
	}).scroll();

	$('.principal-menu .title_menu span').on('click', function(event) {
		event.preventDefault();

		$.showMenu();
	});
}