import Quill from "quill/dist/quill";

document.addEventListener("DOMContentLoaded", function (event) {
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],
        [{'indent': '-1'}, {'indent': '+1'}],
        [{'size': ['small', false, 'large', 'huge']}],
        [{'header': [1, 2, 3, 4, 5, 6, false]}],
        [{'color': []}, {'background': []}],
        [{'font': []}],
        [{'align': []}],
        ['link', 'image'],
        ['clean']
    ];

    var termsQuil = new Quill('#terms-quill', {
        modules: {
            syntax: false,
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });

    var conditionsQuil = new Quill('#conditions-quill', {
        modules: {
            syntax: false,
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });

    window.quill = termsQuil;
    window.quill = conditionsQuil;

});
