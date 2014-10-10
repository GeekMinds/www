(function () {

    // Create mobile element
    var mobile = document.createElement('div');
    mobile.className = 'navbar-mobile';
    document.querySelector('.main-nav').appendChild(mobile);

    // hasClass
    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }

    // toggleClass
    function toggleClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        } else {
            elem.className += ' ' + className;
        }
    }

    // Mobile nav function
    var mobileNav = document.querySelector('.navbar-mobile');
    var toggle = document.querySelector('.navbar-list');
    mobileNav.onclick = function () {
        toggleClass(this, 'navbar-mobile-open');
        toggleClass(toggle, 'navbar-active');
    };
})();
