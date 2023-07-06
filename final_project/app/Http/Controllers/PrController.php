<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Emp;

use Illuminate\Support\Facades\Session;

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
            $dbid = Emp::where('emp_no','=',$id);
            $dbpass = Emp::where('pass','=',$password);
            if($dbid->count() ===0&&$dbpass->count() ===0 ){
                $r->session()->forget('id');
                $r->session()->forget('password');
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

        if(empty($id)&&empty($password)){
            $r->session()->forget('id');
            $r->session()->forget('password');
            return redirect('/');
        }

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
        $r->session()->forget('id');
        $r->session()->forget('password');
        return redirect('/')->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
    }
    
    public function info(Request $r){
        
        $isbn = $r->query('name');
        $book = Book::where('ISBN','=', "$isbn")
        ->get();
        $data = [
            'result'=>$book
        ];

        dd($isbn);
        return view('new/book',$data);
    }


}
