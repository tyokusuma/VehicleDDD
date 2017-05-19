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
    public function getById($id)
    {
      return $this->model->find($id);
    }
    public function create(Request $request){
      $value = $request->all();
      return ModelKendaraan::create($value);
    }
    public function destroy($id)
    {
      $this->find($id)->delete();
      return true;
    }
    public function update($id, array $attributes)
    {
      $value = $this->model->findOrFail($id);
      $value->update($attributes);
      return $value;
    }
  }
