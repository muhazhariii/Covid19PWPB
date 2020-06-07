@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-user"></i> My Profile</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <img src="{{$user->getAvatar()}}" style="height: 150px; width: 150px; border-radius: 30px;">
                            </tr><br>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>No HP</td>
                                <td>:</td>
                                <td>{{ $user->nohp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $user->alamat }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-pencil-alt"></i> Edit Profile
                    </button>
                </div>
            </div>
        </div>
        
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ url('profile') }}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label for="foto">Upload Foto Profile</label>
                <input name="foto" type="file" class="form-control" id="foto" value="{{ $user->foto }}">
              </div>

              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}">
              </div>

              <div class="form-group">
                <label for="nohp">No.HP</label>
                <input name="nohp" type="text" class="form-control" id="nohp" value="{{ $user->nohp }}">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{ $user->alamat }}</textarea>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" disabled="">
              </div>

              <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" disabled="">
              </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
           </form>
        </div>
      </div>
    </div>

    </div>
</div>
@endsection