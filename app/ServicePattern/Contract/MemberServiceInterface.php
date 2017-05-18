<?php
  namespace App\Src\Contract;


  interface MemberServiceInterface {
    public function create(array $attributes);
    public function delete($id);
  }
?>
