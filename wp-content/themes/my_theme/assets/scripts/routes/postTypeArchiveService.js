export default {
    init() {

        const testimonials = $('.js-testimonials');

        testimonials.owlCarousel({
            loop:       true,
            items:      1,
            animateIn:  'fadeIn',
            autoplay:   true,
        });
    },
};
