<?php
include "koneksi.php";
session_start();

if (!isset($_SESSION['role'])) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashboardSiswa</title>

    <style>
        /* Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding: 2rem 2rem 0 2rem;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: white;
            padding: 1.5rem 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        header h1 {
            font-size: 1.5rem;
            letter-spacing: 1px;
            font-weight: 700;
        }

        header p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        header a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin-left: 10px;
            padding: 5px 12px;
            border: 1px solid white;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        header a:hover {
            border: 1px solid white;
            background: white;
            color: red;
        }

        /* Navigation */
        nav {
            background: white;
            margin-bottom: 1.5rem;
            padding: 0.75rem;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            overflow-x: scroll;
            scrollbar-width: none;
        }

        nav a {
            text-decoration: none;
            color: #4b5563;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        nav a:hover {
            background-color: #eff6ff;
            color: #2563eb;
        }

        nav a:focus {
            background-color: #2563eb;
            color: white;
        }

        /* Frame */
        iframe {
            width: 100%;
            height: 100vh;
            border: none;
            border-radius: 12px;
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        /* Footer */
        footer {
            margin-top: auto;
            padding: 2rem 0 1rem;
            color: #6b7280;
            font-size: 0.85rem;
            text-align: center;
        }

        footer button {
            background: none;
            border: 1px dashed #1e40af;
            border-radius: 3px;
            transition: 0.3s;
            cursor: pointer;
            padding: 5px 6px;
        }

        footer b {
            color: #1e40af;
        }

        footer button:hover {
            background-color: #1e40af;
        }

        footer button:hover b {
            color: white;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 10;
            right: 0;
            left: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.25);
        }

        @keyframes modalIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes modalOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .modal-content {
            background-color: white;
            padding: 10px 30px 30px;
            width: 80%;
            max-height: 80vh;
            border-radius: 16px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }

        .modalHeader {
            display: flex;
            justify-content: space-between;
            line-height: 3rem;
        }

        .modalHeader h2 {
            color: #1e40af;
        }

        .modalText {
            display: flex;
            overflow-y: auto;
            gap: 1rem;
            padding-top: 10px;
        }

        .modal-content img {
            width: 13rem;
            height: 13rem;
            flex-shrink: 0;
        }

        .modal-content p {
            overflow-y: auto;
            max-height: 60vh;
            padding-right: 10px;
            text-indent: 30px;
            text-align: justify;
        }

        .modal-content a {
            text-decoration: none;
            color: #4b5563;
        }

        .modal-content a:hover {
            font-weight: bold;
            color: #2563eb;
        }

        .close {
            font-size: 35px;
            cursor: pointer;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            header {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            nav {
                justify-content: start;
            }

            .modal-content img {
                margin-right: 0;
            }

            .modal-content p {
                overflow-y: visible;
            }

            .modalText {
                flex-direction: column;
                align-items: center;
                overflow-y: auto;
                flex: 1;
                min-height: 0;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>DASHBOARD SISWA</h1>

        <p>
            Anda login sebagai:
            <b>
                <?php echo $_SESSION["name"] ?> -
                <?php echo $_SESSION["role"] ?>
            </b>

            <a href="index.php">Logout</a>
        </p>
    </header>



    <nav>
        <a href="./siswa/datasiswa.php" target="contents">Data Siswa</a>
        <a href="./kelas/datakelas.php" target="contents">Data Kelas</a>
        <a href="./prodi/dataprodi.php" target="contents">Data Prodi</a>
        <a href="./mapel/datamapel.php" target="contents">Data Mapel</a>
        <a href="./guru/dataguru.php" target="contents">Data Guru</a>
        <a href="./mengajar/datamengajar.php" target="contents">Data Mengajar</a>
        <a href="./nilai/datanilai.php" target="contents">Data Nilail</a>
    </nav>

    <iframe src="./siswa/datasiswa.php" name="contents"></iframe>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modalHeader">
                <h2>Profil Developer</h2>
                <span class="close"> × </span>
            </div>
            <div class="modalText">
                <img src="./public/Ari.webp" alt="">
                <p>
                    Halo, perkenalkan namaku <b>Muhammad Ari Zainal Mutaqin</b>, aku lahir dan tinggal di Majalengka.
                    Saat ini sedang menempuh pendidikan di SMK Negeri 1 Maja jurusan RPL. Dan ini merupakan web dinamis
                    bertema dashboard data sekolah yang merupakan salah satu tugas yang harus di kerjakan peserta didik.
                    <br />
                    Jika kalian punya saran/kritik ataupun hanya ingin mengobrol, jangan
                    sungkan-sungkan untuk mengirimkan pesan email atau pergi ke media
                    sosial saya :D
                    <br />
                    <b>Email</b> :
                    <a href="mailto:azm8216@gmail.com">azm8216@gmail.com</a>
                    <br />
                    <b>Instagram</b> :
                    <a href="https://www.instagram.com/arizm258" target="_blank">@arizm258</a>
                    <br />
                    <b>Youtube</b> :
                    <a href="https://www.youtube.com/@M-Ari-ZM" target="_blank">@M-Ari-ZM</a>
                    <br />
                    <b>Github</b> :
                    <a href="https://github.com/M-Ari-ZM" target="_blank">M-Ari-ZM</a>
                </p>
            </div>
        </div>
    </div>

    <footer>
        Copyright &copy; 2026 | Created by <button id="myBtn"><b>Ari ZM</b></button>
    </footer>

    <script>
        let modal = document.getElementById("myModal");
        let btn = document.getElementById("myBtn");
        let span = document.getElementsByClassName("close")[0];

        btn.onclick = function () {
            modal.style.display = "flex";
            modal.style.animation = "modalIn 0.1s linear";
        };

        span.onclick = function () {
            modal.style.animation = "modalOut 0.3s linear";
            setTimeout(() => {
                modal.style.display = "none";
            }, 130);
        };

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.animation = "modalOut 0.1s linear";
                setTimeout(() => {
                    modal.style.display = "none";
                }, 80);
            }
        };
    </script>
</body>

</html>