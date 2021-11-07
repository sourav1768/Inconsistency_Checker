<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class I_C_controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('I_C_model');
    }

    public function index()	{

        $data = array(
            'session_year'=> $this->input->post('session_year'),
            'session'=> $this->input->post('session'),
            'inconsistency_type'=> $this->input->post('inconsistency_type')
        );

        $this->load->library('form_validation');
        $this->drawHeader();
        $this->form_validation->set_rules('session_year', 'session_year', 'required');
        $this->form_validation->set_rules('session', 'session', 'required');
        $this->form_validation->set_rules('inconsistency_type', 'inconsistency_type', 'required');

        if ($this->form_validation->run() == FALSE && (isset($_POST['submit']))) {
			$data['err_code']=1;
            $this->load->view('I_C_form_view',$data);
		}

        else if($this->form_validation->run() == TRUE && (isset($_POST['submit'])) ) {
			$data['traffic'] = $this->I_C_model->duplicate_sem_registrations($data);
            echo (count($traffic));
			$data['err_code']=0;
			$this->load->view('I_C_result_view',$data);
		}

        // if(isset ($_POST['submit'])) {
        //     // $data['traffic'] = $this->inconsistency_checker_model->duplicate_sem_registrations($data);
		// 	$data['err_code']=0;
		// 	$this->load->view('duplicate_sem_registrations',$data);
        // }

        else {
            $data['err_code']=0;
            $this->load->view('I_C_form_view',$data);
        }
        // $this->load->view('inconsistency_checker_form',$data);
        $this->drawFooter();
    }
}
