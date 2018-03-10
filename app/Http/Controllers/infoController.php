<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Take;
use App\Modul;
use App\Login;

class infoController extends Controller
{
  protected $respose;

  public function __construct(Response $response)
  {
      $this->response = $response;
  }
  public function info(){
      $jmlModul=Modul::sum('jumlah');
      $jmlUser=Login::count();
      $jmlTake=Take::count();
      return ['status'=>'ok',
      'jumlah_modul'=>$jmlModul,
      'jumlah_user'=>$jmlUser,
      'jumlah_pengambilan'=>$jmlTake
    ];
  }
}
