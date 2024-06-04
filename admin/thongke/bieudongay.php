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

    // query to get sales data for the current month
    $sql = "SELECT id, SUM(total_bill) as total_revenue, DATE(date_order) as sale_date FROM bills   
            WHERE MONTH(date_order) = MONTH(CURRENT_DATE()) and id_status = 2
            GROUP BY sale_date
            ORDER BY sale_date";
    $result = $conn->query($sql);

    // process data for Chart.js
    $data = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data[] = ['date' => $row['sale_date'], 'revenue' => $row['total_revenue']];
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
    <title>Daily Revenue Chart</title>
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
            background-color: #2ecc71; /* Blue color */
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
      <a class="bd_tk" href="?act=bieudo">Doanh thu theo tháng</a>
    <a class="bd_tk" href="?act=bieudonam">Biểu đồ theo năm</a>
    </div>
    <!-- HTML container for the chart -->
    <canvas id="dailyRevenueChart" width="400" height="130"></canvas>

    <script>
       // JavaScript code to render the chart
var ctx = document.getElementById('dailyRevenueChart').getContext('2d');

var data = <?php echo json_encode($data); ?>;

// Process data for Chart.js
var chartData = {
    labels: data.map(entry => entry.date),
    datasets: [{
        label: 'Doanh thu hàng ngày',
        data: data.map(entry => entry.revenue),
        fill: false,
        borderColor: getRandomColor()
    }]
};

// Manually prepend the first day and set the corresponding revenue value to 0
chartData.labels.unshift('2023-12-01'); // Assuming '2023-12-01' is the first day of the month
chartData.datasets[0].data.unshift(0);

var dailyRevenueChart = new Chart(ctx, {
    type: 'line',
    data: chartData,
    options: {
        scales: {
            x: [{
                type: 'time',
                time: {
                    unit: 'day',
                    displayFormats: {
                        day: 'MMM DD'
                    }
                },
                title: {
                    display: true,
                    text: 'Date'
                }
            }],
            y: [{
                title: {
                    display: true,
                    text: 'Revenue'
                },
                ticks: {
                    suggestedMin: 0 // Ensure the y-axis starts from 0
                }
            }]
        },
        elements: {
            line: {
                tension: 0,
                borderWidth: 3,
                borderColor: getRandomColor(),
                backgroundColor: 'rgba(0, 123, 255, 0.1)'
            },
            point: {
                radius: 6,
                backgroundColor: getRandomColor(),
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 2
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
