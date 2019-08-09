@extends('layout')

@section('content')
<h1 class="title">User Roles</h1>


<form method="post" action="/userroles">
  @csrf
  <div class="control">
    <div class="select">
      <select name="users">
        <option>Select Users</option>
        @foreach ($users as $user)
        <option value="{{$user->id}}">{{ $user->name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <br>

  <div class="control">
    <div class="select">
      <select name="users">
        <option>Select Role</option>
        @foreach ($rolenames as $rolename)
        <option value="{{$rolename->id}}">{{ $rolename->role }}</option>
        @endforeach
      </select>
    </div>
  </div>
<br>
  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link">Save</button>
    </div>
  </div>

  @include('errors')
</form>

</br>
<div class="table-container">
  <table class="table is-striped">
    <thead>
      <th>id</th>
      <th>User</th>
      <th>Role</th>
    </thead>
    <tbody>
      @foreach ($userroles as $userrole)
        <tr>
          <td>{{ $userrole->id }}</td>
          <td>{{ $userrole->name }}</td>
          <td>{{ $userrole->role }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
