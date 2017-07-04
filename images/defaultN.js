$jq(function () {
    edf.general.ready();
    edf.flyouts.init();
});

$jq(window).load(function () {
	edf.general.load();
});

// jQuery Plugins
$jq.fn.exists = function () { return $jq(this).length > 0; };
$jq.fn.clearDimensions = function () { $jq(this).removeAttr("width").removeAttr("height").css({ width: "", height: "" }); };


//$jq.fn.captions = function (after) {
//    $jq('.caption[title]', this).each(function () {
//        $jq(this).clearDimensions();
//        var pic_real_width = this.width;
//        $jq(this).wrap('<div class="captionWrap" style="width: ' + pic_real_width + 'px"></div>');
//        $jq(this).after('<div class="captionText">' + $jq(this).attr('title') + '</div>');
//        var classList = this.className.split();
//        $jq(this).parent().addClass('' + classList + '');
//        $jq(this).removeClass('caption');
//        $jq(this).wrap('<div class="captionImg"></div>');
//        $jq(this).parents('.captionWrap').siblings('.creditAbove').appendTo('.captionImg');
//    });
//    if (typeof(after) == "function") after.apply(this);
//}

var convertATags = function(convert){
return $jq("<span />", { html: convert }).text();
};


$jq.fn.captions = function (after) {
    $jq('img.caption', this).each(function () {
        $jq(this).clearDimensions();
				var caption = $jq(this).siblings('.creditAbove').find('.captionSrc').html();
				caption = (caption) ? caption : "";
        var pic_real_width = this.width;
        var classList = this.className.split();
        $jq(this).wrap('<div class="captionWrap" style="width: ' + pic_real_width + 'px"></div>');
				$jq(this).after('<div class="captionText">' + caption + '</div>');
        $jq(this).parent().addClass('' + classList + '');
        $jq(this).removeClass('caption');
        $jq(this).wrap('<div class="captionImg"></div>');
        var that = $jq(this).parents('.captionImg');
        $jq(this).parents('.captionWrap').siblings('.creditAbove').find('.creditSrc').appendTo(that);
    });
    if (typeof(after) == "function") after.apply(this);
}


