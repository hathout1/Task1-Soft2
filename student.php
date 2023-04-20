<?php
$Student = [
    [
        'id' => '1',
        'Name' => 'Alaa mohamed',
        'phone' => '011111685449',
        'Section' => 'CS'


    ],
    [
        'id' => '2',
        'Name' => 'Asmaa_mohmed',
        'phone' => '010235486975',
        'Section' => 'is'

    ],
    [
        'id' => '3',
        'Name' => 'sandy_ragep',
        'phone' => '012591136876',
        'Section' => 'IT'

    ],
    [
        'id' => '4',
        'Name' => 'Ali_mohamed',
        'phone' => '01011125951',
        'Section' => 'IT'


    ],
    [
        'id' => '5',
        'Name' => 'sama_Ebrahem',
        'phone' => '010235486975',
        'Section' => 'CS'


    ],
    [
        'id' => '6',
        'Name' => 'nada_parkat',
        'phone' => '010235486975',
        'Section' => 'CS'

    ],
    [
        'id' => '7',
        'Name' => 'Abdelrahman_Hamed',
        'phone' => '011279824256',
        'Section' => 'CS'

    ],
    [
        'id' => '8',
        'Name' => 'Asmaa_mahmoud',
        'phone' => '010235486975',
        'Section' => 'IS'

    ],
    [
        'id' => '9',
        'Name' => 'Ragaa_ahmed',
        'phone' => '011279824256',
        'Section' => 'CS'

    ],
    [
        'id' => '10',
        'Name' => 'sanaa_rady',
        'phone' => '010235486975',
        'Section' => 'IS'

    ], [
        'id' => '11',
        'Name' => 'Alaa_mohamed',
        'phone' => '011279824256',
        'Section' => 'CS'

    ],
    [
        'id' => '12',
        'Name' => 'maha_Ali',
        'phone' => '010235486975',
        'Section' => 'IT'

    ], [
        'id' => '13',
        'Name' => 'Abdelrahman_hathot',
        'phone' => '011279824256',
        'Section' => 'CS'

    ],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        table,
        th,
        tr,
        td {
            border: solid 2px black;
            color: black;
            padding: 5px;
            margin-bottom: 35px;

        }

        h1 {
            color:gray;
            text-align: center;

        }

        .all_student_list {
            background-color:white;
            width: 100%;
            height: 100vh;
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .all_student_list a {
            font-size: 20px;
            color: black;
            background-color: gray;
            padding: 8px 35px;
            border-radius: 15px;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="all_student_list">
        <div class="list">

            <h1>List of Student </h1>
            <table>
                <tr>
                    <th>index</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Section</th>
                </tr>
                <?php
                foreach ($Student as $data) {
                ?>
                    <tr>
                        <td><?php echo "{$data["id"]}" ?></td>
                        <td><?php echo "{$data["Name"]}" ?></td>
                        <td><?php echo "{$data["phone"]}" ?></td>
                        <td><?php echo "{$data["Section"]}" ?></td>
                    </tr>
                <?php } ?>
            </table>
            <a href="./index.html">back To Page</a>
        </div>
    </div>
</body>