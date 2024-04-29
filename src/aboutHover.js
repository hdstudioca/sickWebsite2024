$(document).ready(function() {
    $("#animateDiv, #animateDiv2").css("transition", "all 0.2s ease-in-out");

    $("#animateDiv, #animateDiv2")
        .mouseover(function() { 
            $(this).data('hovering', true); // Set a flag
        })
        .mouseout(function() { 
            $(this).data('hovering', false); // Clear the flag
            $(this).css("box-shadow", "none"); 
            $(this).css("transform", "scale(1)"); 
        })
        .mousemove(function(event) {
            if ($(this).data('hovering')) { // Only update if hovering
                const divRect = this.getBoundingClientRect();
                const x = event.clientX - divRect.left; 
                let rotationDirection = x > divRect.width / 2 ? 3 : -3; 

                $(this).css("box-shadow", "2px 2px 5px rgba(0, 0, 0, 0.4)"); 
                $(this).css("transform", `scale(1.03) rotate(${rotationDirection}deg)`); 
            }
        });
});
