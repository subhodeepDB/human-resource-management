require('./bootstrap');

// For stylest datepicker
require('./bootstrap-datepicker');

import $ from 'jquery';
window.$ = window.jQuery = $;

import'admin-lte/plugins/datatables/jquery.dataTables.min.js';
import'admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js';
import'admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js';
import'admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js';
// import'admin-lte/plugins/select2/js/select2.full.min.js';
import'admin-lte/plugins/daterangepicker/daterangepicker.js';

// Include Bootstrap Multiselect JS 
import'bootstrap-select/dist/js/bootstrap-select.js';

// require('../../node_modules/bootstrap-select/dist/js/bootstrap-select');
// bootstrap-select
// require('./bootstrap-multiselect/bootstrap-select.min');

// $(function () {
//     $('select').selectpicker();
// });

// import Alpine from 'alpinejs';
// window.Alpine = Alpine;
// Alpine.start();