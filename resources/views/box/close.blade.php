@extends('layout.masterfront')

@section('content')
<div class="container mt-6">
  <div class=" d-flex align-items-center justify-content-center" id="giftBox" > 
{{-- <div class="container text-center mt-0"> --}}
  {{-- <div class="text-center" id="giftBox" style="margin-top: 0px;"> --}}
    <img src="{{ asset('assetsfront/img/t4.png') }}" height="55%" width="55%" alt="Closed Gift Box">
    
  </div>
  <br>
</div>
</div>
<script>
document.getElementById('giftBox').addEventListener('click', function() {
  // Redirect to the open page
  window.location.href = "{{ route('box.open') }}";
});
</script>

@endsection
