<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/assets/css/nav.css">
  <link rel="stylesheet" href="./assets/css/icon.css">
  <link rel="stylesheet" href="./assets/css/device.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
</head>

<body>

  <header>


        <nav class="nav-section">
            <div class="header1">
                <div class="logo-flex">
                <button type="button" class="sidebar-burger" onclick="toggleSidebar()"></button>
                <img src="/assets/images/blocklord-logo.png" class="sidebar-logo" />
                </div>
                <div class="search-form desktop">
                    <form action="#">
                        <input type="text" name="search" id="search" placeholder="Search Product">
                        <button class="enter">
                            <img src="/assets/images/search.svg" alt="search">
                        </button>
                        
                    </form>
                </div>
                <div class="icon-box">
                <img src="/assets/images/icon-cart.svg" alt="">
                <img src="/assets//images/icon-profile.svg" alt="">
                <img src="/assets/images/icon-phone.svg" alt="">
                </div>
            </div>
</nav>


    </header>
    <nav class="sidebar-menu">

        <button type="button">
            <img src="/assets/images/icon-home.svg" />
            <span>Home</span>
        </button>
        <button type="button">
            <a href="/wp-pages/product.php" class="sidebar_icon">
                <img src="/assets/images/icon-product.svg" alt="">
            </a>
            
            <span><a href="/wp-pages/product.php " class="link">Product</a></span>
            
        </button>
            <button type="button" class="has-border">

                <a href="setting.php" class="sidebar_icon">
                    <img src="/assets/images/icon-settings.svg" alt="">
                </a>
                <span>Settings</span>
            </button>
            <button type="button">
                <a href="blockchain.php">
                <img src="/assets/images/icon-blockchain.svg" />
            </a>
                <span>Blockchick</span>
            </button>
            <button type="button">
                <img src="/assets/images/icon-database.svg" />
                <span>DataRiver</span>
            </button>
            <button type="button">
                <img src="/assets/images/icon-speaker.svg" />
                <span>AudioVibe</span>
            </button>
            <button type="button" class="has-border">
                <img src="/assets/images/icon-acoustic.svg" />
                <span>SoundBlast</span>
            </button>
            <button type="button">
                <img src="/assets/images/icon-folders.svg" />
                <span>Folders</span>
            </button>
            <button type="button">
                <img src="/assets/images/icon-levels.svg" />
                <span>Levels</span>
            </button>
            <button type="button">
                <img src="/assets/images/icon-accounts.svg" />
                <span>Accounts</span>
            </button>
            <button type="button">
                <img src="/assets/images/icon-lock.svg" />
                <span>Security</span>
            </button>

            <div class="blank">
            </div>
    </nav>
    <div class="search-form mobile">
                    <form action="#">
                        <input type="text" name="search" id="search" placeholder="enter">
                        <button class="enter">
                            <img src="/assets/images/search.svg" alt="search">
                        </button>
                        
                    </form>
                </div>
    <script type="text/javascript">
        const toggleSidebar = () => document.body.classList.toggle("open");
    </script>
</body>

</html>