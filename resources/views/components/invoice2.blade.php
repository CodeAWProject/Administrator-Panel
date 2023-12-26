<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aloha!</title>

<style type="text/css">
    html,
        
        
        .invoice-2 table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        .invoice-2 table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        .invoice-2 table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
</style>

</head>
<body>

    <div class="invoice-2">
        <table class="order-details">
            <thead>
                <tr>
                    <th width="50%" colspan="2" class="text-end company-data">
                        <span>Klant</span> <br>
                        <span>T.a.v.</span> <br>
                        <span>Straat + Huisnummer</span> <br>
                        <span>Postcode + Woonplaatst</span> <br>
                    </th>
                    <th width="50%" colspan="2" class="text-end company-data">
                        <span><b>Bedrijfsnaam</b></span> <br>
                        <span>Straat + Huisnummer</span> <br>
                        <span>Postcode + Woonplaatst</span> <br>
                        <span>KvK</span> <br>
                        <span>Btw:</span> <br>
                        <span>Bank:</span> <br>
                    </th>
                </tr>
                
            </thead>
            
        </table>
    
        <table>
            <thead>
                
                <tr class="bg-blue">
                    <th>Aantal</th>
                    <th>Omschrijving</th>
                    <th>Bedrag</th>
                    <th>Btw</th>
                    <th>Totaal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="10%">1x</td>
                    <td>
                        Mi Note 7
                    </td>
                    <td width="10%">$14000</td>
                    <td width="10%">0%</td>
                    <td width="15%" class="fw-bold">$14000</td>
                </tr>
                <tr>
                    <td width="10%">2x</td>
                    <td>
                        Vivo V19
                    </td>
                    <td width="10%">$699</td>
                    <td width="10%">21%</td>
                    <td width="15%" class="fw-bold">$699</td>
                </tr>
                <tr>
                    <td colspan="4" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :</td>
                    <td colspan="1" class="total-heading">$14699</td>
                </tr>
            </tbody>
        </table>
    </div>
    

</body>
</html>