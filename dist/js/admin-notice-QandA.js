var toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'];

var editor = new Simditor({
    textarea: $('#Q-and-A-content'),
    placeholder: "Input Q&A",
    toolbar: toolbar
});