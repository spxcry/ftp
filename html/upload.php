<?php
    if (isset($_POST['submit'])) {
        // กำหนดข้อมูลสำหรับเชื่อมต่อ FTP
        $ftp_server = "ftp";
        $ftp_username = "BRUIT";
        $ftp_password = "2546";

        // เชื่อมต่อ FTP server
        $ftp_conn = ftp_connect($ftp_server) or die("ไม่สามารถเชื่อมต่อกับเซิฟเวอร์FTPได้");

        // เข้าสู่เซิร์ฟเวอร์ FTP
        if (@ftp_login($ftp_conn, $ftp_username, $ftp_password)) {
            // รับไฟล์ที่อัพโหลด
            $file = $_FILES['file']['name'];
            $file_tmp = $_FILES['file']['tmp_name'];

              //อัพโหลดไฟล์
              if (!empty($file)) {
                // อัปโหลดไฟล์ไปยัง FTP server
                if (ftp_put($ftp_conn, $file, $file_tmp, FTP_BINARY)) {
                  echo "<script>alert('อัพโหลดไฟล์เรียบร้อยแล้ว');</script>";
                } else {
                  echo "<script>alert('เกิดข้อผิดพลาดขณะอัพโหลดไฟล์');</script>";
                }
              } else {
                echo "<script>alert('กรุณาเลือกไฟล์ที่ต้องการอัปโหลด');</script>";
              }
            } else {
              echo "ชื่อไฟล์ต้องไม่เว้นว่าง";
            }
            // close the FTP connection
            ftp_close($ftp_conn);
          }