<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeepney Fare Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
        }
        input[type="number"], select {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background: linear-gradient(90deg, #1e90ff, #00bfff);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
        }
        input[type="submit"]:hover {
            background: linear-gradient(90deg, #00bfff, #1e90ff);
            transform: scale(1.05);
        }
        input[type="submit"]:active {
            background: #1e90ff;
            transform: scale(0.98);
        }
        .result {
            text-align: center;
            margin-top: 20px;
        }
    </style>

</head>
<body>
    <div class="container">
        <h2>Jeepney Fare Calculator</h2>
        <form action="" method="POST">
            <label for="distance">Distance (km):</label>
            <input type="number" id="distance" name="distance" step="0.01" min="0" required>

            <label for="passengerType">Passenger Type:</label>
            <select id="passengerType" name="passengerType" required>
                <option value="regular">Regular</option>
                <option value="student">Student / Elderly</option>
            </select>

            <input type="submit" value="Calculate Fare">
        </form>

        <?php
        include 'calculate_fare.php';
        ?>

    </div>
</body>
</html>
