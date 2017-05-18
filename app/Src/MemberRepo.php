<?php

  namespace App\Src;

  use App\Src\Contract\MemberRepoInterface;
  use App\ModelMember;

  class MemberRepo implements MemberRepoInterface
  {
    private $model;
    public function __construct(ModelMember $model)
    {
      $this->model = $model;
    }

    public function getAll(){
      return $this->model->all();
    }

    public function getById($id){
      return $this->model->getById($id);
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
