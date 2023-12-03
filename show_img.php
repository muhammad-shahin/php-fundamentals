<?php
if (isset($_POST['submit'])) {
    // when we upload a file using input type file it's return an array with the uploaded file information
    // print_r($_FILES['image']);
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    echo $img_name;
    move_uploaded_file($tmp_name, 'upload/' . $img_name);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <h1 class="text-center text-2xl">Uploaded Image</h1>
    <img src="upload/<?php if (isset($img_name)) {
                            echo $img_name;
                        } ?>">
</body>

</html>