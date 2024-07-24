import './bootstrap';

document.querySelectorAll('.js').forEach(element => {
    element.classList.add('hide');
});

//document.querySelectorAll('.service').forEach(element => {
//    element.classList.add('slide');
//});

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hide');
hiddenElements.forEach(element => {
    observer.observe(element);
});
document.getElementById('scrollable').addEventListener('scroll', function () {
    // Get the target element
    var target = document.getElementById('target');

    // Scroll to the target element
    target.scrollIntoView({ behavior: 'smooth' });
});
