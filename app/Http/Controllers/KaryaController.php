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
        
        $dataKarya = Karya::with('karyaGenre')->paginate($maxKarya);

        $pages = $maxKarya * ($dataKarya->currentPage()-1);

        return view('dashboard',compact('dataKarya','pages'));
    }

    public function search(Request $req) 
    {
        // dd($req);
        $maxKarya = 12;
        if ( $req->search_karya == null
            && $req->search_filter == '-') {

            $dataKarya = Karya::with('karyaGenre')->paginate($maxKarya);
            
        } elseif ($req->search_karya != null
                && $req->search_filter == '-') {

            $dataKarya = Karya::where('title','like',"%".$req->search_karya."%")->paginate($maxKarya);
            

        } elseif ($req->search_karya == null
                && $req->search_filter != '-') {

            if ($req->search_filter == 'az') {
                $dataKarya = Karya::orderBy('title','asc')->paginate($maxKarya);
            } elseif ($req->search_filter == 'za') {
                $dataKarya = Karya::orderBy('title','desc')->paginate($maxKarya);
            } else {
                $dataKarya = Karya::orderBy('id','desc')->paginate($maxKarya);
            }

        } else {
            if ($req->search_filter == 'az') {
                $dataKarya = Karya::where('title','like',"%".$req->search_karya."%")->orderBy('title','asc')->paginate($maxKarya);
            } elseif ($req->search_filter == 'za') {
                $dataKarya = Karya::where('title','like',"%".$req->search_karya."%")->orderBy('title','desc')->paginate($maxKarya);
            } else {
                $dataKarya = Karya::where('title','like',"%".$req->search_karya."%")->orderBy('id','desc')->paginate($maxKarya);
            }

        }

        $pages = $maxKarya * ($dataKarya->currentPage()-1);
        return view('dashboard',compact('dataKarya','pages'));
        
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

            if ($req->link_prompt == null) {
                $karya->link_prompt = '-';
            } else {
                $karya->link_prompt = $req->link_prompt;
            }

            $karya->link_karya = $req->link_karya;
            $karya->reader_target = $req->reader_target;
            $karya->language = $req->language;
            $karya->status = $req->status;

            $thumbnail = $req->thumbnail;
            $imageFile = time().'.'.$thumbnail->getClientOriginalExtension();
            
            Image::make($thumbnail->getRealPath())->resize(1280,720)->save('asset/tmb/'.$imageFile);
            

            $karya->thumbnail = 'asset/tmb/'.$imageFile;

            $user_id = Auth::id();

            $karya->author_id = $user_id;

            $karya->save();
            $karya_id = $karya['id'];

        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        try {
            for ( $i=0; $i < count($req->genre); $i++) { 
                $genre = new KaryaGenre;
                $genre->karya_id = $karya_id;
                $queryGenre = DB::select('select id from genre where name = ?', [$req->genre[$i]]);

                $genre->genre_id = $queryGenre[0]->id;
                $genre->save();
            }
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        DB::commit();
        return redirect('/dashboard/manage')->with('msg_success_store','Selamat ! Karyamu berhasil di-publish 🤩');
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

        $dataKarya = Karya::with('karyaGenre','user')->where('author_id',$user_id)->paginate($maxKarya);

        return view('manage', compact('dataKarya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karya = Karya::with('karyaGenre')->find($id);
        $genreKarya = KaryaGenre::all();
        // dd($genreKarya[1]->genre->name);
        $karya_id = $id;
        // dd($karya);
        return view('edit', compact('karya','genreKarya','karya_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'title' => 'required|string',
            'link_karya' => 'required|string',
            'reader_target' => 'required',
            'language' => 'required',
            'status' => 'required',
            'genre' => 'required',
        ]);

        // Ganti Info Karya tanpa Genre
        DB::beginTransaction();
        try {

            $karya = Karya::find($id);
            $karya->title = $req->title;
            $karya->link_prompt = $req->link_prompt;
            $karya->link_karya = $req->link_karya;
            $karya->reader_target = $req->reader_target;
            $karya->language = $req->language;
            $karya->status = $req->status;

            if ($req->thumbnail != null) {
                $thumbnail = $req->thumbnail;
                $imageFile = time().'.'.$thumbnail->getClientOriginalExtension();
                Image::make($thumbnail->getRealPath())->resize(1280,720)->save('asset/tmb/'.$imageFile);
                $karya->thumbnail = 'asset/tmb/'.$imageFile;
            }

            $karya->update();

        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
        
        $karya_id = $id;

        // Ganti Genre Karya
        try {
            
            $queryKaryaGenre = KaryaGenre::with('genre')->get();
            
            // Kalau ada genre baru ditambahkan
            $name_nowGenreKarya = array();
            foreach ($queryKaryaGenre as $kg ) {
                if ($kg->karya_id == $karya_id && $kg->genre->id == $kg->genre_id) {
                    array_push($name_nowGenreKarya,$kg->genre->name);
                }
            }
            
            for ( $i=0 ; $i < count($req->genre); $i++) { 
                if ( !in_array($req->genre[$i],$name_nowGenreKarya) ) {
                    $genre = new KaryaGenre;

                    $genre->karya_id = $karya_id;

                    $queryGenre = Genre::where('name','=',$req->genre[$i])->get();
    
                    $genre->genre_id = $queryGenre[0]->id;
                    
                    $genre->save();
                }
            }  
            
            // Kalau mau hapus genre yang ada
            $updatedKaryaGenre = KaryaGenre::with('genre')->get();

            $name_updatedKaryaGenre = array();

            // Ngambil genre baru yang udah terupdate
            foreach ($updatedKaryaGenre as $ukg ) {
                if ($ukg->karya_id == $id && $ukg->genre->id == $ukg->genre_id) {
                    array_push($name_updatedKaryaGenre,$ukg->genre->name);
                }
            }
            
            for ( $i=0 ; $i < count($name_updatedKaryaGenre); $i++) { 
                //  Cek apakah genre di query terupdate ada gak di request
                if ( !in_array($name_updatedKaryaGenre[$i],$req->genre) ) {

                    // Ambil query genre yang lama
                    $query_willDeleted_genreKarya = KaryaGenre::with('genre')->get();

                    
                    foreach ($query_willDeleted_genreKarya as $qwd ) {

                        // kalo nama genre yang lama sama dengan nama genre yang udah diupdate
                        if ($qwd->genre->name == $name_updatedKaryaGenre[$i] && $qwd->karya_id == $karya_id) {
                            $id_deleted_genreKarya = $qwd->id;
                        }
                    }

                    $deleted_genre = KaryaGenre::find($id_deleted_genreKarya);

                    $deleted_genre->delete();
                }
            }  
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        DB::commit();
        return redirect ('/dashboard/manage')->with('msg_success_update', 'Yeee ! Karyamu berhasil di-update 🤩');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karya = Karya::find($id);
        $karya->delete();
        return redirect ('/dashboard/manage')->with('msg_success_remove', 'Sayang banget, Karyamu dihapus 😥');
    }
}
