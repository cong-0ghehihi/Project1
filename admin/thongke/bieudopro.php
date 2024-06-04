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

    // query to get best-selling products by year
    $sql = "SELECT p.id, p.name, SUM(bd.quantity) as total_quantity_sold
            FROM bills b
            JOIN bill_detail bd ON b.id = bd.id_bill
            right JOIN products p ON bd.name = p.name
            WHERE b.id_status = 2 AND YEAR(b.date_order) = YEAR(CURRENT_DATE())
            GROUP BY p.id
            ORDER BY total_quantity_sold DESC";
    
    $result = $conn->query($sql);

    // process data
    $bestSellingProducts = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $bestSellingProducts[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'total_quantity_sold' => $row['total_quantity_sold']
        ];
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
    <title>Best Selling Products Chart</title>
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
    
    </div>
    <!-- HTML container for the chart -->
    <canvas id="bestSellingProductsChart" width="400" height="200"></canvas>

    <script>
        // JavaScript code to render the chart
        var ctx = document.getElementById('bestSellingProductsChart').getContext('2d');

        var data = <?php echo json_encode($bestSellingProducts); ?>;

        var chartData = {
            labels: data.map(product => product.name),
            datasets: [{
                label: 'Số lượng bán',
                data: data.map(product => product.total_quantity_sold),
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Bar fill color
                borderColor: 'rgba(75, 192, 192, 1)', // Bar border color
                borderWidth: 1 // Bar border width
            }]
        };

        var bestSellingProductsChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Số lượng bán'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Sản phẩm'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
