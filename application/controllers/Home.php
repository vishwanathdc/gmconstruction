<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
      $this->load->view('frontend/home');
    }

    public function about(){
      $this->load->view('frontend/about');
    }

    public function service(){
      $this->load->view('frontend/service');
    }

    public function gallery(){
      $this->load->view('frontend/gallery');
    }

    // public function contact(){
    //   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //   $name = ($this->input->post('name'))? $this->input->post('name') : '';
    //   $email = ($this->input->post('email'))? $this->input->post('email') : '';
    //   $phone = ($this->input->post('phone'))? $this->input->post('phone') : '';
    //   $subject = ($this->input->post('subject'))? $this->input->post('subject') : '';
    //   $message_body = ($this->input->post('message'))? $this->input->post('message') : '';
    //   // echo "fname = $fname, lname = $lname, email = $email, phone = $phone and message = $message";
    //
    //   $this->load->library('email');
    //   $config = array();
    //   $config['protocol'] = 'smtp';
    //   $config['smtp_host'] = 'smtp.gmail.com';
    //   $config['smtp_user'] = 'aishu121094@gmail.com';
    //   $config['smtp_pass'] = 'wejxhgdgrwrsroac';
    //   $config['smtp_port'] = 465;
    //   $this->email->initialize($config);
    //   $this->email->set_newline("\r\n");
    //   if((!empty($name)) && (!empty($email)) && (!empty($phone)) && (!empty($subject)) && (!empty($message_body))){
    //     $message = "Welcome,";
    //     $message = "Name = $name \r\n";
    //     $message .= "Email = $email \r\n";
    //     $message .= "Phone = $phone \r\n";
    //     $message .= "Subject = $subject \r\n";
    //     $message .= "Message = $message_body";
    //
    //     $this->email->from('aishu121094@gmail.com', 'x');
    //     $this->email->to('aishu121094@gmail.com');
    //     $this->email->subject($subject);
    //     $this->email->message($message);
    //
    //     if($this->email->send()){
    //       $this->session->set_flashdata('info', 1);
    //       $this->session->set_flashdata('message',  'You have Successfully sent a message.');
    //     //  redirect('contact');
    //      }else{
    //       // show_error($this->email->print_debugger());
    //       $this->session->set_flashdata('error', 1);
    //       $this->session->set_flashdata('message',  'Failed to send your message.');
    //       //redirect('home');
    //      }
    //   }else{
    //     $this->session->set_flashdata('error', 1);
    //     $this->session->set_flashdata('message',  'Failed to send your message.');
    //   //  redirect('contact');
    //   }
    // }
    // $this->load->view('frontend/contact');
    // }
}
