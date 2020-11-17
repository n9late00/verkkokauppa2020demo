<?php namespace App\Controllers;

use App\Models\TuoteryhmaModel;
use App\Models\TuoteModel;

class Home extends BaseController
{
	private $tuoteryhmaModel = null;

	function __construct()
	{
		$session = \Config\Services::session();
        $session->start();
		$this->tuoteryhmaModel = new TuoteryhmaModel();
		$this->tuoteModel = new TuoteModel();
	}

	public function index()
	{
		$data['tuoteryhmat'] = $this->tuoteryhmaModel->haeTuoteryhmat();
		echo view('templates/header.php',$data);
		echo view('etusivu');
		echo view('templates/footer.php');
	}

	public function tuotteet($tuoteryhma_id) {

		$data['tuoteryhmat'] = $this->tuoteryhmaModel->haeTuoteryhmat();
		$data['tuotteet'] = $this->tuoteModel->haeTuoteryhmalla($tuoteryhma_id);
		echo view('templates/header.php',$data);
		echo view('tuotteet',$data);
		echo view('templates/footer.php');

	}

	public function tuote($tuote_id) {
		$data['tuoteryhmat'] = $this->tuoteryhmaModel->haeTuoteryhmat();
		$data['tuote'] = $this->tuoteModel->haeTuote($tuote_id);
		echo view('templates/header.php',$data);
		echo view('tuote',$data);
		echo view('templates/footer.php');
	}

	//--------------------------------------------------------------------

}
