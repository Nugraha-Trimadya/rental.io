  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>RentGo - Vehicle Rental Dashboard</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
      <style>
          body {
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
              margin: 0;
              padding: 0;
              background: linear-gradient(135deg, #1e1e1e, #2d2d2d);
              min-height: 100vh;
              color: #fff;
          }
          .sidebar {
              position: fixed;
              top: 0;
              left: 0;
              height: 100vh;
              width: 250px;
              background-color: rgba(255, 255, 255, 0.1);
              backdrop-filter: blur(10px);
              padding: 20px;
              z-index: 1000;
          }
          .sidebar-logo {
              text-align: center;
          }
          .sidebar-logo img {
              width: 100px;
          }
          .nav-link {
              color: #fff;
              padding: 12px 20px;
              border-radius: 8px;
              margin-bottom: 10px;
              transition: 0.3s;
          }
          .nav-link:hover {
              background-color: rgba(255, 255, 255, 0.1);
              color: #039b4e;
          }
          .nav-link.active {
              background-color: #039b4e;
              color: #fff;
          }
          .nav-link i {
              margin-right: 10px;
          }
          .main-content {
              margin-left: 250px;
              padding: 20px;
          }
          .navbar {
              background-color: rgba(255, 255, 255, 0.1);
              backdrop-filter: blur(10px);
              box-shadow: 0 2px 4px rgba(0,0,0,0.1);
          }
          .card {
              background-color: rgba(255, 255, 255, 0.1);
              backdrop-filter: blur(10px);
              border: none;
              border-radius: 15px;
              box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
              margin-bottom: 20px;
              color: #fff;
          }
          .feature-icon {
              font-size: 2.5rem;
              color: #039b4e;
              margin-bottom: 15px;
          }
      </style>
  </head>
  <body>

  <div class="container-fluid">
      <div class="row">
          <!-- Sidebar -->
          <div class="sidebar">
              <div class="sidebar-logo">
                  <img src="assets/logo.png" alt="RentGo Logo">
              </div>
              <nav>
                  <a href="index.php" class="nav-link active">
                      <i class="bi bi-house-door"></i> Home
                  </a>
                  <a href="booking.php" class="nav-link">
                      <i class="bi bi-calendar-check"></i> Booking
                  </a>
                  <a href="vehicles.php" class="nav-link">
                      <i class="bi bi-car-front"></i> Vehicles
                  </a>
                  <a href="customers.php" class="nav-link">
                      <i class="bi bi-people"></i> Customers
                  </a>
                  <a href="settings.php" class="nav-link">
                      <i class="bi bi-gear"></i> Settings
                  </a>
                  <a href="logout.php" class="nav-link">
                      <i class="bi bi-box-arrow-right"></i> Logout
                  </a>
              </nav>
          </div>

          <!-- Main Content -->
          <div class="col-md-10 main-content">
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg mb-4">
                  <div class="container-fluid">
                      <form class="d-flex me-auto">
                          <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                      </form>
                      <div class="d-flex align-items-center">
                          <div class="me-3">
                              <i class="bi bi-bell text-white"></i>
                          </div>
                          <div class="me-3">
                              <i class="bi bi-envelope text-white"></i>
                          </div>
                          <div class="dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                                  <img src="https://via.placeholder.com/32" class="rounded-circle" alt="profile">
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end">
                                  <li><a class="dropdown-item" href="#">Profile</a></li>
                                  <li><a class="dropdown-item" href="#">Settings</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Logout</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </nav>

              <!-- Welcome Section -->
              <div class="card mb-4">
                  <div class="card-body">
                      <h2>Selamat Datang di RentGo</h2>
                      <p class="lead">Platform rental kendaraan terpercaya dengan berbagai pilihan kendaraan berkualitas untuk memenuhi kebutuhan mobilitas Anda.</p>
                  </div>
              </div>

              <!-- Features Section -->
              <div class="row mb-4">
                  <div class="col-md-4">
                      <div class="card h-100">
                          <div class="card-body text-center">
                              <i class="bi bi-shield-check feature-icon"></i>
                              <h4>Keamanan Terjamin</h4>
                              <p>Semua kendaraan kami telah melalui pemeriksaan ketat dan dilengkapi dengan asuransi komprehensif.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="card h-100">
                          <div class="card-body text-center">
                              <i class="bi bi-clock-history feature-icon"></i>
                              <h4>Proses Cepat</h4>
                              <p>Booking dan pengambilan kendaraan dapat dilakukan dalam waktu kurang dari 30 menit.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="card h-100">
                          <div class="card-body text-center">
                              <i class="bi bi-cash-coin feature-icon"></i>
                              <h4>Harga Kompetitif</h4>
                              <p>Kami menawarkan harga terbaik dengan berbagai pilihan paket sesuai kebutuhan Anda.</p>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Stats Section -->
              <div class="row">
                  <div class="col-md-3">
                      <div class="card">
                          <div class="card-body">
                              <h5>Total Vehicles</h5>
                              <h2>24</h2>
                              <p class="mb-0">Available: 15</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card">
                          <div class="card-body">
                              <h5>Active Rentals</h5>
                              <h2>8</h2>
                              <p class="mb-0">Today: 3</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card">
                          <div class="card-body">
                              <h5>Pending Returns</h5>
                              <h2>5</h2>
                              <p class="mb-0">Overdue: 1</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card">
                          <div class="card-body">
                              <h5>Total Revenue</h5>
                              <h2>$2,450</h2>
                              <p class="mb-0">This Month</p>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Recent Bookings Table -->
              <div class="card mt-4">
                  <div class="card-body">
                      <h5 class="card-title">Recent Bookings</h5>
                      <table class="table table-dark table-hover">
                          <thead>
                              <tr>
                                  <th>Booking ID</th>
                                  <th>Customer</th>
                                  <th>Vehicle</th>
                                  <th>Date</th>
                                  <th>Status</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>#BK001</td>
                                  <td>John Doe</td>
                                  <td>Honda CBR 250RR</td>
                                  <td>2023-10-15</td>
                                  <td><span class="badge bg-success">Active</span></td>
                                  <td>
                                      <button class="btn btn-sm btn-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>#BK002</td>
                                  <td>Jane Smith</td>
                                  <td>Toyota Avanza</td>
                                  <td>2023-10-14</td>
                                  <td><span class="badge bg-warning">Pending</span></td>
                                  <td>
                                      <button class="btn btn-sm btn-primary">View</button>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>