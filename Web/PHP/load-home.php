<?php
    require 'connection.php';

    //pagination logic star
    $perPage = 2;
    $page = 0;
    
    if(isset($_GET['halaman'])){
        $page = $_GET['halaman'];
    }else{
        $page = 1;
    }

    if($page > 0){
        $mulai = ($page * $perPage) - $perPage;
    }else{
        $mulai = 0;
    }

    $sqlBarang = mysqli_query($conn, "SELECT * FROM barang");
    $jumlahBarang = mysqli_num_rows($sqlBarang);
    $pages = ceil($jumlahBarang/$perPage);
    //pagination logic end

    //logika pencarian
    if(!isset($_GET['keyword'])){
        //pengambilan data sesuai pagination
        $sqlBarang = mysqli_query($conn, "SELECT * FROM barang");
        $jumlahBarang = mysqli_num_rows($sqlBarang);
        $pages = ceil($jumlahBarang/$perPage);

        $queryBarang = mysqli_query($conn,"SELECT * FROM barang  WHERE status = 1 LIMIT $mulai,$perPage");
        $listBarang = [];
        
        while ($barang = mysqli_fetch_assoc($queryBarang)) {
            $listBarang[] = $barang;
        }
    }elseif(isset($_GET['keyword'])){
        //pengambilan data sesuai dengan pencarian dan pagination
        $keyword = $_GET['keyword'];
        $sqlBarang = mysqli_query($conn, "SELECT * FROM barang WHERE nama LIKE '%$keyword%'");
        $jumlahBarang = mysqli_num_rows($sqlBarang);
        $pages = ceil($jumlahBarang/$perPage);

        $queryBarang = mysqli_query($conn, "SELECT * FROM barang WHERE status = 1 AND nama LIKE '%$keyword%' LIMIT $mulai,$perPage");
        $listBarang = [];

        while ($barang = mysqli_fetch_assoc($queryBarang)){
            $listBarang[] = $barang;
        }
    }
    


    var_dump($page,$mulai,$pages,$jumlahBarang);
?>