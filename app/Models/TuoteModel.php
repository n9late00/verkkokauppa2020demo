<?php namespace App\Models;

use CodeIgniter\Model;

class TuoteModel extends Model {
    protected $table = 'tuote';

    public function haeTuoteryhmalla($tuoteryhma_id) {
        return $this->getWhere(['tuoteryhma_id' => $tuoteryhma_id])->getResultArray();
    }

    public function haeTuote($id) {
        
       /*  $this->where('id',$id);
        $kysely = $this->get();
        return $kysely->getRowArray(); */

        return $this->getWhere(['id' => $id])->getRowArray();
    }

    public function haeTuotteet($idt) {
        $tuotteet = array();
        foreach ($idt as $id) {
            
            $this->table('tuote');
            $this->select('id,nimi,hinta');
            $this->where('id',$id);
            $kysely = $this->get();
            $tuote = $kysely->getRowArray();
            array_push($tuotteet,$tuote);
            $this->resetQuery();
        }
        return $tuotteet;
    }
}