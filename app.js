console.log("app.js connected - 20-10-2025 - 15:58");

// TODO: handle toggling of .navigation visilibity

function openNav() {

    let nav = document.querySelector(".page---checklists");
    nav.style.visibility = "visible";
    // nav.style.transition = "visibility .4s ease-in-out";
}

function closeNav() {

    let nav = document.querySelector(".page---checklists");
    nav.style.visibility = "hidden";
    // nav.style.transition = "visibility .4s ease-in-out";
}