$jq.fn.scrollPosition = function () {
    var scrollPos = $jq(this).find('.scrollRow').css('left');
    if (scrollPos == '0px') {
        $jq(this).siblings('.titleBar').find('.imgScrollPrev').hide();
    } else {
        $jq(this).siblings('.titleBar').find('.imgScrollPrev').show();
    }
    var rightMaxPos = -(totalWidth - blockWidest - blockWidest);
    if (scrollPos == rightMaxPos + 'px') {
        $jq(this).siblings('.titleBar').find('.imgScrollNext').hide();
    } else {
        $jq(this).siblings('.titleBar').find('.imgScrollNext').show();
    }
}
$jq.fn.imgScroll = function (includeButtons) {
	var move = function (next, jqCur, newIndex, slideShowNav) {
		var imgWidth = $jq(this).parents('.imageScroll').width();
		var lis = $jq(this).find('li');
		lis.css('visibility', 'visible');
		var o = $jq(this).parent('.imageScroll').offset().left;
		$jq(this).animate({ left: ((next) ? '-=' : '+=') + imgWidth + '' }, 500, "swing", function () {
			lis.removeClass('current');
			jqCur.addClass('current');
			slideShowNav.find('li').removeClass('current');
			slideShowNav.find('li:nth-child('+(newIndex+1)+')').addClass('current');
			trackSlide($jq(this).find('li.current .title').html());
		});
	};
	var moveTo = function(next, currentIndex){
		var imgWidth = $jq(this).parents('.imageScroll').width();
		var o = $jq(this).parent('.imageScroll').offset().left;
		$jq(this).animate({ left: ((next > currentIndex) ? '-=' : '+=') + (imgWidth*Math.abs(next-currentIndex)) + '' }, 500, "swing", function () {
			$jq(this).find('li').removeClass('current');
			$jq(this).find('li:nth-child('+(next+1)+')').addClass('current');
			trackSlide($jq('.slideShow li').eq(next).find('.title').html());
		});		
	};
	$jq(this).each(function () {
		if(!$jq(this).hasClass('slideShowNav')){
			var that = this;
			var slideShowNav = $jq(this).siblings('.slideShowNav'); 
			var currentIndex = $jq(this).find('li.current').index();
			if (currentIndex == -1) {
				$jq(this).find('li:first').addClass('current');
				currentIndex = 0;
				if($jq(this).find('span.title').html() != null) {
					trackSlide($jq(this).find('span.title').html());
				}
			}
			if ($jq(this).parent().is('.slideShow')) {
			} else {
				$jq('p', this).addClass('hideOnHover');
			}
			$jq('.hideOnHover', this).css({ opacity: "0" });
			var items = $jq('li:not(.imgScrollWrapped) img', this).not('.pinImg').wrap('<div class="imgCenter"></div>');
			$jq(this).find('li:not(.imgScrollWrapped)')
				   .wrapInner(
						$jq('<div class="hoverArea"></div>').hoverIntent(
							function () { $jq(this).find(".hideOnHover").animate({ opacity: "1" }, 200, function () { }); },
							function () { $jq(this).find(".hideOnHover").animate({ opacity: "0" }, 500, function () { }); }
						)
					)
					.each(function () {
						$jq(this).append($jq('<div class="imgScrollPrev"></div>').click(function () { currentIndex -=1; move.call(that, 0, $jq(this).parents('li').prev('li'), currentIndex, slideShowNav); }));
						$jq(this).append($jq('<div class="imgScrollNext"></div>').click(function () { currentIndex +=1; move.call(that, 1, $jq(this).parents('li').next('li'), currentIndex, slideShowNav); }));
					});
			var imgWidth = $jq(this).parent().width();
			$jq(this).css({ left: -(currentIndex) * imgWidth });
			$jq(this).find('.imgCenter').css({ 'width': imgWidth, 'display': 'block', 'vertical-align': 'middle' });
			var currentTallest = 0;
			var images = $jq(this).find('li img').each(function (i) {
				$jq(this).clearDimensions();
				var myHeight = $jq(this).height();
				if (myHeight > currentTallest)
					currentTallest = myHeight;
			});
			var totalWidth = images.length * imgWidth + 1;
			$jq(this).find('li').addClass('imgScrollWrapped').css({ 'height': currentTallest, 'width': imgWidth });
			$jq(this).find('.hoverArea').css({ 'height': currentTallest, 'width': imgWidth, 'max-width': imgWidth, 'display': 'table' });
			$jq(this).css({ 'height': currentTallest, 'width': totalWidth, 'margin': '0' });
			$jq(this).find('li img').not('.pinImg').each(function () { $jq(this).css({ height: 'auto', width: 'auto' }); $jq(this).css('margin-top', ($jq(that).height()-$jq(this).height()) / 2); });
			$jq(this).find('li:first .imgScrollPrev, li:last .imgScrollNext').hide();
			
			if(includeButtons){
				if(!this.hasNav) {
					this.hasNav = true;
					slideShowNav = $jq('<ul class="slideShowNav"></ul>');
					$jq(this).after(slideShowNav);			
					$jq(this).find('li').each(function (index) {
						var app = $jq(((index != 0) ? '<li><span>' : '<li class=\'current\'><span>') + index + '</span></li>').click(function () {
							slideShowNav.find('li').removeClass('current');
							$jq(this).addClass('current');
							var newIndex = $jq(this).text();
							moveTo.call(that,  newIndex, currentIndex);
							currentIndex = parseInt(newIndex);
							
							//alert(currentIndex);
							//alert($jq('.slideShow ul li:nth-child(currentIndex)').html());
						});
						slideShowNav.append(app);
					});
				}
			}
		}
	});
};

