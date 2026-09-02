<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fb;
            padding: 40px;
            color: #1f2937;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            gap: 15px;
        }

        .header h2 {
            font-size: 24px;
            color: #111827;
            font-weight: 700;
        }


        /* =========================
           SEARCH
        ========================= */

        .search-box {
            position: relative;
            width: 350px;
        }

        .search-box input {
            width: 100%;
            padding: 12px 15px 12px 42px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            transition: 0.2s;
        }

        .search-box input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }


        /* =========================
           HEADER BUTTON
        ========================= */

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-btn {
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: 0.2s;
        }

        .header-btn:hover {
            transform: translateY(-1px);
        }


        /* =========================
           LOGOUT
        ========================= */

        .logout-btn {
            background: #dc2626;
        }

        .logout-btn:hover {
            background: #b91c1c;
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
            min-width: 700px;
        }

        thead {
            background: #f9fafb;
        }

        th {
            text-align: left;
            padding: 14px 16px;
            font-size: 13px;
            color: #6b7280;
            font-weight: 600;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 14px;
        }

        tbody tr {
            transition: 0.2s;
        }

        tbody tr:hover {
            background: #f9fafb;
        }


        /* =========================
           EMPLOYEE
        ========================= */

        .employee {
            display: flex;
            align-items: center;
            gap: 12px;
        }


        /* =========================
           PROFILE PICTURE
        ========================= */

        .avatar {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border-radius: 50%;

            background: #dbeafe;
            color: #2563eb;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;

            object-fit: cover;
            overflow: hidden;
        }

        img.avatar {
            display: block;
        }


        /* =========================
           NAME
        ========================= */

        .name {
            font-weight: 600;
        }

        .email {
            color: #6b7280;
            font-size: 13px;
            margin-top: 3px;
        }


        /* =========================
           ROLE
        ========================= */

        .role {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            background: #eff6ff;
            color: #2563eb;
            display: inline-block;
        }


        /* =========================
           PAGINATION
        ========================= */

        .pagination {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 6px;
            margin-top: 20px;
        }

        .pagination button {
            border: 1px solid #e5e7eb;
            background: #ffffff;
            color: #374151;
            min-width: 38px;
            height: 38px;
            padding: 0 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s;
        }

        .pagination button:hover:not(:disabled) {
            background: #f3f4f6;
        }

        .pagination button.active {
            background: #2563eb;
            color: #ffffff;
            border-color: #2563eb;
        }

        .pagination button:disabled {
            opacity: 0.45;
            cursor: not-allowed;
        }

        .pagination-info {
            margin-right: auto;
            color: #6b7280;
            font-size: 13px;
        }

        #pageNumbers {
            display: flex;
            gap: 6px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            body {
                padding: 20px;
            }

            .header {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                width: 100%;
            }

            .header-actions {
                justify-content: flex-end;
            }

        }


        @media (max-width: 600px) {

            body {
                padding: 15px;
            }

            .container {
                padding: 18px;
            }

            .header h2 {
                font-size: 20px;
            }

            .header-actions {
                width: 100%;
            }

            .header-btn {
                width: 100%;
                text-align: center;
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
            <!-- SEARCH -->

            <div class="search-box">

                <span class="search-icon">
                    🔍
                </span>

                <input
                    type="text"
                    id="searchInput"
                    placeholder="Search employee..."
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
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($users as $user): ?>

                        <tr>

                            <td>
                                <?= htmlspecialchars($user['id']); ?>
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
                                <?= htmlspecialchars($user['username']); ?>
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
                id="paginationInfo"></div>


            <button
                type="button"
                id="prevPage"
                onclick="changePage(-1)">

                Previous

            </button>


            <div id="pageNumbers"></div>


            <button
                type="button"
                id="nextPage"
                onclick="changePage(1)">

                Next

            </button>

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


            /* NO EMPLOYEES */

            if (totalRows === 0) {

                paginationInfo.textContent =
                    "No employees found";

            }


            /* EMPLOYEES EXIST */
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
                    `Showing ${start}-${end} of ${totalRows}`;

            }


            /* PREVIOUS BUTTON */

            prevPage.disabled =
                currentPage === 1;


            /* NEXT BUTTON */

            nextPage.disabled =
                currentPage === totalPages;


            /* PAGE NUMBERS */

            for (
                let i = 1; i <= totalPages; i++
            ) {

                let button =
                    document.createElement(
                        "button"
                    );


                button.type = "button";

                button.textContent = i;


                if (i === currentPage) {

                    button.classList.add(
                        "active"
                    );

                }


                button.onclick = function() {

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


            currentPage += direction;


            if (currentPage < 1) {

                currentPage = 1;

            }


            if (currentPage > totalPages) {

                currentPage = totalPages;

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


</body>

</html>