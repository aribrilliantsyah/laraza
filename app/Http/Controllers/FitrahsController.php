<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fitrah;
use App\Orang;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\Ketetapan;
use DB;
use Illuminate\Support\Facades\Auth;
use Alert;
class FitrahsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $htmlBuilder)
    {


        //
    if ($request->ajax()) {

            $fitrahs = Fitrah::where('user_id', Auth::user()->id)->with('orang');

            return Datatables::of($fitrahs)->addColumn('action', function($fitrah){
            return view('datatable._action',[
                'model'     => $fitrah,
                'form_url'  => route('fitrah.destroy', $fitrah->id),
                'edit_url'  => route('fitrah.edit', $fitrah->id),
                'confirm_message'=>'Yakin mau menghapus  ?'
            
                ]);
        })->make(true);
    }

    $html = $htmlBuilder
            ->addColumn(['data' => 'id','name'=>'id','title'=>'ID','visible'=>false])
            ->addColumn(['data' => 'orang.nama', 'name'=>'orang.nama', 'title'=>'Nama'])
            ->addColumn(['data' => 'orang.alamat', 'name'=>'orang.alamat','title'=>'Alamat'])
            ->addColumn(['data' => 'orang.jk', 'name'=>'orang.jk','title'=>'Jenis Kelamin'])
            ->addColumn(['data' => 'jenis_zakat', 'name'=>'jenis_zakat','title'=>'Jenis Zakat'])
            ->addColumn(['data' => 'created_at','name'=>'created_at','title'=>'Tgl Zakat'])
            ->addColumn(['data' =>'action', 'name'=>'action', 'title'=>'opsi', 'orderable'=>false, 'searchable'=>false]);
       
    $uang=Fitrah::where('user_id', Auth::user()->id)->where('jenis_zakat','uang')->count();
    $beras=Fitrah::where('user_id', Auth::user()->id)->where('jenis_zakat','beras')->count();
    
    $kb=Ketetapan::where('jenis','beras')->max('ketetapan');
    $ku=Ketetapan::where('jenis','uang')->max('ketetapan');
    $hasilu=$uang*$ku;
    $hasilb=$beras*$kb;
    $c=number_format($hasilu,2,',','.');
    // dd($uang);
    $ketetapan=Ketetapan::get();
    $d=number_format($ku,2,',','.');
    $e=$kb. ".Kg";
        return view('fitrah.index')->with(compact('html','hasilb','c','d','e','beras','uang','ketetapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'zakat' => 'required'
            ]);
        $orang = Orang::create([
          'nama'   => $request['nama'],
          'alamat' => $request['alamat'],
          'jk'     => $request['jk']
           ]);

        $fitrah = new Fitrah;
        $fitrah->id = $orang->id;
        $fitrah->user_id = Auth::user()->id;
        $fitrah->jenis_zakat = $request->zakat;
        $fitrah->orang_id = $orang->id;
        $fitrah->save();

        Alert::success('Tambah Data Berhasil', 'Selamat !')->persistent("Close");

        return redirect('pengurus/fitrah');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $fitrah=Fitrah::find($id);
        return view('fitrah.edit')->with(compact('fitrah'));
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
        
        $fitrah=Fitrah::find($id);
        Fitrah::destroy($id);
        Orang::destroy($fitrah->orang_id);
        Alert::success('Hapus Data Berhasil', 'Terhapus !')->persistent("Close");

        return redirect('pengurus/fitrah');
    }
    public function editket($id)
    {
        //
        $ketetapan=Ketetapan::find($id);
        return view('plugin.edit')->with(compact('ketetapan'));
    }

    public function updateket(Request $request, $id)
    {
        //
        $this->validate($request, 
        ['ketetapan' => 'required|min:2.5']);
        
        $panel= Ketetapan::find($id);
        $k= $panel->jenis;
        $panel->jenis = $k;
        $panel->ketetapan = $request['ketetapan'];
        $panel->save();
        
        return redirect()->route('fitrah.index');

    }
}
