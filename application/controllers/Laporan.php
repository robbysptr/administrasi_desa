<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
				$this->load->model('Datawarga_model');
				$this->load->model('Domisili_model');
				if($this->session->userdata('status')=='')
        {
        	redirect('Auth');
        }
    }

	public function index()
	{
		$data ['title'] = "Laporan";
											 if ($this->session->userdata('role')=='Kepala Desa') {
											 	$this->db->where('status', 'ACC');
										 	 }
		$data['laporan'] = $this->Laporan_model->get_all_laporan();
		$this->load->view('layout/head', $data);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('laporan/contentheader');
		$this->load->view('laporan/index', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/javascript');
	}

	public function add()
	{
		date_default_timezone_set('Asia/Jakarta');
		if ($this->session->userdata('role')!='Bagian Pelayanan' AND $this->session->userdata('role')!='Admin') {
			show_404();
		}
		$data ['title'] = "Laporan";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('data_warga','Data Warga');
		$this->form_validation->set_rules('keterangan','Keterangan','required');

		  if($this->form_validation->run())
		    {
		    	$config['upload_path'] = './assets/uploads';
				$config['allowed_types'] = 'pdf|doc|docx';
				$config['max_size'] = 10000;
				$this->load->library('upload' , $config);
				if(!$this->upload->do_upload('data_warga')){
					echo "upload gagal".$this->upload->display_errors();
					exit();
				}
				else
				{
					$upload_data  = $this->upload->data();
		      		$file_name  =   $upload_data['file_name'];
				}
			     $params = array(
				    'data_warga' => $file_name,
				    'keterangan' => $this->input->post('keterangan'),
						'tgl_laporan'=> date('Y-m-d H:i:s')
			     );
	         $laporan_id = $this->Laporan_model->add_laporan($params);

					  // $params2 = array(
	 					//  'pesan' => $this->input->post('keterangan'),
	 					//  'event' => 'Laporan',
	 					//  'tgl_notifikasi'=> date('Y-m-d H:i:s')
	 					// );
	 					// $this->db->insert('notifikasi', $params2);

							$this->session->set_flashdata('msg',
								'
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Berhasil disimpan.
								</div>'
							);
	            redirect('laporan/index');
	        }
	        else
	        {
	           $this->load->view('layout/head' , $data);
				$this->load->view('layout/header');
				$this->load->view('layout/sidebar');
				$this->load->view('laporan/contentheader');
				$this->load->view('laporan/add');
				$this->load->view('layout/footer');
				$this->load->view('layout/javascript');
	        }

	}

		public function edit($id)
		{
			if ($this->session->userdata('role')!='Bagian Pelayanan' AND $this->session->userdata('role')!='Admin') {
				show_404();
			}
			// check if the laporan exists before trying to edit it
        $data['laporan'] = $this->Laporan_model->get_laporan($id);

        if(isset($data['laporan']['id_laporan']))
        {
        $data ['title'] = "Laporan";
		$this->load->library('form_validation');
		// $this->form_validation->set_rules('data_warga','Data Warga','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');

		   if($this->form_validation->run())
		            {
                $params = array(
				    // 'data_warga' => $this->input->post('data_warga'),
				    'keterangan' => $this->input->post('keterangan'),
                );

                $this->Laporan_model->update_laporan($id,$params);
								$this->session->set_flashdata('msg',
									'
									<div class="alert alert-success alert-dismissible" role="alert">
										 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
										 </button>
										 <strong>Sukses!</strong> Berhasil disimpan.
									</div>'
								);
                redirect('laporan/index');
            }
            else
            {
                $this->load->view('layout/head' , $data);
				$this->load->view('layout/header');
				$this->load->view('layout/sidebar');
				$this->load->view('laporan/contentheader');
				$this->load->view('laporan/edit' , $data);
				$this->load->view('layout/footer');
				$this->load->view('layout/javascript');
            }
        }
        else
            show_error('The laporan you are trying to edit does not exist.');


		}

		public function remove($id)
		{
			if ($this->session->userdata('role')!='Bagian Pelayanan' AND $this->session->userdata('role')!='Admin') {
				show_404();
			}
			$laporan = $this->Laporan_model->get_laporan($id);

        // check if the laporan exists before trying to delete it
        if(isset($laporan['id_laporan']))
        {
					if ($laporan['data_warga']!='') {
						unlink('assets/uploads/'.$laporan['data_warga']);
					}
            $this->Laporan_model->delete_laporan($id);
						$this->session->set_flashdata('msg',
							'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Berhasil dihapus.
							</div>'
						);
            redirect('laporan/index');
        }
        else
            show_error('The laporan you are trying to delete does not exist.');
		}


		public function cek($id='')
		{
			date_default_timezone_set('Asia/Jakarta');
			if ($this->session->userdata('role')!='sekdes' OR $id=='') {
				show_404();
			}
        $laporan = $this->Laporan_model->get_laporan($id);
				if ($laporan['status']=='ACC') {
					$status = Null;
					$pesan  = 'Batalkan';
				}else {
					$status = 'ACC';
					$pesan  = 'ACC';

					$params2 = array(
					 'pesan' => $laporan['keterangan'],
					 'event' => 'Laporan',
					 'tgl_notifikasi'=> date('Y-m-d H:i:s')
					);
					$this->db->insert('notifikasi', $params2);
				}
				$params = array(
					'status' => $status,
				);
				$this->Laporan_model->update_laporan($id,$params);
				$this->session->set_flashdata('msg',
					'
					<div class="alert alert-success alert-dismissible" role="alert">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						 </button>
						 <strong>Sukses!</strong> Berhasil di '.$pesan.'.
					</div>'
				);
				redirect('laporan/index');
		}


		public function cetak($aksi='')
		{
			if ($this->session->userdata('role')=='') {
				show_404();
			}
			$data ['title'] = "Cetak Dokumen ".ucwords($aksi);
			if ($aksi=='warga') {
				$data['datawarga'] = $this->Datawarga_model->get_all_datawarga();
			}elseif ($aksi=='domisili') {
				$data['domisili'] = $this->Domisili_model->get_all_domisili();
			}else {
				show_404();
			}
			$this->load->view('laporan/cetak_'.$aksi, $data);
		}
}
