<html>
<head>
    <meta name="viewport" content="width = device-width, initial-scale = 1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<style>
    th, td {
        text-align: center;
    }

    .title {
        font-size: 4rem;
    }
</style>
<div class="container">
    <div class="title">We have got a new appointment request.</div>
    <br>
    <table class="table" width="100%" border="1">
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Prefer Date</th>
            <th>Type</th>
           <?php
                if($typeDetail != null)
                    echo '<th>Type Detail</th>';
                
           ?>
            
        </tr>
        <tr>
            <td>{{$name}}</td>
            <td>{{$gen}}</td>
            <td>{{$address}}</td>
            <td>{{$contact}}</td>
            <td>{{$email}}</td>
            <td>{{$date}}</td>
            <td>{{$type}}</td>
            <?php
                if($typeDetail != null){
                    echo '<td>'.$typeDetail.'</td>';
                }
           ?>

        </tr>
    </table>
    <a href="mailto:{{$email}}" class="btn btn-primary">Reply</a>
</div>
</body>
</html>
