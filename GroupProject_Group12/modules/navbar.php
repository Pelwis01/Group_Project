<!DOCTYPE html>
<html lang="en-gb">

<body>
    
    <!-- 📍 Navbar -->
    <nav class="navbar">
        
        <!-- Vertical navbar toggle button (with aria controls for accessibility) -->
        <button class="navbar-toggler" type="button" onclick="toggleNav()" aria-label="Toggle navigation" aria-controls="mySidebar">
            <span class="navbar-toggle-icon"></span> 
        </button>
        
        <h2>Smart Energy Dashboard</h2>
        
        <div>
            <div class="icon-container">
                <button onclick="toggleDarkLight()" id="darkModeToggle" class="btn" 
                    style="margin-right: 8px;" 
                    aria-label="Toggle Dark Mode"> 
                    <svg id="darkModeIcon" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                        <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
                    </svg>
                </button>
            </div>
            
            <div class="icon-container">
                <!-- 👤 Account button with dropdown -->
                <div class="account-menu">
                    <button id="accountButton" class="account-btn" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="26px" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 8a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM1 14s1-4 7-4 7 4 7 4H1z"/>
                        </svg>
                    </button>
                    
                    <!-- 🚨 TBA: NEW USER VARIANT -->
                    
                    <!-- 🔽 Dropdown menu -->
                    <div id="accountDropdown" class="dropdown">
                        <a href="/Group_Project/GroupProject_Group12/pages/account.php">Profile</a>
                        <a href="/Group_Project/GroupProject_Group12/pages/account.php">Settings</a>
                        <a href="/Group_Project/GroupProject_Group12/pages/account.php">Logout</a>
                    </div>
                </div>
            </div>
        
        </div>
    </nav>
    
    <!-- 📍 Sidebar -->
    <nav id="main">
        <div class="sidebar" id="mySidebar">
            <ul style="list-style-type: none; width: 30px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Group_Project/GroupProject_Group12/pages/home.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Group_Project/GroupProject_Group12/pages/city.php">City</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Group_Project/GroupProject_Group12/pages/network.php">Network</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Group_Project/GroupProject_Group12/pages/admin.php">Admin</a>
                </li>
                <br><br><br>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Group_Project/GroupProject_Group12/pages/account.php">Account</a>
                </li>
            </ul>
            
            <!-- 🔘 Login button (triggers modal) -->
            <div style="position: absolute; bottom: 64px; right: 48px;">
                <button type="button" class="fancy-button" data-bs-toggle="modal" data-bs-target="#LoginModal">
                    Login
                </button>
            </div>
            
        </div>
    </nav>
    
</body>
</html>