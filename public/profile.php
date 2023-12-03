<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="bg-[#F3EEEA]">
    <!-- start navbar -->
    <nav class="bg-white shadow-md">
      <div class="max-w-screen px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-20 items-center justify-between">
          <div class="flex flex-1 items-stretch justify-start">
            <div class="flex items-center">
              <img class="w-14" src="assets/icon/logosmada.png" alt="logo smada" />
            </div>
            <div class="hidden sm:ml-6 sm:block"></div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <div class="relative ml-3 justify-end">
              <div class="flex justify-center items-center gap-2 text-xl font-semibold">
                <span>Admin</span>
                <button type="button"
                  class="relative flex rounded-full bg-green-400">
                  <img class="w-10 rounded-full" src="assets/icon/user.png" alt="profileUser" />
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </nav>
    <!-- end navbar -->
    <div class="flex flex-row h-screen">
      <div class="grow w-4/12">
        <!-- Start Sidebar -->
        <div class="flex flex-col justify-between bg-white m-7 w-96 h-full rounded-lg text-xl p-4 overflow-auto">
          <div>
            <ul>
              <li class="mb-4 bg-gray-200 rounded-md font-semibold py-1 shadow 
                hover:bg-green-500 hover:text-white">
                <a href="dashboard.php" class="ml-4 w-full inline-block">Dashboard</a>
              </li>
              <li class="mb-4 bg-gray-200 rounded-md font-semibold py-1 shadow
                hover:bg-green-500 hover:text-white">
                <a href="data_siswa.php" class="ml-4 w-full inline-block">Data Murid</a>
              </li>
              <li class="mb-4 bg-gray-200 rounded-md font-semibold py-1 shadow
                hover:bg-green-500 hover:text-white">
                <a href="pelanggaran_siswa.php" class="ml-4 w-full inline-block">Pelanggaran</a>
              </li>
              <li class="mb-4 bg-gray-200 rounded-md font-semibold py-1 flex items-center shadow
                hover:bg-green-500 hover:text-white">
                <a href="absen_murid.php" class="ml-4 w-full inline-block">Absen Murid</a>
                <img src="assets/icon/Polygon.png" alt="activity" class="mr-4 w-4 h-4">
              </li>
              <li class="mb-4 bg-gray-200 rounded-md font-semibold py-1 shadow
                hover:bg-green-500 hover:text-white">
                <a href="permohonan_izin.php" class="ml-4 w-full inline-block">Permohonan Izin Murid</a>
              </li>
              <li class="mb-4 bg-gray-200 rounded-md font-semibold py-1 shadow
                hover:bg-green-500 hover:text-white">
                <a href="rekap_pelanggar.php" class="ml-4 w-full inline-block">Rekap Pelanggaran</a>
              </li>
              <li class="mb-4 bg-gray-200 rounded-md font-semibold py-1 shadow
                hover:bg-green-500 hover:text-white">
                <a href="rekap_absen.php" class="ml-4 w-full inline-block">Rekap Absen</a>
              </li>
              <li class="mb-4 text-white bg-[#1CC642] rounded-md font-semibold py-1 shadow
                hover:bg-green-500 hover:text-gray-200">
                <a href="profile.php" class="ml-4 w-full inline-block">Profile</a>
              </li>
            </ul>
          </div>
          <div 
            onclick="logout()"
            class="flex justify-center items-center mx-auto mb-32 bg-green-500 w-40 rounded-full text-white h-10">
            <img src="assets/icon/icon_keluar.png" alt="logout">
            <button type="" class="p-4">
              keluar
            </button>
          </div>
        </div>
        <!-- End Sidebar -->
        <!-- Modal Sidebar -->
        <div 
          onclick="exitLogout()"
          id="modalLogout"
          class="fixed bg-black w-screen h-screen bg-opacity-30 top-0 left-0 
          justify-center items-center opacity-0 hidden transition-opacity duration-200 backdrop-blur-sm shadow z-50">
          <div 
            onclick="event.stopImmediatePropagation()"
            class="rounded-lg text-center bg-green-100 w-96 h-36">
            <h1 class="p-4">Apakah anda yakin keluar ?</h1>
            <div class="flex justify-evenly mt-3">
              <button type="" class="bg-green-500 text-white text-lg w-20 h-7 rounded-full shadow
                hover:bg-green-600">Ya</button>
              <button 
                onclick="exitLogout()"
                type="" 
                class="bg-red-500 text-white text-lg w-20 h-7 rounded-full shadow hover:bg-red-600">Tidak</button>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col w-full  mt-8 mr-16 rounded-lg bg-white h-full">
        <!-- START CONTENT -->
        <div class="flex p-4 justify-center items-center mb-8 rounded-t-lg h-16 bg-[#575757] text-center font-bold text-white text-2xl">
          Profile
        </div>
        <div class="flex flex-wrap flex-col h-full w-full px-10">
          <div class="flex justify-center items-center bg-green-400 w-20 h-20 my-10 ml-5 rounded-full overflow-hidden">
            <img src="assets/icon/user.png" alt="user" class="">
          </div>
          <div class="flex flex-col ml-8 mt-12">
            <div class="flex gap-4 items-center mb-4">
              <label for="" class="w-24 inline-block">Nip</label>
              <input type="text" name="" value="00671" class="w-1/2 h-8 bg-gray-200 px-2" disabled>
            </div>
            <div class="flex gap-4 items-center mb-4">
              <label for="" class="w-24 inline-block">Nama</label>
              <input type="text" name="" value="Rahmatullah" class="w-1/2 h-8 bg-gray-200 px-2" disabled>
            </div>
            <div class="flex gap-4 items-center mb-4">
              <label for="" class="w-24 inline-block">Jabatan</label>
              <input type="text" name="" value="Guru" class="w-1/2 h-8 bg-gray-200 px-2" disabled>
            </div>
            <div class="flex gap-4 items-center mb-4">
              <label for="" class="w-24 inline-block">Status</label>
              <input type="text" name="" value="Admin" class="w-1/2 h-8 bg-gray-200 px-2" disabled>
            </div>
          </div>
        </div>

        <!-- END CONTENT -->
      </div>
    </div>
    <script src="js/modal.js"></script>
  </body>
</html>
