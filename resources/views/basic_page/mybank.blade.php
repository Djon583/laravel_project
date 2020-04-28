@extends('layouts.app')

@section('content')
  @if(Auth::check())
  <h1>My bank</h1>
  @else
    @include('inc.inclogin')
  @endif
@endsection
