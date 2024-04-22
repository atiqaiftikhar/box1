<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Plugin</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .nav-tabs .nav-item .nav-link {
            color: #333;
            font-size: 18px;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-item .nav-link:hover {
            color: #007bff;
        }

        .nav-tabs .nav-item .active {
            font-weight: bold;
        }

        .tab-pane {
            margin-top: 30px;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="step-tracker-wrapper" id="add-wheel" data-slices="">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#step-1">Theme</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#step-2">Chances</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#step-3">Slices</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#step-4">Form Builder</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#step-5">Settings</a>
        </li>
    </ul>
    <div class="tab-content">
        <!-- Step 1 Content -->
        <div id="step-1" class="tab-pane fade show active">
            <!-- Your HTML content for Step 1 -->
        </div>

        <!-- Step 2 Content -->
        <div id="step-2" class="tab-pane fade">
            <!-- Your HTML content for Step 2 -->
        </div>

        <!-- Step 3 Content -->
        <div id="step-3" class="tab-pane fade">
            <!-- Your HTML content for Step 3 -->
        </div>

        <!-- Step 4 Content -->
        <div id="step-4" class="tab-pane fade">
            <!-- Your HTML content for Step 4 -->
        </div>

        <!-- Step 5 Content -->
        <div id="step-5" class="tab-pane fade">
            <!-- Your HTML content for Step 5 -->
        </div>
    </div>
</div>

</body>
</html>
