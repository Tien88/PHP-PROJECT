<header class="header">

    <div class="nav nav-1">
        <section class="flex">
            <a href="home.php" class="logo"><i class="fas fa-house"></i>BatDongSan</a>

            <ul>
                <li><a href="post_property.php">Đăng Tài Sản<i class="fas fa-paper-plane"></i></a></li>
            </ul>
        </section>
    </div>

    <div class="nav nav-2">
        <section class="flex">
            <div id="menu-btn" class="fas fa-bars"></div>

            <div class="menu">
                <ul>
                    <li><a href="#">Danh Sách Của Tôi<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="dashboard.php">Bảng Điều Khiển</a></li>        
                            <li><a href="post_property.php">Đăng Tài Sản</a></li>        
                            <li><a href="my_listings.php">Danh Sách Tài Sản</a></li>        
                        </ul>
                    </li>
                    <li><a href="#">Tùy Chọn <i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="search.php">Bộ Lọc Tìm Kiếm</a></li>        
                            <li><a href="listings.php">Toàn Bộ Danh Sách</a></li>                
                        </ul>
                    </li>
                    <li><a href="#">Giúp Đỡ <i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="about.php">Thông Tin Chúng Tôi</a></li>        
                            <li><a href="contact.php">Liên Hệ Với Chúng Tôi</a></li>                
                            <li><a href="contact.php#faq">FAQ</a></li>                
                        </ul>
                    </li>
                </ul>
            </div>

            <ul>
                <li><a href="saved.php">Danh Sách Yêu Thích<i class="fas fa-heart"></i></a></li>
                <li>
                <li><a href="#">Tài Khoản <i class="fas fa-angle-down"></i></a>
                    <ul>
                        <li><a href="login.php">Đăng Nhập</a></li>
                        <li><a href="register.php">Đăng Ký</a></li>
                            
                        <?php if($user_id != ''){ ?>
                            <li><a href="update.php">Cập Nhật Thông Tin</a></li>
                            <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?')">Đăng Xuất</a></li>
                        <?php }?></li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>

</header>