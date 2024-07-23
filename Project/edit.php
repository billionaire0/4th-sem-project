<?php 
require_once("config.php"); 
$id = $_GET['id'];

if(isset($_POST['form_submit'])) {
    $title = $_POST['title'];

    $error = array();

    $image_file = $_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $folder = "uploads/";
    $target_file = $folder . $image_file;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // Check if a file was uploaded
    if (!empty($image_file)) {
        // Check file format
        $allowed_formats = array("jpg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowed_formats)) {
            $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
        }
        
        // Check file size
        if ($_FILES["image"]["size"] > 5000000) {
            $error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
        }
    }

    if (empty($error)) {
        // If a new image was uploaded, deleted the old one
        if (!empty($image_file)) {
            $res = mysqli_query($db, "SELECT image FROM items WHERE id = $id");
            $row = mysqli_fetch_assoc($res);
            $delimage = $row['image'];
            unlink($folder . $delimage);
            
            move_uploaded_file($file, $target_file);
            $update_query = "UPDATE items SET image = '$image_file', title = '$title' WHERE id = $id";
        } else {
            $update_query = "UPDATE items SET title = '$title' WHERE id = $id";
        }

        $result = mysqli_query($db, $update_query);

        if ($result) {
            header("location: admineddit.php?update=1");
        } else {
            echo 'Something went wrong';
        }
    }
}

$res = mysqli_query($db, "SELECT * FROM items WHERE id = $id");
if ($row = mysqli_fetch_assoc($res)) {
    $image = $row['image'];
    $title = $row['title'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminedit.css">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <label>Image Preview</label>
            <img src="uploads/<?php echo $image; ?>" height="100">
            <br>
            <input type="file" name="image" class="form-control">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
            <br><br>
            <button name="form_submit" class="btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
