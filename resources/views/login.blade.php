@extends('layout.main')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Oxygen:400,300,700" rel="stylesheet" type="text/css"/>
<link href="https://code.ionicframework.com/ionicons/1.4.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
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
    <input type="submit" value="Login"/>
  </form>
</div>
    @endsection