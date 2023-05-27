<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPB AuLOG</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>

    <!-- sidebar toggle -->
    <input type="checkbox" id="nav-toggle">

    <!-- sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>AuLOG</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="main.php"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="admin.php" class="active"><span class="las la-users"></span>
                    <span>Admin</span></a>
                </li>
                <li>
                        <a href="report.php"><span class="las la-users"></span>
                        <span>Report</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- main content -->
    <div class="main-content">
        <!-- navigation bar -->
        <header>
                
            <!-- sidebar label and charging time config page title -->
            <h2>
                <label for="nav-toggle"> <span class="las la-bars"></span> </label>
                Charging Time Config
            </h2>
            
            
            <!-- site logo -->
            <div class="logo-wrapper">
                <h4>UP Baguio Library</h4>
                <small>Admin</small>
            </div>
        </header>

        <!-- primary content -->
        <main>
            <div class="recent-grid Users card">
                <!-- Form Title -->
                <div class="card-header">
                    <h2><span class="las la-users"></span> Charging Time </h2>
                </div>

                <!-- edit functionallity -->
                <div class="card-body">
                    <?php       
                    require 'functions.php';

                    if(isset($_POST["charging_time"])) { // segment for processing edit transaction
                        // assigning received data to variables
                        $charging_time = $_POST['charge_time'];

                        // update charging time
                        editMaximumChargingTime($charging_time);    
                    } else { // segment for outputting form
                        // assigning received data to variables
                        $charging_time = getMaximumChargingTime();

                        // form heading
                        echo "<form action='charging_time.php' target='_self' method='post'>";
                        echo "<label for='charge_time'>Charging Time:</label>";
                        echo "&nbsp&nbsp<input type='number' id='charge_time' name='charge_time' value='".$charging_time."'/>";
                        
                        // forward data to self
                        echo "&nbsp<input type='submit' name='charging_time' formmethod='post' value='Apply'/>";
                        echo "</form>";
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>