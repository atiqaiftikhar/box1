@extends('layout.masterfront')

@section('content')
<div class="container mt-6">
  <div class=" d-flex align-items-center justify-content-center" id="giftBox" > 
    {{-- <img src="{{ asset('assetsfront/img/t4.png') }}" height="55%" width="55%" alt="Closed Gift Box"> --}}
    <img src="{{ asset('assetsfront/img/gif2.gif') }}" alt="Open Gift Box" height="55%" width="50%" id="gifImage">
    
  </div>
  <br>

  

</div>
<script>
document.getElementById('giftBox').addEventListener('click', function() {
  window.location.href = "{{ route('box.open') }}";
});


</script>

@endsection
