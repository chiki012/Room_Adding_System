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
            @if($photo->image_name)
            <img src=" {{ asset('storage/'.$photo->image_name) }}">
            @else
            <img src="{{ asset('storage/default.jpeg') }}">
            @endif
        </div>
        <div class="rightContainer">
            <p>{{"Owner name: " .$photo->owner_name}}</p>
            <p>{{"Contact number: " .$photo->phone_number}}</p>
            <p>{{"Room Type: " .$photo->room_type}}</p>
            <p>{{"Room Name: " .$photo->room_name}}</p>
            @if($photo->room_description)
            <p>{{"Room Description: " .$photo->room_description}}</p>
            @endif
            <p>{{"Per Night Cost: " .$photo->price}}</p>


            <button>Book Now</button>

        </div>
    </div>
</body>

</html>