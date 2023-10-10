<?php
include("conexion.php");
$con = conectar();
$id = $_GET['id'];


$sql = "SELECT * FROM lowlights WHERE ID='$id'";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .login-box {

            width: auto;
            padding: 5%;
            margin: 20px auto;
            background: rgba(0, 0, 0, .9);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box p:first-child {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #fff;
            font-size: 12px;
        }

        input[type="submit"],
        a {
            position: relative;
            padding: 10px 20px;
            font-weight: bold;
            background-color: black;
            color: white;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 3px
        }

        input[type="submit"],
        a:hover {
            background: #fff;
            color: #272727;
            border-radius: 5px;
        }


        img {
            width: 30%;
        }
    </style>

    <body>
        <header>
            <div align="left">
                <label style="font-family: 'Poppins', sans-serif;font-size:26px">LOWLIGHTS DEL PERIODO</label>
            </div>
            <div align="left">
                <img src="imo.jpg ">
            </div>
        </header>

        <div class="container" style="width: 1200px;height:600px ;">
            <form action="updeteLowlights.php" method="post">
                <div class="row">
                    <div class="panel">
                        <div class="col-sm-12" class="panel-body">
                            <div class="login-box">
                                <form class="myform">
                                    <div class="user-box">
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                                        <label>Incidente</label>
                                        <br></br>
                                        <textarea style="background: #e2e2e2;color:black;resize:none" required="" name="incidente" type="text" class="form-control" rows="5"><?php echo $row['incidente'] ?></textarea>
                                        <br></br>

                                    </div>
                                    <div class=" user-box">

                                        <label>Impacto</label>
                                        <br></br>
                                        <textarea style="background: #e2e2e2;color:black;resize:none" required="" name="impacto2" type="text" class="form-control" rows="5"><?php echo $row['impacto2'] ?></textarea>
                                        <br></br>

                                    </div>

                                    <div class=" user-box">

                                        <label>Acción de mejora</label>
                                        <br></br>
                                        <textarea style="background: #e2e2e2;color:black;resize:none" required="" name="accionMejora" type="text" class="form-control" rows="5"><?php echo $row['accionMejora'] ?></textarea>
                                        <br></br>

                                    </div>
                                    <div align="center">
                                        <input type="submit" class="btn btn-primary  " value="Guardar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php
    }
        ?>
        </div>
    </body>

    </html>