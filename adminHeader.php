<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: orange;">
    <button class="openbtn" onclick="openNav()" style="margin-right: auto; margin-left: 0;">
        <i class="fa fa-bars"></i>
    </button>
    <div style="text-align: center; width: 100%; height: 30px;">
        <h2 style="color: white; font-size: 25px;">CAREER GUIDANCE MOBILE APP</h2>
    </div>

    <a class="navbar-brand ml-5" href="./index.php"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

    <div class="user-cart">
        <?php
        if(isset($_SESSION['user_id'])){
        ?>
        <a href="logout.php" style="text-decoration:none;">
            <i class="fa fa-sign-out mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
        </a>
        <?php
        } else {
        ?>
        <a href="" style="text-decoration:none;">
            <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
        </a>
        <?php
        }
        ?>
    </div>
</nav>

<body>
    
</body>
