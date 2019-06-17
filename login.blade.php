@layout('template.temp')

@section('isi')
 {{ Form::open(URL::full()) }}
{{ Form::text(’email’, Input::old(’email’), array(‘placeholder’ => ‘Masukkan Email’)) }}  {{ Form::password(‘password’, array(‘placeholder’ => ‘Masukkan Password’)) }}

LOGIN
{{ Form::label(’email’, ‘Email’) }}	{{ Form::label(‘password’, ‘Password’) }}
 

{{ Form::button(‘MASUK!’) }}
{{ Form::close() }} @endsection
