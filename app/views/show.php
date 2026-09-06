<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #08080d;
            --bg-secondary: #0d0d14;
            --panel: #111119;
            --panel-hover: #161620;

            --pink: #ff2d95;
            --pink-light: #ff65b3;
            --pink-dark: #d91673;

            --purple: #9b5cff;
            --cyan: #56e0ff;

            --text: #f5f5f7;
            --text-secondary: #a4a4b2;
            --text-muted: #666674;

            --border: #24242f;
            --border-pink: rgba(255, 45, 149, 0.4);
        }

        body {
            min-height: 100vh;
            background:
                linear-gradient(rgba(255, 45, 149, 0.025) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 45, 149, 0.025) 1px, transparent 1px),
                var(--bg);
            background-size: 40px 40px;

            color: var(--text);
            font-family: 'Inter', sans-serif;
        }

        /* =========================
           TOP NAVIGATION
        ========================= */

        .topbar {
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 6%;
            background: rgba(8, 8, 13, 0.92);

            border-bottom: 1px solid var(--border);

            position: sticky;
            top: 0;
            z-index: 100;

            backdrop-filter: blur(12px);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 34px;
            height: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid var(--pink);
            color: var(--pink);

            font-family: 'JetBrains Mono', monospace;
            font-weight: 600;

            box-shadow: 0 0 15px rgba(255, 45, 149, 0.18);
        }

        .brand-text {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .brand-text span {
            color: var(--pink);
        }

        .system-status {
            display: flex;
            align-items: center;
            gap: 8px;

            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            color: var(--text-secondary);

            letter-spacing: 0.5px;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            background: #35e88b;
            border-radius: 50%;

            box-shadow: 0 0 10px rgba(53, 232, 139, 0.7);
        }

        /* =========================
           MAIN CONTAINER
        ========================= */

        .container {
            width: 88%;
            max-width: 1250px;

            margin: 0 auto;
            padding: 55px 0 40px;
        }

        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;

            gap: 30px;
            margin-bottom: 35px;
        }

        .eyebrow {
            color: var(--pink);

            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;

            letter-spacing: 2px;
            text-transform: uppercase;

            margin-bottom: 10px;
        }

        h1 {
            font-family: 'Space Grotesk', sans-serif;

            font-size: clamp(32px, 5vw, 52px);
            line-height: 1;

            letter-spacing: -2px;
        }

        .page-description {
            color: var(--text-secondary);

            font-size: 14px;
            margin-top: 13px;

            max-width: 500px;
        }

        /* =========================
           SEARCH
        ========================= */

        .search-box {
            width: 310px;

            display: flex;
            align-items: center;
            gap: 10px;

            padding: 13px 16px;

            background: var(--panel);

            border: 1px solid var(--border);

            transition: 0.25s ease;
        }

        .search-box:focus-within {
            border-color: var(--border-pink);

            box-shadow:
                0 0 0 3px rgba(255, 45, 149, 0.06),
                0 0 20px rgba(255, 45, 149, 0.08);
        }

        .search-icon {
            color: var(--pink);

            font-family: 'JetBrains Mono', monospace;
            font-size: 18px;
        }

        .search-box input {
            width: 100%;

            border: none;
            outline: none;

            background: transparent;

            color: var(--text);

            font-family: 'Inter', sans-serif;
            font-size: 13px;
        }

        .search-box input::placeholder {
            color: var(--text-muted);
        }

        /* =========================
           TABLE CARD
        ========================= */

        .table-card {
            background: rgba(17, 17, 25, 0.88);

            border: 1px solid var(--border);

            overflow: hidden;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .table-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 18px 22px;

            border-bottom: 1px solid var(--border);

            background: rgba(255, 255, 255, 0.015);
        }

        .table-title {
            display: flex;
            align-items: center;
            gap: 10px;

            font-family: 'Space Grotesk', sans-serif;
            font-weight: 600;
            font-size: 14px;
        }

        .table-title::before {
            content: "";
            width: 7px;
            height: 7px;

            background: var(--pink);

            box-shadow: 0 0 10px rgba(255, 45, 149, 0.7);
        }

        .table-code {
            color: var(--text-muted);

            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
        }

        /* =========================
           TABLE
        ========================= */

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #0d0d14;
        }

        th {
            padding: 15px 22px;

            color: var(--text-muted);

            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;

            text-align: left;
            text-transform: uppercase;

            letter-spacing: 1px;

            white-space: nowrap;

            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 17px 22px;

            color: var(--text-secondary);

            font-size: 13px;

            border-bottom: 1px solid rgba(36, 36, 47, 0.65);

            white-space: nowrap;
        }

        tbody tr {
            transition: 0.2s ease;
        }

        tbody tr:hover {
            background: rgba(255, 45, 149, 0.035);
        }

        tbody tr:hover td {
            color: var(--text);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        /* =========================
           USER ID
        ========================= */

        .user-id {
            color: var(--pink);

            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
        }

        /* =========================
           USER NAME
        ========================= */

        .user-name {
            display: flex;
            align-items: center;
            gap: 10px;

            color: var(--text);
            font-weight: 500;
        }

        .avatar {
            width: 30px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    rgba(255, 45, 149, 0.25),
                    rgba(155, 92, 255, 0.25)
                );

            border: 1px solid rgba(255, 45, 149, 0.35);

            color: var(--pink-light);

            font-family: 'Space Grotesk', sans-serif;
            font-size: 11px;
            font-weight: 700;
        }

        /* =========================
           EMAIL
        ========================= */

        .email {
            color: var(--text-secondary);
        }

        /* =========================
           USERNAME
        ========================= */

        .username {
            color: var(--cyan);

            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
        }

        .username::before {
            content: "@";
            color: var(--text-muted);
        }

        /* =========================
           PAGINATION
        ========================= */

        .pagination-container {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 17px 22px;

            border-top: 1px solid var(--border);

            background: rgba(255, 255, 255, 0.012);
        }

        .pagination-info {
            color: var(--text-muted);

            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .pagination button {
            min-width: 32px;
            height: 32px;

            border: 1px solid var(--border);

            background: transparent;

            color: var(--text-secondary);

            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;

            cursor: pointer;

            transition: 0.2s ease;
        }

        .pagination button:hover:not(:disabled) {
            border-color: var(--pink);
            color: var(--pink);

            background: rgba(255, 45, 149, 0.05);
        }

        .pagination button.active {
            background: var(--pink);
            border-color: var(--pink);

            color: #ffffff;

            box-shadow:
                0 0 15px rgba(255, 45, 149, 0.25);
        }

        .pagination button:disabled {
            opacity: 0.25;
            cursor: not-allowed;
        }

        /* =========================
           NO RESULTS
        ========================= */

        .no-results {
            text-align: center;

            padding: 50px 20px;

            color: var(--text-muted);

            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            margin-top: 45px;
            padding: 25px 0;

            border-top: 1px solid var(--border);

            display: flex;
            justify-content: space-between;
            align-items: center;

            color: var(--text-muted);

            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;

            letter-spacing: 0.5px;
        }

        .footer-name {
            color: var(--pink);
        }

        .footer-tag {
            color: var(--text-muted);
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .topbar {
                padding: 0 5%;
            }

            .container {
                width: 92%;
                padding-top: 35px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-box {
                width: 100%;
            }

            .table-card {
                overflow: hidden;
            }

            .pagination-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            footer {
                flex-direction: column;
                gap: 10px;
                align-items: flex-start;
            }
        }

        @media (max-width: 500px) {

            .brand-text {
                font-size: 13px;
            }

            .system-status {
                display: none;
            }

            h1 {
                font-size: 36px;
            }

            th,
            td {
                padding-left: 15px;
                padding-right: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         TOP BAR
    ========================= -->

    <nav class="topbar">

        <div class="brand">

            <div class="brand-icon">
                U
            </div>

            <div class="brand-text">
                USER<span>.SYS</span>
            </div>

        </div>

        <div class="system-status">

            <span class="status-dot"></span>

            SYSTEM ONLINE

        </div>

    </nav>


    <!-- =========================
         MAIN
    ========================= -->

    <main class="container">

        <!-- PAGE HEADER -->

        <section class="page-header">

            <div>

                <div class="eyebrow">
                    USER MANAGEMENT / DATABASE
                </div>

                <h1>
                    User Database
                </h1>

                <p class="page-description">
                    View and manage registered users in the system.
                </p>

            </div>


            <!-- SEARCH -->

            <div class="search-box">

                <span class="search-icon">
                    ⌕
                </span>

                <input
                    type="text"
                    id="searchInput"
                    placeholder="Search users..."
                    onkeyup="searchEmployee()"
                >

            </div>

        </section>


        <!-- =========================
             TABLE
        ========================= -->

        <section class="table-card">

            <div class="table-header">

                <div class="table-title">
                    REGISTERED USERS
                </div>

                <div class="table-code">
                    /users
                </div>

            </div>


            <div class="table-wrapper">

                <table id="usersTable">

                    <thead>

                        <tr>

                            <th>
                                User ID
                            </th>

                            <th>
                                First Name
                            </th>

                            <th>
                                Last Name
                            </th>

                            <th>
                                Email Address
                            </th>

                            <th>
                                Username
                            </th>

                        </tr>

                    </thead>


                    <tbody id="userTableBody">

                        <?php if (!empty($users)): ?>

                            <?php foreach ($users as $user): ?>

                                <tr>

                                    <!-- USER ID -->

                                    <td>
                                        <span class="user-id">
                                            #<?= htmlspecialchars($user['id']); ?>
                                        </span>
                                    </td>


                                    <!-- FIRST NAME -->

                                    <td>

                                        <div class="user-name">

                                            <div class="avatar">

                                                <?= strtoupper(
                                                    substr(
                                                        htmlspecialchars($user['firstname']),
                                                        0,
                                                        1
                                                    )
                                                ); ?>

                                            </div>

                                            <?= htmlspecialchars($user['firstname']); ?>

                                        </div>

                                    </td>


                                    <!-- LAST NAME -->

                                    <td>
                                        <?= htmlspecialchars($user['lastname']); ?>
                                    </td>


                                    <!-- EMAIL -->

                                    <td>

                                        <span class="email">
                                            <?= htmlspecialchars($user['email']); ?>
                                        </span>

                                    </td>


                                    <!-- USERNAME -->

                                    <td>

                                        <span class="username">
                                            <?= htmlspecialchars($user['username']); ?>
                                        </span>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>

                                <td colspan="5">

                                    <div class="no-results">
                                        NO USERS FOUND
                                    </div>

                                </td>

                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>


            <!-- =========================
                 PAGINATION
            ========================= -->

            <div class="pagination-container">

                <div
                    class="pagination-info"
                    id="paginationInfo">
                </div>


                <div
                    class="pagination"
                    id="pagination">
                </div>

            </div>

        </section>


        <!-- =========================
             FOOTER
        ========================= -->

        <footer>

            <div>
                SYSTEM // USER MANAGEMENT
            </div>

            <div>
                DEVELOPED BY
                <span class="footer-name">
                    ALLYSSA MAE MACALALAD
                </span>
            </div>

        </footer>

    </main>


    <!-- =========================
         JAVASCRIPT
    ========================= -->

    <script>

        const rowsPerPage = 5;

        let currentPage = 1;


        /* =========================
           GET FILTERED ROWS
        ========================= */

        function getFilteredRows() {

            const searchValue =
                document
                    .getElementById("searchInput")
                    .value
                    .toLowerCase()
                    .trim();

            const rows =
                Array.from(
                    document.querySelectorAll(
                        "#userTableBody tr"
                    )
                );

            return rows.filter(row => {

                const text =
                    row.textContent.toLowerCase();

                return text.includes(searchValue);

            });

        }


        /* =========================
           DISPLAY TABLE
        ========================= */

        function displayTable() {

            const allRows =
                Array.from(
                    document.querySelectorAll(
                        "#userTableBody tr"
                    )
                );

            const filteredRows 
                getFilteredRows();


            /*
             * Hide all rows first
             */

            allRows.forEach(row => {

                row.style.display = "none";

            });


            /*
             * If no results
             */

            if (filteredRows.length === 0) {

                document.getElementById("pagination").innerHTML = "";

                document.getElementById("paginationInfo").textContent =
                    "0 USERS";

                return;

            }


            /*
             * Calculate pages
             */

            const totalPages =
                Math.ceil(
                    filteredRows.length / rowsPerPage
                );


            /*
             * Make sure current page is valid
             */

            if (currentPage > totalPages) {

                currentPage = totalPages;

            }

            if (currentPage < 1) {

                currentPage = 1;

            }


            /*
             * Determine visible rows
             */

            const start =
                (currentPage - 1) * rowsPerPage;

            const end =
                start + rowsPerPage;


            filteredRows
                .slice(start, end)
                .forEach(row => {

                    row.style.display = "";

                });


            /*
             * Pagination
             */

            renderPagination(
                totalPages,
                filteredRows.length
            );

        }


        /* =========================
           PAGINATION
        ========================= */

        function renderPagination(totalPages, totalRows) {

            const pagination =
                document.getElementById("pagination");

            pagination.innerHTML = "";


            /*
             * Previous button
             */

            const prevButton =
                document.createElement("button");

            prevButton.textContent = "‹";

            prevButton.disabled =
                currentPage === 1;

            prevButton.onclick = function () {

                changePage(-1);

            };

            pagination.appendChild(prevButton);


            /*
             * Page numbers
             */

            for (
                let i = 1;
                i <= totalPages;
                i++
            ) {

                const pageButton =
                    document.createElement("button");

                pageButton.textContent = i;


                if (i === currentPage) {

                    pageButton.classList.add("active");

                }


                pageButton.onclick = function () {

                    currentPage = i;

                    displayTable();

                };


                pagination.appendChild(pageButton);

            }


            /*
             * Next button
             */

            const nextButton =
                document.createElement("button");

            nextButton.textContent = "›";

            nextButton.disabled =
                currentPage === totalPages;

            nextButton.onclick = function () {

                changePage(1);

            };

            pagination.appendChild(nextButton);


            /*
             * Pagination information
             */

            const start =
                (currentPage - 1) * rowsPerPage + 1;

            const end =
                Math.min(
                    currentPage * rowsPerPage,
                    totalRows
                );


            document.getElementById(
                "paginationInfo"
            ).textContent =
                `${start}-${end} OF ${totalRows} USERS`;

        }


        /* =========================
           CHANGE PAGE
        ========================= */

        function changePage(direction) {

            currentPage += direction;

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
           INITIALIZE
        ========================= */

        displayTable();

    </script>

</body>

</html>