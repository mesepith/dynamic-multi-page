<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Services</title>
</head>
<body>
    <h1>Welcome to Our Garage : {{$selectedPincode->garage_name}}</h1>

    <h3>Pincode: {{ $selectedPincode->pincode }}</h3>
    <p>Address: {{$selectedPincode->address}} </p>

    <h3>Available Services:</h3>
    <ul>
        @foreach ($services as $service)
            <li>{{ $service->name }}</li>
        @endforeach
    </ul>

    <h3>Other Garages:</h3>
    <ul>
        @foreach ($allPincodes as $pincode)
            <li>
                <a href="{{ route('pincode', $pincode->pincode) }}">
                   {{$pincode->garage_name}} : {{ $pincode->pincode }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
