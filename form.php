
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP Form</title>
</head>

<body class="p-10">
    <div class="flex justify-center items-center gap-20">
        <!-- form -->
        <form action="contact.php" method="POST" class="flex flex-col max-w-[350px] gap-3">
            <label for="user_name">Full Name
            </label>
            <input type="text" name="user_name" id="user_name" placeholder="Enter Name" class="border-2 border-black px-5 py-2">


            <label for="user_email">Your Email
            </label>
            <input type="email" name="user_email" id="user_email" placeholder="Enter Email" class="border-2 border-black px-5 py-2">

            <label for="user_email">Enter Password
            </label>
            <input type="password" name="password" id="password" placeholder="Enter Password" class="border-2 border-black px-5 py-2">

            <input type="submit" value="Submit Now" name="submit_btn" class="border-2 border-black px-5 py-2 cursor-pointer hov hover:bg-black hover:text-white duration-300">
        </form>
</body>

</html>