$(document).ready(function () {

$("#logoutbtn").bind("click", function (event, ui) {
    localStorage.setItem("login", "false");
    // alert("ad");
    event.preventDefault();
    auth.signOut();
   
    window.location = '../../views/Login.html';
});

});