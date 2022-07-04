tinymce.init({
    selector: 'textarea#tinymce',
    height: 400,
    menubar: false,
    plugins: 'code image',
    toolbar: 'undo redo | styles | bold italic underline blockquote | alignleft aligncenter alignright alignjustify | numlist bullist | image code',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    branding: false,
});

// menggunakan fungsi Upload Gambar dengan TinyMCE
tinymce.activeEditor.uploadImages(function(success) {
    document.forms[0].submit();
});