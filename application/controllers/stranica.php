<?php

class Stranica extends Controller {
	
	function index()
	{
            $head_view = $this->loadView("head_view");
            $head_view->render();
            
            $kontakt_model = $this->loadModel("kontakt_model");
            $niz_kontakta = $kontakt_model->GetAll();
            
            $front_page_view = $this->loadView("front_page_content_view");
            $front_page_view->set("kontakti_set", $niz_kontakta);
            $front_page_view->render();
            
            $close_view = $this->loadView("close_view");
            $close_view->render();
	}
        
        function kontakt() 
        {
            $url_helper = $this->loadHelper("url_helper");
            $kontakt_id = $url_helper->segment(4);
            
            $kontakt_model = $this->loadModel("kontakt_model");
            $kontakt = $kontakt_model->GetById($kontakt_id);
            
            $head_view = $this->loadView("head_view");
            $head_view->render();
            
            $single_kontakt_view = $this->loadView("single_kontakt_view");
            $single_kontakt_view->set("kontakt", $kontakt);
            $single_kontakt_view->render();
            
            $close_view = $this->loadView("close_view");
            $close_view->render();
            
            
        }
        
        function uredi(){
            
           $url_helper = $this->loadHelper("url_helper");
           $kontakt_id = $url_helper->segment(4);
           
           $kontakt_model = $this->loadModel('kontakt_model');
           $kontakt = $kontakt_model->GetById($kontakt_id);
            
           $head_view = $this->loadView("head_view");
           $head_view->render();
           
           $update_kontakt_view = $this->loadView("update_kontakt_view");
           $update_kontakt_view->set("kontakt", $kontakt);
           $update_kontakt_view->render();
           
           $close_view = $this->loadView("close_view");
           $close_view->render();   
        }
        
        public function try_update() 
        {
            $request_helper = $this->loadHelper("request_helper");
            
            
            $kontakt_model = $this->loadModel("kontakt_model");
            $updated = $kontakt_model->updateKontakt(
                    $request_helper->post('ime'),
                    $request_helper->post('prezime'),
                    $request_helper->post('telefon'), 
                    $request_helper->post('opis'), 
                    $request_helper->post('id'));
            
            if ($updated) {
                $this->redirect("stranica/uredi/" . $request_helper->post("id"));
            } else {
                $this->redirect("error");
            }
        }
        
        public function izbrisi(){
            $url_helper = $this->loadHelper("url_helper");
            $id = $url_helper->segment(4);
            
            $kontakt_model = $this->loadModel('kontakt_model');
            $deleted = $kontakt_model->deleteById($id);
            if ($deleted) {
                $this->redirect("stranica");
            } else {
                $this->redirect("error");
            }
            
        }
        
        public function try_insert() {
            $request_helper = $this->loadHelper("request_helper");
            
            $kontakt_model = $this->loadModel("kontakt_model");
            $inserted = $kontakt_model->insert($request_helper->post('ime')
                    , $request_helper->post('prezime')
                    , $request_helper->post('telefon')
                    , $request_helper->post('opis'));
            
            if ($inserted) {
                $this->redirect("stranica");
            }else {
                $this->redirect("error");
            }
            
        }
        
    
}

?>