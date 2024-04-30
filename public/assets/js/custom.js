(function($){
    "use strict";
    
    /*---------------------------
    sidebar toggle
    ---------------------------*/
    const sidebarToggler = $('.sidebar-toggler');
    const sidebarClose = $('.msa-sidebar-close-btn-area');
    const sidebarArea = $('.msa-sidebar');
    sidebarToggler.on('click', () => {
        sidebarArea.addClass('active');
    });
    
    sidebarClose.on('click', ()=>{
        sidebarArea.removeClass('active');
    });
    
    var alterClass = function() {
        var ww = document.body.clientWidth;
        if (ww > 1199) {
            sidebarArea.removeClass('active');
        }
    };

    $(window).resize(function(){
        alterClass();
    });

    alterClass();
    
    $('#msa__metis__menu').metisMenu();
    
})(jQuery);