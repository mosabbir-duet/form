



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>


    <style>
        h3 {
            text align: center;
        }
        .form-element {
            background-color: #ddd;

        }

        .form-element form label{
           font-size: 20px;
           margin-right: 40px;


        }

        .form-element form input{
           padding: 10px 10px;
           margin-bottom: 10px;

        }

    </style>
</head>
<body>

<h3>User Information</h3>
    <div class="form-element">
    
        <form action="bio.php" method="post">
            <label for="">First Name:</label>
            <input type="text" name = "fName">
            <label for="">Last Name:</label>
            <input type="text" name = "lName"><br>
            <label for="">Email:</label>
            <input type="email" name = "email"> <br>
            <label for="">Password:</label>
            <input type="password" name = "password"><br>
            <label for="start">Date of Birth:</label>
            <input type="date" id="start" name="dob"
        value="2018-07-22"
        min="1990-01-01" max="2023-12-31"> <br>

        <label for="">Age:</label>
            <input type="text" name = "age"><br>
        
            <input type="submit" name = "submit" value = "Submit"><br>
        </form>
    </div>
</body>
</html>