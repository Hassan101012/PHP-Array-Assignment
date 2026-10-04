<?php

// Questin 1 Declaring Array

// 1. Declare and initialize the array
$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];


// 2. Calculate total of all elements
$total = 0;

foreach ($array as $element) {
    $total += $element;
}


// 3. Calculate total of even elements
$evenTotal = 0;

foreach ($array as $element) {
    if ($element % 2 == 0) {
        $evenTotal += $element;
    }
}


// 4. Calculate total of odd elements
$oddTotal = 0;

foreach ($array as $element) {
    if ($element % 2 != 0) {
        $oddTotal += $element;
    }
}


// 5. Find minimum element and its positions
$min = min($array);
$minPositions = [];

foreach ($array as $index => $element) {
    if ($element == $min) {
        $minPositions[] = $index;
    }
}


// 6. Find maximum element and its positions
$max = max($array);
$maxPositions = [];

foreach ($array as $index => $element) 
    if ($element == $max) {
        $maxPositions[] = $index;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Array Assignment</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 850px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #222;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .array-box {
            background: #f8f9fa;
            border: 1px solid #ddd;
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .array-box h2 {
            margin-top: 0;
            color: #333;
        }

        .numbers {
            font-size: 18px;
            font-weight: bold;
            color: #444;
            word-spacing: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background: #333;
            color: white;
            padding: 15px;
            text-align: left;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f5f5f5;
        }

        .value {
            font-weight: bold;
            color: #0066cc;
        }

        .minimum {
            color: #d62828;
            font-weight: bold;
        }

        .maximum {
            color: #16803c; 
            font-weight: bold;
        }

        .positions {
            color: #555;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #888;
            font-size: 14px;
        }
    </style>

</head>

<body>

<div class="container">

    <h1>PHP Array Assignment</h1>

    <p class="subtitle">
        Array Elements and Calculations
    </p>


    <!-- Array Elements -->
    <div class="array-box">

        <h2>All Elements</h2>

        <div class="numbers">
            <?php
            foreach ($array as $element) {
                echo $element . " ";
            }
            ?>
        </div>

    </div>


    <!-- Results Table -->
    <h2>Results</h2>

    <table>

        <tr>
            <th>Calculation</th>
            <th>Result</th>
        </tr>

        <tr>
            <td>Total of All Elements</td>
            <td class="value">
                <?php echo $total; ?>
            </td>
        </tr>

        <tr>
            <td>Total of Even Elements</td>
            <td class="value">
                <?php echo $evenTotal; ?>
            </td>
        </tr>

        <tr>
            <td>Total of Odd Elements</td>
            <td class="value">
                <?php echo $oddTotal; ?>
            </td>
        </tr>

        <tr>
            <td>Minimum Element</td>
            <td class="minimum">
                <?php echo $min; ?>
            </td>
        </tr>

        <tr>
            <td>Minimum Positions</td>
            <td class="positions">
                <?php echo implode(", ", $minPositions); ?>
            </td>
        </tr>

        <tr>
            <td>Maximum Element</td>
            <td class="maximum">
                <?php echo $max; ?>
            </td>
        </tr>

        <tr>
            <td>Maximum Positions</td>
            <td class="positions">
                <?php echo implode(", ", $maxPositions); ?>
            </td>
        </tr>

    </table>


    <div class="footer">
        PHP Array Assignment © 2026
    </div>

</div>

</body>

</html>



<!-- Associative Arrays of two Dimentions -->
 


<?php

$colors = [
    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],

    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],

    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]
];

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $rowName => $row) {

    echo "<tr>";

    echo "<th>" . $rowName . "</th>";

    echo "<td>" . $row["Red"] . "</td>";
    echo "<td>" . $row["Green"] . "</td>";
    echo "<td>" . $row["Blue"] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>




<!-- Declaring an Array Of two dimensions -->




<?php

$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

$rows = count($array);
$cols = count($array[0]);

// Odd and Even
$odd = 0;
$even = 0;
$total = 0;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {

        $total += $array[$i][$j];

        if ($array[$i][$j] % 2 == 0) {
            $even++;
        } else {
            $odd++;
        }
    }
}

// Minimum and Maximum
$min = $array[0][0];
$max = $array[0][0];

$minPositions = [];
$maxPositions = [];

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {

        if ($array[$i][$j] < $min) {
            $min = $array[$i][$j];
        }

        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
        }
    }
}

// Find positions
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {

        if ($array[$i][$j] == $min) {
            $minPositions[] = "[$i,$j]";
        }

        if ($array[$i][$j] == $max) {
            $maxPositions[] = "[$i,$j]";
        }
    }
}

// Row totals
$rowTotals = [];

for ($i = 0; $i < $rows; $i++) {
    $sum = 0;

    for ($j = 0; $j < $cols; $j++) {
        $sum += $array[$i][$j];
    }

    $rowTotals[] = $sum;
}

// Column totals
$columnTotals = [];

