<?php
include_once "config/connect.php";
$calling_kid_id = $connect->query("SELECT * FROM kids");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Fun Station | Add Session</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <?php include_once "includes/sidebar.php"; ?>
        <div class="w-9/12">
            <div class="p-10 flex flex-col justify-center items-center h-[90vh]">
                <h2 class="text-4xl font-bold text-gray-800 mb-6 underline">Start Session</h2>
                <div class="bg-white shadow-2xl border border-gray-200 max-w-3xl w-full p-8 rounded-lg">
                    <form action="" method="post">
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Kid Selection -->
                            <div class="flex flex-col">
                                <label for="kid_id" class="text-lg font-medium text-gray-700 mb-1">Select Kid:</label>
                                <select name="kid_id" required class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                                    <option value="">Select Kid</option>
                                    <?php while ($kid = $calling_kid_id->fetch_assoc()) { ?>
                                        <option value="<?= $kid['id']; ?>"><?= $kid['kid_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label for="check_in" class="text-lg font-medium text-gray-700 mb-1">Check In Date & Time:</label>
                                <input type="datetime-local" name="check_in" required class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div class="flex flex-col">
                                <label for="check_out" class="text-lg font-medium text-gray-700 mb-1">Check Out Date & Time:</label>
                                <input type="datetime-local" name="check_out" required class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div class="flex flex-col">
                                <label for="duration" class="text-lg font-medium text-gray-700 mb-1">Duration (Hours):</label>
                                <input type="number" name="duration" required class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div class="flex flex-col">
                                <label for="total_cost" class="text-lg font-medium text-gray-700 mb-1">Total Cost:</label>
                                <input type="number" name="total_cost" required class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div class="flex items-center gap-3 mt-4">
                                <span class="text-lg font-medium text-gray-700">Include GST (18%)</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" name="gst_toggle" id="gst_toggle" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:ring-2 peer-focus:ring-blue-400 rounded-full peer peer-checked:after:translate-x-5 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                        <div class="mt-6 flex justify-center">
                            <input type="submit" name="start_session" value="Start Session" class="bg-red-500 cursor-pointer hover:bg-red-600 text-white font-semibold text-xl px-6 py-3 rounded-lg shadow-md transition-all duration-300 w-full">
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['start_session'])) {
                        $kid_id = $_POST['kid_id'];
                        $check_in = $_POST['check_in'];
                        $check_out = $_POST['check_out'];
                        $duration = $_POST['duration'];
                        $total_cost = $_POST['total_cost'];
                        $include_gst = isset($_POST['gst_toggle']) ? 1 : 0;

                        $query = $connect->query("INSERT INTO session (kid_id, check_in_time, check_out_time, duration, total_cost, include_gst) 
                          VALUES ($kid_id, '$check_in', '$check_out', $duration, $total_cost, $include_gst)");

                    

                        if ($query) {
                            redirect("index.php");
                        } else {
                           msg('Error: Could not start session.');
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>