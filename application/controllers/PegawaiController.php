<?php


class PegawaiController {

    public function index(){
        echo 'berada pada class PegawaiController dengan action index sebagai default action';
    }
    public function tambah(){
        echo 'berada pada class PegawaiController dengan action tambah';
    }

    public function edit($param1,$param2 = null, $param3 = null){
        echo 'berada pada class PegawaiController dengan action edit dan parameter berisi '.$param1.' '.$param2.' '.$param3;
    }
}