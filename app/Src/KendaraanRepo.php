<?php

  namespace App\Src;

  use App\Src\Contract\KendaraanRepoInterface;
  use App\ModelKendaraan;

  class KendaraanRepo implements KendaraanRepoInterface
  {
    private $model;
    public function __construct(ModelKendaraan $model)
    {
      $this->model = $model;
    }
    public function getAll(){
      return $this->model->all();
    }
    public function create(array $attributes){
      return $this->model->create($attributes);
    }
    public function delete($id)
    {
      $this->getById($id)->delete();
      return true;
    }
    public function update($id, array $attributes)
    {
      $value = $this->model->findOrFail($id);
      $value->update($attributes);
      return $value;
    }
  }
