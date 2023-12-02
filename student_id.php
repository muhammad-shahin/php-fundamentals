<?php
if (isset($_POST['generate_std_id'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="w-full h-screen flex justify-center items-center">
    <div>
        <p class="text-2xl text-green-500">Student Name : <?php if (isset($user_name)) {
                                                                echo $user_name;
                                                            } ?></p>
        <p class="text-2xl text-green-500">Student Email : <?php if (isset($email)) {
                                                                echo $email;
                                                            } ?></p>
        <p class="text-2xl text-green-500">Student Phone : <?php if (isset($phone)) {
                                                                echo $phone;
                                                            } ?></p>
        <p class="text-2xl text-green-500">Course Name : <?php if (isset($course)) {
                                                                echo $course;
                                                            } ?></p>
        <p class="text-2xl text-green-500">Batch No : <?php if (isset($batch)) {
                                                            echo $batch;
                                                        } ?></p>
    </div>
</body>

</html>