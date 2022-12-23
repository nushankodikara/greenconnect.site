<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin Panel</title>
        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css"
            rel="stylesheet"
            type="text/css"
        />
        <link rel="stylesheet" href="style.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .card-actions{
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                align-content: center;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <div class="navbar bg-base-100">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl">Admin Panel</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="index.php">Tickets</a></li>
                    <li><a href="completed.php">Completed Tickets</a></li>
                </ul>
            </div>
        </div>
        <!-- Hero Section -->
        <div class="hero min-h-screen bg-base-200">
            <div class="hero-content text-center">
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Hello there</h1>
                    <p class="py-6">
                        Use the cards below to reply to the users' queries.
                    </p>
                    <a class="btn btn-primary" href="#stats">Get Started</a>
                </div>
            </div>
        </div>
        <!-- Stats -->
        <div id="stats" class="stats">
            <div class="stats shadow">
            <?php

include '../servers.php';

// get all messages from messages table and display with cards

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
}

// count all tickets

$sql = "SELECT COUNT(*) AS total FROM messages";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='stat place items-center'>
        <div class='stat-title'>Tickets</div>
        <div class='stat-value'>" . $row['total'] . "</div>
    </div>";
    }
} else {
    echo "<div class='stat place-items-center'>
    <div class='stat-title'>Tickets</div>
    <div class='stat-value'>0</div>
</div>";
}

// count all registered users

$sql = "SELECT COUNT(*) AS total FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='stat place items-center'>
        <div class='stat-title'>Registered Users</div>
        <div class='stat-value'>" . $row['total'] . "</div>
    </div>";
    }
} else {
    echo "<div class='stat place-items-center'>
    <div class='stat-title'>Registered Users</div>
    <div class='stat-value'>0</div>
</div>";
}

// count all completed tickets

$sql = "SELECT COUNT(*) AS total FROM messages WHERE completed = 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<div class='stat place items-center'>
        <div class='stat-title'>Completed Tickets</div>
        <div class='stat-value'>" . $row['total'] . "</div>
    </div>";
    }
} else {
    echo "<div class='stat place-items-center'>
    <div class='stat-title'>Completed Tickets</div>
    <div class='stat-value'>0</div>
</div>";
}

?>

                <!-- <div class="stat place-items-center">
                    <div class="stat-title">Tickets</div>
                    <div class="stat-value">20</div>
                </div>

                <div class="stat place-items-center">
                    <div class="stat-title">Registered Users</div>
                    <div class="stat-value text-secondary">10</div>
                </div>

                <div class="stat place-items-center">
                    <div class="stat-title">Completed Tickets</div>
                    <div class="stat-value">10</div>
                </div> -->
            </div>
        </div>
        <!-- Cards -->
        <div class="cards">

            <?php

include '../servers.php';

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
}

$sql = "SELECT * FROM messages WHERE completed = 0";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card w-96 bg-neutral text-neutral-content'>
        <div class='card-body items-center text-center'>
        <h2 class='card-title text-primary'>Ticket #" . $row['ID'] . " - " . $row['Name'] . "</h2>
        <p>" . $row['Msg'] . "</p>
            <div class='card-actions justify-end'>
                <a class='btn btn-primary' href='/admin/markAsComplete.php?id=" . $row['ID'] . "'>Complete</a>
                <a class='btn btn-secondary' href='/admin/deleteTicket.php?id=" . $row['ID'] . "'>Delete</a>
                <a class='btn btn-ghost' href='mailto:" . $row['Email'] . "'>Send Email</a>
            </div>
        </div>
        </div>";
    }
} else {
    echo "No tickets";
}

$conn->close();



                ?>
        </div>
    </body>
</html>
