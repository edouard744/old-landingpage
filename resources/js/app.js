import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
// Hero section

let scrollToTopBtn = document.querySelector('.scrollToTopBtn');
let rootElement = document.documentElement;


function handleScroll() {
    // Do something on scroll
    let scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
    if (rootElement.scrollTop / scrollTotal > 0.1) {
        // Show button
        console.log('show');
        scrollToTopBtn.classList.add('showBtn');
    } else {
        // Hide button
        scrollToTopBtn.classList.remove('showBtn');
    }
}

function scrollToTop() {
    // Scroll to top logic
    rootElement.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
}
scrollToTopBtn.addEventListener('click', scrollToTop);
document.addEventListener('scroll', handleScroll);

gsap.set('.js-hero-down', { y: 100, opacity: 0 });
gsap.to('.js-hero-down', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-hero-box',
        start: 'top center',
    },
});
gsap.set('.js-hero-up', { y: -100, opacity: 0 });
gsap.to('.js-hero-up', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    stagger: 0.2,
    ease: 'power1.inOut',
    onComplete: () => {
        const floatingobjs = document.querySelectorAll('.js-floating');
        for (let i = 0; i < floatingobjs.length; i++) {
            if (i % 2 === 0) {
                floatingobjs[i].classList.add('first-bounce');
            } else {
                floatingobjs[i].classList.add('second-bounce');
            }
        }
    },
    scrollTrigger: {
        trigger: '.js-hero-box',
        start: 'top center',
    },
});
// Intro section
gsap.set('.js-first-arrow', { x: '-20vw', opacity: 0 });
gsap.to('.js-first-arrow', {
    x: 0,
    opacity: 1,
    duration: 0.65,
    delay: 0.5,
    ease: 'power1.inOut',
    stagger: 0.2,
    scrollTrigger: {
        trigger: '.js-intro-trigger',
        start: 'bottom center',
    },
});
gsap.set('.js-second-arrow', { y: '20vw', opacity: 0 });
gsap.to('.js-second-arrow', {
    y: 0,
    opacity: 1,
    delay: 0.6,
    duration: 0.65,
    ease: 'power1.inOut',
    stagger: 0.1,
    scrollTrigger: {
        trigger: '.js-intro-trigger',
        start: 'bottom center',
    },
});
document.querySelectorAll('.js-group-up').forEach(group => {
    gsap.set(group.querySelectorAll('.js-service-section-up'), { y: '100px', opacity: 0 });
    gsap.to(group.querySelectorAll('.js-service-section-up'), {
        y: 0,
        opacity: 1,
        duration: 0.65,
        ease: 'power1.inOut',
        stagger: 0.2,
        scrollTrigger: {
            trigger: '.js-intro-trigger',
            start: 'bottom center',
        },
    });
});
document.querySelectorAll('.js-group-down').forEach(group => {
    gsap.set(group.querySelectorAll('.js-service-section-down'), { y: '-100px', opacity: 0 });
    gsap.to(group.querySelectorAll('.js-service-section-down'), {
        y: 0,
        opacity: 1,
        duration: 0.65,
        ease: 'power1.inOut',
        stagger: {
            amount: 0.2, // Durée totale du stagger
            from: 'end', // Inverse l'ordre du stagger
        },
        scrollTrigger: {
            trigger: '.js-intro-trigger',
            start: 'bottom center',
        },
    });
});
gsap.set('.js-intro-down', { y: -100, opacity: 0 });
gsap.to('.js-intro-down', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-intro-trigger',
        start: 'bottom center',
    },
});
gsap.set('.js-intro-up', { y: 100, opacity: 0 });
gsap.to('.js-intro-up', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-intro-trigger',
        start: 'bottom center',
    },
});

let mm = gsap.matchMedia();

if (document.querySelector('.js-intro-box')) {
    mm.add('(min-width: 1024px)', () => {
        gsap.to(window, {
            immediateRender: false,
            scrollTrigger: {
                trigger: '.js-intro-box',
                start: 'top 97%',
                end: 'bottom 100%',
                toggleActions: 'play complete none none',
            },
            duration: 0.65,
            scrollTo: { y: '#intro-header' },
            ease: 'power1.inOut',
        });
    });

    mm.add('(max-width: 1023px)', () => {
        gsap.to(window, {
            immediateRender: false,
            scrollTrigger: {
                trigger: '.js-intro-box',
                start: 'top 85%',
                end: 'bottom 100%',
                toggleActions: 'play complete none none',
            },
            duration: 0.65,
            scrollTo: { y: '#intro-header' },
            ease: 'power1.inOut',
        });
    });
}
//Scroll from hero to intro section

