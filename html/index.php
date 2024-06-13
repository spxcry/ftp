<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build Ftp Server</title>
    <link rel="stylesheet" href="styles.css">
</head>

<!-- ส่วนของ body -->
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Reflash</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>หน้าต่างไฟล์เซิฟเวอร์ทั้งหมด</h2>
            <?php include 'download.php'; ?>
        <p>คลิปเฉพาะไฟล์ที่จะดาวน์โหลด</p>

        &nbsp;
        
        <h2>หน้าต่างอัปโหลดไฟล์ไปยังเซิฟเวอร์</h2>
            <?php include 'upload.php'; ?>
        
            <form method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit" value="อัพโหลด">
            </form>
  
        <p>อัพโหลดไฟล์ที่นี่</p>
    </div>

</body>


