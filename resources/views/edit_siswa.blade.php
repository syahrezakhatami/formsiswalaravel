@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Data Siswa dan Guru</h1>
        </div>
        <div class="card-body">
            <form action="{{route('users.update', $users->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" required value="{{$users->name}}">
                    Email <input type="email" name="email" required value="{{$users->email}}" >
                    Password <input type="text" name="password" required value="{{$users->password}}" >
                    Hak Akses <input type="text" name="login_role" required value="{{$users->login_role}}" >

                </ul>
                <hr>
                <a href="{{route('users.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
