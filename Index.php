<?php
include '../components/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div style="display: flex;justify-content: center;align-items: center;width: 100%;padding: 5vw;">
        <div>
            <h3 style="font-size: 4vw;margin-right: .5rem; margin: 30px 0; line-height: 90px;">Effortless Logistics,
                Exceptional Service Parcel-jet</h3>
            <button class="main-txt-btn shipment_form" name="shipment_form">Start your first shipment</button>
            <script>
                shipment_form = document.querySelector('.shipment_form');
                shipment_form.addEventListener("click", () => {
                    <?php
                    if (isset($_SESSION['logined'])) {
                        ?>
                        location.href = "Make_shipment.php";
                        <?php
                    } else {
                        ?>
                        location.href = "Login.php";
                        <?php
                    }
                    ?>
                })
            </script>

        </div>
        <img style="width: 40vw;" src="../images/hero.svg" alt="">
    </div>
    <script>

        let navOpen = false
        document.getElementById("nav-btn").addEventListener("click", (e) => {
            if (navOpen) {
                document.getElementById("nav-btn").innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>`
                document.getElementById("side-nav").style.left = "-1000px"
                navOpen = false
            } else {
                document.getElementById("nav-btn").innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                    </svg>`
                document.getElementById("side-nav").style.left = "0"
                navOpen = true
            }
        })
        let openProfile = false
        document.getElementById("profile").addEventListener("click", (e) => {
            if (openProfile) {
                document.getElementById("profile-svg").innerHTML = `<svg id="profile-svg" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#FFFFFF"
                class="bi bi-person-badge" viewBox="0 0 16 16">
                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                    d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z" />
            </svg>`
                document.getElementById("profile-ul").style.top = "-1000px"
                openProfile = false
            } else {
                document.getElementById("profile-svg").innerHTML = `<svg id="profile-svg" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#FFFF00"
                class="bi bi-person-badge" viewBox="0 0 16 16">
                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                    d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z" />
            </svg>`
                document.getElementById("profile-ul").style.top = "4rem"
                openProfile = true
            }
        })
    </script>
</body>

</html>