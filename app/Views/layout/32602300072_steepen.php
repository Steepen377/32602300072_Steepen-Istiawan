<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layouting</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #e0f7f4;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background-color: #1e1e1e;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .navbar a {
            color: #1de9b6;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #e0f7f4;
        }

        /* Banner */
        .banner {
            background-color: #1a1a1a;
            padding: 30px 40px;
            border-left: 3px solid #1de9b6;
        }

        .name {
            font-size: 1.8rem;
            font-weight: bold;
            color: #1de9b6;
        }

        .description {
            font-size: 1.1rem;
            color: #b2dfdb;
        }

        /* About */
        .about {
            padding: 40px;
        }

        .about-me h1 {
            font-size: 2rem;
            color: #64ffda;
            margin-bottom: 10px;
        }

        .about-me p {
            font-size: 1.1rem;
            color: #b2dfdb;
            line-height: 1.6;
        }

        /* Experience */
        .experience h2 {
            font-size: 1.5rem;
            color: #1de9b6;
            margin-top: 40px;
        }

        .about-experience-list table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: transparent;
            border: 2px solid #1de9b6;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 255, 204, 0.08);
        }

        .about-experience-list th,
        .about-experience-list td {
            border: 1px solid #1de9b6;
            padding: 12px;
            text-align: center;
            font-size: 0.95rem;
            color: #e0f7f4;
            background-color: transparent;
        }

        .about-experience-list th {
            font-weight: bold;
        }

        .about-experience-list tr:nth-child(even) td {
            background-color: rgba(255, 255, 255, 0.03);
        }
        .about-experience-list tr:hover td {
            background-color: rgba(29, 233, 182, 0.1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar ul {
                flex-direction: column;
                gap: 10px;
            }

            .banner,
            .about {
                padding: 20px;
            }

            .about-me h1,
            .experience h2 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar-page">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">PORTOFOLIO</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul>
                <li>Linkedin</li>
                <li>Whatsapp</li>
                <li>Github</li>
                <li>Instagram</li>
            </ul>
        </div>
    </div>

    <div class="banner">
        <span class="name">
            Steepen Istiawan
        </span><br>
        <span class="description">
            Mahasiswa Angkatan 2023
        </span>
    </div>

    <?= $this->renderSection("content") ?>
</body>

</html>
