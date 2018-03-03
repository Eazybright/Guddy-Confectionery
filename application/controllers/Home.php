 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->model(array('home_model','products_model'));
		$this->load->library(array('form_validation', 'session'));
		$this->load->database('soc_guddy');
	}
	//if user is not logged in open home page
	public function index(){
		if ((isset($_SESSION['logged_in'] ) && $_SESSION['logged_in'] == true )){
			$this->load->view('pages/dashboard_user');
		}else{
			$this->load->view('pages/home');
		}
	}
		//if already logged in go to dashboard, else login page
	public function login(){
		if ((isset($_SESSION['logged_in'] ) && $_SESSION['logged_in'] == true )){
			$this->load->view('pages/dashboard_user');
		}else{
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			$this->form_validation->set_rules('username', 'username','trim|required', array('required' => 'Username is incorrect'));
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]', array('required' => 'Password is incorrect'));
			$this->form_validation->set_rules('remember', 'remember', 'trim');

			//login for user
			if($this->form_validation->run() == FALSE){

				$this->load->view('pages/home');

			}else{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$remember_me = $this->input->post('remember');

				if ($this->home_model->resolve_login($username, $password)){

					$user = $this->home_model->get_user_from_username($username);
					$_SESSION['user_id'] = $user->id;
					$_SESSION['username'] = $user->username;
					$_SESSION['email'] = $user->email;
					$_SESSION['logged_in'] = true;

					if(isset($remember_me)){
						$this->config->set_item('sess_expiration', 7200);
					}
						$this->load->view('pages/dashboard_user');
				}else{
					$this->load->view('pages/login_error');
				}
			}
		}
	}

	public function signup(){
		//rules to become a member
			$this->form_validation->set_rules('firstname', 'firstname', 'trim|required|min_length[3]|max_length[14]');
			$this->form_validation->set_rules('lastname', 'lastname', 'trim|required|min_length[2]|max_length[14]');
			$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[6]|is_unique[guddy.username]');
			$this->form_validation->set_rules('address', 'address', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
			$this->form_validation->set_rules('passconf', 'password confirmation', 'trim|required|matches[password]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[guddy.email]');
			$this->form_validation->set_rules('phone', 'phone', 'trim|required|numeric');

			//if user didn't validate, go to signup page
		if ($this->form_validation->run() == FALSE){
					$this->load->view('pages/signup');
		}else{
			//passing details to database
			$user_details = array(
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'username' => $_POST['username'],
			//hash password for security reasons
			'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
			'email' => $_POST['email'],
			'address' => $_POST['address'],
			'phone' => $_POST['phone']
			);

				//if user validate,signup is successful
			if ($this->home_model->register($user_details)){
				$this->load->view('pages/signup_success');
			}else{
				$this->load->view('pages/signup');
			}
		}
	}

	public function dashboard(){

		if (isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
			redirect('home/login');
		}else{
			$this->load->view('pages/dashboard_user');
		}
	}

	//logout user account
	public function logout(){
		if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
			redirect('home/login');
		}
		$this->session->sess_destroy();
		return redirect('home/login');
	}

	public function order(){
		if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
			$this->load->view('pages/products');
		}else{
			$this->load->view('pages/home');
		}
	}

	public function faq(){
		$this->load->view('pages/faq');
	}
	public function complain(){

			$this->form_validation->set_rules('email', 'email', 'trim|required');
			$this->form_validation->set_rules('comment', 'comment', 'trim|required');

		if($this->form_validation->run() == false){
				$this->load->view('pages/complain');
		}
		else{
			$user_details = array(
				'email' => $_POST['email'],
				'comment' => $_POST['comment']
				);
		if($this->home_model->register_comment($user_details)){

			$this->load->view('pages/complain_success');
		}
		}
	}
	public function contact(){
		$this->load->view('pages/contact');
	}
	public function about(){
		$this->load->view('pages/about');
	}
	public function view($product = false){
		if ($product == false){
      redirect('home/order');
    }
    $data = new stdClass();
    $data->product = $this->products_model->get_product($product);
    if(empty($data->product)){
      show_404();
    }
    $this->load->view('pages/product_view', $data);

	}

  public function test(){
    var_dump($this->products_model->get_product(100));
  }

  public function search(){
    $query = $this->input->get('query');

    $data = new stdClass();
    if(empty($query)){
      $this->load->view('pages/search_error', $data);
    }else{
      if (!empty(trim($query))){
        $data->products = $this->products_model->search($query);
      }else{
        $data->products = '';
      }
      $data->query = $query;
      // var_dump($result);
      $this->load->view('pages/search_result', $data);
    }
  }


  public function test_session(){
	  $sess = $this->config->item('sess_expiration');
	  var_dump($sess);
  }
}
/* End of file Home.php */
/* Location: system/application/controllers/ */
