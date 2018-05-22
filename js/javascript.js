/*----- Scroll reveal -----*/
window.sr = ScrollReveal();
sr.reveal('#home-line', { duration: 500, origin: 'left', distance: '100px', delay: 500, viewFactor: 0.3 });
sr.reveal('#home-logo', { duration: 500, origin: 'top', distance: '100%', delay: 1000, viewFactor: 0.3 });
sr.reveal('#home-content', { duration: 500, origin: 'bottom', distance: '100px', delay: 1500, viewFactor: 0.3 });

/*
sr.reveal('section .content-image', { duration: 1000, origin: 'bottom', distance: '200px', scale: 1, opacity: 0, delay: 500, viewFactor: 0.5 });
sr.reveal('section .content-rightblock', { duration: 1000, origin: 'top', distance: '200px', scale: 1, opacity: 0, delay: 500, viewFactor: 0.5 });
*/

sr.reveal('.overview .grid-item', { duration: 500, origin: 'bottom', distance: '100px', delay: 1500, viewFactor: 0.3 }, 100);