@extends('layout')

@section('content')
<h1 class="title">Create New Role Name</h1>
<form method="post" action="/rolenames">
  @csrf
  <fieldset class="form-group">

      <input type="text" name="role" class="form-control {{ $errors->has('role') ? 'is-danger' : ''}}" placeholder="Input Your Role Name" value="{{ old('role') }}" required>

  </fieldset>
  <fieldset class="form-group">

      <button type="submit" class="btn btn-primary">Save</button>

  </fieldset>
  @include('errors')
</form>
</br>

    <h1 class="title">Role Names</h1>

    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rolenames as $rolename)
        <tr>
          <td>{{ $rolename->id }}</td>
          <td>{{ $rolename->role }}</td>
          <td><a href="/rolenames/{{ $rolename->id }}/edit">edit</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

@endsection
