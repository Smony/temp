+function ($) { "use strict";
    $(document).ready(function(){
        $("#upload").dropzone({
            url: "/upload",
            //acceptedFiles: 'image/*,application/pdf,.psd,.zip,.rar,.txt',
            //maxFilesize: 10,
            acceptedFiles: 'image/*,application/pdf,.psd,.zip,.rar,.gz,.txt',
            maxFilesize: 2000,
            accept: function(file, done) {
                console.log(file);
                done();
            }
        });
    });

}(window.jQuery);