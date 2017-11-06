<?php
include 'connect.php';
$con= connect();
#session_start();
#$_SESSION['id']=$id;
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>View Student Results</title>

    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/view_results_choose.css">

</head>


<header>
    <h1 style="..."><strong>CRESCENDO MUSIC ACADEMY</strong></h1>
</header>


<div class="main-content">


    <div class="form-mini-container">


        <h1>View Student Results</h1>

        <form class="form-mini" method="post" action="#">

            <div class="form-row">
                <input type="text" name="name" placeholder="Your Name">
            </div>

            <div class="form-row">
                <input type="email" name="email" placeholder="Your Email">
            </div>

            <div class="form-row">
                <label>
                    <select name="dropdown">
                        <option>Choose an option</option>
                        <option>Option One</option>
                        <option>Option Two</option>
                        <option>Option Three</option>
                        <option>Option Four</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <label class="form-checkbox">
                    <input type="checkbox" name="checkbox" checked>
                    <span>Checkbox</span>
                </label>
            </div>

            <div class="form-row">
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 1</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 2</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 3</span>
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-row form-last-row">
                <button type="submit">Submit Form</button>
            </div>

        </form>
    </div>


</div>

</body>

</html>