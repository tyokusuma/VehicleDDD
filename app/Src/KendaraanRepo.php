<?php

  namespace App\Src;

  use App\Src\Contract\KendaraanRepoInterface;
  use App\ModelKendaraan;
  use Illuminate\Http\Request;

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

    public function getById($id) {
      return ModelKendaraan::find($id);

    }
    public function create(Request $request){
      $value =$request->all();
      return ModelKendaraan::create($value);
    }

    public function delete($id)
    {
      return $this->model->find($id)->delete();
    }

    public function update($id, Request $request)
    {
      $value = $request->all();
      ModelKendaraan::find($id)->update($value);
      return ModelKendaraan::find($id);
    }
  }
