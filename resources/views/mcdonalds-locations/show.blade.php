<!DOCTYPE html>
<html>
<head>
    <title>Show McDonald's Location</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>McDonald's Location Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $mcdonaldsLocation->title }}</h5>
                <p class="card-text">Link: <a href="{{ $mcdonaldsLocation->link }}" target="_blank">{{ $mcdonaldsLocation->link }}</a></p>
                <p class="card-text">Domain: {{ $mcdonaldsLocation->domain }}</p>
                <p class="card-text">Displayed Link: {{ $mcdonaldsLocation->displayed_link }}</p>
                <p class="card-text">Snippet: {{ $mcdonaldsLocation->snippet }}</p>
                <p class="card-text">Prerender: {{ $mcdonaldsLocation->prerender }}</p>
                <p class="card-text">Block Position: {{ $mcdonaldsLocation->block_position }}</p>
            </div>
        </div>
        <a href="{{ route('mcdonalds-locations.index') }}" class="btn btn-primary mt-3">Back to Locations</a>
    </div>
</body>
</html>
