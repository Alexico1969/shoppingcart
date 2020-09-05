<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Items</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

            <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "password";
                    $database = "shoppingcart";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $database);

                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    echo "Connected successfully";

                    echo "<br/>";

                    // Create database
                    /*$sql = "";

                    if ($conn->query($sql) === TRUE) {
                    echo "Added item successfully";
                    } else {
                    echo "Error creating table: " . $conn->error;
                    } */


                    $conn->close();

            ?>

            @if(count($items) > 0)
                <ul>
                    @foreach ($items as $item)
                        <li> {{ $item->title }} </li>
                    @endforeach

                </ul>
            @else
                Er zijn geen boodschappen
            @endif
            <br/>
            <ul>
                <li>Hertog Jan</li>
                <li>Frikandellen</li>
                <li>Hamburgers</li>
                <li>Mayo</li>
                <li>Curry</li>
                <li>Uien</li>
            </ul>

    </body>
</html>
