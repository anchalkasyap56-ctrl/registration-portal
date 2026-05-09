<?php
session_start();
$balance = 124;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet Management - Registration Portal</title>
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

    <!-- Wallet Section -->
    <div class="main-content">
        <div class="dashboard-panel">
            <h2><i class="fas fa-wallet"></i> Wallet Management</h2>
            <p>Manage your wallet and add funds for certificate applications</p>
        </div>

        <!-- Balance Card -->
        <div class="card mb-4" style="border-left: 5px solid #28a745;">
            <div class="card-body">
                <h5 class="card-title">Current Balance</h5>
                <h2 style="color: #28a745; font-weight: bold;">₹ <?php echo $balance; ?></h2>
                <p class="text-muted">Available for applications</p>
            </div>
        </div>

        <!-- Add Funds Card -->
        <div class="card mb-4">
            <div class="card-header">
                <h5><i class="fas fa-plus-circle"></i> Add Funds</h5>
            </div>
            <div class="card-body">
                <form action="process.php" method="POST">
                    <input type="hidden" name="type" value="wallet">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Amount <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">₹</span>
                                <input type="number" class="form-control" name="amount" min="10" max="10000" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Payment Method <span class="text-danger">*</span></label>
                            <select class="form-control" name="payment_method" required>
                                <option value="">Select Payment Method</option>
                                <option value="credit_card">Credit Card</option>
                                <option value="debit_card">Debit Card</option>
                                <option value="upi">UPI</option>
                                <option value="netbanking">Net Banking</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-success btn-lg">
                            <i class="fas fa-credit-card"></i> Add Funds
                        </button>
                        <a href="index.php" class="btn btn-outline-secondary btn-lg ms-2">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Transaction History -->
        <div class="card">
            <div class="card-header">
                <h5><i class="fas fa-history"></i> Transaction History</h5>
            </div>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#TXN-001</td>
                            <td>Credit</td>
                            <td>+ ₹ 100</td>
                            <td>2026-05-05 10:30 AM</td>
                            <td><span class="status-badge status-active">Success</span></td>
                        </tr>
                        <tr>
                            <td>#TXN-002</td>
                            <td>Debit (Application Fee)</td>
                            <td>- ₹ 50</td>
                            <td>2026-05-03 02:15 PM</td>
                            <td><span class="status-badge status-active">Success</span></td>
                        </tr>
                        <tr>
                            <td>#TXN-003</td>
                            <td>Credit</td>
                            <td>+ ₹ 74</td>
                            <td>2026-05-01 11:45 AM</td>
                            <td><span class="status-badge status-active">Success</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Birth & Death Registration Portal. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
