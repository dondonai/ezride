document.onreadystatechange = () => {

    if (document.readyState === 'complete') {
        let els = [];
        let tags = document.querySelectorAll('h2, h4, button, a, p, input, textarea')

        let classes = document.querySelectorAll(
            '.before-header, .wc-block-grid__product, .wc-block-featured-category, .product, .what--item, .wp-block-image, .blocks-gallery-item, .button'
        )

        els = [classes, tags]

        els.map(el => {
            for (index = 0; index < el.length; ++index) {
                el[index].setAttribute('data-aos', 'fade-up')
            }

        })

        AOS.init({
            offset: 50,
            duration: 500,
            easing: 'ease-in-sine',
            delay: 100,
            once: true,
        });
    }
}
