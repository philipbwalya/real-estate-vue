<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real Estate</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
  <section class="relative" id="app">
    <!-- Navigation Bar -->
    <div class="bg-[#6cab92] w-full mx-auto sticky top-0 z-10">
      <nav class="bg-[#6cab92] flex-wrap lg:flex items-center py-3 xl:relative z-10 max-w-7xl mx-auto h-[70px] sticky top-0" x-data="{navbarOpen:false}">

        <div class="flex items-center justify-between mb-3 lg:mb-0 px-3">
          <div class="font-semibold text-gray-900 text-lg hover:text-[#134f37] transition ease-in-out duration-300 cursor-pointer font-inter">Real Estate</div>

          <button class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center text-green-700 rounded-md" @click="navbarOpen = !navbarOpen">
            <i class="fa fa-bars" style="font-size:24px;"></i>
          </button>
        </div>

        <ul class="lg:flex flex-col lg:flex-row items-center justify-center lg:mx-auto lg:space-x-8 xl:space-x-16 bg-inherit" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">

          <li class="font-semibold text-gray-900 text-lg hover:text-[#134f37] transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="#">Landing</a>
          </li>

          <li class="font-semibold text-gray-900 text-lg hover:text-[#134f37] transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="#">Pages</a>
          </li>

          <li class="font-semibold text-gray-900 text-lg hover:text-[#134f37] transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="#">Contact</a>
          </li>

          <li class="font-semibold text-gray-900 text-lg hover:text-[#134f37] transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="#">About</a>
          </li>

        </ul>
        <div class="bg-[#6cab92] lg:flex items-center justify-center rounded-ful  font-semibold text-[#0E94B4] text-md lg:text-lg hover:text-[#09667d] transition ease-linear duration-500 pb-3 md:pr-3 px-4" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">

          <button @click="clicked" class="bg-[#CFFAFE] px-2 py-1 md:rounded-l-full rounded-l-md w-full">
            SignIn
          </button>
          <button @click="clicked" class="bg-white px-2 py-1 md:rounded-r-full rounded-r-md w-full">
            SignUp
          </button>
        </div>

      </nav>
    </div>
    <!-- Banner Section -->
    <div class="relative h-[300px] md:h-[400px] bg-[url('./images/banner.png')] bg-cover bg-center flex items-center justify-center">
      <div class="relative text-white text-center">
        <h1 class="text-3xl text-black flex flex-col gap-3 justify-center items-center">2 BHK Apartment
        </h1>
        <span class="bg-gradient-to-r from-[#0d4b14] to-[#103124] bg-clip-text text-transparent text-xl">New York</span>
      </div>
    </div>
    <!-- rent -->
    <div class="flex flex-col md:flex-row items-center justify-between my-10 px-5 max-w-7xl mx-auto">
      <div class="flex items-center justify-around md:justify-start md:space-x-12 w-full md:px-7">
        <div class="">
          <h4 class="font-semibold text-gray-500">RENT</h4>
          <div class="flex flex-row justify-evenly items-end">
            <h3 class="text-5xl text-red-400 font-semibold">$200</h3><span class="text-gray-400 text-sm">/MO</span>
          </div>

        </div>
        <div class="">
          <h4 class="font-semibold text-gray-500">DEPOSIT</h4>
          <div class="flex flex-row justify-evenly items-end">
            <h3 class="text-5xl text-black font-semibold">$2000</h3><span class="text-gray-400">/YR</span>
          </div>

        </div>
      </div>
      <div class="flex flex-col md:flex-row items-center justify-center w-full space-y-2 md:space-y-0 md:space-x-3 mt-7">
        <button class="w-full md:w-auto rounded-full bg-[#cffafe] py-4 md:px-6 flex items-center justify-center text-[#06b6d4] text-lg font-semibold tracking-wide">Request Callback</button>
        <button class="w-full md:w-auto rounded-full bg-[#84cc16] py-4 md:px-6 flex items-center justify-center text-white text-lg font-semibold tracking-wide">Book Now</button>
      </div>
    </div>
    <!-- pictures -->
    <div class="flex flex-col md:flex-row items-center justify-center p-5 gap-4 max-w-7xl m-auto">
      <div class="lg:w-2/3 h-full"><img src="./images/banner.png" alt="" class="object-contain w-full h-full"></div>
      <div class="hidden lg:flex flex-col gap-2 w-1/3 h-full">
        <img src="./images/banner.png" alt="leftimage">
        <img src="./images/banner.png" alt="rightimage">
      </div>
    </div>
    <!-- overview and amenities -->
    <div class="flex flex-col px-5 max-w-7xl m-auto mt-16">
      <div class="flex flex-col gap-4">
        <h3 class="flex justify-center text-2xl font-semibold font-roboto">OVERVIEW</h3>
        <p class="flex items-center justify-center text-gray-500 text-[18px] font-joined" style="line-height: 2;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
      </div>
      <div class="mt-10">
        <div class="flex flex-col gap-5 px-6 md:px-0 max-w-5xl m-auto">
          <h3 class="flex justify-start md:justify-center text-2xl font-semibold font-roboto">AMENITIES</h3>
          <div class="flex flex-col md:flex-row items-start md:justify-around text-black font-semibold font-poppins text-[17px] gap-4">
            <div class="flex flex-col gap-4 items-start justify-start">
              <div class="flex items-center justify-center gap-4">
                <i class="fa fa-heart" style="font-size:24px;color:red;"></i>
                <div class="">2 Bedrooms</div>
              </div>
              <div class="flex items-center justify-center gap-4">
                <i class="fa fa-heart" style="font-size:24px;color:red;"></i>
                <div class="">2 Bathrooms</div>
              </div>
              <div class="flex items-start justify-start gap-4">
                <i class="fa fa-heart" style="font-size:24px;color:red;"></i>
                <div class="">Kitchen</div>
              </div>
            </div>
            <div class="flex flex-col gap-4 items-start justify-start">
              <div class="flex items-center justify-center gap-4">
                <i class="fa fa-heart" style="font-size:24px;color:red;"></i>
                <div class="">Garden</div>
              </div>
              <div class="flex items-center justify-center gap-4">
                <i class="fa fa-heart" style="font-size:24px;color:red;"></i>
                <div class="">Living room</div>
              </div>
              <div class="flex items-center justify-center gap-4">
                <i class="fa fa-heart" style="font-size:24px;color:red;"></i>
                <div class="">Balcony</div>
              </div>
            </div>
            <div class="flex flex-col gap-4 items-start justify-start">
              <div class="flex items-center justify-center gap-4">
                <i class="fa fa-heart" style="font-size:24px;color:red;"></i>
                <div class="">car parkings</div>
              </div>
              <div class="flex items-center justify-center gap-4">
                <i class="fa fa-heart" style="font-size:24px;color:red;"></i>
                <div class="">Swimming pool</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- gallery -->
    <div class="flex flex-col px-3 mt-16 max-w-7xl m-auto">
      <h2 class="flex text-2xl mb-5 font-semibold pl-5 md:justify-center">GALLERY</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3">
        <img src="./images/banner.png" alt="leftimage" class="rounded-lg object-contain">
        <img src="./images/banner.png" alt="leftimage" class="rounded-lg object-contain">
        <img src="./images/banner.png" alt="leftimage" class="rounded-lg object-contain">
      </div>
    </div>
    <!-- Property Section -->
    <section class="relative min-h-screen flex flex-col mt-16 justify-center items-center bg-white max-w-7xl mx-auto">
      <h1 class="text-xl md:text-2xl  lg:text-3xl font-sans mb-10">RELATED PROPERTIES</h1>
      <div class="h-full w-full grid grid-col-1 md:grid-cols-2 xl:grid-cols-3 gap-10 px-10">
        <div class="relative overflow-hidden rounded-md shadow-sm hover:shadow-lg transition ease-in-out duration-300 border border-gray-200">
          <div class="relative w-full">
            <img src="./images/banner.png" alt="image" class="w-full object-contain" />
            <div class="absolute top-5 left-5 rounded-full px-3 py-1 text-white bg-red-500/70">
              <h2>RENT</h2>

            </div>
            <div class="absolute bottom-2 left-2 rounded-full px-3 py-1 text-white">
              <h2 class="text-white font-bold text-3xl">$2000</h2>

            </div>
          </div>

          <div class="relative flex items-center justify-between px-5 py-4">
            <div class="flex flex-col space-y-2">
              <h3 class="text-xl font-semibold">2 BHK Apartment</h3>
              <h6 class="text-sm text-gray-500 font-semibold">New York</h6>
            </div>
            <div class="text-red-500 h-[59px] w-[59px] rounded-full flex items-center justify-center shadow-[2px_5px_7px_#d9d9d9] text-[20px] border border-gray-200 absolute -top-5 right-5 bg-white cursor-pointer"><i class="fa fa-heart" style="font-size:29px;"></i></div>
          </div>

          <div class="flex flex-row justify-evenly items-center h-16 border-t">
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold">2 Beds</p>
            </div>
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold"> 2 Baths</p>
            </div>
            <div class="w-full flex items-center justify-center h-full">
              <p class="text-gray-500 font-semibold">1200 sqft</p>
            </div>
          </div>
        </div>
        <div class="relative overflow-hidden rounded-md shadow-sm hover:shadow-lg transition ease-in-out duration-300 border border-gray-200">
          <div class="relative"><img src="./images/banner.png" alt="images" width={1000} height={1000} class="w-full object-contain" />
            <div class="absolute top-5 left-5 rounded-full px-3 py-1 text-white bg-red-500/70">
              <h2>RENT</h2>

            </div>
            <div class="absolute bottom-2 left-2 rounded-full px-3 py-1 text-white">
              <h2 class="text-white font-bold text-3xl">$2000</h2>

            </div>
          </div>

          <div class="relative flex items-center justify-between px-5 py-4">
            <div class="flex flex-col space-y-2">
              <h3 class="text-xl font-semibold">2 BHK Apartment</h3>
              <h6 class="text-sm text-gray-500 font-semibold">New York</h6>
            </div>
            <div class="text-red-500 h-[59px] w-[59px] rounded-full flex items-center justify-center shadow-[2px_5px_7px_#d9d9d9] text-[20px] border border-gray-200 absolute -top-5 right-5 bg-white cursor-pointer"><i class="fa fa-heart" style="font-size:29px;"></i></div>
          </div>

          <div class="flex flex-row justify-evenly items-center h-16 border-t">
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold">2 Beds</p>
            </div>
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold"> 2 Baths</p>
            </div>
            <div class="w-full flex items-center justify-center h-full">
              <p class="text-gray-500 font-semibold">1200 sqft</p>
            </div>
          </div>
        </div>
        <div class="relative overflow-hidden rounded-md shadow-sm hover:shadow-lg transition ease-in-out duration-300 border border-gray-200">
          <div class="relative"><img src="./images/banner.png" alt="images" width={1000} height={1000} class="w-full object-contain" />
            <div class="absolute top-5 left-5 rounded-full px-3 py-1 text-white bg-red-500/70">
              <h2>RENT</h2>

            </div>
            <div class="absolute bottom-2 left-2 rounded-full px-3 py-1 text-white">
              <h2 class="text-white font-bold text-3xl">$2000</h2>

            </div>
          </div>

          <div class="relative flex items-center justify-between px-5 py-4">
            <div class="flex flex-col space-y-2">
              <h3 class="text-xl font-semibold">2 BHK Apartment</h3>
              <h6 class="text-sm text-gray-500 font-semibold">New York</h6>
            </div>
            <div class="text-red-500 h-[59px] w-[59px] rounded-full flex items-center justify-center shadow-[2px_5px_7px_#d9d9d9] text-[20px] border border-gray-200 absolute -top-5 right-5 bg-white cursor-pointer"><i class="fa fa-heart" style="font-size:29px;"></i></div>
          </div>

          <div class="flex flex-row justify-evenly items-center h-16 border-t">
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold">2 Beds</p>
            </div>
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold"> 2 Baths</p>
            </div>
            <div class="w-full flex items-center justify-center h-full">
              <p class="text-gray-500 font-semibold">1200 sqft</p>
            </div>
          </div>
        </div>
        <div class="relative overflow-hidden rounded-md shadow-sm hover:shadow-lg transition ease-in-out duration-300 border border-gray-200">
          <div class="relative"><img src="./images/banner.png" alt="images" width={1000} height={1000} class="w-full object-contain" />
            <div class="absolute top-5 left-5 rounded-full px-3 py-1 text-white bg-red-500/70">
              <h2>RENT</h2>

            </div>
            <div class="absolute bottom-2 left-2 rounded-full px-3 py-1 text-white">
              <h2 class="text-white font-bold text-3xl">$2000</h2>

            </div>
          </div>

          <div class="relative flex items-center justify-between px-5 py-4">
            <div class="flex flex-col space-y-2">
              <h3 class="text-xl font-semibold">2 BHK Apartment</h3>
              <h6 class="text-sm text-gray-500 font-semibold">New York</h6>
            </div>
            <div class="text-red-500 h-[59px] w-[59px] rounded-full flex items-center justify-center shadow-[2px_5px_7px_#d9d9d9] text-[20px] border border-gray-200 absolute -top-5 right-5 bg-white cursor-pointer"><i class="fa fa-heart" style="font-size:29px;"></i></div>
          </div>

          <div class="flex flex-row justify-evenly items-center h-16 border-t">
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold">2 Beds</p>
            </div>
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold"> 2 Baths</p>
            </div>
            <div class="w-full flex items-center justify-center h-full">
              <p class="text-gray-500 font-semibold">1200 sqft</p>
            </div>
          </div>
        </div>
        <div class="relative overflow-hidden rounded-md shadow-sm hover:shadow-lg transition ease-in-out duration-300 border border-gray-200">
          <div class="relative"><img src="./images/banner.png" alt="images" width={1000} height={1000} class="w-full object-contain" />
            <div class="absolute top-5 left-5 rounded-full px-3 py-1 text-white bg-red-500/70">
              <h2>RENT</h2>

            </div>
            <div class="absolute bottom-2 left-2 rounded-full px-3 py-1 text-white">
              <h2 class="text-white font-bold text-3xl">$2000</h2>

            </div>
          </div>

          <div class="relative flex items-center justify-between px-5 py-4">
            <div class="flex flex-col space-y-2">
              <h3 class="text-xl font-semibold">2 BHK Apartment</h3>
              <h6 class="text-sm text-gray-500 font-semibold">New York</h6>
            </div>
            <div class="text-red-500 h-[59px] w-[59px] rounded-full flex items-center justify-center shadow-[2px_5px_7px_#d9d9d9] text-[20px] border border-gray-200 absolute -top-5 right-5 bg-white cursor-pointer"><i class="fa fa-heart" style="font-size:29px;"></i></div>
          </div>

          <div class="flex flex-row justify-evenly items-center h-16 border-t">
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold">2 Beds</p>
            </div>
            <div class="w-full flex items-center justify-center border-r h-full">
              <p class="text-gray-500 font-semibold"> 2 Baths</p>
            </div>
            <div class="w-full flex items-center justify-center h-full">
              <p class="text-gray-500 font-semibold">1200 sqft</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- book section -->
    <section class="bg-white py-10 md:py-16">
      <div class="container max-w-screen-xl mx-auto md:px-4 xl:relative">
        <div class="bg-green-800 flex flex-col lg:flex-row items-center justify-evenly py-14 md:rounded-3xl">
          <div class="text-center lg:text-left mb-10 lg:mb-0">
            <h1 class="font-semibold text-white text-4xl md:text-5xl lg:text-7xl leading-normal mb-4">Talk to us <br> to discuss</h1>

            <p class="font-normal text-white text-md md:text-xl">Need more time to discuss? Won’t worry, we are <br> ready to help you. You can fill in the column on the <br> right to book a meeting with us. Totally free.</p>
          </div>
          <div class=" md:block bg-white xl:relative px-6 py-3 rounded-3xl">
            <div class="py-3">
              <h3 class="font-semibold text-gray-900 text-3xl">Book a meeting</h3>
            </div>
            <div class="py-3">
              <input type="text" placeholder="Full Name" class="px-4 py-4 w-96 bg-gray-100 placeholder-gray-400 rounded-xl outline-none">
            </div>
            <div class="py-3">
              <input type="text" placeholder="Email" class="px-4 py-4 w-96 bg-gray-100 placeholder-gray-400 rounded-xl outline-none">
            </div>
            <div class="py-3 relative">
              <input type="text" placeholder="Date" class="px-4 py-4 w-96 bg-gray-100 font-normal text-lg placeholder-gray-400 rounded-xl outline-none">
              <div class="absolute inset-y-0 left-80 ml-6 flex items-center text-xl text-gray-600">
                <i data-feather="calendar"></i>
              </div>
            </div>
            <div class="py-3 relative">
              <input type="text" placeholder="Virtual Meeting" class="px-4 py-4 w-96 bg-gray-100 placeholder-gray-400 rounded-xl outline-none">
              <div class="absolute inset-y-0 left-80 ml-6 flex items-center text-xl text-gray-600">
                <i data-feather="chevron-down"></i>
              </div>
            </div>
            <div class="py-3">
              <button class="w-full py-4 font-semibold text-lg text-white bg-green-700 rounded-xl hover:bg-green-900 transition ease-in-out duration-500">Booking</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <footer class="bg-[#1f2937] py-10 md:py-16 flex flex-col">

      <div class="container max-w-7xl mx-auto px-4">

        <div class="flex flex-col md:flex-row justify-evenly lg:justify-around xl:justify-between">
          <div class="text-center lg:text-left mb-10 lg:mb-0">
            <h4 class="font-semibold text-white text-2xl mb-6">Sitemap</h4>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Home</a>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Features</a>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Gallery</a>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Testimoni</a>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Book a meeting</a>
          </div>

          <div class="text-center lg:text-left mb-10 lg:mb-0">
            <h4 class="font-semibold text-white text-2xl mb-6">Landing</h4>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Mobile App</a>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Property</a>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Personal Website</a>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Web Developer</a>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Online Course</a>

            <a href="#" class="block font-light text-gray-300 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Donation</a>
          </div>

          <div class="text-center lg:text-left">
            <h4 class="font-semibold text-white text-2xl mb-6">Utility</h4>

            <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">FAQ</a>

            <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Terms & Conditions</a>
          </div>
          <div class="text-center lg:text-left">
            <h4 class="font-semibold text-white text-2xl mb-6">SUBSCRIBE TO NEWSLETTER</h4>

            <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-100 transition ease-in-out duration-300">Enter your email address & get daily newsletter</a>

            <div class="flex flex-row items-center justify-center w-full">
              <input type="text" class="w-full py-3 px-5 text-lg rounded-l-md" placeholder="Email Address">
              <button class="bg-[#65a30d] text-white py-3 px-4 text-lg rounded-r-md cursor-pointer">Subscribe</button>
            </div>
          </div>
        </div>

      </div> <!-- container.// -->
      <div class="flex flex-col md:flex-row-reverse justify-between border-t border-slate-700 mt-10 gap-8 pt-10 max-w-7xl m-auto w-full px-5">
        <div class="space-x-10 text-gray-500 flex justify-start items-center">
          <i class="fa fa-instagram" style="font-size:24px;cursor:pointer;"></i>
          <i class="fa fa-github" style="font-size:24px;cursor:pointer;"></i>
          <i class="fa fa-facebook" style="font-size:24px;cursor:pointer;"></i>
          <i class="fa fa-twitter" style="font-size:24px;cursor:pointer;"></i>
        </div>
        <div class="text-gray-300 text-lg">
          Greenhome © 2024 All Rights Reserved. Made by Philip
        </div>
      </div>

    </footer>
  </section>
  <script src="./js/index.js"></script>
</body>

</html>