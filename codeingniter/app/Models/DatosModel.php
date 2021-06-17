<?php
namespace App\Models;
use Codeigniter\Model;
class GeneralModel extends Model{
  Public function obtenerInformacion($data){
    $gModel = $this->db->table('persona');
    $gModel->where($data);
    return $gmodel->get()->getResultArray();
    
  }
  
  public function listarTodo(){
    $gModel = $this->db->query("SELECT * FROM persona");
    return $gModel->getresult();
