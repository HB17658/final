<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Emp;
use GuzzleHttp\Client as GuzzleClient;

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

        return view('new/book',$data);
    }

    public function store(Request $req)
    {
        //入力されたISBN情報
        $value = $req->ISBN;
        // 既存の書籍を検索
        $existingBook = Book::where('ISBN', $value)->first();
        if ($existingBook) {
            //$manage = new Book();
            //$manage->status_id = 1;
            //$manage->book_id = $existingBook->id;
            //$manage->save();
            $message = "入力されたISBNの本はすでに登録されています";
            //$data = [
            //    'message'=>$message
            //];
            return view('new/store');
        }
        //Bookインスタンスの作成
        $book = new Book();
        $guzzle_client = new GuzzleClient();
        $proxy_host = '172.16.71.1';
        $proxy_port = '3128';
        $proxy_user = 'j701u01';
        $proxy_pass = 'Puti1224';
        $proxy_url = "http://{$proxy_user}:{$proxy_pass}@{$proxy_host}:{$proxy_port}";
        $base_url = 'https://api.openbd.jp/v1/get?isbn=';
        $url = $base_url . $value;
        $response = $guzzle_client->request('GET', $url, ['proxy' => $proxy_url]);
        $result = $response->getBody();
        $json_data = json_decode($result, true);
        // ...
        // JSONデータを変数に格納
        $get_summary = $json_data[0]['summary'];
        $get_content = '';
        if (isset($json_data[0]['onix']['CollateralDetail']['TextContent'][0]['Text'])) {
            $get_content = $json_data[0]['onix']['CollateralDetail']['TextContent'][0]['Text'];
        }
        if (strlen($get_content) > 255) {
            $get_content = substr($get_content, 0, 250) . '...';
        }
        $isbn = $get_summary['isbn'];
        $book_name = $get_summary['title'];
        $author = $get_summary['author'];
        $image_url = $get_summary['cover'];
        if($image_url == ""){
            $image_url = "image/nonomura.jpg";
        }
        if($get_content == ""){
            $get_content = "-------------------------------------------";
        }
        $make_year = $get_summary['pubdate'];
        $make_year = intval(str_replace('-', '', $get_summary['pubdate']));
        $publisher = $get_summary['publisher'];
        $price = isset($get_summary['price']) ? $get_summary['price'] : null;
        //ここからJSONデータからDBに登録
        $book->title = $book_name;
        $book->company = $publisher;
        $book->author_name = $author;
        //$book->book_count = 0;
        //$book->price = is_null($price) ? 0 : $price;
        //$book->img = "";
        $book->image = $image_url;
        $make_year = substr($make_year, 0, 4) . '/' . substr($make_year, 4, 2) . '/' . substr($make_year, 6, 2);
        $book->year = $make_year;
        $get_content = htmlspecialchars($get_content, ENT_QUOTES, 'UTF-8');
        if($get_content == ""){
            $get_content = "概要を取得できませんでした";
        }
        $book->info = $get_content;

        $book->ISBN = $isbn;
        //dd($image_url,$make_year,$get_content,$book_name,$publisher);
        $book->save();
        $data = [
            '書籍名'=>$book->booktitle,
            '出版社'=>$book->publisher,
            '著者'=>$book->author,
            '値段'=>$book->price,
            '出版日'=>$book->publising_year,
            'あらすじ'=>$book->text_content,
            'ISBN'=>$book->ISBN
        ];
        $author= $book->author;
        //ここからManageテーブルに登録
        // $manage = new Book();
        // $manage->status_id = 1;
        // $manage->book_id = $book->id;
        // $manage->save();
        return view('new/store');
    }


}
