<?php

class kontakt_model extends Model {
	
    public function GetAll()
    {
        try{
            $stmt = $this->db->query("SELECT * FROM kontakti");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {

        }  
    }//GetAll
    
      function GetById($id){
            try {
                $stmt = $this->db->prepare("SELECT * FROM kontakti WHERE id = :id");
                $stmt->bindValue(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $ex) {
                
            }
        }// GetById();
        
        
    public function updateKontakt($ime, $prezime, $telefon, $opis, $id)
    {
         try {
             $stmt = $this->db->prepare("UPDATE kontakti set ime = :ime, prezime = :prezime, broj_telefona = :telefon, opis_poznanstva = :opis WHERE id = :id");
             $stmt->bindValue(":id", $id, PDO::PARAM_INT);
             $stmt->bindValue(":ime", $ime, PDO::PARAM_STR);
             $stmt->bindValue(":prezime", $prezime, PDO::PARAM_STR);
             $stmt->bindValue(":telefon", $telefon, PDO::PARAM_STR);
             $stmt->bindValue(":opis", $opis, PDO::PARAM_STR);
             
             $stmt->execute();
             
             return $stmt->rowCount() ? TRUE : FALSE;
           
         } catch (Exception $ex) {
               
         }
    }
    
    public function deleteById($id){
         try {
             $stmt = $this->db->prepare("DELETE FROM kontakti WHERE id = :id");
             $stmt->bindValue(":id", $id, PDO::PARAM_INT);

             $stmt->execute();
             
             return $stmt->rowCount() ? TRUE : FALSE;
           
         } catch (Exception $ex) {
               
         }
    }
    
    
    public function insert($ime, $prezime, $broj, $opis){
    try {
             $stmt = $this->db->prepare("INSERT INTO kontakti "
                     . "(ime, prezime, broj_telefona, opis_poznanstva) "
                     . "VALUES(:ime, :prezime, :broj_telefona, :opis_poznanstva)");
             $stmt->bindValue(":ime", $ime, PDO::PARAM_STR);
             $stmt->bindValue(":prezime", $prezime, PDO::PARAM_STR);
             $stmt->bindValue(":broj_telefona", $broj, PDO::PARAM_STR);
             $stmt->bindValue(":opis_poznanstva", $opis, PDO::PARAM_STR);
             
          $stmt->execute();
          return $stmt->rowCount() ? TRUE : FALSE;
           
         } catch (Exception $ex) {
               
         }
    }

}