(function ($) {
  "use strict";
  /*--------------------------------
        JS Index Here
    ---------------------------------*/
  /*
    01.On Load Function
    02.Preloader
    03.Mobile Menu
    04.Sticky fix 
    05.Scroll To Top 
    06.Global Slider 
    07.Popup Sidemenu 
    08.Magnific Popup
    09.Set Background Image  
    10.Counter Up 
    11.Cursor Follower
    12.Wow Animation 
    13.Nice Select 
    */
  /*---------------------------------
        JS Index End
    ---------------------------------*/

  /*---------- 01.On Load Function ----------*/

  $(window).on("load", function () {
    $(".preloader").fadeOut();
  });

  /*---------- 02.Preloader ----------*/
  if ($(".preloader").length > 0) {
    $(".preloaderCls").on("click", function (e) {
      e.preventDefault();
      $(".preloader").hide();
    });
  }

  /*---------- 03.Mobile Menu ----------*/
  $.fn.etmobilemenu = function (options) {
    var opt = $.extend(
      {
        menuToggleBtn: ".et-menu-toggle",
        bodyToggleClass: "et-body-visible",
        subMenuClass: "et-submenu",
        subMenuParent: "menu-item-has-children",
        gtSubMenuParent: "menu-item-has-children",
        subMenuParentToggle: "et-active",
        meanExpandClass: "et-mean-expand",
        appendElement: '<span class="et-mean-expand"></span>',
        subMenuToggleClass: "et-open",
        toggleSpeed: 400,
      },
      options
    );

    return this.each(function () {
      var menu = $(this); // Select menu

      // Menu Show & Hide
      function menuToggle() {
        menu.toggleClass(opt.bodyToggleClass);

        // collapse submenu on menu hide or show
        var subMenu = "." + opt.subMenuClass;
        $(subMenu).each(function () {
          if ($(this).hasClass(opt.subMenuToggleClass)) {
            $(this).removeClass(opt.subMenuToggleClass);
            $(this).css("display", "none");
            $(this).parent().removeClass(opt.subMenuParentToggle);
          }
        });
      }

      // Class Set Up for every submenu
      menu.find("." + opt.subMenuParent).each(function () {
        var submenu = $(this).find("ul");
        submenu.addClass(opt.subMenuClass);
        submenu.css("display", "none");
        $(this).addClass(opt.subMenuParent);
        $(this).addClass(opt.gtSubMenuParent); // Add menu-item-has-children class
        $(this).children("a").append(opt.appendElement);
      });

      // Toggle Submenu
      function toggleDropDown($element) {
        var submenu = $element.children("ul");
        if (submenu.length > 0) {
          $element.toggleClass(opt.subMenuParentToggle);
          submenu.slideToggle(opt.toggleSpeed);
          submenu.toggleClass(opt.subMenuToggleClass);
        }
      }

      // Submenu toggle Button
      var itemHasChildren = "." + opt.gtSubMenuParent + " > a";
      $(itemHasChildren).each(function () {
        $(this).on("click", function (e) {
          e.preventDefault();
          toggleDropDown($(this).parent());
        });
      });

      // Menu Show & Hide On Toggle Btn click
      $(opt.menuToggleBtn).each(function () {
        $(this).on("click", function () {
          menuToggle();
        });
      });

      // Hide Menu On outside click
      menu.on("click", function (e) {
        e.stopPropagation();
        menuToggle();
      });

      // Stop Hide full menu on menu click
      menu.on("click", function (e) {
        e.stopPropagation();
      });

      // Prevent submenu from hiding when clicking inside the menu
      menu.find("div").on("click", function (e) {
        e.stopPropagation();
      });
    });
  };

  $(".et-menu-wrapper").etmobilemenu();

  /*---------- 04.Sticky fix ----------*/
  $(window).scroll(function () {
    var topPos = $(this).scrollTop();
    if (topPos > 10) {
      $(".sticky-wrapper").addClass("sticky");
      $(".category-menu").addClass("close-category");
    } else {
      $(".sticky-wrapper").removeClass("sticky");
      $(".category-menu").removeClass("close-category");
    }
  });

  $(".menu-expand").each(function () {
    $(this).on("click", function (e) {
      e.preventDefault();
      $(".category-menu").toggleClass("open-category");
    });
  });
  
  /*---------- 05.Scroll To Top ----------*/
  if ($(".scroll-top").length > 0) {
    var scrollTopbtn = document.querySelector(".scroll-top");
    var progressPath = document.querySelector(".scroll-top path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "stroke-dashoffset 10ms linear";
    var updateProgress = function () {
      var scroll = $(window).scrollTop();
      var height = $(document).height() - $(window).height();
      var progress = pathLength - (scroll * pathLength) / height;
      progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 750;
    jQuery(window).on("scroll", function () {
      if (jQuery(this).scrollTop() > offset) {
        jQuery(scrollTopbtn).addClass("show");
      } else {
        jQuery(scrollTopbtn).removeClass("show");
      }
    });
    jQuery(scrollTopbtn).on("click", function (event) {
      event.preventDefault();
      jQuery("html, body").animate({ scrollTop: 0 }, duration);
      return false;
    });
  }

  /*----------- 06.Global Slider ----------*/

  function applyAnimationProperties() {
    $("[data-ani]").each(function () {
      var animationClass = $(this).data("ani");
      $(this).addClass(animationClass);
    });

    $("[data-ani-delay]").each(function () {
      var delay = $(this).data("ani-delay");
      $(this).css("animation-delay", delay);
    });
  }

  // Call the animation properties function
  applyAnimationProperties();

  // Function to initialize Swiper
  function initializeSwiper(sliderContainer) {
    var sliderOptions = sliderContainer.data("slider-options");

    console.log("Slider options: ", sliderOptions);

    var previousArrow = sliderContainer.find(".slider-prev");
    var nextArrow = sliderContainer.find(".slider-next");
    var paginationElement = sliderContainer.find(".slider-pagination");
    var numberedPagination = sliderContainer.find(
      ".slider-pagination.pagi-number"
    );

    var paginationStyle = sliderOptions["paginationType"] || "bullets";
    var autoplaySettings = sliderOptions["autoplay"] || {
      delay: 6000,
      disableOnInteraction: false,
    };

    var defaultSwiperConfig = {
      slidesPerView: 1,
      spaceBetween: sliderOptions["spaceBetween"] || 24,
      loop: sliderOptions["loop"] !== false,
      speed: sliderOptions["speed"] || 1000,
      initialSlide: sliderOptions["initialSlide"] || 0,
      centeredSlides: !!sliderOptions["centeredSlides"],
      effect: sliderOptions["effect"] || "slide",
      fadeEffect: {
        crossFade: true,
      },
      autoplay: autoplaySettings,
      navigation: {
        nextEl: nextArrow.length ? nextArrow.get(0) : null,
        prevEl: previousArrow.length ? previousArrow.get(0) : null,
      },
      pagination: {
        el: paginationElement.length ? paginationElement.get(0) : null,
        type: paginationStyle,
        clickable: true,
        renderBullet: function (index, className) {
          var bulletNumber = index + 1;
          var formattedNumber =
            bulletNumber < 10 ? "0" + bulletNumber : bulletNumber;
          if (numberedPagination.length) {
            return (
              '<span class="' +
              className +
              ' number">' +
              formattedNumber +
              "</span>"
            );
          } else {
            return (
              '<span class="' +
              className +
              '" aria-label="Go to Slide ' +
              formattedNumber +
              '"></span>'
            );
          }
        },
      },
      on: {
        slideChange: function () {
          setTimeout(
            function () {
              this.params.mousewheel.releaseOnEdges = false;
            }.bind(this),
            500
          );
        },
        reachEnd: function () {
          setTimeout(
            function () {
              this.params.mousewheel.releaseOnEdges = true;
            }.bind(this),
            750
          );
        },
      },
    };

    var finalConfig = $.extend({}, defaultSwiperConfig, sliderOptions);
    console.log("Complete Swiper options: ", finalConfig);

    // Initialize the Swiper instance
    return new Swiper(sliderContainer.get(0), finalConfig);
  }

  // Initialize Swipers on page load
  var swiperInstances = [];
  $(".et-slider").each(function () {
    var sliderContainer = $(this);
    var swiperInstance = initializeSwiper(sliderContainer);
    swiperInstances.push(swiperInstance);
  });

  // Bootstrap tab show event
  $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
    var targetTab = $(e.target).attr("href");
    $(targetTab)
      .find(".et-slider")
      .each(function () {
        var sliderContainer = $(this);
        if (!sliderContainer[0].swiper) {
          initializeSwiper(sliderContainer);
        } else {
          sliderContainer[0].swiper.update();
        }
      });
  });

  // Add click event handlers for external slider arrows based on data attributes
  $("[data-slider-prev], [data-slider-next]").on("click", function () {
    var targetSliderSelector =
      $(this).data("slider-prev") || $(this).data("slider-next");
    var targetSlider = $(targetSliderSelector);

    if (targetSlider.length) {
      var swiper = targetSlider[0].swiper;

      if (swiper) {
        if ($(this).data("slider-prev")) {
          swiper.slidePrev();
        } else {
          swiper.slideNext();
        }
      }
    }
  });

  /*---------- 07.Popup Sidemenu ----------*/
  function popupSideMenu($sideMenu, $sideMunuOpen, $sideMenuCls, $toggleCls) {
    // Sidebar Popup
    $($sideMunuOpen).on("click", function (e) {
      e.preventDefault();
      $($sideMenu).addClass($toggleCls);
    });
    $($sideMenu).on("click", function (e) {
      e.stopPropagation();
      $($sideMenu).removeClass($toggleCls);
    });
    var sideMenuChild = $sideMenu + " > div";
    $(sideMenuChild).on("click", function (e) {
      e.stopPropagation();
      $($sideMenu).addClass($toggleCls);
    });
    $($sideMenuCls).on("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      $($sideMenu).removeClass($toggleCls);
    });
  }
  popupSideMenu(".sidemenu-cart", ".sideMenuToggler", ".sideMenuCls", "show");
  popupSideMenu(".sidemenu-info", ".sideMenuInfo", ".sideMenuCls", "show");

  /*----------- 08.Magnific Popup ----------*/
  /* magnificPopup img view */
  $(".popup-image").magnificPopup({
    type: "image",
    mainClass: "mfp-zoom-in",
    removalDelay: 260,
    gallery: {
      enabled: true,
    },
  });

  /* magnificPopup video view */
  $(".popup-video").magnificPopup({
    type: "iframe",
    removalDelay: 260,
    mainClass: "mfp-zoom-in",
  });

  /* magnificPopup video view */
  $(".popup-content").magnificPopup({
    type: "inline",
    midClick: true,
  });

  /*---------- 09.Set Background Image  ----------*/
  if ($("[data-bg-src]").length > 0) {
    $("[data-bg-src]").each(function () {
      var src = $(this).attr("data-bg-src");
      $(this).css("background-image", "url(" + src + ")");
      $(this).removeAttr("data-bg-src").addClass("background-image");
    });
  }

  /*----------- 10.Counter Up ----------*/
  $(".counter-number").counterUp({
    delay: 10,
    time: 3000,
  });

  // /*----------- 11.Cursor Follower  ----------*/
  function mousecursor() {
    if ($("body")) {
      const e = document.querySelector(".cursor-inner"),
        t = document.querySelector(".cursor-outer");
      let n,
        i = 0,
        o = !1;
      (window.onmousemove = function (s) {
        o ||
          (t.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (e.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (n = s.clientY),
          (i = s.clientX);
      }),
        $("body").on("mouseenter", "a, .cursor-pointer", function () {
          e.classList.add("cursor-hover");
          t.classList.add("cursor-hover");
        }),
        $("body").on("mouseleave", "a, .cursor-pointer", function () {
          ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
            (e.classList.remove("cursor-hover"),
            t.classList.remove("cursor-hover"));
        }),
        (e.style.visibility = "visible"),
        (t.style.visibility = "visible");
    }
  }
  $(function () {
    mousecursor();
  });

  // /*----------- 12.Wow Animation  ----------*/
  new WOW().init();

  // /*----------- 13.Nice Select  ----------*/
  if ($(".single-select").length) {
    $(".single-select").niceSelect();
  }
  // /*----------- ajax contact form /*-----------*/
  $("#contact-form").on("submit", function (e) {
    e.preventDefault();
    var formData = $("#contact-form").serialize();
    var msg = $(".contactformmessage");
    $.ajax({
      type: "POST",
      url: "assets/contactform/contactformhandler.php",
      data: formData,
    })
      .done(function (response) {
        // Make sure that the formMessages div has the 'success' class.
        msg.removeClass("text-danger");
        msg.addClass("text-success");

        // Set the message text.
        msg.text(response);
        msg.slideDown("slow");
        // Clear the form.
        $("#contact-form input,#contact-form textarea").val("");
      })
      .fail(function (data) {
        // Make sure that the formMessages div has the 'error' class.
        msg.removeClass("text-success");
        msg.addClass("text-danger");

        // Set the message text.
        if (data.responseText !== "") {
          msg.text(data.responseText);
          msg.slideDown("slow");
        } else {
          msg.text("اشکالی رخ داده است");
          msg.slideDown("slow");
        }
      });
  });
})(jQuery);
