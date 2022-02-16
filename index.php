<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background: rgba(0,0,0,0.7); display: flex; flex-direction: column; justify-content: center; align-items: center; color:#fff; ">

    <div style="height: 100vh;">
        <form method="post" action="indextxt.php">
            <input type="text" name="username" placeholder="Enter your name">

            <input type="radio" name="gender" value="Male" /> Male
            <input type="radio" name="gender" value="Female" /> Female


            <select name="sport[]" multiple>
                <option value="cricket0">Cricket0</option>
                <option value="cricket1">Cricket1</option>
                <option value="cricket2">Cricket2</option>
                <option value="cricket3">Cricket3</option>
            </select>


            <input type="submit" value="submit" />




        </form>

    </div>

    <!-- Image uploading -->

    <div style="height: 100vh;">

        <form action="uploadFile.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="pic" id="pic">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
</body>

</html>