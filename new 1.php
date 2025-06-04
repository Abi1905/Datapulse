<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        .glow-on-hover {
            transition: box-shadow 0.3s ease;
        }

        .glow-on-hover:hover {
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.6);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="max-w-4xl mx-auto my-10 p-6 bg-white rounded-2xl shadow-lg glow-on-hover">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Contact Us</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Contact Info -->
            <div>
                <h3 class="text-xl font-semibold text-gray-700">Get in Touch</h3>
                <p class="text-gray-600 mt-2">Feel free to reach out to us for any inquiries or assistance.</p>
                
                <div class="mt-4">
                    <p class="flex items-center text-gray-700 mt-2">📧 <span class="ml-2">abinayazhagesan19@gmail.com</span></p>
                    <p class="flex items-center text-gray-700 mt-2">📧 <span class="ml-2">ds06022005@gmail.com</span></p>
                    <p class="flex items-center text-gray-700 mt-2">📧 <span class="ml-2">yazhinir11b@gmail.com</span></p>
                    <p class="flex items-center text-gray-700 mt-2">📞 <span class="ml-2">+91 7904938724</span></p>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <form action="process.php" method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Your Name" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
                    <input type="email" name="email" placeholder="Your Email" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
                    <textarea name="message" placeholder="Your Message" rows="4" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400"></textarea>
                    <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 glow-on-hover">Send Message</button>
                </form>

                <?php
                if (isset($_GET['success']) && $_GET['success'] == "true") {
                    echo '<p class="text-green-600 mt-3 text-center">Message sent successfully!</p>';
                }
                ?>
            </div>
        </div>
    </div>

</body>
</html>