// Project section

gsap.set('.js-project', { x: '-20vw', opacity: 0 });
gsap.to('.js-project', {
    x: 0,
    opacity: 1,
    duration: 0.65,
    ease: 'power1.inOut',
    stagger: 0.1,
    scrollTrigger: {
        trigger: '.js-box',
        start: 'top 70%',
    },
});
// Workmethod section
gsap.set('.js-workmethod-down', { y: '-10vw', opacity: 0 });
gsap.to('.js-workmethod-down', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    ease: 'power1.inOut',
    stagger: 0.2,
    scrollTrigger: {
        trigger: '.js-workmethod-box',
        start: 'top 70%',
    },
});

gsap.set('.js-workmethod-up', { y: '10vw', opacity: 0 });
gsap.to('.js-workmethod-up', {
    y: 0,
    opacity: 1,
    delay: 0.2,
    stagger: 0.2,
    duration: 0.65,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-workmethod-box',
        start: 'top 90%',
    },
});
gsap.set('.js-workmethod-left', { x: '-10vw', opacity: 0 });
gsap.to('.js-workmethod-left', {
    x: 0,
    opacity: 1,
    duration: 0.65,
    ease: 'power1.inOut',
    stagger: 0.2,
    scrollTrigger: {
        trigger: '.js-workmethod-box',
        start: 'top 90%',
    },
});

gsap.set('.background-name', { '--rotate': '30deg', '--y': '-50%', '--opacity': '0%', '--x': '0' });

gsap.to('.background-name', {
    duration: 0.65,
    delay: 0.3,
    '--y': '50%',
    '--rotate': '-2deg',
    '--opacity': '100%',
    '--x': '-5px',
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-about-box',
        start: 'top 70%',
    },
});
gsap.set('.js-about-image', { x: '-20vw', scale: 0.8, opacity: 0 });
gsap.to('.js-about-image', {
    x: 0,
    opacity: 1,
    scale: 1,
    duration: 0.65,
    delay: 0.2,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-about-box',
        start: 'top 70%',
    },
});
gsap.to('.js-dotted-spin', {
    duration: 0.65,
    ease: 'power1.inOut',
    onStart: () => {
        document.querySelectorAll('.js-dotted-spin').forEach(el => {
            el.classList.add('svg-dotted');
        });
    },
    stagger: 0.2,
    scrollTrigger: {
        trigger: '.js-about-box',
        start: 'top 70%',
    },
});
gsap.set('.js-about-left', { x: -100, opacity: 0 });
gsap.to('.js-about-left', {
    x: 0,
    opacity: 1,
    duration: 0.65,
    delay: 0.4,
    stagger: 0.2,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-about-box',
        start: 'top 70%',
    },
});
gsap.set('.js-about-right', { x: 100, opacity: 0 });
gsap.to('.js-about-right', {
    x: 0,
    opacity: 1,
    duration: 0.65,
    delay: 0.2,
    stagger: 0.2,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-about-box',
        start: 'top 70%',
    },
});
gsap.set('.js-about-up', { y: -100, opacity: 0 });
gsap.to('.js-about-up', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-about-box',
        start: 'top 70%',
    },
});
gsap.set('.js-about-down', { y: 100, opacity: 0 });
gsap.to('.js-about-down', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-about-box',
        start: 'top 70%',
    },
});

