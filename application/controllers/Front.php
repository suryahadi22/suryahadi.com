<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Curl_model', 'curl');
        $this->load->model('Master_model', 'master');
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

        $sosial = '<a href="https://facebook.com/suryahadieh"><i class="fa fa-facebook" aria-hidden="true"></i>  </a>
        <a href="https://twitter.com/suryahadi22"><i class="fa fa-twitter" aria-hidden="true"></i>  </a>
        <a href="https://www.instagram.com/suryahadi22"><i class="fa fa-instagram" aria-hidden="true"></i>  </a>
        <a href="https://linkedin.com/in/suryahadi-eko-hanggoro-215464147"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
        <a href="https://github.com/suryahadi22"><i class="fa fa-github" aria-hidden="true"></i> </a>';

        $data['ucapan'] = $ucapan;
        $data['blog'] = $blog;
        $data['umur'] = $this->hitung_umur('1999-03-22');
        $data['sosial'] = $sosial;
        $data['portofolio'] = $this->master->get('portofolio')->result();

        $this->load->view('front/layout', $data);
    }

    public function portofolio_detail()
    {
        $id = $this->input->get('porto');
        if (!$id) die('SELESAI');

        $dbPorto = $this->master->get_where('portofolio', array('id_project' => $id))->row();
        if (!$dbPorto) show_404();
        $data['portofolio'] = $dbPorto;

        $this->load->view('front/pop_portofolio/popup', $data);
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