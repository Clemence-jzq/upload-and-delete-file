<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Operations</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="upload.js"></script>
</head>

<body>
    <div style="text-align: center;">
        <h1>Upload your files here</h1>
        <form action="" id="fileForm" enctype="multipart/form-data" style="text-align:start; width:20%; margin:auto;">
            <label for="name">Name:</label>
            <input type="text" id="name">
            <br>
            <label for="age">Age:</label>
            <input type="text" name="" id="age">
            <br><br>
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
            <input type="file" name="file" id="file">
            <input type="reset" value="">
            <button type="submit">Submit</button>
        </form>

        <div id="text"></div>
        <!-- file list -->
        <div id="list"></div>
    </div>
</body>

</html>