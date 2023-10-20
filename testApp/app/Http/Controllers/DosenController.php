<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function test2()
    {
        //$data ['nama'] = 'qigelia';
        //$data ['kampus'] = 'unsur';
        //return view('coba.index',$data);
        $nama = '<strong> qigelia </strong>';
        $kampus = 'unsur';
        $fruit = array('anggur','apel','jambu');
        return view('coba.index',compact('nama','kampus','fruit'));
    }
}
