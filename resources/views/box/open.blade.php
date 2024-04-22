{{-- @extends('layout.masterfront')

@section('content')

<div class="container mt-5">
  <div class="gift-box open" id="giftBox">
    <div class="lid"></div>
    <div class="base"></div>
  </div>
</div>

@endsection --}}
@extends('layout.masterfront')

@section('content')

<div class="container mt-5">
  <div class="gift-box open" id="giftBox">
    <img src="{{asset('assetsfront/img/t2.jpg')}}" alt="Open Gift Box">
    <div class="lid"></div>
    <div class="base"></div>
  </div>
</div>

@endsection
