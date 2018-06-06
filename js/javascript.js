/*----- Scroll reveal -----*/
window.sr = ScrollReveal();

sr.reveal('#logo', {
    duration: 500,
    origin: 'right',
    distance: '100%',
    delay: 1000,
    opacity: 1,
    scale: '1',
    viewFactor: 0
});

sr.reveal('#home-line', {duration: 500, origin: 'left', distance: '100px', delay: 500, viewFactor: 0.3});
sr.reveal('#home-content', {
    duration: 500,
    origin: 'bottom',
    distance: '20vh',
    scale: '1',
    delay: 750,
    viewFactor: 0.3
});

sr.reveal('.overview .grid-item', {
    duration: 500,
    origin: 'bottom',
    distance: '100px',
    delay: 500,
    viewFactor: 0.3
}, 100);

if (window.matchMedia('(max-width: 750px)').matches) {

    sr.reveal('#home-logo', {duration: 0, opacity: 1, delay: 250, viewFactor: 0.3});

    sr.reveal('#team .title-group', {
        duration: 1000,
        origin: 'top',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('#team .content-image', {
        duration: 1000,
        origin: 'bottom',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });
    sr.reveal('#team .content-group', {
        duration: 1000,
        origin: 'bottom',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 750,
        viewFactor: 0.5
    });

    sr.reveal('#cases .title-group', {
        duration: 1000,
        origin: 'top',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('#cases .content-image', {
        duration: 1000,
        origin: 'bottom',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });
    sr.reveal('#cases .content-group', {
        duration: 1000,
        origin: 'bottom',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 750,
        viewFactor: 0.5
    });

    sr.reveal('#contact .title-group', {
        duration: 1000,
        origin: 'top',
        distance: '10vh',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('#contact .content-image', {
        duration: 1000,
        origin: 'bottom',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });
    sr.reveal('#contact .content-group', {
        duration: 1000,
        origin: 'bottom',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 750,
        viewFactor: 0.5
    });

    sr.reveal('.memberpage .member .coloured-background', {
        duration: 750,
        origin: 'top',
        distance: '100px',
        scale: 1,
        opacity: 0,
        delay: 0,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage .content-image.overlay', {
        duration: 750,
        origin: 'top',
        distance: '100px',
        scale: 1,
        opacity: 0,
        delay: 0,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage .member .content-image.overlay', {
        duration: 750,
        origin: 'bottom',
        distance: '100px',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage .content-image.pop-up-image', {
        duration: 750,
        origin: 'bottom',
        distance: '100px',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage h1', {
        duration: 750,
        origin: 'bottom',
        distance: '50px',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage article.content-rightblock', {
        duration: 750,
        origin: 'bottom',
        distance: '100px',
        scale: 1,
        opacity: 0,
        delay: 750,
        viewFactor: 0
    });

    sr.reveal('.casepage .slick-container.overlay', {
        duration: 750,
        origin: 'top',
        distance: '100px',
        scale: 1,
        opacity: 0,
        viewFactor: 0.5
    });
    sr.reveal('.casepage .slick-container.pop-up-image', {
        duration: 750,
        origin: 'bottom',
        distance: '100px',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('.casepage h1', {
        duration: 750,
        origin: 'bottom',
        distance: '100px',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });
    sr.reveal('.casepage article.content-rightblock', {
        duration: 750,
        origin: 'bottom',
        distance: '100px',
        scale: 1,
        opacity: 0,
        delay: 750,
        viewFactor: 0
    });

} else {

    sr.reveal('#home-logo', {duration: 500, origin: 'top', distance: '100%', delay: 250, viewFactor: 0.3});

    sr.reveal('#team .title-group', {
        duration: 1000,
        origin: 'top',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('#team .content-image', {
        duration: 1000,
        origin: 'bottom',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('#team .content-rightblock', {
        duration: 1000,
        origin: 'top',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });

    sr.reveal('#cases .title-group', {
        duration: 1000,
        origin: 'top',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('#cases .content-image', {
        duration: 1000,
        origin: 'bottom',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('#cases .content-rightblock', {
        duration: 1000,
        origin: 'top',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });

    sr.reveal('#contact .title-group', {
        duration: 1000,
        origin: 'top',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('#contact .content-image', {
        duration: 1000,
        origin: 'bottom',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('#contact .content-rightblock', {
        duration: 1000,
        origin: 'top',
        distance: '20vh',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });

    sr.reveal('.memberpage .content-image.overlay', {
        duration: 1000,
        origin: 'left',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage .content-image.pop-up-image', {
        duration: 1000,
        origin: 'right',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage h1', {
        duration: 1000,
        origin: 'right',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage article.member-information', {
        duration: 1000,
        origin: 'right',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage article.content-rightblock', {
        duration: 1000,
        origin: 'right',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('.memberpage .previous-next-page', {
        duration: 1000,
        origin: 'right',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });

    sr.reveal('.casepage .slick-container.overlay', {
        duration: 1000,
        origin: 'left',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        viewFactor: 0.5
    });
    sr.reveal('.casepage .slick-container.pop-up-image', {
        duration: 1000,
        origin: 'right',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('.casepage h1', {
        duration: 1000,
        origin: 'right',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        delay: 250,
        viewFactor: 0.5
    });
    sr.reveal('.casepage article.content-rightblock', {
        duration: 1000,
        origin: 'right',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });
    sr.reveal('.casepage .previous-next-page', {
        duration: 1000,
        origin: 'right',
        distance: '20vw',
        scale: 1,
        opacity: 0,
        delay: 500,
        viewFactor: 0.5
    });

    sr.reveal('footer', {
        duration: 500,
        origin: 'bottom',
        distance: '100%',
        scale: 1,
        opacity: 0,
        delay: 1000,
        viewFactor: 0.5
    });
}