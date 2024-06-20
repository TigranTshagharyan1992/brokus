document.addEventListener("DOMContentLoaded", function () {
    // headerFixed();

    const burgerElement = document.querySelector(".burger");
    const headerMenuElement = document.querySelector(".header-menu");
    const headerElement = document.querySelector(".header");
    if(burgerElement) {
        burgerElement.addEventListener("click", function() {
            burgerElement.classList.toggle("active");
            headerMenuElement.classList.toggle("active");
            headerElement.classList.toggle("active");
        });
    }

    // MODAL ***************************
    const dataModalElements = document.querySelectorAll("[data-modal]");
    if(dataModalElements.length) {
        dataModalElements.forEach((dataModal) => {
            dataModal.addEventListener("click", function () {
                let targetModal = document.querySelector(`.${dataModal.getAttribute("data-modal")}`);
                targetModal.classList.add("active");
        
                scrollNone();
            });
        });
    }


    const modalCloseElements = document.querySelectorAll(".modal-close");
    if(modalCloseElements.length) {
        modalCloseElements.forEach((modalClose) => {
            modalClose.addEventListener("click", function () {
                modalClose.closest(".modal").classList.remove("active");
    
                scrollNone();
            });
        });
    }

    // TOGGLER *************************
    const togglerTriggerElements = document.querySelectorAll(".toggler-trigger");
    if(togglerTriggerElements.length) {
        togglerTriggerElements.forEach((togglerTriggerElement) => {
            togglerTriggerElement.addEventListener("click", function() {
                const toggler =  togglerTriggerElement.closest(".toggler");
                toggler.classList.toggle("active");
        
                scrollNone();
            });
        });
    }

    const togglerCloseElements = document.querySelectorAll(".toggler-close");
    if(togglerCloseElements.length) {
        togglerCloseElements.forEach((togglerClose) => {
            togglerClose.on("click", function() {
                togglerClose.closest(".toggler").classList.remove("active");
        
                scrollNone();
            });
        });
    }

    // Form Validation ***************************
    const withValidationForms = document.querySelectorAll(".with-validation");
    if(withValidationForms.length) {
        withValidationForms.forEach((withValidationForm) => {
            withValidationForm.addEventListener("submit", function (e) {
                let isValid = true;
                let emailElements = withValidationForm.querySelectorAll(".email-validation");
                let errorHtml = `<div class="form-field__message error">Wrong email, please set correct email address</div>`;
        
                // clear All error messages
                const errorMessages = withValidationForm.querySelectorAll(".form-field__message.error");
                if(errorMessages.length) {
                    errorMessages.forEach((errorMessage) => {
                        errorMessage.remove();
                    });
                }
                // clear All invalid classes
                const invalidFields = withValidationForm.querySelectorAll(".form-field.invalid");
                if(invalidFields.length) {
                    invalidFields.forEach((invalidField) => {
                        invalidField.classList.remove("invalid");
                    });
                }
        
                if (emailElements.length) {
                    emailElements.forEach((emailElement) => {
                        if (!isEmailValid(emailElement.value)) {
                            emailElement.closest(".form-field").classList.add("invalid");
                            emailElement.closest(".form-field").insertAdjacentHTML("beforeend", errorHtml);
                            isValid = false;
                        }
                    });
                }
        
                if (!isValid) {
                    e.preventDefault();
                }
            });
        });
    }

    const teamSliderElement = document.querySelector(".team-slider");
    if(teamSliderElement) {
        const teamSlider = new Swiper(".team-slider .swiper", {
            slidesPerView: 1,
            loop: true,
            navigation: {
                nextEl: '.team-slider__arrow_next',
                prevEl: '.team-slider__arrow_prev',
            },
            simulateTouch: false,
            pagination: {
                el: ".team-slider__dots",
                clickable: true,
            }
        });
    }

    const processSliderElement = document.querySelector(".process-slider");
    if(processSliderElement) {
        const processSlider = new Swiper(".process-slider .swiper", {
            slidesPerView: 1.1,
            navigation: {
                nextEl: '.process-slider__arrow_next',
                prevEl: '.process-slider__arrow_prev',
            },
            pagination: false,
            simulateTouch: false,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    }

    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });

    // REMOVE ACTIVE CLASSES *******************************
    document.addEventListener('click', function (e) {
        if(!e.target.closest(".lang-switcher")) {
            const langSwitcher =  document.querySelector(".lang-switcher");
            if(langSwitcher) {
                langSwitcher.classList.remove("active");
                
                scrollNone();
            }
        }
        if(!e.target.closest(".modal__wrapper")) {
            const activeModalElements =  document.querySelectorAll(".modal.active");
            if(activeModalElements.length) {
                activeModalElements.forEach((activeModalElement) => {
                    activeModalElement.classList.remove("active");
                });

                scrollNone();
            }
        }
        if(!e.target.closest(".toggler_global")) {
            const activeTogglerElements =  document.querySelectorAll(".toggler_global.active");

            if(activeTogglerElements.length) {
                activeTogglerElements.forEach((activeTogglerElement) => {
                    activeTogglerElement.classList.remove("active");
                });

                scrollNone();
            }
        }

        e.stopPropagation();
    });
});

// Scroll
// $(window).scroll(function () {
//     headerFixed();
// });
