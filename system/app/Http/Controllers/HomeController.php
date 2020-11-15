<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showBeranda2(){
		return view('beranda2');
	}

	function showProduk2(){
		return view('produk2');
	}

	function showKategori2(){
		return view('kategori2');
	}

	function showPromo2(){
		return view('Promo2');
	}

}