<?php include_once "config/connect.php";
if (!isset($_SESSION['user_id'])) {
    redirect("login.php");
}
$calling_kids = $connect->query(
    "SELECT * FROM kids  JOIN session ON kids.id = session.kid_id"
);
$result = mysqli_query($connect, "SELECT * FROM session");
$count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Fun Station</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex">
        <?php include_once "includes/sidebar.php"; ?>
        <div class="w-9/12">
            <div class="m-10 flex justify-between items-center">
                <h2 class="text-3xl font-semibold">Realtime Session(<?= $count;?>)</h2>
                <div class="flex gap-4">
                    <a href="#" class="block flex items-center gap-3 bg-orange-500 hover:bg-orange-600 text-white font-semibold text-lg rounded-lg py-2 px-2 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="h-6 w-6">
                            <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z" />
                        </svg>
                        Add Session
                    </a>
                    <a href="index.php" class="flex items-center gap-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold text-lg rounded-lg py-2 px-4 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white" class="h-6 w-6">
                            <path d="M105.1 202.6c7.7-21.8 20.2-42.3 37.8-59.8c62.5-62.5 163.8-62.5 226.3 0L386.3 160 352 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l111.5 0c0 0 0 0 0 0l.4 0c17.7 0 32-14.3 32-32l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 35.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5zM39 289.3c-5 1.5-9.8 4.2-13.7 8.2c-4 4-6.7 8.8-8.1 14c-.3 1.2-.6 2.5-.8 3.8c-.3 1.7-.4 3.4-.4 5.1L16 432c0 17.7 14.3 32 32 32s32-14.3 32-32l0-35.1 17.6 17.5c0 0 0 0 0 0c87.5 87.4 229.3 87.4 316.7 0c24.4-24.4 42.1-53.1 52.9-83.8c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.5 62.5-163.8 62.5-226.3 0l-.1-.1L125.6 352l34.4 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L48.4 288c-1.6 0-3.2 .1-4.8 .3s-3.1 .5-4.6 1z" />
                        </svg>
                        Refresh
                    </a>

                </div>
            </div>
            <div class="grid grid-cols-3 gap-4 p-10">
                <?php while ($kid = $calling_kids->fetch_array()): ?>
                    <div class="flex flex-col gap-3">
                        </span>
                        <?php
                        date_default_timezone_set("Asia/Kolkata");
                        $check_in_time = strtotime($kid['check_in_time']);
                        $duration = intval($kid['duration']) * 3600;
                        $end_time = $check_in_time + $duration;
                        $current_time = time();
                        $time_left = max($end_time - $current_time, 0);
                        $card_class = ($time_left == 0) ? "bg-pink-300 text-white border-red-500" : "bg-green-200 border-green-300";
                        $show_delete_icon = ($time_left == 0);
                        $hours = floor($time_left / 3600);
                        $minutes = floor(($time_left % 3600) / 60);
                        $seconds = $time_left % 60;
                        ?>

                        <div class="relative border border-3 <?= $card_class; ?> text-sm rounded p-4 flex flex-col gap-3">
                            <?php if ($show_delete_icon): ?>

                                <a href="remove.php?id=<?= $kid['id']; ?>" class="absolute top-2 right-2 text-white text-xl hover:text-gray-200">
                                    ❌
                                </a>

                            <?php endif; ?>
                            <h2 class="font-semibold"><?= $kid['kid_name']; ?></h2>

                            <p class="flex gap-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                <?= $kid['contact']; ?>
                            </p>

                            <span class="flex gap-2 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <?= date("h:i A", strtotime($kid['check_in_time'])); ?>
                            </span>

                            <p class="text-lg font-bold">
                                Time Left: <span>
                                    <?= sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds); ?>
                                </span>
                            </p>

                            <div class="mx-4 flex justify-between">
                                <h2 class="flex text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 -mt-0.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <?= $kid['duration']; ?> hours
                                </h2>
                                <a href="reciept.php" class="flex text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 ">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 14.25 6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185ZM9.75 9h.008v.008H9.75V9Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm4.125 4.5h.008v.008h-.008V13.5Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>

                                    Receipt</a>
                                <a href="manage_checkout.php" class="flex text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Check-Outs</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>
    </div>

    <head>
        <meta http-equiv="refresh" content="1">
    </head>

</body>

</html>
