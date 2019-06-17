public function get_login()
 {
  return View::make('app.form');
 }

 public function post_login()
 {
  // tentukan validasi
  $input = Input::get();
  $validasi = array
   (
    'email' => 'required|email',
    'password' => 'required|min:6'
   );
  $valid = Validator::make($input, $validasi);

  // jika valid
  if($valid->passes())
  {
   // proses inputan
   $email = Input::get('email');
   $password = Input::get('password');
   $inputan = array('username' => $email, 'password' => $password);

   // jika email & password ada pada database (authentikasi diterima)
   if(Auth::attempt($inputan))
   {
    return Redirect::to_route('utama_siswa')
     ->with('class', 'alert-success')
     ->with('judul', 'Sukses!!!')
     ->with('pesan', 'Anda Berhasil Login.');
   }
   // jikak email & password tidak ada pada database
   else
   {
    return Redirect::back()
     ->with('class', 'alert-error')
     ->with('judul', 'Salah!!!')
     ->with('pesan', 'Email atau password yang anda masukkan salah.');
   }
  }
  // tidak valid
  {
   return Redirect::back()
    ->with_input()
    ->with_errors($valid);
  }
 }
