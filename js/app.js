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

//TODO: Refactor this.

var homeEquityModal = document.getElementById('home_equity');
var homeEquityButton = document.getElementById('homeEquity');
var homeEquityClose = document.getElementById('homeEquityClose');
var bizLineModal = document.getElementById('biz_line');
var bizLineButton = document.getElementById('bizLine');
var bizLineClose = document.getElementById('bizLineClose');
var investServicesModal = document.getElementById('invest_services');
var investServicesButton = document.getElementById('investServices');
var investServicesClose = document.getElementById('investServicesClose');

homeEquityButton.onclick = function() {
    homeEquityModal.style.display = 'block';
}

homeEquityClose.onclick = function() {
    homeEquityModal.style.display = 'none';
}

bizLineButton.onclick = function() {
    bizLineModal.style.display = 'block';
}

bizLineClose.onclick = function() {
    bizLineModal.style.display = 'none';
}

investServicesButton.onclick = function() {
    investServicesModal.style.display = 'block';
}

investServicesClose.onclick = function() {
    investServicesModal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == homeEquityModal) {
      homeEquityModal.style.display = "none";
    } else if (event.target == bizLineModal) {
        bizLineModal.style.display = 'none';  
    } else if (event.target == investServicesModal) {
        investServicesModal.style.display = "none";
    }
  }