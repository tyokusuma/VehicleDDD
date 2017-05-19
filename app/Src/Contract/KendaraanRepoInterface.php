<?php
  namespace App\Src\Contract;

  use Illuminate\Http\Request;


  interface KendaraanRepoInterface {
    public function getAll();
    public function getById($id);
    public function create(Request $request);
    public function destroy($id);
    public function update($id, array $attributes);
  }
 ?>
