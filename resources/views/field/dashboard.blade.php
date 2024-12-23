{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Field Dashboard - Add Location</title>--}}
{{--    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />--}}
{{--    <style>--}}
{{--        * {--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--            box-sizing: border-box;--}}
{{--            font-family: 'Roboto', sans-serif;--}}
{{--        }--}}

{{--        body {--}}
{{--            background: #1a1a1a;--}}
{{--            min-height: 100vh;--}}
{{--            padding: 20px;--}}
{{--            color: #f4f4f4;--}}
{{--        }--}}

{{--        .dashboard-header {--}}
{{--            background: linear-gradient(135deg, #e63946, #f77f00);--}}
{{--            padding: 20px;--}}
{{--            border-radius: 10px;--}}
{{--            margin-bottom: 30px;--}}
{{--            color: white;--}}
{{--            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);--}}
{{--            display: flex;--}}
{{--            justify-content: space-between;--}}
{{--            align-items: center;--}}
{{--        }--}}

{{--        .header-content h1 {--}}
{{--            font-size: 32px;--}}
{{--            font-weight: 700;--}}
{{--        }--}}

{{--        .welcome-message {--}}
{{--            color: #ffba08;--}}
{{--            font-size: 18px;--}}
{{--        }--}}

{{--        .logout-btn {--}}
{{--            background: #e63946;--}}
{{--            color: white;--}}
{{--            padding: 10px 20px;--}}
{{--            border-radius: 8px;--}}
{{--            text-decoration: none;--}}
{{--            transition: all 0.3s ease;--}}
{{--            font-weight: 600;--}}
{{--        }--}}

{{--        .logout-btn:hover {--}}
{{--            background: #d62839;--}}
{{--            transform: translateY(-3px);--}}
{{--        }--}}

{{--        .success-message {--}}
{{--            background: #2a9d8f;--}}
{{--            color: white;--}}
{{--            padding: 15px;--}}
{{--            border-radius: 8px;--}}
{{--            margin-bottom: 20px;--}}
{{--            text-align: center;--}}
{{--            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);--}}
{{--        }--}}

{{--        form {--}}
{{--            background: #262626;--}}
{{--            padding: 40px;--}}
{{--            border-radius: 12px;--}}
{{--            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);--}}
{{--            max-width: 800px;--}}
{{--            margin: 0 auto;--}}
{{--        }--}}

{{--        .form-group {--}}
{{--            margin-bottom: 25px;--}}
{{--        }--}}

{{--        label {--}}
{{--            display: block;--}}
{{--            margin-bottom: 10px;--}}
{{--            color: #f4f4f4;--}}
{{--            font-weight: 600;--}}
{{--        }--}}

{{--        input, select {--}}
{{--            width: 100%;--}}
{{--            padding: 15px;--}}
{{--            border: 2px solid #333;--}}
{{--            border-radius: 8px;--}}
{{--            font-size: 16px;--}}
{{--            background: #1a1a1a;--}}
{{--            color: #f4f4f4;--}}
{{--            transition: all 0.3s ease;--}}
{{--        }--}}

{{--        input:focus, select:focus {--}}
{{--            outline: none;--}}
{{--            border-color: #f77f00;--}}
{{--            box-shadow: 0 0 8px rgba(247, 127, 0, 0.6);--}}
{{--        }--}}

{{--        input[type="file"] {--}}
{{--            padding: 12px;--}}
{{--            background: #333;--}}
{{--            border: 2px dashed #444;--}}
{{--            color: #f4f4f4;--}}
{{--        }--}}

{{--        button {--}}
{{--            width: 100%;--}}
{{--            padding: 15px;--}}
{{--            border: none;--}}
{{--            border-radius: 8px;--}}
{{--            cursor: pointer;--}}
{{--            font-size: 18px;--}}
{{--            font-weight: 700;--}}
{{--            transition: all 0.3s ease;--}}
{{--        }--}}

{{--        button[type="submit"] {--}}
{{--            background: #f77f00;--}}
{{--            color: white;--}}
{{--            margin-top: 20px;--}}
{{--        }--}}

{{--        button[type="button"] {--}}
{{--            background: #e63946;--}}
{{--            color: white;--}}
{{--            margin: 15px 0;--}}
{{--        }--}}

{{--        button:hover {--}}
{{--            transform: translateY(-3px);--}}
{{--            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);--}}
{{--        }--}}

{{--        #map {--}}
{{--            height: 450px;--}}
{{--            width: 100%;--}}
{{--            border-radius: 12px;--}}
{{--            margin: 20px 0;--}}
{{--            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);--}}
{{--        }--}}

{{--        @media (max-width: 768px) {--}}
{{--            .dashboard-header {--}}
{{--                flex-direction: column;--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .logout-btn {--}}
{{--                margin-top: 15px;--}}
{{--            }--}}

{{--            form {--}}
{{--                padding: 25px;--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="dashboard-header">--}}
{{--    <div class="header-content">--}}
{{--        <h1>Field Dashboard</h1>--}}
{{--        <p class="welcome-message">Welcome, {{ Auth::guard('user_fields')->user()->name }}</p>--}}
{{--    </div>--}}
{{--    <a href="{{ route('user_fields.logout') }}" class="logout-btn">Logout</a>--}}
{{--</div>--}}

{{--@if (session('success'))--}}
{{--    <div class="success-message">--}}
{{--        {{ session('success') }}--}}
{{--    </div>--}}
{{--@endif--}}

{{--<form action="{{ route('user_fields.field.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <label for="field_name">Field Name:</label>--}}
{{--        <input type="text" id="field_name" name="field_name" placeholder="Enter Field Name" required>--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label for="location">Location:</label>--}}
{{--        <input type="text" id="location" name="location" placeholder="Enter Location" required>--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label for="availability">Availability:</label>--}}
{{--        <select id="availability" name="availability" required>--}}
{{--            <option value="Available">Available</option>--}}
{{--            <option value="Not Available">Not Available</option>--}}
{{--        </select>--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label for="price">Price:</label>--}}
{{--        <input type="number" id="price" name="price" placeholder="Enter Price" required>--}}
{{--    </div>--}}

{{--    <label>Drag Marker to Set Location:</label>--}}
{{--    <div id="map"></div>--}}
{{--    <input type="hidden" id="latitude" name="latitude">--}}
{{--    <input type="hidden" id="longitude" name="longitude">--}}

{{--    <button type="button" onclick="getLocation()">Get Current Location</button>--}}

{{--    <div class="form-group">--}}
{{--        <label for="image">Field Image:</label>--}}
{{--        <input type="file" id="image" name="image" accept="image/*" required>--}}
{{--    </div>--}}

{{--    <button type="submit">Add Field</button>--}}
{{--</form>--}}

{{--<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>--}}
{{--<script>--}}
{{--    let map, marker;--}}

{{--    function initMap() {--}}
{{--        const defaultLocation = { lat: 31.963158, lng: 35.930359 };--}}
{{--        map = L.map('map').setView([defaultLocation.lat, defaultLocation.lng], 15);--}}

{{--        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {--}}
{{--            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'--}}
{{--        }).addTo(map);--}}

{{--        marker = L.marker([defaultLocation.lat, defaultLocation.lng], { draggable: true }).addTo(map);--}}

{{--        marker.on('dragend', function () {--}}
{{--            const position = marker.getLatLng();--}}
{{--            document.getElementById("latitude").value = position.lat;--}}
{{--            document.getElementById("longitude").value = position.lng;--}}
{{--        });--}}
{{--    }--}}

{{--    function getLocation() {--}}
{{--        if (navigator.geolocation) {--}}
{{--            navigator.geolocation.getCurrentPosition(function (position) {--}}
{{--                const userLocation = {--}}
{{--                    lat: position.coords.latitude,--}}
{{--                    lng: position.coords.longitude,--}}
{{--                };--}}
{{--                map.setView([userLocation.lat, userLocation.lng], 15);--}}
{{--                marker.setLatLng([userLocation.lat, userLocation.lng]);--}}
{{--                document.getElementById("latitude").value = userLocation.lat;--}}
{{--                document.getElementById("longitude").value = userLocation.lng;--}}
{{--            }, showError);--}}
{{--        } else {--}}
{{--            alert("Geolocation is not supported by this browser.");--}}
{{--        }--}}
{{--    }--}}

{{--    function showError(error) {--}}
{{--        switch (error.code) {--}}
{{--            case error.PERMISSION_DENIED:--}}
{{--                alert("User denied the request for Geolocation.");--}}
{{--                break;--}}
{{--            case error.POSITION_UNAVAILABLE:--}}
{{--                alert("Location information is unavailable.");--}}
{{--                break;--}}
{{--            case error.TIMEOUT:--}}
{{--                alert("The request to get user location timed out.");--}}
{{--                break;--}}
{{--            default:--}}
{{--                alert("An unknown error occurred.");--}}
{{--                break;--}}
{{--        }--}}
{{--    }--}}

{{--    window.onload = initMap;--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Dashboard - Add Location</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: #1a1a1a;
            min-height: 100vh;
            padding: 20px;
            color: #f4f4f4;
        }

        .dashboard-header {
            background: linear-gradient(135deg, #e63946, #f77f00);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-content h1 {
            font-size: 32px;
            font-weight: 700;
        }

        .welcome-message {
            color: #ffba08;
            font-size: 18px;
        }

        .logout-btn {
            background: #e63946;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .logout-btn:hover {
            background: #d62839;
            transform: translateY(-3px);
        }

        .success-message {
            background: #2a9d8f;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        form {
            background: #262626;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #f4f4f4;
            font-weight: 600;
        }

        input, select {
            width: 100%;
            padding: 15px;
            border: 2px solid #333;
            border-radius: 8px;
            font-size: 16px;
            background: #1a1a1a;
            color: #f4f4f4;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #f77f00;
            box-shadow: 0 0 8px rgba(247, 127, 0, 0.6);
        }

        input[type="file"] {
            padding: 12px;
            background: #333;
            border: 2px dashed #444;
            color: #f4f4f4;
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        button[type="submit"] {
            background: #f77f00;
            color: white;
            margin-top: 20px;
        }

        button[type="button"] {
            background: #e63946;
            color: white;
            margin: 15px 0;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        #map {
            height: 450px;
            width: 100%;
            border-radius: 12px;
            margin: 20px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .dashboard-header {
                flex-direction: column;
                text-align: center;
            }

            .logout-btn {
                margin-top: 15px;
            }

            form {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
<div class="dashboard-header">
    <div class="header-content">
        <h1>Field Dashboard</h1>
        <p class="welcome-message">Welcome, {{ Auth::guard('user_fields')->user()->name }}</p>
    </div>
    <a href="{{ route('user_fields.logout') }}" class="logout-btn">Logout</a>
</div>

@if (session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('user_fields.field.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="field_name">Field Name:</label>
        <input type="text" id="field_name" name="field_name" placeholder="Enter Field Name" required>
    </div>

    <div class="form-group">
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" placeholder="Enter Location" required>
    </div>

    <div class="form-group">
        <label for="availability">Availability:</label>
        <select id="availability" name="availability" required>
            <option value="Available">Available</option>
            <option value="Not Available">Not Available</option>
        </select>
    </div>

    <div class="form-group">
        <label for="start_time">Start Time:</label>
        <input type="time" id="start_time" name="start_time" required>
    </div>

    <div class="form-group">
        <label for="end_time">End Time:</label>
        <input type="time" id="end_time" name="end_time" required>
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" placeholder="Enter Price" required>
    </div>

    <div class="form-group">
        <label for="booking_start_date">Booking Start Date:</label>
        <input type="date" id="booking_start_date" name="booking_start_date" required>
    </div>

    <div class="form-group">
        <label for="booking_end_date">Booking End Date:</label>
        <input type="date" id="booking_end_date" name="booking_end_date" required>
    </div>


    <label>Drag Marker to Set Location:</label>
    <div id="map"></div>
    <input type="hidden" id="latitude" name="latitude">
    <input type="hidden" id="longitude" name="longitude">

    <button type="button" onclick="getLocation()">Get Current Location</button>

    <div class="form-group">
        <label for="image">Field Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
    </div>

    <button type="submit">Add Field</button>
</form>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    let map, marker;

    function initMap() {
        const defaultLocation = { lat: 31.963158, lng: 35.930359 };
        map = L.map('map').setView([defaultLocation.lat, defaultLocation.lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        marker = L.marker([defaultLocation.lat, defaultLocation.lng], { draggable: true }).addTo(map);

        marker.on('dragend', function () {
            const position = marker.getLatLng();
            document.getElementById("latitude").value = position.lat;
            document.getElementById("longitude").value = position.lng;
        });
    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                const userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
                map.setView([userLocation.lat, userLocation.lng], 15);
                marker.setLatLng([userLocation.lat, userLocation.lng]);
                document.getElementById("latitude").value = userLocation.lat;
                document.getElementById("longitude").value = userLocation.lng;
            }, showError);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                alert("User denied the request for Geolocation.");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("Location information is unavailable.");
                break;
            case error.TIMEOUT:
                alert("The request to get user location timed out.");
                break;
            default:
                alert("An unknown error occurred.");
                break;
        }
    }

    window.onload = initMap;
</script>
</body>
</html>
