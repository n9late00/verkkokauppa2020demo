<?php namespace App\Controllers;

use App\Models\TuoteryhmaModel;
use App\Models\TuoteModel;

class Ostoskori extends BaseController
{
    private $tuoteryhmaModel = null;
    private $tuoteModel = null;

	function __construct()
	{
        $session = \Config\Services::session();
        $session->start();
		
        if (!isset($_SESSION['kori'])) {
            $_SESSION['kori'] = array();
        }

        $this->tuoteryhmaModel = new TuoteryhmaModel();
        $this->tuoteModel = new TuoteModel();
    }
    
    public function index() {
        $data['tuoteryhmat'] = $this->tuoteryhmaModel->haeTuoteryhmat();
        $data['tuotteet'] = $this->tuoteModel->haeTuotteet($_SESSION['kori']);
		echo view('templates/header.php',$data);
		echo view('ostoskori',$data);
		echo view('templates/footer.php');
    }
    
    public function lisaa($tuote_id) {
        array_push($_SESSION['kori'],$tuote_id);
        return redirect()->to(site_url('/home/tuote/' . $tuote_id));
    }

    public function tyhjenna() {
        $_SESSION['kori'] = null;
        return redirect()->to(site_url('ostoskori/index'));
    }

}