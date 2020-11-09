<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\AnimalsModel;


class Animal extends ResourceController
{
  use ResponseTrait;

  // all users
  public function index($id = null)
  {
    $model = new AnimalsModel();
    if ($id) {
      $data = $model->where('id', $id)->first();
      if ($data) {
        return $this->respond($data);
      } else {
        return $this->failNotFound('No animal found');
      }
    }
    $data['animal'] = $model->orderBy('id', 'ASC')->findAll();
    return $this->respond($data);
  }

  // create
  public function create()
  {
    $model = new AnimalsModel();
    $data = [
      'name' => $this->request->getVar('name'),
      'type'  => $this->request->getVar('type'),
      'birth_date' => $this->request->getVar('birth_date'),
      'chip_number'  => $this->request->getVar('chip_number'),
    ];
    $model->insert($data);
    $response = [
      'status'   => 201,
      'error'    => null,
      'messages' => [
        'success' => 'Animal created successfully'
      ]
    ];
    return $this->respondCreated($response);
  }

  // single user
  public function show($id = null)
  {
    $model = new AnimalsModel();
    $data = $model->where('id', $id)->first();
    if ($data) {
      return $this->respond($data);
    } else {
      return $this->failNotFound('No animal found');
    }
  }

  // update
  public function update($id = null)
  {
    $model = new AnimalsModel();
    $id = $this->request->getVar('id');
    // TODO: animals update logic
    $data = [
      // 'name' => $this->request->getVar('name'),
      // 'type'  => $this->request->getVar('type'),
      // 'birth_date' => $this->request->getVar('birth_date'),
      'chip_number'  => $this->request->getVar('chip_number'),
      'female' => $this->request->getVar('female'),
    ];

    $model->update($id, $data);
    $response = [
      'status'   => 200,
      'error'    => null,
      'messages' => [
        'success' => 'Animal updated successfully'
      ]
    ];
    return $this->respond($response);
  }

  // delete
  public function delete($id = null)
  {
    $model = new AnimalsModel();
    $data = $model->where('id', $id)->delete($id);
    if ($data) {
      $model->delete($id);
      $response = [
        'status'   => 200,
        'error'    => null,
        'messages' => [
          'success' => 'Employee successfully deleted'
        ]
      ];
      return $this->respondDeleted($response);
    } else {
      return $this->failNotFound('No employee found');
    }
  }
}