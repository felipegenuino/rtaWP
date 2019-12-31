$(function() {
  $('[data-toggle="tooltip"]').tooltip();

  //rodar video no modal
  // Set iframe attributes when the show instance method is called
  $("#heroModal").on("show.bs.modal", function(event) {
    let button = $(event.relatedTarget); // Button that triggered the modal
    let url = button.data("video"); // Extract url from data-video attribute
    $(this)
      .find("iframe")
      .attr({
        src: url,
        allow:
          "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
      });
  });

  // Remove iframe attributes when the modal has finished being hidden from the user
  $("#heroModal").on("hidden.bs.modal", function() {
    $("#heroModal iframe").removeAttr("src allow");
  });

  //slick

  $(".slick-slide").slick({
    dots: true,
    centerMode: true,
    centerPadding: "60px",
    slidesToShow: 3
  });

  $(".slick-slider").on("click", ".slick-slide", function(e) {
    e.stopPropagation();
    var index = $(this).index();
    if ($(".slick-slider").slick("slickCurrentSlide") !== index) {
      $(".slick-slider").slick("slickGoTo", index);
    }
  });

  //endcode
});
