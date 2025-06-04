<?php
include "config.php";

$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Contact Messages</h2>
        <table class="w-full border-collapse">
            <tr class="bg-gray-200">
                <th class="border p-2">Name</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Message</th>
                <th class="border p-2">Date</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td class="border p-2"><?php echo $row["name"]; ?></td>
                <td class="border p-2"><?php echo $row["email"]; ?></td>
                <td class="border p-2"><?php echo $row["message"]; ?></td>
                <td class="border p-2"><?php echo $row["created_at"]; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
