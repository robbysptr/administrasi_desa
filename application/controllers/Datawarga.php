<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datawarga extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Datawarga_model');
				if($this->session->userdata('status')=='')
        {
        	redirect('Auth');
        }
				if ($this->session->userdata('role') != 'Bagian Pelayanan' AND $this->session->userdata('role') != 'Admin')
        {
        	//redirect('Error/404');
        	show_404();
        }
    }

	public function index()
	{
		$data ['title'] = "Data Warga";
		$data['datawarga'] = $this->Datawarga_model->get_all_datawarga();
		$this->load->view('layout/head', $data);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('datawarga/contentheader');
		$this->load->view('datawarga/index', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/javascript');
	}

	public function add()
	{
		$data ['title'] = "Data Warga";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nik','NIK','required|numeric');
		$this->form_validation->set_rules('no_kk','No KK','required|numeric');
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('rt','RT','required|numeric');
		$this->form_validation->set_rules('rw','RW','required|numeric');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('no_telp','No Telp','required|numeric');
		$this->form_validation->set_rules('agama','Agama','required');
		$this->form_validation->set_rules('pendidikan','Pendidikan','required');
		$this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
		$this->form_validation->set_rules('status','Status Kawin','required');
		$this->form_validation->set_rules('hubungan_keluarga','Hubungan Keluarga','required');
		// $this->form_validation->set_rules('scan','Scan', 'required');
		$this->form_validation->set_rules('ket','Keterangan');

		  if($this->form_validation->run())
		    {
		    	$config['upload_path'] = './assets/uploads';
					$config['allowed_types'] = 'pdf|doc|docx|jpg';
					$config['max_size'] = 10000;
					$this->load->library('upload' , $config);
					if(!$this->upload->do_upload('scan'))
					{
						$file_name = '';
					}
					else
					{
						$upload_data  = $this->upload->data();
			      $file_name  =   $upload_data['file_name'];
					}

					$cek_datawarga = $this->db->get_where('datawarga', array('nik' => $this->input->post('nik')));
					if ($cek_datawarga->num_rows() != 0 ) {
						$this->session->set_flashdata('msg',
							'
							<div class="alert alert-warning alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Gagal!</strong> NIK sudah ada.
							</div>'
						);
						redirect('datawarga/add');
					}

			     $params = array(
			     	'nik' => $this->input->post('nik'),
				    'no_kk' => $this->input->post('no_kk'),
				    'nama_lengkap' => $this->input->post('nama_lengkap'),
				    'alamat' => $this->input->post('alamat'),
				    'rt' => $this->input->post('rt'),
				    'rw' => $this->input->post('rw'),
				    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				    'tempat_lahir' => $this->input->post('tempat_lahir'),
				    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				    'no_telp' => $this->input->post('no_telp'),
				    'agama' => $this->input->post('agama'),
				    'pendidikan' => $this->input->post('pendidikan'),
				    'pekerjaan' => $this->input->post('pekerjaan'),
				    'status' => $this->input->post('status'),
				    'hubungan_keluarga' => $this->input->post('hubungan_keluarga'),
				    'scan' => $file_name,
				    'ket' => $this->input->post('ket')
				    );

	            $datawarga_id = $this->Datawarga_model->add_datawarga($params);

							$this->session->set_flashdata('msg',
								'
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Berhasil disimpan.
								</div>'
							);
	            redirect('datawarga/index');
	        }
	        else
	        {
	           	$this->load->view('layout/head' , $data);
							$this->load->view('layout/header');
							$this->load->view('layout/sidebar');
							$this->load->view('datawarga/contentheader');
							$this->load->view('datawarga/add');
							$this->load->view('layout/footer');
							$this->load->view('layout/javascript');
	        }

	}

		public function edit($id)
		{
			// check if the datawarga exists before trying to edit it
        $data['datawarga'] = $this->Datawarga_model->get_datawarga($id);

        if(isset($data['datawarga']['nik']))
        {
          $data ['title'] = "Data Warga";
          $this->load->library('form_validation');
          $this->form_validation->set_rules('nik','NIK','required|numeric');
   		  $this->form_validation->set_rules('no_kk','No KK','required|numeric');
		  $this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
		  $this->form_validation->set_rules('alamat','Alamat','required');
		  $this->form_validation->set_rules('rt','RT','required|numeric');
		  $this->form_validation->set_rules('rw','RW','required|numeric');
		  $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
			$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
			$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		  $this->form_validation->set_rules('no_telp','No Telp','required|numeric');
		  $this->form_validation->set_rules('agama','Agama','required');
		  $this->form_validation->set_rules('pendidikan','Pendidikan','required');
		  $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
		  $this->form_validation->set_rules('status','Status Kawin','required');
		  $this->form_validation->set_rules('hubungan_keluarga','Hubungan Keluarga','required');
		  // $this->form_validation->set_rules('scan','Scan','required');
		  $this->form_validation->set_rules('ket','Keterangan');

   if($this->form_validation->run())
            {
		    	$config['upload_path'] = './assets/uploads';
				$config['allowed_types'] = 'pdf|doc|docx|jpg';
				$config['max_size'] = 10000;
				$this->load->library('upload' , $config);
				if(!$this->upload->do_upload('scan'))
				{
					$file_name = '';
				}
				else
				{
					$upload_data  = $this->upload->data();
		      		$file_name  =   $upload_data['file_name'];
				}

				$cek_datawarga = $this->db->get_where('datawarga', array('nik'=>$this->input->post('nik'), 'nik!='=>$id));
				if ($cek_datawarga->num_rows() != 0 ) {
					$this->session->set_flashdata('msg',
						'
						<div class="alert alert-warning alert-dismissible" role="alert">
							 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
							 </button>
							 <strong>Gagal!</strong> NIK sudah ada.
						</div>'
					);
					redirect('datawarga/edit/'.$id);
				}

                $params = array(
     				'nik' => $this->input->post('nik'),
				    'no_kk' => $this->input->post('no_kk'),
				    'nama_lengkap' => $this->input->post('nama_lengkap'),
				    'alamat' => $this->input->post('alamat'),
				    'rt' => $this->input->post('rt'),
				    'rw' => $this->input->post('rw'),
				    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				    'tempat_lahir' => $this->input->post('tempat_lahir'),
				    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				    'no_telp' => $this->input->post('no_telp'),
				    'agama' => $this->input->post('agama'),
				    'pendidikan' => $this->input->post('pendidikan'),
				    'pekerjaan' => $this->input->post('pekerjaan'),
				    'status' => $this->input->post('status'),
				    'hubungan_keluarga' => $this->input->post('hubungan_keluarga'),
				    'scan' => $file_name,
				    'ket' => $this->input->post('ket')
                );

                $this->Datawarga_model->update_datawarga($id,$params);
								$this->session->set_flashdata('msg',
									'
									<div class="alert alert-success alert-dismissible" role="alert">
										 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
										 </button>
										 <strong>Sukses!</strong> Berhasil disimpan.
									</div>'
								);
		            redirect('datawarga/index');
            }
            else
            {
                $this->load->view('layout/head' , $data);
								$this->load->view('layout/header');
								$this->load->view('layout/sidebar');
								$this->load->view('datawarga/contentheader');
								$this->load->view('datawarga/edit' , $data);
								$this->load->view('layout/footer');
								$this->load->view('layout/javascript');
            }
        }
        else
            show_error('The datawarga you are trying to edit does not exist.');


		}

		public function remove($id)
		{
			$datawarga = $this->Datawarga_model->get_datawarga($id);

        // check if the datawarga exists before trying to delete it
        if(isset($datawarga['nik']))
        {
					if ($datawarga['scan']!='') {
						unlink('assets/uploads/'.$datawarga['scan']);
					}
						$this->Datawarga_model->delete_datawarga($id);
						$this->session->set_flashdata('msg',
							'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Berhasil dihapus.
							</div>'
						);
            redirect('datawarga/index');
        }
        else
            show_error('The datawarga you are trying to delete does not exist.');
		}
}
