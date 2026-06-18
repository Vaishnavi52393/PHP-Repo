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
            font-family:Arial,sans-serif;
            background:linear-gradient(135deg,#4facfe,#00f2fe);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            margin:0;
            color:white;
        }
        .card{
            text-align:center;
            background:rgba(255,255,255,.15);
            padding:40px;
            border-radius:15px;
        }
    </style>
</head>
<body>
<div class="card">
    <h1>🚀 PHP on OpenShift</h1>
    <p>Application deployed successfully!</p>
    <p>📅 <?php echo $date; ?></p>
    <p>⏰ <?php echo $time; ?></p>
</div>
</body>
</html>
