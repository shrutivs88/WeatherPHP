<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="w.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <style>
        h3 {
    color: #f0f8ff;
        }
    </style>
    <title>Weather App</title>
    </head>
    <body>
        <div class="container">
            <h3>Weather Forcast Places Of India</h3>
            <form method="GET">
                <fieldset class="form-group">
                    <label for="city" id="c">Enter the name of a city.</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Bengaluru, Hyderabad"  value="<?php echo isset($_GET['city']); ?>">
                </fieldset>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div id="weather">
                <?php include "weather.php";?>
                <?php  
                    if ($weather) { 
                        echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
                            
                    } else if ($error) {
                            
                        echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                            
                    }
                ?>
            </div>
        </div>
        <!-- jQuery first, then Bootstrap JS. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    </body>


</html>