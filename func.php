<?php 
$conn = mysqli_connect("sql306.infinityfree.com", "if0_36069592", "LzIms0j9Jjc", "if0_36069592_sijago", 3306);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function login($data)
{
    global $conn;
    $email = htmlspecialchars($data["email"]);
    $password = $data["password"];
    
    $result = mysqli_query($conn,"SELECT * FROM database_porto1_user where email = '$email'");

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (strcmp($password,$row["password"])==0) {
            return true;
        }
        else {
            return false;
        }
    }else {
        return false;
    }

}function insert($data)
{   
    global $conn;
    $email = htmlspecialchars($data["email"]);
    $nama = htmlspecialchars($data["name"]);
    $password = mysqli_real_escape_string($conn,htmlspecialchars($data["password"]));

    $result = mysqli_query($conn,"SELECT email FROM  database_porto1_user where email = '$email'");
    
    if (mysqli_fetch_assoc($result)) {
        return false;
    }

    $query = "INSERT INTO  database_porto1_user VALUES('','$email','$nama','','','$password','','','','','','')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
function update($data,$email)
{
    global $conn;
    $nama = $data['nama'];
    $address = $data['address'];
    $address2 = $data['address2'];
    $phone = $data['phone'];
    $phone_home = $data['phone_home'];
    $country = $data['country'];
    $lastName = $data['last_name'];


    $query = "UPDATE database_porto1_user set
    nama = '$nama',
    last_name = '$lastName',
    address = '$address',
    address2 = '$address2',
    phone = '$phone',
    phone_home = '$phone_home',
    country = '$country' where email = '$email'
    ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
function updatePassword($data,$email)
{
    global $conn;
    $password = $data['passwordBaru'];
    $query = "UPDATE database_porto1_user set
    password = '$password' where email = '$email'
    ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function Delete($email)
{
    global $conn;
    $query = "DELETE FROM database_porto1_user WHERE email='$email';";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
?>


