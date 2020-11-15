<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller {
	function index(){
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk = new User;
		$produk->nama = request ('nama');
		$produk->harga = request ('harga');
		$produk->berat = request ('berat');
		$produk->stok = request ('stok');
		$produk->deskripsi = request ('deskripsi');
		$produk->save();


		return redirect('produk')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(User $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(User $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(User $produk){
		$produk->nama = request ('nama');
		$produk->harga = request ('harga');
		$produk->berat = request ('berat');
		$produk->stok = request ('stok');
		$produk->deskripsi = request ('deskripsi');
		$produk->save();


		return redirect('produk')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with('danger', 'Data Berhasil Dihapus');
	}
}