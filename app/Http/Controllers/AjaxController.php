<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
  function index()
  {
    return view('admin.abono_capital');
  }


  function fetch(Request $request)
  {

   
    $query = trim($request->get('query'));
    $data = DB::table('prendas')
      ->where('nombre_prenda', 'LIKE', "%{$query}%")->orWhere('id_prendas', 'LIKE', "%{$query}%")->take(1)
      ->get();

    return Response()->json($data);
    /*  $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">'; 
 
 
     foreach ($data as $row) {
        $output .= '
              
              <li><a class="dropdown-item" href="#">' . $row->nombre_prenda . '</a></li>
              ';
      }
      $output .= '</ul>';
      echo $output; 
    }  */
  }
}
