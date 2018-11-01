<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    PDF Product
                </div>

                <div>
                    <ul>
                        @foreach($pdf_products as $product)
                            <li>
                                {{$product->product_name}}
                            </li>

                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </body>
</html>
