<?php
function forceDownload($filePath)
{
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

<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio _ BILASH KUMAR</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Ovo&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="images/profile-img.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="overflow-x-hidden font-Outfit leading-8 dark:bg-darkTheme dark:text-white">

    <div class="fixed top-0 right-0 w-11/12 -z-10 translate-y-[-80%] dark:hidden">
        <img src="images/header-bg-color.png" alt="" class="w-full">
    </div>
    <nav class="w-full fixed px-5 lg:px-8 xl:px-[8%] py-2 flex item-center justify-between z-50 ">
        <img src="images/hafsa-removebg-preview (1).png" alt="" class="w-28 py-2 cursor-pointer mr-14 dark:hidden  ">

        <img src="images/logo.png" alt="" class="w-28 py-2 cursor-pointer mr-14 hidden dark:block">
        <ul class="hidden md:flex items-center gap-6 lg:gap-8 rounded-full px-12 py-3 bg-white
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
                <img src="images/moon_icon.png" class="w-6 dark:hidden">
                <img src="images/sun_icon.png" class="w-6 hidden dark:block">
            </button>

            <a href="#Contact" class="hidden lg:flex items-center gap-3 px-10 py-2.5 border
             border-gray-500 rounded-full ml-4 font-Ovodark:border-white/50 ">Contact
                <img src="images/arrow-icon.png" class="w-3 dark:hidden">
                <img src="images/arrow-icon-dark.png" class="w-3 hidden dark:block">
            </a>

            <button class="block md:hidden ml-3" onclick="openMenu()">
                <img src="images/menu-black.png" class="w-6 dark:hidden ">
                <img src="images/menu-black.png" class="w-6 hidden dark:block ">
            </button>

        </div>
        <!----------------------------- Mobile Menu----------------------->
        <ul id="sideMenu" class="flex md:hidden flex-col gap-4 py-20 px-10 fixed -right-64 top-0
          bottom-0 w-64 z-50 h-screen bg-rose-50 transition-duration-500 font-Ovo dark:bg-[#2a004a] dark:text-white">

            <div class="absolute right-6 top-6" onclick="CloseMenu()">
                <img src="images/close-black.png" class="w-5 cursor-pointer dark:hidden" alt="">
                <img src="images/close-white.png" class="w-5 cursor-pointer hidden dark:block alt="">
            </div>
            <li><a href=" #top" onclick="CloseMenu()">Home</a></li>
                <li><a href="#about" onclick="CloseMenu()">About me</a></li>
                <li><a href="#services" onclick="CloseMenu()">Services</a></li>
                <li><a href="#work" onclick="CloseMenu()">My Work</a></li>
                <li><a href="#Contact" onclick="CloseMenu()">Contact me</a></li>
        </ul>

    </nav>

    <!------------------------------- Hero-Section------------------------------------->

    <div class="w-11/12  max-w-3xl  text-center mx-auto h-screen flex flex-col items-center justify-center gap-4 ">
        <img src="images/BILASH.png" class="rounded-full w-32" alt="">
        <!-- <h3 class="flex item-center gap-2 text-xl  md:text-2xl mb-3 font-Ovo">Hi! I'm Bilash Kumar Mondol <img
                src="images/hand-icon.png" class="w-6" alt=""></h3> -->

        <h3 class="flex items-center gap-2 text-xl md:text-2xl mb-3 font-Ovo" id="animated-text"></h3>

        <h1 class="text-3xl sm:text-6xl lg:text-[66px] font-semibold font-Ovo "> Web Developer based in
            Dhaka
        </h1>

        <div class="flex flex-col sm:flex-row items-center gap-4 mt-4">
            <a href="#contact" class="px-10 py-3 border rounded-full bg-gradient-to-r from-[#b820e6] to-[#da7d20]
            text-wrap flex items-center gap-2 text-white dark:border-transparent ">Contact Me
                <img src="images/right-arrow-white.png" class="w-5" alt=""></a>

            <a href="?download=1"
                class="px-10 py-3 border border-gray-500 rounded-full bg-white flex items-center gap-2 dark:text-black">My
                Resume
                <img src="images/download-icon.png" class="w-5" alt="Download Icon" />
            </a>
        </div>
    </div>

    <!-- About me -->
    <div id="about" class="w-full px-[12%] py-10 pt-[230px] md:pt-0 scroll-mt-20">
        <h4 class="text-center mb-2 text-lg font-Ovo">Introduction</h4>
        <h2 class="text-center text-5xl font-semibold font-Ovo ">About me</h2>

        <div class="flex w-full flex-col lg:flex-row items-center gap-20 my-20">
            <div class="max-w-max mx-auto relative">
                <img src="images/user-image.png" class="w-64 sm:w-80 roundede-3xl max-w-none " alt="">

                <div class="w-1/2 aspect-square absolute right-0 bottom-0
                    rounded-full translate-x-1/4 translate-y-1/3
                    shadow-[0_4px_55px_rgba(149,0,162,0.15)]
                    flex items-center justify-center
                    bg-white dark:bg-black">
                    <img src="images/devloper_icon.png" class="w-3/4 border-spacing-2 border-amber-500 absolute top-1/2 left-1/2 
                    -translate-x-1/2 -translate-y-1/2" alt="">
                </div>
            </div>
            <div class="flex-1">
                <p class="mb-10 max-w-2xl font-Ovo">I am a web developer currently working with Contacts International,
                    with about one year of experience. Committed to delivering high-quality web solutions, I
                    continuously enhance my skills to stay ahead in the field of web development.</p>

                <ul class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-2xl">
                    <li class="border-[0.5px] border-gray-400 rounded-xl p-6 cursor-pointer hover:lightHover hover:-translate-y-1
                     duration-500 hover:shadow-black dark:border-white dark:hover:shadow-white
                     dark:hover:bg-darkHover/50  ">
                        <img src="images/code-icon.png" class="w-7 mt-3 dark:hidden" alt="">
                        <img src="images/code-icon-dark.png" class="w-7 mt-3 hidden dark:block" alt="">

                        <h3 class="my-4 font-semibold text-gray-700 dark:text-white">languages</h3>
                        <p class="text-gray-600 text-sm dark:text-white/80">PHP , Laravel</p>
                    </li>

                    <li class="border-[0.5px] border-grey-400 rounded-xl p-6 cursor-pointer hover:bg-lightHover hover:-translate-y-1
                    duration-500 hover:shadow-black dark:border-white dark:hover:shadow-white
                    dark:hover:bg-darkHover/50 ">
                        <img src="images/edu-icon.png" class="w-7 mt-3 dark:hidden" alt="">
                        <img src="images/edu-icon-dark.png" class="w-7 mt-3 hidden dark:block" alt="">

                        <h3 class="my-4 font-semibold text-gray-700 dark:text-white ">Education</h3>
                        <p class="text-gray-600 text-sm dark:text-white/80">Diploma in Engineering (CSE)</p>
                    </li>

                    <li class="border-[0.5px] border-grey-400 rounded-xl p-6 cursor-pointer hover:bg-[lightHover hover:-translate-y-1
                   duration-500 hover:shadow-black dark:border-white dark:hover:shadow-white
                   dark:hover:bg-darkHover/50 ">
                        <img src="images/project-icon.png" class="w-7 mt-3 dark:hidden" alt="">
                        <img src="images/project-icon-dark.png" class="w-7 mt-3 hidden dark:block" alt="">

                        <h3 class="my-4 font-semibold text-gray-700 dark:text-white">Projects</h3>
                        <p class="text-gray-600 text-sm dark:text-white/80">Buid more than 5 projects</p>
                    </li>
                </ul>

                <h4 class="my-6 text-grey-700 font-Ovo dark:text-white/80">Best Skill On</h4>

                <ul class="flex gap-4 items-center">
                    <li class="flex items-center justify-center w-14 h-14 border border-gray-300 rounded-lg hover:-translate-y-1 duration-500 text-orange-500">
                        <i class="fa-brands fa-html5 fa-2x"></i>
                    </li>
                    <li class="flex items-center justify-center w-14 h-14 border border-gray-300 rounded-lg hover:-translate-y-1 duration-500 text-blue-500">
                        <i class="fa-brands fa-css3-alt fa-2x"></i>
                    </li>
                    <li class="flex items-center justify-center w-14 h-14 border border-gray-300 rounded-lg hover:-translate-y-1 duration-500 text-yellow-500">
                        <i class="fa-brands fa-js fa-2x"></i>
                    </li>
                    <li class="flex items-center justify-center w-14 h-14 border border-gray-300 rounded-lg hover:-translate-y-1 duration-500 text-purple-500">
                        <i class="fa-brands fa-bootstrap fa-2x"></i>
                    </li>
                    <li class="flex items-center justify-center w-14 h-14 border border-gray-300 rounded-lg hover:-translate-y-1 duration-500 text-cyan-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="currentColor" class="w-8 h-8">
                            <path d="M24.001 9.38c-6.399 0-10.4 3.2-12 9.6 2.4-3.2 5.2-4.4 8.4-3.6 1.824.456 3.126 1.784 4.563 3.251 2.347 2.386 5.074 5.154 10.837 5.154 6.399 0 10.4-3.2 12-9.6-2.4 3.2-5.2 4.4-8.4 3.6-1.824-.456-3.126-1.784-4.563-3.251-2.347-2.386-5.074-5.154-10.837-5.154Zm-12 12c-6.399 0-10.4 3.2-12 9.6 2.4-3.2 5.2-4.4 8.4-3.6 1.824.456 3.126 1.784 4.563 3.251 2.347 2.386 5.074 5.154 10.837 5.154 6.399 0 10.4-3.2 12-9.6-2.4 3.2-5.2 4.4-8.4 3.6-1.824-.456-3.126-1.784-4.563-3.251-2.347-2.386-5.074-5.154-10.837-5.154Z"/>
                        </svg>
                    </li>
                    <li class="flex items-center justify-center w-14 h-14 border border-gray-300 rounded-lg hover:-translate-y-1 duration-500 text-indigo-500">
                        <i class="fa-brands fa-php fa-2x"></i>
                    </li>
                    <li class="flex items-center justify-center w-14 h-14 border border-gray-300 rounded-lg hover:-translate-y-1 duration-500 text-red-500">
                        <i class="fa-brands fa-laravel fa-2x"></i>
                    </li>
                    <li class="flex items-center justify-center w-14 h-14 border border-gray-300 rounded-lg hover:-translate-y-1 duration-500 text-blue-700">
                        <i class="fa-brands fa-wordpress fa-2x"></i>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <!--------------------- Services---------------------------- -->
    <div id="services" class="w-full px-[12%] py-10 scroll-mt-20">

        <h4 class="text-center mb-2 text-lg font-Ovo ">What I Offer</h4>
        <h2 class="text-center text-5xl font-semibold font-Ovo ">My Services</h2>
        <p class="text-center max-w-2xl mx-auto mt-5 mb-12 font-Ovo">I am a Frontend Developer specializing in building
            responsive, modern websitess.
            & Committed to delivering high-quality web solutions.</p>


        <div class="grid grid-cols-auto sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 my-10">

            <div class="border border-gray-400 rounded-lg px-8 py-12
        hover:shadow-[4px_4px_0_#000] cursor-pointer hover: bg-lightHover 
        hover: -translate-y-1 duration-500 dark:bg-darkHover dark:hover:bg-darkHover dark:hover:shadow-white">
                <img src="images/web-icon.png" class="w-10" alt="">
                <h3 class="text-lg my-4 text-gray-700 dark:text-white">Web Development</h3>
                <p class="text-sm text-gray-600 leading-5 dark:text-white/80">Web Development is the process of
                    building,
                    maintaining, and optimizing websites...</p>
                <a class="flex items-cnter gap-2 text-sm mt-5 " href="#">Read more <img src="images/right-arrow.png"
                        class="w-3" alt=""></a>
            </div>
            <div class="border border-gray-400 rounded-lg px-8 py-12
        hover:shadow-black cursor-pointer hover: bg-lightHover 
        hover: -translate-y-1 duration-500 dark:bg-darkHover dark:hover:bg-darkHover dark:hover:shadow-white">
                <img src="images/mobile-icon.png" class="w-10" alt="">
                <h3 class="text-lg my-4 text-gray-700 dark:text-white">Wordpress Development</h3>
                <p class="text-sm text-gray-600 leading-5 dark:text-white/80">WordPress development is the process of
                    building,
                    customizing, and managing websites...</p>
                <a class="flex items-cnter gap-2 text-sm mt-5 " href="#">Read more <img src="images/right-arrow.png"
                        class="w-3" alt=""></a>
            </div>
            <div class="border border-gray-400 rounded-lg px-8 py-12
        hover:shadow-[4px_4px_0_#000] cursor-pointer hover: bg-lightHover 
        hover: -translate-y-1 duration-500 dark:bg-darkHover dark:hover:bg-darkHover dark:hover:shadow-white">
                <img src="images/ui-icon.png" class="w-10" alt="">
                <h3 class="text-lg my-4 text-gray-700 dark:text-white">UI UX design</h3>
                <p class="text-sm text-gray-600 leading-5 dark:text-white/80 ">UI/UX design focuses on creating visually
                    appealing,
                    intuitive,
                    and user-centered digital experiences....</p>
                <a class="flex items-cnter gap-2 text-sm mt-5 " href="#">Read more <img src="images/right-arrow.png"
                        class="w-3" alt=""></a>
            </div>
            <div class="border border-gray-400 rounded-lg px-8 py-12
        hover:shadow-[4px_4px_0_#000] cursor-pointer hover: bg-lightHover
        hover:-translate-y-1 duration-500  dark:bg-darkHover dark:hover:bg-darkHover dark:hover:shadow-white">
                <img src="images/graphics-icon.png" class="w-10" alt="">
                <h3 class="text-lg my-4 text-gray-700 dark:text-white">Graphic Design</h3>
                <p class="text-sm text-gray-600 leading-5 dark:text-white/80">Graphic design is the art and practice of
                    creating visual
                    content
                    to communicate messages effectively ...</p>
                <a class="flex items-cnter gap-2 text-sm mt-5 " href="#">Read more <img src="images/right-arrow.png"
                        class="w-3" alt=""></a>
            </div>
        </div>

    </div>

    <!-- My Work -->
    <div id="work" class="w-full px-[12%] py-10 scroll-mt-20">

        <h4 class="text-center mb-2 text-lg font-Ovo">My Portfolio</h4>
        <h2 class="text-center text-5xl font-semibold font-Ovo">My Latest Work</h2>
        <p class="text-center max-w-2xl mx-auto mt-5 mb-12 font-Ovo">Welcome to my web development Portfolio!
            Explore the collecton of projects showcasing my expertise in front-end-development.
        </p>
        <div class="grid grid-cols-auto sm:grid-cols-2 lg:grid-cols-4
          y-10 gap-5 dark:text-black">
            <div class="aspect-square bg-[url('./images/work-1.png')] bg-no-repeat
         bg-cover bg-center rounded-lg relative cursor-pointer group ">
                <div class="bg-white w-10/12 rounded-md absolute bottom-5 left-1/2 
        -translate-x-1/2 py-3 px-5 flex items-center justify-between duration-500
        group-hover:bottom-7">

                    <div>
                        <h2 class="font-semibold ">Frontend Projects</h2>
                        <p class="text-sm text-gray-700">web design</p>
                    </div>
                    <div class="border rounded-full border-black w-9 aspect-square flex items-center
        justify-center shadow-[2px_0_#000] group:hover:bg-lime-300 transition">
                        <img src="images/send-icon.png" class="w-5" alt="">
                    </div>

                </div>
            </div>

            <!-- 2 -->
            <div class="aspect-square bg-[url('./images/work-2.png')] bg-no-repeat
        bg-cover bg-center rounded-lg relative cursor-pointer group ">
                <div class="bg-white w-10/12 rounded-md absolute bottom-5 left-1/2 
       -translate-x-1/2 py-3 px-5 flex items-center justify-between duration-500
       group-hover:bottom-7">

                    <div>
                        <h2 class="font-semibold">Geo based Projects</h2>
                        <p class="text-sm text-gray-700">Wordpress Design</p>
                    </div>
                    <div class="border rounded-full border-black w-9 aspect-square flex items-center
       justify-center shadow-[2px_0_#000] group:hover:bg-lime-300 transition">
                        <img src="images/send-icon.png" class="w-5" alt="">
                    </div>

                </div>
            </div>

            <!-- 3 -->
            <div class="aspect-square bg-[url('./images/work-3.png')] bg-no-repeat
       bg-cover bg-center rounded-lg relative cursor-pointer group ">
                <div class="bg-white w-10/12 rounded-md absolute bottom-5 left-1/2 
      -translate-x-1/2 py-3 px-5 flex items-center justify-between duration-500
      group-hover:bottom-7">

                    <div>
                        <h2 class="font-semibold">Photography site</h2>
                        <p class="text-sm text-gray-700">web design</p>
                    </div>
                    <div class="border rounded-full border-black w-9 aspect-square flex items-center
      justify-center shadow-[2px_0_#000] group:hover:bg-lime-300 transition">
                        <img src="images/send-icon.png" class="w-5" alt="">
                    </div>

                </div>
            </div>

            <!-- 4 -->
            <div class="aspect-square bg-[url('./images/work-4.png')] bg-no-repeat
      bg-cover bg-center rounded-lg relative cursor-pointer group ">
                <div class="bg-white w-10/12 rounded-md absolute bottom-5 left-1/2 
     -translate-x-1/2 py-3 px-5 flex items-center justify-between duration-500
     group-hover:bottom-7">

                    <div>
                        <h2 class="font-semibold">UI/UX designing</h2>
                        <p class="text-sm text-gray-700">UI/UX design</p>
                    </div>
                    <div class="border rounded-full border-black w-9 aspect-square flex items-center
     justify-center shadow-[2px_0_#000] group:hover:bg-lime-300 transition">
                        <img src="images/send-icon.png" class="w-5" alt="">
                    </div>

                </div>
            </div>


        </div>
        <a class="w-max flex items-center justify-center gap-2 text-gray-700
    border-[0.5px] border-gray-700 rounded-full py-3 px-10 mx-auto
     my-20 hover:bg-[#fcf4ff] duration-500 
     dark:text-white dark:border-white dark:hover-[#2a004a] " href="#">
            Show More
            <img src="images/right-arrow-bold.png" class="w-4 dark:hidden" alt="">
            <img src="images/right-arrow-bold-dark.png" class="w-4 hidden dark:block">
        </a>

    </div>

    <!-------------- Contact------------ -->
    <div id="Contact"
        class="w-full px-[12%] py-10 scroll-mt-20 bg-[url('./images/footer-bg-color.png')] bg-no-repeat bg-[length:90%-auto] bg-center dark:bg-none">
        <h4 class="text-center mb-2 text-lg">Contact with me </h4>
        <h2 class="text-center text-5xl font-semibold">Get In Touch</h2>
        <p class="text-center max-w-2xl mx-auto mt-5 mb-12">I had love to hear from you!
            If you have any qquestion, Commenrs or feedback, Please use the form below
        </p>
        <form action="" class="max-w-2xl mx-auto">
            <div class=" grid grid-cols-auto  gap-6 mt-10 mb-8">
                <input type="text" placeholder="Enter Your Name" class="flex-1 p-3 outline-none
             border-[0.5px] border-gray-400 rounded-md bg-white dark:bg-darkHover/30 dark:border-white/90">
                <input type="email" placeholder="Enter Your Email" class="flex-1 p-3 outline-none
             border-[0.5px] border-gray-400 rounded-md bg-white dark:bg-darkHover/30 dark:border-white/90">
            </div>
            <textarea placeholder="Enter your message" rows="6" class="w-full p-4 outline-none
        border-[0.5px] border-gray-400 rounded-md bg-white mb-6 dark:bg-darkHover/30 dark:border-white/90"></textarea>
            <button class="py-3 px-8 w-max flex items-center justify-between gap-2 bg-black\80
         text-white rounded-full mx-auto hover: bg-black duration-500 dark:bg-transparent
         dark:border-[0.5px] dark:bg-darkHover
        ">Submit now
                <img src="images/right-arrow.png " class="w-4" alt=""></button>
        </form>
    </div>

    <!-- --------------------------Footer------------------- -->

    <div class="mt-20">
        <div class="text-center">
            <img src="images/hafsa-removebg-preview (1).png" class="w-36 h-10 mx-auto mb-2 dark:hidden" alt="">
            <img src="images/logo-dark.png" class="w-36 mx-auto mb-2 hidden dark:block" alt="">
            <div class="w-max flex items-center gap-2 mx-auto">
                <img src="images/mail_icon.png" class="w-6 dark:hidden" alt="">
                <img src="images/mail_icon_dark.png" class="w-6 hidden dark:block" alt="">
                hafsakanwal895@gmail.com
            </div>
        </div>
        <div class="text-center sm:flex items-center justify-between border-t
     border-grey-400 mx-[10%] mt-12 py-6">
            <p>&copy;2024 Hafsa Kanwal.All right reserved</p>
            <ul class="flex items-center gap-10 justify-canter mt-4 sm:mt-0">

                <li><a href="https://instagram.com/hafsakanwal">Github</a></li>
                <li><a href="https://instagram.com/hafsakanwal">LinkedIn</a></li>
                <li><a href="https://instagram.com/hafsakanwal">Twitter</a></li>
            </ul>
        </div>
    </div>

    <script src="script.js"></script>
    <script>
        const text = "Hi! I'm Bilash Kumar Mondol ";
        const target = document.getElementById('animated-text');
        const handIconHtml = '<img src="images/hand-icon.png" class="w-6 ml-2" alt="hand">';

        let index = 0;
        let isDeleting = false;

        function typeLoop() {
            if (!isDeleting) {
                // লিখছো
                target.innerHTML = text.substring(0, index) + handIconHtml;
                index++;

                if (index > text.length) {
                    // পুরো লেখা হয়ে গেছে, একটু থামো, তারপর ডিলিট শুরু করো
                    isDeleting = true;
                    setTimeout(typeLoop, 1500); // 1.5 সেকেন্ড থামো পুরো লেখা দেখানোর জন্য
                    return;
                }
                setTimeout(typeLoop, 150);
            } else {
                // ডিলিট করছো
                index--;
                target.innerHTML = text.substring(0, index) + handIconHtml;

                if (index === 0) {
                    // ডিলিট শেষ, আবার টাইপ শুরু করো
                    isDeleting = false;
                    setTimeout(typeLoop, 500);
                    return;
                }
                setTimeout(typeLoop, 100);
            }
        }

        typeLoop();
    </script>

</body>

</html>