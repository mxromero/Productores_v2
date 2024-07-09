import * as Popper from '@popperjs/core';

try {
    window.Popper = Popper;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}
