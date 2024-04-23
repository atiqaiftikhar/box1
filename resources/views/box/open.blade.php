{{-- @extends('layout.masterfront')

@section('content')
<div class="container mt-6 ">
    
    <div class="text-center d-flex align-items-center justify-content-center" id="giftBox" > 
      
    <img src="{{ asset('assetsfront/img/gif1.gif') }}" alt="Open Gift Box" height="55%" width="50%" id="gifImage">
    
  </div>
<div class="text-center">
  
  <button class=" btn btn-warning" type="submit"><strong>Get a Chance to Win</strong></button>
</div>
</div>
</div>


<script>


</script>

@endsection --}}
{{-- @extends('layout.masterfront')

@section('content')
<div class="container mt-6">
  <div class=" d-flex align-items-center justify-content-center" id="giftBox" > 
    <img src="{{ asset('assetsfront/img/t4.png') }}" height="55%" width="55%" alt="Closed Gift Box">
    <img src="{{ asset('assetsfront/img/gif2.gif') }}" alt="Open Gift Box" height="55%" width="50%" id="gifImage">
    
  </div>
  <br>

  

</div>
<script>
document.getElementById('giftBox').addEventListener('click', function() {
  window.location.href = "{{ route('box.open') }}";
});


</script>

@endsection --}}

@extends('layout.masterfront')

@section('content')
<div class="container mt-6">
    <div class="text-center d-flex align-items-center justify-content-center" id="giftBox"> 
        <img src="{{ asset('assetsfront/img/gif1.gif') }}" alt="Open Gift Box" height="55%" width="50%" id="gifImage">
    </div>
    <div class="text-center" id="buttonContainer" style="display: none;">
        <button class="btn btn-warning" id="winButton"><strong>Get a Chance to Win</strong></button>
    </div>
</div>

<script>
    var gifImage = document.getElementById('gifImage');
    var buttonContainer = document.getElementById('buttonContainer');
    var winButton = document.getElementById('winButton');

    // Function to display the button when the GIF ends
    function displayButton() {
        buttonContainer.style.display = 'block';
    }

    gifImage.addEventListener('load', function() {
        // Set a timeout to display the button after 500 milliseconds
        setTimeout(displayButton, 500);
    });


    // Event listener for the button click
    winButton.addEventListener('click', function() {
        window.location.href = "{{ route('box.open') }}";
    });
</script>

@endsection
