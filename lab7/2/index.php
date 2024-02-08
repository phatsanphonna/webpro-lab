<?php

// Get the currently selected month (if any)
$selectedMonth = isset($_GET['month']) ? $_GET['month'] : 0;

// Define months array
$months = [
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Month Table 2024</title>
</head>

<body>
    <h1>Month Table 2024</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="month">Select Month:</label>
        <select name="month" id="month">
            <option value="0">All Months</option>
            <?php foreach ($months as $monthNum => $monthName) : ?>
                <option value="<?php echo $monthNum; ?>" <?php echo ($monthNum == $selectedMonth) ? 'selected' : ''; ?>><?php echo $monthName; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Search">
    </form>
    <table>
        <thead>
            <tr>
                <th>Sunday</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo $months[$selectedMonth];

            if ($selectedMonth == 1) {
                // display 2024 calendar with table element of each month with date of week with for loop
                echo "<tr>";
                echo "<td></td>";
                for ($i = 1; $i <= 31; $i++) {
                    if ($i == 7) {
                        echo "</tr><tr>";
                    } else if ($i % 7 == 0) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 2) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";

                for ($i = 1; $i <= 29; $i++) {
                    if ($i == 4 || $i == 11 || $i == 18 || $i == 25) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 3) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                for ($i = 1; $i <= 31; $i++) {
                    if ($i == 3 || $i == 10 || $i == 17 || $i == 24 || $i == 31) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 4) {
                echo "<tr>";
                echo "<td></td>";

                for ($i = 1; $i <= 30; $i++) {
                    if ($i == 7 || $i == 14 || $i == 21 || $i == 28) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
            } else if ($selectedMonth == 5) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";

                for ($i = 1; $i <= 31; $i++) {
                    if ($i == 5 || $i == 12 || $i == 19 || $i == 26) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 6) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                for ($i = 1; $i <= 30; $i++) {
                    if ($i == 2 || $i == 9 || $i == 16 || $i == 23 || $i == 30) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 7) {
                echo "<tr>";
                echo "<td></td>";
                for ($i = 1; $i <= 31; $i++) {
                    if ($i == 7 || $i == 14 || $i == 21 || $i == 28) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 8) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                for ($i = 1; $i <= 31; $i++) {
                    if ($i == 4 || $i == 11 || $i == 18 || $i == 25) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 9) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                for ($i = 1; $i <= 30; $i++) {
                    if ($i == 1 || $i == 8 || $i == 15 || $i == 22 || $i == 29) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 10) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                for ($i = 1; $i <= 31; $i++) {
                    if ($i == 6 || $i == 13 || $i == 20 || $i == 27) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 11) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                for ($i = 1; $i <= 30; $i++) {
                    if ($i == 3 || $i == 10 || $i == 17 || $i == 24) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            } else if ($selectedMonth == 12) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                for ($i = 1; $i <= 31; $i++) {
                    if ($i == 1 || $i == 8 || $i == 15 || $i == 22 || $i == 29) {
                        echo "</tr><tr>";
                    }
                    echo "<td>" . $i . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>