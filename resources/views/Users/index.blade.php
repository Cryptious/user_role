@extends('layout')

@section('content')
<h1 class="display-4">Creat New User</h1>
<form method="post" action="/users">
  @csrf
  <fieldset class="form-group">
      <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-danger' : ''}}" placeholder="Input Your Name" value="{{ old('name') }}" required>
  </fieldset>
  <fieldset class="form-group">
      <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-danger' : ''}}" placeholder="Input Your Email" value="{{ old('email') }}" required>
  </fieldset>
  <fieldset class="form-group">
      <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-danger' : ''}}" placeholder="Input Your Password" value="{{ old('password') }}" required>
  </fieldset>
  <fieldset class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
  </fieldset>
  @include('errors')
</form>
</br>
    <h1 class="title">Users</h1>

<table class="table">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td><a href="/users/{{ $user->id }}/edit">edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
