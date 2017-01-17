// sous-menu défilant + last div
jQuery(document).ready(function($) {
    $("#slideroustic").FlowSlider(); 
    
    // dimension à ajouter au dernier div
    var last_goto       = $('ul.nav a').last().attr('href');
    var viewer_width    = $('#viewer').width();
    var viewer_height   = $('#viewer').height();
    var last_width      = viewer_width - ($(last_goto).width()) * 1;
    $('#comble').css({
        "width": last_width+"px",
        "height": viewer_height+"px"
    });
});

// fleches gauche / droite
$(function() {
    $(".rightArrow").click(function () { 
        var leftPos = $('#viewer').scrollLeft();
        $("#viewer").animate({
            scrollLeft: leftPos + 1000
        }, 800);
        $("#memo_position").val(($("#memo_position").val()) * 1 + 1000);
    }); 

    
    $(".leftArrow").click(function () { 
        var leftPos = $('#viewer').scrollLeft();
        $("#viewer").animate({
            scrollLeft: leftPos - 1000
        }, 800);
        $("#memo_position").val(($("#memo_position").val()) * 1 - 1000);
    }); 
});

// ancres
$(function() {
    $('ul.nav a').bind('click',function(event){
        var $anchor             = $(this);
        var position_previous   = $("#memo_position").val();
        var longueur            = $($anchor.attr('href')).offset().left;
        var position_next       = (position_previous*1) + (longueur*1) -115;

        $("#memo_position").val(position_next);

        $('#viewer').stop().animate({
            scrollLeft: position_next
        }, 1000);
        event.preventDefault();
    });
});

