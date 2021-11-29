<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karya;
use App\Genre;
use App\KaryaGenre;
use App\User;
use App\UserKarya;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class KaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $maxKarya = 12;
        $dataKarya = Karya::orderBy('id','desc')->paginate($maxKarya);
        $genreKarya = KaryaGenre::all();

        $pages = $maxKarya * ($dataKarya->currentPage()-1);
        return view('dashboard',compact('dataKarya','pages','genreKarya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //dd($req);
        $this->validate($req, [
            'title' => 'required|string',
            'link_prompt' => 'required|string',
            'link_karya' => 'required|string',
            'reader_target' => 'required',
            'language' => 'required',
            'status' => 'required',
            'genre' => 'required',
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        DB::beginTransaction();
        try {
            $karya = new Karya;
            $karya->title = $req->title;
            $karya->link_prompt = $req->link_prompt;
            $karya->link_karya = $req->link_karya;
            $karya->reader_target = $req->reader_target;
            $karya->language = $req->language;
            $karya->status = $req->status;

            $thumbnail = $req->thumbnail;
            $imageFile = time().'.'.$thumbnail->getClientOriginalExtension();
            
            Image::make($thumbnail->getRealPath())->save('asset/tmb/'.$imageFile);
            
            // $file = $req->file('thumbnail');
            // $folder_tujuan = 'thumbnail';
            // $filename = time() . '_' . $file->getClientOriginalName();
            // $karya->thumbnail = $file->move($folder_tujuan, $filename);

            // Image::make($thumbnail)->resize(700,525)->save('asset/tmb/'.$imageFile);
            // $thumbnail->move('thumbnail\\'.$imageFile);

            $karya->thumbnail = 'asset/tmb/'.$imageFile;

            // dd($req);

            $user_id = Auth::id();
            $username = User::find($user_id);

            $karya->author = $username->name;

            $karya->save();
            $karya_id = $karya['id'];
            // dd($karya);

        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        try {
            for ( $i=0; $i < count($req->genre); $i++) { 
                $genre = new KaryaGenre;
                $genre->karya_id = $karya_id;
                $queryGenre = DB::select('select id from genre where name = ?', [$req->genre[$i]]);
                // dd($queryGenre[0]->id);

                $genre->genre_id = $queryGenre[0]->id;
                $genre->save();
                // dd($genre);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        try {
            $user_id = Auth::id();
            
            $userKarya = new UserKarya;
            
            $userKarya->user_id = $user_id;
            $userKarya->karya_id = $karya->id;
            
            $userKarya->save();
            // dd($userKarya);

        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        DB::commit();
        return redirect('/dashboard')->with('msg_success_store','Selamat ! Karyamu berhasil di-publish 🤩');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $maxKarya = 5;
        $user_id = Auth::id();
        $dataKarya = UserKarya::all();
        $genreKarya = KaryaGenre::all();
        // dd($dataKarya);
        return view('manage', compact('dataKarya','user_id','genreKarya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
