import {
    ClassicEditor,
    SourceEditing,
    AutoImage,
    Autosave,
    BalloonToolbar,
    Bold,
    CloudServices,
    Essentials,
    Heading,
    ImageBlock,
    ImageInline,
    ImageInsertViaUrl,
    ImageResize,
    ImageStyle,
    ImageTextAlternative,
    ImageToolbar,
    ImageUpload,
    Italic,
    Link,
    List,
    Paragraph,
    Underline
} from 'ckeditor5';

const LICENSE_KEY = 'GPL';

const editorConfig = {
    toolbar: {
        items: ['heading', '|', 'bold', 'italic', 'underline', '|', 'link', '|', 'bulletedList', 'numberedList', 'sourceEditing', '|'],
        shouldNotGroupWhenFull: false
    },
    plugins: [
        AutoImage,
        Autosave,
        BalloonToolbar,
        Bold,
        CloudServices,
        Essentials,
        Heading,
        ImageBlock,
        ImageInline,
        ImageInsertViaUrl,
        ImageResize,
        ImageStyle,
        ImageTextAlternative,
        ImageToolbar,
        ImageUpload,
        Italic,
        Link,
        List,
        Paragraph,
        Underline,
        SourceEditing
    ],
    balloonToolbar: ['bold', 'italic', '|', 'link', '|', 'bulletedList', 'numberedList'],
    heading: {
        options: [
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
        ]
    },
    image: {
        toolbar: ['imageTextAlternative', '|', 'imageStyle:inline', 'imageStyle:wrapText', 'imageStyle:breakText', '|', 'resizeImage']
    },
    licenseKey: LICENSE_KEY,
    link: {
        addTargetToExternalLinks: true,
        defaultProtocol: 'https://',
        decorators: {
            toggleDownloadable: {
                mode: 'manual',
                label: 'Downloadable',
                attributes: { download: 'file' }
            }
        }
    },
    placeholder: 'Type or paste your content here!',
    allowedContent: true
};

function initEditor(editorId) {
    ClassicEditor.create(document.querySelector(`#${editorId}`), editorConfig)
        .then(editor => {
            if (editorId === 'editor-update') {
                const content = document.querySelector(`#${editorId}`).value;
                editor.setData(content);
            }
        })
        .catch(error => {
            console.error(error);
        });
}

const editorId = document.querySelector('#editor-update') ? 'editor-update' : 'editor';
initEditor(editorId);
