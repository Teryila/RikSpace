// Show/hide the floating button based on scroll position
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var btn = document.querySelector('.scroll-btn');
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.style.display = 'block';
    } else {
        btn.style.display = 'none';
    }
}

// Scroll to the top when the button is clicked
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
}