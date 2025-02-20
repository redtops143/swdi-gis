<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Report</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Location Report</h2>
    <table>
        <tr>
            <th>Province</th>
            <td>{{ $province }}</td>
        </tr>
        <tr>
            <th>Municipality</th>
            <td>{{ $municipality }}</td>
        </tr>
        <tr>
            <th>Date Generated</th>
            <td>{{ $date }}</td>
        </tr>
    </table>

</body>
</html>