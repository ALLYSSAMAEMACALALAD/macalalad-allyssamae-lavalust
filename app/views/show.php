<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>User Management System</title>

<style>
    /* =========================
       IMPORT FONT
    ========================= */

    @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&family=Orbitron:wght@500;600;700&display=swap');


    /* =========================
       ROOT COLORS
    ========================= */

    :root {
        --bg-dark: #070b14;
        --bg-card: #0d1424;
        --bg-card-light: #111b2e;

        --primary: #00a8ff;
        --primary-dark: #0077b6;
        --cyan: #00e5ff;

        --text-main: #f1f5f9;
        --text-muted: #94a3b8;

        --border: rgba(0, 168, 255, 0.18);
        --border-light: rgba(255, 255, 255, 0.08);

        --danger: #ef4444;
    }


    /* =========================
       RESET
    ========================= */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    /* =========================
       BODY
    ========================= */

    body {
        min-height: 100vh;
        padding: 40px;

        font-family: "JetBrains Mono", monospace;
        color: var(--text-main);

        background:
            radial-gradient(
                circle at top right,
                rgba(0, 168, 255, 0.12),
                transparent 30%
            ),
            radial-gradient(
                circle at bottom left,
                rgba(0, 229, 255, 0.08),
                transparent 30%
            ),
            var(--bg-dark);
    }


    /* =========================
       BACKGROUND GRID
    ========================= */

    body::before {
        content: "";

        position: fixed;
        inset: 0;

        pointer-events: none;

        background-image:
            linear-gradient(
                rgba(255, 255, 255, 0.025) 1px,
                transparent 1px
            ),
            linear-gradient(
                90deg,
                rgba(255, 255, 255, 0.025) 1px,
                transparent 1px
            );

        background-size: 40px 40px;

        mask-image:
            linear-gradient(
                to bottom,
                black,
                transparent
            );

        z-index: -1;
    }


    /* =========================
       CONTAINER
    ========================= */

    .container {
        max-width: 1250px;
        margin: auto;

        padding: 28px;

        background:
            linear-gradient(
                145deg,
                rgba(17, 27, 46, 0.95),
                rgba(8, 13, 25, 0.95)
            );

        border: 1px solid var(--border);
        border-radius: 18px;

        box-shadow:
            0 0 0 1px rgba(255, 255, 255, 0.02),
            0 25px 60px rgba(0, 0, 0, 0.55),
            0 0 40px rgba(0, 168, 255, 0.05);

        backdrop-filter: blur(15px);
    }


    /* =========================
       HEADER
    ========================= */

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;

        gap: 20px;

        margin-bottom: 30px;
        padding-bottom: 22px;

        border-bottom:
            1px solid var(--border-light);
    }


    /* =========================
       SYSTEM TITLE
    ========================= */

    .system-title h2 {
        font-family: "Orbitron", sans-serif;

        font-size: 22px;
        letter-spacing: 1px;

        color: var(--text-main);
    }


    .system-title p {
        margin-top: 7px;

        color: var(--text-muted);

        font-size: 12px;
    }


    .system-title span {
        color: var(--cyan);
    }


    /* =========================
       SEARCH
    ========================= */

    .search-box {
        position: relative;
        width: 360px;
    }


    .search-box input {
        width: 100%;

        padding:
            13px
            18px
            13px
            48px;

        border:
            1px solid var(--border-light);

        border-radius: 10px;

        outline: none;

        background:
            rgba(5, 10, 20, 0.8);

        color:
            var(--text-main);

        font-family:
            "JetBrains Mono",
            monospace;

        font-size: 13px;

        transition:
            0.25s ease;
    }


    .search-box input::placeholder {
        color:
            #64748b;
    }


    .search-box input:focus {
        border-color:
            var(--primary);

        box-shadow:
            0 0 0 3px
            rgba(0, 168, 255, 0.12),
            0 0 20px
            rgba(0, 168, 255, 0.12);
    }


    .search-icon {
        position: absolute;

        left: 16px;
        top: 50%;

        transform:
            translateY(-50%);

        color:
            var(--cyan);

        font-size:
            16px;
    }


    /* =========================
       TABLE WRAPPER
    ========================= */

    .table-wrapper {
        overflow-x: auto;

        border:
            1px solid var(--border-light);

        border-radius:
            12px;

        background:
            rgba(5, 10, 20, 0.35);
    }


    /* =========================
       TABLE
    ========================= */

    table {
        width: 100%;

        border-collapse:
            collapse;

        min-width:
            750px;
    }


    /* =========================
       TABLE HEADER
    ========================= */

    thead {
        background:
            linear-gradient(
                90deg,
                rgba(0, 168, 255, 0.13),
                rgba(0, 229, 255, 0.05)
            );
    }


    th {
        text-align:
            left;

        padding:
            16px 18px;

        color:
            #7dd3fc;

        font-family:
            "Orbitron",
            sans-serif;

        font-size:
            11px;

        letter-spacing:
            1px;

        font-weight:
            600;

        border-bottom:
            1px solid var(--border);
    }


    /* =========================
       TABLE DATA
    ========================= */

    td {
        padding:
            17px 18px;

        border-bottom:
            1px solid
            rgba(255, 255, 255, 0.05);

        color:
            #cbd5e1;

        font-size:
            13px;
    }


    /* =========================
       TABLE ROW
    ========================= */

    tbody tr {
        transition:
            0.25s ease;
    }


    tbody tr:hover {
        background:
            linear-gradient(
                90deg,
                rgba(0, 168, 255, 0.08),
                rgba(0, 229, 255, 0.03)
            );

        box-shadow:
            inset 3px 0
            0 var(--primary);
    }


    /* =========================
       ID STYLE
    ========================= */

    td:first-child {
        color:
            var(--cyan);

        font-weight:
            600;
    }


    /* =========================
       USERNAME
    ========================= */

    td:last-child {
        color:
            #60a5fa;

        font-weight:
            600;
    }


    /* =========================
       PAGINATION
    ========================= */

    .pagination {
        display:
            flex;

        justify-content:
            flex-end;

        align-items:
            center;

        gap:
            7px;

        margin-top:
            24px;

        flex-wrap:
            wrap;
    }


    /* =========================
       PAGINATION INFO
    ========================= */

    .pagination-info {
        margin-right:
            auto;

        color:
            var(--text-muted);

        font-size:
            12px;
    }


    #pageNumbers {
        display:
            flex;

        gap:
            7px;
    }


    /* =========================
       PAGINATION BUTTON
    ========================= */

    .pagination button {
        min-width:
            40px;

        height:
            40px;

        padding:
            0 14px;

        border:
            1px solid
            var(--border-light);

        border-radius:
            8px;

        cursor:
            pointer;

        background:
            #0b1220;

        color:
            #cbd5e1;

        font-family:
            "JetBrains Mono",
            monospace;

        font-size:
            12px;

        font-weight:
            600;

        transition:
            0.2s ease;
    }


    .pagination button:hover:not(:disabled) {
        border-color:
            var(--primary);

        color:
            white;

        background:
            rgba(0, 168, 255, 0.12);

        box-shadow:
            0 0 15px
            rgba(0, 168, 255, 0.15);
    }


    /* =========================
       ACTIVE PAGE
    ========================= */

    .pagination button.active {
        background:
            linear-gradient(
                135deg,
                var(--primary),
                var(--primary-dark)
            );

        border-color:
            var(--primary);

        color:
            white;

        box-shadow:
            0 0 18px
            rgba(0, 168, 255, 0.35);
    }


    /* =========================
       DISABLED BUTTON
    ========================= */

    .pagination button:disabled {
        opacity:
            0.35;

        cursor:
            not-allowed;
    }


    /* =========================
       FOOTER
    ========================= */

    .footer {
        margin-top:
            25px;

        padding-top:
            20px;

        border-top:
            1px solid
            var(--border-light);

        text-align:
            center;

        color:
            #64748b;

        font-size:
            11px;

        letter-spacing:
            1px;
    }


    .footer span {
        color:
            var(--cyan);

        font-weight:
            bold;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 900px) {

        body {
            padding:
                20px;
        }


        .header {
            flex-direction:
                column;

            align-items:
                stretch;
        }


        .search-box {
            width:
                100%;
        }

    }


    @media (max-width: 600px) {

        body {
            padding:
                12px;
        }


        .container {
            padding:
                18px;

            border-radius:
                12px;
        }


        .system-title h2 {
            font-size:
                17px;
        }


        .pagination {
            justify-content:
                center;
        }


        .pagination-info {
            width:
                100%;

            text-align:
                center;

            margin-right:
                0;
        }

    }
