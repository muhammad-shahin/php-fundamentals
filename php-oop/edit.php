<?php
include("crud_functions.php");
$objCrudAdmin = new CrudApp();

// get data from table by id
if (isset($_GET['status'])) {
    if ($_GET['status'] = 'edit') {
        $id = $_GET['id'];
        $display_data = $objCrudAdmin->display_data_by_id($id);
    }
}

if (isset($_POST['update_info'])) {
    $update_msg =  $objCrudAdmin->update_data_by_id($_POST);
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
            <a href="/php-oop">
                <h1 class="text-purple-500 text-3xl pb-5">Edit <?php echo $display_data['std_name'] ?>'s Data</h1>
            </a>
            <form action="" method="post" enctype="multipart/form-data" class="min-w-[550px] mx-auto space-y-4">

                <input type="text" placeholder="Enter Full Name" value="<?php echo $display_data['std_name'] ?>" name="u_std_name" class="px-3 py-2 rounded text-gray-600 border border-gray-400 text-lg w-full outline-purple-400">

                <input type="number" placeholder="Enter Roll" value="<?php echo $display_data['std_roll'] ?>" name="u_std_roll" class="px-3 py-2 rounded text-gray-600 border border-gray-400 text-lg w-full outline-purple-400">

                <input type="number" placeholder="Enter ID" value="<?php echo $display_data['id'] ?>" name="u_std_id" class="px-3 py-2 rounded text-gray-600 border border-gray-400 text-lg w-full outline-purple-400">

                <?php if (isset($update_msg)) {
                    echo '<p class="text-green-500 text-center">' . $update_msg . '</p>';
                }
                ?>

                <input type="file" name="u_std_image" class="px-3 py-2 rounded text-gray-600 border border-gray-400 text-lg w-full outline-purple-400">
                <?php if (isset($insert_data)) {
                    echo '<p class="text-green-500 text-center">' . $insert_data . '</p>';
                }
                ?>
                <input type="submit" value="Update Information" name="update_info" class="px-3 py-2 rounded border border-gray-400 text-lg w-full bg-purple-500 text-white font-medium hover:bg-purple-600 cursor-pointer duration-300">
            </form>
        </div>
    </div>
</body>

</html>