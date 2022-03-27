/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/menag.js ***!
  \*******************************/
window.onload = function () {
  var sub = document.getElementById('sub');
  var data = document.getElementById('user');
  var type = document.getElementById('types');
  var passwd = document.getElementById('setpasswd');
  sub.addEventListener('click', function () {
    $.ajax({
      url: "/usersmanagement",
      method: "POST",
      dataType: "json",
      data: {
        login: data.value,
        passwd: passwd.value,
        type: type.value
      },
      success: function success(response) {
        console.log(response); //location.href = '/main';
        //response;
      },
      error: function error(jq, e) {
        console.log(jq + " " + e);
      }
    });
  });

  function deleteuser(id) {
    $.ajax({
      url: "/deleteuser",
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

  $(".users").click(function (event) {
    deleteuser(event.target.id);
  });
};
/******/ })()
;