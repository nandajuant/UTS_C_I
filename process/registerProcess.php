<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $image = $_POST['image'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
       
        // Melakukan insert ke databse dengan query dibawah ini
       
        $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or
        die(mysqli_error($con));
        // ini buat ngecek kalo misalnya hasil dari querynya == 0 ato ga ketemu -> emailnya tdk ditemukan

        if(mysqli_num_rows($query)){
            echo
            '<script>
            alert("Email sudah terpakai");
            window.history.back()
            </script>';
        }else{
            echo
            $query = mysqli_query($con,
            "INSERT INTO users(image, name, email, password) 
            VALUES
            ('$image', '$name', '$email', '$password')")
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
            
            if($query){
                echo
                '<script>
                alert("Register Success"); 
                window.location = "../index.php"
                </script>';
            }else{
                echo
                '<script>
                alert("Register Failed");
                </script>';
            }
            
        }
       
    }else{
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>