<?php include_once "config/connect.php";
$calling_detail = $connect->query("select * from settings");
$data = $calling_detail->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunStation Receipt</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg w-[60vh] p-4 border-2 border-dotted border-black">
            <div class="text-center">
                <div>
                    <img src="assets/images/logo1.png" alt="FunStation Logo" class="h-12 mx-auto">
                    <h2 class="text-xl font-bold text-pink-600 mt-2">FunStation Receipt</h2>
                    <p class="text-gray-600 text-sm">Thank you for visiting!</p>
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <h2 class="text-gray-600 text-base font-semibold">
                        <?= $data['address']; ?>
                    </h2>
                    <p class="text-gray-600 text-base font-semibold">GST No: <?= $data['gst']; ?></p>
                </div>
                <div class="mt-4">
                    <h2 class="text-base text-gray-600 font-semibold">Phone: <?= $data['contact']; ?></h2>
                    <span class="text-base text-gray-600 font-semibold"><?= $data['email']; ?></span>
                </div>
            </div>
            <?php
            if (isset($_GET['id'])) {
                $kids_id = $_GET['id'];
                $query = "  SELECT * FROM kids  JOIN session ON kids.id = session.kid_id where session.id='$kids_id'";
                $result = mysqli_query($connect, $query);
            }


            while ($row = $result->fetch_array()):
            ?>

                <div class="flex flex-col gap-2 p-4">
                    <p class="text-black font-semibold text-lg">Kid's Name: <?= $row['kid_name']; ?></p>
                    <span class="text-black font-semibold text-lg">Assigned Hours: <?= $row['duration']; ?> Hours</span>
                    <p class="text-black font-semibold text-lg">Check-In-Time: <?= $row['check_in_time']; ?></p>
                    <p class="text-black font-semibold text-lg">Receipt Details:</p>
                </div>
                <div class="pl-4 flex justify-between items-center text-base font-semibold text-gray-600 p-2">
                    <p>Base Amount (Excl. GST):</p>
                    <span>Rs. <?= $row['total_cost']; ?></span>
                </div>
                <?php if ($row['include_gst'] == 1): ?>
                    <div class="pl-4 flex justify-between items-center text-base font-semibold text-gray-600 p-2">
                        <p>CGST (9%):</p>
                        <span>Rs. 26</span>
                    </div>
                    <div class="pl-4 flex justify-between items-center text-base font-semibold text-gray-600 p-2">
                        <p>SGST (9%):</p>
                        <span>Rs.26</span>
                    </div>
                <?php endif; ?>

                <!-- <div class="pl-4 flex justify-between items-center text-base font-semibold text-gray-600 p-2">
                    <p>Discount (30.00%):</p>
                    <span>Rs. 65</span>
                </div> -->
                <div class="pl-4 flex justify-between items-center text-base font-semibold text-gray-600 p-2">
                    <p>Total Amount :</p>
                    <span class="font-bold text-black">Rs. <?= $row['total_cost']; ?></span>
                </div>
        </div>
    <?php endwhile; ?>

    <!-- Buttons -->
    <div class="mt-5 flex gap-4">
        <button onclick="window.print()"
            class="bg-red-500 text-white px-6 py-2 rounded shadow-md hover:bg-red-600 transition">
            Print Receipt
        </button>
        <button onclick="window.history.back()"
            class="bg-blue-500 text-white px-6 py-2 rounded shadow-md hover:bg-blue-600 transition">
            Go Back
        </button>
    </div>

    </div>
</body>

</html>