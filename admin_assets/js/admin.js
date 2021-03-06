/*
Name: 			adminpopular
Written by: 	codepopular 
Theme Version:	1.0.0
*/
(function($) {
	
		'use strict';
	
			var adminpopular = function(){

				// page loader
				 var cppageloader = function(){
					jQuery(".loader").fadeOut("slow");
				 }
				// Search bar
				  var searchBar = function() {
					  jQuery("#quik-search-btn").on('click',function() {jQuery('.nav-search-bar').fadeIn(500).addClass('On');});
					  jQuery("#search-remove").on('click',function() {jQuery('.nav-search-bar').fadeOut(500).removeClass('On');});	
				  }
				  
				  // Custom scroll bar
				  var setStylishScroll = function(){
					  $(".content-scroll").mCustomScrollbar({
						  setWidth:false,
						  setHeight:false,
						  axis:"X",
						  
					  });	
				  }
				
				var checkSelectorExistence = function(selectorName) {
				  if(jQuery(selectorName).length > 0){return true;}else{return false;}
				};
				
				var searchToggle = function() {
				  $(".adminpopular-search-toggle").on("click", function(e) {
					e.preventDefault();
					$(".adminpopular-search-bar").toggleClass("active");
				  })
				};

				// Navigation sidebar
				
				var closeNav = function() {
				  $(".adminpopular-overlay, .adminpopular-sidebar-toggle-button").on("click", function() {
					$("body").removeClass("adminpopular-opened-sidebar"), $("body").removeClass("adminpopular-body-fixed");
				  })
				};
				
				var leftSidebar = function() {
					
					$(".adminpopular-toggle-sidebar").on("click", function() {
						if($("body").hasClass("adminpopular-opened-sidebar")){
						  $("body").removeClass("adminpopular-opened-sidebar"), $("body").removeClass("adminpopular-body-fixed");
						}else{
						  $(window).width() < 760 && $("body").addClass("adminpopular-body-fixed"), $("body").addClass("adminpopular-opened-sidebar");
						}
					});

					$(".adminpopular-sidebar-pin-button").on("click", function() {
						$("body").toggleClass("adminpopular-pinned-sidebar");
					});
					
					$(".adminpopular-sidebar-navi li.active > ul").slideDown(200);
					$(".adminpopular-sidebar-navi a").on("click", function(e) {
						var a = $(this);
						$(this).next().is("ul") ? (e.preventDefault(), a.parent().hasClass("active") ? (a.parent().removeClass("active"), a.next().slideUp(200)) : (a.parent().parent().find(".active ul").slideUp(200), a.parent().parent().find("li").removeClass("active"), a.parent().toggleClass("active"), a.next().slideToggle(200))) : (a.parent().parent().find(".active ul").slideUp(200), a.parent().parent().find("li").removeClass("active"), a.parent().addClass("active"))
					});
				  
				};
				
				var headerSubMenu = function() {
					$(".adminpopular-header-submenu").show();
					$(".adminpopular-header-submenu").parent().find("a:first").on("click", function(e) {
						e.stopPropagation();
						e.preventDefault();
						$(this).parents(".adminpopular-header-navigation").find(".adminpopular-header-submenu").not($(this).parents("li").find(".adminpopular-header-submenu")).removeClass("active");
						$(this).parents("li").find(".adminpopular-header-submenu").show().toggleClass("active");
					});
					$(document).on("click", function(e) {
						var a = $(e.target);
						!0 === $(".adminpopular-header-submenu").hasClass("active") && !a.hasClass("adminpopular-submenu-toggle") && a.parents(".adminpopular-header-submenu").length < 1 && $(".adminpopular-header-submenu").removeClass("active"), a.parents(".adminpopular-search-bar").length < 1 && !a.hasClass("adminpopular-search-bar") && !a.parent().hasClass("adminpopular-search-toggle") && !a.hasClass("adminpopular-search-toggle") && $(".adminpopular-search-bar").removeClass("active")
					});
				}

				// CounterUP
				var counterUp = function(){
					$('.counter').counterUp({
						delay: 10,
						time: 1000
					});
				}
			
				return {
					initialHelper:function(){
						cppageloader();
						searchBar();
						searchToggle();
						setStylishScroll();
						closeNav();
						leftSidebar();
						headerSubMenu();
						counterUp();
					}
				}
				
		}(jQuery);
		
	/* jQuery ready  */	
	jQuery(document).on('ready',function() {adminpopular.initialHelper();});
})(jQuery);