<?php
$host= "localhost";
$user = "root";
$password = "";
$name = "youtube";

$conn = mysqli_connect($host,$user,$password,$name);
if(!$conn){
 die ("not connected");
}
echo "connected <hr>";
if(isset($_REQUEST['submit'])){
  

    if(($_REQUEST['name'] == "") || ($_REQUEST['Password'] == "") || ($_REQUEST['gender'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['phoneCode'] == "") || ($_REQUEST['phone'] == ""))
    {
        echo "fill all field";
    }
    else{
        $name = $_REQUEST['name'];
        $password = $_REQUEST['Password'];
        $gender = $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $phoneCode = $_REQUEST['phoneCode'];
        $phone = $_REQUEST['phone'];

        $sql = "insert into register (name,Password,gender,email,phoneCode,phone) value ('$name','$password','$gender','$email','$phoneCode','$phone')";
        if(mysqli_query($conn,$sql)){
            echo "new record";
        }else{
            echo "not record";
        }

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiii</title>
</head>
<body>
    <form action="" method="POST">
        <table border="1" cellspacing="0" align="center"> 
            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <input type="text" placeholder="Name" name="name"> 
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="Password"  placeholder="Pass" name="Password">
                </td>
            </tr>
            <tr>
                <td>
                    Gender:
                </td>
                <td>
                    <input type="radio" name="gender" value="m">Male
                    <input type="radio" name="gender" value="f">Female
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" placeholder="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    Phone no:
                </td>
                <td>
                    <select name="phoneCode">
                        <option selected hidden value="">select Code</option>
                        <option value="+91">+91</option>
                        <option value="+966">+966</option>
                        <option value="+955">+955</option>
                        <option value="+944">+944</option>
                        <option value="+999">+999</option>
                        <option value="+922">+922</option>
                        <option value="+65">+65</option>
                        <option value="+43">+43</option>
                        <option value="+56">+56</option>
                    </select>
                    <input type="phone" placeholder="Phone no:" name="phone">
                </td>
            </tr>
            <tr>
                <td>
                    <input style ="background-color: aqua;" type="Submit" value="Submit" name="submit"> 
                </td>
            </tr>
        </table>
    </form>
</body>
</html>