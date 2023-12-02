 <!-- form data after submit -->
 <?php
    if (isset($_POST['submit_btn'])) {
        $username = $_POST['user_name'];
        $useremail = $_POST['user_email'];
        $password = $_POST['password'];
    }
    ?>

 <div>
     <p class="text-2xl text-green-500">User Name : <?php if (isset($username)) {
                                                        echo $username;
                                                    } ?></p>
     <p class="text-2xl text-green-500">User Email : <?php if (isset($useremail)) {
                                                            echo $useremail;
                                                        } ?></p>
     <p class="text-2xl text-green-500">User Password : <?php if (isset($password)) {
                                                            echo $password;
                                                        } ?></p>
 </div>