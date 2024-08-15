<?php
// Create database connection using config file
include_once("connect.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM formcontact ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f4f4f4;
}

table {
    width: 80%;
    border-collapse: collapse;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:hover {
    background-color: #f5f5f5;
}

a {
    text-decoration: none;
    color: #4CAF50;
    font-weight: bold;
}

a:hover {
    color: #45a049;
}

a:visited {
    color: #4CAF50;
}

a:visited:hover {
    color: #45a049;
}

h1, h2, h3 {
    text-align: center;
    color: #333;
}


    </style>
</head>
 
<body>
<a href="add.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>firstname</th> <th>lastname</th> <th>subject</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['firstname']."</td>";
        echo "<td>".$user_data['lastname']."</td>";
        echo "<td>".$user_data['subject']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>