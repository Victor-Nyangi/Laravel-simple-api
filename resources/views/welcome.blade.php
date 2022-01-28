<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Candidate Summaries</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }

        .flex {
            display: flex
        }

        .justify-center {
            justify-content: center
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .items-center {
            align-items: center
        }

        .text-sm {
            font-size: .875rem
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .relative {
            position: relative
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        @media (min-width:640px) {
            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:items-center {
                align-items: center
            }
        }

        .min-h-screen {
            min-height: 100vh
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.6em;
            font-family: sans-serif;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }


        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;

        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.hover {
            font-weight: bold;
            color: #009879;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex justify-center min-h-screen bg-gray-100 sm:items-center py-4 pt-0">
        <div class="mx-auto sm:px-6">
            <div class="flex justify-center sm:justify-start pt-0">
                <h1>Candidate Summary</h1>
            </div>
            <div>
                <p>A summary table of fundraising information for a specified politician.</p>
            </div>

            <div>

                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Candidate Name</th>
                            <th>Cid</th>
                            <th>Cycle</th>
                            <th>State</th>
                            <th>Party</th>
                            <th>Chamber</th>
                            <th>First elected</th>
                            <th>Next election</th>
                            <th>Total</th>
                            <th>Spent</th>
                            <th>Cash on hand</th>
                            <th>Debt</th>
                            <th>Origin</th>
                            <th>Source</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($summaries as $summary)
                        <tr>
                            <td>{{ $summary->id }}</td>
                            <td>
                                {{ $summary->cand_name }}
                            </td>
                            <td>
                                {{ $summary->cid }}
                            </td>
                            <td>
                                {{ $summary->cycle }}
                            </td>
                            <td>
                                {{ $summary->state }}
                            </td>
                            <td>
                                {{ $summary->party }}
                            </td>
                            <td>
                                {{ $summary->chamber }}
                            </td>
                            <td>
                                {{ $summary->first_elected }}
                            </td>
                            <td>
                                {{ $summary->next_election }}
                            </td>
                            <td>
                                {{ $summary->total }}
                            </td>
                            <td>
                                {{ $summary->spent }}
                            </td>
                            <td>
                                {{ $summary->cash_on_hand }}
                            </td>
                            <td>
                                {{ $summary->debt }}
                            </td>
                            <td>
                                {{ $summary->origin }}
                            </td>
                            <td>
                                {{ $summary->source }}
                            </td>
                            <td>
                                {{ $summary->last_updated }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 text-left">
                    <div class="flex items-center">
                        <span style="margin-right:2rem; color:crimson">
                            By Victor Gichui
                        </span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>