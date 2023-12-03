<?php
include('crud_functions.php');

$objCrudAdmin = new CrudApp();

if (isset($_POST['add_info'])) {
    $insert_data = $objCrudAdmin->add_data($_POST);
}
$students = $objCrudAdmin->display_data();

if (isset($_GET['status'])) {
    if ($_GET['status'] === 'delete') {
        $id = $_GET['id'];
        $delete_status = $objCrudAdmin->delete_data_by_id($id);

        // Redirect to the same page after delete
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
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

<body class="bg-gray-100 w-full">
    <div class="w-full min-h-screen flex justify-center items-center py-20 flex-col gap-8">
        <div class="p-16 rounded-md shadow-2xl bg-white">
            <h1 class="text-purple-500 text-3xl pb-5">Student Database</h1>
            <form action="" method="post" enctype="multipart/form-data" class="min-w-[550px] mx-auto space-y-4">
                <input type="text" placeholder="Enter Full Name" name="std_name" class="px-3 py-2 rounded text-gray-600 border border-gray-400 text-lg w-full outline-purple-400">

                <input type="number" placeholder="Enter Roll" name="std_roll" class="px-3 py-2 rounded text-gray-600 border border-gray-400 text-lg w-full outline-purple-400">

                <input type="file" name="std_image" class="px-3 py-2 rounded text-gray-600 border border-gray-400 text-lg w-full outline-purple-400">
                <?php if (isset($insert_data)) {
                    echo '<p class="text-green-500 text-center">' . $insert_data . '</p>';
                }
                ?>
                <?php if (isset($delete_status)) {
                    echo '<p class="text-green-500 text-center">' . $delete_status . '</p>';
                }
                ?>
                <input type="submit" value="Add Information" name="add_info" class="px-3 py-2 rounded border border-gray-400 text-lg w-full bg-purple-500 text-white font-medium hover:bg-purple-600 cursor-pointer duration-300">
            </form>
        </div>
        <div class="p-16 rounded-md shadow-2xl bg-white w-">
            <table class="w-[70vw] mx-auto">
                <thead>
                    <tr class="bg-purple-500 text-2xl lg:text-xl text-white text-center">
                        <td class="border border-gray-700 p-2">ID</td>
                        <td class="border border-gray-700 p-2">Name</td>
                        <td class="border border-gray-700 p-2">Roll</td>
                        <td class="border border-gray-700 p-2">Image</td>
                        <td class="border border-gray-700 p-2">Action</td>
                    </tr>
                </thead>
                <tbody class="text-center bg-gray-100">
                    <?php while ($student = mysqli_fetch_assoc($students)) { ?>

                        <tr class="border border-purple-300">
                            <td class="border border-purple-300 p-2">
                                <?php echo $student['id'] ?>
                            </td>
                            <td class="border border-purple-300 p-2">
                                <?php echo $student['std_name'] ?>
                            </td>
                            <td class="border border-purple-300 p-2">
                                <?php echo $student['std_roll'] ?>
                            </td>
                            <td class="border border-purple-300 p-2">
                                <img src="upload/<?php echo $student['std_image'] ?>" class="w-[150px]">
                            </td>
                            <td class="border border-purple-300 p-2">
                                <a href="edit.php?status=edit&&id=<?php echo $student['id'] ?>"><button class="px-5 py-2 bg-green-500 text-white rounded">Edit</button></a>
                                <a href="?status=delete&&id=<?php echo $student['id'] ?>"><button class="px-5 py-2 bg-red-500 text-white rounded">Delete</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>