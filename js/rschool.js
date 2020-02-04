 /**
 * =============================================================
 * =============================================================
 * jQuery PLugin
 * =============================================================
 * =============================================================
 * 
 */

/** Display Message on box */
function display_poet(content){

    // Get all Messages
    var cites = $(".ant-cites");

    // Active Cites
    var active_cites = 1;

    var cite_interval = setInterval(function(){

        if( active_cites == 0 ){

            // Delete Current
            $(".ant-cites").fadeOut("slow");
            
            // Show First Cites
            $(".ant-cites-0").fadeIn("slow");

            // Move to next
            active_cites++;

        } else {

            // Delete Current
            $(".ant-cites").fadeOut("slow");

            // Show Next Current
            $(".ant-cites-" + ( active_cites) ).fadeIn("slo");

            if( active_cites == ( cites.length - 1 ) ){

                // Reset
                active_cites = 0;

            }else {

                // Increase Cites
                active_cites++;
                
            }

        }

    }, 15000);

}

/** Switch Tab */
function switch_tab(){

    $(".nav-tabs .nav-link").click(function(link){

        // Disable link
        link.preventDefault();
        
        //Remove class
        $(".nav-tabs .nav-link").removeClass("active");
        
        //Add new class
        $(this).addClass("active");

        // Open post with that 
        // id
        var data_id = $(this).attr("data-id");

        // Hide tab content
        $(".tab-content").hide();

        $("#" + data_id ).show();

    });

}

$(document).ready(function(){

    // Start First Poet
    $(".ant-cites-0").show();

    // Display Poet
    display_poet();

    // Enable Tab Switching
    switch_tab();

});