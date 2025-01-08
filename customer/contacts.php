<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Flower and Plant Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        .contact-details {
            margin-bottom: 20px;
        }
        .contact-details p {
            margin: 10px 0;
            font-size: 16px;
        }
        .contact-details a {
            color: #4CAF50;
            text-decoration: none;
        }
        .contact-form {
            margin-top: 20px;
        }
        .contact-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .contact-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #45a049;
        }
        .social-links a {
            margin-right: 15px;
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>

        <div class="contact-details">
            <p><strong>📍 Address:</strong> 123 Green Street, Blossom Town, FL 45678</p>
            <p><strong>📞 Phone:</strong> <a href="tel:+11234567890">+1 (123) 456-7890</a></p>
            <p><strong>✉️ Email:</strong> <a href="mailto:hello@yourshopname.com">hello@yourshopname.com</a></p>
            <p><strong>⏰ Business Hours:</strong><br>
                Monday to Friday: 9:00 AM – 6:00 PM<br>
                Saturday: 10:00 AM – 5:00 PM<br>
                Sunday: Closed
            </p>
        </div>

        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="/submit_contact" method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="social-links">
            <h3>Follow Us</h3>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
        </div>
    </div>
</body>
</html>
