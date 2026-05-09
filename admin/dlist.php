<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Death Certificates - Registration Portal</title>
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="main-content">
        <div class="dashboard-panel">
            <h2><i class="fas fa-file-invoice"></i> Death Certificates</h2>
            <p>Download your approved death certificates</p>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Your Death Certificates</h5>
                <a href="dmanual.php" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Apply New
                </a>
            </div>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>Certificate ID</th>
                            <th>Deceased Name</th>
                            <th>Date of Death</th>
                            <th>Status</th>
                            <th>Application Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#DC-001</td>
                            <td>Robert Wilson</td>
                            <td>2026-04-15</td>
                            <td><span class="status-badge status-active">Approved</span></td>
                            <td>2026-04-20</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success" title="Download">
                                    <i class="fas fa-download"></i> Download
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#DC-002</td>
                            <td>Mary Brown</td>
                            <td>2026-05-02</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                            <td>2026-05-04</td>
                            <td>
                                <span class="text-muted">Processing</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="alert alert-info mt-4">
            <i class="fas fa-info-circle"></i>
            <strong>Note:</strong> Approved certificates can be downloaded. Pending applications are being verified.
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Birth & Death Registration Portal. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
