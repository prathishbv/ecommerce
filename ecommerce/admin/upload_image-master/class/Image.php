<?php
require_once 'Database.php';

class Image
{
    private $conn;

    public function __construct()
    {
        $database   = new Database();
        $db         = $database->dbConnection();
        $this->conn = $db;
    }

    public function query($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function upload($image, $image_tmp, $image_ext, $name, $code, $price)
    // public function upload($image, $image_tmp, $image_ext)
    {
        try {
            $this->conn->beginTransaction();

            // rename image to time() to avoid duplicate
            // $image = $image . '_' . time() . '.' . $image_ext;
            $image = $image;
            // insert new image to db
            // $stmt = $this->conn->prepare("INSERT images (image_name) VALUES (?)");
            // $stmt = $this->conn->prepare("INSERT into images1 (name, code, image, price) VALUES (, '', ? ,'')");
            // $stmt = $this->conn->prepare("INSERT product (name, code, image, price) VALUES ('$name', '$code', '$image', '$price')");
            $stmt = $this->conn->prepare("INSERT tblproduct (name, code, image, price) VALUES ('$name', '$code', '$image', '$price')"); 
            // $stmt->execute([$image]);
            $stmt->execute();
            // $stmt->execute([$name], [$code], [$image], [$price]);

            // set upload directory
            /*
                your upload directory will be based from your form, that's why even though your Image.php is inside class folder, you don't have to go outside class folder by setting "../upload/".
            */
            $upload_dir = 'upload/';
            // upload image
            move_uploaded_file($image_tmp, $upload_dir . $image);

            $this->conn->commit();
            return true;
        } catch (PDOException $e) {
            $this->conn->rollback();
            echo $e->getMessage();
        }
    }

    public function update($image, $image_tmp, $image_ext, $id)
    {
        try {
            $this->conn->beginTransaction();

            // rename image to time() to avoid duplicate
            // $image = $image . '_' . time() . '.' . $image_ext;
            $image = $image;

            $upload_dir = 'upload/';

            // get old image
            // $oldImage = $this->conn->prepare("SELECT image FROM product WHERE id=?");
            // $oldImage = $this->conn->prepare("SELECT image FROM images1 WHERE id=?");
            $oldImage = $this->conn->prepare("SELECT image FROM tblproduct WHERE id=?");
            $oldImage->execute([$id]);
            $rowOldImage = $oldImage->fetch();

            // delete old image
            unlink($upload_dir . $rowOldImage['image']);

            // update image name in database
            // $stmt = $this->conn->prepare("UPDATE product SET image=? WHERE id=?");
            $stmt = $this->conn->prepare("UPDATE tblproduct SET image=? WHERE id=?");
            $stmt->execute([$image, $id]);

            // upload new image
            move_uploaded_file($image_tmp, $upload_dir . $image);

            $this->conn->commit();
            return true;
        } catch (PDOException $e) {
            $this->conn->rollback();
            echo $e->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $this->conn->beginTransaction();

            // get image name
            // $stmt = $this->conn->prepare("SELECT image FROM product WHERE id=?");
            $stmt = $this->conn->prepare("SELECT image FROM tblproduct WHERE id=?");
            $stmt->execute([$id]);
            $row = $stmt->fetch();

            $upload_dir = 'upload/';
            // delete image
            unlink($upload_dir . $row['image']);

            // delete image in database
            // $delete = $this->conn->prepare("DELETE FROM product WHERE id=?");
            $delete = $this->conn->prepare("DELETE FROM tblproduct WHERE id=?");
            $delete->execute([$id]);

            $this->conn->commit();
            return true;
        } catch (PDOException $e) {
            $this->conn->rollback();
            echo $e->getMessage();
        }
    }
}
