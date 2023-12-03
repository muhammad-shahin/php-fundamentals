<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP Form With File Upload</title>
</head>

<body class="">
    <div class="flex justify-center items-center w-full h-screen bg-gray-100">
        <div class="bg-white px-[6rem] py-[6rem]">
            <h1 class="text-3xl text-purple-500 text-center py-10">Upload Image</h1>
            <!-- form -->
            <form action="show_img.php" method="POST" enctype="multipart/form-data" class="flex flex-col max-w-[350px] gap-3 text-">
                <div class="">
                    <label for="name">Upload An Image :
                    </label>
                    <input type="file" name="image" id="image" placeholder="Upload Image" class="border-2 border-black px-5 py-2 w-full">
                </div>

                <input type="submit" value="Upload Image " name="submit" class="border-2 border-black px-5 py-2 w-full cursor-pointer hov hover:bg-black hover:text-white duration-300">
            </form>
        </div>
</body>

</html>