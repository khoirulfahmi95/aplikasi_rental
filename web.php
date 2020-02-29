<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
/////
Route::get('/home', 'HomeController@index')->name('home');

/////HARGA SEWA 
Route::get('/Harga_sewa', 'Harga_sewaController@index')->name('harga_sewa');
Route::post('/TambahHarga', 'Harga_sewaController@TambahData')->name('proses_tambah');
Route::get('/viewTambahData', 'Harga_sewaController@viewTambahData')->name('view_tambah.sewa');
Route::post('/update', 'Harga_sewaController@updateharga')->name('proses_edit_harga');
Route::get('/DeleteHarga/{id}', 'Harga_sewaController@HapusdataHarga')->name('delete_Harga');
Route::get('/Editharga/{id}', 'Harga_sewaController@Edit')->name('view_edit_sewa');
Route::get('/cetak_pdf_harga', 'Harga_sewaController@cetak_pdf_harga')->name('pdf_harga');
/////PENYEWAAN
Route::get('/Sewa', 'SewaController@index')->name('sewa');
Route::get('/viewTambahSewa', 'SewaController@viewTambahSewa')->name('View_Sewa_tambah');
Route::post('/TambahSewa', 'SewaController@TambahDataSewa')->name('proses_tambah_Sewa');
Route::get('/deletesewa/{id}', 'SewaController@HapusdataSewa')->name('delete_sewa');
Route::post('/updatesewa', 'SewaController@updatesewa')->name('proses_edit_sewa'); 
Route::get('/editsewa/{id}', 'SewaController@Editsewa')->name('view_sewa');
Route::get('/exportsewa', 'SewaController@cetak_pdf_sewa')->name('export_view_sewa');
/////PEMBAYARAN
Route::get('/Pembayaran', 'PembayaranController@index')->name('Pembayaran');
Route::get('/viewTambahPembayaran', 'PembayaranController@viewTambahPembayaran')->name('View_Pembayaran_tambah');
Route::get('/DeletePembayaran/{id}', 'PembayaranController@HapusdataPembayaran')->name('delete_pembayaran');
Route::post('/TambahPembayaran', 'PembayaranController@TambahDataPembayaran')->name('proses_tambah_Pembayaran'); 
Route::get('/Editpembayaran/{id}', 'PembayaranController@EditPembayaranid')->name('view_edit_pembayaran');
Route::post('/Updatepembayaran', 'PembayaranController@updatePembayaran')->name('proses_pembayaran');

Route::get('/exportpembayaran', 'PembayaranController@cetak_pdf_pembayaran')->name('export_pembayaran');
/////KARYAAWAN
Route::get('/Karyawan', 'KaryawanController@index')->name('karyawan');
Route::get('/viewTambahKaryawan', 'KaryawanController@viewTambahKaryawan')->name('View_karyawan_tambah');
Route::post('/TambahKaryawan', 'KaryawanController@Tambahdatakaryawan')->name('proses_tambah_karyawan');
Route::get('/HapusKaryawan/{id}', 'KaryawanController@HapusdataKaryawan')->name('delete_karyawan');
Route::get('/EditKaryawan/{id}', 'KaryawanController@EditKaryawan')->name('view_edit_karyawan');
Route::post('/UpdateKaryawan', 'KaryawanController@updatekaryawan')->name('proses_karyawan');
Route::get('/karyawanpdf', 'KaryawanController@cetak_pdf_karyawan')->name('cetak_pdf_karyawan');
/////MOBIL
Route::get('/Mobil', 'MobilController@index')->name('mobil');
Route::get('/viewTambahMobil', 'MobilController@viewTambahMobil')->name('View_mobil_tambah');
Route::post('/TambahMobil', 'MobilController@TambahMobil')->name('proses_tambah_mobil');
Route::get('/HapusMobil/{id}', 'MobilController@HapusdataMobil')->name('delete_mobil');
Route::get('/Editmobil/{id}', 'MobilController@EditMobil')->name('view_edit_mobil'); 
Route::post('/UpdateMobil', 'MobilController@updateMobil')->name('proses_mobil');
Route::get('/exportmobil', 'MobilController@cetak_pdf_mobil')->name('export_proses_mobil');