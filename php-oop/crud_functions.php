<?php
class CrudApp
{
    private $connection;
    public function __construct()
    {
        // we need four things to connect with my sql database
        /**
         * 1. database hostname
         * 2. database username
         * 3. database password
         * 4. database name
         */

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'students';

        $this->connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->connection) {
            die("Database Connection Error!!");
        }
    }

    public function add_data($data)
    {
        $std_name = $data['std_name'];
        $std_roll = $data['std_roll'];
        $std_image = $_FILES['std_image']['name'];
        $tmp_name = $_FILES['std_image']['tmp_name'];

        // insert data into table
        $query = "INSERT INTO std_table(std_name, std_roll, std_image) VALUE('$std_name', $std_roll, '$std_image')";

        if (mysqli_query($this->connection, $query)) {
            move_uploaded_file($tmp_name, 'upload/' . $std_image);
            return "Information Saved In Database Successfully";
        }
    }
    public function display_data()
    {
        $query = "SELECT * FROM std_table";
        if (mysqli_query($this->connection, $query)) {
            $std_data = mysqli_query($this->connection, $query);
            return $std_data;
        }
    }
    public function display_data_by_id($id)
    {
        $query =  "SELECT * FROM std_table WHERE id=$id";
        if (mysqli_query($this->connection, $query)) {
            $std_data = mysqli_query($this->connection, $query);
            $formatted_data = mysqli_fetch_assoc($std_data);
            return $formatted_data;
        }
    }
    public function update_data_by_id($data)
    {
        $id = $data['u_std_id'];
        $std_name = $data['u_std_name'];
        $std_roll = $data['u_std_roll'];
        $std_image = $_FILES['u_std_image']['name'];
        $tmp_name = $_FILES['u_std_image']['tmp_name'];

        // update query
        $query =  "UPDATE std_table SET std_name='$std_name', std_roll='$std_roll', std_image='$std_image' WHERE id=$id";

        if (mysqli_query($this->connection, $query)) {
            move_uploaded_file($tmp_name, 'upload/' . $std_image);
            return "Information Updated In Database Successfully";
        } else {
            return "Failed To Update Information In Database!";
        }
    }
    public function delete_data_by_id($id)
    {
        // delete image
        $catch_img = "SELECT * FROM std_table WHERE id=$id";
        $delete_std_info = mysqli_query($this->connection, $catch_img);
        $all_info = mysqli_fetch_assoc($delete_std_info);
        $delete_img = $all_info['std_img'];
        // delete query
        $query =  "DELETE FROM std_table WHERE id=$id";

        if (mysqli_query($this->connection, $query)) {
            unlink('upload/' . $delete_img);
            return "Deleted Successfully";
        } else {
            return "Failed To Delete!";
        }
    }
}
