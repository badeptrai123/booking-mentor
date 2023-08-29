var current_star_statuses = [];

star_elements = $(".star .fa-star").parent();

star_elements.find(".fa-star").each(function (i, elem) {
  current_star_statuses.push($(elem).hasClass("yellow"));
});

star_elements.find(".fa-star").mouseenter(changeRatingStars);
star_elements.find(".fa-star").mouseleave(resetRatingStars);

/**
 * Changes the rating star colors when hovering over it.
 */
function changeRatingStars() {
  // Current star hovered
  var star = $(this);

  // Removes all colors first from all stars
  $(".star .fa-star").removeClass("grey").removeClass("yellow");

  // Makes the current hovered star yellow
  star.addClass("yellow");

  // Makes the previous stars yellow and the next stars grey
  star.prevAll().addClass("yellow");
  star.nextAll().addClass("grey");
}

/**
 * Resets the rating star colors when not hovered anymore.
 */
function resetRatingStars() {
  star_elements.each(function (i, elem) {
    $(elem)
      .removeClass("yellow")
      .removeClass("grey")
      .addClass(current_star_statuses[i] ? "yellow" : "grey");
  });
}
