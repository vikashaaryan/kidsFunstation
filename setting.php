<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Fun Station | Setting</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex">
        <?php include_once "includes/sidebar.php"; ?>
        <div class="w-9/12">
            <div class="p-10">
                <h2 class="text-4xl font-bold mb-10">kid'S Funstation Setting</h2>
                <form action="" method="">
                    <div class="mt-4 grid grid-cols-3 gap-4">
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Hourly Charge</label>
                            <input class="text-2xl outline-none" value="Rs.500">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Contact</label>
                            <input class="text-2xl outline-none" value="587958798">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Busniess Name</label>
                            <input class="text-2xl outline-none" value="Kids Funstation">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Address</label>
                            <input class="text-2xl outline-none" value="Panorma Rameshwaram 1st Flor, Shop No 209 Near Tanishq Showroom, line Bazar Purnea(Bihar)">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Email</label>
                            <input class="text-2xl outline-none" value="v@gmail.com">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Change Password</label>
                            <input type="password" class="text-2xl outline-none" value="35355435">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Gst (18%)</label>
                            <input class="text-2xl outline-none" value="10NCPA1183R1Z6">
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>
</body>

</html>