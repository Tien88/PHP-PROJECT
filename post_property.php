<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
}

if (isset($_POST['post'])) {

    $id = create_unique_id();
    $property_name = $_POST['property_name'];
    $property_name = filter_var($property_name, FILTER_SANITIZE_STRING);

    $price = $_POST['price'];
    $price = filter_var($price, FILTER_SANITIZE_STRING);

    $deposite = $_POST['deposite'];
    $deposite = filter_var($deposite, FILTER_SANITIZE_STRING);

    $address = $_POST['address'];
    $address = filter_var($address, FILTER_SANITIZE_STRING);

    $offer = $_POST['offer'];
    $offer = filter_var($offer, FILTER_SANITIZE_STRING);

    $type = $_POST['type'];
    $type = filter_var($type, FILTER_SANITIZE_STRING);

    $status = $_POST['status'];
    $status = filter_var($status, FILTER_SANITIZE_STRING);

    $furnished = $_POST['furnished'];
    $furnished = filter_var($furnished, FILTER_SANITIZE_STRING);

    $bhk = $_POST['bhk'];
    $bhk = filter_var($bhk, FILTER_SANITIZE_STRING);

    $bedroom = $_POST['bedroom'];
    $bedroom = filter_var($bedroom, FILTER_SANITIZE_STRING);

    $bathroom = $_POST['bathroom'];
    $bathroom = filter_var($bathroom, FILTER_SANITIZE_STRING);

    $balcony = $_POST['balcony'];
    $balcony = filter_var($balcony, FILTER_SANITIZE_STRING);

    $carpet = $_POST['carpet'];
    $carpet = filter_var($carpet, FILTER_SANITIZE_STRING);

    $age = $_POST['age'];
    $age = filter_var($age, FILTER_SANITIZE_STRING);

    $total_floors = $_POST['total_floors'];
    $total_floors = filter_var($total_floors, FILTER_SANITIZE_STRING);
    
    $room_floor = $_POST['room_floor'];
    $room_floor = filter_var($room_floor, FILTER_SANITIZE_STRING);

    $loan = $_POST['loan'];
    $loan = filter_var($loan, FILTER_SANITIZE_STRING);
    
    $description = $_POST['description'];
    $description = filter_var($description, FILTER_SANITIZE_STRING);

    if (isset($_POST['lift'])) {
        $lift = $_POST['lift'];
        $lift = filter_var($lift, FILTER_SANITIZE_STRING);
    } else {
        $lift = 'no';
    }
    if (isset($_POST['security_guard'])) {
        $security_guard = $_POST['security_guard'];
        $security_guard = filter_var($security_guard, FILTER_SANITIZE_STRING);
    } else {
        $security_guard = 'no';
    }
    if (isset($_POST['play_ground'])) {
        $play_ground = $_POST['play_ground'];
        $play_ground = filter_var($play_ground, FILTER_SANITIZE_STRING);
    } else {
        $play_ground = 'no';
    }
    if (isset($_POST['garden'])) {
        $garden = $_POST['garden'];
        $garden = filter_var($garden, FILTER_SANITIZE_STRING);
    } else {
        $garden = 'no';
    }
    if (isset($_POST['water_supply'])) {
        $water_supply = $_POST['water_supply'];
        $water_supply = filter_var($water_supply, FILTER_SANITIZE_STRING);
    } else {
        $water_supply = 'no';
    }
    if (isset($_POST['power_backup'])) {
        $power_backup = $_POST['power_backup'];
        $power_backup = filter_var($power_backup, FILTER_SANITIZE_STRING);
    } else {
        $power_backup = 'no';
    }
    if (isset($_POST['parking_area'])) {
        $parking_area = $_POST['parking_area'];
        $parking_area = filter_var($parking_area, FILTER_SANITIZE_STRING);
    } else {
        $parking_area = 'no';
    }
    if (isset($_POST['gym'])) {
        $gym = $_POST['gym'];
        $gym = filter_var($gym, FILTER_SANITIZE_STRING);
    } else {
        $gym = 'no';
    }
    if (isset($_POST['shopping_mall'])) {
        $shopping_mall = $_POST['shopping_mall'];
        $shopping_mall = filter_var($shopping_mall, FILTER_SANITIZE_STRING);
    } else {
        $shopping_mall = 'no';
    }
    if (isset($_POST['hospital'])) {
        $hospital = $_POST['hospital'];
        $hospital = filter_var($hospital, FILTER_SANITIZE_STRING);
    } else {
        $hospital = 'no';
    }
    if (isset($_POST['school'])) {
        $school = $_POST['school'];
        $school = filter_var($school, FILTER_SANITIZE_STRING);
    } else {
        $school = 'no';
    }
    if (isset($_POST['market_area'])) {
        $market_area = $_POST['market_area'];
        $market_area = filter_var($market_area, FILTER_SANITIZE_STRING);
    } else {
        $market_area = 'no';
    }

    $image_02 = $_FILES['image_02']['name'];
    $image_02 = filter_var($image_02, FILTER_SANITIZE_STRING);
    $image_02_ext = pathinfo($image_02, PATHINFO_EXTENSION);
    $rename_image_02 = create_unique_id().'.'.$image_02_ext;
    $image_02_tmp_name = $_FILES['image_02']['tmp_name'];
    $image_02_size = $_FILES['image_02']['size'];
    $image_02_folder = 'uploaded_files/'.$rename_image_02;

    if (!empty($image_02)) {
        if($image_02_size > 2000000) {
            $warning_msg[] = 'image 02 size is too large';
        }else {
            move_uploaded_file($image_02_tmp_name, $image_02_folder);
        }
    } else {
        $rename_image_02 = '';
    }

    $image_03 = $_FILES['image_03']['name'];
    $image_03 = filter_var($image_03, FILTER_SANITIZE_STRING);
    $image_03_ext = pathinfo($image_03, PATHINFO_EXTENSION);
    $rename_image_03 = create_unique_id().'.'.$image_03_ext;
    $image_03_tmp_name = $_FILES['image_03']['tmp_name'];
    $image_03_size = $_FILES['image_03']['size'];
    $image_03_folder = 'uploaded_files/'.$rename_image_03;

    if (!empty($image_03)) {
        if($image_03_size > 2000000) {
            $warning_msg[] = 'image 03 size is too large';
        }else {
            move_uploaded_file($image_03_tmp_name, $image_03_folder);
        }
    } else {
        $rename_image_03 = '';
    }

    $image_04 = $_FILES['image_04']['name'];
    $image_04 = filter_var($image_04, FILTER_SANITIZE_STRING);
    $image_04_ext = pathinfo($image_04, PATHINFO_EXTENSION);
    $rename_image_04 = create_unique_id().'.'.$image_04_ext;
    $image_04_tmp_name = $_FILES['image_04']['tmp_name'];
    $image_04_size = $_FILES['image_04']['size'];
    $image_04_folder = 'uploaded_files/'.$rename_image_04;

    if (!empty($image_04)) {
        if($image_04_size > 2000000) {
            $warning_msg[] = 'image 04 size is too large';
        }else {
            move_uploaded_file($image_04_tmp_name, $image_04_folder);
        }
    } else {
        $rename_image_04 = '';
    }

    $image_05 = $_FILES['image_05']['name'];
    $image_05 = filter_var($image_05, FILTER_SANITIZE_STRING);
    $image_05_ext = pathinfo($image_05, PATHINFO_EXTENSION);
    $rename_image_05 = create_unique_id().'.'.$image_05_ext;
    $image_05_tmp_name = $_FILES['image_05']['tmp_name'];
    $image_05_size = $_FILES['image_05']['size'];
    $image_05_folder = 'uploaded_files/'.$rename_image_05;

    if (!empty($image_05)) {
        if($image_05_size > 2000000) {
            $warning_msg[] = 'image 05 size is too large';
        }else {
            move_uploaded_file($image_05_tmp_name, $image_05_folder);
        }
    } else {
        $rename_image_05 = '';
    }

    $image_01 = $_FILES['image_01']['name'];
    $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
    $image_01_ext = pathinfo($image_01, PATHINFO_EXTENSION);
    $rename_image_01 = create_unique_id().'.'.$image_01_ext;
    $image_01_tmp_name = $_FILES['image_01']['tmp_name'];
    $image_01_size = $_FILES['image_01']['size'];
    $image_01_folder = 'uploaded_files/'.$rename_image_01;

    if($image_01_size > 2000000) {
        $warning_msg[] = 'image 01 size is too large';
    }else {
        $post_property = $conn->prepare("INSERT INTO `property`(id, user_id, property_name, address, price, type, offer, status, furnished, bhk, deposite, bedroom, bathroom, balcony, carpet, age, total_floors, room_floor, loan, lift, security_guard, play_ground, garden, water_supply, power_backup, parking_area, gym, shopping_mall, hospital, school, market_area, image_01, image_02, image_03, image_04, image_05, description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $post_property->execute([$id, $user_id, $property_name, $address, $price, $type, $offer, $status, $furnished, $bhk, $deposite, $bedroom, $bathroom, $balcony, $carpet, $age, $total_floors, $room_floor, $loan, $lift, $security_guard, $play_ground, $garden, $water_supply, $power_backup, $parking_area, $gym, $shopping_mall, $hospital, $school, $market_area, $rename_image_01, $rename_image_02, $rename_image_03, $rename_image_04, $rename_image_05, $description]);
        move_uploaded_file($image_01_tmp_name, $image_01_folder);
        $success_msg[] = 'property posted successfully!';
    }
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Property</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- css link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header start -->
    <?php include 'components/user_header.php'; ?>
    <!-- header end -->

<!-- post property starts -->

<section class="property-form">

    <form action="" method="post" enctype="multipart/form-data">
        <h3>Danh Sách Tài Sản</h3>
        <div class="box">
            <p>Tên Tài Sản <span>*</span></p>
            <input type="text" name="property_name" maxlength="50" required placeholder="Nhập Tên Tài Sản"class="input">
        </div>
        <div class="flex">
            <div class="box">
                <p>Giá Của Tài Sản <span>*</span></p>
                <input type="number" name="price" maxlength="10" min="0" max="9999999999" required placeholder="Nhập giá của tài sản"class="input">
            </div>
            <div class="box">
                <p>Mức Đặt Cọc <span>*</span></p>
                <input type="number" name="deposite" maxlength="10" min="0" max="9999999999" required placeholder="Nhập mức giá đặt cọc"class="input">
            </div>
            <div class="box">
                <p>Địa Chỉ Tài Sản <span>*</span></p>
                <input type="text" name="address" maxlength="100" required placeholder="Nhập Địa Chỉ Tài Sản"class="input">
            </div>
            <div class="box">
                <p>Loại Ưu Đãi<span>*</span></p>
                <select name="offer" required class="input">
                    <option value="sale">Bán Trả Góp</option>
                    <option value="resale">Bán Lại</option>
                    <option value="rent">Cho Thuê</option>
                </select>
            </div>
            <div class="box">
                <p>Loại Hình Tài Sản<span>*</span></p>
                <select name="type" required class="input">
                    <option value="flat">Mặt Bằng</option>
                    <option value="house">Nhà Phố</option>
                    <option value="shop">Cửa Hàng</option>
                </select>
            </div>
            <div class="box">
                <p>Tình Trạng Tài Sản<span>*</span></p>
                <select name="status" required class="input">
                    <option value="ready to move">Vào Ở Ngay</option>
                    <option value="under construction">Đang Xây Dựng</option>
                </select>
            </div>
            <div class="box">
                <p>Tình Trạng Nội Thất<span>*</span></p>
                <select name="furnished" required class="input">
                    <option value="furnished">Đã Trang bị</option>
                    <option value="semi-furnished">Bán Nội Thất</option>
                    <option value="unfurnished">Không Có Nội Thất</option>
                </select>
            </div>
            <div class="box">
                <p>Bao Nhiêu Phòng Bếp<span>*</span></p>
                <select name="bhk" required class="input">
                    <option value="1">1 Bếp</option>
                    <option value="2">2 Bếp</option>
                    <option value="3">3 Bếp</option>
                    <option value="4">4 Bếp</option>
                    <option value="5">5 Bếp</option>
                    <option value="6">6 Bếp</option>
                    <option value="7">7 Bếp</option>
                    <option value="8">8 Bếp</option>
                    <option value="9">9 Bếp</option>
                </select>
            </div>
            <div class="box">
                <p>Bao Nhiêu Phòng Ngủ<span>*</span></p>
                <select name="bedroom" required class="input">
                    <option value="1">1 Phòng Ngủ</option>
                    <option value="2">2 Phòng Ngủ</option>
                    <option value="3">3 Phòng Ngủ</option>
                    <option value="4">4 Phòng Ngủ</option>
                    <option value="5">5 Phòng Ngủ</option>
                    <option value="6">6 Phòng Ngủ</option>
                    <option value="7">7 Phòng Ngủ</option>
                    <option value="8">8 Phòng Ngủ</option>
                    <option value="9">9 Phòng Ngủ</option>
                </select>
            </div>
            <div class="box">
                <p>Bao Nhiêu Phòng Tắm<span>*</span></p>
                <select name="bathroom" required class="input">
                    <option value="1">1 Phòng Tắm</option>
                    <option value="2">2 Phòng Tắm</option>
                    <option value="3">3 Phòng Tắm</option>
                    <option value="4">4 Phòng Tắm</option>
                    <option value="5">5 Phòng Tắm</option>
                    <option value="6">6 Phòng Tắm</option>
                    <option value="7">7 Phòng Tắm</option>
                    <option value="8">8 Phòng Tắm</option>
                    <option value="9">9 Phòng Tắm</option>
                </select>
            </div>
            <div class="box">
                <p>Bao Nhiêu Ban Công<span>*</span></p>
                <select name="balcony" class="input" required>
                    <option value="0">0 Ban Công</option>
                    <option value="1">1 Ban Công</option>
                    <option value="2">2 Ban Công</option>
                    <option value="3">3 Ban Công</option>
                    <option value="4">4 Ban Công</option>
                    <option value="5">5 Ban Công</option>
                    <option value="6">6 Ban Công</option>
                    <option value="7">7 Ban Công</option>
                    <option value="8">8 Ban Công</option>
                    <option value="9">9 Ban Công</option>
                </select>
            </div>
            <div class="box">
                <p>Diện Tích Sàn<span>*</span></p>
                <input type="number" name="carpet" maxlength="10" min="0" max="9999999999" required placeholder="Bao Nhiêu Mét Vuông"class="input">
            </div>
            <div class="box">
                <p>Tuổi Đời Tài Sản<span>*</span></p>
                <input type="number" name="age" maxlength="2" min="0" max="99" required placeholder="Tuổi Tài Sản là bao nhiêu"class="input">
            </div>
            <div class="box">
                <p>Tổng Số Tầng<span>*</span></p>
                <input type="number" name="total_floors" maxlength="2" min="0" max="99" required placeholder="Có Bao Nhiêu Lầu"class="input">
            </div>
            <div class="box">
                <p>Tầng Phòng<span>*</span></p>
                <input type="number" name="room_floor" maxlength="2" min="0" max="99" required placeholder="Số Tầng của Căn Hộ"class="input">
            </div>
            <div class="box">
                <p>Khoảng Vay<span>*</span></p>
                <select name="loan" required class="input">
                    <option value="available">Có Sẵn</option>
                    <option value="not available">Không có Sẵn</option>
                </select>
            </div>
        </div>
        <div class="box">
            <p>Mô Tả Về Tài Sản<span>*</span></p>
            <textarea name="description" id="" cols="30" rows="10" maxlength="1000" require placeholder="Nhập Mô Tả Về Tài Sản" class="input"></textarea>
        </div>
        <div class="checkbox">
            <div class="box">
                <p><input type="checkbox" name="lift" value="yes"/>Thang Máy</p>
                <p><input type="checkbox" name="security_guard" value="yes"/>Nhân Viên Bảo Vệ</p>
                <p><input type="checkbox" name="play_ground" value="yes"/>Sân Chơi</p>
                <p><input type="checkbox" name="garden" value="yes"/>Vườn</p>
                <p><input type="checkbox" name="water_supply" value="yes"/>Cung Cấp Nước</p>
                <p><input type="checkbox" name="power_backup" value="yes"/>Năng Lượng Dự Phòng</p>
            </div>
            <div class="box">
                <p><input type="checkbox" name="parking_area" value="yes"/>Bãi Đậu Xe</p>
                <p><input type="checkbox" name="gym" value="yes"/>GYM</p>
                <p><input type="checkbox" name="shopping_mall" value="yes"/>Trung Tâm Mua Sắm</p>
                <p><input type="checkbox" name="hospital" value="yes"/>Bệnh Viện</p>
                <p><input type="checkbox" name="school" value="yes"/>Trường Học</p>
                <p><input type="checkbox" name="market_area" value="yes"/>Cửa Hàng Mua Sắm</p>
            </div>
        </div>
        <div class="box">
            <p>Hình 01 <span></span></p>
            <input type="file" name="image_01" class="input" accept="image/*" required>
        </div>
        <div class="flex">
            <div class="box">
                <p>Hình 02 <span></span></p>
                <input type="file" name="image_02" class="input" accept="image/*">
            </div>
            <div class="box">
                <p>Hình 03 <span></span></p>
                <input type="file" name="image_03" class="input" accept="image/*">
            </div>
            <div class="box">
                <p>Hình 04 <span></span></p>
                <input type="file" name="image_04" class="input" accept="image/*">
            </div>
            <div class="box">
                <p>Hình 05 <span></span></p>
                <input type="file" name="image_05" class="input" accept="image/*">
            </div>
        </div>
        <input type="submit" value="Đăng Tài Sản" name="post" class="btn">
    </form>

</section>

<!-- post property ends -->










    <!-- footer starts -->

    <?php include 'components/footer.php'; ?>

    <!-- footer ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <?php include 'components/message.php'; ?>


</body>

</html>