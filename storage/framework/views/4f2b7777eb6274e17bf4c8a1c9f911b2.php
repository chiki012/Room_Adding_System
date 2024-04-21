<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    /* .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .leftContainer {
        width: 40%;

    }

    */

    .container {

        text-align: center;
    }

    .leftContainer img {
        width: 40%;
        border: 2px solid grey;
        border-radius: 20px;
    }

    .rightContainer {
        display: inline-block;
        /* width: 60%; */
        text-align: left;
    }

    .rightContainer p {
        font-size: 20px;
    }

    button {
        width: 150px;
        height: 30px;
        background-color: coral;
        color: white;
        border: none;
        border-radius: 2px;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="leftContainer">
            <?php if($photo->image_name): ?>
            <img src=" <?php echo e(asset('storage/'.$photo->image_name)); ?>">
            <?php else: ?>
            <img src="<?php echo e(asset('storage/default.jpeg')); ?>">
            <?php endif; ?>
        </div>
        <div class="rightContainer">
            <p><?php echo e("Owner name: " .$photo->owner_name); ?></p>
            <p><?php echo e("Contact number: " .$photo->phone_number); ?></p>
            <p><?php echo e("Room Type: " .$photo->room_type); ?></p>
            <p><?php echo e("Room Name: " .$photo->room_name); ?></p>
            <?php if($photo->room_description): ?>
            <p><?php echo e("Room Description: " .$photo->room_description); ?></p>
            <?php endif; ?>
            <p><?php echo e("Per Night Cost: " .$photo->price); ?></p>


            <button>Book Now</button>

        </div>
    </div>
</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_tasks/images/resources/views/details.blade.php ENDPATH**/ ?>