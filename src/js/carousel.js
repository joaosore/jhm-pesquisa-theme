import "owl.carousel";

export function init_carousel() {
  $(".carousel-1").owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    items: 1
  });

  $(".carousel-2").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    items: 1,
    center: true,
    responsive: {
      0: {
        margin: 15,
        stagePadding: 50
      },
      991: {
        margin: 50,
        stagePadding: 350
      }
    }
  });

  $(".carousel-3").owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    items: 1,
    responsive: {
      991: {
        items: 2
      }
    }
  });
}
