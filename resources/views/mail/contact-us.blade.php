<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Thank you for your interest</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .content {
            max-width: 850px;
        }
        .content .btn-content {
            height: 60px;
        }
        .content .text {
            font-size: 20px;
            white-space: pre-line;
        }
        .content .invite-text {
            text-align: center;
            padding-bottom: 40px;
            font-size: 20px;
        }
        .content .btns {
            margin-top: 30px;
            text-align: center;
        }
        .content .btn {
            padding: 20px 30px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
        .content .accept {
            background-color: #f44336;
        }
        .content .reject {
            margin-right: 30px;
            background-color: #17b979;
        }
        .content .meet-link {
            font-size: 20px;
        }
        .content .meet-link a{
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="content">
    <div class="card">
        <div class="info">
            <h3 class="title">You have a new message</h3>
            <table class="table">
                <tr>
                    <td>URL:</td>
                    <td>{{ $param['url'] }}</td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td>{{ $param['full_name'] }}</td>
                </tr>
                <tr>
                    <td>Company:</td>
                    <td>{{ $param['company'] }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $param['email'] }}</td>
                </tr>
                <tr>
                    <td>Project Description:</td>
                    <td>{{ $param['description'] }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
