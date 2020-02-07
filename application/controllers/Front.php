<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Curl_model', 'curl');
    }

    public function index()
    {
        $b = time();
        $hour = date("G",$b);

        if ($hour>=0 && $hour<=11)
        {
            $ucapan = 'Selamat Pagi';
        }
        elseif ($hour >=12 && $hour<=14)
        {
            $ucapan = 'Selamat Siang';
        }
        elseif ($hour >=15 && $hour<=17)
        {
            $ucapan = 'Selamat Sore';
        }
        elseif ($hour >=17 && $hour<=18)
        {
            $ucapan = 'Selamat Petang';
        }
        elseif ($hour >=19 && $hour<=23)
        {
            $ucapan = 'Selamat Malam';
        }

        $blog = $this->curl->get_artikel();
        header('Content-Type: application/json');
        echo json_encode($blog);

        $data['ucapan'] = $ucapan;
        $data['blog'] = $blog;
        $data['umur'] = $this->hitung_umur('1999-03-22');

        // $this->load->view('front/layout', $data);
    }

    private function hitung_umur($tanggal_lahir) {
        list($year,$month,$day) = explode("-",$tanggal_lahir);
        $year_diff  = date("Y") - $year;
        $month_diff = date("m") - $month;
        $day_diff   = date("d") - $day;
        if ($month_diff < 0) $year_diff--;
            elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
        return $year_diff;
    }
}