for ($j = 0; $j < $cols; $j++) {
    $sum = 0;

    for ($i = 0; $i < $rows; $i++) {
        $sum += $array[$i][$j];
    }

    $columnTotals[] = $sum;
}

// Diagonals
$mainDiagonal = 0;
$secondDiagonal = 0;

for ($i = 0; $i < $rows; $i++) {
    $mainDiagonal += $array[$i][$i];
    $secondDiagonal += $array[$i][$cols - 1 - $i];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP 2D Array</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            margin: 0;
            padding: 30px;
        }

        .container {
            width: 750px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        h2 {
            color: #34495e;
            border-bottom: 2px solid #ddd;
            padding-bottom: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background: #34495e;
            color: white;
        }

        td {
            font-size: 18px;
        }

        tr:nth-child(even) {
            background: #f8f9fa;
        }

        .result {
            background: #f8f9fa;
            padding: 15px;
            margin: 10px 0;
            border-left: 5px solid #34495e;
            border-radius: 5px;
        }

        .number {
            font-weight: bold;
            color: #2c3e50;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>2D Array PHP Program</h1>

    <h2>Array Elements</h2>

    <table>
        <tr>
            <th>Row 1</th>
            <th>Row 2</th>
            <th>Row 3</th>
        </tr>

        <?php
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";

            for ($j = 0; $j < $cols; $j++) {
                echo "<td>" . $array[$i][$j] . "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>

    <h2>Results</h2>

    <div class="result">
        Total Odd Elements:
        <span class="number"><?php echo $odd; ?></span>
    </div>

    <div class="result">
        Total Even Elements:
        <span class="number"><?php echo $even; ?></span>
    </div>

    <div class="result">
        Total of All Elements:
        <span class="number"><?php echo $total; ?></span>
    </div>

    <div class="result">
        Row Totals:
        <span class="number">
            <?php echo implode(" , ", $rowTotals); ?>
        </span>
    </div>

    <div class="result">
        Column Totals:
        <span class="number">
            <?php echo implode(" , ", $columnTotals); ?>
        </span>
    </div>

    <div class="result">
        Main Diagonal:
        <span class="number"><?php echo $mainDiagonal; ?></span>
    </div>

    <div class="result">
        Second Diagonal:
        <span class="number"><?php echo $secondDiagonal; ?></span>
    </div>

    <div class="result">
        Minimum Element:
        <span class="number"><?php echo $min; ?></span>
        <br>
        Positions:
        <?php echo implode(" , ", $minPositions); ?>
    </div>

    <div class="result">
        Maximum Element:
        <span class="number"><?php echo $max; ?></span>
        <br>
        Positions:
        <?php echo implode(" , ", $maxPositions); ?>
    </div>

</div>

</body>
</html>


<?php

// Associative 2D Array
$students = [

    "CA221" => [
        "Name" => " Ahmed Ali",
        "Phone" => "615000000",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],

    "CA223" => [
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0515111111",
        "Address" => "Taleex, Hodan"
    ],

    "CA224" => [
        "Name" => "Hassan Jimale ",
        "Phone" => "615222222",
        "Address" => "Macmacaanka, Dharkeynley"
    ],
];

echo "<h2>Student Information</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th>Student ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $id => $student) {

    echo "<tr>";

    echo "<td>$id</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>



<?php

$students = [

    "Semester 1" => [

        "subject1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        ],

        "subject2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        ],

        "subject3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        ]
    ],

    "Semester 2" => [

        "subject1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0
        ],

        "subject2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        ],

        "subject3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        ]
    ]
];

?>

<!DOCTYPE html>
<html>
<head>

    <title>Student Transcript</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            padding: 30px;
        }

        .container {
            width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #34495e;
            color: white;
            padding: 12px;
        }

        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #f8f9fa;
        }

        .pass {
            color: green;
            font-weight: bold;
        }

        .fail {
            color: red;
            font-weight: bold;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Student Transcript</h1>

    <table>

        <tr>
            <th>Semester</th>
            <th>Course</th>
            <th>CW1</th>
            <th>MidTerm</th>
            <th>CW2</th>
            <th>Final</th>
            <th>Total</th>
            <th>Status</th>
        </tr>

        <?php

        foreach ($students as $semester => $courses) {

            foreach ($courses as $course => $marks) {

                $total =
                    $marks["CW1"] +
                    $marks["MidTerm"] +
                    $marks["CW2"] +
                    $marks["Final"];

                if ($total >= 50) {
                    $status = "Pass";
                    $class = "pass";
                } else {
                    $status = "Fail";
                    $class = "fail";
                }

                echo "<tr>";

                echo "<td>$semester</td>";
                echo "<td>$course</td>";
                echo "<td>" . $marks["CW1"] . "</td>";
                echo "<td>" . $marks["MidTerm"] . "</td>";
                echo "<td>" . $marks["CW2"] . "</td>";
                echo "<td>" . $marks["Final"] . "</td>";
                echo "<td>$total</td>";

                echo "<td class='$class'>$status</td>";

                echo "</tr>";
            }
        }

        ?>

    </table>

</div>

</body>
</html>