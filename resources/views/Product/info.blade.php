<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.boostrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper {
            width: 650px;
            margin: 0 auto;
        }

        .page-header h2 {
            margin-top: 0;
        }

        table tr td:last-child a {
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle = "tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Product List</h2>
                        <a href="#" class = "btn btn-success pull-right">
                            Create New
                        </a>
                    </div>
                    <?php

                    $products = DB::table('product')->get();
                    echo "<table class='table table-bordered table-striped'>";
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Create At</th>';
                    echo '<th>Name</th>';
                    echo '<th>Weight</th>';
                    echo '<th>Price</th>';
                    echo '<th>Action</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    foreach ($products as $product) {
                        echo '<tr>';
                        echo '<td>' . $product->id . '</td>';
                        echo '<td>' . $product->name . '</td>';
                        echo '<td>' . $product->weight . '</td>';
                        echo '<td>' . $product->price . '</td>';
                        echo '<td>';
                        echo '<a href="#" class="btn btn-primary" data-toggle="tooltip" title="Edit">Edit</a>';
                        echo '<a href="#" class="btn btn-danger" data-toggle="tooltip" title="Delete">Delete</a>';
                        echo '</td>';
                        echo '</tr>';
                        mysqli_free_result($result);
                    }

                    echo '</tbody>';
                    echo '</table>';

                    ?>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle = "tooltip"]').tooltip();
        });
    </script>

</body>
</html>
