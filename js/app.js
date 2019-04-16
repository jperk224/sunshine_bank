$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('#homeEquity').on('click', function () {
        $('#home_equity').toggleClass('no_article');
    });
    
    $('.exit-icon').on('click', function () {
        $('.promo').toggleClass('no_article');
    });

});