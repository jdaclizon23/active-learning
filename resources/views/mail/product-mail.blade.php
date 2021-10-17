<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Mail</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <style>
        *{
            font-size: 14px;
        }

        .container{
            width: 100% !important;
            padding-right: 15px !important;
            padding-left: 15px !important;
            margin-right: auto !important;
            margin-left: auto !important;
        }


        .row{
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
            margin-right: -15px !important;
            margin-left: -15px !important;
        }


        .col-md-12 {
            -ms-flex: 0 0 100% !important;
            flex: 0 0 100% !important;
            max-width: 100% !important;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>This are the following details for newly created product</h3>

            <ul>
                <li>
                    <p style="font-weight: bold">Description</p>
                    <p>{{$data->description ?? ''}}</p>
                </li>

                <hr>

                <li>
                    <p style="font-weight: bold">Size :</p>
                    <p>{{$data->size ?? ''}}</p>
                </li>


                <hr>

                <li>
                    <p style="font-weight: bold">Price :</p>
                    <p>{{$data->price ?? ''}}</p>
                </li>
            </ul>

        </div>
    </div>
</div>
</body>
</html>
