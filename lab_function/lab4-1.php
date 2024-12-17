<?php 
    echo"<h2>การใช้ strlen </h2>";
    $strlen="I am a sring";
    echo strlen($strlen);
    $strlen2="มหาวิทยาลัย";
    echo"<br>";
    echo strlen($strlen2);
    
    echo"<h2>การใช้ explode (การสร้างสตริงจากอาเรย์)</h2>";
    $expStr="I am a sring";
    $expArr=explode(' ',$expStr);
    print_r($expArr);
    echo"<br>";
    echo $expArr[0].$expArr[1].$expArr[2].$expArr[3];


    echo"<h2>การใช้ implode (การสร้างอาเรย์จากสตริง)</h2>";
    $impArr=["I","am","an","array"];
    $impStr=implode($impArr);
    echo $impStr;
    echo"<br>";
    $filename=['img123','png'];
    $impfilename=implode('.',$filename);
    echo $impfilename[0].$impfilename[4].$impfilename[5];
    echo"<br>";
    echo $filename[0]."<br>";
    echo $impfilename;

    echo"<h2>การเข้ารหัสแบบ md5 (มี 32 ตัวอักษร) </h2>";
    $password = "lantao";
    $hashValue = md5($password);
    echo"<br>";

    echo"<h2>การเข้ารหัสแบบ sha256 (ปลอดภัยกว่าเพราะมี 64 ตัวอักษร) </h2>";
    echo"การเข้ารหัสแบบ เป็นการเข้ารหัสทางเดียว(one-way encryption) เนื่องจาก SHA-256  เป็นฟังก์ชันแฮชที่สามารถออกแบบมาเพื่อความปลอดภัย ไม่มีคำสั่งหรือวิธีการแปลงกลับ ข้อความี่ถูกแฮชด้วย SHA-256 กลับไปเป็นข้อความต้นฉบับโดยง่าย";

    echo"<hr>";
    $password = "pitboo";
    $hashValue = hash('sha256',$password);
    echo $hashValue;
    echo"<br>";

    $storedData = 
    "358d0ea28a98750d47b465b170b13dd570f345a967cd68d2085d82a9f28255";

    $originalText = "pitboo";

    if(hash_equals(hash('sha256',$originalText),$storedData)){
        echo"ล็อกอินสำเร็จ";
    } else {
        echo"รหัสผ่านไม่ถูกต้อง";
    }


?>


