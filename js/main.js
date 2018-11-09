particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 90,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 500,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});

var md = new MobileDetect(window.navigator.userAgent);



var _createClass = function () {
  function defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }
  return function (Constructor, protoProps, staticProps) {
    if (protoProps) defineProperties(Constructor.prototype, protoProps);
    if (staticProps) defineProperties(Constructor, staticProps);
    return Constructor;
  };
}(); function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}
var RippleModal = function () {

  function RippleModal() {
    var _this = this; var triggerClass = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'modal-trigger'; var modalClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'boxmodal'; _classCallCheck(this, RippleModal);
    this.triggerClass = triggerClass;
    var $body = document.body;

    var $rippleContainer = document.createElement('div');
    this.ripple = document.createElement('div');

    $rippleContainer.classList.add('ripple-container');
    this.ripple.classList.add('ripple');

    $rippleContainer.appendChild(this.ripple);
    $body.appendChild($rippleContainer);

    this.modals = [].slice.call(document.querySelectorAll('.' + modalClass));

    this.animationStart = 0;
    this.activeModal = null;

    this.modals.map(function (modal) {
      var close = document.createElement('button');
      close.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
      close.classList.add('close');
      modal.appendChild(close);
      close.addEventListener('click', function (evt) { return _this._closeModal(evt, modal); }, false);
    });

    this._setRippleSize();
    this._initEvents();
  } _createClass(RippleModal, [{
    key: '_setRippleSize', value: function _setRippleSize() {
      var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
      var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
      var s = w > h ? w * 2 : h * 2;

      this.ripple.style.width = s + 'px';
      this.ripple.style.height = s + 'px';
    }
  }, {
    key: '_initEvents', value: function _initEvents() {
      var _this2 = this;
      window.addEventListener('resize', function () { return _this2._setRippleSize(); }, false);
      document.body.addEventListener('click', function (evt) { return _this2._handleClicks(evt); }, false);
    }
  }, {
    key: '_handleClicks', value: function _handleClicks(

      evt) {
      var target = evt.target;
      this.animationStart = 0;

      if (target.classList.contains(this.triggerClass)) {
        var modalId = target.dataset.modal.substr(1);
        this.activeModal = document.getElementById(modalId);

        var clickTop = evt.clientY;
        var clickLeft = evt.clientX;

        this.ripple.style.left = clickLeft + 'px';
        this.ripple.style.top = clickTop + 'px';
        this.ripple.classList.add('is-animating');

        window.requestAnimationFrame(this._triggerAnimation.bind(this));
      }
    }
  }, {
    key: '_triggerAnimation', value: function _triggerAnimation(

      timestamp) {
      if (!this.animationStart) {
        this.animationStart = timestamp;
      }

      var progress = timestamp - this.animationStart;
      if (progress > 1000) {
        this.ripple.classList.remove('is-animating');
        return true;
      } else if (progress > 500) {
        this.activeModal.classList.add('active');
        this.activeModal.style.display = "block";
      }

      window.requestAnimationFrame(this._triggerAnimation.bind(this));
    }
  }, {
    key: '_closeModal', value: function _closeModal(

      evt, modal) {
      evt.preventDefault();
      modal.classList.remove('active');
      modal.style.display = "none";
    }
  }]); return RippleModal;
}();


(function () {
  new RippleModal();
})();


(function () {
  var lastTime = 0;
  var vendors = ['webkit', 'moz'];
  for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
    window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
    window.cancelAnimationFrame =
      window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
  }

  if (!window.requestAnimationFrame)
    window.requestAnimationFrame = function (callback, element) {
      var currTime = new Date().getTime();
      var timeToCall = Math.max(0, 16 - (currTime - lastTime));
      var id = window.setTimeout(function () { callback(currTime + timeToCall); },
        timeToCall);
      lastTime = currTime + timeToCall;
      return id;
    };

  if (!window.cancelAnimationFrame)
    window.cancelAnimationFrame = function (id) {
      clearTimeout(id);
    };
})();



