<?php

namespace App\Controllers;

use App\Models\Article;

class Create extends BaseController
{
    public function index(): string
    {
        $data = [
            'validate' => \Config\Services::validation(),
        ];

        return view('create', $data);
    }

    public function post()
    {
        // helper('form');

        $data = $this->request->getPost(['title', 'content', 'image']);

        if (! $this->validateData($data, [
            'title' => 'required|max_length[255]|min_length[3]',
            'content'  => 'required|max_length[5000]|min_length[3]',
            'image' => 'uploaded[image]|max_size[image,1024]',
        ])) {
            // The validation fails, so returns the form.
            return $this->index();

            // return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $post = $this->validator->getValidated();
        $image = $this->request->getFile('image');

        $imageName = $image->getRandomName();
        $image->move('uploads', $imageName);

        $post['image'] = $imageName;
        $post['slug'] = url_title($post['title'], '-', true); 

        $model = model(Article::class); 

        $model->save($post);

        return redirect()->route('list_articles');
        // return redirect()->to('list-articles', null, 'refresh');
    }

    public function hapus($id) {

        $model = model(Article::class);

        $model->delete($id);

        return redirect()->route('list_articles');
    }
}
