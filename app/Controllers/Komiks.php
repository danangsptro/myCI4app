<?php 

namespace App\Controllers;

use App\Models\KomikModel;

class Komiks extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Komik'
        ];
        

        $komikModel = new KomikModel();
        $komik = $komikModel->findAll();
        var_dump($komik);
        die;

        return view('komik/index', $data);
    }
}

?>