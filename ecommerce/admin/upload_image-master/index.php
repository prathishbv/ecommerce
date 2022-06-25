<?php
require_once 'class/Image.php';
$app = new Image;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <button class="default btn-add" onClick="javascript:window.location.href='?upload'">Upload</button><br/>
    <table>
        <tr>
            <th style="width:10px;">ID</th>
            <th>NAME</th>
            <th>CODE</th>
            <th>IMAGE</th>
            <th style="width:150px;">IMAGE MODIFFICATION</th>
            <th>PRICE</th>
            
        </tr>
        
        <?php
            $stmt = $app->query("SELECT id, name, code, image, price FROM tblproduct");
            // $stmt = $app->query("SELECT id, name, code, image, price FROM product");
            $stmt->execute();
            while ($row = $stmt->fetch()) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['code']; ?></td>
            <td><img width="20%" src="upload/<?php echo $row['image']; ?>" required></td>
            <td>
                <button class="default" onClick="javascript:window.location.href='?update&id=<?php echo $row['id']; ?>'">update</button>
                <button class="cancel" onClick="javascript:window.location.href='process.php?id=<?php echo $row['id']; ?>'">delete</button>
            </td>
            <td><?php echo $row['price']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <hr>

    <!-- Upload -->
    <?php
    if (isset($_GET['upload'])) {
        if (isset($_GET['error'])) {
    ?>
        <div class="error"><?php echo $_GET['error']; ?></div>
        <?php } ?>
        <h4>Upload Form</h4>
        <form action="process.php" method="post" enctype="multipart/form-data">
            <tr class="value">
            <td>NAME  <input type="text" name="name" require></td><br>
            <td>CODE  <input type="text" name="code" required></td><br>
            <td>Image: <input required type="file" name="image" id="image" accept="image/*" required><br></td>
            <td>PRICE <input type="text" name="price" required></td><br>
            <button type="submit" class="default" name="upload">Submit</button>
            <button type="button" class="cancel" onClick="javascript:window.location.href='./'">Cancel</button>
            <tr>
        </form>
    <?php } ?>

    <!-- Update -->
    <?php
    if (isset($_GET['update'])) {
        // get image info
        // $update = $app->query("SELECT image_name FROM images WHERE id=?");
        $update = $app->query("SELECT name FROM tblproduct WHERE id=?");
        $update->execute([$_GET['id']]);
        $rowUpdate = $update->fetch();
        if (isset($_GET['error'])) {
    ?>
        <div class="error"><?php echo $_GET['error']; ?></div>
        <?php } ?>
        <h4>Update Form</h4>
        <form action="process.php" method="post" enctype="multipart/form-data">
            <img width="50%" src="upload/<?php echo $rowUpdate['image_name']; ?>"><br>
            Image: <input required type="file" name="image" id="image" accept="image/*"><br>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <button class="default" type="submit" name="update">Submit</button>
            <button type="button" class="cancel" onClick="javascript:window.location.href='./'">Cancel</button>
        </form>
    <?php } ?>
</body>
</html>