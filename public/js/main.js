/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
window.onload = function () {
  document.getElementById('newuser').style.display = "none";

  function deletefile(id) {
    $.ajax({
      url: "/deletefile",
      method: "POST",
      dataType: "json",
      data: {
        id: id
      },
      success: function success(response) {
        console.log(response); //location.href = '/main';
        //response;
      },
      error: function error(jq, e) {
        console.log(jq + " " + e);
      }
    });
  }

  $(".delete").click(function (event) {
    deletefile(event.target.id);
  });
  var button = document.getElementById('new');
  button.addEventListener('click', function () {
    document.getElementById('newuser').style.display = "block";
  });
};
/******/ })()
;