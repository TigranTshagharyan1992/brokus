function isEmailValid(email) {
    var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return emailRegex.test(email);
}

function formatPhoneNumber(number) {
    let match = number.match(/^(\d{3})(\d{2})(\d{2})(\d{2})(\d{2})$/);

    if (match) {
        return "(+" + match[1] + ") " + match[2] + " " + match[3] + " " + match[4] + " " + match[5];
    };

    return null
}

function numberWithSeparator(value, separator) {
    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, separator);
}

function getOnlyNumbers(str) {
    return str.replace(/[^\d]/g, '');
}

function animateValue(obj, start, end, duration, suffix = '') {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start) + suffix;
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

function accordionInit(e) {
    const accordionElements = document.querySelectorAll(".accordion");
    accordionElements.forEach((accordionElement) => {
        accordionElement.addEventListener("click", accordionSlideToggle);
        accordionElement.addEventListener("keypress", accordionSlideToggle);
    });   
}

function accordionSlideToggle(e) {
    if(e.type === 'keypress' && e.keyCode !== 13) return;

    if(e.target.closest(".accordion__header")) {
        const target = e.target.closest(".accordion__header");
        const accordion = target.closest(".accordion");
        const thisItem = target.closest(".accordion__item");
        const openItem = accordion.querySelector(".accordion__item.open");
        const thisBody = thisItem.querySelector(".accordion__body");
        const openBody = openItem && openItem.querySelector(".accordion__body");
    
        if (thisItem.classList.contains("open")) {
            thisItem.classList.remove("open");
            slideUp(thisBody);
        } else {
            if(openItem) {
                openItem.classList.remove("open");
                slideUp(openBody);
            }
            thisItem.classList.add("open");
            slideDown(thisBody);
        }
    }
}

function slideUp(target, duration = 300) {
    target.style.transitionProperty = 'height, margin, padding';
    target.style.transitionDuration = duration + 'ms';
    target.style.height = target.offsetHeight + 'px';
    target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;

    window.setTimeout(() => {
        if(parseInt(target.style.height) === 0) {
            target.style.display = 'none';
            target.style.removeProperty('height');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
            target.style.removeProperty('padding-top');
            target.style.removeProperty('padding-bottom');
            target.style.removeProperty('margin-top');
            target.style.removeProperty('margin-bottom');
        }
    }, duration);
}

function slideDown(target, duration = 300) {
    target.style.removeProperty('display');
    let display = window.getComputedStyle(target).display;

    if (display === 'none')
        display = 'block';

    let height = target.offsetHeight;
    target.style.display = display;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + 'ms';
    target.style.height = height + 'px';
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
    window.setTimeout(() => {
        if(parseInt(target.style.height) === height) {
            target.style.removeProperty('height');
            target.style.removeProperty('overflow');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
        }
    }, duration);
}

function slideToggle(target, duration = 300) {
    if (window.getComputedStyle(target).display === 'none') {
        return slideDown(target, duration);
    } else {
        return slideUp(target, duration);
    }
}

function headerFixed() {
    let st = $(this).scrollTop();

    if (st <= 5) {
        $(".header__wrapper").removeClass("fixed");
    } else {
        $(".header__wrapper").addClass("fixed");
    }
}

function getDocumentVisibleWidth() {
    return Math.max(
        document.body.scrollWidth, document.documentElement.scrollWidth,
        document.body.offsetWidth, document.documentElement.offsetWidth,
        document.body.clientWidth, document.documentElement.clientWidth
    );
}

function scrollNone() {
    const body = document.querySelector("body");
    const modals = document.querySelectorAll(".modal");
    const header = document.querySelector(".header");
    let lockBody = false;

    modals.forEach((modal) => {
        if (modal.classList.contains("active") || header.classList.contains("active")) {
            lockBody = true;
        }
    });

    let scrollWidthBeforeFreeze = getDocumentVisibleWidth();

    if (lockBody) {
        body.classList.add("locked");

        let scrollWidthAfterFreeze = getDocumentVisibleWidth();

        if (scrollWidthBeforeFreeze < scrollWidthAfterFreeze) {
            let scrollSpace = scrollWidthAfterFreeze - scrollWidthBeforeFreeze;

            body.paddingRight = scrollSpace + "px";
        }
    } else {
        body.classList.remove("locked");
        body.paddingRight = '';

        if (body.getAttribute("style") === "") {
            body.removeAttribute("style");
        }
        if (body.getAttribute("class") === "") {
            body.removeAttribute("class");
        }
    }
}