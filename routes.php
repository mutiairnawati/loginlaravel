Route::get('/', array('as' => 'login_siswa', 'uses' => 'UserControllers@login'));
Route::post('/', 'crud@login');
