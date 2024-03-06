<?php

namespace App\Controllers;

use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guests extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest' => $model->getGuest(),
            'title' => 'Guest archive',
        ];

        return view('templates/header', $data)
            . view('guests/index')
            . view('templates/footer');
    }

    public function show($name = null)
    {
        $model = model(GuestModel::class);

        $data['name'] = $name;
        $data['guest'] = $model->getGuest($name);


        // if (empty($data['guests'])) {
        //     throw new PageNotFoundException('Cannot find the guest item: ' . $name);
        // }
        // This to fix, this condition is giving false positives

        $data['title'] = $data['guest']['name'];
        // this is just for giving the $title var to header

        return view('templates/header', $data)
            . view('guests/view')
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a guests item'])
            . view('guests/create')
            . view('templates/footer');
     }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'email', 'website', 'comment', 'gender']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        // Original Code: $post = $this->validator->getValidated();
        // but looks like this does not return other fields like website, comment, gender, only those that are validated

        // so i just take the original
        $post = $this->request->getPost(['name', 'email', 'website', 'comment', 'gender']);
    
        $model = model(GuestModel::class);

        $model->save([
            'name'  => url_title($post['name'], '-', true),
            'email' => $post['email'],
            'website'  => $post['website'],
            'comment'  => $post['comment'],
            'gender' => $post['gender']
        ]);

        return view('templates/header', ['title' => 'Create a guests item'])
            . view('guests/success')
            . view('templates/footer');
    }
}