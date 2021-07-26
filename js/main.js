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
AOS.init();