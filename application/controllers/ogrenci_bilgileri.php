<?php

class Ogrenci_bilgileri extends CI_Controller {


public function __construct() { 
    parent::__construct(); 
 }

 public function index() {


    $this->load->view("OgrenciBilgileri_View");
 }

 public function save() {

$this->load->model("OgrenciBilgileri_Model");

$name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $age = $this->input->post('age');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');


        $data = array(
            'name' => $name,
            'surname' => $surname,
            'age' => $age,
            'email' => $email,
            'gender' => $gender);

$insert = $this->OgrenciBilgileri_Model->save($data) ;

echo '<div style="display: flex; align-items: center; justify-content: center; height: 100vh;">';
echo '<div style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); text-align: center;">';

if ($insert) {
    // Ekleme başarılı ise
    echo '<h2><b>Form başarıyla gönderildi!</b></h2>';
    echo '<p> <b>Ad:</b> ' . $name . '</p>';
    echo '<p><b> Soyad:</b> ' . $surname . '</p>';
    echo '<p><b>Yaş:</b> ' . $age . '</p>';
    echo '<p><b>E-posta:</b> ' . $email . '</p>';
    echo '<p><b>Cinsiyet:</b> ' . $gender . '</p>';
    echo '<a href="'.base_url().'">Geri Dön</a>';
} else {
    // Ekleme başarısız ise
    echo '<h2>Form gönderiminde bir hata oluştu!</h2>';
    echo '<a href="'.base_url().'">Geri Dön</a>';
}

echo '</div>';
echo '</div>';


 }




}