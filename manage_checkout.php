<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Fun Station | Checkout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex">
        <?php include_once "includes/sidebar.php"; ?>
        <div class="w-9/12">
            <div class="p-10">
                <div class="flex justify-between items-center">
                    <h2 class="font-bold text-2xl text-gray-800">CheckOut Session</h2>
                    <div class="flex gap-4">
                        <form action="" method="">
                            <input type="search" name="search" class="py-2.5 px-4 bg-gray-100 rounded border focus:ring-2  focus:outline-none focus:border-blue-400" placeholder="Search Kid's Name">
                            <input type="submit" name="go" value="Search" class="py-2 px-2 text-xl outline-none ring:blue-500 border border-blue-500 border-2 cursor-pointer bg-black text-white font-semibold rounded">
                        </form>
                        <div class="flex flex-col">
                            <select id="week_day" name="week_day" class="py-3 px-2 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                                <option value="">Today</option>
                                <option value="sunday">Sunday</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                                <option value="saturday">Saturday</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="shadow-xl w-full p-4 m-5">
                    <table class="w-full border border-black">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-black py-2 px-4">Kids Name</th>
                                <th class="border border-black py-2 px-4">Contact</th>
                                <th class="border border-black py-2 px-4">Check In Time</th>
                                <th class="border border-black py-2 px-4">Check Out Time</th>
                                <th class="border border-black py-2 px-4">Assigned Hours</th>
                                <th class="border border-black py-2 px-4">Total Duration</th>
                                <th class="border border-black py-2 px-4">Receipt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="border border-black py-2 px-4">John Doe</td>
                                <td class="border border-black py-2 px-4">1234567890</td>
                                <td class="border border-black py-2 px-4">10:00 AM</td>
                                <td class="border border-black py-2 px-4">12:00 PM</td>
                                <td class="border border-black py-2 px-4">2 Hours</td>
                                <td class="border border-black py-2 px-4">2 Hours</td>
                                <td class="border border-black py-2 px-4"><button class="bg-blue-500 text-white px-3 py-1 rounded">Print</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>

</html>