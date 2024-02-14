<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentController extends MY_Controller
{


	public $data = array();
	
	public function __construct()
	{
		parent::__construct();
		try{
			$this->load->model('onlinepayment/Payment_model');
			//echo '<h1 style="font-size: bold; color: white;">'.$e->getMessage().'</h1>'
		}
		catch(Exception $e)
		{
			echo '<h1 style="font-size: bold; color: white;">'.$e->getMessage().'</h1>';
		}
	}
	
	public function cardpayView()
	{
		//var_dump('In card pay view');
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
	
	public function mobilepay()
	{
		echo "Paid via mobile money";
	}

	public function cardpay()
	{
		echo 'Card Payment';
	}
}


?>