gsap.set('.js-contact-section-up', { y: -100, opacity: 0 });
gsap.to('.js-contact-section-up', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-contact-section-box',
        start: 'top 70%',
    },
});
gsap.set('.js-contact-section-down', { y: 100, opacity: 0 });
gsap.to('.js-contact-section-down', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-contact-section-box',
        start: 'top 70%',
    },
});
gsap.set('.js-contact-section-left', { x: -100, opacity: 0 });
gsap.to('.js-contact-section-left', {
    x: 0,
    opacity: 1,
    duration: 0.65,
    delay: 0.4,
    stagger: 0.2,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-contact-section-box',
        start: 'top 70%',
    },
});
gsap.set('.js-footer-left', { x: -100, opacity: 0 });
gsap.to('.js-footer-left', {
    x: 0,
    opacity: 1,
    duration: 0.65,
    delay: 0.4,
    stagger: 0.05,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-footer-box',
        start: 'top 70%',
    },
});
gsap.set('.js-footer-up', { y: -100, opacity: 0 });
gsap.to('.js-footer-up', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-footer-box',
        start: 'top 70%',
    },
});
gsap.set('.js-footer-down', { y: 100, opacity: 0 });
gsap.to('.js-footer-down', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-footer-box',
        start: 'top 70%',
    },
});
//
//
//
//
//
//
//
//
//
//Contact
gsap.set('.js-contact-down', { y: 100, opacity: 0 });
gsap.to('.js-contact-down', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-contact-box',
        start: 'top 70%',
    },
});
gsap.set('.js-contact-up', { y: -100, opacity: 0 });
gsap.to('.js-contact-up', {
    y: 0,
    opacity: 1,
    duration: 0.65,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-contact-box',
        start: 'top 70%',
    },
});
gsap.set('.js-contact-left ', { x: -100, opacity: 0 });
gsap.to('.js-contact-left ', {
    x: 0,
    opacity: 1,
    duration: 0.65,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-contact-box',
        start: 'top 70%',
    },
});
gsap.set('.js-contact-right', { x: 100, opacity: 0 });
gsap.to('.js-contact-right', {
    x: 0,
    opacity: 1,
    duration: 0.65,
    delay: 0.4,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-contact-box',
        start: 'top 70%',
    },
});

document.querySelectorAll('.js-wrapper').forEach((wrapper, index) => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: wrapper, // Chaque wrapper a son propre ScrollTrigger
            start: 'top 98%-100px',
        },
    });

    tl.fromTo(
        wrapper.querySelectorAll('.js-down'),
        { y: '-100px', opacity: 0 },
        { y: 0, opacity: 1, duration: 0.5, ease: 'power1.inOut', delay: Math.min(0.2 * index, 0.5), stagger: 0.2 },
    );
});
document.querySelectorAll('.js-wrapper').forEach((wrapper, index) => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: wrapper, // Chaque wrapper a son propre ScrollTrigger
            start: 'top 98%-100px',
        },
    });
    tl.fromTo(
        wrapper.querySelectorAll('.js-up'),
        { y: '100px', opacity: 0 },
        { y: 0, opacity: 1, duration: 0.5, ease: 'power1.inOut', delay: Math.min(0.2 * index, 0.5), stagger: 0.2 },
    );
});

document.querySelectorAll('.js-wrapper').forEach((wrapper, index) => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: wrapper, // Chaque wrapper a son propre ScrollTrigger
            start: 'top 98%-100px',
        },
    });
    tl.fromTo(
        wrapper.querySelectorAll('.js-left'),
        { x: '-100px', opacity: 0 },
        { x: 0, opacity: 1, duration: 0.5, ease: 'power1.inOut', delay: Math.min(0.2 * index, 0.5), stagger: 0.2 },
    );
});
document.querySelectorAll('.js-wrapper').forEach((wrapper, index) => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: wrapper, // Chaque wrapper a son propre ScrollTrigger
            start: 'top 98%-100px',
        },
    });
    tl.fromTo(
        wrapper.querySelectorAll('.js-right'),
        { x: '100px', opacity: 0 },
        { x: 0, opacity: 1, duration: 0.5, ease: 'power1.inOut', delay: Math.min(0.2 * index, 0.5), stagger: 0.2 },
    );
});

document.querySelectorAll('.js-wrapper').forEach((wrapper, index) => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: wrapper, // Chaque wrapper a son propre ScrollTrigger
            start: 'top 98%-100px',
        },
    });
    tl.fromTo(
        wrapper.querySelectorAll('.js-reveal'),
        { opacity: 0 },
        { opacity: 1, duration: 0.5, ease: 'power1.inOut', delay: Math.min(0.2 * index, 0.5), stagger: 0.2 },
    );
});
