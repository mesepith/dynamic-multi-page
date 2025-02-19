<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services for Pincode {{ $selectedPincode->pincode }}</title>
</head>
<body>
    <h1>Services for Pincode: {{ $selectedPincode->pincode }}</h1>

    <h3>All Pincodes:</h3>
    <ul>
        @foreach ($allPincodes as $pincode)
            <li>
                <a href="{{ route('pincode', $pincode->pincode) }}">{{ $pincode->pincode }}</a>
            </li>
        @endforeach
    </ul>

    <h3>Available Services:</h3>
    <ul>
        @foreach ($services as $service)
            <li>{{ $service->name }}</li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
