<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Template</title>
    <style>
        /* Style the table */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        /* Style the table header */
        th {
            background-color: #f2f2f2;
        }

        /* Style the table header and data cells */
        th,
        td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        /* Style alternating rows */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Category Table</h1>
    <table>
        <thead>
            <tr>
                <th>Sel No.</th>
                <th>Category</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $category)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
