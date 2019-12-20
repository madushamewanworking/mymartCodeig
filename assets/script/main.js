//
// $(document).ready(function () {
//
//     localStorage.setItem("login", "false");
//
//
//     // //get data
//     // db.collection('Category').get().then(snapshot => {
//     //     console.log(snapshot.docs);
//     //     setupGuides(snapshot.docs);
//     //   });
// 	//
// 	//
//     // //session
//     //
// 	//
// 	//
// 	//
//     // // logout
//     // // $("#logout").bind("click", function (event, ui) {
// 	//
//     // //     event.preventDefault();
//     // //     auth.signOut();
//     // //     localStorage.setItem("login", "false");
//     // // });
// 	//
//     // // register
//     // $("#reg").bind("click", function (event, ui) {
// 	//
// 	//
//     //     const signupForm = document.querySelector('#reg-box');
// 	//
// 	//
//     //     // get user info
//     //     const user = signupForm['username'].value;
//     //     const email = signupForm['email'].value;
//     //     const password = signupForm['password'].value;
// 	//
//     //     console.log(email);
//     //     // sign up the user
//     //     auth.createUserWithEmailAndPassword(email, password).then(data => {
// 	//
//     //         console.log(data);
//     //         $('#error_div').css('visibility', 'hidden');
//     //         // close the signup modal & reset form
//     //         // const modal = document.querySelector('#modal-signup');
//     //         // M.Modal.getInstance(modal).close();
//     //         // signupForm.reset();
//     //         $("#reg-box").trigger('reset');
//     //         //set msg for sucess
//     //     }).then(() => {
//     //         $("#reg-box").trigger('reset');
// 	//
//     //     }).catch(err => {
// 	//
//     //         // alert(err)
//     //         $('#error_div').css('visibility', '');
//     //         signupForm.querySelector('#error').innerHTML = err.message;
// 	//
//     //     });
// 	//
//     //     // .catch(err=>{
//     //     //
//     //     // });
// 	//
// 	//
//     //     // $.mobile.changePage("../views/Login.html",{transition:"slideup"});
//     // });
// 	//
//     // // login
//     // $("#log").bind("click", function (event, ui) {
// 	//
// 	//
// 	//
// 	//
//     //     const loginForm = document.querySelector('#login-box');
// 	//
//     //     event.preventDefault();
// 	//
//     //     // get user info
//     //     const email = loginForm['login-email'].value;
//     //     const password = loginForm['login-password'].value;
//     //     // alert(email);
// 	//
//     //     // log the user in
//     //     auth.signInWithEmailAndPassword(email, password).then((data) => {
//     //         console.log(data.user);
//     //         // close the signup modal & reset form
//     //         // const modal = document.querySelector('#modal-login');
//     //         $('#error_div_log').css('visibility', 'hidden');
//     //         loginForm.reset();
// 	//
// 	//
//     //     }).then(() => {
//     //         $("#log-box").trigger('reset');
//     //         $("#popupBasic").popup();
//     //         $("#popupBasic").popup('open');
//     //         localStorage.setItem("login", "true");
//     //         localStorage.setItem("email",email);
// 	//
//     //     }).catch(err => {
// 	//
// 	//
//     //         // alert(err)
//     //         $('#error_div_log').css('visibility', '');
//     //         loginForm.querySelector('#error').innerHTML = err.message;
// 	//
// 	//
//     //     });
// 	//
// 	//
// 	//
// 	//
//     // });
// 	//
//     // auth.onAuthStateChanged(user => {
//     //     if (user) {
//     //         console.log('user logged in: ', user);
//     //         localStorage.setItem("login", "true");
//     //     } else {
//     //         localStorage.setItem("login", "false");
//     //         console.log('user logged out');
//     //     }
//     // })
//
// });
//
//
// // $(document).on({
// //     "pageinit": function () {
// //         alert("pageinit");
// //         //$("#popupBasic").popup('open'); will throw error here because the page is not ready yet
// //         //simulate ajax call here
// //         //data recieved from ajax - might be an array, anything
// //         var a = Math.random();
// //         //use this to transfer data betwene events
//
// //     },
// //     //open popup here
// //     "pageshow": function () {
// //         alert("pageshow");
//
// //         //open popup
// //         $("#popupBasic").popup('open');
// //     }
// // }, "#demo-page");
//
//
// // $("#nav_des").click(function() {
// //     alert("comes here");
// // //      //submit the form
// // //    $.mobile.changePage("county.html",{transition:"slideup"});
//
// //  });
