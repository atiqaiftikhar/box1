{{-- @extends('layout.masterfront')

@section('content')

<div class="container mt-5">
  <div class="gift-box close" id="giftBox">
    <div class="lid">
      <div class="ribbon"></div>
    </div>
    <div class="base"></div>
    <div class="decoration"></div>
  </div>
</div>

@endsection --}}
@extends('layout.masterfront')

@section('content')

<div class="container mt-5">
  <div class="gift-box" id="giftBox">
    <img src="{{asset('assetsfront/img/t1.jpg')}}" alt="Closed Gift Box">
    <div class="lid"></div>
    <div class="base"></div>
  </div>
</div>
<script>
    document.getElementById('giftBox').addEventListener('click', function() {
      // Redirect to the open page
      window.location.href = "{{ route('box.open') }}";
    });
    </script>
    
@endsection
