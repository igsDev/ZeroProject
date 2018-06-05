<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inserimento dati</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- import bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!-- link css -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/main.js"></script>
</head>
<body>
    <div class="jumbotron text-center"  style="margin-bottom:30px;" id="jumbo">
        <h1 class="display-3">ZeroProject</h1>
    </div>
    <div class="container">
        <h2 class="display-4">Aggiorna Info</h2>
        <div class="row">
            <div class="col-sm-8">
                <form action="controller/controller.php" autocomplete="off">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Aggiorna</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>