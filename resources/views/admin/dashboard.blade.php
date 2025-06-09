<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    body {
      background-color: #f9fafb;
    }

    .contain {
      display: flex;
    }

    .navbar {
      margin-right: 0.75rem;
      background-color: #1f2937; /* Tailwind bg-gray-800 */
      height: 100vh;
      width: 16rem; /* 64 */
      padding: 1rem;
    }

    .navbar h1 {
      color: white;
      text-align: center;
      margin-bottom: 1.25rem;
    }

    .header {
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 1rem;
    }

    .header a {
      color: white;
      text-decoration: none;
      transition: color 0.3s;
    }

    .header a:hover {
      color: #10b981; /* Tailwind text-green-500 */
    }

    .dashboard {
      flex: 1;
      padding: 1rem;
    }

    .dashboard h1 {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .dev {
      display: flex;
      width: 100%;
      padding: 1rem;
    }

    .portfolio {
      background-color: #6b7280; /* Tailwind bg-gray-500 */
      padding: 1rem;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 20rem; /* Tailwind w-80 */
      margin-right: 0.75rem;
      text-align: center;
    }

    .portfolio:last-child {
      margin-right: 0;
    }

    .portfolio h1 {
      margin-bottom: 1.25rem;
    }

    .portfolio a {
      color: white;
      text-decoration: none;
      transition: color 0.3s;
    }

    .portfolio a:hover {
      color: #10b981; /* Tailwind text-green-500 */
    }
  </style>
</head>
<body>

  <div class="contain">
    <!-- Sidebar -->
    <div class="navbar">
      <h1>Admin Dashboard</h1>
      <div class="header">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.tableport') }}">Manager Portfolio</a>
        <a href="{{ route('admin.tableserv') }}">Manager Services</a>
        <a href="#">Logout</a>
      </div>
    </div>

    <!-- Main Dashboard -->
    <div class="dashboard">
      <h1>Admin Dashboard</h1>
      <div class="dev">
        <div class="portfolio">
          <h1>Manager Portfolio</h1>
          <a href="{{Route('admin.tableport')}}">Portfolio</a>
        </div>
        <div class="portfolio">
          <h1>Manager Services</h1>
          <a href="{{route('admin.tableserv')}}">Services</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
