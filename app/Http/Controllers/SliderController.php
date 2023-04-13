<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        // data yg ditangkap oleh sliders akan dibaca dimasukan ke slider dan ditampilkan semuanya

        return view('slider.index',compact('sliders'));
        // ini akan membaca ke folder view slider index.blade
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('slider.create');
        // ini akan membaca ke folder view slider index.blade
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'title'=>'required',
        'description'=>'required',
        'image'=>'required|image'
       ]);
       $input = $request->all();
       // setelah masuk ke store akan di req untuk di validasi terlebih dahulu setelah itu akan 
       // diiinput lalu di req dimasukan ke all

       if($image = $request->file('image')){
        $destinationPath = 'image/';
        $imageName = $image->getClientOriginalName(); // ip.jpg
        $imageName = explode(".",$image->getClientOriginalName()); // ['ip','jpg']
        $imageName = uniqid().".".end($imageName); // kjasndafbajb.jpg
        // setelah image name diisi dengan nama dari foto tsb
        // lalu diexpole atau dipisah per titik, menjadi ip dan jpg
        // yang hasilnya akan digabungkan kembali bersama .end dan diberikan unik id lalu dijadikan image name

        // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
        $image->move($destinationPath,$imageName);
        $input['image'] = $imageName;
        // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
       }

       Slider::create($input);

       return redirect('/admin/sliders')->with('message','Data berhasil ditambahkan');
       //setelah berhasil makan akan di create lalu dikembalikan ke /admin/sliders dengan text berhasil
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
    public function edit(Slider $slider)
    {


        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Slider $slider)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'image'
           ]);
           $input = $request->all();
           // setelah masuk ke store akan di req untuk di validasi terlebih dahulu setelah itu akan 
           // diiinput lalu di req dimasukan ke all
    
           if($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
            $image->move($destinationPath,$imageName);
            unlink($destinationPath.$slider->image);        // agar saat didelete foto yg ada di folder juga terhapus
            $input['image'] = $imageName;
            // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
           }else{
            unset($input['image']);
           }
    
           $slider->update($input);
    
           return redirect('/admin/sliders')->with('message','Data berhasil diedit');
           //setelah berhasil makan akan di create lalu dikembalikan ke /admin/sliders dengan text berhasil
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $destinationPath = 'image/';

        $slider->delete();

        unlink($destinationPath.$slider->image);
        // agar saat didelete foto yg ada di folder juga terhapus

        return redirect('/admin/sliders')->with('message','Data berhasil dihapus');
    }
}
