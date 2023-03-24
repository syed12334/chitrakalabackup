<?php
defined("BASEPATH") or exit("No direct script access allowed");
include_once('easebuzz-lib/easebuzz_payment_gateway.php');
include_once('easebuzz-lib/payment.php');
 require_once APPPATH."vendor/autoload.php";
class Profile extends CI_Controller
{
	protected $data;
    public function __construct()
    {
    	date_default_timezone_set("Asia/Kolkata");
        parent::__construct();
        $this->load->helper("utility_helper");
        $this->load->model("master_db");
        $this->load->model("home_db");
         $this->data["header"] = $this->load->view(
            "includes/header",
            $this->data,
            true
        );
         $this->load->library('form_validation');
        $this->data["footer"] = $this->load->view(
            "includes/footer",
            $this->data,
            true
        );
        $this->data["js"] = $this->load->view("jsfile", $this->data, true);
    }
     public function index()
    {
    	$this->load->view('profile',$this->data);
    }
    public function profileSave() {
       // echo "<pre>";print_r($_POST);print_r($_FILES);exit;
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
            $this->form_validation->set_rules('name','Name','trim|required|regex_match[/^([a-zA-Z ])+$/i]|max_length[20]',['required'=>'Name is required','regex_match'=>'Invalid name','max_length'=>'Maximum 20 characters are allowed']);
            $this->form_validation->set_rules('age','Age','trim|required|numeric',['required'=>'Age is required','numeric'=>'Only numeric values are allowed']);
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/]',['required'=>'Email is required','valid_email'=>'Enter valid email','regex_match'=>'Invalid email']);
            $this->form_validation->set_rules('phone','Mobile Number','trim|required|numeric|exact_length[10]',['numeric'=>'Only numeric values are allowed','exact_length'=>'Only 10 Numbers Are Allowed','required'=>'Mobile number is required']);
             $this->form_validation->set_rules('gst','GSTNO','trim|regex_match[/^([a-zA-Z0-9])+$/i]',['regex_match'=>'Invalid gstno']);
            $this->form_validation->set_rules('state','State','trim|required|regex_match[/^([a-zA-Z ])+$/i]',['required'=>'State is required','regex_match'=>'Invalid state']);
            $this->form_validation->set_rules('country','Country','trim|required|regex_match[/^([a-zA-Z ])+$/i]',['required'=>'Country is required','regex_match'=>'Invalid country']);
            $this->form_validation->set_rules('place','Place','trim|required|regex_match[/^([a-zA-Z ])+$/i]',['required'=>'Place is required','regex_match'=>'Invalid place']);
            $this->form_validation->set_rules('address','Address ','trim|required|regex_match[/^([a-zA-Z-0-9#., ])+$/i]',['required'=>'Please enter address','regex_match'=>'Invalid address']);
            $this->form_validation->set_rules('feeamount','Feeamount ','trim|required',['required'=>'Please select registration fee']);
            $this->form_validation->set_rules('artists','About Artist ','trim|required|regex_match[/^([a-zA-Z0-9., ])+$/i]|max_length[200]',['required'=>'Please enter artist details','regex_match'=>'Invalid address','regex_match'=>'Invalid Artists Data','max_length'=>'Maximum 200 characters are allowed']);
            $this->form_validation->set_rules('entries[0]','Entries ','trim|required',['required'=>'Please select category']);
            $this->form_validation->set_rules('gender','Gender','required',['required'=>'Please select gender']);
             if(empty($_FILES['photo']['name'][0])) {
                $this->form_validation->set_rules('photo','Upload','required',['required'=>'Photo is required']);
            }
             if(empty($_FILES['proimg']['name'][0])) {
                $this->form_validation->set_rules('proimg','Upload','required',['required'=>'Profile pdf is required']);
            }
            if(empty($_FILES['images']['name'][0])) {
                $this->form_validation->set_rules('images[]','Upload','required',['required'=>'Work images is required']);
            }
            if($this->form_validation->run() ==TRUE) {
                $name = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('name', true))));
                $email = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('email', true))));
                $age = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('age', true))));
                $phone = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('phone', true))));
                $state = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('state', true))));
                $country = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('country', true))));
                $place = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('place', true))));
                $address = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('address', true))));
                $feeamount = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('feeamount', true))));
                $gender = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('gender', true))));
                $gst = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('gst', true))));
                $artists = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('artists', true))));
                $entries = $this->input->post('entries');
                if(!empty($name) && !empty($email) && !empty($age) && !empty($phone) && !empty($state) && !empty($country) && !empty($place) && !empty($address) && !empty($feeamount) && !empty($gender) && !empty($email)) {
                     $db['name'] = $name;
                    $db['emailid'] = $email;
                    $db['mphone'] = $phone;
                    $db['about'] = $artists;
                    $db['state'] = $state;
                    $db['country'] = $country;
                    $db['place'] = $place;
                    $db['age'] = $age;
                    $db['gstno'] = $gst;
                    $db['gender'] = $gender;
                     if (!empty($_FILES['photo']['name'])) {
                            $uploadPath = './assets/profile/';
                            $config['upload_path'] = $uploadPath;
                            $config['allowed_types'] = 'jpg|png|PNG|JPEG|jpeg';
                            $ext = pathinfo($_FILES["photo"]['name'], PATHINFO_EXTENSION);
                            $new_name = "CHITRAKALA" . rand(11111, 99999) . '.' . $ext;
                            $config['file_name'] = $new_name;
                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);
                            if (!$this->upload->do_upload('photo')) {
                                $array1 = ['status'=>false,'msg'=>"Photo : ".$this->upload->display_errors(),'csrf_token'=> $this->security->get_csrf_hash()];
                                echo json_encode($array1);exit;
                            } else {
                                $upload_data1 = $this->upload->data();
                                $db['photo'] = 'assets/profile/' . $upload_data1['file_name'];
                            }
                        }
                        if (!empty($_FILES['proimg']['name'])) {
                            $uploadPath = './assets/profile/';
                            $config1['upload_path'] = $uploadPath;
                            $config1['allowed_types'] = 'pdf|PDF';
                            $ext = pathinfo($_FILES["proimg"]['name'], PATHINFO_EXTENSION);
                            $new_name = "CHITRAKALA" . rand(11111, 99999) . '.' . $ext;
                            $config1['file_name'] = $new_name;
                            $this->load->library('upload', $config1);
                            $this->upload->initialize($config1);
                            if (!$this->upload->do_upload('proimg')) {
                                $array1 = ['status'=>false,'msg'=>"Profile Photo : ".$this->upload->display_errors(),'csrf_token'=> $this->security->get_csrf_hash()];
                                echo json_encode($array1);exit;
                            } else {
                                $upload_data1 = $this->upload->data();
                                $db['profileimg'] = 'assets/profile/' . $upload_data1['file_name'];
                            }
                        }
                    $db['feedetails'] = $feeamount;
                    $db['address'] = $address;
                    $db['created_at'] = date('Y-m-d H:i:s');
                    $in = $this->master_db->insertRecord('profile',$db);
                    if($in >0) {
                        if(count($entries) >0 && is_array($entries)) {
                            foreach ($entries as $key => $value) {
                               $dbs['proid'] = $in;
                               $dbs['pentry'] = $value;
                               $this->master_db->insertRecord('profile_entries',$dbs);
                            }
                        }
                        if(count($_FILES['images']['name'])) {
                            $count = count($_FILES['images']['name']);  
                            for($i=0;$i<$count;$i++){  
                              if(!empty($_FILES['images']['name'][$i])){  
                                $_FILES['photos']['name'] = $_FILES['images']['name'][$i];  
                                $_FILES['photos']['type'] = $_FILES['images']['type'][$i];  
                                $_FILES['photos']['tmp_name'] = $_FILES['images']['tmp_name'][$i];  
                                $_FILES['photos']['error'] = $_FILES['images']['error'][$i];  
                                $_FILES['photos']['size'] = $_FILES['images']['size'][$i];  
                                $config2['upload_path'] = './assets/profilework/';   
                                $config2['allowed_types'] = 'jpg|jpeg|png|JPEG|JPG';  
                                $ext = pathinfo($_FILES["images"]['name'][$i], PATHINFO_EXTENSION);
                                $new_name = "CHITRAKALA".$in.rand(11111,99999).'.'.$ext; 
                                $config2['file_name'] =  $new_name;
                                $this->load->library('upload',$config2);  
                                $this->upload->initialize($config2);  
                                if(!$this->upload->do_upload('photos')){  
                                    $array1 = ['status'=>false,'msg'=>"Work images :".$this->upload->display_errors(),'csrf_token'=> $this->security->get_csrf_hash()];
                                    echo json_encode($array1);exit;
                                }else {
                                    $uploadData = $this->upload->data();  
                                    $filename = 'assets/profilework/'.$uploadData['file_name'];
                                    $image['proid'] = $in;
                                    $image['profileimg'] = $filename;
                                    $this->master_db->insertRecord('profile_img',$image);
                                }
                             }  
                           }  
                        }
                        $getImages = $this->master_db->getRecords('profile_img',['proid'=>$in],'*');
                        $this->data['getImages'] = $getImages;
                        $this->data['proid'] = $in;
                        $html = $this->load->view('getwork',$this->data,true);
                        $array = ['status'=>true,'msg'=>'Profile saved successfully','view'=>$html,'csrf_token'=> $this->security->get_csrf_hash()];
                    }
                }else {
                    $array = ['status'=>false,'msg'=>'Required fields is missing','csrf_token'=> $this->security->get_csrf_hash()];
                }
            }else {
                 $array = array(
                'formerror'   => false,
                'name_error' => form_error('name'),
                'email_error' => form_error('email'),
                'age_error' => form_error('age'),
                'phone_error' => form_error('phone'),
                'state_error' => form_error('state'),
                'country_error' => form_error('country'),
                'photo_error' => form_error('photo'),
                'proimg_error' => form_error('proimg'),
                'address_error' => form_error('address'),
                'feeamount_error' => form_error('feeamount'),
                'place_error' => form_error('place'),
                'artists_error' => form_error('artists'),
                'gender_error' => form_error('gender'),
                'gstno_error' => form_error('gst'),
                'entries_error' => form_error('entries[0]'),
                'images_error' => form_error('images[]'),
                'csrf_token'=> $this->security->get_csrf_hash()
               );
            }
           echo json_encode($array);
       } 
    }
    public function profilesettings() {
        //echo "<pre>";print_r($_POST);exit;
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
             $this->form_validation->set_rules('title[0]','Title','trim|required|regex_match[/^([a-zA-Z0-9 ])+$/i]|max_length[90]',['required'=>'Title is required','regex_match'=>'Invalid title','max_length'=>'Maximum 90 characters are allowed']);
             $this->form_validation->set_rules('amount[0]','Amount','trim|required|numeric',['required'=>'Amount is required','numeric'=>'Only numeric value is allowed']);
             $this->form_validation->set_rules('category[0]','Title','required',['required'=>'Category is required']);
             $this->form_validation->set_rules('medium[0]','Medium','required',['required'=>'Medium is required']);
              if($this->form_validation->run() ==TRUE) {
                    $id = $this->input->post('imgid');
                    $title = $this->input->post('title');
                    $amount = $this->input->post('amount');
                    $category = $this->input->post('category');
                    $proid = $this->input->post('proid');
                    $medium = $this->input->post('medium');
                    if(is_array($id) && count($id)) {
                        foreach ($id as $key => $value) {
                            $dbs['title'] = $title[$key];
                            $dbs['amount'] = $amount[$key];
                            $dbs['category'] = $category[$key];
                            $dbs['medium'] = $medium[$key];
                            $this->master_db->updateRecord('profile_img',$dbs,['imgid'=>$value]);
                        }
                        $url = base_url().'profile/payment/'.$proid;
                        $array = ['status'=>true,'msg'=>'Profile saved successfully','url'=>$url,'csrf_token'=> $this->security->get_csrf_hash()];
                    }
              }else {
                     $array = array(
                    'formerror'   => false,
                    'title_error' => form_error('title[0]'),
                    'amount_error' => form_error('amount[0]'),
                    'category_error' => form_error('category[0]'),
                    'medium_error' => form_error('medium[0]'),
                    'csrf_token'=> $this->security->get_csrf_hash()
                   );
              }
              echo json_encode($array);
        }
    }
    public function payment() {
        $easebuzzObj = new Easebuzz(MERCHANT_KEY, SALT, ENV);
        $txnid = 'CHIT'.rand(1,100);
        $razor_amt = 500;
        $postData = array ( 
            "txnid" => $txnid, 
            "amount" => sprintf("%.2f", $razor_amt), 
            "firstname" =>"Demo", 
            "email" => "Syed@savithru.com", 
            "phone" => "9988776655", 
            "productinfo" => "For test", 
            "surl" =>base_url().'profile/success/', 
            "furl" => base_url().'profile/failure/',
            "udf1" =>$orderNo,
            "udf2" =>$this->uri->segment(3),
        );
        $easebuzzObj->initiatePaymentAPI($postData);  
    }
    public function success() {
       
        //echo "<pre>";print_r($_POST);exit;
        $easebuzzObj = new Easebuzz(MERCHANT_KEY, SALT, ENV);
        $result = $easebuzzObj->easebuzzResponse($_POST);
       // echo "<pre>";print_r($result);exit;
        $pdecode = json_decode($result,true);
         $pay_array = json_encode($pdecode['data']);
            if($pdecode['status'] == '1') {
                $val = 0;
                $payid = $pdecode['data']['easepayid'];
                $signature =$pdecode['data']['hash'];
                if ($payid == "")
                {
                        $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissable">Payment is pending. Please try again later</div>');
                        redirect( base_url().'profile' );
                }
                else{
                        if($pdecode['data']['status'] =='success') {
                                     $dbp = array(
                                        'proid' =>$pdecode['data']['udf2'],
                                    'amount'=>$pdecode['data']['amount'],
                                    'pay_array'=>$pay_array,
                                    'easebuzzid'=>$payid,
                                    'ehash'=>$signature,
                                    'status'=>1,
                                );
                                $payid = $this->master_db->insertRecord('payment_log',$dbp);
                                $invoice_no = 'CHITRAKALA'.$pdecode['data']['udf2'].rand(11111,99999);
                                $this->data['profile'] = $this->master_db->getRecords('profile',['pro_id'=>$pdecode['data']['udf2']],'*');
                                $this->data['profileentry'] = $this->master_db->getRecords('profile_entries',['proid'=>$pdecode['data']['udf2']],'*');
                                $this->data['category'] = $this->master_db->getRecords('category',['status'=>0],'*');
                                 $this->data['medium'] = $this->master_db->getRecords('medium',['status'=>0],'*');
                             $buff = $this->load->view('pdf',$this->data,true); 
                                 $filename = $invoice_no.'.pdf';
                                 $outfile = 'pdf/'.$pdecode['data']['udf2'].rand(1111,2222).'.pdf';
                                 $updatepart = "assets/".$outfile;
                                
                                $base_path = "./assets/".$outfile;
                                $mpdf = new \Mpdf\Mpdf([
                            'default_font_size' => 9,
                            'default_font' => 'Arial, Helvetica, sans-serif'
                        ]);
                                $mpdf->WriteHTML($buff);
                                $mpdf->Output($base_path, "F");
                                 $this->master_db->updateRecord('profile',['pdf'=>$updatepart],['pro_id'=>$pdecode['data']['udf2']]);
                                 $this->data['paymentlog'] = $this->master_db->getRecords('payment_log',['status !='=>4],'*');
                               $this->load->view('success',$this->data);
                               
                        }else if($pdecode['data']['status'] =='pending') {
                            $dbp = array(
                                        'proid' =>$pdecode['data']['udf2'],
                                    
                                    'status'=>2,
                                );
                                //print_r($dbp);exit;       
                                $payid = $this->master_db->insertRecord('payment_log',$dbp); 
                                echo "Pending"; 
                        }else if($pdecode['data']['status'] =='failure') {
                                $dbp = array(
                                        'proid' =>$pdecode['data']['udf2'],
                                    
                                    'status'=>-1,
                                );
                                //print_r($dbp);exit;       
                                $payid = $this->master_db->insertRecord('payment_log',$dbp);
                                                      echo "Failure";
                        }
                        else if($pdecode['data']['status'] == "userCancelled") {
                             $dbp = array(
                                        'proid' =>$pdecode['data']['udf2'],
                                    
                                    'status'=>-1,
                                );
                                //print_r($dbp);exit;       
                                $payid = $this->master_db->insertRecord('payment_log',$dbp);
                                echo 'User cancelled';
                        }
                }
            }
    }
    public function failure() {
        echo "Payment failed";
    }
    public function profilegallery() {
        $this->data['profile'] = $this->home_db->getprofilegallery();
        $this->data['category'] = $this->master_db->getRecords('category',['status'=>0],'*');
        $this->data['medium'] = $this->master_db->getRecords('medium',['status'=>0],'*');
        //echo $this->db->last_query();exit;
        $this->load->view('profilegallery',$this->data);
    }
    public function artists() {
        $id =  chitrakalaDcrypt($this->uri->segment(3));
        $this->data['profile'] = $this->master_db->getRecords('profile',['pro_id'=>$id],'name,emailid,about,photo,pro_id');
        $this->data['profileimg'] = $this->master_db->getRecords('profile_img',['proid'=>$id],'*');
        $this->load->view('profiledetails',$this->data);
    }
    public function search() {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
            //echo "<pre>";print_r($_POST);exit;
            $search = trim($this->input->post('search'));
            $sql  ="select p.name,p.pro_id as pid,pi.amount,pi.category,pi.medium from profile p left join profile_img pi on pi.proid = p.pro_id where p.status =0 and p.astatus =1 and p.name LIKE '%$search%' group by pi.proid";
            $this->data['search'] = $this->master_db->sqlExecute($sql);
            $html = $this->load->view('getalphasearch',$this->data,true);
            echo json_encode(['status'=>true,'msg'=>$html]);
        }
        //echo $this->db->last_query();
    }
    public function getSearcheddata() {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
            $name = $this->input->post('name');
            $category = $this->input->post('category');
            $medium = $this->input->post('medium');
            $price = $this->input->post('price');
            $where ="";
            if(!empty($name)) {
                $where .=" and p.name LIKE '%$name%'";
            }
            if(!empty($category)) {
                 $where .=" and pi.category LIKE '%$category%'";
            }
            if(!empty($medium)) {
                 $where .=" and pi.medium LIKE '%$medium%'";
            }

            if(!empty($price)) {
                $where .=" and pi.amount LIKE '%$price%'";
            }
            $sql  ="select p.name,p.pro_id as pid,pi.amount,pi.category,pi.medium from profile p left join profile_img pi on pi.proid = p.pro_id left join category c on c.cat_id = pi.category left join medium m on m.m_id = pi.medium where p.status =0 and p.astatus =1 ".$where."  group by pi.proid";
            $this->data['search'] = $this->master_db->sqlExecute($sql);
            //echo $this->db->last_query();exit;
            $html = $this->load->view('getalphasearch',$this->data,true);
            echo json_encode(['status'=>true,'msg'=>$html]);
        }
    }
    public function autocompletesearch() {
        $search = trim($this->input->post('search'));
        $sql  ="select p.name,p.pro_id as pid,pi.amount,pi.category,pi.medium from profile p left join profile_img pi on pi.proid = p.pro_id left join category c on c.cat_id = pi.category left join medium m on m.m_id = pi.medium where p.status =0 and p.astatus =1 and p.name LIKE '%$search%' or c.title LIKE '%$search%' or m.mtitle LIKE '%$search%'  group by pi.proid";
            $this->data['search'] = $this->master_db->sqlExecute($sql);
         $html = $this->load->view('getalphasearch',$this->data,true);
            echo json_encode(['status'=>true,'msg'=>$html]);
    }
    public function sendNotification() {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
             $this->form_validation->set_rules('fname','First Name','trim|required|regex_match[/^([a-zA-Z ])+$/i]|max_length[20]',['required'=>'First name is required','regex_match'=>'Invalid first name','max_length'=>'Maximum 20 characters are allowed']);
              $this->form_validation->set_rules('lname','Last Name','trim|required|regex_match[/^([a-zA-Z ])+$/i]|max_length[20]',['required'=>'Last name is required','regex_match'=>'Invalid last name','max_length'=>'Maximum 20 characters are allowed']);
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/]',['required'=>'Email is required','valid_email'=>'Enter valid email','regex_match'=>'Invalid email']);
            $this->form_validation->set_rules('phone','Mobile Number','trim|required|numeric|exact_length[10]',['numeric'=>'Only numeric values are allowed','exact_length'=>'Only 10 Numbers Are Allowed','required'=>'Mobile number is required']);
            $this->form_validation->set_rules('city','State','trim|required|regex_match[/^([a-zA-Z ])+$/i]',['required'=>'City is required','regex_match'=>'Invalid state']);
            $this->form_validation->set_rules('country','Country','trim|required|regex_match[/^([a-zA-Z ])+$/i]',['required'=>'Country is required','regex_match'=>'Invalid country']);
            $this->form_validation->set_rules('msg','Address ','trim|required|regex_match[/^([a-zA-Z0-9 ])+$/i]',['required'=>'Please enter message','regex_match'=>'Invalid message']);
            
              if($this->form_validation->run() ==TRUE) {
                $this->load->library('Mail');
                $fname = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('fname', true))));
                $lname = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('lname', true))));
                $email = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('email', true))));
                $phone = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('phone', true))));
                $country = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('country', true))));
                $city = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('city', true))));
                $msg = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('msg', true))));
               $proid = $this->input->post('proid');
               $profileid = $this->input->post('profileid');
               $pemailid = $this->input->post('pemailid');
               $proname = [];$emails = [];
               if($profileid ==1) {
                    if(is_array($proid) && !empty($proid)) {
                        $pid = implode(",", $proid);
                        $sql = "select CONCAT(name,' - ',emailid, ' - ',mphone) as name, emailid from profile where pro_id in(".$pid.")";
                        $getData = $this->master_db->sqlExecute($sql);
                        foreach ($getData as $key => $value) {
                            $proname[] = $value->name;
                            $emails[] = "$value->emailid";
                        }
                       }
               }

               else if($profileid ==2) {
                if(is_array($proid) && !empty($proid)) {
                        $pid = implode(",", $proid);
                        $sql = "select title from profile_img where imgid in(".$pid.")";
                        $getData = $this->master_db->sqlExecute($sql);
                        foreach ($getData as $key => $value) {
                            $proname[] = $value->title;
                        }
                       }
                       $sqla = "select CONCAT(name,' - ',emailid, ' - ',mphone) as name, emailid from profile where pro_id in(".$pemailid.")";
                        $getDatas = $this->master_db->sqlExecute($sqla);
                      //  echo $this->db->last_query();exit;
                        foreach ($getDatas as $key => $new) {
                            $proname[] = $new->name;
                            $emails[] = $new->emailid;
                        }
               }
               $sendName = implode(',',$proname);
               $emailId = implode(',',$emails);
               array_push($emails, "syed@savithru.com");
              // echo "<pre>";print_r($emails);exit;
               $this->data['names'] = $sendName;
               $this->data['postcontent'] = $_POST;
                $html = $this->load->view('mail',$this->data,true);
               $this->mail->sendMailto($emails,$html,'Karnataka Chitrakala Parishath (Chitrasanthe)');
               $array = ['status'=>true,'msg'=>'Mail sent successfully','url'=>base_url().'profile/thankyou'];
            }else {
                     $array = array(
                    'formerror'   => false,
                    'fname_error' => form_error('fname'),
                    'lname_error' => form_error('lname'),
                    'email_error' => form_error('email'),
                    'phone_error' => form_error('phone'),
                    'country_error' => form_error('country'),
                    'city_error' => form_error('city'),
                    'msg_error' => form_error('msg'),
                    'csrf_token'=> $this->security->get_csrf_hash()
                   );
              }
              echo json_encode($array);
        }
    }
    public function thankyou() {
        $this->load->view('thankyou',$this->data);
    }
}
?>