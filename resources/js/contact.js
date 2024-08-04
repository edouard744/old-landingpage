import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
// Hero section
gsap.set('.js-footer-left', { x: -100, opacity: 0 });
gsap.to('.js-footer-left', {
    x: 0,
    opacity: 1,
    duration: 0.75,
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
    duration: 0.75,
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
    duration: 0.75,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-footer-box',
        start: 'top 70%',
    },
});

gsap.set('.js-contact-down', { y: 100, opacity: 0 });
gsap.to('.js-contact-down', {
    y: 0,
    opacity: 1,
    duration: 0.75,
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
    duration: 0.75,
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
    duration: 0.75,
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
    duration: 0.75,
    delay: 0.4,
    stagger: 0.1,
    ease: 'power1.inOut',
    scrollTrigger: {
        trigger: '.js-contact-box',
        start: 'top 70%',
    },
});
