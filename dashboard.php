<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | By Code Info</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<header class="header">
    <h2 class="logo">Vizzie</h2>
    <nav class="navigation">
        <a href="index.html">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>
    <div class="header-icons">
        <i class="fas fa-bell"></i>
        <div class="account">
            <img src="./pic/img.jpg" alt="">
            <h4>Jhon Viek</h4>
        </div>
    </div>
</header>
<div class="container">
    <nav class="sidebar">
        <h4>Main Menu</h4>
        <ul>
            <li><a href="#" class="active">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Application</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Documents</a></li>
        </ul>
        <h4>Quick Links</h4>
        <ul>
            <li><a href="#">Paypal</a></li>
            <li><a href="#">EasyPay</a></li>
            <li><a href="#">SadaPay</a></li>
        </ul>
    </nav>
    <div class="main-body">
        <h2>Dashboard</h2>
        <div class="promo-card">
            <h1>Welcome to Viziie air bnb pay system</h1>
            <span>Lorem ipsum dolor sit amet.</span>
            <button>Learn More</button>
        </div>
        <div class="history-section">
            <div class="history-list">
                <h3>History</h3>
                <a href="#">See all</a>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Dates</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamic content for history -->
                    </tbody>
                </table>
            </div>
            <div class="document-list">
                <h3>Documents</h3>
                <a href="#">Upload</a>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Uploaded</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamic content for documents -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="sidebar-right">
        <h4>Account Balance</h4>
        <!-- Dynamic content for account balance -->
    </div>
</div>
</body>
</html>
