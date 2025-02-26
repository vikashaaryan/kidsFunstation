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
                <h2 class="text-4xl font-bold text-gray-800 mb-6 underline">Start Session</h2>
                <div class="bg-white shadow-2xl border border-gray-200 max-w-3xl w-full p-8 rounded-lg">
                    <form action="" method="">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col">
                                <label for="check_in" class="text-lg font-medium text-gray-700 mb-1">Check In Time:</label>
                                <input type="" name="check_in" class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                            </div>
                            <div class="flex flex-col">
                                <label for="check_out" class="text-lg font-medium text-gray-700 mb-1">Check Out Time:</label>
                                <input type="time" name="check_out" class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                            </div>
                            <div class="flex flex-col">
                                <label for="duration" class="text-lg font-medium text-gray-700 mb-1">Duration (Hours):</label>
                                <input type="number" name="duration" class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                            </div>
                            <div class="flex flex-col">
                                <label for="total_cost" class="text-lg font-medium text-gray-700 mb-1">Total Cost:</label>
                                <input type="number" name="total_cost" class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                            </div>

                            <!-- GST Toggle Button -->
                            <div class="flex items-center space-x-4 mt-2">
                                <label for="gst_toggle" class="text-lg font-medium text-gray-700">Include GST:</label>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" id="gst_toggle" class="sr-only peer">
                                    <div class="w-12 h-6 bg-gray-300 peer-focus:ring-2 peer-focus:ring-blue-400 rounded-full peer-checked:bg-blue-500 peer-checked:after:translate-x-6 after:content-[''] after:absolute after:left-1 after:top-1 after:w-4 after:h-4 after:bg-white after:rounded-full after:transition-all"></div>
                                </label>
                            </div>

                        </div>
                        <div class="mt-6 flex justify-center">
                            <input type="submit" value=" Start Session" class="bg-red-500 cursor-pointer hover:bg-red-600 text-white font-semibold text-xl px-6 py-3 rounded-lg shadow-md transition-all duration-300  w-full">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>