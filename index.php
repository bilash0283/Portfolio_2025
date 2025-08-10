<?php
function forceDownload($filePath) {
    if (file_exists($filePath)) {
        $fileName = basename($filePath);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        flush();
        readfile($filePath);
        exit;
    } else {
        http_response_code(404);
        echo "File not found.";
        exit;
    }
}

if (isset($_GET['download'])) {
    $file = __DIR__ . '/images/cv/BILASH_CV.pdf'; 
    forceDownload($file);
}

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio _ BILASH KUMAR</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Ovo&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/profile-img.png" />
</head>

<body class="overflow-x-hidden font-Outfit leading-8 dark:bg-darkTheme dark:text-white">

    <nav class="w-full fixed px-5 lg:px-8 xl:px-[8%] py-2 flex item-center justify-between z-50 ">
        <img src="images/hafsa-removebg-preview (1).png" alt="" class="w-28 py-2 cursor-pointer mr-14 dark:hidden  " />

        <img src="images/logo.png" alt="" class="w-28 py-2 cursor-pointer mr-14 hidden dark:block" />
        <ul
            class="hidden md:flex items-center gap-6 lg:gap-8 rounded-full px-12 py-3 bg-white
         shadow-sm bg-opacity-50 font-Ovo
         dark:border dark:border-white/50 dark:bg-transparent">
            <li><a href="#top">Home</a></li>
            <li><a href="#about">About me</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#work">My Work</a></li>
            <li><a href="#Contact">Contact me</a></li>
        </ul>
        <div class="flex item-center gap-4">
            <button onclick="toggleTheme()">
                <img src="images/moon_icon.png" class="w-6 dark:hidden" />
                <img src="images/sun_icon.png" class="w-6 hidden dark:block" />
            </button>

            <a
                href="#contact"
                class="hidden lg:flex items-center gap-3 px-10 py-2.5 border border-gray-500 rounded-full ml-4 font-Ovodark:border-white/50 "
                >Contact
                <img src="images/arrow-icon.png" class="w-3 dark:hidden" />
                <img src="images/arrow-icon-dark.png" class="w-3 hidden dark:block" />
            </a>

            <button class="block md:hidden ml-3" onclick="openMenu()">
                <img src="images/menu-black.png" class="w-6 dark:hidden " />
                <img src="images/menu-black.png" class="w-6 hidden dark:block " />
            </button>
        </div>
    </nav>

    <div
        class="w-11/12 pt-[230px] md:pt-0 max-w-3xl  text-center mx-auto h-screen flex flex-col items-center justify-center gap-4 "
    >
        <img src="images/BILASH.png" class="rounded-full w-32" alt="" />
        <h3 class="flex item-center gap-2 text-xl  md:text-2xl mb-3 font-Ovo">
            Hi! I'm Bilash Kumar Mondol
            <img src="images/hand-icon.png" class="w-6" alt="" />
        </h3>
        <h1 class="text-3xl sm:text-6xl lg:text-[66px] font-semibold font-Ovo ">
            Web Developer based in Dhaka , Bangladesh
        </h1>

        <div class="flex flex-col sm:flex-row items-center gap-4 mt-4">
            <a
                href="#Contact"
                class="px-10 py-3 border rounded-full bg-gradient-to-r from-[#b820e6] to-[#da7d20]
            text-wrap flex items-center gap-2 text-white dark:border-transparent "
                >Contact Me
                <img src="images/right-arrow-white.png" class="w-5" alt="" />
            </a>

            <a
                href="?download=1"
                class="px-10 py-3 border border-gray-500 rounded-full bg-white flex items-center gap-2 dark:text-black"
                >My Resume
                <img src="images/download-icon.png" class="w-5" alt="Download Icon" />
            </a>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>
