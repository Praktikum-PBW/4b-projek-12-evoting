<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TEMPLATE CSS BOOSTRAP V5.1-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <!-- Judul Tab Page -->
        <title>E-voting TIB20</title>
    
    <!-- Logo Tab Page -->
        <link rel="icon" href="./back/assets/img/LOGIN/logoevoting.png">
        
    <!-- CSS Internal -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body{
                /* background: rgb(0,0,0); */
                background: linear-gradient(300deg, rgba(0,0,0,1) 1%, rgba(101,81,243,1) 77%, rgba(133,118,238,1) 100%);

                display: flex;
                flex-direction: column;
                
                width: 100%;
                height: 100vh;
                margin: -20px 0 50px;

                justify-content: center;
                align-items: center;
                
                overflow: hidden; /* menghilangkan slide kursor atas bawah*/
            }

            p{
                letter-spacing: 0.5px;
            }

        /* BACKGROUND */
            .bg-shape{
                position: absolute;
                border-radius: 50%;
            }

            .circle-top{
                filter: blur(20px);

                width: 400px;
                height: 400px;

                transform: translate(-150%, -3%);

                left: -160;
                top: -160;

                background: linear-gradient(#50a4e4,#8576EE,#463c92);
            }

            .circle-middle{
                filter: blur(90px);

                width: 350px;
                height: 350px;

                transform: translate(-340%, 60%);

                left: 50%;
                top: 50%;

                background: linear-gradient(60deg,#50a4e4,#8576EE,#463c92);
            }

            .circle-bottom{
                filter: blur(200px);


                width: 900px;
                height: 900px;

                transform: translate(60%, -15%);

                right: -160px;
                bottom: -160px;

                background: linear-gradient(180deg,#50a4e4,#8576EE,#463c92);
            }

            .noise::before {
                background: url("./back/assets/img/LOGIN/noise.gif");
                content: '';

                position: fixed;

                top: 0;
                left: 0;

                width: 100vw;
                height: 100vh;
                
                opacity: .04;

                z-index: 1000;

                pointer-events: none;
            }

        /* FORM */
            form{
                    background-color: #ffffff;
                    display: flex;
                    flex-direction: column;

                    padding: 0px 50px;
                    height: 100%;

                    justify-content: center;
                    /* align-items: center;
                    text-align: center; */
                }

            /* Button style */
                .btn {
                    padding: 12px 45px;
                    font-size: 12px;
                    font-weight: bold;

                    text-transform: uppercase; /* Kapital */

                    letter-spacing: 1px;

                    border: none;
                    border-radius: 20px;

                    transition: transform 80ms ease-in;

                    cursor: pointer;

                    outline: none;

                    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.4);
                }

                .btn:hover {
                    background-color: #6551F3;
                    box-shadow: 0px 5px 10px rgba(101, 81, 243, 0.4);
                    
                    transform: translateY(-6px);
                }

                button:active{
                    transform: scale(.95);
                }

            /* Container Style : FORM SHAPE */
                .container{
                    position: relative;
                    overflow: hidden;

                    width: 900px;
                    max-width: 100%;
                    min-height: 700px;
                    
                    border-radius: 30px;

                    background: rgba( 255, 255, 255, 0.80 );
                    backdrop-filter: blur( 2px );
                    -webkit-backdrop-filter: blur( 2px );

                    box-shadow: 0 4px 80px 0 rgba(101, 81, 243, 0.5), 0 4px 80px 0 rgba(101, 81, 243, 0.1);

                    
                    transition: all 0.6s ease-in-out;

                }

                .form-container{
                    position: absolute;
                    top: 0;
                    height: 100%;
                    transition: all 0.6s ease-in-out;
                }

                .form-container form{
                    padding: 0 50px;
                    height: 100%;

                    display: flex;
                    flex-direction: column;

                    justify-content: center;
                }

                .form-container input{
                    border-radius: 20px
                }


                /* Container Daftar - Masuk */
                    .overlay-container{
                        position: absolute;

                        top: 0;
                        left: 50%;

                        width: 50%;
                        height: 100%;

                        overflow: hidden;

                        transition: transform 0.6s ease-in-out;

                        z-index: 100; /* Form di bawah Display */
                    }

                    .overlay{
                        position: relative;

                        background: linear-gradient(175deg, rgba(80,164,228,1) 0%, rgba(93,111,238,1) 30%, rgba(101,81,243,1) 47%, rgba(38,18,83,1) 100%);

                        left: -100%;
                        height: 100%;
                        width: 200%;

                        transform: translateX(0);
                        transition: transform 0.6s ease-in-out;
                    }

                    .overlay-panel{
                        position: absolute;

                        top: 0;
                        display: flex;

                        flex-direction: column;

                        justify-content: center;
                        text-align: center;
                        align-items: center;

                        padding: 0 40px;
                        height: 100%;
                        width: 50%;

                        transform: translateX(0);
                        
                        transition: transform 0.6s ease-in-out;
                    }

                .clr{
                    color: #6551F3;
                    font-size: 40px;
                }

                    
            /* Login */
                /* Container - Button Login arah ke Form Login */
                    .overlay-left{
                        transform: translateX(-20%);
    
                        color: #CEC7FF;
                    }

                .sign-in-container{
                    left: 0;
                    width: 50%;
                    z-index: 2;
                }


            /* Regist */
                /* Container - Button Registrasi arah ke Form Regist */
                    .overlay-right{
                        right: 0;
                        transform: translateX(0);

                        color: #CEC7FF;
                    }

                .sign-up-container{
                    left: 0;
                    width: 50%;
                    opacity: 0;
                    z-index: 1;
                }

            /* Animation Container */

                /* 1. FORM LOGIN - BUTTON REGISTRASI */
                    .container.right-panel-active .overlay-right{
                        transform: translateX(20%);
                    }

                    /* FORM - KE KANAN */
                    .container.right-panel-active .sign-in-container{
                        transform: translateX(100%);
                    }

                    /* DISPLAY - KE KIRI */
                    .container.right-panel-active .overlay-container{
                        transform: translateX(-100%);
                    }

                /* 2. FORM REGISTRASI - BUTTON LOGIN */
                    .container.right-panel-active .overlay-left{
                        transform: translateX(0);
                    }

                    /* FORM - KE KIRI */
                        .container.right-panel-active .sign-up-container{
                            transform: translateX(100%);
                            opacity: 1;
                            z-index: 5;
                            animation: slide 0.6s;
                        }

                    /* DISPLAY - KE KANAN */
                    .container.right-panel-active .overlay{
                        transform: translateX(50%);
                    }


        </style>
    </head>

    <body>
    <!-- TEMPLATE JavaScript BOOSTRAP V5.1 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!-- aktif session -->

    <!-- Background Noise -->
        <div class="noise"></div>

    <!-- Background Gradient Linear-->
        <div class="bg">
            <div class="bg-shape circle-top"></div>
            <div class="bg-shape circle-middle"></div>
            <div class="bg-shape circle-bottom"></div>
        </div>

    <!-- FORM REGIST & LOGIN -->
        <div class="container" id="container">

        <!-- 1. REGISTRASI AKUN -->
            <div class="form-container sign-up-container">

            <!-- FORM Registration -->
                <form action="regist-process.php" class="regist-form" method="POST">

                <!-- HEADER -->
                        <h1 class="text-center fw-bold clr"> Registrasi Akun </h1>
                        <p class="text-center text-secondary">Masukan Detail akun, untuk akses E-Voting</p>

                <hr class="bg-secondary">

                    <!-- 1. ID -->
                        <div class="form-group mb-3">
                            <label for="id_usr" class="form-label text-dark">ID</label>
                            <input type="number" name="id_usr" id="id_usr" class="form-control" placeholder="2010631170XXX">
                        </div>

                    <!-- 2. Nama Lengkap -->
                        <div class="form-group mb-3">
                            <label for="nm_usr" class="form-label text-dark">Nama</label>
                            <input type="text" name="nm_usr" id="nm_usr" class="form-control" placeholder="Masukan Nama Lengkap">    
                        </div>

                    <!-- 3. Email -->
                        <div class="form-group mb-3">
                            <label for="email" class="form-label text-dark">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="NPM@student.unsika.ac.id">
                        </div>
                                                
                    <!-- 4. Password -->
                        <div class="form-group mb-3">
                            <label for="pass" class="form-label text-dark">Password</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Masukan Password">
                        </div>

                    <!-- 5. Jenis Akun -->
                        <div class="form-group mb-3">
                            <label for="jns_usr" class="form-label text-dark">Jenis Akun</label>
                            <select class="form-control" name="jns_usr" id="jns_usr">
                                <option value="admin">Admin</option>
                                <option value="mhs">Mahasiswa</option>
                            </select>
                        </div>

                <br>
                                                
                    <!-- BUTTON Simpan -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-dark " name="daftar">Simpan</button>
                        </div>
                </form>
            </div>

        <!-- 2. Login Akun -->
            <div class="form-container sign-in-container">

            <!-- FORM Log-in -->
                <form action="login-process.php" class="login-form" method="POST">

                <!-- HEADER -->

                        <img src="./back/assets/img/LOGIN/logoevoting.png" class="mx-auto mb-3  " width="60">

                        <h1 class="fw-bold text-center clr"> Login Akun </h1>
                        <p class="text-center text-secondary ">Masukan NPM & Password, <br> untuk Memulai Voting</p>
                    

                <hr class="bg-secondary">

                    <!-- 1. NPM -->
                        <div class="input-field mb-3">
                            <label for="id_usr" class="form-label text-dark">NPM</label>
                            <input type="number" class="form-control" name="id_usr" id="id_usr" placeholder="Masukan 13 digit NPM">
                        </div>

                    <!-- 2. PASSWORD -->
                    
                        <div class="input-field mb-3">
                            <label for="pass" class="form-label text-dark">Password</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Masukan Password">
                        </div>

                <br>
                    
                <!-- BUTTON LOGIN -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-dark" name="login">Masuk</button>
                    </div>
                </form>
            </div>

        <!-- 3. Display Login-Regist -->
            <div class="overlay-container">
                <div class="overlay">

                <!-- Display Kiri -->
                    <div class="overlay-panel overlay-left">
                        <img src="./back/assets/img/LOGIN/2.png" class="mx-auto mb-3  " width="180">
                        <h1 class="text-light fw-bold"> B-estie Vote yuk! </h1>
                        <p class="">Udeh punya Akun? langsung aje gas ga si, kite Login!</p>

                        <br>

                            <button class="btn btn-dark" id="signIn">LogIn</button>
                    </div>

                <!-- Display Kanan -->
                    <div class="overlay-panel overlay-right">
                        <img src="./back/assets/img/LOGIN/1.png" class="mx-auto mb-3  " width="180">
                        <h1 class="text-white fw-bold"> Hi, B-estie! </h1>
                        <p class="">Belum Punya akun? Chill dongs bestie! khusus orang spesial kaya u, ai buka pendaftarannya sampe wisuda. buruan daftar, GPL! :) </p>

                        <br>
                            <button class="btn btn-dark" id="signUp">Registrasi</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Java Script Transisi Animasi Form Login - Registrasi -->
        <script>
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () =>{ container.classList.add('right-panel-active');
            });

            signInButton.addEventListener('click', () =>{ container.classList.remove('right-panel-active');
            });

        </script>

    </body>

</html>