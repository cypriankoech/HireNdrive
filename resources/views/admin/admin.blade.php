<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hired Drive</title>

    <!-- hard css -->
    <!-- hii siajtumia -->
    <link rel="stylesheet" href="css/admin.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Fontawesome Icons -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "Comfortaa", cursive;
        }

        .body {
            display: flex;
            flex-wrap: nowrap;
        }

        .options-container {
            background: linear-gradient(rgba(192, 0, 0, 0.9), rgba(248, 1, 174, 0.822));
            height: 100vh;
            margin: 0;
            padding: 0;
            position: sticky;
            left: 0;
            top: 0;
        }

        .admin-img {
            width: 200px;
            object-fit: contain;
        }

        .container {
            display: block;
            text-align: center;
            padding-top: 5rem;
        }

        .container h3 {
            margin-top: 1.5rem;
            text-transform: uppercase;
        }

        .options-list {
            display: block;
            text-align: center;
            margin-top: 5rem;
        }

        .options-list ul {
            list-style-type: none;
            padding-inline: .5rem;
        }

        li {
            text-align: center;
            padding-top: 3rem;
        }

        .options-list a {
            text-decoration: none;
            color: black;
        }

        .opt {
            width: 100%;
            border: 1px solid white;
            padding: .5rem;
            border-radius: 5px;
            color: black;
            background-color: rgba(255, 255, 255, 0);
        }

        .opt:hover {
            background-color: white;
            color: black;
        }

        .logout-btn {
            width: 100%;
            margin-top: 50%;
        }

        .logout-btn a {
            color: white;
            text-decoration: none;

        }

        .tables-display {
            background-color: white;
            width: 100%;
            height: 100vh;
        }

        .users-table {
            display: block;
            text-align: center;
            height: 45rem;
        }

        table {
            border: 1px solid grey;
            padding: 1rem;
            /* enable shadow for the table div */
            /* box-shadow: 0px 10px 30px 10px rgba(0, 0, 0, 0.518); */

        }

        .users-table-holder {
            display: block;
        }

        .cars-table-holder {
            display: none;
        }

        thead {
            color: grey;
        }

        .car-image-container {
            display: block;
            text-align: center;
            align-items: center;
            width: fit-content;
        }

        .car-image-container img {
            object-fit: contain;
            width: 200px;
            text-align: center;
            height: 200px;
        }

        .vehicle-handling {
            display: flex;
            flex-wrap: nowrap;
        }
    </style>

</head>

<body>
    <div class="body">
        <div class="options-container w-25">
            <div class="container header">
                <img src="images/user.png" alt="" class="admin-img">
                <h3>Admin</h3>
            </div>
            <div class="options-list">
                <ul>
                    <li>
                        <button class="opt" onclick="get_user_display()">

                            <i class="fa-solid fa-users"></i>
                            User Management

                        </button>
                    </li>
                    <li>
                        <button class="opt" onclick="get_car_display()">

                            <i class="fa-solid fa-car"></i>
                            Vehicle Management

                        </button>
                    </li>
                </ul>


            </div>
            <div class="logout-option p-2">
                <button class="btn btn-primary logout-btn">
                    <a href="#">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out
                    </a>
                </button>
            </div>
        </div>
        <div class="tables-display mt-4 p-4 ">
            <div class="users-table-holder form-control mt-4 p-4" id="users-display">
                <h2 class="h1 text-center">
                    OverView
                </h2>
                <div class="users-table my-4">
                    <h2 class="h2">
                        Users
                    </h2>
                    <table class="table">
                        <thead class="thead-dark">


                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Email</th>
                                <th scope="col">created at</th>
                                <th scope="col">updated at</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($users) > 0)
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{$user['name']}}</th>
                                        <td>{{$user['dob']}}</td>
                                        <td>{{$user['email']}}</td>
                                        <td>{{$user['created_at']}}</td>
                                        <td>{{$user['updated_at']}}</td>
                                        <td><button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>
                                    </tr>
                                @endforeach

                            @endif
                        </tbody>
                    </table>


                </div>
            </div>
            <div class="cars-table-holder form-control mt-0 p-4" id="cars-display">
                <h2 class="h1 text-center">
                    Vehicle Management
                </h2>
                <div class="users-table my-4">
                    <div class="vehicle-handling m-4">
                        <div class="car-image-container form-control">
                            <h3>Image</h3>
                            <img src="images/plus.png" alt="" class="form-control m-2 p-2">
                            <input type="file" name="car_image" id="car-image">
                        </div>
                        <div class="car-details form-control mx-2">
                            <input type="text" placeholder="Model" class="form-control my-2">
                            <input type="text" placeholder="Registration No." class="form-control my-2">
                            <input type="text" placeholder="Pricing" class="form-control my-2">
                            <input type="text" placeholder="Type" class="form-control my-2">
                            <button class="btn btn-primary w-100">
                                <i class="fa-solid fa-plus"></i>
                                Add Vehicle
                            </button>
                        </div>
                    </div>
                    <h2 class="h2">
                        Vehicles
                    </h2>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Model</th>
                                <th scope="col">Registration No</th>
                                <th scope="col">Pricing</th>
                                <th scope="col">Type</th>
                                <th scope="col">Options</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Mercedes Benz</th>
                                <td>KCJ 435H</td>
                                <td>$ 5,000</td>
                                <td>Luxury</td>
                                <td><button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">Mercedes Benz</th>
                                <td>KCJ 435H</td>
                                <td>$ 5,000</td>
                                <td>Luxury</td>
                                <td><button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">Mercedes Benz</th>
                                <td>KCJ 435H</td>
                                <td>$ 5,000</td>
                                <td>Luxury</td>
                                <td><button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>

        </div>
    </div>
    <script>
        var user_ds = document.getElementById("users-display");
        var car_ds = document.getElementById("cars-display");

        function get_car_display() {
            car_ds.style.display = "block";
            user_ds.style.display = "none";
        }

        function get_user_display() {
            car_ds.style.display = "none";
            user_ds.style.display = "block";
        }
    </script>
</body>

</html>