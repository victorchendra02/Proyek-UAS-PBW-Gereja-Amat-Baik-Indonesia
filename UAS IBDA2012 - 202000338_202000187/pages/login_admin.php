<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

        <!-- style css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            html,
            body {
                height: 100%;
            }

            body {
                display: flex;
                align-items: center;
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                width: 100%;
                max-width: 330px;
                padding: 15px;
                margin: auto;
            }

            .form-signin .checkbox {
                font-weight: 400;
            }

            .form-signin .form-floating:focus-within {
                z-index: 2;
            }

            .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .removeunderline {
                text-decoration: none;
            }
        </style>

        <link rel="icon" href="../img/church_icon.png" type="image/png" />
        <title>GABI - Login Admin</title>
    </head>
    
    <body class="text-center">
        <main class="form-signin">
            <form action="../adminGereja/login_algo.php" method="post">
                <p class="text-start"><a class="removeunderline" href="../index.php">← Back Home</a></p>
                
                <h1 class="h3 mb-3 fw-normal">
                    <b>LOGIN | <i class="bi bi-person-fill"></i> Admin</b>
                </h1>
                <img class="mb-4" src="../img/church_icon.png" alt="logo" width="72" />
                <h1 class="h3 mb-4 fw-normal">Gereja Amat Baik Indonesia</h1>
                
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "kosong1") {
                        echo "<h5 style='color:red'>Maaf, username masih kosong!</h5>";
                    } else if ($_GET['pesan'] == "kosong2") {
                        echo "<h5 style='color:red'>Maaf, password masih kosong!</h5>";
                        
                    } else if ($_GET['pesan'] == "input") {
                        echo "<h5 style='color:red'>Maaf, username atau password salah!</h5>";
                    } else if ($_GET['pesan'] == "invalid") {
                        echo "<h5 style='color:red'>Maaf, code captcha salah atau masih kosong!</h5>";
                    }
                }
                ?>

                <div class="form-floating">
                    <input type="text" name="user" class="form-control" id="floatingInput" placeholder="username" />
                    <label for="floatingInput">username</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="pswd" class="form-control" id="floatingPassword" placeholder="Password" />
                    <label for="floatingPassword">password</label>
                </div>
                
                <!-- Captcha -->
                <img src="../adminGereja/captcha.php" class="pb-1" style="border-radius= 8px;">
                
                <div class="form-floating mb-4">
                    <input type="text" name="valcaptcha" class="form-control" id="floatingPassword" placeholder="captcha" />
                    <label for="floatingPassword">insert captcha</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">&copy; 1996-2022 GABI / VGCCI | All rights reserved</p>
            </form>
        </main>

        <!-- script bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
