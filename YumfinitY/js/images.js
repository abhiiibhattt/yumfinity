// Add this JavaScript code to handle scrolling
$(document).ready(function() {
    const slider = $(".cuisine-slider");
    const scrollDistance = 50; // Adjust the scroll distance as needed

    $("#cuisine-scroll-left").on("click", function() {
        slider.animate({
            scrollLeft: slider.scrollLeft() - scrollDistance
        }, 500);
    });

    $("#cuisine-scroll-right").on("click", function() {
        slider.animate({
            scrollLeft: slider.scrollLeft() + scrollDistance
        }, 500);
    });
});
