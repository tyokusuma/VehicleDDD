<?php
  namespace App\Src\Contract;


  interface KendaraanRepoInterface {
    public function getAll();
    public function getById($id);
    public function create();
    public function destroy($id);
    public function update($id, array $attributes);
  }
 ?>
