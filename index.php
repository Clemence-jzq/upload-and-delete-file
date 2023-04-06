<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Operations</title>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="upload.js"></script>
</head>

<body>
    <div style="text-align: center;">
        <h1>Upload Your Files Here</h1>
        <form action="" id="fileForm" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" class="form-control">
            <br>
            <label for="age">Age:</label>
            <input type="text" id="age" class="form-control">
            <br><br>
            <input type="file" id="file">
            <input type="reset" value="" hidden>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>

        <!-- list to show all data -->
        <table id="list" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</body>

</html>