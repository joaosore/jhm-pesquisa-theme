import ScrollReveal from "scrollreveal";

export function init_animation() {
  ScrollReveal().reveal("#inicial", {
    delay: 375,
    duration: 500,
    opacity: 0
  });
  ScrollReveal().reveal("#video", {
    delay: 375,
    duration: 500,
    opacity: 0
  });
  ScrollReveal().reveal("#o-que-fazemos .row", {
    delay: 375,
    duration: 500,
    opacity: 0
  });
  ScrollReveal().reveal("#footer", {
    delay: 375,
    duration: 500,
    opacity: 0
  });
}
