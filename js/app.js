$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('#homeEquity').on('click', function () {
        $('#home_equity').toggleClass('no_article');
    });
    
    $('#bizLine').on('click', function () {
        $('#biz_line').toggleClass('no_article');
    });
    
    $('#investServices').on('click', function () {
        $('#invest_services').toggleClass('no_article');
    });
    
    $('#exit-icon').on('click', function () {
        $('#home_equity').toggleClass('no_article');
    });

    $('#exit-icon1').on('click', function () {
        $('#biz_line').toggleClass('no_article');
    });

    $('#exit-icon2').on('click', function () {
        $('#invest_services').toggleClass('no_article');
    });

});