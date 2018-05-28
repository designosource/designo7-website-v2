/*----- Scroll reveal -----*/
window.sr = ScrollReveal();
sr.reveal('#home-line', { duration: 500, origin: 'left', distance: '100px', delay: 500, viewFactor: 0.3 });
sr.reveal('#home-logo', { duration: 500, origin: 'top', distance: '100%', delay: 1000, viewFactor: 0.3 });
sr.reveal('#home-content', { duration: 500, origin: 'bottom', distance: '20vh', delay: 1500, viewFactor: 0.3 });

sr.reveal('.overview .grid-item', { duration: 500, origin: 'bottom', distance: '100px', delay: 1500, viewFactor: 0.3 }, 100);

if (window.matchMedia('(max-width: 720px)').matches) {

    sr.reveal('#team .title-group', { duration: 1000, origin: 'top', distance: '20vh', scale: 1, opacity: 0, delay: 250, viewFactor: 0.5 });
    sr.reveal('#team .content-image', { duration: 1000, origin: 'bottom', distance: '20vh', scale: 1, opacity: 0, delay: 500, viewFactor: 0.5 });
    sr.reveal('#team .content-group', { duration: 1000, origin: 'bottom', distance: '20vh', scale: 1, opacity: 0, delay: 750, viewFactor: 0.5 });

    sr.reveal('#cases .title-group', { duration: 1000, origin: 'top', distance: '20vh', scale: 1, opacity: 0, delay: 250, viewFactor: 0.5 });
    sr.reveal('#cases .content-image', { duration: 1000, origin: 'bottom', distance: '20vh', scale: 1, opacity: 0, delay: 500, viewFactor: 0.5 });
    sr.reveal('#cases .content-group', { duration: 1000, origin: 'bottom', distance: '20vh', scale: 1, opacity: 0, delay: 750, viewFactor: 0.5 });

    sr.reveal('#contact .title-group', { duration: 1000, origin: 'top', distance: '20vh', scale: 1, opacity: 0, delay: 250, viewFactor: 0.5 });
    sr.reveal('#contact .content-image', { duration: 1000, origin: 'bottom', distance: '20vh', scale: 1, opacity: 0, delay: 500, viewFactor: 0.5 });
    sr.reveal('#contact .content-group', { duration: 1000, origin: 'bottom', distance: '20vh', scale: 1, opacity: 0, delay: 750, viewFactor: 0.5 });

} else {
    sr.reveal('#team .content-image', { duration: 1000, origin: 'bottom', distance: '20vh', scale: 1, opacity: 0, delay: 250, viewFactor: 0.5 });
    sr.reveal('#team .content-rightblock', { duration: 1000, origin: 'top', distance: '20vh', scale: 1, opacity: 0, delay: 500, viewFactor: 0.5 });

    sr.reveal('#cases .content-image', { duration: 1000, origin: 'bottom', distance: '20vh', scale: 1, opacity: 0, delay: 250, viewFactor: 0.5 });
    sr.reveal('#cases .content-rightblock', { duration: 1000, origin: 'top', distance: '20vh', scale: 1, opacity: 0, delay: 500, viewFactor: 0.5 });

    sr.reveal('#contact .content-image', { duration: 1000, origin: 'bottom', distance: '20vh', scale: 1, opacity: 0, delay: 250, viewFactor: 0.5 });
    sr.reveal('#contact .content-rightblock', { duration: 1000, origin: 'top', distance: '20vh', scale: 1, opacity: 0, delay: 500, viewFactor: 0.5 });
}