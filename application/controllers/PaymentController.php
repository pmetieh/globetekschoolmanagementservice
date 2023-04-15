<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentController extends MY_Controller
{
	public $data = array();
	public function cardpayView()
	{
		$this->data['fname'] = 'Paul';

		$this->layout->title( $this->lang->line('cardpayment'). ' | ' . SMS);
        $this->layout->view('payment/cardpaymentview', $this->data); 
		//$this->load->view('payment/cardpaymentview');
	}

	public function mobilepayView()
	{
		$this->data['fname'] = 'Paul';

		$this->layout->title( $this->lang->line('mobilemoney'). ' | ' . SMS);
        $this->layout->view('payment/mobilepayview', $this->data); 
		
	}
	
}


?>