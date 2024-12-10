<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Web | Perpustakaan</title>
    <style>
        body{
            background-color: lightblue;
        }
    </style>
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-gray-800" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
              <div class="shrink-0">
                <img class="size-8" src="img/logo1.png?color=indigo&shade=500" alt="Your Company">
              </div>
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/index" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                    <a href="/anggota" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Anggota</a>
                    <a href="/buku" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Buku</a>
                    <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Transaksi</a>
                  </div>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
    
                <div class="relative ml-3">
                  <div>
                    <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">Open user menu</span>
                      <img class="size-8 rounded-full" src="img/user.png?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </button>
                  </div>
                  <div x-show="isOpen"
                  x-transition:enter="transition ease-out duration-100 transform"
                  x-transition:enter-start="opacity-0 scale-95"
                  x-transition:enter-end="opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75 transform"
                  x-transition:leave-start="opacity-100 scale-100"
                  x-transition:leave-end="opacity-0 scale-95" 
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
    
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">contact</a>
          </div>
          <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
              <div class="shrink-0">
                <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </div>
              <div class="ml-3">
                <div class="text-base/5 font-medium text-white">Tom Cook</div>
                <div class="text-sm font-medium text-gray-400">tom@example.com</div>
              </div>
            </div>
            <div class="mt-3 space-y-1 px-2">
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
            </div>
          </div>
        </div>
      </nav>
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Web | Perpustakaan</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <button
        class="lg:px-8 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 mb-2"
        onclick="toggleModal(true)">
        Tambah Transaksi
      </button>

      <div 
            id="modal" 
            class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-xl font-bold mb-4">Tambah Transaksi</h2>
                <form method="POST" action="<?php echo e(route('anggota.store')); ?>">
                  <?php echo csrf_field(); ?> 
                    <div class="mb-4">
                        <label for="no_pinjam" class="block text-sm font-medium">No Pinjam</label>
                        <input 
                            type="text" 
                            id="no_pinjam" 
                            name="no_pinjam" 
                            class="w-full px-3 py-2 border rounded" 
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium">Nama Anggota</label>
                        <input 
                            type="text" 
                            id="nama" 
                            name="nama" 
                            class="w-full px-3 py-2 border rounded" 
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="id_ang" class="block text-sm font-medium">Id Anggota</label>
                        <input 
                            type="text" 
                            id="id_ang" 
                            name="id_ang" 
                            class="w-full px-3 py-2 border rounded" 
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="no_buku" class="block text-sm font-medium">No Buku</label>
                        <input 
                            type="text" 
                            id="no_buku" 
                            name="no_buku" 
                            class="w-full px-3 py-2 border rounded" 
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="tgl_pjm" class="block text-sm font-medium">Tanggal Pinjam</label>
                        <input 
                            type="date" 
                            id="tgl_pjm" 
                            name="tgl_pjm" 
                            class="w-full px-3 py-2 border rounded" 
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="tgl_kmb" class="block text-sm font-medium">Tanggal Kembali</label>
                        <input 
                            type="date" 
                            id="tgl_kmb" 
                            name="tgl_kmb" 
                            class="w-full px-3 py-2 border rounded" 
                            required>
                    </div>
                    <div class="flex justify-end">
                        <button 
                            type="button" 
                            class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 mr-2" 
                            onclick="toggleModal(false)">
                            Batal
                        </button>
                        <button 
                            type="submit" 
                            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2 text-center w-1/6 border border-gray-300">No Pinjaman</th>
                        <th class="px-4 py-2 text-center w-1/6 border border-gray-300">Nama Anggota</th>
                        <th class="px-4 py-2 text-center w-1/6 border border-gray-300">ID Anggota</th>
                        <th class="px-4 py-2 text-center w-1/6 border border-gray-300">No Buku</th>
                        <th class="px-4 py-2 text-center w-1/6 border border-gray-300">Tanggal Pinjam</th>
                        <th class="px-4 py-2 text-center w-1/6 border border-gray-300">Tanggal Kembali</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100">
                    <?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="px-4 py-2 text-center border text-center border-gray-300"><?php echo e($transaksi->No_Pinjaman); ?></td>
                        <td class="px-4 py-2 text-center border text-center border-gray-300"><?php echo e($transaksi->Nama); ?></td>
                        <td class="px-4 py-2 text-center border text-center border-gray-300"><?php echo e($transaksi->Id_anggota); ?></td>
                        <td class="px-4 py-2 text-center border text-center border-gray-300"><?php echo e($transaksi->no_buku); ?></td>
                        <td class="px-4 py-2 text-center border text-center border-gray-300"><?php echo e($transaksi->tgl_pinjam); ?></td>
                        <td class="px-4 py-2 text-center border border-gray-300"><?php echo e($transaksi->tgl_kembali); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    </main>
  </div>
  <script>
      function toggleModal(show) {
          const modal = document.getElementById('modal');
          if (show) {
              modal.classList.remove('hidden');
              modal.classList.add('flex');
          } else {
              modal.classList.add('hidden');
              modal.classList.remove('flex');
          }
      }
  </script>
</body>
</html><?php /**PATH C:\laragon\www\perpustakaan\resources\views/transaksi.blade.php ENDPATH**/ ?>