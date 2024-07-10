<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
  <div id="signup" class="mx-auto md:min-h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
    <a href="#" class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
      <img src="./images/logo.png" class="h-10 mr-4" alt="estate Logo">
      <span class="self-center text-2xl font-bold whitespace-nowrap">Real Estate</span>
    </a>
    <!-- Card -->
    <div class="bg-white shadow rounded-lg md:mt-0 w-full sm:max-w-screen-sm xl:p-0 mb-5">
      <div class="p-6 sm:p-8 lg:p-16 space-y-8">
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
          Create a Free Account
        </h2>
        <form class="mt-8 space-y-6" @submit.prevent="handleSubmit">
          <div>
            <label for="first_name" class="text-sm font-medium text-gray-900 block mb-2">First Name</label>
            <input type="text" v-model="first_name" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 outline-none" placeholder="Enter First Name" required>
          </div>
          <div>
            <label for="last_name" class="text-sm font-medium text-gray-900 block mb-2">Last Name</label>
            <input type="text" v-model.trim="last_name" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 outline-none" placeholder="Enter Last Name" required>
          </div>
          <div>
            <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
            <input type="email" v-model.trim="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 outline-none" placeholder="name@company.com" required>
          </div>
          <div>
            <label for="phone" class="text-sm font-medium text-gray-900 block mb-2">Phone Number</label>
            <input type="number" v-model.trim="phone" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 outline-none" placeholder="09••••••" required>
          </div>
          <div>
            <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Password</label>
            <input type="password" name="password" v-model.trim="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 outline-none" required>
          </div>
          <div>
            <label for="confirm_password" class="text-sm font-medium text-gray-900 block mb-2">Confirm password</label>
            <input type="password" name="confirm_password" v-model.trim="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 outline-none" required>
          </div>
          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="remember" aria-describedby="remember" name="remember" type="checkbox" v-model='remember' class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded outline-none" required>
            </div>
            <div class="text-sm ml-3">
              <label for="remember" class="font-medium text-gray-900">I accept the <a href="#" class="text-teal-500 hover:underline outline-none">Terms and Conditions</a></label>
            </div>
          </div>
          <button type="submit" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">Create account</button>
          <div class="text-sm font-medium text-gray-500">
            Already have an account? <a href="signin.php" class="text-teal-500 hover:underline">Login here</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
  <script src="./js/signup.js"></script>
</body>

</html>