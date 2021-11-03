require('./bootstrap');
const ClassicEditor = require('@ckeditor/ckeditor5-build-classic');
ClassicEditor
/* El querySelector recibe el nombre del id del campo del textarea */
    .create(document.querySelector('#content_publication'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
/* Al finalizar ejecutar: npm run dev */