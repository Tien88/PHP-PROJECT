<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_GET['get_id'])) {
    $get_id = $_GET['get_id'];
} else {
    $get_id = '';
    header('location:home.php');
}

if(isset($_POST['update'])) {

    $update_id = $_POST['property_id'];
    $update_id = filter_var($update_id, FILTER_SANITIZE_STRING);

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

    $old_image_01 = $_POST['old_image_01'];
    $old_image_01 = filter_var($old_image_01, FILTER_SANITIZE_STRING);
    $image_01 = $_FILES['image_01']['name'];
    $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
    $image_01_ext = pathinfo($image_01, PATHINFO_EXTENSION);
    $rename_image_01 = create_unique_id().'.'.$image_01_ext;
    $image_01_tmp_name = $_FILES['image_01']['tmp_name'];
    $image_01_size = $_FILES['image_01']['size'];
    $image_01_folder = 'uploaded_files/'.$rename_image_01;

    if(!empty($image_01)) {
        if($image_01_size > 2000000) {
            $warning_msg[] = 'image 01 kich thuoc qua lon';
        } else{
            $update_image_01 = $conn->prepare("UPDATE `property` SET image_01 = ? WHERE id = ?");
            $update_image_01->execute([$rename_image_01, $update_id]);
            move_uploaded_file($image_01_tmp_name, $image_01_folder);
            if($old_image_01 != '') {
                unlink('uploaded_files/'.$old_image_01);
            }
        }
    }

    $old_image_02 = $_POST['old_image_02'];
    $old_image_02 = filter_var($old_image_02, FILTER_SANITIZE_STRING);
    $image_02 = $_FILES['image_02']['name'];
    $image_02 = filter_var($image_02, FILTER_SANITIZE_STRING);
    $image_02_ext = pathinfo($image_02, PATHINFO_EXTENSION);
    $rename_image_02 = create_unique_id().'.'.$image_02_ext;
    $image_02_tmp_name = $_FILES['image_02']['tmp_name'];
    $image_02_size = $_FILES['image_02']['size'];
    $image_02_folder = 'uploaded_files/'.$rename_image_02;

    if(!empty($image_02)) {
        if($image_02_size > 2000000) {
            $warning_msg[] = 'image 02 kich thuoc qua lon';
        } else{
            $update_image_02 = $conn->prepare("UPDATE `property` SET image_02 = ? WHERE id = ?");
            $update_image_02->execute([$rename_image_02, $update_id]);
            move_uploaded_file($image_02_tmp_name, $image_02_folder);
            if($old_image_02 != '') {
                unlink('uploaded_files/'.$old_image_02);
            }
        }
    }
    
    $old_image_03 = $_POST['old_image_03'];
    $old_image_03 = filter_var($old_image_03, FILTER_SANITIZE_STRING);
    $image_03 = $_FILES['image_03']['name'];
    $image_03 = filter_var($image_03, FILTER_SANITIZE_STRING);
    $image_03_ext = pathinfo($image_03, PATHINFO_EXTENSION);
    $rename_image_03 = create_unique_id().'.'.$image_03_ext;
    $image_03_tmp_name = $_FILES['image_03']['tmp_name'];
    $image_03_size = $_FILES['image_03']['size'];
    $image_03_folder = 'uploaded_files/'.$rename_image_03;

    if(!empty($image_03)) {
        if($image_03_size > 2000000) {
            $warning_msg[] = 'image 03 kich thuoc qua lon';
        } else{
            $update_image_03 = $conn->prepare("UPDATE `property` SET image_03 = ? WHERE id = ?");
            $update_image_03->execute([$rename_image_03, $update_id]);
            move_uploaded_file($image_03_tmp_name, $image_03_folder);
            if($old_image_03 != '') {
                unlink('uploaded_files/'.$old_image_03);
            }
        }
    }

    $old_image_04 = $_POST['old_image_04'];
    $old_image_04 = filter_var($old_image_04, FILTER_SANITIZE_STRING);
    $image_04 = $_FILES['image_04']['name'];
    $image_04 = filter_var($image_04, FILTER_SANITIZE_STRING);
    $image_04_ext = pathinfo($image_04, PATHINFO_EXTENSION);
    $rename_image_04 = create_unique_id().'.'.$image_04_ext;
    $image_04_tmp_name = $_FILES['image_04']['tmp_name'];
    $image_04_size = $_FILES['image_04']['size'];
    $image_04_folder = 'uploaded_files/'.$rename_image_04;

    if(!empty($image_04)) {
        if($image_04_size > 2000000) {
            $warning_msg[] = 'image 04 kich thuoc qua lon';
        } else{
            $update_image_04 = $conn->prepare("UPDATE `property` SET image_04 = ? WHERE id = ?");
            $update_image_04->execute([$rename_image_04, $update_id]);
            move_uploaded_file($image_04_tmp_name, $image_04_folder);
            if($old_image_04 != '') {
                unlink('uploaded_files/'.$old_image_04);
            }
        }
    }

    $old_image_05 = $_POST['old_image_05'];
    $old_image_05 = filter_var($old_image_05, FILTER_SANITIZE_STRING);
    $image_05 = $_FILES['image_05']['name'];
    $image_05 = filter_var($image_05, FILTER_SANITIZE_STRING);
    $image_05_ext = pathinfo($image_05, PATHINFO_EXTENSION);
    $rename_image_05 = create_unique_id().'.'.$image_05_ext;
    $image_05_tmp_name = $_FILES['image_05']['tmp_name'];
    $image_05_size = $_FILES['image_05']['size'];
    $image_05_folder = 'uploaded_files/'.$rename_image_05;

    if(!empty($image_05)) {
        if($image_05_size > 2000000) {
            $warning_msg[] = 'image 05 kich thuoc qua lon';
        } else{
            $update_image_05 = $conn->prepare("UPDATE `property` SET image_05 = ? WHERE id = ?");
            $update_image_05->execute([$rename_image_05, $update_id]);
            move_uploaded_file($image_05_tmp_name, $image_05_folder);
            if($old_image_05 != '') {
                unlink('uploaded_files/'.$old_image_05);
            }
        }
    }

    $update_listing = $conn->prepare("UPDATE `property` SET property_name = ?, address = ?, price = ?, type = ?, offer = ?, status = ?, furnished = ?, bhk = ?, deposite = ?, bedroom = ?, bathroom = ?, balcony = ?, carpet = ?, age = ?, total_floors = ?, room_floor = ?, loan = ?, lift = ?, security_guard = ?, play_ground = ?, garden = ?, water_supply = ?, power_backup = ?, parking_area = ?, gym = ?, shopping_mall = ?, hospital = ?, school = ?, market_area = ?, description ? WHERE id = ?");
    $update_listing->execute([$property_name, $address, $price, $type, $offer, $status, $furnished, $bhk, $deposite, $bedroom, $bathroom, $balcony, $carpet, $age, $total_floors, $room_floor, $loan, $lift, $security_guard, $play_ground, $garden, $water_supply, $power_backup, $parking_area, $gym, $shopping_mall, $hospital, $school, $market_area, $description, $update_id]);

    $success_msg[] = 'listing updated!';
}

