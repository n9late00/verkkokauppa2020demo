<?php namespace App\Models;

use CodeIgniter\Model;

class TuoteryhmaModel extends Model {
    protected $table = 'tuoteryhma';
    protected $allowedFields = ['nimi'];

    public function haeTuoteryhmat() {
        return $this->findAll();
    }

    public function poista($id) {
        $this->where('id',$id);
        $this->delete();
    }
}