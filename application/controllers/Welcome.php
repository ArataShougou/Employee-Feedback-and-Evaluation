<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Home";
			$data['body'] = "home";
			$this->load->view('template', $data);
		} else {
			$this->session->set_userdata('previous_url', current_url());
			redirect('welcome/Loginview');
		}
	}
	public function survei()
	{
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Kuesioner 2023";
			$data['body'] = "survei2023";
			$this->load->view('template', $data);
		} else {
			$this->session->set_userdata('previous_url', current_url());
			redirect('welcome/Loginview');
		}
	}

	public function surveilist()
	{
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Survei List";
			$data['body'] = "surveilist";
			$data['links'] = array(
				array('url' => site_url('/Welcome/survei'), 'title' => 'Assessment work life balance 2023')
				// Add more links as needed
			);

			$this->load->view('template', $data);
		} else {
			$this->session->set_userdata('previous_url', current_url());
			redirect('welcome/Loginview');
		}
	}

	public function surveiview()
	{
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Kuesioner 2023";
			$data['body'] = "index";
			$this->load->view('template', $data);
		} else {
			$this->session->set_userdata('previous_url', current_url());
			redirect('welcome/Loginview');
		}
	}
	public function surveidata()
	{
		if ($this->session->userdata('logged_in')) {
			// User is logged in, proceed with loading the view
			$data['title'] = "Data Survei";
			$data['body'] = "datagraph";

			//data from database
			$columnCounts = $this->data->getColumnCounts();
			$chartData = [];
			$chartLabels = [];
			$Labels = array(
				'jk' => 'Jenis Kelamin',
				'usia' => 'Usia',
				'domisili' => 'Domisili',
				'statusrumah' => 'Status Rumah',
				'pendidikan' => 'Pendidikan',
				'divisi' => 'Divisi',
				'durasi' => 'Lama Bekerja',
				'perkawinan' => 'Status Perkawinan',
				'kendaraan' => 'Transportasi',
				'hobi' => 'Hobi',
				'pert1' => 'Bagaimana Anda menggambarkan keseimbangan kehidupan kerja Anda?',
				'pert2' => 'Seberapa penting bagi Anda untuk memiliki rekan kerja  yang suportif di tempat kerja?',
				'pert3' => 'Seberapa penting bagi Anda untuk memiliki Manajer yang suportif di tempat kerja?',
				'pert4' => 'Bagaimana Anda menangani konflik dalam komitmen pekerjaan Anda?',
				'pert5' => 'Bagaimana Anda menangani konflik dalam komitmen keluarga Anda?',
				'pert6' => 'Seberapa nyaman Anda mendiskusikan masalah pribadi dengan atasan Anda?',
				'pert7' => 'Seberapa sering Anda merasa didukung dan dihargai oleh keluarga atas pencapaian pekerjaan Anda?',
				'pert8' => 'Seberapa inklusif dan beragam budaya tempat kerja Anda?',
				'pert9' => 'Seberapa sering Anda merasakan tekanan dari kewajiban pekerjaan yang mempengaruhi waktu Anda bersama keluarga?',
				'pert10' => 'Seberapa baik tempat kerja Anda mendukung kesejahteraan karyawan?',
				'pert11' => 'Seberapa baik atasan Anda mendukung kesehatan mental karyawan?',
				'pert12' => 'Seberapa baik rekan kerja Anda mendukung kesehatan mental karyawan?',
				'pert13' => 'Seberapa baik tempat kerja Anda mendukung kesehatan mental karyawan?',
				'pert14' => 'Seberapa sering Anda melibatkan keluarga Anda dalam diskusi terkait pekerjaan atau proses pengambilan keputusan?',
				'pert15' => 'Seberapa puaskah Anda dengan keseluruhan integrasi kehidupan keluarga dan kehidupan kerja Anda?',
				'pert16' => 'Seberapa penting fasilitas yang disediakan oleh perusahaan untuk keseimbangan kerja dan hobi Anda?',
				'pert17' => 'Seberapa baik fasilitas yang disediakan oleh perusahaan untuk keseimbangan kerja dan hobi Anda?',
				'pert18' => 'Apabila bila perusahaan ingin memberikan fasilitas untuk menjaga keseimbangan kerja dan kehidupan Anda, fasilitas apa yang Anda inginkan?',
				'pert19' => 'Apakah anda sudah merasa terpenuhi atas tunjangan transportasi yang diberikan oleh perusahaan?'
			);
			foreach ($columnCounts as $column => $results) {
				$chartData[$column] = [];
				$chartLabels[$column] = [];
				// $chartMost[$column] = [];
				// unset($maxNumbers);
				// unset($maxLabel);
				// $maxNumbers[0]=0;
				// $maxLabel[0] = [];
				foreach ($results as $result) {
					$chartData[$column][] = $result->{'count_' . $column};
					$chartLabels[$column][] = $result->$column;

					//Data terbanyak pada column ini
					// $currentMax =  $result->{'count_' . $column};
					// $currentLabel = $result->$column;
					// if ($currentMax > $maxNumbers[0]) {
					// 	$maxLabel[0] = $result->$column;
					// 	$maxNumbers[0] = $currentMax;
					// }elseif ($currentMax === $maxNumbers[0] && $maxLabel[0] != $currentLabel) {
					// 	//array_push($maxLabel, $currentLabel);
					// }
					
				}
				// $chartMost[$column] = [$maxLabel,$maxNumbers];
			}
			$data['chartMost'] = $this->DataTerbanyak();
			$data['chartData'] = $chartData;
			$data['chartLabels'] = $chartLabels;
			$data['labels'] = $Labels;
			$this->load->view('template', $data);
		} else {
			// User is not logged in, redirect or show an error message
			$this->session->set_userdata('previous_url', current_url());
			redirect('welcome/Loginview'); // Assuming you have a login controller named "Login"
		}
	}

	private function DataTerbanyak(){
		try{
			$columnCounts = $this->data->getColumnCounts();
			foreach ($columnCounts as $column => $results) {
				$maxLabel= [];
				$maxNumb = 0;
				$tempNumb = 0;
				foreach ($results as $result) {
					$tempNumb = (int)$result->{'count_' . $column};
					if( $tempNumb > $maxNumb){
						$maxNumb = $tempNumb;
						$maxLabel = [(string)$result->$column];
					}else if($tempNumb === $maxNumb){
						$maxLabel[] = (string)$result->$column;
					}
				}
				$chartMost[$column] = [$maxLabel,$maxNumb];
			}
			return $chartMost;
		}catch(Exception $e){
			return $e;
		}
		
	}

	public function Save()
	{
		$data['nama'] = $this->input->post('name');
		$data['jk'] = $this->input->post('jk');
		$data['usia'] = $this->input->post('usia');
		$data['domisili'] = $this->input->post('kota');
		$data['statusrumah'] = $this->input->post('tempattinggal');
		$data['pendidikan'] = $this->input->post('Pendidikan');
		$data['divisi'] = $this->input->post('Divisi');
		$data['durasi'] = $this->input->post('LamaBekerja');
		$data['perkawinan'] = $this->input->post('Perkawinan');
		$data['kendaraan'] = $this->input->post('kendaraan');
		$data['hobi'] = $this->input->post('Hobi');
		for ($i = 1; $i < 20; $i++) {
			$data['pert' . $i] = $this->input->post('Pert' . $i);
		}
		$this->data->save($data);
		$this->load->view('berhasil');
	}

	public function Loginview()
	{
		$data['title'] = "Login";
		$data['body'] = "login";
		$this->load->view('template.php', $data);
	}
	public function Signupview()
	{
		$data['title'] = "Sign Up";
		$data['body'] = "signup";
		$this->load->view('template.php', $data);
	}

	public function logout()
	{
		// Destroy the session data
		$this->session->sess_destroy();

		// Redirect the user to the login page or any other desired page
		redirect('welcome/Loginview');
	}

	public function login2()
	{
		// Form validation rules
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			// Display the login form
			$this->load->view('login');
		} else {
			// Retrieve the user's entered email and password
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			// Retrieve the hashed password from the database based on the email
			$hashedPassword = $this->data->getHashedPassword($email);

			// Verify the entered password against the stored hashed password
			if (password_verify($password, $hashedPassword)) {
				$level = $this->data->getLevel($email);
				// Password matches, login successful
				// Redirect to the authenticated user's dashboard or desired page
				$userData = array(
					'email' => $email,
					'level' => $level,
					'logged_in' => TRUE
				);
				$this->session->set_userdata($userData);
				// $previous_url = $this->session->userdata('previous_url');
				// $this->session->unset_userdata('previous_url');
				redirect('welcome/index');
			} else {
				// Password doesn't match, show error message
				$data['error'] = 'Invalid email or password';
				$this->load->view('login', $data);
			}
		}
	}

	public function signup2()
	{

		// Form validation rules
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

		if ($this->form_validation->run() === FALSE) {
			// Display the signup form
			$this->load->view('signup');
		} else {
			// Retrieve the user's entered email and password
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$level = 'normal';

			// Hash the password
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

			// Save the email and hashed password to the database
			$this->data->saveUser($email, $hashedPassword, $level);

			// Redirect to the login page or desired page
			redirect('welcome/surveidata');
		}
	}
	public function resetDatabase()
	{
		$this->data->emptyDatabase(); // Call the emptyDatabase method
		redirect('welcome/surveidata'); // Redirect back to the view after emptying the database
	}
}
