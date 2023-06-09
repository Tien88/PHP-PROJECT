<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}


include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header start -->
    <?php include 'components/user_header.php'; ?>
    <!-- header end -->



    <!-- home section starts -->

    <div class="home">

        <section class="center">

            <form action="search.php" method="post">
                <h3>Tìm Ngôi Nhà Hoàn Hảo Của Bạn</h3>
                <div class="box">
                    <p>Nhập Địa Chỉ <span>*</span></p>
                    <input type="text" name="h_location" required maxlength="100" placeholder="Nhập Tên Thành Phố"
                        class="input">
                </div>
                <div class="flex">
                    <div class="box">
                        <p>Loại Hình Tài Sản<span>*</span></p>
                        <select name="h_type" class="input" required>
                            <option value="flat">Mặt Bằng</option>
                            <option value="house">Nhà Ở</option>
                            <option value="shop">Cửa Hàng</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>Loại Ưu Đãi<span>*</span></p>
                        <select name="h_offer" class="input" required>
                            <option value="sale">Khuyến Mãi</option>
                            <option value="resale">Không Khuyến Mãi</option>
                            <option value="rent">Cho Thuê</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>Ngân Sách Tối Đa <span>*</span></p>
                        <select name="h_min" class="input" required>
                            <option value="5000">5 triệu</option>
                            <option value="10000">10 triệu</option>
                            <option value="15000">15 triệu</option>
                            <option value="20000">20 triệu</option>
                            <option value="30000">30 triệu</option>
                            <option value="40000">40 triệu</option>
                            <option value="40000">40 triệu</option>
                            <option value="50000">50 triệu</option>
                            <option value="100000">1 triệu</option>
                            <option value="500000">5 triệu</option>
                            <option value="1000000">10 triệu</option>
                            <option value="2000000">20 triệu</option>
                            <option value="3000000">30 triệu</option>
                            <option value="4000000">40 triệu</option>
                            <option value="4000000">40 triệu</option>
                            <option value="5000000">50 triệu</option>
                            <option value="6000000">60 triệu</option>
                            <option value="7000000">70 triệu</option>
                            <option value="8000000">80 triệu</option>
                            <option value="9000000">90 triệu</option>
                            <option value="10000000">1 trăm triệu</option>
                            <option value="20000000">2 trăm triệu</option>
                            <option value="30000000">3 trăm triệu</option>
                            <option value="40000000">4 trăm triệu</option>
                            <option value="50000000">5 trăm triệu</option>
                            <option value="60000000">6 trăm triệu</option>
                            <option value="70000000">7 trăm triệu</option>
                            <option value="80000000">8 trăm triệu</option>
                            <option value="90000000">9 trăm triệu</option>
                            <option value="10000000000">10 Tỷ</option>
                            <option value="150000000">1,5 Tỷ</option>
                            <option value="200000000">2 Tỷ</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>Ngân Sách Tối Thiểu <span>*</span></p>
                        <select name="h_max" class="input" required>
                            <option value="5000">5 triệu</option>
                            <option value="10000">10 triệu</option>
                            <option value="15000">15 triệu</option>
                            <option value="20000">20 triệu</option>
                            <option value="30000">30 triệu</option>
                            <option value="40000">40 triệu</option>
                            <option value="40000">40 triệu</option>
                            <option value="50000">50 triệu</option>
                            <option value="100000">1 triệu</option>
                            <option value="500000">5 triệu</option>
                            <option value="1000000">10 triệu</option>
                            <option value="2000000">20 triệu</option>
                            <option value="3000000">30 triệu</option>
                            <option value="4000000">40 triệu</option>
                            <option value="4000000">40 triệu</option>
                            <option value="5000000">50 triệu</option>
                            <option value="6000000">60 triệu</option>
                            <option value="7000000">70 triệu</option>
                            <option value="8000000">80 triệu</option>
                            <option value="9000000">90 triệu</option>
                            <option value="10000000">1 trăm triệu</option>
                            <option value="20000000">2 trăm triệu</option>
                            <option value="30000000">3 trăm triệu</option>
                            <option value="40000000">4 trăm triệu</option>
                            <option value="50000000">5 trăm triệu</option>
                            <option value="60000000">6 trăm triệu</option>
                            <option value="70000000">7 trăm triệu</option>
                            <option value="80000000">8 trăm triệu</option>
                            <option value="90000000">9 trăm triệu</option>
                            <option value="100000000">1 Tỷ</option>
                            <option value="150000000">1,5 Tỷ</option>
                            <option value="200000000">2 Tỷ</option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Tìm Kiếm Tài Sản" name="h_search" class="btn">
            </form>

        </section>
    </div>



    <!-- home section end -->

    <!-- services section starts  -->

    <section class="services">

        <h1 class="heading">Dịch Vụ Của Chúng Tôi</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>Mua Nhà</h3>
                <p>Hãy Lựa Chọn Căn Nhà Yêu Thích Của Bạn</p>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>Nhà Cho Thuê</h3>
                <p>Hãy Lựa Chon Căn Nhà Cho Thuê Phù Hợp Với Bạn</p>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>Bán Nhà</h3>
                <p>Hãy Đăng Những Loại Tài Sản Bạn Cần Bán</p>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>Căn Hộ và Tòa Nhà</h3>
                <p>Hãy Lựa Chọn Căn Hộ Và Tòa Nhà Bạn Yêu Thích</p>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>Cửa Hàng</h3>
                <p>Hãy đăng Cửa Hàng Mà Bạn Muốn Bán</p>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>Dịch Vụ 24/7</h3>
                <p>Hãy Liên Hệ Với Chúng Tôi Khi Cần Giúp Đỡ</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- listings section starts  -->

    <section class="listings">

        <h1 class="heading">Danh sách mới nhất</h1>

        <div class="box-container">
            <?php
         $total_images = 0;
         $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
         $select_properties->execute();
         if($select_properties->rowCount() > 0){
            while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){
               
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_user->execute([$fetch_property['user_id']]);
            $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

            if(!empty($fetch_property['image_02'])){
               $image_coutn_02 = 1;
            }else{
               $image_coutn_02 = 0;
            }
            if(!empty($fetch_property['image_03'])){
               $image_coutn_03 = 1;
            }else{
               $image_coutn_03 = 0;
            }
            if(!empty($fetch_property['image_04'])){
               $image_coutn_04 = 1;
            }else{
               $image_coutn_04 = 0;
            }
            if(!empty($fetch_property['image_05'])){
               $image_coutn_05 = 1;
            }else{
               $image_coutn_05 = 0;
            }

            $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);

            $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
            $select_saved->execute([$fetch_property['id'], $user_id]);

      ?>
            <form action="" method="POST">
                <div class="box">
                    <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
                    <?php
               if($select_saved->rowCount() > 0){
            ?>
                    <button type="submit" name="save" class="save"><i
                            class="fas fa-heart"></i><span>Đã Lưu</span></button>
                    <?php
               }else{ 
            ?>
                    <button type="submit" name="save" class="save"><i
                            class="far fa-heart"></i><span>Lưu Lại</span></button>
                    <?php
               }
            ?>
                    <div class="thumb">
                        <p class="total-images"><i class="far fa-image"></i><span><?= $total_images; ?></span></p>
                        <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
                    </div>
                    <div class="admin">
                        <h3><?= substr($fetch_user['name'], 0, 1); ?></h3>
                        <div>
                            <p><?= $fetch_user['name']; ?></p>
                            <span><?= $fetch_property['date']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="price"><i
                            class="fas fa-indian-rupee-sign"></i><span><?= $fetch_property['price']; ?></span></div>
                    <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
                    <p class="location"><i
                            class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p>
                    <div class="flex">
                        <p><i class="fas fa-house"></i><span><?= $fetch_property['type']; ?></span></p>
                        <p><i class="fas fa-tag"></i><span><?= $fetch_property['offer']; ?></span></p>
                        <p><i class="fas fa-bed"></i><span><?= $fetch_property['bhk']; ?> BHK</span></p>
                        <p><i class="fas fa-trowel"></i><span><?= $fetch_property['status']; ?></span></p>
                        <p><i class="fas fa-couch"></i><span><?= $fetch_property['furnished']; ?></span></p>
                        <p><i class="fas fa-maximize"></i><span><?= $fetch_property['carpet']; ?>Mét Vuông</span></p>
                    </div>
                    <div class="flex-btn">
                        <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">Xem Bất Động Sản</a>
                        <input type="submit" value="Gửi Yêu Cầu" name="send" class="btn">
                    </div>
                </div>
            </form>
            <?php
         }
      }else{
         echo '<p class="empty">no properties added yet! <a href="post_property.php" style="margin-top:1.5rem;" class="btn">add new</a></p>';
      }
      ?>

        </div>

        <div style="margin-top: 2rem; text-align:center;">
            <a href="listings.php" class="inline-btn">Xem Tất Cả</a>
        </div>

    </section>

    <!-- listings section ends -->








    <!-- footer starts -->

    <?php include 'components/footer.php'; ?>

    <!-- footer ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <?php include 'components/message.php'; ?>

</body>

</html>