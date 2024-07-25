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