if(isset($_POST['delete_image_02'])) {

    $old_image_02 = $_POST['old_image_02'];
    $old_image_02 = filter_var($old_image_02, FILTER_SANITIZE_STRING);
    $update_image_02 = $conn->prepare("UPDATE `property` SET image_02 = ? WHERE id = ?");
    $update_image_02->execute(['', $get_id]);
    if($old_image_02 != '') {
        unlink('uploaded_files/'.$old_image_02);
        $success_msg[] = 'image 02 deleted!';
    }

}

if(isset($_POST['delete_image_03'])) {

    $old_image_03 = $_POST['old_image_03'];
    $old_image_03 = filter_var($old_image_03, FILTER_SANITIZE_STRING);
    $update_image_03 = $conn->prepare("UPDATE `property` SET image_03 = ? WHERE id = ?");
    $update_image_03->execute(['', $get_id]);
    if($old_image_03 != '') {
        unlink('uploaded_files/'.$old_image_03);
        $success_msg[] = 'image 03 deleted!';
    }

}

if(isset($_POST['delete_image_04'])) {

    $old_image_04 = $_POST['old_image_04'];
    $old_image_04 = filter_var($old_image_04, FILTER_SANITIZE_STRING);
    $update_image_04 = $conn->prepare("UPDATE `property` SET image_04 = ? WHERE id = ?");
    $update_image_04->execute(['', $get_id]);
    if($old_image_04 != '') {
        unlink('uploaded_files/'.$old_image_04);
        $success_msg[] = 'image 04 deleted!';
    }

}

