<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mess Menu</title>
        <style>
            body {
                text-align: justify;
                background: #30E8BF;
              
                background: -webkit-linear-gradient(to right, #FF8235, #30E8BF);
                
                background: linear-gradient(to right, #FF8235, #30E8BF);
               
            }
            tr{
                transition: all .2s ease-in-out;
                cursor: pointer;
            }
          tr:hover{
              background-color: #72c9d8;
              transform: scale(1.02);
              box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2)
          }
            table {
                border-radius: 10px;
                width: 100%;
                border-collapse: collapse;
                border: 4px solid black;
                color: black;
            }

            th,
            td {
                border: 1px solid black;
                padding: 18px;
                text-align: justify;
            }

            .heading {
                color: black;
                font-size: 32px;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            /* @media only screen and (max-width: 700px) {
                table{
                    width: 90%;
                }
            } */
        </style>
    </head>

    <body class="background">
        <h1 align="center" class="heading">Mess Menu</h1>
        <table align="center">
            <tr>
                <th>
                    Day
                </th>
                <th>
                    Breakfast
                </th>
                <th>
                    Lunch
                </th>
                <th>
                    Evening Snacks
                </th>
                <th>
                    Dinner
                </th>
            </tr>
            <tr>
                <th>
                    Time
                </th>
                <th>
                    7:30 AM to 8:45 AM
                </th>
                <th>
                    12:35 PM to 1:20 PM
                </th>
                <th>
                    4:10 PM to 5:10 PM
                </th>
                <th>
                    7:30 PM to 9:00 PM
                </th>
            </tr>
            <tr>
                <td>
                    Monday
                </td>
                <td>
                    Poha,Jalebi and Milk
                </td>
                <td>
                    Kadi,Dal,Aaloo,Chawal,Roti
                </td>
                <td>
                    Tea and Toast
                </td>
                <td>
                    Sev Tamatar Sabzi/Tuvar Dal,Chawal,Achaar,Papad,Chapaati
                </td>
            </tr>
            <tr>
                <td>
                    Tuesday
                </td>
                <td>
                    Bread - Jam and Milk
                </td>
                <td>
                    Rajma/Loki Tamatar Sabzi,Jeera Rice,pickle,Chapati
                </td>
                <td>
                    Tea and Masala Bun
                </td>
                <td>
                    Soya Badi Sabzi, Veg Pulao, Dahi puri/papdi, Noodles Fried Rice,Dal Fry
                </td>
            </tr>
            <tr>
                <td>
                    Wednesday
                </td>
                <td>
                    Poha and Milk
                </td>
                <td>
                    Tuvar Dal, Mix Veg, Chawal, Chapati
                </td>
                <td>
                    Kachori and Chai
                </td>
                <td>
                    Matar-Paneer sabzi,Dal,Pickle and Salad, Chapaati
                </td>
            </tr>
            <tr>
                <td>
                    Thursday
                </td>
                <td>
                    Puri, Aaloo-Tamatar Sabzi,Milk
                </td>
                <td>
                    Dal Makhani,Dal,Chawal,Roti,Pickle,Fruit-Apple
                </td>
                <td>
                    Tea and Biscuit
                </td>
                <td>
                    Dal,Gobi-Aaloo Sabzi,Chapaati,Papad,Kheera and Custard
                </td>
            </tr>
            <tr>
                <td>
                    Friday
                </td>
                <td>
                    Poha,Jalebi,Milk,Fruit-Banana
                </td>
                <td>
                    Kadi Pakoda,Aaloo Pata-Gobi Sabzi,Chawal,Chapaati
                </td>
                <td>
                    Pasta and Chai
                </td>
                <td>
                    Bhindi Masala/Aaloo Bhurji,Dal,Rice,Chapati,Pickle,Salad
                </td>
            </tr>
            <tr>
                <td>
                    Saturday
                </td>
                <td>
                    Idli-Sambhar, Milk
                </td>
                <td>
                    Chole Sabzi,Raita,Jeera Rice,Papad,Pickle and Puri
                </td>
                <td>
                    Chai and Biscuit
                </td>
                <td>
                    Mix Veg,Palak-aaloo,Dal,Rice,Chapati,Pickle
                </td>
            </tr>
            <tr>
                <td>
                    Sunday
                </td>
                <td>
                    Bread-Jam,Milk
                </td>
                <td>
                    Aaloo Paratha,Methi Paratha,Dahi,Dal-Rice,Pickle,Chutni
                </td>
                <td>
                    Samosa and Chai
                </td>
                <td>
                    Loki Sabzi,Channa Dal,Chapati,Pickle,Kheer/Custard/Suji Halwa
                </td>
            </tr>
        </table>
    </body>

</html>