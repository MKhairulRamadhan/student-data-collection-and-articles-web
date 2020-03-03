<?php 
use App\Siswa;
use App\Guru;
	function Rangking5Besar(){
		//mapping
    	$siswa = Siswa::all();
    	$siswa->map(function($value){
    		//menambah nilai
    		$value->ratarataNilai = $value->ratarata();
    		return $value;
    	});

    	//helper sort
    	$siswa = $siswa->sortByDesc('ratarataNilai')->take(5);

    	return $siswa;
	}


function totalSiswa(){
	return Siswa::count();
}

function totalGuru(){
	return Guru::count();
}