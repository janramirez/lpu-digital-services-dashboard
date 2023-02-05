<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPU Digital Services Dashboard</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header {
            color: white;
            background-color:red;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .header img {
            width: 40px;
            height: auto;
            margin-left: 20px;
        }

        .main {
            display:flex;
            align-items:center;
        }
        .main__sidebar {
            height: 100vh;
            flex: 0.2;
            z-index: 1;
            display: flex;
            flex-direction: column;
            border-right: 1px solid lightgray;
        }
        .main__sidebar__profile {
            background-color: white;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid lightgray;
            padding: 10px;
        }
        .main__sidebar__profile h4,p {
            text-align: right;
        }

        .main__sidebar__nav {
            flex: 1;
        }
        .main__sidebar__nav ul {
            text-decoration: none;
        }
        .main__sidebar__nav li {
            list-style: none;
        }
        .main__sidebar__nav li a {
            text-decoration: none;
        }
        .main__sidebar__nav li a:hover {
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        }
        .main__sidebar__footer {
            background-color: gray;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <img src="#" alt="logo" />
            <h1>LPU Digital Services Dashboard</h1>
        </div>
    </header>
    <div class="main">
        <div class="main__sidebar">
            <div class="main__sidebar__profile">
                <img src="#" alt="avatar" />
                <div>
                    <h4>Profile Name</h4>
                    <p>Profile info</p>
                </div>
            </div>
            <div class="main__sidebar__nav">
                <ul>
                    <li>Go back to <a href="manila.lpu.edu.ph">manila.lpu.ph</a></li>
                    <li>Logout</li>
                </ul>
            </div>
            <div class="main__sidebar__footer">
                <p>Footer</p>
            </div>
        </div>
        <div class="main__content">
            <h4>Content</h4>
        </div>
    </div>
    
</body>
</html>