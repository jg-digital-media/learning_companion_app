console.log("app.js connected - 24-10-2025 - 10:26");

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

// Flip Card Functionality
function flipCard(button) {

    // Find the closest quiz card container
    const quizCard = button.closest('.quiz---flipcard');
    
    if (quizCard) {
        const innerCard = quizCard.querySelector('.quiz---flipcard--inner');
        
        if (innerCard) {
            // Toggle the flipped class
            innerCard.classList.toggle('flipped');
            
            // Update button text based on state
            if (innerCard.classList.contains('flipped')) {
                button.textContent = 'Flip Back';
            } else {
                button.textContent = 'Flip';
            }
        }
    }
}

// Initialize flip card listeners when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get all flip buttons
    const flipButtons = document.querySelectorAll('.quizcard---flip--btn');
    
    flipButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            flipCard(this);
        });
    });
});