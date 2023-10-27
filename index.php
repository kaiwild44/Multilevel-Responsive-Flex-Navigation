<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLogger</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <div id="logo"><span>Code</span>Logger</div>
            <label for="drop" class="toggle" id='hamburger'><i class="fa fa-bars"></i></label>
            <input type="checkbox" id="drop">
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li> 
                
                <!-- First Dimension -->
                <label for="drop-1" class="toggle">Menu Item 1 +</label>
                <a href="#">Menu Item 1</a>
                <input type="checkbox" id="drop-1">
                <ul>
                    <li><a href="#">Menu Item 1.1</a></li>
                    <li><a href="#">Menu Item 1.2</a></li>
                    <li> 
                    
                    <!-- Second Dimension -->
                    <label for="drop-2" class="toggle">Menu Item 1.3. +</label>
                    <a href="#">Menu Item 1.3</a>
                    <input type="checkbox" id="drop-2">
                    <ul>
                        <li><a href="#">Menu Item 1.3.1</a></li>
                        <li><a href="#">Menu Item 1.3.2</a></li>
                        <li><a href="#">Menu Item 1.3.3</a></li>
                    </ul>
                    </li>
                </ul>
                </li>
                <li> 
                <!-- First Dimension -->
                <label for="drop-3" class="toggle">Username +</label>
                <a href="#">Username</a>
                <input type="checkbox" id="drop-3">
                <ul>
                    <li><a href="#">User Profile</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
                </li>
                
                <!-- <li><a href="#">Item 3</a></li> -->
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1 class="text-center">Main</h1>
        </div>
    </main>
    <footer>
        Footer
    </footer>
    <script src="https://kit.fontawesome.com/d2067c408b.js"></script>
</body>
</html>