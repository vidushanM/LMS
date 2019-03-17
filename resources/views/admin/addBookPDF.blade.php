<?php
use Milon\Barcode\Facades\DNS1DFacade;
use Milon\Barcode\Facades\DNS2DFacade;

?>

<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<img src="{{asset('assets/images/logos.png')}}" alt="homepage" class="light-logo" />
<h2>Library Management System</h2>
<table class="table table-bordered">
    <tr>
        <td>
            {{$newAddBook["bookname"]}}
        </td>
        <td>
            {{$newAddBook["isbn"]}}
        </td>
    </tr>
    <tr>
        <td>
            {{$newAddBook["authorname"]}}
        </td>
        <td>
            {{$newAddBook["barcode"]}}
        </td>

    </tr>
    <?php
       echo \Milon\Barcode\DNS1D::getBarcodeHTML($newAddBook["barcode"], "C39");
    //echo '<img src="data:image/png,' . DNS1DFacade::getBarcodePNG("4", "C39+") . '" alt="barcode"   />';
    ?>

</table>
</body>
</html>

