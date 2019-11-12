<!DOCTYPE html>
    <head>
    </head>
    <body>
        <form action="home.php" method="POST" enctype="multipart/form-data" >
            <input type="number" name="id"><br><br>
            <textarea name="content" id="" cols="30" rows="10">What's on your mind...</textarea><br><br>
            <input type="file" name="image" value="select image"><br><br>
            <input type="text" name="image_url" value="enter image url"><br><br>
            <input type="file" name="video" value="select video file"><br><br>
            <input type="text" name="youtube_url" value="enter image url..."><br><br>
            <input type="text" name="location" value="location..."><br><br>
            <input type="text" name="with_users" value="tagged friends..."><br><br>
            <input type="submit" name="submit">
        </form>
    </body>