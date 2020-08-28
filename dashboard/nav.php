<?php include "../model/checkauth.php"; ?>

<nav class="navbar navbar-expand-lg navbar-dark  bg-dark shadow-sm">
        <a class="navbar-brand" href="./index.php"> 
            控制台
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="./gallery.php">相册管理</a>
                </li> 
                <li class="nav-item ">
                    <a class="nav-link" href="./packagebookings.php">景点预定</a>
                </li> 
                <li class="nav-item ">
                    <a class="nav-link" href="./vehiclebookings.php">汽车预定</a>
                </li> 
                <li class="nav-item ">
                    <a class="nav-link" href="./queries.php">留言管理</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="../model/logout.php">退出系统</a>
                </li>
            </ul>
        </div>

    </nav>