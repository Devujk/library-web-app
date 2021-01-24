<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKS PORTAL</title>
</head>
<body class="indexbody">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12">
                <h2>
                <nav class="navi" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="welcome.php">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                  </nav>
                  </h2>
                  <h1><u><i>DETAILS</i></u></h1>
                <table class="table">
                    <tr>
                        <td>Book Name</td>
                        <td></td>
                        <td><input id="bname" class="form-control" type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td></td>
                        <td><input id="author" class="form-control" type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td></td>
                        <td><input id="descr" class="form-control" type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td></td>
                        <td><input id="price" class="form-control" type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Year of Publication</td>
                        <td></td>
                        <td><input id="yop" class="form-control" type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Distributer</td>
                        <td></td>
                        <td><input id="distbtr" class="form-control" type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td><button onclick="reset()" class="btn btn-warning">RESET</button></td>
                        <td></td>
                        <td><button onclick="submit()" class="btn btn-warning">SUBMIT</button></td>
                    </tr>
                </table>
                
            </div>
        </div>
    </div>
    <script>
        function reset()
        {
            console.log("RESET")
            var n1=document.getElementById("bname").value 
            var n2=document.getElementById("author").value 
            var n3=document.getElementById("descr").value 
            var n4=document.getElementById("price").value 
            var n5=document.getElementById("yop").value 
            var n6=document.getElementById("distbtr").value 
        }
        function submit()
        {
            console.log("SUBMIT")
        }
    </script>
</body>
</html>