// EDF
var edf = {};
edf.general = function () {

	return {
		ready: function () {
			// Quick Onload Functions
			$jq('body').addClass('jsEnabled');
			$jq('body').each(function () { if ($jq('#nav').length == 0) { $jq(this).css({ 'background-position': '50% 150px' }); } });
			$jq('body .column').each(function () { if ($jq('.column', this).length == 0) { $jq(this).find(".removeJS").remove().end().wrapInner('<div class="colPad"></div>'); } });
			$jq('.innerCol').each(function () { if ($jq('.column', this).length == 0) { $jq(this).wrapInner('<div class="innerColPad"></div>'); } });
			$jq('.row, cite, .imageScroll li:last, table, .innerRow, .box > .blockLink:last-child, .socialPair li:last-child').after('<div class="clear" />');
			$jq('#content .box form').css({ 'float': 'left', 'width': '100%' }).after('<div class="clear" />');
			$jq('.pair3070, .tabs, .cite, .results li, .summaryBox').append('<div class="clear" />');
			$jq('.view-Documents.view-display-id-page_1 .results li .clear').remove();
			$jq('ol.spacedList li').wrapInner('<div class="innerLi"></div>');
			//$jq('.feature li').append('<img class="featureOverlay" src="/sites/all/themes/edf/images/featureOverlay.png" />');
			$jq('.feature, .feature li').append('<div class="clear" />');
			$jq('.radioSubGroup p').append('<img class="radioGroupLeft" src="images/radioGroupLeft.gif"/><img class="radioGroupRight" src="images/radioGroupRight.gif"/>');
			$jq('.colPad hr:last-child').css({ 'margin-bottom': "25px" });
			$jq('#pageIntro').parent('.row').css({ 'margin-bottom': "0" });
			$jq('#breakingNews').append('<div class="close"><img src="images/closelabel.png" /></div>').click(function () {
				$jq('#breakingNews').closest('.row').hide();
			});
			$jq('.subNav ul li.current').parent().addClass('currentLast');
			$jq('.subNav ul li.current').parents('.hasKids').addClass('open');
			$jq('.subNav ul li.open:last-child').parent().addClass('noPad');
			$jq('.subNav ul li.current:last-child > ul').parents('ul').addClass('noPad');
			$jq('.subNav li:not([class])').addClass('empty');
			//$jq("#edit-field-job-location-value option:first-child").text("All offices"); 
			$jq('#views-exposed-form-Expert-staff-list-page-2 input.textField').focus(function() {
				if( $jq(this).val() == "Type their name here"  || $jq(this).val() == "Search by name" ) {
			    	$jq(this).val("");
			    }
			});
			$jq('#views-exposed-form-Expert-staff-list-page-2 input.textField').blur(function() {
			    if( $jq(this).val() == "" ) {
			        $jq(this).val("Search by name");
			    }
			});
			$jq('.block-convio_signup input.textField').focus(function() {
				if( $jq(this).val() == "Your email" ) {
			    	$jq(this).val("");
			    }
			});
			$jq('#convio-signup-email-block-form-1 input.textField').focus(function() {
				if( $jq(this).val() == "Your email" ) {
			    	$jq(this).val("");
			    }
			});
			$jq('#convio-signup-email-block-form input.textField').focus(function() {
				if( $jq(this).val() == "Your email" ) {
			    	$jq(this).val("");
			    }
			});
			$jq('.webform-client-form input.textField').focus(function() {
				if( $jq(this).val() == "Your email"  || $jq(this).val() == "Your name" ) {
			    	$jq(this).val("");
			    }
			});
			$jq('.webform-client-form .form-email').focus(function() {
				if( $jq(this).val() == "Your email" ) {
			    	$jq(this).val("");
			    }
			});

			if ($.facebox) $('a[rel*=facebox]').facebox();  // note this doesn't require noConflict!!
			
			fixPNGs();
			
			//  add GA tracking on links in flyouts
			$jq(".region-flyout").find("a").click(function() {
			 	_gaq.push(['_trackEvent', 'Flyout Action', flyoutLookup($jq(this).parents(".pageWidth").attr("id")) + ' flyout click' , $jq(this).attr("href"), 0, true]);
			 	//alert(flyoutLookup($jq(this).parents(".pageWidth").attr("id")) + ' flyout click' );
			});
			
			// track expert & media contact emails
			$jq('#email-mail-page-form').submit(function() {
				_gaq.push(['_trackEvent', 'Email sent', $jq('h1.title').html().replace('Email ','') , '', 0, true]);
			});
			
			$jq('#comments fieldset').removeClass('collapsed');
			$jq('#comment-form-2').parent('div').addClass('box commentForm');
			
			// make sidebar sticky on blog posts
			if($jq('body').hasClass('node-type-blog-post')){
				//$jq('#content').addClass('stickem-container');
				//$jq('.region-sidebar-first').addClass('stickem');
				//$jq('#main-wrapper').stickem();
				
				//$jq('.stickem-outside').stickem();
				
				
				/*var stickyTop = $jq('.stickem').offset().top;
				$jq(window).scroll(function(){ // scroll event 
					var windowTop = $jq(window).scrollTop(); // returns number
				 	if (stickyTop < windowTop) {
				      $jq('.stickem').css({ position: 'fixed', top: 0 });
				    }
				    else {
				      $jq('.stickem').css('position','relative');
				    }
				});*/
				
				/*$jq('#sideColumn').waypoint('sticky', {
				  wrapper: '<div class="sticky-wrapper" />',
				  stuckClass: 'stuck'
				});*/
				
				/*$jq('#sideColumn').waypoint(function(event, direction){
					
					if (direction === 'down') {
						$jq(this).removeClass('sticky').addClass('bottomed');
					}
					else {
						$jq(this).removeClass('bottomed').addClass('sticky');
					}
				}, {
					offset: function() {
						
						 
						return $jq('#sideColumn').outerHeight() - $jq(this).outerHeight();
					}
				}).find('#contentArea').waypoint(function(event, direction) {
					$jq(this).parent().toggleClass('sticky', direction === "down");
					event.stopPropagation();
				});*/
				
				$jq('.captionSrc, .creditSrc').each(function(){
				    var $this = $(this);
				    var t = $this.text();
				    $this.html(t.replace('&lt;','<').replace('&gt;', '>').replace('&quot;', '"'));
				});

				
			}
			
			this.init();
		},
		load: function () {
			$jq('body').addClass('load');
			// only load the scrolling stuff at the load event because we need the 
			// content to be loaded for this
			this.initScrollingImages();
			this.initScrollingBlocks();
			$jq('body').captions(function () { $jq('.captionWrap.imgFlex').css({ 'width': '100%' }); });
            pinIt();
            timelines();
		},
		init: function () {
			this.initDonateForm();
			this.initGlossary();
			this.initTabbedAreas();
			this.initTabbed2Areas();
			this.initCollapsableQuestions();
			this.initFeatureBoxes();
			this.initGA();
		},
		initScrollingImages: function () {
			$jq(window).smartresize(function () {
				$jq('.imageScroll:not(.slideShow) ul').imgScroll();
				$jq('.imageScroll.slideShow ul').imgScroll(true);
			});
			$jq('.imageScroll:not(.slideShow) ul').imgScroll();
			$jq('.imageScroll.slideShow ul').imgScroll(true);
		},
		initScrollingBlocks: function () {
			$jq('.innerRow').each(function () {
				if ($jq(this).find('.col50').length > 2) {
					$jq(this).css({ 'position': 'relative', 'overflow': 'hidden' });
					$jq(this).wrapInner('<div class="scrollRow" style="position: absolute; width: auto; top: 0; left: 0;"></div>');
					$jq(this).siblings('.titleBar').prepend('<div class="imgScrollPrev" /><div class="imgScrollNext" />');

					var totalWidth = 0;
					var blockTallest = 0;
					var blockWidest = 0;
					$jq(this).find('.col50').each(function (i) {
						if ($jq(this).height() > blockTallest) {
							blockTallest = $jq(this).height();
						}
						if ($jq(this).width() > blockWidest) {
							blockWidest = $jq(this).width();
						}
						totalWidth += $jq(this).width();
					});
					$jq(this).css({ 'height': blockTallest });
					$jq(this).find('.col50').css({ 'width': blockWidest });
					$jq(this).find('.scrollRow').css({ 'height': blockTallest, 'width': totalWidth })

					$jq(this).siblings('.titleBar').find('.imgScrollPrev').click(function () {
						$jq(this).parent().siblings('.innerRow').find('.scrollRow').animate({ left: '+=' + blockWidest + '' }, 300, function () { $jq(this).parent('.innerRow').scrollPosition(); });
					});
					$jq(this).siblings('.titleBar').find('.imgScrollNext').click(function () {
						$jq(this).parent().siblings('.innerRow').find('.scrollRow').animate({ left: '-=' + blockWidest + '' }, 300, function () { $jq(this).parent('.innerRow').scrollPosition(); });
					});

					$jq(this).scrollPosition();
				}
			});
		},
		initDonateForm: function () {
			$jq('.radioGroup label').live('click', function () {
				$jq(this).parents('.radioGroup').children().removeClass('current');
				$jq(this).parents('.radioGroup').children().children().removeClass('current');
				$jq(this).parents('.radioLabelButton').addClass('current');
			});
			$jq('.radioGroup .textField').live('focus', function () {
				$jq(this).parents('.radioGroup').children().removeClass('current');
				$jq(this).parents('.radioGroup').children().children().removeClass('current');
				$jq(this).parents('.radioLabelButton').addClass('current');
			});
			$jq('.radioGroup').each(function () {
				var currentTallest = 0;
				var labels = $jq(this).find('.radioLabelButton');
				labels.each(function (i) {
					if ($jq(this).height() > currentTallest) {
						currentTallest = $jq(this).height();
					}
				});
				labels.css({ 'min-height': currentTallest });
				labels.children('label').css({ 'min-height': (currentTallest - 40) });
			});
		},
		initGlossary: function () {
			var glossary = $jq('.glossaryTip').text();
			$jq('.toolTip, acronym, abbr, .glossaryTip').each(function () {
				$jq(this).append('<span class="tip"><span class="tipPad">' + $jq(this).attr("title") + '</span></span>');
				var tip = $jq(this).find('.tip');
				var tipWidth = tip.width();
				var tipMargin = tipWidth / 2;
				$jq(this).css({ 'position': 'relative' });
				tip.css({ 'width': +tipWidth + 'px', 'margin-left': '-' + tipMargin + 'px' }).append('<div class="point" />')
			}).attr('title', '');
			$jq('.citeTip').each(function () {
				var tip = $jq(this).find('.tip');
				var tipWidth = tip.width();
				var tipMargin = tipWidth / 2;
				$jq(this).css({ 'position': 'relative' });
				tip.css({ 'width': +tipWidth + 'px', 'margin-left': '-' + tipMargin + 'px' }).append('<div class="point" />')
			});
			$jq('.toolTip, .citeTip, acronym, abbr, .glossaryTip').hover(
		        function () { $jq(this).find(".tip").stop(true, true).fadeIn(250); },
		        function () { $jq(this).find(".tip").stop(true, true).fadeOut(0); }
	        );
			$jq('.glossaryTip .tipPad').each(function () {
				$jq(this).prepend('<span>&mdash; ' + glossary + '</span>')
			});
		},
		initTabbedAreas: function () {
			$jq('.tabbed').each(function () {
				var container = $jq(this);
				var tabs = $jq('<ul class="tabs box"/>');
				container.prepend(tabs);
				container.children('h3').each(function (index) {
					$jq(this).nextUntil('h3').wrapAll('<div class="tab tab' + index + '"/>');
					tabs.append($jq('<li title="tab' + index + '">' + $jq(this).text() + '<img src="images/tab.gif" /></li>').click(
                    function () {
                    	container.find('.current').removeClass("current");
                    	$jq(this).addClass("current");
                    	container.find('.tab').css({ 'display': 'none' });
                    	$jq('.' + $jq(this).attr("title")).fadeIn();
						_gaq.push(['_trackEvent', 'Tab click', window.location.pathname , $jq(this).text(), 0, true]);
                    }));
					$jq(this).addClass('print');
				});
				container.find('.tabs li:first,.tab:first').addClass('current');
				tabs.append('<div class="clear"/>');
			});
		},
		initTabbed2Areas: function () {
			$jq('.tabbed2').each(function () {
				var container = $jq(this);
				var tabs = $jq('<ul class="tabs box"/>');
				container.prepend(tabs);
				container.children('h3').each(function (index) {
					$jq(this).nextUntil('h3').wrapAll('<div class="tab tab2_' + index + '"/>');
					tabs.append($jq('<li title="tab2_' + index + '">' + $jq(this).text() + '<img src="images/tab.gif" /></li>').click(
                    function () {
                    	container.find('.current').removeClass("current");
                    	$jq(this).addClass("current");
                    	container.find('.tab').css({ 'display': 'none' });
                    	$jq('.' + $jq(this).attr("title")).fadeIn();
						_gaq.push(['_trackEvent', 'Tab click', window.location.pathname , $jq(this).text(), 0, true]);
                    }));
					$jq(this).addClass('print');
				});
				container.find('.tabs li:first,.tabbed2 .tab:first').addClass('current');
				container.children('.tabbed2 .tab2_1').css({'display':'none'});
				tabs.append('<div class="clear"/>');
			});
		},
		initCollapsableQuestions: function () {
			$jq('.question').each(function () {
				$jq(this).find('dd').hide();
				$jq(this).find('dt').click(function () {
					$jq(this).parent().toggleClass('questionOpen');
					$jq(this).siblings().slideToggle();
				});
			});
		},
		initFeatureBoxes: function () {
			$jq('.feature li').each(function () {
				$jq(this).click(function(){
					window.location=$jq(this).find('a.button').attr('href'); return false;
				});
				$jq(this).hover(function(){
					$jq(this).addClass('hover');
				},function () {
					$jq(this).removeClass('hover');
				});
			});
			$jq('.feature').after('<div class="featureNav"><ul></ul><div class="clear" /></div>')
			var featureNav = $jq('.featureNav ul');
			$jq('.feature li h3').each(function (index) {
				var app = $jq(((index != 0) ? '<li>' : '<li class=\'current\'>') + $jq(this).siblings('.tabLabel').text() + '</li>').mouseover(function () {
					$jq('.featureNav li').removeClass('current');
					$jq(this).addClass('current');
					var i = $jq('.featureNav li').index($jq(this));
					$jq('.feature li').css({ 'position': 'absolute', 'zIndex': '2', 'width': '100%', 'height': 'auto' });
					$jq('.feature li').eq(i).css({ 'position': 'relative', 'zIndex': '1' }).show();
					$jq('.feature li:not(:nth-child(' + (i + 1) + '))').find('.divider').hide();
					//$jq('.feature li:not(:nth-child(' + (i + 1) + '))').find('.featureOverlay').hide();
					$jq('.feature li:not(:nth-child(' + (i + 1) + '))').fadeOut(150);
					$jq('.feature li').eq(i).find('.divider').fadeIn(700);
					//$jq('.feature li').eq(i).find('.featureOverlay').show();
					}).click(function(){
						var i = $jq('.featureNav li').index($jq(this));
						window.location.href = $jq('.feature li').eq(i).find('a').attr('href');
						return false;
					});
				featureNav.append(app);
			});
			// initial automatic display tracking - further tracking below
			//if($jq('ul').hasClass('feature')){
				//_gaq.push(['_trackEvent', 'Carousel display - Auto', window.location.pathname , $jq('.featureNav').find("li.current").html(), 0, true]);
			//}
			var featureBoxInterval = setInterval(function () {
				if ($jq('.feature').parent().data('pause'))
					return;
				var n = $jq('.featureNav li.current + li');
				if (n.length == 0) {
					n = $jq('.featureNav li:first');
					//clearInterval(featureBoxInterval);
				}
				n.triggerHandler('mouseover');
				// subsequent automatic display tracking
				//if($jq('ul').hasClass('feature')){
					//_gaq.push(['_trackEvent', 'Carousel display - Auto', window.location.pathname , $jq('.featureNav').find("li.current").html(), 0, true]);
				//}
			}, 7000); //5000
			$jq('.feature').parent().hover(function () { $jq(this).data('pause', true); _gaq.push(['_trackEvent', 'Carousel display - Hover', window.location.pathname , $jq(this).find("li.current").html(), 0, true]); }, function () { $jq(this).data('pause', false); });
			$jq('.featureNav ul').append('<div class="clear" />')
			$jq('.feature.single + .featureNav').remove();
				
		},
		initGA: function () {
			// add GA tracking to Carousel nav
			$jq(".featureNav li").click(function() {
				//alert( window.location.pathname + ' - ' + $jq(this).html());
				_gaq.push(['_trackEvent', 'Carousel tab click', window.location.pathname, $jq(this).html(), 0, true]);
				//console.log('tab click ' + $jq(this).html());
			});
			// add GA tracking to Carousel clicks
			$jq("ul.feature li").click(function() {
				_gaq.push(['_trackEvent', 'Carousel click', window.location.pathname, $jq(this).find("h3 a").html(), 0, true]);
				//console.log('carousel click ' + $jq(this).find("h3 a").html());
			});
		}
	}
} ();

