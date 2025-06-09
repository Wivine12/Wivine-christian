<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manager Portfolio</title>

  <style>
    body {
      background-color: #f3f4f6; /* Tailwind bg-gray-100 */
      margin: 0;
      font-family: sans-serif;
    }

    .container {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 16rem; /* 64 */
      background-color: #1f2937; /* Tailwind bg-gray-800 */
      color: white;
      padding: 1rem;
      display: flex;
      flex-direction: column;
    }

    .sidebar h1 {
      text-align: center;
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
    }

    .sidebar nav {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      transition: color 0.3s;
    }

    .sidebar a:hover {
      color: #10b981; /* Tailwind text-green-500 */
    }

    .main {
      flex: 1;
      padding: 1.5rem;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1rem;
    }

    .header h2 {
      font-size: 1.5rem;
      font-weight: 600;
    }

    .add-button {
      background-color: #3b82f6;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .add-button:hover {
      background-color: #2563eb;
    }

    .table-container {
      overflow-x: auto;
      background-color: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 0.5rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background-color: #e5e7eb; /* Tailwind bg-gray-200 */
    }

    th, td {
      padding: 0.5rem 1rem;
      text-align: left;
    }

    tr.border-t {
      border-top: 1px solid #d1d5db;
    }

    .line-clamp-1 {
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
    }

/*   
    }  img {
      width: 6rem;
      height: auto; */

    .action-buttons {
      display: flex;
      gap: 0.5rem;
    }

     .edit-button {
      background-color: #f59e0b;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
      text-decoration: none;
      transition: background-color 0.3s;
    } 

     .edit-button:hover {
      background-color: #d97706;
    }

    .delete-button {
      background-color: #ef4444;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .delete-button:hover {
      background-color: #dc2626;
    } 
  </style>
</head>
<body>

  <div class="container">

    <!-- Sidebar -->
    <div class="sidebar">
      <h1>Admin Dashboard</h1>
      <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.tableport') }}">Manager Portfolio</a>
        <a href="{{ route('admin.tableserv') }}">Manager Services</a>
        <a href="#">Logout</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="main">
      <!-- Header -->
      <div class="header">
        <h2>Services</h2>
        <a href="{{ route('admin.formservices') }}" class="add-button">Add Services</a>
      </div>
      @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
      <!-- Table -->
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <!-- <th>Image</th> -->
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($show as $services)
            <tr class="border-t">
              <td>{{ $services->id }}</td>
              <td>{{ $services->name }}</td>
              <td class="line-clamp-1">{{ $services->description }}</td>
             
               <td>
    <div class="action-buttons">
        <a href="{{ route('formservices.edit', $services->id) }}" class="edit-button">Edit</a>
     <form action="{{ route('admin.delete', $services->id) }}" method="POST" class="inline">
       @csrf
        @method('DELETE')
       <button type="submit" class="delete-button">Delete</button> 
  </form> 
  </div> 
      </td> 
     </tr>
       @endforeach
    </tbody>
    </table>
     </div>
    </div>

  </div>

</body>
</html>
