<!DOCTYPE html>
<html>
<head>
    <title>McDonald's Locations</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        /* Custom CSS to align buttons in the action column */
        .action-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>McDonald's Locations</h1>
        <p>Assignment BY Aman Sharma  Perfrom Crud Operation and Click to download Excel one Click </p>
        <!-- Button to Add New Location -->
        <a href="{{ route('mcdonalds-locations.create') }}" class="btn btn-primary mb-3">Add New Location</a>
        
        <!-- Button to Export to CSV -->
        <a href="{{ route('mcdonalds-locations.export') }}" id="export-btn" class="btn btn-success mb-3">Export CSV</a>
        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Domain</th>
                    <th>Displayed Link</th>
                    <th>Snippet</th>
                    <th>Prerender</th>
                    <th>Block Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mcdonaldsLocations as $location)
                <tr>
                    <td>{{ $location->title }}</td>
                    <td><a href="{{ $location->link }}">{{ $location->domain }}</a></td>
                    <td><a href="{{ $location->link }}">{{ $location->displayed_link }}</a></td>
                    <td>{{ $location->snippet }}</td>
                    <td>{{ $location->prerender }}</td>
                    <td>{{ $location->block_position }}</td>
                    <td class="action-buttons">
                        <!-- Button to Edit Location -->
                        <a href="{{ route('mcdonalds-locations.edit', $location->id) }}" class="btn btn-sm btn-info mr-2">Edit</a>
                        
                        <!-- Form for Deleting Location -->
                        <form action="{{ route('mcdonalds-locations.destroy', $location->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this location?')">Delete</button>
                        </form>
                        
                        <!-- Button to View Location Details -->
                        <a href="{{ route('mcdonalds-locations.show', $location->id) }}" class="btn btn-sm btn-secondary">View </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // Update the export button text with current time and date
        $(document).ready(function() {
            var now = new Date();
            var formattedDateTime = now.toLocaleString();
            $('#export-btn').text('Export CSV (' + formattedDateTime + ')');
        });
    </script>
</body>
</html>
