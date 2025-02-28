<?php include_once "config/connect.php";
$calling_detail = $connect->query("select * from settings");
$data = $calling_detail->fetch_array();
?>
?>
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
                <form action="" method="post">
                    <div class="mt-4 grid grid-cols-3 gap-4">
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Hourly Charge</label>
                            <input type="text" class="text-2xl outline-none" name="hourly_charge" value="<?= $data['hourly_charge']; ?>">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Contact</label>
                            <input type="number" class="text-2xl outline-none" name="contact" value="<?= $data['contact'];?>">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Business Name</label>
                            <input type="text" class="text-2xl outline-none" name="business_name" value="<?= $data['business_name'];?>">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Address</label>
                            <input type="text" class="text-2xl outline-none" name="address" value="<?= $data['address'];?>">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Email</label>
                            <input type="email" class="text-2xl outline-none" name="email" value="<?= $data['email'];?>">
                        </div>
                        <div class="border border-gray-600 flex gap-4 flex-col py-4 h-[10rem] px-8 rounded">
                            <label class="text-3xl ">Gst (18%)</label>
                            <input name="gst" type="text" class="text-2xl outline-none" value="<?= $data['gst'];?>">
                        </div>

                    </div>
                    <div class="mt-4">
                        <input type="submit" name="update_query" class="py-3 rounded text-xl px-4 w-full bg-pink-500 text-white font-semibold" value="Update Details">
                    </div>
                    <?php
                    if (isset($_POST['update_query'])) {
                       
                        $hourly_charge = $_POST['hourly_charge'];
                        $contact = $_POST['contact'];
                        $business_name = $_POST['business_name'];
                        $address = $_POST['address'];
                        $gst = $_POST['gst'];
                        $email = $_POST['email'];


                        $query = $connect->query("UPDATE  settings set hourly_charge='$hourly_charge',contact='$contact',business_name='$business_name', address='$address',email='$email',gst='$gst'");

                        if ($query) {
                            // redirect("setting.php");
                        }
                    }
                    ?>
                </form>

            </div>

        </div>
    </div>
</body>

</html>