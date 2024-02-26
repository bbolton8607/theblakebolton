// SPLIDE SLIDE SHOW SERVICES SECTION
document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#services-splide', {
        perPage: 3,
        perMove: 3,
        arrows: false,
        breakpoints: {
            750: {
                perPage: 1,
            },
            1200: {
                perPage: 2,
            },
        }   
    } ).mount(); 
} );

// SPLIDE SLIDE SHOW TESTIMONIAL SECTION
document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#testimonial-splide', {
        perPage: 3,
        perMove: 3,
        arrows: false,
        breakpoints: {
            750: {
                perPage: 1,
            },
            1200: {
                perPage: 2,
            },
        }   
    } ).mount(); 
} );
