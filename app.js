console.log("app.js connected - 23-10-2025 - 17:07");

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