<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;
use \App\User;
use \App\Mapel;
class SiswaController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')) {
            $data_siswa = Siswa::where('nama_depan','LIKE','%' .$request->cari. '%')->get();
        }else{
        	$data_siswa = Siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request){

        $this->validate($request,[
            'nama_depan' => 'required| min:5',
            'nama_belakang' => 'required',
            'email' => 'email|required|unique:users',
            'agama' => 'required',
            'alamat' => 'required',
            'avatar' => 'mimes:jpeg,png|required'
        ]);

        //insert ke user
        $user = new User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('123123123');
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalname());
            $siswa->avatar = $request->file('avatar')->getClientOriginalname();
            $siswa->save();
        }

        return redirect('/siswa')->with('sukses', 'Data berhasil ditambahkan!');
    }

    public function edit(Request $request, $id){
    	$siswa = Siswa::find($id);
    	return view('siswa.edit_siswa', ["siswa" => $siswa]);
    }

    public function update(Request $request, $id){
    	$siswa = Siswa::find($id);
    	$siswa->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalname());
            $siswa->avatar = $request->file('avatar')->getClientOriginalname();
            $siswa->save();
        }

        return redirect('/siswa')->with('sukses', 'Berhasil Mengidit Data!');
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('sukses', 'Data berhasil dihapus');
    }

    public function profile(Siswa $siswa){
        //comment yg dibawah karena model bindding
        // $siswa = Siswa::find($id);

        
        $mataPel = Mapel::all();

        //mrnyiapkan data untuk chart
        $categories = [];
        $data = [];

        foreach ($mataPel as $mp) {
            if ($siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()) {
                $categories[] = $mp->nama;
                $data[] = $siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()->pivot->nilai;
            }
        }

 
        return view('siswa.profile', ['siswa' => $siswa, 'mataPel' => $mataPel, 'categories' => $categories, 'data'=>$data]);
    }

    public function addnilai(Request $request, $id){
        $siswa = Siswa::find($id);

        if ($siswa->mapel()->where('mapel_id',$request->mapel)->exists()) {

           return redirect('siswa/'.$id.'/profile')->with('error', 'Nilai Sudah ada');

       }
       $siswa->mapel()->attach($request->mapel,['nilai' => $request->nilai]);

       return redirect('siswa/'.$id.'/profile')->with('sukses', 'Nilai Berhasil ditambahkan');;

   }

   public function deletenilai($id, $id_nilai){
        $siswa = Siswa::find($id);
        $siswa->mapel()->detach($id_nilai);

        return redirect()->back()->with('sukses', 'Data Berhasil dihapus');

   }


}