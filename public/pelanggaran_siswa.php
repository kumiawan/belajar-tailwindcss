<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pelanggaran Siswa</title>
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
              <li class="mb-4 text-white bg-[#1CC642] rounded-md font-semibold py-1 shadow
                hover:bg-green-500 hover:text-gray-200">
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
              <li class="mb-4 bg-gray-200 rounded-md font-semibold py-1 shadow
                hover:bg-green-500 hover:text-white">
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
        <!-- Modal SideBar -->
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

        <div class="flex p-4 justify-center items-center rounded-t-lg h-16 bg-[#575757] text-center font-bold text-white text-2xl">
          Pelanggaran Siswa
        </div>
        <div class="flex flex-col h-full w-full p-24">
          <div class="flex flex-row text-center mb-6">
            <button 
              onclick="showFormRules()"
              type="" class="flex justify-center items-center gap-1 w-36 h-10 text-white rounded-lg shadow-md font-semibold bg-green-500">
              <span class="text-2xl font-bold">+</span>
              <span class="text-xl font-bold">Tambah</span>
            </button>
          </div>
          <div class="flex flex-row ">
            <table class="w-full h-full text-center border border-black">
              <thead class ="sticky top-0 z-0">
                <tr class="text-center bg-gray-200 shadow">
                  <th class="border border-black">Jenis Pelanggaran</th>
                  <th class="border border-black">Nilai/Bobot </th>
                  <th class="border border-black">Action</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td class="border border-black">Terlambat</td>
                <td class="border border-black">25%</td>
                <td class="border border-black py-4">
                  <button 
                    onclick="showEditPelanggaran()"
                    type="" class="w-36 h-8 bg-green-500 text-white shadow rounded-lg mx-2 ">Edit</button>
                  <button 
                    onclick="showBtnHapusPelanggaran()"
                    type="" class="w-36 h-8 bg-red-500 text-white shadow rounded-lg mx-2">Hapus</button>
                </td>
              </tr>
              </tbody>
            </table>
            <!-- Modal Action Table -->
            <!-- @btnEdit Start -->
            <div 
              onclick="closeEditPelanggaran()"
              id="formEditPelanggaran"
              class="fixed w-screen h-screen bg-black bg-opacity-50 top-0 left-0 justify-center items-center transition-opacity duration-200 opacity-0 hidden">
              <div 
                class="bg-[#E8FDED] mx-auto w-[40rem] mt-16 overflow-hidden rounded-lg">
                <div 
                  onclick="closeEditPelanggaran()"
                  class="relative bg-[#1CC642] text-center text-2xl font-bold text-white w-full h-12 flex items-center justify-center">
                  <h1>Edit Pelanggaran</h1>
                  <span class="absolute right-8 hover:text-red-800 hover:cursor-pointer">X</span>
                </div>
                <form
                  onclick="event.stopImmediatePropagation()"
                >
                  <div class="flex p-4 mb-4">
                    <label for="" class="w-36 inline-block">Jenis Pelanggaran</label>
                    <input type="" name="" value="Terlambat" class="w-96 border-2 border-green-500">
                  </div>
                  <div class="flex p-4 mb-4">
                    <label for="" class="w-36 inline-block">Nilai/Bobot</label>
                    <input type="" name="" value="25%" class="w-96 border-2 border-green-500">
                  </div>
                  <div class="flex justify-end p-4">
                    <button
                      type="submit" class="w-36 h-8 bg-green-500 text-white shadow rounded-full">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- @btnEdit End -->
            <!-- @btnHapus Start-->
            <div 
              onclick="hideBtnHapusPelanggaran()"
              id="btnHapusPelanggaran"
              class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen justify-center items-center 
              opacity-0 hidden transition-opacity duration-200">
              <div 
                onclick="event.stopImmediatePropagation()"
                class="text-center bg-[#EAFFEF] w-3/12 h-64 rounded-lg shadow">
                <h1 class="mx-auto my-5 py-6 w-80">Apakah anda ingin menghapus data Pelanggaran?</h1>
                <div class="flex my-12 justify-evenly items-center">
                  <button type="" class="bg-red-500 w-20 rounded-full text-white text-lg hover:bg-red-600">Ya</button>
                  <button 
                    onclick="hideBtnHapusPelanggaran()"
                    type="" class="bg-green-500 w-20 rounded-full text-white text-lg hover:bg-green-600">Tidak</button>
                </div>
              </div>
            </div>
            <!-- @btnHapus End-->
            <!-- @btnTambah Start -->
            <div 
              onclick="closeFormAddRules()"
              id="formRules"
              class="fixed w-screen h-screen bg-black bg-opacity-50 top-0 left-0 justify-center items-center transition-opacity duration-200 opacity-0 hidden">
              <div 
                class="bg-[#E8FDED] mx-auto w-[40rem] mt-16 overflow-hidden rounded-lg">
                <div 
                  onclick="closeFormAddRules()"
                  class="relative bg-[#1CC642] text-center text-2xl font-bold text-white w-full h-12 flex items-center justify-center">
                  <h1>Tambah Pelanggaran Baru</h1>
                  <span class="absolute right-8 hover:text-red-800 hover:cursor-pointer">X</span>
                </div>
                <form
                  onclick="event.stopImmediatePropagation()"
                >
                  <div class="flex p-4 mb-4">
                    <label for="" class="w-36 inline-block">Jenis Pelanggaran</label>
                    <input type="" name="" value="Terlambat" class="w-96 border-2 border-green-500">
                  </div>
                  <div class="flex p-4 mb-4">
                    <label for="" class="w-36 inline-block">Nilai/Bobot</label>
                    <input type="" name="" value="25%" class="w-96 border-2 border-green-500">
                  </div>
                  <div class="flex justify-end p-4">
                    <button
                      type="submit" class="w-36 h-8 bg-green-500 text-white shadow rounded-full">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- @btnTambah End -->
          </div>
        </div>
        <!-- END CONTENT -->
      </div>
    </div>
    <script src="js/modal.js"></script>
  </body>
</html>
