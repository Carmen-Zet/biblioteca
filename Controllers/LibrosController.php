<?php
namespace App\Controllers;

use App\Models\LibroModel;

class LibrosController extends BaseController
{
    public function index()
    {
        \$model = new LibroModel();
        \$data['libros'] = \$model->findAll();
        return view('libros/index', \$data);
    }

    public function create()
    {
        return view('libros/create');
    }

    public function store()
    {
        \$model = new LibroModel();
        \$data = [
            'titulo' => \$this->request->getPost('titulo'),
            'fecha_publicacion' => \$this->request->getPost('fecha_publicacion'),
            'precio' => \$this->request->getPost('precio'),
            'editorial_id' => \$this->request->getPost('editorial_id'),
            'isbn' => \$this->request->getPost('isbn')
        ];
        \$model->insert(\$data);
        return redirect()->to('/libros');
    }

    public function edit(\$id)
    {
        \$model = new LibroModel();
        \$data['libro'] = \$model->find(\$id);
        return view('libros/edit', \$data);
    }

    public function update(\$id)
    {
        \$model = new LibroModel();
        \$data = [
            'titulo' => \$this->request->getPost('titulo'),
            'fecha_publicacion' => \$this->request->getPost('fecha_publicacion'),
            'precio' => \$this->request->getPost('precio'),
            'editorial_id' => \$this->request->getPost('editorial_id'),
            'isbn' => \$this->request->getPost('isbn')
        ];
        \$model->update(\$id, \$data);
        return redirect()->to('/libros');
    }

    public function delete(\$id)
    {
        \$model = new LibroModel();
        \$model->delete(\$id);
        return redirect()->to('/libros');
    }
}
?>
