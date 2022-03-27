/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/log.js ***!
  \*****************************/
window.onload = function () {
  var login = document.getElementById("login");
  var passwd = document.getElementById("passwd");
  document.getElementById('sub').addEventListener('click', function () {
    $.ajax({
      url: "/main",
      method: "POST",
      dataType: "text",
      data: {
        "login": login.value,
        "passwd": passwd.value
      },
      //responseType:"text/html",
      success: function success(response) {
        console.log(response); //location.href = '/main';
        //response;
      },
      error: function error(jq, e) {
        console.log(jq + " " + e);
      }
    });
  });
};
/******/ })()
;