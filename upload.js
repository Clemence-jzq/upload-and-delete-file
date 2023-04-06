$(document).ready(function () {
    // load file list
    $('#list').load('list.php');

    // submit form
    $('#fileForm').submit(function () {
        let formData = new FormData();
        formData.append('file', $('#file').get(0).files[0]);
        let name = $('#name').val();
        let age = $('#age').val();
        let params = {
            name: name,
            age: age
        };
        formData.append('params', JSON.stringify(params));

        $.ajax({
            type: 'post',
            url: 'upload.php',
            data: formData,
            caches: false,
            processData: false,
            contentType: false,

            success: function (data) {
                $('#text').html(data);
                $('input[type=reset]').click();
            },
            error: function () {
                alert('ERROR !');
            }
        });
        return false;
    });
});