<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Form</title>
</head>
<body>
    <div style="margin-bottom: 20px;">
        <h2>{{ $data['subject'] }}</h2>
    </div>

    <table>
        <tr>
            <th>Name:</th>
            <td>{{ $data['name'] }}</td>
        </tr>

        <tr>
            <th>Email:</th>
            <td>{{ $data['email'] }}</td>
        </tr>

        <tr>
            <th>Message:</th>
            <td>{{ $data['message'] ?? '' }}</td>
        </tr>
    </table>
</body>
</html>
