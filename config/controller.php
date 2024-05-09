<?php


// FUNCTION REGISTER
function create_user($post)
{
     
    global $conn;
    // MENGAMBIL DATA DARI HTML/FRONTEND
    $username  = $post['username'];
    $nama      = $post['nama'];
    $jabatan   = $post['jabatan'];
    $institusi = $post['institusi'];
    $kota      = $post['kota'];
    $wa        = $post['wa'];
    $email     = $post['email'];
    $password  = $post['password'];
    // Hashing Password
    $password = password_hash($password, PASSWORD_BCRYPT);
    // Esekusi Query
    $query = "INSERT INTO user VALUES(null,'$username','$nama','$jabatan','$institusi','$kota','$wa','$email','$password')";
    // MEMNGAMBIL DATA DARI DATA FORM REGISTER
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
// FUNCTION MENAMPILKAN DATA DARI DATABASE
function select($query)
{
        // panggil koneksi database
        global $conn;
    
        $result = mysqli_query($conn, $query);
        $rows = [];
    
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    
        return $rows;
}

?>