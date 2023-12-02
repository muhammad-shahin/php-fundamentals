<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP Form Handling</title>
</head>

<body class="">
    <div class="flex justify-center items-center w-full h-screen bg-gray-100">
        <div class="bg-white px-[6rem] py-[6rem]">
            <h1 class="text-3xl text-purple-500 text-center py-10">Generate New Student ID</h1>
            <!-- form -->
            <form action="student_id.php" method="POST" class="flex flex-col max-w-[350px] gap-3 text-">
                <div class="">
                    <label for="name">Full Name :
                    </label>
                    <input type="text" name="user_name" id="name" placeholder="Enter Name" class="border-2 border-black px-5 py-2 w-full">
                </div>
                <div class="">
                    <label for="email">Email :
                    </label>
                    <input type="email" name="email" id="email" placeholder="example@email.com" class="border-2 border-black px-5 py-2 w-full">
                </div>
                <div class="">
                    <label for="phone">Phone :
                    </label>
                    <input type="text" name="phone" id="phone" placeholder="01857771268" class="border-2 border-black px-5 py-2 w-full">
                </div>
                <div class="">
                    <label for="course">Course :
                    </label>
                    <input type="text" name="course" id="course" placeholder="Web Development" class="border-2 border-black px-5 py-2 w-full">
                </div>
                <div class="">
                    <label for="batch">Batch NO :
                    </label>
                    <input type="text" name="batch" id="batch" placeholder="WDB8" class="border-2 border-black px-5 py-2 w-full">
                </div>

                <input type="submit" value="Submit Now" name="generate_std_id" class="border-2 border-black px-5 py-2 w-full cursor-pointer hov hover:bg-black hover:text-white duration-300">
            </form>
        </div>
</body>

</html>