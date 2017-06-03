<?php

  namespace App\Src;

  use App\Src\Contract\MemberRepoInterface;
  use App\ModelMember;
  use App\ModelKendaraan;
  use Illuminate\Http\Request;

  class MemberService implements MemberServiceInterface
  {
    private $repo;
    public function __construct()
    {

    }
  }
