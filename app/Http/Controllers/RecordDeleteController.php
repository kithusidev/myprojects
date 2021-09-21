<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecordDeleteController extends Controller
{
    public function index(){
        $members = DB :: select('select * from members');
        return view(redord_delete_view,['users'=>$users]);
    }
    public function destroy($id){
        DB::delete('delete from members where id=?',[$id]);
        echo "records deleted successfully.<br>";
       
        return redirect('view');
    }
}