if(isset($_POST['delete_image_05'])) {

    $old_image_05 = $_POST['old_image_05'];
    $old_image_05 = filter_var($old_image_05, FILTER_SANITIZE_STRING);
    $update_image_05 = $conn->prepare("UPDATE `property` SET image_05 = ? WHERE id = ?");
    $update_image_05->execute(['', $get_id]);
    if($old_image_05 != '') {
        unlink('uploaded_files/'.$old_image_05);
        $success_msg[] = 'image 05 deleted!';
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
    <title>Cập Nhật</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header start -->
    <?php include 'components/user_header.php'; ?>
    <!-- header end -->

<!-- update property starts -->

<section class="property-form">

    <?php
        $select_property = $conn->prepare("SELECT * FROM `property` WHERE id = ? LIMIT 1");
        $select_property->execute([$get_id]);
        if($select_property->rowCount() > 0){
            while($fetch_property = $select_property->fetch(PDO::FETCH_ASSOC)){
        
                $property_id = $fetch_property['id'];
    ?> 

    <form action="" method="post" enctype="multipart/form-data">
        <h3>Chi Tiết Bất Động Sản</h3>
        <input type="hidden" name="property_id" value="<? $property_id; ?>">
        <input type="hidden" name="old_image_01" value="<? $fetch_property['image_01']; ?>">
        <input type="hidden" name="old_image_02" value="<? $fetch_property['image_02']; ?>">
        <input type="hidden" name="old_image_03" value="<? $fetch_property['image_03']; ?>">
        <input type="hidden" name="old_image_04" value="<? $fetch_property['image_04']; ?>">
        <input type="hidden" name="old_image_05" value="<? $fetch_property['image_05']; ?>">
        <div class="box">
            <p>Tên Tài Sản</p>
            <input type="text" name="property_name" maxlength="50" required placeholder="Enter Property Name" class="input" value="<?= $fetch_property['property_name']; ?>">
        </div>
        <div class="flex">
            <div class="box">
                <p>Giá Tài Sản</p>
                <input type="number" name="price" maxlength="10" min="0" max="9999999999" required placeholder="Enter Property Price" class="input" value="<?= $fetch_property['price']; ?>">
            </div>
            <div class="box">
                <p>Tiền Đặt Cọc</p>
                <input type="number" name="deposite" maxlength="10" min="0" max="9999999999" required placeholder="Enter Property Price" class="input" value="<?= $fetch_property['deposite']; ?>">
            </div>
            <div class="box">
                <p>Địa Chỉ Tài Sản</p>
                <input type="text" name="address" maxlength="100" required placeholder="Enter Property Address" class="input" value="<?= $fetch_property['address']; ?>">
            </div>
            <div class="box">
                <p>Loại Ưu Đãi</p>
                <select name="offer" required class="input">
                    <option value="<? $fetch_property['offer']; ?>" selected><?= $fetch_property['offer']; ?></option>
                    <option value="sale">Khuyến mãi</option>
                    <option value="resale">Bán Lại</option>
                    <option value="rent">Cho Thuê</option>
                </select>
            </div>
            <div class="box">
                <p>Loại Hình BDS</p>
                <select name="type" class="input" required>
                    <option value="<? $fetch_property['type']; ?>" selected><?= $fetch_property['type']; ?></option>
                    <option value="flat">Mặt Bằng</option>
                    <option value="house">Nhà Phố</option>
                    <option value="shop">Cửa Hàng</option>
                </select>
            </div>
            <div class="box">
                <p>Tình Trạng BDS</p>
                <select name="status" required class="input">
                    <option value="<? $fetch_property['status']; ?>" selected><?= $fetch_property['status']; ?></option>
                    <option value="ready to move">Sẵn sàng dọn vào</option>
                    <option value="under construction">Đang Xây Dựng</option>
                </select>
            </div>
            <div class="box">
                <p>Tình Trạng Nội Thất</p>
                <select name="furnished" required class="input">
                    <option value="<? $fetch_property['furnished']; ?>" selected><?= $fetch_property['furnished']; ?></option>
                    <option value="furnished">Có Nội Thất</option>
                    <option value="semi-furnished">Không Nội Thất</option>
                    <option value="unfurnished">Mua Kèm Nội Thất</option>
                </select>
            </div>
            <div class="box">
                <p>Bao Nhiêu Phòng Ngủ</p>
                <select name="bhk" required class="input">
                    <option value="<? $fetch_property['bhk']; ?>" selected><?= $fetch_property['bhk']; ?> BHK</option>
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
                <p>Bao Nhiêu Phòng Ngủ ?</p>
                <select name="bedroom" required class="input">
                    <option value="<? $fetch_property['bedroom']; ?>" selected><?= $fetch_property['bedroom']; ?> Phòng Ngủ</option>
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
                <p>Bao Nhiêu Phòng Tắm ?</p>
                <select name="bathroom" required class="input">
                    <option value="<? $fetch_property['bathroom']; ?>" selected><?= $fetch_property['bathroom']; ?> Phòng tắm</option>
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
                <p>bao Nhiêu Ban Công</p>
                <select name="balcony" class="input" required>
                    <option value="<? $fetch_property['balcony']; ?>" selected><?= $fetch_property['balcony']; ?> Ban Công</option>
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
                <p>Diện Tích Sàn</p>
                <input type="number" name="carpet" maxlength="10" min="0" max="9999999999" required placeholder="How May Squarefits" class="input" value="<?= $fetch_property['carpet']; ?>">
            </div>
            <div class="box">
                <p>Tuổi Tài Sản</p>
                <input type="number" name="age" maxlength="2" min="0" max="99" required placeholder="How Old Is Property" class="input" value="<?= $fetch_property['age']; ?>">
            </div>
            <div class="box">
                <p>Tổng Số Tầng</p>
                <input type="number" name="total_floors" maxlength="2" min="0" max="99" required placeholder="How many floors" class="input" value="<?= $fetch_property['total_floors']; ?>">
            </div>
            <div class="box">
                <p>Tầng Của căn nhà</p>
                <input type="number" name="room_floor" maxlength="2" min="0" max="99" required placeholder="Property floor number" class="input" value="<?= $fetch_property['room_floor']; ?>">
            </div>
            <div class="box">
                <p>Khoản Vay</p>
                <select name="loan" required class="input">
                    <option value="<? $fetch_property['loan']; ?>" selected><?= $fetch_property['loan']; ?> Ban Công</option>
                    <option value="available">Có Sẵn</option>
                    <option value="not available">Không Có Sẵn</option>
                </select>
            </div>
        </div>
        <div class="box">
            <p>Mô Tả Bất Động Sản</p>
            <textarea name="description" id="" cols="30" rows="10" maxlength="1000" require placeholder="enter property description" class="input"><?= $fetch_property['description']; ?></textarea>
        </div>
        <div class="checkbox">
            <div class="box">
                <p><input type="checkbox" name="lift" value="yes" <?php if($fetch_property['lift'] == 'yes')echo 'checked'; ?>/>Thang Máy</p>
                <p><input type="checkbox" name="security_guard" value="yes"/>Nhân Viên Bảo Vệ</p>
                <p><input type="checkbox" name="play_ground" value="yes" <?php if($fetch_property['play_ground'] == 'yes')echo 'checked'; ?>/>Sân chơi</p>
                <p><input type="checkbox" name="garden" value="yes"     <?php if($fetch_property['garden'] == 'yes')echo 'checked'; ?>/>Sân Vườn</p>
                <p><input type="checkbox" name="water_supply" value="yes" <?php if($fetch_property['water_supply'] == 'yes')echo 'checked'; ?>/>Cung Cấp Nước</p>
                <p><input type="checkbox" name="power_backup" value="yes" <?php if($fetch_property['power_backup'] == 'yes')echo 'checked'; ?>/>Năng Lượng Dự Phòng</p>
            </div>
            <div class="box">
                <p><input type="checkbox" name="parking_area" value="yes" <?php if($fetch_property['parking_area'] == 'yes')echo 'checked'; ?>/>Bãi Đỗ Xe</p>
                <p><input type="checkbox" name="gym" value="yes" <?php if($fetch_property['lift'] == 'gym')echo 'checked'; ?>/>Phòng Gym</p>
                <p><input type="checkbox" name="shopping_mall" value="yes" <?php if($fetch_property['shopping_mall'] == 'yes')echo 'checked'; ?>/>Shopping_mall</p>
                <p><input type="checkbox" name="hospital" value="yes" <?php if($fetch_property['hospital'] == 'yes')echo 'checked'; ?>/>Bệnh Viện</p>
                <p><input type="checkbox" name="school" value="yes" <?php if($fetch_property['lift'] == 'school')echo 'checked'; ?>/>Trường học</p>
                <p><input type="checkbox" name="market_area" value="yes" <?php if($fetch_property['market_area'] == 'gym')echo 'checked'; ?>/>Trung tâm Mua Sắm</p>
            </div>
        </div>
        <div class="box">
            <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
            <p>Cập Nhật Hình 01 </p>
            <input type="file" name="image_01" class="input" accept="image/*" required>
        </div>
        <div class="flex">
            <div class="box">
                <?php
                    if(!empty($fetch_property['image_02'])) {
                        
                ?>
                <img src="uploaded_files/<?= $fetch_property['image_02']; ?>" alt="">
                <input type="submit" value="delete image 02" name="detele_image_02" class="btn" onclick="return confirm('delete image 02?');">
                <?php }; ?>
                <p>Cập Nhật Hình 02</p>
                <input type="file" name="image_02" class="input" accept="image/*">
            </div>
            <div class="box">
                <?php
                    if(!empty($fetch_property['image_03'])) {
                        
                ?>
                <img src="uploaded_files/<?= $fetch_property['image_03']; ?>" alt="">
                <input type="submit" value="delete image 03" name="detele_image_03" class="btn" onclick="return confirm('delete image 03?');">
                <?php }; ?>
                <p>Cập Nhật Hình 03</p>
                <input type="file" name="image_03" class="input" accept="image/*">
            </div>
            <div class="box">
                <?php
                    if(!empty($fetch_property['image_04'])) {
                        
                ?>
                <img src="uploaded_files/<?= $fetch_property['image_04']; ?>" alt="">
                <input type="submit" value="delete image 04" name="detele_image_04" class="btn" onclick="return confirm('delete image 04?');">
                <?php }; ?>
                <p>Cập Nhật Hình 04</p>
                <input type="file" name="image_04" class="input" accept="image/*">
            </div>
            <div class="box">
                <?php
                    if(!empty($fetch_property['image_05'])) {
                        
                ?>
                <img src="uploaded_files/<?= $fetch_property['image_05']; ?>" alt="">
                <input type="submit" value="delete image 05" name="detele_image_05" class="btn" onclick="return confirm('delete image 05?');">
                <?php }; ?>
                <p>Cập Nhật Hình 05</p>
                <input type="file" name="image_05" class="input" accept="image/*">
            </div>
        </div>
        <input type="submit" value="update property" name="update" class="btn">
    </form>

    <?php
          }
        }else{
            echo '<p class="empty">Tài Sản Không Tìm Thấy !</p';
        }
    ?>

</section>


<!-- update property ends -->










    <!-- footer starts -->

    <?php include 'components/footer.php'; ?>

    <!-- footer ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <?php include 'components/message.php'; ?>


</body>

</html>
