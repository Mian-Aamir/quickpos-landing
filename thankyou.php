<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - QuickPOS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .thankyou-container {
            max-width: 600px;
            margin: 100px auto;
            text-align: center;
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        .thankyou-icon {
            font-size: 80px;
            color: #10b981;
            margin-bottom: 20px;
        }
        .thankyou-container h1 {
            color: #1e1b4b;
            margin-bottom: 15px;
        }
        .thankyou-container p {
            color: #6b7280;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        .back-home {
            display: inline-block;
            background: #4f46e5;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
        }
        .back-home:hover {
            background: #3730a3;
        }
    </style>
</head>
<body>
    <div class="thankyou-container">
        <div class="thankyou-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1>Thank You!</h1>
        <p>Your message has been sent successfully.<br>We'll get back to you within 24 hours.</p>
        <a href="index.php" class="back-home">← Back to Home</a>
    </div>
</body>
</html>