edf.flyouts = function () {

    var cur = 0, shite = false;
    if ($jq.browser.version == '7.0' || $jq.browser.version == '6.0') shite = true;

    return {

        init: function () {
            var displayFlyout = false;
            var that = this;

            $jq('#nav li.active-trail').hover(
                function() {
                    if(!displayFlyout)
                        displayFlyout = false;
                },  function() {
                    displayFlyout = true;
                }
            );
            $jq('#header,#main,#appendix,#footer,#nav li:not(.active-trail)').hover(
                function() {
                    if(!displayFlyout)
                        displayFlyout = true;
                }, function() {}
            );

            $jq('.flyout .pageWidth').each(function () {
                $jq(this).append('<div class="clear"></div>');
                var id = $jq(this).attr('id').replace('flyout','');

                $jq('#nav li').eq(id).append('<div class="flyoutTrigger"></div><div class="arrowContainer"><img class="arrowActive" src="images/new-main-blue-arrow.png"><img class="arrowHover" src="images/new-main-grey-arrow.png"></div>');
                $jq(document).on('click', '.arrowContainer', function() { window.location = $jq(this).siblings('a').attr('href'); });
                if (!shite) $jq('#nav li').eq(id).children('.arrowContainer').css('width',$jq('#nav li').eq(id).width()+'px');

                var t, t2, t3, t4, t5, startX, startY, leftX, rightX, navY, triangle, currentX, currentY, points = [], rate = [], slowTrigger = 0;
                $jq('#nav li').eq(id).hover(
                    function() {
                        if(displayFlyout) {
                            if (shite) t2 = setTimeout(function() { $jq('.flyout').show(); }, 200);
                            else
                                $jq('.flyout').show();
                            if (cur == 0) {
                                t = setTimeout(function() {
                                    $jq('#flyout' + id).slideDown(200);
                                    if ($jq('#nav li:eq('+id+')').hasClass('active-trail'))
                                        $jq('#nav li:eq('+id+')').find('.arrowActive').fadeIn(300);
                                    else
                                        $jq('#nav li:eq('+id+')').addClass('engaged').find('.arrowHover').fadeIn(300);
                                    cur = id;
                                    _gaq.push(['_trackEvent', 'Flyout Action', 'expand', $jq(this).children("a").attr('title'), 0, true]);
                                }, 200);
                            }
                            else if (id != cur) {
                                if (shite) flipIt();
                                else {
                                    t5 = setInterval(function(){
                                        rate.push([currentX,currentY]);
                                        if (rate.length > 1) {
                                            if (distance(rate[rate.length-1][0],rate[rate.length-1][1],rate[rate.length-2][0],rate[rate.length-2][1]) < 10) slowTrigger++;
                                        }
                                        if (slowTrigger > 8) flipIt();
                                    }, 25);

                                    var count = 0;

                                    $jq(document).bind('mousemove', function(e){
                                        points.push([e.pageX,e.pageY]);
                                        if (count == 0) {
                                            startX = e.pageX; startY = e.pageY-2;
                                            leftX = $jq('#main-menu').offset().left + $jq('#main-menu li.first').width();
                                            rightX = $jq('#main-menu li.last').offset().left + $jq('#main-menu li.last').width();
                                            navY = $jq('#main-menu').offset().top + $jq('#main-menu').height();
                                            triangle = [{x: startX, y: startY}, {x: leftX, y: navY}, {x: rightX, y: navY}];
                                            /*$jq('<div class="markers" style="position: absolute; top: '+startY+'px; left: '+startX+'px; width: 2px; height: 2px; background-color: red; z-index: 1000;"></div>').appendTo('body');
                                             $jq('<div class="markers" style="position: absolute; top: '+navY+'px; left: '+leftX+'px; width: 2px; height: 2px; background-color: red; z-index: 1000;"></div>').appendTo('body');
                                             $jq('<div class="markers" style="position: absolute; top: '+navY+'px; left: '+rightX+'px; width: 2px; height: 2px; background-color: red; z-index: 1000;"></div>').appendTo('body');*/
                                        }
                                        else {
                                            currentX = e.pageX; currentY = e.pageY;
                                        }

                                        count++;
                                        if (isPointInPoly(triangle,{x: e.pageX, y: e.pageY})) {
                                            if (count > 2) if (points[points.length-1][1] < points[points.length-2][1]) flipIt();
                                        }
                                        else if (e.pageY <= navY) flipIt();
                                    });
                                }

                                function flipIt() {
                                    //$jq('.markers').remove();
                                    $jq('#flyout' + cur).fadeOut(0, function () {
                                        $jq('.arrowActive, .arrowHover').fadeOut(0);
                                        $jq('#nav li').removeClass('engaged');
                                        $jq('#flyout' + id).fadeIn(0);
                                        if ($jq('#nav li:eq('+id+')').hasClass('active-trail'))
                                            $jq('#nav li:eq('+id+')').find('.arrowActive').fadeIn(0);
                                        else
                                            $jq('#nav li:eq('+id+')').addClass('engaged').find('.arrowHover').fadeIn(0);
                                        cur = id;
                                    });
                                    if (!shite) reset();
                                }
                            }
                        }
                        function distance(x1,y1,x2,y2) {
                            return Math.sqrt(Math.pow(Math.abs(x1-x2),2)+Math.pow(Math.abs(y1-y2),2));
                        }
                        function isPointInPoly(poly,pt) {
                            for (var c = false, i = -1, l = poly.length, j = l - 1; ++i < l; j = i)
                                ((poly[i].y <= pt.y && pt.y < poly[j].y) || (poly[j].y <= pt.y && pt.y < poly[i].y))
                                    && (pt.x < (poly[j].x - poly[i].x) * (pt.y - poly[i].y) / (poly[j].y - poly[i].y) + poly[i].x)
                                && (c = !c);
                            return c;
                        }
                    },
                    function() {
                        clearTimeout(t);
                        clearTimeout(t3);
                        if (shite) clearTimeout(t2);
                        else reset();
                        var inFlyout = false;
                        $jq('#flyout' + id).mouseenter(function(){ inFlyout = true; }).mouseleave(function () { inFlyout = false; });
                    }
                );

                function reset() {
                    $jq(document).unbind('mousemove');
                    clearInterval(t5);
                    points = []; rate = [];
                    slowTrigger = 0;
                    //$jq('.markers').remove();
                }

                $jq('#flyout' + id).hover(
                    function () {
                        points = [];
                        if ($jq(this).data('closing'))
                            $jq(this).stop(true, true);
                    },
                    function () {}
                );
                $jq('#nav a.button, #nav li.first, #header, #main-wrapper').hover(
                    function () { window.clearInterval(t4); that.closeFlyouts(); }
                );

                if (shite) $jq(this).append($jq('<div class="close"><img src="images/closelabel.png" /></div>').click(function () { that.closeFlyouts(); }));

            });

        },
        closeFlyouts: function () {
            $jq('.arrowActive, .arrowHover').fadeOut(200);
            $jq('#nav li').removeClass('engaged');
            $jq('#flyout' + cur).slideToggle(250, function () { $jq('.flyout').hide(0); });
            cur = 0;
            $jq(document).unbind('mousemove');
            //$jq('.markers').remove();
        }
    }
} ();

