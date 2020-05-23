<?php
// Write Single Line to CSV

// $newRecord = [
//     'bastard',
//     12345,
//     'John',
//     'Snow'
// ];

// $filenameToWrite="files/usernameSingle.csv"; // new file

// $handle = fopen($filenameToWrite, "w");
// fputcsv($handle, $newRecord);
// fclose($handle);


// *********************************************************************************
// Write Array of data into csv file

    $dataToWrite = [
        [
            "Sharon Chavez",
            78,
            1.57
        ],
        [
            "Lila Wilder",
            104,
            1.65
        ],
        [
            "Soto Ward",
            61,
            1.02
        ],
        [
            "Erma Navarro",
            93,
            1.86
        ],
        [
            "Ferrell Donaldson",
            81,
            1.32
        ],
        [
            "Foster Charles",
            88,
            1.31
        ]
    ];

    // 
    $filenameToWrite="files/persons.csv";  

    // Open file for writing ("w" will overwrite the file format)

    $handle = fopen($filenameToWrite, "w");
    // We create a CSV file Header ( 1st line )
    $header = ['Name', "Mass", "Height"];

    fputcsv($handle, $header );

    foreach ($dataToWrite as $dataArray) {
        // Write Array of data into csv file
        fputcsv($handle, $dataArray);
    }
    
    fclose($handle);

    
