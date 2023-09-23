import './bootstrap';
// import 'popper.js';
// window.Popper = require('popper.js').default;
// require('bootstrap');

$(document).ready(function () {
    $('[data-toggle="popover"]').popover();
});



$('.example-popover').popover({
    container: 'body',
    template : '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header">111111</h3><div class="popover-body"></div></div>'


  })
