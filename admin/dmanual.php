<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Death Certificate - Registration Portal</title>
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
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="main-content">
        <div class="dashboard-panel">
            <h2><i class="fas fa-file-invoice"></i> Apply for Death Certificate</h2>
            <p>Fill the form below to apply for a death certificate</p>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Death Certificate Application Form</h5>
            </div>
            <div class="card-body">
                <form action="process.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="type" value="death">

                    <!-- Deceased Information -->
                    <h6 class="mb-3 mt-4"><i class="fas fa-user"></i> Deceased Information</h6>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="dob" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Date of Death <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="death_date" required>
                        </div>
                    </div>

                    <!-- Death Information -->
                    <h6 class="mb-3 mt-4"><i class="fas fa-hospital"></i> Death Information</h6>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Place of Death <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="place_of_death" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">City <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="city" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">State <span class="text-danger">*</span></label>
                            <select class="form-control" name="state" required>
                                <option value="">Select State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Cause of Death</label>
                            <input type="text" class="form-control" name="cause_of_death">
                        </div>
                    </div>

                    <!-- Informant Information -->
                    <h6 class="mb-3 mt-4"><i class="fas fa-user-check"></i> Informant Information</h6>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Informant Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="informant_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Relationship <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="relationship" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Informant Contact <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" name="informant_contact" required>
                    </div>

                    <!-- Documents -->
                    <h6 class="mb-3 mt-4"><i class="fas fa-file-upload"></i> Documents</h6>
                    
                    <div class="mb-3">
                        <label class="form-label">Upload Death Certificate Copy <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="document" accept=".pdf,.jpg,.png" required>
                        <small class="text-muted">Accepted formats: PDF, JPG, PNG (Max 2MB)</small>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-paper-plane"></i> Submit Application
                        </button>
                        <a href="index.php" class="btn btn-outline-secondary btn-lg ms-2">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </form>
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
