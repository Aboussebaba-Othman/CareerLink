
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CareerLink</title>
</head>
<body>
    <nav class="flex flex-wrap items-center justify-between p-3 bg-teal-200/20">
        <img src="../../assets/images/career.png" class="h-14 w-14" alt=""/>
        <div class="flex md:hidden">
            <button id="hamburger">
            <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="48" height="48" />
            <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="48" height="48" />
            </button>
        </div>
        <a href="auth/register.php"
            class="toggle hidden md:flex w-full md:w-auto px-4 py-2 text-right bg-teal-900 hover:bg-teal-500 text-white md:rounded">Create
            Account
        </a>
    </nav>
<script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
          navToggle.item(i).classList.toggle("hidden");
        }
      };
</script>
</body>
</html>