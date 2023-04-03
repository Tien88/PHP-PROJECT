<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_GET['get_id'])){
   $get_id = $_GET['get_id'];
}else{
   $get_id = '';
   header('location:home.php');
}

include 'components/save_send.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem Tài Sản</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'components/user_header.php'; ?>

    <!-- view property section starts  -->

    <section class="view-property">

        <h1 class="heading">Chi Tiết Bất Động Sản</h1>

        <?php
      $select_properties = $conn->prepare("SELECT * FROM `property` WHERE id = ? ORDER BY date DESC LIMIT 1");
      $select_properties->execute([$get_id]);
      if($select_properties->rowCount() > 0){
         while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){

         $property_id = $fetch_property['id'];

         $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_user->execute([$fetch_property['user_id']]);
         $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

         $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
         $select_saved->execute([$fetch_property['id'], $user_id]);
   ?>
        <div class="details">
            <div class="swiper images-container">
                <div class="swiper-wrapper">
                    <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="" class="swiper-slide">
                    <?php if(!empty($fetch_property['image_02'])){ ?>
                    <img src="uploaded_files/<?= $fetch_property['image_02']; ?>" alt="" class="swiper-slide">
                    <?php } ?>
                    <?php if(!empty($fetch_property['image_03'])){ ?>
                    <img src="uploaded_files/<?= $fetch_property['image_03']; ?>" alt="" class="swiper-slide">
                    <?php } ?>
                    <?php if(!empty($fetch_property['image_04'])){ ?>
                    <img src="uploaded_files/<?= $fetch_property['image_04']; ?>" alt="" class="swiper-slide">
                    <?php } ?>
                    <?php if(!empty($fetch_property['image_05'])){ ?>
                    <img src="uploaded_files/<?= $fetch_property['image_05']; ?>" alt="" class="swiper-slide">
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p>
            <div class="info">
                <p><i class="fas fa-indian-rupee-sign"></i><span><?= $fetch_property['price']; ?></span></p>
                <p><i class="fas fa-user"></i><span><?= $fetch_user['name']; ?></span></p>
                <p><i class="fas fa-phone"></i><a href="tel:1234567890"><?= $fetch_user['number']; ?></a></p>
                <p><i class="fas fa-building"></i><span><?= $fetch_property['type']; ?></span></p>
                <p><i class="fas fa-house"></i><span><?= $fetch_property['offer']; ?></span></p>
                <p><i class="fas fa-calendar"></i><span><?= $fetch_property['date']; ?></span></p>
            </div>
            <h3 class="title">Chi Tiết</h3>
            <div class="flex">
                <div class="box">
                    <p><i>Phòng :</i><span><?= $fetch_property['bhk']; ?> Phòng</span></p>
                    <p><i>Tiền Đặt Cọc : </i><span><span class="fas fa-indian-rupee-sign"
                                style="margin-right: .5rem;"></span><?= $fetch_property['deposite']; ?></span></p>
                    <p><i>Trạng Thái :</i><span><?= $fetch_property['status']; ?></span></p>
                    <p><i>Phòng Ngủ :</i><span><?= $fetch_property['bedroom']; ?></span></p>
                    <p><i>Phòng Tắm :</i><span><?= $fetch_property['bathroom']; ?></span></p>
                    <p><i>Ban Công :</i><span><?= $fetch_property['balcony']; ?></span></p>
                </div>
                <div class="box">
                    <p><i>Diện Tích Sàn :</i><span><?= $fetch_property['carpet']; ?> Mét Vuông</span></p>
                    <p><i>Tuổi Tài Sản :</i><span><?= $fetch_property['age']; ?> Năm</span></p>
                    <p><i>Tổng Số Tầng :</i><span><?= $fetch_property['total_floors']; ?></span></p>
                    <p><i>Phòng Căn Hộ :</i><span><?= $fetch_property['room_floor']; ?></span></p>
                    <p><i>Nội Thất :</i><span><?= $fetch_property['furnished']; ?></span></p>
                    <p><i>Khoản Vay :</i><span><?= $fetch_property['loan']; ?></span></p>
                </div>
            </div>
            <h3 class="title">Tiện Nghi</h3>
            <div class="flex">
                <div class="box">
                    <p><i
                            class="fas fa-<?php if($fetch_property['lift'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Thang Máy</span>
                    </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['security_guard'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Nhân Viên Bảo Vệ</span>
                    </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['play_ground'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Sân Chơi</span>
                    </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['garden'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Sân Vườn</span>
                    </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['water_supply'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Cung Cấp Nước</span>
                        </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['power_backup'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Năng Lượng Dự Phòng</span>
                    </p>
                </div>
                <div class="box">
                    <p><i
                            class="fas fa-<?php if($fetch_property['parking_area'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Bãi Đậu Xe</span>
                    </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['gym'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Phòng Gym</span>
                    </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['shopping_mall'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Cửa Hàng Mua Sắm</span>
                    </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['hospital'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Bệnh Viện</span>
                    </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['school'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Trường Học</span>
                    </p>
                    <p><i
                            class="fas fa-<?php if($fetch_property['market_area'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Trung Tâm Thương Mại</span>
                    </p>
                </div>
            </div>
            <h3 class="title">Mô Tả</h3>
            <p class="description"><?= $fetch_property['description']; ?></p>
            <form action="" method="post" class="flex-btn">
                <input type="hidden" name="property_id" value="<?= $property_id; ?>">
                <?php
            if($select_saved->rowCount() > 0){
         ?>
                <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>Đã lưu </span></button>
                <?php
            }else{ 
         ?>
                <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>Lưu Lại</span></button>
                <?php
            }
         ?>
                <input type="submit" value="Gửi Yêu Cầu" name="send" class="btn">
            </form>
        </div>
        <?php
      }
   }else{
      echo '<p class="empty">Tài Sản Không Tìm Thấy ?<a href="post_property.php" style="margin-top:1.5rem;" class="btn">Thêm Mới</a></p>';
   }
   ?>

    </section>

    <!-- view property section ends -->










    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <?php include 'components/message.php'; ?>

    <script>
    var swiper = new Swiper(".images-container", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 200,
            modifier: 3,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
    </script>

</body>

</html>