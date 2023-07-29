<!DOCTYPE html>
<html>

<head>

    <title>BabySummary</title>
    <style>
        body {
            font-family: 'Rubik', sans-serif;

            font-size: 10pt;
        }

        h1 {
            font-size: 22pt;
        }

        table {
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #777;
            padding: 2px;
        }
    </style>
</head>
<body>
    <p style="text-align: center">

        <b >Newborn Baby Records <br>
            Batasan, Tubigon, Bohol <br>
            Tel: 09606765143</b>

    </p> <br> <br>

    <h1 style="background-color: rgb(56, 56, 56); color: white; padding: 15px">Baby Infromation</h1>
    <div style="text-align: center">
        <h1 style="font-size: 20px; text-center">Name: {{$client->name}}</h1>
        <h1 style="font-size: 20px; text-center">Email: {{$client->email}}</h1>
        <h1 style="font-size: 20px; text-center">Address: {{$client->address}}</h1>
        <h1 style="font-size: 20px; text-center">Phone: {{$client->phone}}</h1>
        <h1 style="font-size: 20px; text-center">Born Date: {{$client->born_date}}</h1>
        <h1 style="font-size: 20px; text-center">Doctor: {{$client->doctor}}</h1>
        <h1 style="font-size: 20px; text-center">Hospital: {{$client->hospital}}</h1>
        <br> <br> <br> <br>
        <div style="font-size: 20px;">
            A newborn baby record is a valuable tool for parents and health providers to monitor the baby’s well-being and to identify any potential issues or risks. It is also a legal document that can be used to prove the baby’s identity and citizenship. Parents should keep the newborn baby record in a safe place and bring it with them whenever they visit a health facility or a government office.
            A newborn baby record is a useful document that records the baby’s birth and health information. It also acts as a legal document that confirms the baby’s identity and citizenship. Parents should safeguard the newborn baby record and carry it with them when they visit a health facility or a public office.
            A newborn baby record is a helpful document that shows the baby’s health and birth details. It also functions as a legal document that verifies the baby’s identity and citizenship. Parents should protect the newborn baby record and have it with them when they go to a health service or a government office.


            <br> <br> <br> <br>
            <div>
                Parent Signature: <br>
                _________________
            </div>
        </div>
    </div>


</body>
</html>
