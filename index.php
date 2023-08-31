<?php
include 'config.php';
?>
<!DOCTYPE html>

<html lang="en" class="bg-gray-50 text-gray-600">
<head>
    <title>AEC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backgroundImage: {
                        'aec': "url('/assets/aec.jpg')",

                    }
                }
            }
        }
    </script>
</head>
<body>
<img class="object-cover h-full w-full fixed" src="assets/aec.jpg" />
<div class="relative w-screen h-screen bg-white bg-opacity-50 backdrop-blur py-10">
  <div class="w-full max-w-7xl mx-auto">

    <h1 class="text-3xl font-semibold mb-4">Students</h1>
    <div class="p-10 bg-white bg-opacity-50 rounded-xl border border-gray-200">
        <?php
          include 'read.php';
        ?>
    </div>
  </div>
</div>
</body>
</html>
