<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./static/css/home.css">
    <!-- <link rel="stylesheet" href="./static/css/login.css"> -->

    <title>Go Trip - <?php echo $title; ?></title>
</head>

<body>


    <div class="fix">
        <div class="flex w-full flex-wrap  items-center justify-center ">
            <div class="logo ">
                Go Trip
            </div>
            <div class="nav-bar">
                <ul class=" flex md:col flex-wrap nav-text px-10">
                    <li class="px-5"><a href="/PHPProject_CE004_CE006_CE014" class="hover:text-yellow-500">Home</a></li>
                    <?php if(isset($_SESSION['AUTH_AGENCY_NAME']) or isset($_SESSION['AUTH_ADMIN_NAME']) or isset($_SESSION['AUTH_AGENCY_USER'])) { ?>
                        <li class="px-5"><a href="/PHPProject_CE004_CE006_CE014/logout.php" class="hover:text-yellow-500">Logout</a></li>
                    <?php } else{?>
                        <li class="px-5"><a href="/PHPProject_CE004_CE006_CE014/login.php" class="hover:text-yellow-500">Login</a></li>
                    <?php } ?>
                    <li class="px-5"><a href="/PHPProject_CE004_CE006_CE014/tour.php" class="hover:text-yellow-500">Tours</a></li>
                    <li class="px-5"><a href="/PHPProject_CE004_CE006_CE014/faqs.php" class="hover:text-yellow-500">FAQs</a></li>
                    <li class="px-5"><a href="/PHPProject_CE004_CE006_CE014/about.php" class="hover:text-yellow-500">About us</a></li>
                    <li class="px-5"><a href="/PHPProject_CE004_CE006_CE014/contact.php" class="hover:text-yellow-500">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>