function fixPNGs(){
  if($jq.browser.msie && $jq.browser.version < 9){ 
 var i;
 //alert(document.images.length);
 for(i in document.images){
   if(document.images[i].src){
  var imgSrc = document.images[i].src;
  if(imgSrc.substr(imgSrc.length-4) === '.png' || imgSrc.substr(imgSrc.length-4) === '.PNG'){
  document.images[i].style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true',sizingMethod='crop',src='" + imgSrc + "')";
  }
   }
 } 
  }
}

// function to return the name of a flyout ID
function flyoutLookup (id) {
	switch(id) {
		case 'flyout1': var flyoutName = 'What we do'; break;
		case 'flyout2': var flyoutName = 'How we work'; break;
		case 'flyout3': var flyoutName = 'Success stories'; break;
		case 'flyout4': var flyoutName = 'How you can help'; break;
		case 'flyout5': var flyoutName = 'About us'; break;
		case 'flyout6': var flyoutName = 'Blog'; break;
	}
	return flyoutName;
 }

// track slideshow slides in GA
function trackSlide (title) {
	_gaq.push(['_trackEvent', 'Slideshow slide', window.location.pathname , title, 0, true]);
}

function pinIt() {
    $jq('img.pinIt').each(function(){
        var imgTitle = $jq('title').text();
        if ($jq(this).attr('title') != undefined && $jq(this).attr('title') != null && $jq(this).attr('title') != '') imgTitle = $jq(this).attr('title') + ': ' + imgTitle;
        var imgSrc = $jq(this).attr('src');
        if (imgSrc.indexOf('http://dev.edf.org') == -1) {imgSrc = imgSrc.replace('/sites','http://dev.edf.org/sites');}
        var pinUrl = 'http://pinterest.com/pin/create/button/?url='+encodeURIComponent(window.location.href+'?utm_source=pinterest&utm_medium=social-media&utm_campaign=edf-org_pinitbutton')+'&media='+encodeURIComponent(imgSrc)+'&description='+encodeURIComponent(imgTitle);
        $jq(this).wrap('<div class="pinItDiv"></div>');
        $jq('<a class="pinLink" href="'+pinUrl+'" style="position: absolute; bottom: 0; left: 0; z-index: 1000; margin-left: 5px; margin-bottom: 5px;"><img src="/sites/default/files/u13/pin-it-button.png" style="height: 21px;"></a>').insertAfter($jq(this));
    });

    $jq('a.pinLink').live('click vclick',function(e){
        e.preventDefault();
        if ($jq(this).prev('img.pinIt').length > 0)
            _gaq.push(['_trackEvent', 'Pinterest', window.location.pathname, 'Image: ' + $jq(this).prev('img.pinIt').attr('src'), 0, true]);
        else if ($jq(this).parent().parent().prev('.imgCenter').children('img').length > 0)
            _gaq.push(['_trackEvent', 'Pinterest', window.location.pathname, 'Slide: ' + $jq(this).parent().parent().prev('.imgCenter').children('img').attr('src'), 0, true]);
        else
            _gaq.push(['_trackEvent', 'Pinterest', window.location.pathname, $jq(this).attr('href'), 0, true]);

        var w = ($jq(window).width()-700)/2;
        var l = ($jq(window).height()-600)/2;
        window.open($jq(this).attr('href'),'mywindow','left='+w+',top='+l+',width=700,height=600,resizable=yes,scrollbars=yes,toolbar=no,location=no,directories=no,status=no,menubar=no');
    });
}
function timelines() {
    $jq('.userTimeline').each(function(){
        var el = $jq(this);
        var screen_name = $jq(this).text().replace(/\s+/g,'').replace(/\n/g,'');
        var handle = '@'+screen_name;
        var count = 2;
        if (typeof $jq(this).attr('data-count') !== 'undefined') count = parseInt($jq(this).attr('data-count'))-1;
        if (typeof $jq(this).attr('data-name') !== 'undefined') handle = $jq(this).attr('data-name');
        $jq.get('/tmhOAuth-master/timeline.php?screen_name='+screen_name, function(data) {
            var html = '<div class="box"><h4 class="underlineTitle"><a id="follow'+screen_name+'" href="http://twitter.com/'+screen_name+'" class="right twitterFollow">Follow</a><a href="http://twitter.com/'+screen_name+'">'+handle+' on Twitter</a></h4><ul class="newsList">'+data+'</ul><hr><p><a href="http://twitter.com/#!/EnvDefenseFund/edfers/members">See all EDF Twitter feeds »</a></p></div>';
            el.html(html).show(0);
            el.find('li:gt('+count+')').hide(0);
            el.find('li:eq('+count+')').css({'border-bottom':'none','padding-bottom':'0'});
            if (typeof twttr.widgets !== 'undefined') twttr.widgets.load(document.getElementById('follow'+screen_name));
        }, 'html');
    });
}