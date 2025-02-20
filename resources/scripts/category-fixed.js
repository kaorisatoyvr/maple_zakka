document.addEventListener('DOMContentLoaded', function() {
    let element = document.getElementById('fixed-element');
    
    if (element) {
            window.addEventListener('scroll', function() {
            let scrollPosition = window.scrollY || window.pageYOffset;
            let threshold = window.innerWidth < 400 ? 200 : (window.innerWidth < 768 ? 230 : 400);// Adjust the threshold for mobile

            if (scrollPosition > threshold) {
                element.classList.add('fixed');
            } else {
                element.classList.remove('fixed');
            }
        });
        }
        else {
            console.warn('Element with ID "fixed-element" not found.');
        }
});