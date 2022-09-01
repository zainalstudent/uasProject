<?php
session_start();
include "conn.php";
?>

<form action="" method="POST">
    <table align="center">
        <tr>
            <th colspan="2" height="40">LOGIN PERCOBAAN CUY</th>
        </tr>
        <tr>
            <td width="100"> Username </td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td> Password </td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="login" name="proseslog"></td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['proseslog'])) {
    $sql = mysqli_query($conn, "Select * From student where username = '$_POST[username]' and password = '$_POST[password]'");

    $check = mysqli_num_rows($sql);
    if ($check > 0) {
        $_SESSION['username'] = $_POST['username'];

        echo "<p align=center><b> Selamat Datang Student :)</b></p>";
        echo "<meta http-equiv=refresh content=5; url='index.php'>";
    } else {
        echo "<p align=center><b> Username dan Password Salah !</b></p>";
        echo "<meta http-equiv=refresh content=5; url='login.php'>";
    }
}
?>
