@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route('users.index')}}">Kembali</a>
            <form action="{{route('users.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="name" required>
                    Email <input type="email" name="email" required>
                    Password <input type="password" name="password" required>
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="login_role" class="form-control">
                            <option value="Siswa">Siswa</option>
                            <option value="Guru">Guru</option>
                        </select>
                </ul>
                <input type="submit" value="Simpan" class= "btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
