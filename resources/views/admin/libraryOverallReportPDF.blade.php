<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<img src="{{asset('assets/images/logos.png')}}" alt="homepage" class="light-logo" />
<h2>St. John College</h2>
<h2>Library</h2>
<h3>Report for the date : <?php echo (date("Y-m-d")); ?></h3>
<table class="table table-bordered">
    <tr>
        <td>
            <p> Total Books</p>
        </td>
        <td>
            {{$bookcount}}
        </td>
    </tr>
    <tr>
        <td>
            <p> No of Issued Books</p>
        </td>
        <td>
            {{$issuecount}}
        </td>

    </tr>

    <tr>
        <td>
            <p> No of Total Users</p>
        </td>
        <td>
            {{$membercount}}
        </td>

    </tr>

    <tr>
        <td>
            <p> No of Books Returned</p>
        </td>
        <td>
            {{$returnbookcount}}
        </td>

    </tr>

    <tr>
        <td>
            <p> Total Fine Collected</p>
        </td>
        <td>
            {{$totalfine}}
        </td>



    </tr>
    <br>
    <br>

    <td>
        <p>Signature</p>
        <p>---------------</p>
    </td>
</table>

</body>
</html>


