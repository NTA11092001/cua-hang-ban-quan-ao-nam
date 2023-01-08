<?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }
        else{
            $tam = '';
            $query = '';
        } 
        if($tam=='quanlydanhmucsanpham' && $query=='them'){
            include("modules/quanlydanhmucsanpham/them.php");
            include("modules/quanlydanhmucsanpham/lietke.php");
        }
        elseif ($tam=='quanlydanhmucsanpham' && $query=='sua'){
            include("modules/quanlydanhmucsanpham/sua.php");
        }
        elseif ($tam=='quanlysp' && $query=='them'){
            include("modules/quanlysanpham/them.php");
            include("modules/quanlysanpham/lietke.php");
        }
        elseif($tam=='quanlysp' && $query=='sua'){
            include("modules/quanlysanpham/sua.php");
        }
        elseif($tam=='quanlydonhang' && $query=='lietke'){
            include("modules/quanlydonhang/lietke.php");
        }
        elseif($tam=='donhang' && $query=='xemdonhang'){
            include("modules/quanlydonhang/xemdonhang.php");
        }
        elseif($tam=='quanlytkKH' && $query=='lietke'){
            include("modules/quanlytkKH/lietke.php");
        }
        elseif($tam=='doimatkhau' && $query=='1'){
            include("modules/doimatkhau.php");
        }
        else{
            include("modules/dashboard.php");
        }
?>