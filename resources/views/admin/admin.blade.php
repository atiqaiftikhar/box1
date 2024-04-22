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

        /* Adjustments for card */
        .card {
            margin: 0 auto; /* Center the card */
            margin-top: 20px; /* Top margin */
            margin-bottom: 20px; /* Bottom margin */
            width: 80%; /* Adjust width as needed */
        }

        .card-body {
            padding: 20px; /* Padding inside the card body */
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #dddddd;
            text-align: center;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: calc(100% - 20px); /* Adjust the width of input fields and select dropdown */
            padding: 5px;
            box-sizing: border-box;
        }

        select {
            width: calc(100% - 20px); /* Adjust the width of select dropdown */
        }

        button {
            margin-top: 10px;
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
            {{-- <form method="POST" action="{{ route('winning-percentage.update') }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="percentage">Winning Percentage:</label>
                    <input type="number" name="percentage" id="percentage" class="form-control" value="{{ $winningPercentage->percentage }}" min="0" max="100" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form> --}}
        </div>

        <!-- Step 3 Content -->
        <div id="step-3" class="tab-pane fade">
            <!-- Your HTML content for Step 3 -->
            <form method="POST" action="{{ url('/slices/store') }}" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <table id="dynamic-table">
                        <tr>

                            <th>Type</th>
                            <th>Text</th>
                            <th>Value</th>

                            <th>Chance</th>
                            <th>Image</th>

                        </tr>
                        <tr>
                            <td>
                                <select name="type[]">
                                    <option value="Coupon Code">Coupon Code</option>
                                    <option value="No Prize">No Prize</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                            <td><input type="text" name="text[]"></td>
                            <td><input type="text" name="value[]" value=""></td>
                            <td><input type="number" name="chance[]" value=""></td>
                            <td><input type="file" accept="image/*" name="image[]"></td>
                        </tr>

                    </table>
                    <button type="button" onclick="addRow()">Add Row</button>
                      <button type="submit">Submit</button>


            </div>
        </div>
    </div>
</form>
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

<script>
    function addRow() {
        var table = document.getElementById("dynamic-table");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4); // Add new cell for image
        cell1.innerHTML = '<select name="type[]"><option value="Coupon Code">Coupon Code</option><option value="No Prize">No Prize</option></select>';
        cell2.innerHTML = '<input type="text" name="text[]">';
        cell3.innerHTML = '<input type="text" name="value[]">';
        cell4.innerHTML = '<input type="number" name="chance[]">';
        cell5.innerHTML = '<input type="file" accept="image/*" name="image[]">'; // Input type file for image
    }
</script>


</body>
</html>
