//Router ke halaman path1/path2/detail
Route::get('/path1/path2/detail'), function(){
    echo "RT. 01 "
}

//Router dengan metode PUT
Route::put('/update/{id}l', function($id){
    echo "Data berhasil diperbarui dengan ID: " . $id;
});

//Router dengan metode PATCH
Route::patch('/update2/{id}l', function($id){
    echo "Data berhasil diperbarui dengan ID: " . $id;
});

//Router dengan metode DELETE
Route::delete('/hapus/{id}l', function($id){
    echo "Data berhasil dihapus dengan ID: " . $id;
});

//Route untuk menampilkan halaman test_method
Route::get('/test-method', function(){
    return view('test_method');
});
