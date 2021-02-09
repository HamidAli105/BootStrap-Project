<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>INSERT Data Query</title>
    </head>

    <body>
        <?php
        $first_name = $_POST['fname'];
        $sure_name = $_POST['sname'];
        $phone_number = $_POST['phnnbr'];
        $password = $_POST['password'];
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $gender = $_POST['gender'];

        //use md5 function for insert pawrd in database
        $pswrd = md5($password);

        if (isset($_POST['Button'])) {

            require_once 'connection.php';

            $image =$_FILES['image']['name'];
            $tmp_name =$_FILES['image']['tmp_name'];

            if (isset($image)) {

                if ($image != "") {

                    $location = "Upload/";

                    if (move_uploaded_file($tmp_name, $location . $image)) {

                        echo "Upload image successfully <br>";
                    } else {
                        echo "Not upload image";
                    }
                }
            }
        }

        $sql = "INSERT INTO facebook_record(First_Name, Last_Name, Email, Password, Day, Month, Year, Gender, Image)
        VALUES('$first_name', '$sure_name', '$phone_number', '$pswrd', '$date', '$month', '$year', '$gender', '$image')";

        if (mysqli_query($conn, $sql)) {
            echo 'your data is inserted successfully';
        } else {
            echo 'error inserted data' . mysqli_error();
        }

        mysqli_close($conn);
        ?>   

    </body>
</html>