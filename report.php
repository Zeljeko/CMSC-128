<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'includes/head.php'
        ?>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js" ></script>
        <script src="assets/chart-script.js"></script>
        <!-- DO NOT CHANGE ORDERING of the two lines above this -->

    </head>

    <body>
        
        <?php
        $page = 'reports';
        include 'includes/sidebars.php'
        ?>

        <!-- main content -->
        <div class="main-content">

            <!-- navigation bar -->
            <?php
            $page = 'reports';
            include 'includes/header.php'
            ?>

            <!-- primary content -->

            <main>
                <?php
                    //INSERT ADMIN EMAIL HERE
                    $adminEmail = "rpquinones@up.edu.ph";

                    require_once 'functions.php';

                    $dailyData = generateDailyReport();
                    $weeklyData = generateWeeklyReport();
                    $monthlyData = generateMonthlyReport();

                    $dailyDataCS = generateDailyReportCollege('Science');
                    $weeklyDataCS = generateWeeklyReportCollege('Science');
                    $monthlyDataCS = generateMonthlyReportCollege('Science');

                    $dailyDataCSS = generateDailyReportCollege('Social Sciences');
                    $weeklyDataCSS = generateWeeklyReportCollege('Social Sciences');
                    $monthlyDataCSS = generateMonthlyReportCollege('Social Sciences');

                    $dailyDataCAC = generateDailyReportCollege('Arts and Communication');
                    $weeklyDataCAC = generateWeeklyReportCollege('Arts and Communication');
                    $monthlyDataCAC = generateMonthlyReportCollege('Arts and Communication');

                    $allCollegesData = generateCollegeReport();

                    exportChargingLogCSV();
                ?>
                <button onclick='<?php sendEmailReport($adminEmail); ?>'> Send Report to Admin </button>

                <div class="cards-report">
                    <div class="grid card card-report">
                        <div class="card-header">
                            <h2><span class="las la-users"></span> Daily Usage</h2>
                        </div>
                        <div class="card-header">
                            <div class="tab active">All</div>
                            <div class="tab">CAC</div>
                            <div class="tab">CS</div>
                            <div class="tab">CSS</div>
                        </div>

                        <div class="tab-content active">
                            <div id="chart-container">
                                <canvas id="dailyChart"></canvas>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="chart-container">
                                <canvas id="dailyChartCAC"></canvas>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="chart-container">
                                <canvas id="dailyChartCS"></canvas>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="chart-container">
                                <canvas id="dailyChartCSS"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="grid card card-report">
                        <div class="card-header">
                            <h2><span class="las la-users"></span> Weekly Usage</h2>
                        </div>
                        <div class="card-header">
                            <div class="tab active">All</div>
                            <div class="tab">CAC</div>
                            <div class="tab">CS</div>
                            <div class="tab">CSS</div>
                        </div>

                        <div class="tab-content active">
                            <div id="chart-container">
                                <canvas id="weeklyChart"></canvas>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="chart-container">
                                <canvas id="weeklyChartCAC"></canvas>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="chart-container">
                                <canvas id="weeklyChartCS"></canvas>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="chart-container">
                                <canvas id="weeklyChartCSS"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="grid card card-report">
                        <div class="card-header">
                            <h2><span class="las la-users"></span> Monthly Usage</h2>
                        </div>
                        <div class="card-header">
                            <div class="tab active">All</div>
                            <div class="tab">CAC</div>
                            <div class="tab">CS</div>
                            <div class="tab">CSS</div>
                        </div>

                        <div class="tab-content active">
                            <div id="chart-container">
                                <canvas id="monthlyChart"></canvas>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="chart-container">
                                <canvas id="monthlyChartCAC"></canvas>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="chart-container">
                                <canvas id="monthlyChartCS"></canvas>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="chart-container">
                                <canvas id="monthlyChartCSS"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid card card-report">
                    <div class="card-header">
                        <h2><span class="las la-users"></span> Consumption of Colleges</h2>
                    </div>
                    <div id="chart-container">
                        <canvas id="collegeChart"></canvas>
                    </div>
                </div>


            </main>
        </div>
    </body>
    <script>
    const dailyData = <?php echo json_encode($dailyData); ?>;
    dailyChart("dailyChart", dailyData);
    const weeklyData = <?php echo json_encode($weeklyData); ?>;
    weeklyChart("weeklyChart", weeklyData);
    const monthlyData = <?php echo json_encode($monthlyData); ?>;
    monthlyChart("monthlyChart", monthlyData);

    const dailyDataCS = <?php echo json_encode($dailyDataCS); ?>;
    dailyChart("dailyChartCS", dailyDataCS);
    const weeklyDataCS = <?php echo json_encode($weeklyDataCS); ?>;
    weeklyChart("weeklyChartCS", weeklyDataCS);
    const monthlyDataCS = <?php echo json_encode($monthlyDataCS); ?>;
    monthlyChart("monthlyChartCS", monthlyDataCS);

    const dailyDataCSS = <?php echo json_encode($dailyDataCSS); ?>;
    dailyChart("dailyChartCSS", dailyDataCSS);
    const weeklyDataCSS = <?php echo json_encode($weeklyDataCSS); ?>;
    weeklyChart("weeklyChartCSS", weeklyDataCSS);
    const monthlyDataCSS = <?php echo json_encode($monthlyDataCSS); ?>;
    monthlyChart("monthlyChartCSS", monthlyDataCSS);
    
    const dailyDataCAC = <?php echo json_encode($dailyDataCAC); ?>;
    dailyChart("dailyChartCAC", dailyDataCAC);
    const weeklyDataCAC = <?php echo json_encode($weeklyDataCAC); ?>;
    weeklyChart("weeklyChartCAC", weeklyDataCAC)
    const monthlyDataCAC = <?php echo json_encode($monthlyDataCAC); ?>;
    monthlyChart("monthlyChartCAC", monthlyDataCAC);

    const allCollegesDataPie = <?php echo json_encode($allCollegesData); ?>;
    pieChart("collegeChart", allCollegesDataPie);
    $(document).ready(function() {
        $('.card .tab').click(function() {
            const index = $(this).index();
            const card = $(this).closest('.card');

            card.find('.tab').removeClass('active');
            card.find('.tab-content').removeClass('active');

            $(this).addClass('active');
            card.find('.tab-content').eq(index).addClass('active');
        });
        $("button").click(function(event) {
            if (confirm("Are you sure you want to send a report?")) {
                alert("Charging Reports Sent to Admin Email");
            } else {
                event.preventDefault();
            }
        });
    });
    </script>
</html>