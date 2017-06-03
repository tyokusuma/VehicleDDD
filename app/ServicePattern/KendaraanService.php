<?php

  namespace App\ServicePattern;

  use App\Src\Contract\KendaraanRepoInterface;
  use Illuminate\Http\Request;

  class KendaraanService
  {
    private $repo;
    public function __construct(KendaraanRepoInterface $repo)
    {
      $this->repo = $repo;
    }

      public function index(){
        $result = $this->repo->getAll();

        return response()->json([
          'status'=>'success',
          'DATABASE'=>$result->toArray(),
        ]);
      }
      public function byId($id)
      {
        $find = $this->repo->getById($id);

        return response()->json([
          'status'=>'success',
          'DATABASE'=>$find->toArray(),
        ]);
      }
      public function destroy($id)
      {
        $delete = $this->repo;
        $result = $delete->getById($id);
        $result->destroy($id);

        return response()->json([
          'status'=> 'succes',
        ]);
      }
      public function store(Request $request)
      {
      $simpan =$this->repo;
      $simpan->name=$request->merk_kenderaan;
      $simpan->addres=$request->warna_kenderaan;
      $simpan->gender=$request->stok_kendaraan;
      $simpan->ages=$request->tahun_produksi;
      $simpan->create();

      return response()->json([
        'status'=>'success',
        'Database'=>$simpan
      ]);

      }
  }
