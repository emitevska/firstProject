<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Records Page</title>

    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <h1>This is the Records Page!</h1>
    <ul>
        <li>{{ $listOfRecords[0]["name"] }} The id is {{$listOfRecords[0]["id"] }}. <a href="/record/{{ $listOfRecords[0]['id'] }}">go to record</a>
        <li>{{ $listOfRecords[1]["name"]}} The id is {{$listOfRecords[1]["id"] }}</li>
        <li>{{ $listOfRecords[2]["name"]}} The id is {{$listOfRecords[2]["id"] }}</li>
    </ul>
    </body>
</html>
