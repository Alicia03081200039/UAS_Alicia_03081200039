<link rel="stylesheet" type="text/css" href="/css/style.css">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<script type="text/javascript" src="/js/app.js"></script>

<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>


<!DOCTYPE html>
<html>

<head></head>

<p> Nama    : Alicia </p>
<p> Nim     :  03081200039 </p>
<p> Kelas   : 20SI2 </p>
<img src="images/logo.png" alt="">

<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Transaksi ID</th>
            <th scope="col">Nama Subscription</th>
          </tr>
        </thead>
        <tbody>
    <?php
          $rows = \DB::select('select Transaksi_ID, NamaSubscription from langganan');
          foreach($rows as $row)
          echo'<tr>
            <td scope="row">'.$row->Transaksi_ID.'</td>
            <td>'.$row->NamaSubscription.'</td>
            <td></td>
          </tr>';
          ?>
             </tbody>
        </table>
</body>
</html>