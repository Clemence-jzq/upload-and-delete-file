$(document).ready(function () {
    // load file list
    $('#list tbody').load('list.php');

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

            success: function () {
                $('input[type=reset]').click();
                $('#list tbody').load('list.php');
            },
            error: function () {
                alert('ERROR !');
            }
        });
        return false;
    });
});