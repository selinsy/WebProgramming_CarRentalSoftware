
    include "baglan.php";
    $connection = "INSERT INTO `ogrenci` (`ogrno`, `ograd`, `ogrsoyad`, `cinsiyet`, `dtarih`, `sinif`, `puan`) VALUES (NULL, ?, ?, ?, ?, ?, '0');";
    $dizi =[
        $nameSurname=$_POST['nameSurname'];
    $phoneNo=$_POST['phoneNo'];
    $email=$_POST['email'];
    $topic=$_POST['topic'];
    $messages=$_POST['messages'];
    ];

    $sth = $baglan->prepare($sql);
   $sonuc = $sth->execute($dizi);
   

<?php
$vt_sunucu="localhost";
$vt_user="root";
$vt_password="Selin017770";
$vt_name="rencar";

$connection= mysqli_connect($vt_sunucu, $vt_user, 
$vt_password, $vt_name);
if(!$connection){ 
die("Bağlantı başarısız.".mysqli_connect_error());
}






    $nameSurname=$_POST['nameSurname'];
    $phoneNo=$_POST['phoneNo'];
    $email=$_POST['email'];
    $topic=$_POST['topic'];
    $messages=$_POST['messages'];
    
    

    $insert=" INSERT INTO contact (nameSurname, phoneNo, email, topic, 
    messages) VALUES 
    ('$nameSurname','$phoneNo','$email','$topic','$messages')";
    
    
    if($connection-> query($insert)){
        echo "<script>alert('Your message has been sent successfully.')
        </script>";

    }
    


?>