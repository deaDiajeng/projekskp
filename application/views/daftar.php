<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Sekarang, Gratis!</title>
    <style>
        body {
            background-color:rgb(255, 255, 255);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .form-container {
            background: linear-gradient(to bottom, #ffefd5, #ffe4b5);
            max-width: 600px;
            margin: 50px auto;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: orange;
            color: white;
            border: none;
            padding: 14px;
            width: 100%;
            font-size: 16px;
            margin-top: 30px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: darkorange;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulir Pendaftaran</h2>
        <form action="proses_pendaftaran.php" method="POST">
            <label>Your Name *</label>
            <input type="text" name="name" placeholder="Name" required>

            <label>Email Address *</label>
            <input type="email" name="email" placeholder="Email" required>

            <label>Phone Number *</label>
            <input type="number" name="phone" placeholder="Phone" required>

            <label>Occupation</label>
            <input type="text" name="occupation" placeholder="Digital Marketing">

            <label>Company *</label>
            <input type="text" name="company" placeholder="Organization" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
