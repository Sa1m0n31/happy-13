/* Hero carousel */
let laningCarousel;
let landingInterval;
const landingDots = document.querySelectorAll(".landingPage__carousel__dots__item");

if(document.querySelector(".landingPage__carousel")) {
    landingCarousel = new Siema({
        selector: ".landingPage__carousel",
        perPage: 1,
        loop: true,
        onChange: () => {
            changeSlide(-2);
        }
    });

    landingInterval = setInterval(() => {
        changeSlide(-1)
    }, 5000);
}

const removeContentFromLanding = () => {
    document.querySelector(".landingPage__content").style.display = "none";
}

const addContentToLanding = () => {
    document.querySelector(".landingPage__content").style.display = "block";
}

const changeSlide = (n) => {
    if(n >= 0) clearInterval(landingInterval);

    if(n >= 0) landingCarousel.goTo(n);
    else if(n === -1) landingCarousel.next();

    if(landingCarousel.currentSlide !== 0) {
        removeContentFromLanding();
    }
    else {
        addContentToLanding();
    }
    landingDots.forEach((item, index) => {
        if(index === landingCarousel.currentSlide) item.style.background = "#EC950E";
        else item.style.background = "#efefef";
    });
}

/* Testimonials carousel */
const testimonialsSelector = document.querySelector(".testimonials__carousel");
let testimonialsCarousel;
if(testimonialsSelector) {
    testimonialsCarousel = new Siema({
        selector: ".testimonials__carousel",
        perPage: {
            1200: 3,
            700: 2,
            100: 1
        },
        loop: true
    });

    setInterval(() => {
        testimonialsCarousel.next();
    }, 5000);
}

const testimonialsPrev = () => {
    testimonialsCarousel.prev();
}

const testimonialsNext = () => {
    testimonialsCarousel.next();
}

/* Mobile menu */
const mobileMenu = document.querySelector(".mobileMenu");
const mobileMenuChildren = document.querySelectorAll(".mobileMenu>*");

const openMobileMenu = () => {
    mobileMenu.style.transform = "scaleX(1)";
    setTimeout(() => {
        mobileMenuChildren.forEach(item => {
            item.style.opacity = "1";
        });
    }, 500);
}

const closeMobileMenu = () => {
    mobileMenuChildren.forEach(item => {
        item.style.opacity = "0";
    });
    setTimeout(() => {
        mobileMenu.style.transform = "scaleX(0)";
    }, 300);
}

/* Contact form submission */
const formSubmit = () => {
    const contactForm = document.querySelector(".wpcf7-form");
    const contactFormSubmit = document.querySelector(".contact__form__afterSubmit");

    contactForm.style.opacity = "0";

    setTimeout(() => {
        contactForm.style.display = "none";
        contactFormSubmit.style.display = "block";
        contactFormSubmit.style.opacity = "1";
    }, 500);
}

document.addEventListener("wpcf7mailfailed", () => {
    formSubmit();
});

document.addEventListener("wpcf7mailspam", () => {
    formSubmit();
});

/* AOS animations */
AOS.init({
    offset: -200
});

const landingPageImgLoaded = () => {
    const beforeLoad = document.querySelector(".beforeLoad");
    const landingPage = document.querySelector(".landingPage");
    const landingPageChildren = document.querySelectorAll(".landingPage *");

    beforeLoad.style.opacity = "0";
    landingPage.style.opacity = "1";
    landingPageChildren.forEach(item => {
        item.style.opacity = "1";
    });

    setTimeout(() => {
        beforeLoad.style.display = "none";
    }, 1000);
}