<?php

  namespace App\Src;

  use App\Src\Contract\MemberRepoInterface;
  use App\ModelMember;

  class MemberService implements MemberServiceInterface
  {

  }
  <?php

    // namespace App\Src;
    //
    // use App\Src\Contract\KendaraanRepoInterface;
    // use App\ModelKendaraan;
    // use Illuminate\Http\Request;
    //
    // class KendaraanRepo implements KendaraanRepoInterface
    // {
    //   private $model;
    //   public function __construct(ModelKendaraan $model)
    //   {
    //     $this->model = $model;
    //   }
    //   public function getAll(){
    //     $result = $this->model->all();
    //
    //     return response()->json([
    //       'status'=>'success',
    //       'DATABASE'=>$result->toArray(),
    //     ]);
    //   }
    //   public function save(Request $request){
    //     $asus->name=$request->name;
    //     $asus->addres=$request->addres;
    //     $asus->gender=$request->gender;
    //     $asus->ages=$request->ages;
    //     $asus->save();
    //
    //     return response()->json([
    //       'mesage' => 'data has been posted!',
    //       'Database'=> $asus,
    //     ]);
    //   }
    //   public function delete($id)
    //   {
    //     $delete = $this->model;
    //     $result = $this->model->find($id);
    //     $result->delete();
    //
    //     return response()->json([
    //       'status'=> 'succes',
    //     ]);
    //   }
    // }
