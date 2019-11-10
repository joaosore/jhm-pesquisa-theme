import "bootstrap";
import Barba from "barba.js";

import { init_menu } from "./js/menu";
import { init_carousel } from "./js/carousel";
import { init_video } from "./js/video";
import { init_accordion } from "./js/accordion";

import { init_animation } from "./js/animation";

import { init_submit_formulario } from "./js/formulario/submit";
import { init_validade_formulario } from "./js/formulario/validate";

import { init_loader } from "./js/loader";

var FadeTransition = Barba.BaseTransition.extend({
  start: function() {
    Promise.all([this.newContainerloading, this.fadeOut()]).then(
      this.fadeIn.bind(this)
    );
  },
  fadeOut: function() {
    $(".loading-page").fadeIn();
    return $(this.oldContainer)
      .animate({ opacity: 1 })
      .promise();
  },
  fadeIn: function() {
    $(window).scrollTop(0); // scroll to top here
    var _this = this;
    var $el = $(this.newContainer);
    $(this.oldContainer).hide();
    $el.css({
      visibility: "visible",
      opacity: 1
    });
    $el.animate({ opacity: 1 }, 400, function() {
      $(".loading-page").fadeOut();
      _this.done();
    });
  }
});

Barba.Dispatcher.on("transitionCompleted", function(
  currentStatus,
  oldStatus,
  container
) {
  init_menu();
  init_carousel();
  init_video();
  init_animation();
  init_loader();
  $(".loading-page").fadeOut();
});

Barba.Dispatcher.on("initStateChange", function(
  currentStatus,
  oldStatus,
  container
) {});

Barba.Pjax.getTransition = function() {
  return FadeTransition;
};

// Home Page

var PageHome = Barba.BaseView.extend({
  namespace: "page-home",
  onEnter: function() {},
  onEnterCompleted: function() {},
  onLeave: function() {},
  onLeaveCompleted: function() {}
});
PageHome.init();

var PageSobre = Barba.BaseView.extend({
  namespace: "page-sobre",
  onEnter: function() {},
  onEnterCompleted: function() {},
  onLeave: function() {},
  onLeaveCompleted: function() {}
});
PageSobre.init();

var PageOQueFazemos = Barba.BaseView.extend({
  namespace: "page-o-que-fazemos",
  onEnter: function() {},
  onEnterCompleted: function() {},
  onLeave: function() {},
  onLeaveCompleted: function() {}
});
PageOQueFazemos.init();

var PageImprensa = Barba.BaseView.extend({
  namespace: "page-imprensa",
  onEnter: function() {},
  onEnterCompleted: function() {
    init_accordion();
  },
  onLeave: function() {},
  onLeaveCompleted: function() {}
});
PageImprensa.init();

var PagePortfilio = Barba.BaseView.extend({
  namespace: "page-portfolio",
  onEnter: function() {},
  onEnterCompleted: function() {},
  onLeave: function() {},
  onLeaveCompleted: function() {}
});
PagePortfilio.init();

var PageFaleConosco = Barba.BaseView.extend({
  namespace: "page-fale-conosco",
  onEnter: function() {},
  onEnterCompleted: function() {
    init_submit_formulario();
    init_validade_formulario();
  },
  onLeave: function() {},
  onLeaveCompleted: function() {}
});
PageFaleConosco.init();

Barba.Pjax.start();
