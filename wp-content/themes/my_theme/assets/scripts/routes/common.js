export default {
    init() {
        const layoutinit = new Promise((resolve) => {
            let interval = setInterval(() => {
                if (document.querySelector('.js-layout')) {
                    clearInterval(interval);
                    resolve();
                }
            }, 150);
        });
        layoutinit.then(() => {
            document.querySelector('.js-layout').classList.remove('hidden');
        });

        const $header = $('header');
        const $main = $('main');

        function setGlobalPagePadding() {
            $main
                .find('section:not(.section-subscribe-block):first, article')
                .attr('style', `padding-top: calc( ${$header.innerHeight()}px + 40px) !important`);
        }

        setGlobalPagePadding();

        $(window).on('resize', function () {
            setGlobalPagePadding();
        });

        $('.js-navbar-toggler').on('click', function () {
            $('html').toggleClass('open-nav');
        });
    },
};
