<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class DashboardController extends Controller
{
    public function index(){
    // 	//mapping
    // 	$siswa = Siswa::all();
    // 	$siswa->map(function($value){
    // 		//menambah nilai
    // 		$value->ratarataNilai = $value->ratarata();
    // 		return $value;
    // 	});

    // 	//helper sort
    // 	$siswa = $siswa->sortByDesc('ratarataNilai')->take(5);
    // 	return view('dashboard.index',['siswa' => $siswa]);

    //diatas dicomment karena udah pake helper global

        return view('dashboard.index');
    }
}