</style>

</head>

<body>
<div class="container">


    <!-- =========================
         HEADER
    ========================= -->

    <div class="header">

        <div class="system-title">

            <h2>
                USER <span>DATABASE</span>
            </h2>

            <p>
                SYSTEM ACCESS // USER MANAGEMENT
            </p>

        </div>


        <!-- SEARCH -->

        <div class="search-box">

            <span class="search-icon">
                🔍
            </span>

            <input
                type="text"
                id="searchInput"
                placeholder="Search users..."
                onkeyup="searchEmployee()">

        </div>

    </div>



    <!-- =========================
         USERS TABLE
    ========================= -->

    <div class="table-wrapper">

        <table id="employeeTable">

            <thead>

                <tr>
                    <th>USER ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL ADDRESS</th>
                    <th>USERNAME</th>
                </tr>

            </thead>


            <tbody>

                <?php foreach ($users as $user): ?>

                    <tr>

                        <td>
                            #<?= htmlspecialchars($user['id']); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($user['firstname']); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($user['lastname']); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($user['email']); ?>
                        </td>

                        <td>
                            @<?= htmlspecialchars($user['username']); ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>



    <!-- =========================
         PAGINATION
    ========================= -->

    <div class="pagination">

        <div
            class="pagination-info"
            id="paginationInfo">
        </div>


        <button
            type="button"
            id="prevPage"
            onclick="changePage(-1)">

            ← PREV

        </button>


        <div id="pageNumbers"></div>


        <button
            type="button"
            id="nextPage"
            onclick="changePage(1)">

            NEXT →

        </button>

    </div>



    <!-- =========================
         FOOTER
    ========================= -->

    <div class="footer">

        DEVELOPED BY
        <span>KEAN HAROLD B. MAGSINO</span>

        <br><br>

        © 2026 USER MANAGEMENT SYSTEM

    </div>


