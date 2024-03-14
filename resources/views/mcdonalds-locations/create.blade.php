<!DOCTYPE html>
<html>
<head>
    <title>Add New McDonald's Location</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Add New McDonald's Location</h1>
        <form action="{{ route('mcdonalds-locations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="link">Link:</label>
                <input type="text" class="form-control" id="link" name="link" required>
            </div>
            <div class="form-group">
                <label for="domain">Domain:</label>
                <input type="text" class="form-control" id="domain" name="domain" required>
            </div>
            <div class="form-group">
                <label for="displayed_link">Displayed Link:</label>
                <input type="text" class="form-control" id="displayed_link" name="displayed_link" required>
            </div>
            <div class="form-group">
                <label for="snippet">Snippet:</label>
                <textarea class="form-control" id="snippet" name="snippet" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="prerender">Prerender:</label>
                <input type="text" class="form-control" id="prerender" name="prerender" required>
            </div>
            <div class="form-group">
                <label for="block_position">Block Position:</label>
                <input type="number" class="form-control" id="block_position" name="block_position" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
