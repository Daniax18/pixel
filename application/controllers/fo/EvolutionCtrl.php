<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class EvolutionCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('fo/programme/Entrainement');
        $this->load->model('fo/programme/Hability');
        $this->load->model('fo/programme/Evolution');
        $this->load->add_package_path( APPPATH . 'third_party/fpdf');
        $this->load->library('pdf');
    }
    
    public function pdf($nom="groot",$categ="BATMANIEN",$niv=105)
	{
        

        // Create a new instance of the FPDF class
        $pdf = new Pdf('L', 'mm', array(297, 210));

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('Arial', 'B', 35);

        // Image
        $pdf->Image(base_url('assets/images/header.png'), 0, 0, 297);
        $pdf->Image(base_url('assets/images/categ.png'), 240, 80, 35);

        // Move to the next line
        $pdf->Ln(20);

        // Set font
        $pdf->SetFont('Arial', 'B', 70);

        // Image
        $pdf->Image(base_url('assets/images/footer.png'), 0, 110, 300);

        // Move to the next line
        $pdf->Ln(65);

        // Cell
        $pdf->Cell(100, -50, $nom, 0, 1, 'C');

        // Set font
        $pdf->SetFont('Arial', 'B', 11);

        // Cell
        $pdf->Cell(494, 58, $categ, 0, 1, 'C');
        $pdf->Cell(495, -47, "niv".$niv, 0, 1, 'C');

        // Output the PDF to the browser
        $pdf->Output();
	}


        // MON EVOLUTION
    public function myEvolution(){
        if(isset($_SESSION['user_id'])){
            $data['client'] = $this -> Evolution -> getClientById($_SESSION['user_id']);
            $data['level'] = $this -> Evolution -> getMyLevel($_SESSION['user_id']);
            $data['habilities'] = $this -> Evolution -> getMyHabilities($_SESSION['user_id']);
            $data['programmes'] = $this -> Entrainement -> getListProgrammesFaits($_SESSION['user_id']);

            $this->load->view('fo/service/service3', $data);
        }else{
            redirect('fo/connexion/login/0');
        }
       
    }

    // Liste des programmes
	public function newProgramme(){
        if(isset($_SESSION['user_id'])){
            $id_programme = $this -> input -> post('id_programme');
            $this -> Evolution -> submitProgramme($_SESSION['user_id'], $id_programme, $_SESSION['id_categorie']);
            // $this -> Evolution -> submitProgramme(176, $id_programme, "CAT6");

            // $this->load->view('fo/service/programme', $data);    // REDIRECT MAKANY AMN MON EVOLUTION
            redirect(base_url().'index.php/fo/evolutionCtrl/myEvolution/' . $$_SESSION['user_id']);
        }else{
            redirect('fo/connexion/login/0');
        }
	}
    
	// Liste des programmes
	public function listeProgramme(){
        $data['abilities'] = $this -> Entrainement -> getHabilities();
		$data['programmes'] = $this -> Entrainement -> getServices();
		$this->load->view('fo/service/programme', $data);
	}

	// PAGE D'ORIENTATION
	public function orientationPage()
	{
		$data['questions'] = $this -> Orientation -> getQuestions();
		$this->load->view('fo/service/service1', $data);
	}		
}
