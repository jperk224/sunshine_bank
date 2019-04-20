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

var homeEquityModal = document.getElementById('home_equity');
var homeEquityButton = document.getElementById('homeEquity');
var homeEquityClose = document.getElementById('homeEquityClose');

homeEquityButton.onclick = function() {
    homeEquityModal.style.display = 'block';
}

homeEquityClose.onclick = function() {
    homeEquityModal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == homeEquityModal) {
      homeEquityModal.style.display = "none";
    }
  }