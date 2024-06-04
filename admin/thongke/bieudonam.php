<?php
// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // query to get sales data for each year
    $sql = "SELECT YEAR(date_order) as sale_year, SUM(total_bill) as total_revenue
            FROM bills   
            WHERE id_status = 2
            GROUP BY sale_year
            ORDER BY sale_year";
    $result = $conn->query($sql);

    // process data for Chart.js
    $data = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data[] = ['year' => $row['sale_year'], 'revenue' => $row['total_revenue']];
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
} finally {
    if ($conn) {
        $conn = null; // Close the connection in the finally block
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Yearly Revenue Chart</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .bd_tk {
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 0 20px 10px;
            font-size: 16px;
            font-weight: bold;
            width: 210px;
            color: #fff;
            background-color: #2ecc71;
            /* Blue color */
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .tk_bd{
            display: flex;
        }
   .back-tk {
      /* margin: 0 0 30px 20px; */
      width: 50px;
      height: 43px;
      border-radius: 5px;
      color: #fff;
      background-color: #2ecc71;
      text-align: center;
      /* align-items: center; */
      line-height: 43px;
   }

        /* Hover effect */
        .bd_tk:hover {
            background-color: #27ae60;
            color: #fff;
        }
    </style>
</head>

<body>
<div class="tk_bd">
    <div class="back-tk">
         <a style="color: #fff;" href="?act=thongke">
         <i class="fas fa-reply fa-lg" style="color: #ffffff;"></i>
         </a>
      </div>
      <a class="bd_tk" href="?act=bieudongay">Biểu đồ theo ngày</a>
    <a class="bd_tk" href="?act=bieudo">Doanh thu theo tháng</a>
    </div>
    <!-- HTML container for the chart -->
    <canvas id="yearlyRevenueChart" width="400" height="130"></canvas>

    <script>
        // JavaScript code to render the chart
        var ctx = document.getElementById('yearlyRevenueChart').getContext('2d');

        var data = <?php echo json_encode($data); ?>;

        // Process data for Chart.js
        var chartData = {
            labels: data.map(entry => entry.year),
            datasets: [{
                label: 'Doanh thu hàng năm',
                data: data.map(entry => entry.revenue),
                fill: false,
                borderColor: getRandomColor(),
                barThickness: 150
            }]
        };

        var yearlyRevenueChart = new Chart(ctx, {
            type: 'bar', // Change to bar chart for yearly data
            data: chartData,
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Year'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Revenue'
                        },
                        ticks: {
                            suggestedMin: 0 // Ensure the y-axis starts from 0
                        }
                    }
                },
                elements: {
                    bar: {
                        borderWidth: 2,
                        // borderColor: getRandomColor(),
                        backgroundColor: getRandomColor()
                    }
                },
            }
        });

        // Function to generate random colors
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
</body>

</html>