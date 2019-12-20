// const guideList = document.querySelector('.home-cat-list');

// // setup guides
// const setupGuides = (data) => {

//     let html = '';
//     data.forEach(doc => {
//         const guide = doc.data();
//         const li = `
//     <li>
//     <a href="${guide.id}">
//     <img src="../imgs/category/${guide.id}.jpg" class="ui-li-thumb">
//     <h2></h2>
//     <p>Apple released iOS 6.1</p>
//     <p class="ui-li-aside">${guide.c_name}</p>
//     </a>
//     </li>
//     `;
//         html += li;
//     });
//     guideList.innerHTML = html

// };
$(document).ready(function () {
        // alert("as");
    if (localStorage.getItem("login") == "true") {
        $("#nav_des").hide();
        $("#nav_desa_acc").show();
    }else if (localStorage.getItem("login") == "false"){
        $("#nav_desa_acc").hide();
        $("#nav_des").show();
    }
   
});




// <li>
//     <div class="collapsible-header grey lighten-4"> ${guide.title} </div>
//     <div class="collapsible-body white"> ${guide.content} </div>
// </li>