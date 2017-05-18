<?php
  namespace App\Src\Contract;

  interface MemberRepoInterface {
    public function getAll();
    public function getById($id);
    public function update($id, array $attributes);
    public function delete($id);
  }
