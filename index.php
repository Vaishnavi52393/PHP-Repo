<?php
$date = date("d M Y");
$time = date("h:i:s A");
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP on OpenShift</title>
    <style>
        body{
            margin:0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc, #ff6a00);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            color:white;
        }

        .card{
            text-align:center;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding:50px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.3);
            width:400px;
        }

        h1{
            margin-bottom:15px;
            font-size:2.5rem;
        }

        p{
            font-size:1.2rem;
            margin:10px 0;
        }

        .badge{
            display:inline-block;
            margin-top:20px;
            padding:10px 20px;
            border-radius:25px;
            background:white;
            color:#6a11cb;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>🚀 PHP on OpenShift</h1>
    <p>Application deployed successfully!</p>
    <p>📅 <?php echo $date; ?></p>
    <p>⏰ <?php echo $time; ?></p>

    <div class="badge">DevOps Project</div>
</div>

</body>
</html>
