$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
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