<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Fun Station | add sesstion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <?php include_once "includes/sidebar.php"; ?>
        <div class="w-9/12">
            <div class="p-10 flex flex-col justify-center items-center h-[90vh] ">
                <h2 class="text-4xl font-bold text-gray-800 mb-6 underline">Kids' Details</h2>
                <div class="bg-white shadow-2xl border border-gray-200 max-w-3xl w-full p-8 rounded-lg">
                    <form action="" method="">
                        <div class="flex flex-col">
                            <label for="kids_name" class="text-lg font-medium text-gray-700 mb-1">Kid's Name:</label>
                            <input type="text" name="kids_name" class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        </div>
                        <div class="flex flex-col">
                            <label for="contact" class="text-lg font-medium text-gray-700 mb-1">Contact:</label>
                            <input type="text" name="contact" class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        </div>
                        <div class="flex flex-col">
                            <label for="age" class="text-lg font-medium text-gray-700 mb-1">Age:</label>
                            <input type="number" name="age" class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        </div>

                        <div class="mt-6 flex justify-center">
                            <input type="submit" value=" Submit" class="bg-blue-500 cursor-pointer hover:bg-blue-600 text-white font-semibold text-lg px-6 py-3 rounded-lg shadow-md transition-all duration-300  w-full">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>