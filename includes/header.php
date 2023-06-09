<?php

if ($page === 'main') {
    echo "
        <header>
            <h2>
                <label for='nav-toggle'> <span class='las la-bars'></span> </label>
                Dashboard
            </h2>
            
            <!-- site logo -->
            <div class='header-wrapper'>
                <img src='assets/img/upseal.png' alt='UPB Seal' width='50px'>
                <h4>UP Baguio Library</h4>
            </div>
        </header>
    ";
} elseif ($page === 'studInfo'){
    echo "
        <header>
            <!-- sidebar label and page title -->
            <h2>
                <label for='nav-toggle'> <span class='las la-bars'></span> </label>
                Student Information
            </h2>

            <!-- searchbar -->
            <form action='student.php' target='_self' method='post'>
                <div class='search-wrapper'>
                    <span class='las la-search'></span>
                    <input type='search' id='student_number' name = 'student_number' placeholder='Find Student Number' />
                    <input type='submit' name='student' formmethod='post' style='display:none;'>
                </div>
            </form>
            
            <!-- site logo -->
            <div class='header-wrapper'>
                <img src='assets/img/upseal.png' alt='UPB Seal' width='50px'>
                <h4>UP Baguio Library</h4>
            </div>
        </header>
    ";
} elseif ($page === 'studInfoAddEdit'){
    echo "
        <header>
            <!-- sidebar label and page title -->
            <h2>
                <label for='nav-toggle'> <span class='las la-bars'></span> </label>
                Student Information
            </h2>
            
            <!-- site logo -->
            <div class='header-wrapper'>
                <img src='assets/img/upseal.png' alt='UPB Seal' width='50px'>
                <h4>UP Baguio Library</h4>
            </div>
        </header>
    ";
} elseif ($page === 'log'){
    echo "
        <header>
            <!-- sidebar label and page title -->
            <h2>
                <label for='nav-toggle'> <span class='las la-bars'></span> </label>
                Charging Logs
            </h2>

            <!-- searchbar -->
            <form action='log.php' target='_self' method='post'>
                <div class='search-wrapper'>
                    <span class='las la-search'></span>
                    <input type='search' id='student_number' name = 'student_number' placeholder='Find Student Number' />
                    <input type='submit' name='log' formmethod='post' style='display:none;'>
                </div>
            </form>
            
            <!-- site logo -->
            <div class='header-wrapper'>
                <img src='assets/img/upseal.png' alt='UPB Seal' width='50px'>
                <h4>UP Baguio Library</h4>
            </div>
        </header>
    ";
} elseif ($page === 'logEdit'){
    echo "
        <header>
            <!-- sidebar label and page title -->
            <h2>
                <label for='nav-toggle'> <span class='las la-bars'></span> </label>
                Charging Logs
            </h2>
            
            <!-- site logo -->
            <div class='header-wrapper'>
                <img src='assets/img/upseal.png' alt='UPB Seal' width='50px'>
                <h4>UP Baguio Library</h4>
            </div>
        </header>
    ";
} elseif ($page === 'config'){
    echo "
        <header>
            <!-- sidebar label and page title -->
            <h2>
                <label for='nav-toggle'> <span class='las la-bars'></span> </label>
                Configuration
            </h2>
            
            <!-- site logo -->
            <div class='header-wrapper'>
                <img src='assets/img/upseal.png' alt='UPB Seal' width='50px'>
                <h4>UP Baguio Library</h4>
            </div>
        </header>
    ";
} elseif ($page === 'reports'){
    echo "
        <header>
            <!-- sidebar label and page title -->
            <h2>
                <label for='nav-toggle'> <span class='las la-bars'></span> </label>
                Reports
            </h2>
            
            <!-- site logo -->
            <div class='header-wrapper'>
                <img src='assets/img/upseal.png' alt='UPB Seal' width='50px'>
                <h4>UP Baguio Library</h4>
            </div>
        </header>
    ";
} 
?>