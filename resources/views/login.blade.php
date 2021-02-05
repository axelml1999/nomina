@extends('layout.mainlog')

@section('content')

<div class="signin cf">
  <div class="avatar"></div>
  <form>
    <div class="inputrow">
      <input id="name" type="text" placeholder="Username"/>
      <label class="ion-person" for="name"></label>
    </div>
    <div class="inputrow">
      <input id="pass" type="password" placeholder="Password"/>
      <label class="ion-locked" for="pass"></label>
    </div>
    <input id="remember" type="checkbox" name="remember"/>
    <label class="radio" for="remember">Stay Logged In</label>
    <a class="btn btn-primary" href="asistencias" role="button">Login</a>
  </form>
</div>
@endsection