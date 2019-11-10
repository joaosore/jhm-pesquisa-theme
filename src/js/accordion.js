export function init_accordion() {
    $(document).on("click", ".box", function() {
      if ($(this).hasClass("active")) {
        $(".accordion .box").removeClass("active");
      } else {
        $(".accordion .box").removeClass("active");
        console.log($(this));
        $(this).addClass("active");
      }
    });
  }