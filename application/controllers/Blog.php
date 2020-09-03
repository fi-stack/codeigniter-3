<?php

class Blog extends CI_Controller
{
    public function index($nama, $goldarah, $alamat)
    {
        echo "Selamat Datang {$nama}<br>";
        echo "Gol darah anda {$goldarah}<br>";
        echo "Anda tinggal di {$alamat}<br>";
    }
}
