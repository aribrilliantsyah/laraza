<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mal;
use App\Orang;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Alert;
use Illuminate\Support\Facades\Auth;
use Session;

class MalsController extends Controller
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
            $mals = Mal::where('user_id', Auth::user()->id)->with('orang');
            return Datatables::of($mals)
            ->addColumn('nominal', function($mal){
                $n=number_format($mal->nominal,2,',','.');
                return "Rp. ".$n;
            })
            ->addColumn('action', function($mal){
            return view('datatable._action',[
                'model'     => $mal,
                'form_url'  => route('mal.destroy', $mal->id, $mal->orang_id),
                'edit_url'  => route('mal.edit', $mal->id),
                'confirm_message'=>'Yakin mau menghapus  ?'
            
                ]);
        })->make(true);
    }

    $html = $htmlBuilder
            ->addColumn(['data' => 'orang.nama', 'name'=>'orang.nama', 'title'=>'Nama'])
            ->addColumn(['data' => 'orang.alamat', 'name'=>'orang.alamat','title'=>'Alamat'])
            ->addColumn(['data' => 'orang.jk', 'name'=>'orang.jk','title'=>'Jenis Kelamin'])
            ->addColumn(['data' => 'jenis', 'name'=>'jenis','title'=>'Jenis Zakat Mal'])
            ->addColumn(['data' => 'nominal', 'name'=>'nominal','title'=>'Nominal Zakat'])
            ->addColumn(['data' => 'created_at','name'=>'created_at','title'=>'Tgl Zakat'])
            ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'Opsi', 'orderable'=>false, 'searchable'=>false]);
            
            $dek=Mal::where('user_id', Auth::user()->id)->sum('nominal');
            $dek=number_format($dek,2,',','.');
            $jum=Mal::where('user_id', Auth::user()->id)->count('nominal');
             
             return view('mal.index')->with(compact('html','dek','jum'));

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
            'nama' => 'required|max:255',
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

        $mal = new Mal;
        $mal->user_id = Auth::user()->id;
        $mal->id = $orang->id;
        $mal->jenis = $request->jenis;
        $mal->nominal = $request->nominal;
        $mal->orang_id = $orang->id;
        $mal->save();

        Alert::success('Tambah Data Berhasil', 'Selamat !')->persistent("Close");

        return redirect('pengurus/mal');
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
        $fitrah=Mal::find($id);
        return view('mal.edit')->with(compact('mal'));
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

        Mal::destroy($id);
        $orang=Orang::find($id);
        Orang::destroy($id);
        Alert::success('Hapus Data Berhasil', 'Terhapus !')->persistent("Close");

        return redirect('pengurus/mal');
    }
}
