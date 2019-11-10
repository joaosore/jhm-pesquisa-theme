export function init_video() {
  var video = document.getElementById("video-play");

  $(document).on("click", ".btn-play", function() {
    $(this).addClass("play");
    $("#video-play").css("object-fit", "contain");
    video.play();
    video.controls = true;
  });
}
