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
      public function show($id)
      {
        $find = $this->repo;
        $find->getById($id);

        return response()->json([
          'status'=>'success',
          'DATABASE'=>$find,
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
      $simpan =$this->repo->create($request);
      return response()->json([
        'status'=>'success',
        'Database'=>$simpan->toArray(),
      ]);
      }
  }
