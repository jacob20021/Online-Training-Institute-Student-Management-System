<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Student Registration</title>
  <link rel="stylesheet" href="style.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="navbar">
      <h2 class="logo">Training Institute</h2>
      <nav>
        <ul>
          <li><a href="index.html" class="active">Register</a></li>
          <li><a href="view_registrations.php">View Students</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="form-card">
      <h1>Online Student Registration</h1>
      <p class="subtitle">Fill in your details to enroll in our courses</p>

      <form id="registrationForm" method="post" action="save_registration.php">
        <div class="form-group">
          <input type="text" id="full_name" name="full_name" placeholder="Full Name">
        </div>
        <div class="form-group">
          <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="text" id="course" name="course" placeholder="Course">
        </div>
        <button type="submit" class="btn">Register Now</button>
      </form>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Training Institute. All rights reserved.</p>
  </footer>

  <script>
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
      const fullName = document.getElementById('full_name').value.trim();
      const email = document.getElementById('email').value.trim();
      const course = document.getElementById('course').value.trim();

      if (!fullName || !email || !course) {
        e.preventDefault();
        alert("All fields are required.");
      } else {
        alert("Registration submitted.");
      }
    });
  </script>
</body>
</html>