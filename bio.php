<?php
if(isset($_POST['submit']))
{
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
}
?>

<style>
    table, tr, th, td {
  border: 1px solid tomato;
  border-collapse : collapse;
  text-align: center;
}


</style>

<table>
<tr>
    <th>Filed Name</th>
    <th>Information</th>
</tr>

<tr>
    <td>First Name</td>
    <td>
        <?php
            if(isset($firstName))
                echo $firstName;
        ?>
    </td>
</tr>
<tr>
    <td>Last Name</td>
    <td>
        <?php
            if(isset($lastName))
                echo $lastName;
        ?>
    </td>
</tr>
<tr>
    <td>Email</td>
    <td>
        <?php
            if(isset($email))
                echo $email;
        ?>
    </td>
</tr>
<tr>
    <td>Date of birth</td>
    <td>
        <?php
            if(isset($dob))
                echo $dob;
        ?>
    </td>
</tr>
<tr>
    <td>Age</td>
    <td>
        <?php
            if(isset($age))
                echo $age;
        ?>
    </td>
</tr>
</table>