if ( md.os()) {
  
  $(document).ready(function () {
    $(".modal-trigger").on('click', function (e) {
      e.preventDefault();
    });

    $(".btnproducto").on('click', function (e) {
      e.preventDefault();

      
      var stack1 = $("#productos").position().top;
       $("html, body").animate({ scrollTop: stack1-130 }, 600,"swing");
       
      $(".navbar-toggler").trigger('click');
    });

    $(".btncontacto").on('click', function (e) {
      e.preventDefault();

      
      var stack1 = $("#contactotitulo").position().top;
       $("html, body").animate({ scrollTop: stack1-100 }, 600,"swing");

      $(".navbar-toggler").trigger('click');
    });

    $(".btnnosotros").on('click', function (e) {
      e.preventDefault();

    
      var stack1 = $("#quehacemos").position().top;
       $("html, body").animate({ scrollTop: stack1-100 }, 600,"swing");
      $(".navbar-toggler").trigger('click');
    });

    $(".btnquehacemos").on('click', function (e) {
      e.preventDefault();

      
      var stack1 = $("#servicios").position().top;
       $("html, body").animate({ scrollTop: stack1-100 }, 600,"swing");
      $(".navbar-toggler").trigger('click');
    });

    $(".btn-contactos").on('click', function (e) {
      e.preventDefault();
      
      var stack1 = $("#contactotitulo").position().top;
       $("html, body").animate({ scrollTop: stack1-100 }, 600,"swing");
      $(".navbar-toggler").trigger('click');
    });

  });


} else {

  var scene = $(".efecto").get(0);
  var parallaxInstance = new Parallax(scene);
  var scene2 = $(".efecto2").get(0);
  var parallaxInstance = new Parallax(scene2);
  var scene3 = $(".efecto3").get(0);
  var parallaxInstance = new Parallax(scene3);

  var scene4 = $(".efecto4").get(0);
  var parallaxInstance = new Parallax(scene4);

  var scene5 = $(".efecto5").get(0);
  var parallaxInstance = new Parallax(scene5);

  var scene6 = $(".efecto6").get(0);
  var parallaxInstance = new Parallax(scene6);

  var scene7 = $(".efecto7").get(0);
  var parallaxInstance = new Parallax(scene7);

  var scene8 = $(".efecto8").get(0);
  var parallaxInstance = new Parallax(scene8);

  var scene9 = $(".efecto9").get(0);
  var parallaxInstance = new Parallax(scene9);


  //background parallax
  $(function () {
    ParallaxScroll.init();
  });

  var ParallaxScroll = {
    /* PUBLIC VARIABLES */
    showLogs: false,
    round: 1000,

    /* PUBLIC FUNCTIONS */
    init: function () {
      this._log("init");
      if (this._inited) {
        this._log("Already Inited");
        this._inited = true;
        return;
      }
      this._requestAnimationFrame = (function () {
        return window.requestAnimationFrame ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame ||
          window.oRequestAnimationFrame ||
          window.msRequestAnimationFrame ||
          function ( /* function */ callback, /* DOMElement */ element) {
            window.setTimeout(callback, 1000 / 60);
          };
      })();
      this._onScroll(true);
    },

    /* PRIVATE VARIABLES */
    _inited: false,
    _properties: ['x', 'y', 'z', 'rotateX', 'rotateY', 'rotateZ', 'scaleX', 'scaleY', 'scaleZ', 'scale'],
    _requestAnimationFrame: null,

    /* PRIVATE FUNCTIONS */
    _log: function (message) {
      if (this.showLogs) console.log("Parallax Scroll / " + message);
    },
    _onScroll: function (noSmooth) {
      var scroll = $(document).scrollTop();
      var windowHeight = $(window).height();
      this._log("onScroll " + scroll);
      $("[data-parallax]").each($.proxy(function (index, el) {
        var $el = $(el);
        var properties = [];
        var applyProperties = false;
        var style = $el.data("style");
        if (style == undefined) {
          style = $el.attr("style") || "";
          $el.data("style", style);
        }
        var datas = [$el.data("parallax")];
        var iData;
        for (iData = 2; ; iData++) {
          if ($el.data("parallax" + iData)) {
            datas.push($el.data("parallax-" + iData));
          } else {
            break;
          }
        }
        var datasLength = datas.length;
        for (iData = 0; iData < datasLength; iData++) {
          var data = datas[iData];
          var scrollFrom = data["from-scroll"];
          if (scrollFrom == undefined) scrollFrom = Math.max(0, $(el).offset().top - windowHeight);
          scrollFrom = scrollFrom | 0;
          var scrollDistance = data["distance"];
          var scrollTo = data["to-scroll"];
          if (scrollDistance == undefined && scrollTo == undefined) scrollDistance = windowHeight;
          scrollDistance = Math.max(scrollDistance | 0, 1);
          var easing = data["easing"];
          var easingReturn = data["easing-return"];
          if (easing == undefined || !$.easing || !$.easing[easing]) easing = null;
          if (easingReturn == undefined || !$.easing || !$.easing[easingReturn]) easingReturn = easing;
          if (easing) {
            var totalTime = data["duration"];
            if (totalTime == undefined) totalTime = scrollDistance;
            totalTime = Math.max(totalTime | 0, 1);
            var totalTimeReturn = data["duration-return"];
            if (totalTimeReturn == undefined) totalTimeReturn = totalTime;
            scrollDistance = 1;
            var currentTime = $el.data("current-time");
            if (currentTime == undefined) currentTime = 0;
          }
          if (scrollTo == undefined) scrollTo = scrollFrom + scrollDistance;
          scrollTo = scrollTo | 0;
          var smoothness = data["smoothness"];
          if (smoothness == undefined) smoothness = 30;
          smoothness = smoothness | 0;
          if (noSmooth || smoothness == 0) smoothness = 1;
          smoothness = smoothness | 0;
          var scrollCurrent = scroll;
          scrollCurrent = Math.max(scrollCurrent, scrollFrom);
          scrollCurrent = Math.min(scrollCurrent, scrollTo);
          if (easing) {
            if ($el.data("sens") == undefined) $el.data("sens", "back");
            if (scrollCurrent > scrollFrom) {
              if ($el.data("sens") == "back") {
                currentTime = 1;
                $el.data("sens", "go");
              } else {
                currentTime++;
              }
            }
            if (scrollCurrent < scrollTo) {
              if ($el.data("sens") == "go") {
                currentTime = 1;
                $el.data("sens", "back");
              } else {
                currentTime++;
              }
            }
            if (noSmooth) currentTime = totalTime;
            $el.data("current-time", currentTime);
          }
          this._properties.map($.proxy(function (prop) {
            var defaultProp = 0;
            var to = data[prop];
            if (to == undefined) return;
            if (prop == "scale" || prop == "scaleX" || prop == "scaleY" || prop == "scaleZ") {
              defaultProp = 1;
            } else {
              to = to | 0;
            }
            var prev = $el.data("_" + prop);
            if (prev == undefined) prev = defaultProp;
            var next = ((to - defaultProp) * ((scrollCurrent - scrollFrom) / (scrollTo - scrollFrom))) + defaultProp;
            var val = prev + (next - prev) / smoothness;
            if (easing && currentTime > 0 && currentTime <= totalTime) {
              var from = defaultProp;
              if ($el.data("sens") == "back") {
                from = to;
                to = -to;
                easing = easingReturn;
                totalTime = totalTimeReturn;
              }
              val = $.easing[easing](null, currentTime, from, to, totalTime);
            }
            val = Math.ceil(val * this.round) / this.round;
            if (val == prev && next == to) val = to;
            if (!properties[prop]) properties[prop] = 0;
            properties[prop] += val;
            if (prev != properties[prop]) {
              $el.data("_" + prop, properties[prop]);
              applyProperties = true;
            }
          }, this));
        }
        if (applyProperties) {
          if (properties["z"] != undefined) {
            var perspective = data["perspective"];
            if (perspective == undefined) perspective = 800;
            var $parent = $el.parent();
            if (!$parent.data("style")) $parent.data("style", $parent.attr("style") || "");
            $parent.attr("style", "perspective:" + perspective + "px; -webkit-perspective:" + perspective + "px; " + $parent.data("style"));
          }
          if (properties["scaleX"] == undefined) properties["scaleX"] = 1;
          if (properties["scaleY"] == undefined) properties["scaleY"] = 1;
          if (properties["scaleZ"] == undefined) properties["scaleZ"] = 1;
          if (properties["scale"] != undefined) {
            properties["scaleX"] *= properties["scale"];
            properties["scaleY"] *= properties["scale"];
            properties["scaleZ"] *= properties["scale"];
          }
          var translate3d = "translate3d(" + (properties["x"] ? properties["x"] : 0) + "px, " + (properties["y"] ? properties["y"] : 0) + "px, " + (properties["z"] ? properties["z"] : 0) + "px)";
          var rotate3d = "rotateX(" + (properties["rotateX"] ? properties["rotateX"] : 0) + "deg) rotateY(" + (properties["rotateY"] ? properties["rotateY"] : 0) + "deg) rotateZ(" + (properties["rotateZ"] ? properties["rotateZ"] : 0) + "deg)";
          var scale3d = "scaleX(" + properties["scaleX"] + ") scaleY(" + properties["scaleY"] + ") scaleZ(" + properties["scaleZ"] + ")";
          var cssTransform = translate3d + " " + rotate3d + " " + scale3d + ";";
          this._log(cssTransform);
          $el.attr("style", "transform:" + cssTransform + " -webkit-transform:" + cssTransform + " " + style);
        }
      }, this));
      if (window.requestAnimationFrame) {
        window.requestAnimationFrame($.proxy(this._onScroll, this, false));
      } else {
        this._requestAnimationFrame($.proxy(this._onScroll, this, false));
      }
    }
  }


  $(document).ready(function () {
    $(".modal-trigger").on('click', function (e) {
      e.preventDefault();
    });

    $(".btnproducto").on('click', function (e) {
      e.preventDefault();

      TweenLite.to(window, 2, { scrollTo: "#productos", ease: Power2.easeOut });
    });

    $(".btncontacto").on('click', function (e) {
      e.preventDefault();

      TweenLite.to(window, 2, { scrollTo: "#contactotitulo", ease: Power2.easeOut });
    });

    $(".btnnosotros").on('click', function (e) {
      e.preventDefault();

      TweenLite.to(window, 2, { scrollTo: "#quehacemos", ease: Power2.easeOut });
    });

    $(".btnquehacemos").on('click', function (e) {
      e.preventDefault();

      TweenLite.to(window, 2, { scrollTo: "#servicios", ease: Power2.easeOut });
    });

    $(".btn-contactos").on('click', function (e) {
      e.preventDefault();
      TweenLite.to(window, 2, { scrollTo: "#contactotitulo", ease: Power2.easeOut });
    });

  });
}


