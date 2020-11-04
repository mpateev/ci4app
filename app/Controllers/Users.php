<?php namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'CI4',
        ];
        helper(['form']);
        echo view('templates/header', $data);
        return view('login');
        echo view('templates/footer', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'CI4',
        ];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
          // TODO: let's do validation here
          $rules = [
            'firstname' => 'required|min_length[3]|max_length[20]',
            'lastname' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
            'password_confirm' => 'matches[password]',
          ];

          if ( !$this->validate($rules)) {
            $data['validation'] = $this->validator;
          }
          // TODO: store user in the database
        }

        echo view('templates/header', $data);
        return view('register', $data);
        echo view('templates/footer', $data);
    }

    //--------------------------------------------------------------------

}