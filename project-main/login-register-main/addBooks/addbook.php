<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Upload Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Optional: For icons -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;  /* Center form vertically */
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;  /* Limit form width */
            width: 100%;  /* Full width on smaller screens */
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-container input[type="text"],
        .form-container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Upload Book Data</h2>
    <form action="upload.php" enctype="multipart/form-data" method="POST">
        <input type="text" placeholder="Enter Title" name="title" required>
        <input type="text" placeholder="Enter Author" name="author" required>
        <input type="text" placeholder="Enter Rating (0-5)" name="rating" min="0" max="5" required>
        <input type="text" placeholder="Enter Number of Pages" name="num_pages" required>
        <input type="file" name="cover_photo" accept="image/*" required>  <!-- Accept image files only -->
        <input type="submit" name="submit" value="Upload Data to Database">
    </form>
</div>
</body>
</html>
