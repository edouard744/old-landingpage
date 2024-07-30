import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
// Hero section
gsap.set('.js-hero-down', { y: 100, opacity: 0 });
gsap.to('.js-hero-down', {
    y: 0,
    opacity: 1,
    duration: 0.75,
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
    duration: 0.75,
    stagger: 0.2,
    ease: 'power1.inOut',
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
    duration: 0.75,
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
    duration: 0.75,
    ease: 'power1.inOut',
    stagger: 0.1,
    scrollTrigger: {
        trigger: '.js-intro-trigger',
        start: 'bottom center',
    },
});

gsap.set('.js-service-down', { y: '-10vw', opacity: 0 });
gsap.to('.js-service-down', {
    y: 0,
    opacity: 1,
    duration: 0.75,
    ease: 'power1.inOut',
    stagger: 0.2,
    scrollTrigger: {
        trigger: '.js-intro-trigger',
        start: 'bottom center',
    },
});

gsap.set('.js-service-up', { y: '10vw', opacity: 0 });
gsap.to('.js-service-up', {
    y: 0,
    opacity: 1,
    delay: 0.2,
    stagger: 0.2,
    duration: 0.75,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-intro-trigger',
        start: 'bottom center',
    },
});

//Scroll from hero to intro section
gsap.to(window, {
    immediateRender: false,
    scrollTrigger: {
        trigger: '.js-intro-box',
        start: 'top 90%',
        stagger: 0.1,
        end: 'bottom 100%',
        toggleActions: 'play complete none none',
    },
    duration: 1,
    scrollTo: { y: '#intro-header' },
    ease: 'power1.inOut',
});
// Project section
gsap.set('.js-up', { y: -100, opacity: 0 });
gsap.to('.js-up', {
    y: 0,
    opacity: 1,
    duration: 0.75,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-box',
        start: 'top 75%',
    },
});
gsap.set('.js-down', { y: 100, opacity: 0 });
gsap.to('.js-down', {
    y: 0,
    opacity: 1,
    duration: 0.75,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-box',
        start: 'top 75%',
    },
});
gsap.set('.js-project', { x: '-20vw', opacity: 0 });
gsap.to('.js-project', {
    x: 0,
    opacity: 1,
    duration: 0.75,
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
    duration: 0.75,
    ease: 'power1.inOut',
    stagger: 0.2,
    scrollTrigger: {
        trigger: '.js-workmethod-box',
        start: 'top 90%',
    },
});

gsap.set('.js-workmethod-up', { y: '10vw', opacity: 0 });
gsap.to('.js-workmethod-up', {
    y: 0,
    opacity: 1,
    delay: 0.2,
    stagger: 0.2,
    duration: 0.75,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-workmethod-box',
        start: 'top 90%',
    },
});
gsap.set('.js-workmethod-left', { x: '-20vw', opacity: 0 });
gsap.to('.js-workmethod-left', {
    x: 0,
    opacity: 1,
    duration: 0.75,
    ease: 'power1.inOut',
    stagger: 0.2,
    scrollTrigger: {
        trigger: '.js-workmethod-box',
        start: 'top 90%',
    },
});
