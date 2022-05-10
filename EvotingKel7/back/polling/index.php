<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Polling</title>
    <style>
        body{
            color: white;
        }
    </style>
</head>
<body>
<?php
         $query=mysqli_query($koneksi,"SELECT*FROM polling");
         
        if (isset($_POST['submit'])){
            $id = isset($_POST['id']) ? $_POST['id'] : '';
            mysqli_query($koneksi,"UPDATE polling SET value=value+1 WHERE id=$id");
        }
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center" style="color: white;">Vote Pemilihan Cakor TI'B 2022</h2>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p class="lead" style="color: white;">Silahkan Pilih Calon Koordinator Terbaik Versimu!</p>
                        <hr>
                        <form action="" method="post">
                            <div>
                                <?php foreach($query as $row):?>
                                <div class="form-group">
                                    <input type="radio" name="id" aria-valuenow="" class="pollradio" value="<?php echo $row['id']?>">
                                    <?php echo $row['cakor']?>
                                </div>
                                <?php endforeach ?>
                            </div>
                            <br>
                            <button type="submit" name="submit" class="btn btn-success" id="btn">submit</button>
                        </form>
                    </div>

                    <div class="col-6">
                        <p class="lead" style="color: white;">Live Polling Pemilihan Koordinator TI'B 2022</p>
                        <hr>
                        <div class="row">
                            <div class="col-2">
                                <?php foreach($query as $row):?>
                                    <div class="mb-3"><?php echo $row['cakor']?></div>
                                <?php endforeach ?>
                            </div>
                            <div class="col-10">
                            <?php foreach($query as $row):?>
                                <div class="progress mt-1 mb-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $row['value']?>" aria-valuemin="0" aria-valuemax="100"><?php echo $row['value']?>%</div>
                                </div>
                            <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>