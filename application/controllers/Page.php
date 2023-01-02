<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Page extends CI_Controller
{
    public function index()
    {
        $data['meta'] = [
            'title' => 'Berita',
        ];
        $this->load->view('home', $data);
    }
    public function about()
    {
        $data['meta'] = [
            'title' => 'About Berita',
        ];
        $this->load->view('about', $data);
    }
    public function contact()
    {
        $data['meta'] = [
            'title' => 'Contact Us',
        ];
        if ($this->input->method() === 'post') {
            // print_r($this->input->post());
            $this->load->model('feedbackmodel');

            $feedback = [
                'id' => uniqid('', true),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')
            ];

            $feedbackSaved = $this->feedbackmodel->insert($feedback);

            if ($feedbackSaved) {
                return $this->load->view('contact_thanks');
            }
        }

        $this->load->view('contact', $data);
    }
}
