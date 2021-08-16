// begin: Custom JS
// if (jQuery(window).width() < 768) {
//   jQuery('.item-expanded__arrow').on('click', function(e) {
//     e.preventDefault();
//     jQuery(this).parent('.item-expanded').toggleClass('open');
//     jQuery('.nav-wrap').toggleClass('sub-menu-open');
//   });

//   jQuery('.sub-nav').on('click', function(e) {
//     e.stopPropagation();
//   });

//   jQuery('.btn-back').on('click', function(e) {
//     e.preventDefault();
//     jQuery('.item-expanded').removeClass('open');
//     jQuery('.nav-wrap').removeClass('sub-menu-open');
//   });
// }

// function resize() {
//   if (jQuery(window).width() > 767) {
//     jQuery('body').removeClass('nav-active');
//     jQuery('.item-expanded').removeClass('open');
//     jQuery('.nav-wrap').removeClass('sub-menu-open');
//   }
// }

jQuery(document).ready( function() {
    //jQuery(window).resize(resize);
    //resize();

    jQuery("header #block-socialshare").appendTo("ul.menu.menu--main.nav");
});

// end: Custom JS


jQuery(function () {
  initSlickCarouselCourage();
  initTabs();
  initAccordionToggle();
  initReadMoreShow();
  initTabNavigation();
  navOpener();
});

function navOpener() {
  jQuery(".btn-open.nav-opener").click(function(){
    jQuery("body").addClass("nav-active");
  });
  jQuery(".btn-close.nav-opener").click(function(){
    jQuery("body").removeClass("nav-active");
  });
  jQuery(".item-expanded__arrow").click(function(){
    jQuery(this).toggleClass("active");
    jQuery(this).prev().slideToggle();
  });
}

function initPagination() {
  jQuery('.article').paginate({
    perPage: 5, 
  });
}



function initTabNavigation() {
  let navItem = jQuery('.navigation-item');

  navItem.on('click', function(e){
    let link = jQuery(this).attr('href');
    let nextTab = jQuery('.tabset').find('a[href="' + link + '"]')
    nextTab.trigger('click');
    if (jQuery('.tabset-block').length) {
      jQuery('html, body').animate({
        scrollTop: jQuery('.tabset-block').offset().top
      }, 1000);
    }
  });

}

//faq list toggling
function initAccordionToggle() {
  let question = jQuery('.accordion-block__title');
  let answer = jQuery('.accordion-block__content')
  question.on('click', function(){
    
    if( jQuery(this).hasClass('open') ) {
      jQuery(this).siblings(answer).slideUp(300);
      jQuery(this).removeClass('open')
    } else {
      jQuery(this).siblings(answer).slideDown(300);
      jQuery(this).addClass('open');
    }
  });
}

function initReadMoreShow() {
  let btn = jQuery('.accordion-block__btn');
  let text = jQuery('.short-text');

  btn.on('click', function(){
    jQuery(this).siblings(text).removeClass('short-text');
    jQuery(this).hide();
  })

}



function initSlickCarouselCourage() {

  jQuery('.text-gallery').each(function () {
    var jQueryholder = jQuery(this);
    var jQuerysliderFor = jQueryholder.find('.slider-for');
    var jQuerysliderNav = jQueryholder.find('.slider-nav');


    jQuerysliderFor.slick({
      rows: 0,
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: false,
      arrows: true,
      prevArrow: jQuery('.text-gallery__content-block .prev'),
          nextArrow: jQuery('.text-gallery__content-block .next'),
      fade: true,
      asNavFor: jQuerysliderNav.length ? jQuerysliderNav : null,
      speed: 200,
    });

    jQuerysliderNav.slick({
      rows: 0,
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: jQuerysliderFor.length ? jQuerysliderFor : null,
      arrows: true,
      prevArrow: jQuery('.text-gallery__tabs-block .prev'),
          nextArrow: jQuery('.text-gallery__tabs-block .next'),
      dots: false,
      focusOnSelect: true,
      infinite: false,
      draggable: false,
      swipeToSlide: false,
      touchMove: false,
      swipe: false,
      speed: 200,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          }
        },
        ]
    });
  });
}

// content tabs init
function initTabs() {
  jQuery('.tabset').tabset({
        activeClass: 'active',  // active class for active tab navigation link
        addToParent: true,    // add the class not to the link but to its parent
        autoHeight: true,   // smooth changing of the height during tabs switching (first parent node is used)
        animSpeed: 10,      // animation speed
        tabLinks: 'a',      // selector of tab navigation links in the tabset
        event: 'click'    // switch on event "click", "mouseover", etc.
  });
}

/*
 * jQuery Tabs plugin
 */

