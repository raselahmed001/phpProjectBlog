<!DOCTYPE html>

<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Mono Sign Up</title>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
        <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
        <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />

        <!-- PLUGINS CSS STYLE -->
        <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />

        <!-- MONO CSS -->
        <link id="main-css-href" rel="stylesheet" href="css/style.css" />

        <!-- FAVICON -->
        <link href="images/favicon.png" rel="shortcut icon" />

        <script src="plugins/nprogress/nprogress.js"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5 col-md-10 ">
                    <div class="card card-default mb-0">
                        <div class="card-header pb-0">
                            <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                                <a class="w-auto pl-0" href="/index.html">
                                    <img src="images/logo.png" alt="Mono">
                                    <span class="brand-name text-dark">
                                        <?php
                          
                          if(isset($_GET['message'])){
                            echo $_GET['message'];
                          }
                          
                          ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="container  ">

                            <div class="card-body px-5 pb-5 pt-0">
                                <h4 class="text-dark text-center mb-5">Verify Code</h4>
                                <form action="signup-code-save.php" method="post">
                                    <div class="row">
                                        <div class="form-group col-md-12 mb-4">
                                            <input type="text" name="code" class="form-control input-lg " id="code"
                                                aria-describedby="codeHelp" placeholder="Code"
                                                style="font-size: 1.5rem; padding: 1rem;">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-pill mb-4">Verify</button>
                                    </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>