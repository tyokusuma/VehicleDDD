<?php
  namespace App\Src\Contract;


  interface KendaraanRepoInterface {
    public function getAll();
    public function create(array $attributes);
    public function delete($id);
    public function update($id, array $attributes);
  }
 ?>
