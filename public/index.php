<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once "connect_db.php";

if (isset($_SESSION['logged_in'])) {
    if ($_SESSION['logged_in'] == true) {
        header('location: ./views/dashboard.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/output.css" rel="stylesheet">
    <link href="assets/css/fontawesome/all.min.css" rel="stylesheet" >
    <link href="assets/css/fontawesome/fontawesome.min.css" rel="stylesheet">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <title>Sign In</title>
</head>
<body class="flex w-screen min-h-screen bg-zinc-700">
    <div class="flex flex-col w-full h-screen md:h-3/4 md:m-auto md:bg-transparent bg-zinc-700">
        <div class="flex items-center justify-center w-11/12 h-full p-5 mx-auto md:w-1/2">
            <div class="flex flex-col w-full p-4 bg-white shadow md:w-1/2 md:min-w-[30rem] rounded-xl h-auto">
                <img class="w-40 h-40 m-auto md:mb-5 md:w-60 md:h-60 " src="assets/images/logo.png">
                <form id="logInForm" action="views/logic/sign_in.php" type="button" method="POST" class="flex flex-col items-center w-full mt-5 h-fit">
                    <div class="flex items-center w-full p-2 mb-4 border border-gray-400 rounded-full md:w-5/6">
                        <i class="mx-2 text-xl text-gray-600 fa-regular fa-envelope"></i>
                        <input id="email" name="email" type="email" class="w-10/12 h-full px-1 text-lg focus:outline-none" placeholder="Enter your email">
                    </div>
    
                    <div class="flex items-center w-full p-2 border border-gray-400 rounded-full md:w-5/6">
                        <i class="mx-2 text-xl text-gray-600 fa-solid fa-lock"></i>
                        <input id="password" name="password" type="password" class="w-10/12 h-full px-1 text-lg focus:outline-none" placeholder="Enter your password">
                    </div>
                    <div class="flex justify-end w-full h-10 p-1 mt-1 text-center text-black rounded-full"><a class="mr-12 text-orange-400 hover:underline" href="###">Forgot Password?</a></div>
                    <button id="logInBtn" type="submit"  class="w-40 h-10 p-1 mx-auto mt-8 text-xl font-semibold text-center text-white bg-orange-600 rounded-full hover:bg-orange-500">LOG IN</button>
                </form>
                <div class="h-10 p-1 mx-auto mt-5 text-center text-black rounded-full w-fit">Don't have an account? <a class="hover:text-orange-500 hover:underline" href="###">Register</a></div>
            </div>
        </div>
    </div>
</body>
</html>