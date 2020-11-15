<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

class KategoriController extends Controller {
	function index(){
		$data['list_kategori'] = Kategori::all();
		return view('kategori.index', $data);
	}
	function create(){
		return view('kategori.create');
	}
	function store(){
		$kategori = new Kategori;
		$kategori->nama = request ('nama');
		$kategori->harga = request ('harga');
		$kategori->berat = request ('berat');
		$kategori->stok = request ('stok');
		$kategori->deskripsi = request ('deskripsi');
		$kategori->save();


		return redirect('kategori')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.show', $data);
	}
	function edit(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.edit', $data);
	}
	function update(Kategori $kategori){
		$kategori->nama = request ('nama');
		$kategori->harga = request ('harga');
		$kategori->berat = request ('berat');
		$kategori->stok = request ('stok');
		$kategori->deskripsi = request ('deskripsi');
		$kategori->save();


		return redirect('kategori')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Kategori $kategori){
		$kategori->delete();

		return redirect('kategori')->with('danger', 'Data Berhasil Dihapus');
	}
}