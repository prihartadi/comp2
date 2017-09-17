<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Main_model');
		$this->load->helper(array('form','url'));
	}

	public function index()
	{
		$data['bg'] = 'assets/images/asd.jpg';
		$data['subtitle'] = "Parts List";
		$data['part_cpu'] = $this->Main_model->get_data_cpu()->result();
		$data['part_mbo'] = $this->Main_model->get_data_mbo()->result();
		$data['part_ram'] = $this->Main_model->get_data_ram()->result();
		$data['part_mem'] = $this->Main_model->get_data_mem()->result();
		$data['part_gpu'] = $this->Main_model->get_data_gpu()->result();
		$data['part_psu'] = $this->Main_model->get_data_psu()->result();
		$data['part_mos'] = $this->Main_model->get_data_mos()->result();
		$data['part_key'] = $this->Main_model->get_data_key()->result();
		$data['part_cas'] = $this->Main_model->get_data_cas()->result();
		$data['part_dsp'] = $this->Main_model->get_data_dsp()->result();
		$this->load->view('header');
		$this->load->view('main',$data);
		$this->load->view('footer');
	}

	public function about()
	{
		$data['subtitle'] = "ORA ORA ORA";
		$this->load->view('header');
		$this->load->view('homepage',$data);
		$this->load->view('footer');
	}

	public function main_user(){
		$data['bg'] = 'assets/images/asd.jpg';
		$data['subtitle'] = "Parts List";
		$data['part_cpu'] = $this->Main_model->get_data_cpu()->result();
		$data['part_mbo'] = $this->Main_model->get_data_mbo()->result();
		$data['part_ram'] = $this->Main_model->get_data_ram()->result();
		$data['part_mem'] = $this->Main_model->get_data_mem()->result();
		$data['part_gpu'] = $this->Main_model->get_data_gpu()->result();
		$data['part_psu'] = $this->Main_model->get_data_psu()->result();
		$data['part_mos'] = $this->Main_model->get_data_mos()->result();
		$data['part_key'] = $this->Main_model->get_data_key()->result();
		$data['part_cas'] = $this->Main_model->get_data_cas()->result();
		$data['part_dsp'] = $this->Main_model->get_data_dsp()->result();
		$this->load->view('login_header');
		$this->load->view('main_user',$data);
		$this->load->view('footer');
	}

	public function dashboard(){
		$data['user_data'] = $this->Main_model->get_data_user()->result();
		$data['transactions_data'] = $this->Main_model->get_data_transactions()->result();
		$data['part_cpu'] = $this->Main_model->get_data_cpu()->result();
		$data['part_mbo'] = $this->Main_model->get_data_mbo()->result();
		$data['part_ram'] = $this->Main_model->get_data_ram()->result();
		$data['part_gpu'] = $this->Main_model->get_data_gpu()->result();
		$data['part_psu'] = $this->Main_model->get_data_psu()->result();
		$data['part_mem'] = $this->Main_model->get_data_mem()->result();
		$data['part_dsp'] = $this->Main_model->get_data_dsp()->result();
		$data['part_cas'] = $this->Main_model->get_data_cas()->result();
		$data['part_mos'] = $this->Main_model->get_data_mos()->result();
		$data['part_key'] = $this->Main_model->get_data_key()->result();
		$data['transactions'] = $this->Main_model->get_data_transactions()->result();
		$data['data_trans'] = $this->Main_model->get_data_transactions_monthly()->result();
		$monthly = $this->Main_model->get_data_transactions_monthly()->result();
		for($j=0;$j<count($monthly);$j++){
			$datam =  array(
				'year' => $monthly[$j]->year,
				'month' => $monthly[$j]->month,
				'total' => $monthly[$j]->total,
				
								);
			$data['monthly'][$j] = $datam;
		}
		$this->load->view('login_header');
		$this->load->view('dashboard',$data);
		// $this->load->view('footer');
	}

	//CPU
	public function call_add_cpu(){
		$this->load->view('add_cpu');
	}

	public function add_part_cpu(){
		$data['brand_cpu'] = $this->input->post('brand_cpu');
		$data['code_cpu'] = $this->input->post('code_cpu');
		$data['socket_cpu'] = $this->input->post('socket_cpu');
		$data['core_cpu'] = $this->input->post('core_cpu');
		$data['cache_cpu'] = $this->input->post('cache_cpu');
		$data['speed_cpu'] = $this->input->post('speed_cpu');
		$data['price_cpu'] = $this->input->post('price_cpu');
		$data['performance_cpu'] = $this->input->post('performance_cpu');

		$this->Main_model->add_data($data,'part_cpu');
		redirect('Main_controller/dashboard');
	}

	function edit_cpu($id_cpu){
		$where = array('id_cpu' => $id_cpu);
		$data['part_cpu'] = $this->Main_model->edit_data($where,'part_cpu')->result();
		$this->load->view('edit_cpu',$data);
	}

	public function update_cpu(){
		$id_cpu = $this->input->post('id_cpu');
		$data['brand_cpu'] = $this->input->post('brand_cpu');
		$data['code_cpu'] = $this->input->post('code_cpu');
		$data['socket_cpu'] = $this->input->post('socket_cpu');
		$data['core_cpu'] = $this->input->post('core_cpu');
		$data['cache_cpu'] = $this->input->post('cache_cpu');
		$data['speed_cpu'] = $this->input->post('speed_cpu');
		$data['price_cpu'] = $this->input->post('price_cpu');
		$data['performance_cpu'] = $this->input->post('performance_cpu');
		$where = array(
			'id_cpu' => $id_cpu
		);
		$this->Main_model->update_data($where,$data,'part_cpu');
		redirect('Main_controller/dashboard');
	}

	public function delete_cpu($id_cpu){
		$where = array('id_cpu' => $id_cpu);
		$this->Main_model->delete_data($where,'part_cpu');
		redirect('Main_controller/dashboard');
	}

	//MBO
	public function call_add_mbo(){
		$this->load->view('add_mbo');
	}

	public function add_mbo(){
		$data['brand_mbo'] = $this->input->post('brand_mbo');
		$data['code_mbo'] = $this->input->post('code_mbo');
		$data['socket_mbo'] = $this->input->post('socket_mbo');
		$data['chipset_mbo'] = $this->input->post('chipset_mbo');
		$data['ram_type_mbo'] = $this->input->post('ram_type_mbo');
		$data['pcie_mbo'] = $this->input->post('pcie_mbo');
		$data['sata_mbo'] = $this->input->post('sata_mbo');
		$data['form_mbo'] = $this->input->post('form_mbo');
		$data['price_mbo'] = $this->input->post('price_mbo');
		$data['performance_mbo'] = $this->input->post('performance_mbo');

		$this->Main_model->add_data($data,'part_mbo');
		redirect('Main_controller/dashboard');
	}

	function edit_mbo($id_mbo){
		$where = array('id_mbo' => $id_mbo);
		$data['part_mbo'] = $this->Main_model->edit_data($where,'part_mbo')->result();
		$this->load->view('edit_mbo',$data);
	}

	public function update_mbo(){
		$id_mbo = $this->input->post('id_mbo');
		$data['brand_mbo'] = $this->input->post('brand_mbo');
		$data['code_mbo'] = $this->input->post('code_mbo');
		$data['socket_mbo'] = $this->input->post('socket_mbo');
		$data['chipset_mbo'] = $this->input->post('chipset_mbo');
		$data['ram_type_mbo'] = $this->input->post('ram_type_mbo');
		$data['pcie_mbo'] = $this->input->post('pcie_mbo');
		$data['sata_mbo'] = $this->input->post('sata_mbo');
		$data['form_mbo'] = $this->input->post('form_mbo');
		$data['price_mbo'] = $this->input->post('price_mbo');
		$data['performance_mbo'] = $this->input->post('performance_mbo');
		$where = array(
			'id_mbo' => $id_mbo
		);
		$this->Main_model->update_data($where,$data,'part_mbo');
		redirect('Main_controller/dashboard');
	}

	public function delete_mbo($id_mbo){
		$where = array('id_mbo' => $id_mbo);
		$this->Main_model->delete_data($where,'part_mbo');
		redirect('Main_controller/dashboard');
	}

	//RAM
	public function call_add_ram(){
		$this->load->view('add_ram');
	}

	public function add_ram(){
		$data['brand_ram'] = $this->input->post('brand_ram');
		$data['code_ram'] = $this->input->post('code_ram');
		$data['ram_type_ram'] = $this->input->post('ram_type_ram');
		$data['size_ram'] = $this->input->post('size_ram');
		$data['price_ram'] = $this->input->post('price_ram');
		$data['performance_ram'] = $this->input->post('performance_ram');

		$this->Main_model->add_data($data,'part_ram');
		redirect('Main_controller/dashboard');
	}

	function edit_ram($id_ram){
		$where = array('id_ram' => $id_ram);
		$data['part_ram'] = $this->Main_model->edit_data($where,'part_ram')->result();
		$this->load->view('edit_ram',$data);
	}

	public function update_ram(){
		$id_ram = $this->input->post('id_ram');
		$data['brand_ram'] = $this->input->post('brand_ram');
		$data['code_ram'] = $this->input->post('code_ram');
		$data['ram_type_ram'] = $this->input->post('ram_type_ram');
		$data['size_ram'] = $this->input->post('size_ram');
		$data['price_ram'] = $this->input->post('price_ram');
		$data['performance_ram'] = $this->input->post('performance_ram');
		$where = array(
			'id_ram' => $id_ram
		);
		$this->Main_model->update_data($where,$data,'part_ram');
		redirect('Main_controller/dashboard');
	}

	public function delete_ram($id_ram){
		$where = array('id_ram' => $id_ram);
		$this->Main_model->delete_data($where,'part_ram');
		redirect('Main_controller/dashboard');
	}

	//GPU
	public function call_add_gpu(){
		$this->load->view('add_gpu');
	}

	public function add_gpu(){
		$data['brand_gpu'] = $this->input->post('brand_gpu');
		$data['code_gpu'] = $this->input->post('code_gpu');
		$data['pcie_gpu'] = $this->input->post('pcie_gpu');
		$data['vram_gpu'] = $this->input->post('vram_gpu');
		$data['vram_size_gpu'] = $this->input->post('vram_size_gpu');
		$data['price_gpu'] = $this->input->post('price_gpu');
		$data['performance_gpu'] = $this->input->post('performance_gpu');

		$this->Main_model->add_data($data,'part_gpu');
		redirect('Main_controller/dashboard');
	}

	function edit_gpu($id_gpu){
		$where = array('id_gpu' => $id_gpu);
		$data['part_gpu'] = $this->Main_model->edit_data($where,'part_gpu')->result();
		$this->load->view('edit_gpu',$data);
	}

	public function update_gpu(){
		$id_gpu = $this->input->post('id_gpu');
		$data['brand_gpu'] = $this->input->post('brand_gpu');
		$data['code_gpu'] = $this->input->post('code_gpu');
		$data['pcie_gpu'] = $this->input->post('pcie_gpu');
		$data['vram_gpu'] = $this->input->post('vram_gpu');
		$data['vram_size_gpu'] = $this->input->post('vram_size_gpu');
		$data['price_gpu'] = $this->input->post('price_gpu');
		$data['performance_gpu'] = $this->input->post('performance_gpu');
		$where = array(
			'id_gpu' => $id_gpu
		);
		$this->Main_model->update_data($where,$data,'part_gpu');
		redirect('Main_controller/dashboard');
	}

	public function delete_gpu($id_gpu){
		$where = array('id_gpu' => $id_gpu);
		$this->Main_model->delete_data($where,'part_gpu');
		redirect('Main_controller/dashboard');
	}

	public function call_add_psu(){
		$this->load->view('add_psu');
	}

	public function call_add_mem(){
		$this->load->view('add_mem');
	}

	public function call_add_dsp(){
		$this->load->view('add_dsp');
	}

	public function call_add_cas(){
		$this->load->view('add_cas');
	}

	public function call_add_mos(){
		$this->load->view('add_mos');
	}

	public function call_add_key(){
		$this->load->view('add_key');
	}

	function edit_psu($id_psu){
		$where = array('id_psu' => $id_psu);
		$data['part_psu'] = $this->Main_model->edit_data($where,'part_psu')->result();
		$this->load->view('edit_psu',$data);
	}

	function edit_mem($id_mem){
		$where = array('id_mem' => $id_mem);
		$data['part_mem'] = $this->Main_model->edit_data($where,'part_mem')->result();
		$this->load->view('edit_mem',$data);
	}

	function edit_dsp($id_dsp){
		$where = array('id_dsp' => $id_dsp);
		$data['part_dsp'] = $this->Main_model->edit_data($where,'part_dsp')->result();
		$this->load->view('edit_dsp',$data);
	}

	function edit_cas($id_cas){
		$where = array('id_cas' => $id_cas);
		$data['part_cas'] = $this->Main_model->edit_data($where,'part_cas')->result();
		$this->load->view('edit_cas',$data);
	}

	function edit_mos($id_mos){
		$where = array('id_mos' => $id_mos);
		$data['part_mos'] = $this->Main_model->edit_data($where,'part_mos')->result();
		$this->load->view('edit_mos',$data);
	}

	function edit_key($id_key){
		$where = array('id_key' => $id_key);
		$data['part_key'] = $this->Main_model->edit_data($where,'part_key')->result();
		$this->load->view('edit_key',$data);
	}

	public function delete_psu($id_psu){
		$where = array('id_psu' => $id_psu);
		$this->Main_model->delete_data($where,'part_psu');
		redirect('Main_controller/dashboard');
	}

	public function delete_mem($id_mem){
		$where = array('id_mem' => $id_mem);
		$this->Main_model->delete_data($where,'part_mem');
		redirect('Main_controller/dashboard');
	}

	public function delete_dsp($id_dsp){
		$where = array('id_dsp' => $id_dsp);
		$this->Main_model->delete_data($where,'part_dsp');
		redirect('Main_controller/dashboard');
	}

	public function delete_cas($id_cas){
		$where = array('id_cas' => $id_cas);
		$this->Main_model->delete_data($where,'part_cas');
		redirect('Main_controller/dashboard');
	}

	public function delete_mos($id_mos){
		$where = array('id_mos' => $id_mos);
		$this->Main_model->delete_data($where,'part_mos');
		redirect('Main_controller/dashboard');
	}

	public function delete_key($id_key){
		$where = array('id_key' => $id_key);
		$this->Main_model->delete_data($where,'part_key');
		redirect('Main_controller/dashboard');
	}

	public function add_psu(){
		$data['brand_psu'] = $this->input->post('brand_psu');
		$data['code_psu'] = $this->input->post('code_psu');
		$data['power_psu'] = $this->input->post('power_psu');
		$data['certification_psu'] = $this->input->post('certification_psu');
		$data['price_psu'] = $this->input->post('price_psu');
		$data['performance_psu'] = $this->input->post('performance_psu');

		$this->Main_model->add_data($data,'part_psu');
		redirect('Main_controller/dashboard');
	}

	public function add_mem(){
		$data['brand_mem'] = $this->input->post('brand_mem');
		$data['code_mem'] = $this->input->post('code_mem');
		$data['sata_mem'] = $this->input->post('sata_mem');
		$data['size_mem'] = $this->input->post('size_mem');
		$data['price_mem'] = $this->input->post('price_mem');
		$data['performance_mem'] = $this->input->post('performance_mem');

		$this->Main_model->add_data($data,'part_mem');
		redirect('Main_controller/dashboard');
	}

	public function add_dsp(){
		$data['brand_dsp'] = $this->input->post('brand_dsp');
		$data['code_dsp'] = $this->input->post('code_dsp');
		$data['resolution_dsp'] = $this->input->post('resolution_dsp');
		$data['size_dsp'] = $this->input->post('size_dsp');
		$data['price_dsp'] = $this->input->post('price_dsp');
		$data['performance_dsp'] = $this->input->post('performance_dsp');

		$this->Main_model->add_data($data,'part_dsp');
		redirect('Main_controller/dashboard');
	}

	public function add_cas(){
		$data['brand_cas'] = $this->input->post('brand_cas');
		$data['code_cas'] = $this->input->post('code_cas');
		$data['form_cas'] = $this->input->post('form_cas');
		$data['price_cas'] = $this->input->post('price_cas');
		$data['performance_cas'] = $this->input->post('performance_cas');

		$this->Main_model->add_data($data,'part_cas');
		redirect('Main_controller/dashboard');
	}

	public function add_mos(){
		$data['brand_mos'] = $this->input->post('brand_mos');
		$data['code_mos'] = $this->input->post('code_mos');
		$data['price_mos'] = $this->input->post('price_mos');
		$data['Performance_mos'] = $this->input->post('Performance_mos');

		$this->Main_model->add_data($data,'part_mos');
		redirect('Main_controller/dashboard');
	}

	public function add_key(){
		$data['brand_key'] = $this->input->post('brand_key');
		$data['code_key'] = $this->input->post('code_key');
		$data['price_key'] = $this->input->post('price_key');
		$data['Performance_key'] = $this->input->post('Performance_key');

		$this->Main_model->add_data($data,'part_key');
		redirect('Main_controller/dashboard');
	}

	public function update_psu(){
		$id_psu = $this->input->post('id_psu');
		$data['brand_psu'] = $this->input->post('brand_psu');
		$data['code_psu'] = $this->input->post('code_psu');
		$data['power_psu'] = $this->input->post('power_psu');
		$data['certification_psu'] = $this->input->post('certification_psu');
		$data['price_psu'] = $this->input->post('price_psu');
		$data['performance_psu'] = $this->input->post('performance_psu');
		$where = array(
			'id_psu' => $id_psu
		);
		$this->Main_model->update_data($where,$data,'part_psu');
		redirect('Main_controller/dashboard');
	}

	public function update_mem(){
		$id_mem = $this->input->post('id_mem');
		$data['brand_mem'] = $this->input->post('brand_mem');
		$data['code_mem'] = $this->input->post('code_mem');
		$data['sata_mem'] = $this->input->post('sata_mem');
		$data['size_mem'] = $this->input->post('size_mem');
		$data['price_mem'] = $this->input->post('price_mem');
		$data['performance_mem'] = $this->input->post('performance_mem');
		$where = array(
			'id_mem' => $id_mem
		);
		$this->Main_model->update_data($where,$data,'part_mem');
		redirect('Main_controller/dashboard');
	}

	public function update_dsp(){
		$id_dsp = $this->input->post('id_dsp');
		$data['brand_dsp'] = $this->input->post('brand_dsp');
		$data['code_dsp'] = $this->input->post('code_dsp');
		$data['resolution_dsp'] = $this->input->post('resolution_dsp');
		$data['size_dsp'] = $this->input->post('size_dsp');
		$data['price_dsp'] = $this->input->post('price_dsp');
		$data['performance_dsp'] = $this->input->post('performance_dsp');
		$where = array(
			'id_dsp' => $id_dsp
		);
		$this->Main_model->update_data($where,$data,'part_dsp');
		redirect('Main_controller/dashboard');
	}

	public function update_cas(){
		$id_cas = $this->input->post('id_cas');
		$data['brand_cas'] = $this->input->post('brand_cas');
		$data['code_cas'] = $this->input->post('code_cas');
		$data['form_cas'] = $this->input->post('form_cas');
		$data['price_cas'] = $this->input->post('price_cas');
		$data['performance_cas'] = $this->input->post('performance_cas');
		$where = array(
			'id_cas' => $id_cas
		);
		$this->Main_model->update_data($where,$data,'part_cas');
		redirect('Main_controller/dashboard');
	}

	public function update_mos(){
		$id_mos = $this->input->post('id_mos');
		$data['brand_mos'] = $this->input->post('brand_mos');
		$data['code_mos'] = $this->input->post('code_mos');
		$data['price_mos'] = $this->input->post('price_mos');
		$data['Performance_mos'] = $this->input->post('Performance_mos');
		$where = array(
			'id_mos' => $id_mos
		);
		$this->Main_model->update_data($where,$data,'part_mos');
		redirect('Main_controller/dashboard');
	}

	public function update_key(){
		$id_key = $this->input->post('id_key');
		$data['brand_key'] = $this->input->post('brand_key');
		$data['code_key'] = $this->input->post('code_key');
		$data['price_key'] = $this->input->post('price_key');
		$data['Performance_key'] = $this->input->post('Performance_key');
		$where = array(
			'id_key' => $id_key
		);
		$this->Main_model->update_data($where,$data,'part_key');
		redirect('Main_controller/dashboard');
	}

	public function upload_image(){
		$config['upload_path']          = './images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('images_file')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('dashboard', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('dashboard', $data);
		}
	}

	public function transactions($username){
		$where = array('username' => $username);
		$user = $this->Main_model->edit_data($where,'user')->result();
		$data['id_user'] = $user[0]->id_user;
		$data['date_transaction'] = date("Y-m-d");
		$data['total_transaction'] = $this->input->post('grand_total1');
		// echo $user[0]->id_user;
		// print_r($data);
		$this->Main_model->add_transaction('transactions',$data);
		// $data['ok'] = 1;
		//redirect('Main_controller/success');
		$this->load->view('login_header');
		$this->load->view('success');
		$this->load->view('footer');
		// $this->load->view('main_user',$data);
		// $this->load->view('footer');

	}

	public function delete_transactions($id_transaction){
		$where = array('id_transaction' => $id_transaction);
		$this->Main_model->delete_data($where,'transactions');
		redirect('Main_controller/dashboard');
	}

	public function update_transactions(){
		$id_transaction = $this->input->post('id_transaction');
		$data['id_user'] = $this->input->post('id_user');
		$data['date_transaction'] = $this->input->post('date_transaction');
		$data['total_transaction'] = $this->input->post('total_transaction');
		$where = array(
			'id_transaction' => $id_transaction
		);
		// print_r($data);
		$this->Main_model->update_data($where,$data,'transactions');
		redirect('Main_controller/dashboard');
	}

	public function print_report(){
		$data_trans = $this->Main_model->get_data_transactions()->result();
		$user = $this->Main_model->get_data_user()->result();
		//$name = $user->username;
		print_r($user);
		for($j=0;$j<count($user);$j++){
			$datau =  array(
				'id_user' => $user[$j]->id_user,
				'username' => $user[$j]->username,
				'address' => $user[$j]->address,
								);
			$data['user'][$j] = $datau;
		}
		for($j=0;$j<count($data_trans);$j++){
			$datas =  array(
				'id_user' => $data_trans[$j]->id_user,
				'date_transaction' => $data_trans[$j]->date_transaction,
				'total_transaction' => $data_trans[$j]->total_transaction,
								);
			$data['trans'][$j] = $datas;
		}
		$monthly = $this->Main_model->get_data_transactions_monthly()->result();
		for($j=0;$j<count($monthly);$j++){
			$datam =  array(
				'year' => $monthly[$j]->year,
				'month' => $monthly[$j]->month,
				'total' => $monthly[$j]->total,
				
								);
			$data['monthly'][$j] = $datam;
		}
		//print_r($data);
		$this->load->view('print',$data);
	}

}
?>
