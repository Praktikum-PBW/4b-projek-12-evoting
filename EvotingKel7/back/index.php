<!-- 
    Tugas Kelompok 7 - 4B :
    1. Annisa Rahma Putri ( 2010631170055 )
    2. Assyifa Khalif ( 2010631170058 )
    3. Irna Purnahasanah ( 2010631170014 )
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- TEMPLATE CSS BOOSTRAP V5.1-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Judul Tab Page -->
            <title> Evoting </title>
            <style>
                body{
                    background: linear-gradient(270deg, rgba(0,0,0,1) 1%, rgba(101,81,243,1) 77%, rgba(133,118,238,1) 100%);
                }
            </style>
    </head>

<!-- HALAMAN LOGIN yg di manipulasi -->
    <body>
    <!-- Aktif Session untuk mengirim data dari session -->
        <?php
            session_start();
        ?>

        <!-- TEMPLATE JavaScript BOOSTRAP V5.1 -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>

    <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container">
                <a class="navbar-brand h4" href="./index.php">E-Voting TIB<sup>20</sup></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    ria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                    <div class="offcanvas-header bg-danger text-light">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">E-Voting TIB20</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <!-- LIST NAVBAR ITEM -->
                    <div class="offcanvas-body navbar-dark bg-danger">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <!-- membuat tampilan sesuai jenis akun -->
                            <?php
                                if($_SESSION['jns_usr'] == "admin"){
                            ?>
                            <!-- 1. Dashboard -->
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Dashboard</a>
                            </li>

                            <!-- 2 User -->
                            <a class="nav-link" href="index.php?page=user">Data User</a>
                            </li>

                            <!-- 3. Cakor -->
                            <li class="nav-item">
                                <a class="nav-link " href="index.php?page=cakor">Urutan CAKOR</a>
                            </li>

                            <!-- 4. Identitas -->
                            <li class="nav-item">
                                <a class="nav-link " href="index.php?page=identitas">Calon Koordinator</a>
                            </li>

                            <!-- 5. Votes -->
                            <li class="nav-item">
                                <a class="nav-link " href="index.php?page=polling">Votes</a>
                            </li>

                            <!-- 6. Logout -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $_SESSION['nm_usr'] ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                            <?php 
                            } else if($_SESSION['jns_usr'] == "mhs") {
                            ?>
                            <!-- 1. Votes -->
                            <li class="nav-item">
                                <a class="nav-link " href="index.php?page=polling">Votes</a>
                            </li>
                            
                            <!-- 2. Logout -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $_SESSION['nm_usr'] ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>

                            
                            <?php 
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    <!-- PANGGIL FILE MENU -->
        <div class="container mt-4">
            <?php
                include "menu.php";
            ?>
        </div>

    </body>

</html>