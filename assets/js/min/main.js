function hide(element) {
    var el = document.getElementsByClassName(element)[0];
    el.style.opacity = 1;

    (function fade() {
        if ((el.style.opacity -= 0.1) < 0) {
            el.style.display = 'none';
        } else {
            requestAnimationFrame(fade);
        }
    })();
}

function show(element, display) {
    var el = document.getElementsByClassName(element)[0];

    el.style.opacity = 0;
    el.style.display = display || 'inline-flex';

    (function fade() {
        var val = parseFloat(el.style.opacity);

        if (!((val += 0.1) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
}

// Hide modal on click outside.
document.addEventListener('click', function (event) {
    var modal = document.getElementsByClassName('modal')[0];

    if (!modal || event.target.closest('.modal')) {
        return;
    }

    if ('1' === modal.style.opacity) {
        hide('modal');
    }
});


var scrollPosition = window.scrollY,
    siteHeader = document.getElementsByClassName('site-header')[0],
    siteHeaderHeight = siteHeader.offsetHeight;

window.addEventListener('scroll', function () {

    scrollPosition = window.scrollY;

    if (scrollPosition >= siteHeaderHeight) {
        siteHeader.classList.add('sticky');
    } else {
        siteHeader.classList.remove('sticky');
    }

});


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
