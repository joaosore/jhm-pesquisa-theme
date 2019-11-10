export function init_menu() {
  var body = true;
  $(document).on("click", ".menu-mobile", function() {
    if (body) {
      body = false;
      $("body").attr("style", "overflow: hidden;");
    } else {
      body = true;
      $("body").attr("style", "overflow: auto;");
    }
    $(this).toggleClass("active", "active");
    $(".collapse").toggleClass("active", "active");
  });
}
