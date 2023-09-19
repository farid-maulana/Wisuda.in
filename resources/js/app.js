/* Bootstrap */
import './bootstrap.js';
import 'bootstrap';
/* jQuery */
import $ from 'jquery';
/* Select2 */
import select2 from 'select2';
/* Custom JS */
import './script.js';

window.jQuery = window.$ = $;

select2();

$(document).ready(function () {
    $('#add-new-prodi').click(function () {
        $('.select2-new-prodi').select2({
            search: true,
            dropdownParent: $('#new-prodi')
        })
    })

    $('.edit-prodi').click(function () {
        const id = $(this).data('id');
        $('.select2-edit-prodi').select2({
            search: true,
            dropdownParent: $(`#edit-prodi-${id}`)
        })
    })

    $('#add-new-graduation').click(function () {
        $('.select2-new-graduation').select2({
            search: true,
            dropdownParent: $('#new-graduation')
        })
    })

    $('.edit-graduation').click(function () {
        const id = $(this).data('id');
        $('.select2-edit-graduation').select2({
            search: true,
            dropdownParent: $(`#edit-graduation-${id}`)
        })
    })
});