;(function(jQuery, jQuerywin) {
  'use strict';

  function Tabset(jQueryholder, options) {
    this.jQueryholder = jQueryholder;
    this.options = options;

    this.init();
  }

  Tabset.prototype = {
    init: function() {
      this.jQuerytabLinks = this.jQueryholder.find(this.options.tabLinks);

      this.setStartActiveIndex();
      this.setActiveTab();

      if (this.options.autoHeight) {
        this.jQuerytabHolder = jQuery(this.jQuerytabLinks.eq(0).attr(this.options.attrib)).parent();
      }

      this.makeCallback('onInit', this);
    },

    setStartActiveIndex: function() {
      var jQueryclassTargets = this.getClassTarget(this.jQuerytabLinks);
      var jQueryactiveLink = jQueryclassTargets.filter('.' + this.options.activeClass);
      var jQueryhashLink = this.jQuerytabLinks.filter('[' + this.options.attrib + '="' + location.hash + '"]');
      var activeIndex;

      if (this.options.checkHash && jQueryhashLink.length) {
        jQueryactiveLink = jQueryhashLink;
      }

      activeIndex = jQueryclassTargets.index(jQueryactiveLink);

      this.activeTabIndex = this.prevTabIndex = (activeIndex === -1 ? (this.options.defaultTab ? 0 : null) : activeIndex);
    },

    setActiveTab: function() {
      var self = this;

      this.jQuerytabLinks.each(function(i, link) {
        var jQuerylink = jQuery(link);
        var jQueryclassTarget = self.getClassTarget(jQuerylink);
        var jQuerytab = jQuery(jQuerylink.attr(self.options.attrib));

        if (i !== self.activeTabIndex) {
          jQueryclassTarget.removeClass(self.options.activeClass);
          jQuerytab.addClass(self.options.tabHiddenClass).removeClass(self.options.activeClass);
        } else {
          jQueryclassTarget.addClass(self.options.activeClass);
          jQuerytab.removeClass(self.options.tabHiddenClass).addClass(self.options.activeClass);
        }

        self.attachTabLink(jQuerylink, i);
      });
    },

    attachTabLink: function(jQuerylink, i) {
      var self = this;

      jQuerylink.on(this.options.event + '.tabset', function(e) {
        e.preventDefault();

        if (self.activeTabIndex === self.prevTabIndex && self.activeTabIndex !== i) {
          self.activeTabIndex = i;
          self.switchTabs();
        }
        if (self.options.checkHash) {
          location.hash = jQuery(this).attr('href').split('#')[1]
        }
      });
    },

    resizeHolder: function(height) {
      var self = this;

      if (height) {
        this.jQuerytabHolder.height(height);
        setTimeout(function() {
          self.jQuerytabHolder.addClass('transition');
        }, 10);
      } else {
        self.jQuerytabHolder.removeClass('transition').height('');
      }
    },

    switchTabs: function() {
      var self = this;

      var jQueryprevLink = this.jQuerytabLinks.eq(this.prevTabIndex);
      var jQuerynextLink = this.jQuerytabLinks.eq(this.activeTabIndex);

      var jQueryprevTab = this.getTab(jQueryprevLink);
      var jQuerynextTab = this.getTab(jQuerynextLink);

      jQueryprevTab.removeClass(this.options.activeClass);

      if (self.haveTabHolder()) {
        this.resizeHolder(jQueryprevTab.outerHeight());
      }

      setTimeout(function() {
        self.getClassTarget(jQueryprevLink).removeClass(self.options.activeClass);

        jQueryprevTab.addClass(self.options.tabHiddenClass);
        jQuerynextTab.removeClass(self.options.tabHiddenClass).addClass(self.options.activeClass);

        self.getClassTarget(jQuerynextLink).addClass(self.options.activeClass);

        if (self.haveTabHolder()) {
          self.resizeHolder(jQuerynextTab.outerHeight());

          setTimeout(function() {
            self.resizeHolder();
            self.prevTabIndex = self.activeTabIndex;
            self.makeCallback('onChange', self);
          }, self.options.animSpeed);
        } else {
          self.prevTabIndex = self.activeTabIndex;
        }
      }, this.options.autoHeight ? this.options.animSpeed : 1);
    },

    getClassTarget: function(jQuerylink) {
      return this.options.addToParent ? jQuerylink.parent() : jQuerylink;
    },

    getActiveTab: function() {
      return this.getTab(this.jQuerytabLinks.eq(this.activeTabIndex));
    },

    getTab: function(jQuerylink) {
      return jQuery(jQuerylink.attr(this.options.attrib));
    },

    haveTabHolder: function() {
      return this.jQuerytabHolder && this.jQuerytabHolder.length;
    },

    destroy: function() {
      var self = this;

      this.jQuerytabLinks.off('.tabset').each(function() {
        var jQuerylink = jQuery(this);

        self.getClassTarget(jQuerylink).removeClass(self.options.activeClass);
        jQuery(jQuerylink.attr(self.options.attrib)).removeClass(self.options.activeClass + ' ' + self.options.tabHiddenClass);
      });

      this.jQueryholder.removeData('Tabset');
    },

    makeCallback: function(name) {
      if (typeof this.options[name] === 'function') {
        var args = Array.prototype.slice.call(arguments);
        args.shift();
        this.options[name].apply(this, args);
      }
    }
  };

  jQuery.fn.tabset = function(opt) {
    var args = Array.prototype.slice.call(arguments);
    var method = args[0];

    var options = jQuery.extend({
      activeClass: 'active',
      addToParent: false,
      autoHeight: false,
      checkHash: false,
      defaultTab: true,
      animSpeed: 500,
      tabLinks: 'a',
      attrib: 'href',
      event: 'click'
    }, opt);
    options.autoHeight = options.autoHeight;

    return this.each(function() {
      var jQueryholder = jQuery(this);
      var instance = jQueryholder.data('Tabset');

      if (typeof opt === 'object' || typeof opt === 'undefined') {
        jQueryholder.data('Tabset', new Tabset(jQueryholder, options));
      } else if (typeof method === 'string' && instance) {
        if (typeof instance[method] === 'function') {
          args.shift();
          instance[method].apply(instance, args);
        }
      }
    });
  };
}(jQuery, jQuery(window)));