@extends('layout.masterfront')

@section('content')
<div class="container mt-6 ">
    <br><br>
    <br>
    <div class="text-center d-flex align-items-center justify-content-center" id="giftBox" > 
        <br><br>
{{-- <div class="container text-center mt-0 "> --}}
  {{-- <div class="text-center" id="giftBox" style="margin-top: 0px;"> --}}
    <img src="{{ asset('assetsfront/img/gif1.gif') }}" alt="Open Gift Box" height="55%" width="50%" id="gifImage">
    
  </div>
<div class="text-center">
  
  <button class=" btn btn-warning" type="submit"><strong>Get a Chance to Win</strong></button>
</div>
</div>
</div>


<script>


</script>

@endsection
