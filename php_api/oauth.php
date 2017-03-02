<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="php_stylesheet.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
        <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
        <script src="../mockup/js/jquery-3.1.1.min.js"></script>
        <script src="https://unpkg.com/github-api/dist/GitHub.bundle.min.js"></script>
        <script src="repo.js"></script>
        <script>



        </script>
    </head>
    <body>


        <?php require_once '../public/php/vendor/autoload.php';

        require 'RepoInfo.php';
        $code = $_GET['code'];


        // Initialize Guzzle client
        $c = new GuzzleHttp\Client();

        // Create a POST request
        $response = $c->request(
            'POST',
            'https://github.com/login/oauth/access_token',
            [
                'form_params' => [
                    'client_id' => '0abab00f9539752f1578',
                    'client_secret' => '4aaec98ffc90eba7cbb99314b1e6d8a373ef3b72',
                    'code' => $code
                ]
            ]
        );

        // Parse the response object, e.g. read the headers, body, etc.
       // $headers = $response->getHeaders();
        $body = $response->getBody();
        //echo $headers;
       $start =  strpos($body,"=") + 1;
       $length = strpos($body,'&') - $start;
       $token = substr($body, $start, $length);


       $_SESSION['token'] = $token;

       //$rep = new RepoInfo('abhandal','SOEN341-G4');
        echo "<script>var repo = new Repo('abhandal','SOEN341-G4','$token');</script>";

    ?>



    </body>
</html>
