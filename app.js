console.log("app.js connected - 21-10-2025 - 11:19");

// TODO: handle toggling of .navigation visilibity

function openNav() {

    let nav = document.querySelector(".main---nav");
    nav.style.visibility = "visible";
    nav.style.opacity = "1";
}

function closeNav() {

    let nav = document.querySelector(".main---nav");
    nav.style.visibility = "hidden";
    nav.style.opacity = "0";

    // Wait for opacity transition to complete before hiding
    setTimeout(() => {
        nav.style.visibility = "hidden";
    }, 300); // Match the transition duration in CSS (300ms)
}