</div>



<!-- =========================
     SEARCH + PAGINATION SCRIPT
========================= -->

<script>

    const rowsPerPage = 5;

    let currentPage = 1;


    /* =========================
       GET FILTERED ROWS
    ========================= */

    function getFilteredRows() {

        let input = document
            .getElementById("searchInput")
            .value
            .toLowerCase()
            .trim();


        let rows = Array.from(
            document.querySelectorAll(
                "#employeeTable tbody tr"
            )
        );


        return rows.filter(row => {

            return row.innerText
                .toLowerCase()
                .includes(input);

        });

    }


    /* =========================
       DISPLAY TABLE
    ========================= */

    function displayTable() {

        let allRows = Array.from(
            document.querySelectorAll(
                "#employeeTable tbody tr"
            )
        );


        let filteredRows =
            getFilteredRows();


        let totalPages = Math.max(
            1,
            Math.ceil(
                filteredRows.length /
                rowsPerPage
            )
        );


        if (currentPage > totalPages) {

            currentPage = totalPages;

        }


        /* HIDE ALL ROWS */

        allRows.forEach(row => {

            row.style.display = "none";

        });


        /* CALCULATE ROWS */

        let start =
            (currentPage - 1) *
            rowsPerPage;


        let end =
            start +
            rowsPerPage;


        /* SHOW CURRENT PAGE */

        filteredRows
            .slice(start, end)
            .forEach(row => {

                row.style.display = "";

            });


        renderPagination(
            totalPages,
            filteredRows.length
        );

    }


    /* =========================
       RENDER PAGINATION
    ========================= */

    function renderPagination(
        totalPages,
        totalRows
    ) {

        let pageNumbers =
            document.getElementById(
                "pageNumbers"
            );


        let paginationInfo =
            document.getElementById(
                "paginationInfo"
            );


        let prevPage =
            document.getElementById(
                "prevPage"
            );


        let nextPage =
            document.getElementById(
                "nextPage"
            );


        pageNumbers.innerHTML = "";


        /* NO USERS */

        if (totalRows === 0) {

            paginationInfo.textContent =
                "NO USERS FOUND";

        }


        /* USERS EXIST */

        else {

            let start =
                (currentPage - 1) *
                rowsPerPage + 1;


            let end =
                Math.min(
                    currentPage *
                    rowsPerPage,
                    totalRows
                );


            paginationInfo.textContent =
                `SHOWING ${start}-${end} OF ${totalRows} USERS`;

        }


        /* PREVIOUS BUTTON */

        prevPage.disabled =
            currentPage === 1;


        /* NEXT BUTTON */

        nextPage.disabled =
            currentPage === totalPages;


        /* PAGE NUMBERS */

        for (
            let i = 1;
            i <= totalPages;
            i++
        ) {

            let button =
                document.createElement(
                    "button"
                );


            button.type =
                "button";


            button.textContent =
                i;


            if (i === currentPage) {

                button.classList.add(
                    "active"
                );

            }


            button.onclick =
                function() {

                    currentPage = i;

                    displayTable();

                };


            pageNumbers.appendChild(
                button
            );

        }

    }


    /* =========================
       CHANGE PAGE
    ========================= */

    function changePage(direction) {

        let filteredRows =
            getFilteredRows();


        let totalPages =
            Math.max(
                1,
                Math.ceil(
                    filteredRows.length /
                    rowsPerPage
                )
            );


        currentPage +=
            direction;


        if (currentPage < 1) {

            currentPage = 1;

        }


        if (currentPage > totalPages) {

            currentPage =
                totalPages;

        }


        displayTable();

    }


    /* =========================
       SEARCH
    ========================= */

    function searchEmployee() {

        currentPage = 1;

        displayTable();

    }


    /* =========================
       INITIAL LOAD
    ========================= */

    displayTable();

</script>
```

</body>

</html>
