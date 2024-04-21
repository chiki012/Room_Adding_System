<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
    form {
        text-align: center;
    }

    input,
    textarea {
        border: 1px solid black;
        width: 400px;
        height: 30px;
        margin-bottom: 5px;

    }

    textarea {
        height: 50px;
    }


    input::placeholder,
    textarea::placeholder {
        padding: 10px;

    }

    #hotel,
    #hostel {
        background-color: black;
        width: auto;
        height: auto;
    }

    .fileUpload {
        height: auto;
    }

    .submit {
        background-color: black;
        color: white;
    }

    .container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }


    .box {
        display: flex;
        flex-direction: column;
        border: 2px solid grey;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 10px;
        position: relative;
    }

    h2 {
        text-align: center;
    }

    img {
        width: auto;
        height: 200px;
        margin-bottom: 10px;
    }

    li {

        list-style: none;
    }

    .room_type_info {
        background-color: coral;
        width: 100px;
        height: 30px;
        border-radius: 5px;
        text-align: center;
        position: absolute;
        right: 10px;
        top: -15px;
        margin: 0px;
        padding-top: 10px;
        font-weight: bold;
        justify-content: center;
    }

    .roomDetails {
        width: auto;
        height: 30px;
        background-color: coral;
        color: white;
        border: none;
        border-radius: 2px;
    }

    a {
        text-decoration: none;
        color: white;
    }
    </style>
</head>

<body>
    <form action="/upload" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="text" name="owner_name" placeholder="Your name" maxlength="12" pattern="[A-Za-z]+" required> <br>
        <input type="text" name="phone" placeholder="Your phone number" pattern="[0-9]{10}" maxlength="10" required><br>
        <input type="text" name="room_name" placeholder="Room name" required><br>
        <textarea name="room_description" id="room_description" cols="40" rows="10"
            placeholder="Room Description"></textarea><br>
        <input type="number" name="price" placeholder="Per night cost" required><br>
        <input class=" fileUpload" type="file" name="image"><br>


        <input type="radio" id="hotel" name="room_type" value="hotel" required="required">
        <label for="hotel">Hotel</label>

        <input type="radio" id="hostel" name="room_type" value="hostel" required="required">
        <label for="hostel">Hostel</label>

        <br>
        <input class="submit" type="submit" name="Upload">


    </form>
    <h2>Rooms</h2>
    <div class="container">
        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="box">
            <h3> <?php echo e("Owner: ".$photo->owner_name); ?></h3>
            <h4> <?php echo e("Contact Number: ".$photo->phone_number); ?></h4>
            <p> <?php echo e("Room Name: ".$photo->room_name); ?></p>
            <?php if($photo->room_description): ?>
            <p><?php echo e("Room Description: " .$photo->room_description); ?></p>
            <?php endif; ?>
            <p> <?php echo e("Per Night Cost: ". $photo->price); ?></p>
            <?php if($photo->image_name): ?>
            <img src=" <?php echo e(asset('storage/'.$photo->image_name)); ?>">
            <?php else: ?>
            <img src="<?php echo e(asset('storage/default.jpeg')); ?>">
            <?php endif; ?>

            <p class="room_type_info"><?php echo e($photo->room_type); ?></p>
            <button class="roomDetails">
                <a href="<?php echo e(route('details', ['id' => $photo->id])); ?>">
                    Details
                </a>
            </button>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- <img src=" <?php echo e(asset('/storage/storage/check_5128225.png')); ?>" />
            <img src="<?php echo e(asset('storage/app/public/images/check_5128225.png')); ?>" />
            <img src="<?php echo e(asset('/check_5128225.png')); ?>" /> -->
    <!-- <img src="storage/app/public/images/check_5128225.png">
    <img src="<?php echo e(asset('public/color_2712193.png')); ?>" /> -->
    <!-- <img src="<?php echo e(URL::asset('images/check_5128225.png')); ?>"> -->
</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_tasks/images/resources/views/upload.blade.php ENDPATH**/ ?>