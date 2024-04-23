{{-- @extends('layout.masterfront')

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
    function displayButton() {
        buttonContainer.style.display = 'block';
    }

    gifImage.addEventListener('load', function() {
        setTimeout(displayButton, 500);
    });

    winButton.addEventListener('click', function() {
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
    <div class="text-center mt-3" id="giftResult" style="display: none;">
        <img src="{{ asset('assetsfront/img/car.png') }}" alt="Gift" height="180" width="220" id="giftImageResult" style="display: none;">
        <p id="giftMessage"></p>
    </div>
</div>

<script>
    var gifImage = document.getElementById('gifImage');
    var buttonContainer = document.getElementById('buttonContainer');
    var winButton = document.getElementById('winButton');
    var giftResult = document.getElementById('giftResult');
    var giftImageResult = document.getElementById('giftImageResult');
    var giftMessage = document.getElementById('giftMessage');

    function displayButton() {
        buttonContainer.style.display = 'block';
    }

    function showGift(message, imageUrl) {
        if (imageUrl) {
            giftImageResult.src = imageUrl;
            giftImageResult.style.display = 'block';
        }
        else {
            giftMessage.textContent = "Oops! Good Luck for the Next Time.";
        }
        giftMessage.textContent = message;
        giftResult.style.display = 'block';
    }

    gifImage.addEventListener('load', function() {
        setTimeout(displayButton, 500);
    });

    winButton.addEventListener('click', function() {
        // Here you can replace this logic with actual gift checking logic
        // For demonstration purpose, I'm just using a boolean variable
        var hasGift = true; // Replace this with your actual logic
        if (hasGift) {
            showGift("Congratulations! You've won a gift!", "{{ asset('assetsfront/img/car.png') }}");
        }
        else {
            showGift("Oops! Good Luck for the Next Time.", null);
        }
    });
</script>

@endsection

