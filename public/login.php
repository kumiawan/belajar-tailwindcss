<!doctype html>
<html lang="en">

  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="flex justify-center items-center h-screen bg-[#DDEEE0]">
      <!-- notifikasi berhasil -->
      <!-- keterangan : hilangkan opacity-0 agar tampil -->
      <div class="absolute flex  opacity-0 top-8 bg-white border w-60 h-24 rounded-xl items-center shadow ">
        <img src="assets/icon/check.png" alt="login berhasil" class="w-10 h-10 m-2">
        <span class="w-40 font-bold text-green-700">Login Berhasil</span>
        <!-- notifikasi gagal -->
      </div><div class="absolute opacity-0 flex top-8 bg-white border w-60 h-24 rounded-xl items-center shadow ">
        <img src="assets/icon/peringatan.png" alt="nip atau password salah" class="w-10 h-10 m-2">
        <span class="w-40 font-bold text-red-600">NIP atau Password anda salah!</span>
      </div>

      <div class="w-[590px] h-auto p-6 bg-white rounded-[30px] shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
        <img src="./assets/icon/logosmada.png" alt="logosmada" class="w-36 mt-6 mx-auto">
        <h1 class="font-['Arial'] text-2xl block text-center font-semibold w-64 mx-auto"> SMA NEGERI 2 JEMBER</h1>
        <form action="" method="post">
          <div class="mt-16">
            <input type="text" name="username" value="Admin" class="border bg-green-100 rounded-[20px] h-14 w-full font-medium text-base px-6 py-1 focus:outline-none focus:ring-0 focus:border-green-600" placeholder="Enter NIS ..." />
          </div>
          <div class="mt-8">
            <input type="password" name="password" class="border bg-green-100 rounded-[20px] h-14 w-full text-base px-6 py-1 focus:outline-none focus:ring-0 focus:border-green-600" placeholder="Enter Password ..." />
          </div>
        </form>
          <div class="mt-3 p-3 flex justify-between items-center">
            <div class="hidden">
              <input type="checkbox">
              <label>Remember Me</label>
            </div>
            <div>
              <button 
                onclick="hint()"
                type="submit" class="w-36">Forgot Password?</button>
            </div>
          </div>
          <div class="mt-5">
          <a href="dashboard.php">
          <button 
            type="submit" name="login" value="" class="border-2 border-green-400 bg-green-400 text-white py-3 w-full rounded-[20px] hover:bg-transparent hover:text-green-700 font-semibold shadow-md">Log In</button>
          </a>
          </div>
        <!-- start modal forget password-->
        <div 
          onclick="exitHint()"
          id="forgetPassword"
          class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen justify-center items-center 
          opacity-0 hidden transition-opacity duration-200">
          <div 
            onclick="event.stopImmediatePropagation()"
            class="text-center bg-white w-3/12 h-64 rounded-lg shadow">
            <h1 class="mx-auto my-1 py-6 w-80">Verification Hint</h1>
            <div class="mb-1">
              <label for="" class="w-32 inline-block">NIS/NIP</label>
              <input type="" name="" value="08999281" class="border-2 border-black p-1 w-1/2">
            </div>
            <div class="mb-1">
              <label for="" class="w-32 inline-block">Hint</label>
              <input type="" name="" value="Ayam" class="border-2 border-black p-1 w-1/2">
            </div>
            <div class="flex my-12 justify-evenly items-center">
              <button type="" class="bg-green-500 w-20 rounded-full text-white text-lg hover:bg-green-600">Submit</button>
              <button 
                onclick="exitHint()"
                type="" class="bg-red-500 w-20 rounded-full text-white text-lg hover:bg-red-600">Cancel</button>
            </div>
          </div>
        </div>
        <!-- end modal forget password-->
      </div>
    </div>
    <script src="js/modal.js"></script>
  </body>
</html>
