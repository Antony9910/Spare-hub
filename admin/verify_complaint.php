<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            display: flex;
        }

        .sidebar {
            background-color: #4a148c;
            color: white;
            width: 250px;
            padding: 20px 20px 60px; /* Adjust bottom padding */
            display: flex;
            flex-direction: column;
            height: 100vh; /* Full height */
            position: fixed; /* Keep it fixed */
        }
      .dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #4CAF50; /* Green */
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

        

        .sidebar h2 {
            margin: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            margin: 15px 0;
            font-size: 18px;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            padding-bottom:10px;
        }

        .sidebar a:hover {
            color: #ff6600;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .dashboard {
            margin-left: 250px; /* Space for the sidebar */
            width: calc(100% - 250px); /* Ensure proper width */
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding-left: 59px;
            padding-right:20px;
            overflow: auto; /* Enable scrolling */
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            color: #007bff;
            font-size: 2.5em;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .status {
            font-weight: bold;
            text-align: center;
        }

        .status.pending {
            color: #ffc107; /* Yellow for pending */
        }

        .button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            cursor: pointer;
            margin: 0 5px;
            transition: background-color 0.3s ease;
        }

        .approve {
            background-color: #28a745; /* Green */
        }

        .reject {
            background-color: #dc3545; /* Red */
        }

        .button:hover {
            opacity: 0.8; /* Dim on hover */
        }
        .admin-title {
            display: flex; /* Use flexbox for alignment */
            align-items: center; /* Center items vertically */
        }
        
        .admin-title img {
            margin-right: 10px; /* Space between logo and text */
        }
        .s1
        {
           padding-top:20px;
        }
        .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}
    </style>
</head>
<body>
<div class="sidebar">
        <h2>Admin</h2>
        <a href="dashboard.php" class="fade-in"><i class="fas fa-home"></i>Home</a>
        <div class="dropdown">
        <a href="#" class="fade-in"><i class="fas fa-users"></i>User-Mangement</a>
     <div class="dropdown-content">
        <a href="manage_customer.php" class="fade-in"><i class="fas fa-users"></i> Manage Customers</a>
        <a href="manage_shop.php" class="fade-in"><i class="fas fa-users"></i> Manage Shop</a>
        <a href="manage_del.php" class="fade-in"><i class="fas fa-users"></i> Manage Delivery-Agent</a>
    </div>
</div>
    <a href="approve.php" class="fade-in"><i class="fas fa-users"></i></i> Approved users</a>
     <a href="verify_complaint.php" class="fade-in"><i class="fas fa-file-alt"></i> Verify Complaint</a>
        <a href="admin.php" class="fade-in"><i class="fa-solid fa-user-tie"></i>New Admin</a>
        <a href="logout.php" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    <div class="dashboard">
        <header>
            <h1 class="s1">COMPLAINT</h1>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>Complaint ID</th>
                        <th>User</th>
                        <th>Description</th>
                        <th>Date Submitted</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="status pending"></td>
                        <td>
                            <button class="button approve">Approve</button>
                            <button class="button reject">Reject</button>
                        </td>
                    </tr>
                  
                    <!-- Additional rows can be added here -->
                </tbody>
            </table>
        </main>
    </div>
</body>
</html> 
