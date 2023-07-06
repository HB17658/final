<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Emp;

class PrController extends Controller
{
    public function search(Request $r)
    {
        $id = $r->id;
        $password = $r->password;
        //requestオブジェクトからsearchwordを抽出
        $searchword = $r->searchword;
 
        if (isset($id) && isset($password)) {

            $r->session()->put('id', $id);
            $r->session()->put('password', $password);
            //ログインの認証
            $id = Emp::where('emp_no','=',$id);
            $pass = Emp::where('pass','=',$password);
            if($id->count() ===0&&$pass->count() ===0 ){
                return redirect()->back();
            }else{
            $book = Book::where('title','LIKE', "%%")
            ->orWhere('author_name', 'LIKE', "%%")
            ->get();
            $data = [
            'results'=>$book
            ];
            return view('new/result',$data);}
        
        }

        $id = $r->session()->get('id');
        $password = $r->session()->get('password');

        $book = Book::where('title','LIKE', "%$searchword%")
        ->orWhere('author_name', 'LIKE', "%$searchword%")
        ->get();
        $data = [
        'searchData'=>$book
        ];
        if(!$book->isEmpty()){
            
            return view('new/result', $data);
            
        }else{
            $msg = "一致したデータがありませんでした。";
            return view('new/result',compact('msg'));
        }
        
    
    }

    public function logout(Request $r)
    {
        $r->request->remove('id');
        $r->request->remove('password');
        return view('new/login');
    }
    // public function searchBook(Request $req)
    // {
    //     $word = $req->searchword;

    //     return view('new/result',$data);
    // }
}
