<?php

namespace App\Http\Controllers;
use App\Models\Produk2;

class Produk2Controller extends Controller {
	function index(){
		$data['list_produk2'] = Produk2::all();
		return view('produk2.index', $data);
	}
	function create(){
		return view('produk2.create');
	}
	function store(){
		$produk = new Produk2;
		$produk->nama = request ('nama');
		$produk->harga = request ('harga');
		$produk->berat = request ('berat');
		$produk->stok = request ('stok');
		$produk->deskripsi = request ('deskripsi');
		$produk->save();


		return redirect('produk2')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(Produk2 $produk2){
		$data['produk2'] = $produk2;
		return view('produk2.show', $data);
	}
	function edit(Produk2 $produk2){
		$data['produk2'] = $produk2;
		return view('produk2.edit', $data);
	}
	function update(Produk2 $produk2){
		$produk2->nama = request ('nama');
		$produk2->harga = request ('harga');
		$produk2->berat = request ('berat');
		$produk2->stok = request ('stok');
		$produk2->deskripsi = request ('deskripsi');
		$produk2->save();


		return redirect('produk2')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Produk2 $produk2){
		$produk2->delete();

		return redirect('produk2')->with('danger', 'Data Berhasil Dihapus');
	}
}