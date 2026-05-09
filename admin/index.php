<?php
session_start();

// Check if user is logged in (optional - remove if no auth needed)
// if (!isset($_SESSION['user_id'])) {
//     header('Location: ../login.php');
//     exit();
// }

$wallet_balance = 124; // Sample data
$pending_applications = 2; // Sample data
$completed_applications = 5; // Sample data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Registration Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-certificate"></i> Registration Portal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="birthDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-file-alt"></i> Birth
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="birthDropdown">
                            <li><a class="dropdown-item" href="bmanual.php">Apply for Certificate</a></li>
                            <li><a class="dropdown-item" href="blist.php">Download Certificate</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="deathDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-file-invoice"></i> Death
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="deathDropdown">
                            <li><a class="dropdown-item" href="dmanual.php">Apply for Certificate</a></li>
                            <li><a class="dropdown-item" href="dlist.php">Download Certificate</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wallet.php">
                            <i class="fas fa-wallet"></i> Wallet
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">
                            <i class="fas fa-user"></i> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Panel -->
    <div class="main-content">
        <div class="dashboard-panel">
            <h2><i class="fas fa-tachometer-alt"></i> Dashboard</h2>
            <p>Welcome to Registration Management System</p>
        </div>

        <!-- Statistics -->
        <div class="grid-container">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-wallet" style="font-size: 40px; color: #667eea;"></i>
                    <h5 class="mt-3">Wallet Balance</h5>
                    <h2 style="color: #667eea;">₹ <?php echo $wallet_balance; ?></h2>
                    <a href="wallet.php" class="btn btn-primary btn-sm mt-2">Manage Wallet</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-hourglass-half" style="font-size: 40px; color: #ffc107;"></i>
                    <h5 class="mt-3">Pending Applications</h5>
                    <h2 style="color: #ffc107;"><?php echo $pending_applications; ?></h2>
                    <p class="text-muted">Awaiting verification</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-check-circle" style="font-size: 40px; color: #28a745;"></i>
                    <h5 class="mt-3">Completed Applications</h5>
                    <h2 style="color: #28a745;"><?php echo $completed_applications; ?></h2>
                    <p class="text-muted">Ready to download</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card">
            <div class="card-header">
                <h5><i class="fas fa-bolt"></i> Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="action-buttons">
                    <a href="bmanual.php" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Apply Birth Certificate
                    </a>
                    <a href="dmanual.php" class="btn btn-info">
                        <i class="fas fa-plus"></i> Apply Death Certificate
                    </a>
                    <a href="wallet.php" class="btn btn-success">
                        <i class="fas fa-plus"></i> Add Funds
                    </a>
                    <a href="profile.php" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Update Profile
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Applications -->
        <div class="card mt-4">
            <div class="card-header">
                <h5><i class="fas fa-list"></i> Recent Applications</h5>
            </div>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>Application ID</th>
                            <th>Type</th>
                            <th>Applicant Name</th>
                            <th>Status</th>
                            <th>Applied Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#B-001</td>
                            <td>Birth Certificate</td>
                            <td>John Doe</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                            <td>2026-05-05</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>#D-002</td>
                            <td>Death Certificate</td>
                            <td>Jane Smith</td>
                            <td><span class="status-badge status-active">Approved</span></td>
                            <td>2026-05-01</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-success">Download</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Birth & Death Registration Portal. All rights reserved.</p>
        <p>Developed by Registration Management Team</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
