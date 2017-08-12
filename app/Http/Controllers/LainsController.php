<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lain;
use App\Orang;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Facades\Auth;
use Alert;

class LainsController extends Controller
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
            $amals = lain::where('user_id', Auth::user()->id)->with('orang');
            return Datatables::of($amals)
            ->addColumn('nominal', function($amal){
                $n=number_format($amal->nominal,2,',','.');
                return "Rp. ".$n;
            })
            ->addColumn('action', function($amal){
            return view('datatable._action',[
                'model'     => $amal,
                'form_url'  => route('amal.destroy', $amal->id),
                'edit_url'  => route('amal.edit', $amal->id),
                'confirm_message'=>'Yakin mau menghapus  ?'
            
                ]);
        })->make(true);
    }

    $html = $htmlBuilder
            ->addColumn(['data' => 'orang.nama', 'name'=>'orang.nama', 'title'=>'Nama'])
            ->addColumn(['data' => 'orang.alamat', 'name'=>'orang.alamat','title'=>'Alamat'])
            ->addColumn(['data' => 'orang.jk', 'name'=>'orang.jk','title'=>'Jenis Kelamin'])
            ->addColumn(['data' => 'jenis', 'name'=>'jenis','title'=>'Jenis Amal'])
            ->addColumn(['data' => 'nominal', 'name'=>'nominal','title'=>'Nominal Amal'])
            ->addColumn(['data' => 'created_at','name'=>'created_at','title'=>'Tgl Beramal'])
            ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'Opsi', 'orderable'=>false, 'searchable'=>false]);
            
            $js=lain::where('user_id', Auth::user()->id)->where('jenis','sodaqoh')->count();
            $s=lain::where('user_id', Auth::user()->id)->where('jenis','sodaqoh')->sum('nominal');
            $ji=lain::where('user_id', Auth::user()->id)->where('jenis','infaq')->count();
            $i=lain::where('user_id', Auth::user()->id)->where('jenis','infaq')->sum('nominal');
            $hs=number_format($s,2,',','.');
            $hi=number_format($i,2,',','.');

             
             return view('amal.index')->with(compact('html','js','hs','ji','hi'));

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
            'jenis' => 'required',
            'nominal' => 'required|numeric'
            ]);
        $orang = Orang::create([
          'nama'   => $request['nama'],
          'alamat' => $request['alamat'],
          'jk'     => $request['jk']
           ]);

        $amal = new lain;
        $amal->user_id = Auth::user()->id;
        $amal->id = $orang->id;
        $amal->jenis = $request->jenis;
        $amal->nominal = $request->nominal;
        $amal->orang_id = $orang->id;
        $amal->save();

        Alert::success('Tambah Data Berhasil', 'Selamat !')->persistent("Close");

        return redirect('pengurus/amal');
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
        lain::destroy($id);
        $orang=Orang::find($id);
        Orang::destroy($id);
        Alert::success('Hapus Data Berhasil', 'Terhapus !')->persistent("Close");

        return redirect('pengurus/amal');
    }
}
