<?php
  namespace App\Src\Contract;

  interface TransactionRepoInterface {
    public function getAll();
    public function create(array $attributes);
    public function delete($id);
    public function update($id, array $attributes);
    public function getById($id);
  }
