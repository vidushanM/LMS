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
<!--<img src="{{asset('assets/images/logos.png')}}" alt="homepage" class="light-logo" />-->
<h2>St.John College</h2>
<p>Library Card</p>
<table class="table table-bordered">
    <tr>
        <td>
            {{$newAddMember["firstname"]}}
        </td>
        <td>
            {{$newAddMember["lastname"]}}
        </td>
    </tr>
    <tr>
        <td>
            {{$newAddMember["memberphone"]}}
        </td>
        <td>
            {{$newAddMember["memberid"]}}
        </td>

    </tr>
    <?php
    echo \Milon\Barcode\DNS1D::getBarcodeHTML($newAddMember["memberid"], "C39");
    //echo '<img src="data:image/png,' . DNS1DFacade::getBarcodePNG("4", "C39+") . '" alt="barcode"   />';
    ?>

</table>
</body>
</html>

