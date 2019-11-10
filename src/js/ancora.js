export function init_ancora() {
  var $doc = $("html, body");
  $("a").click(function() {
    if ($.attr(this, "href").charAt(0) === "#") {
      var el = $("body").find($.attr(this, "href"));
      if ($(el).length > 0) {
        $(".menu-mobile").removeClass("active");
        $(".collapse").removeClass("active");

        var i = 0;
        if ($.attr(this, "href") === "#como-a-reiterar-trabalha") {
          var width = $(window).width();
          if (width <= 991) {
            var i = 0;
          } else {
            var i = 95;
          }
        }

        $doc.animate(
          {
            scrollTop: $($.attr(this, "href")).offset().top - i
          },
          500
        );
        window.location.hash = $.attr(this, "href");
        return false;
      }
    }
  });
}
