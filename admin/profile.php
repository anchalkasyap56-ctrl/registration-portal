<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Registration Portal</title>
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

    <!-- Profile Section -->
    <div class="main-content">
        <div class="dashboard-panel">
            <h2><i class="fas fa-user-circle"></i> User Profile</h2>
            <p>View and manage your profile information</p>
        </div>

        <div class="row">
            <!-- Profile Info -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-user-circle" style="font-size: 80px; color: #667eea;"></i>
                        <h5 class="mt-3">Rohit Kumar</h5>
                        <p class="text-muted">Member since 2026</p>
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fas fa-camera"></i> Change Photo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Profile Details -->
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fas fa-info-circle"></i> Personal Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="POST">
                            <input type="hidden" name="type" value="profile">
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="Rohit">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="Kumar">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" value="rohit.kumar@example.com" disabled>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" value="+91-98765-43210">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" value="Delhi">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" value="Delhi">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="address" rows="3">123 Main Street, New Delhi, India</textarea>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Save Changes
                                </button>
                                <a href="index.php" class="btn btn-outline-secondary ms-2">
                                    <i class="fas fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Security Section -->
        <div class="card mt-4">
            <div class="card-header">
                <h5><i class="fas fa-lock"></i> Security Settings</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Change Password</h6>
                        <p class="text-muted">Update your password to keep your account secure</p>
                        <a href="#" class="btn btn-warning btn-sm">
                            <i class="fas fa-key"></i> Change Password
                        </a>
                    </div>
                    <div class="col-md-6">
                        <h6>Two-Factor Authentication</h6>
                        <p class="text-muted">Add an extra layer of security to your account</p>
                        <a href="#" class="btn btn-info btn-sm">
                            <i class="fas fa-shield-alt"></i> Enable 2FA
                        </a>
                    </div>
                </div>
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
