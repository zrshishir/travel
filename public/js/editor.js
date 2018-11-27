$(document).ready(function () {
    tinymce.init({
        selector: '.full-editor',
        height: 500,
        relative_urls: false,
        remove_script_host: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen textcolor',
            'insertdatetime media table contextmenu paste responsivefilemanager code'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": "/filemanager/plugin.min.js"}
    });

    tinymce.init({
        selector: '.email-editor',
        height: 500,
        relative_urls: false,
        remove_script_host: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen textcolor',
            'insertdatetime media table contextmenu paste responsivefilemanager code'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": "/filemanager/plugin.min.js"}
    });

    tinymce.init({
        selector: '.clean-editor',
        height: 500,
        relative_urls: false,
        remove_script_host: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code textcolor'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
        valid_elements: '*[*]',
        valid_children: "+body[style]",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": "/filemanager/plugin.min.js"}
    });

    tinymce.init({
        selector: '.builder-editor',
        height: 300,
        relative_urls: false,
        remove_script_host: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media contextmenu paste code textcolor'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
        valid_elements: '*[*]',
        valid_children: "+body[style]",
        // image_advtab: true ,
        relative_urls:false,
        external_filemanager_path:"/filemanager/",
        filemanager_title: "File Manager",
        external_plugins: {"filemanager": "/filemanager/plugin.min.js"},
        // image_list: "http://local.postman.com/loadMedia",
        // external_image_list_url: "http://local.postman.com/loadMedia"
    });
});