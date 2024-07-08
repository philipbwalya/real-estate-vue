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
  <section class="relative mb-5" id="app">
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
        <div class="bg-[#6cab92] lg:flex items-center justify-center rounded-ful  font-semibold text-[#0E94B4] text-md lg:text-lg hover:text-[#09667d] transition ease-linear duration-500 pb-3 md:pr-3" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">

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
    <div class="relative h-[580px] md:h-[400px] bg-[url('./images/banner.png')] bg-cover bg-center flex items-center justify-center">
      <!-- <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div> -->
      <div class="relative text-white text-center">
        <h1 class="text-4xl text-black flex flex-col gap-3 justify-center items-center">FIND THE PROPERTY FOR
          <span class="bg-gradient-to-r from-[#25694e] to-[#063d27] bg-clip-text text-transparent">RENT OR SALE</span>
        </h1>
        <p class="mt-4 text-lg text-black">With us, your dream home is just a click away</p>
        <!-- Dropdowns -->
        <div class="mt-8 flex mx-auto flex-col items-center justify-center w-[90%] md:w-[97%] md:flex-row shadow-xl">
          <select v-model="buyOrSell" class="bg-white text-black px-4 py-5 outline-none rounded-t-md border-b w-full md:rounded-l md:rounded-tr-none md:border-r">
            <option value="" disabled selected>Buy or Sell</option>
            <option value="buy">Buy</option>
            <option value="sell">Sell</option>
          </select>

          <select v-model="propertyType" class="bg-white text-black px-4 py-5 outline-none md:border-r border-b w-full">
            <option value="" disabled>Property</option>
            <option value="below2000">Apartment</option>
            <option value="above2000">Boarding House</option>
          </select>
          <select v-model="property" class="bg-white text-black px-4 py-5 outline-none md:border-r border-b w-full">
            <option value="" disabled selected>Budget</option>
            <option value="house">Below 2000ZMW</option>
            <option value="apartment">Above 2000ZMW</option>
          </select>
          <div class="w-full bg-white py-2 rounded-b-md md:rounded-bl-none md:rounded-r-md">
            <button class="bg-[#65a30d] rounded-full py-[10px] px-6 text-white text-lg font-semibold tracking-wider">Search</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Section -->
    <section class="relative min-h-screen flex flex-col mt-16 justify-center items-center bg-white max-w-7xl mx-auto">
      <h1 class="text-3xl font-sans mb-10">FEATURED LISTING</h1>
      <div class="h-full w-full grid grid-col-1 md:grid-cols-2 xl:grid-cols-3 gap-10 px-10">
        <div class="relative overflow-hidden rounded-md shadow-sm hover:shadow-lg transition ease-in-out duration-300 border border-gray-200">
          <div class="relative w-full">
            <img src="./images/banner.png" alt="images" width={1000} height={1000} class="w-full object-contain" />
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
  </section>
  <script src="./js/index.js"></script>
</body>

</html>