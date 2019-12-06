<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
 <?php require_once 'partials/header.php'?>
<body>

<div class="container">
    <h4 class="col-md-12 text-right" style="margin-top: 50px;">Listagem de Teste</h4>

    <div class="row" style="margin: 20px 0">
        <?php require_once 'partials/menu.php' ?>
    </div>

    <table id="table" class="table">
        <thead>
        <tr>
            <th data-id="id" data-width="40px">ID de Teste</th>
            <th data-id="fullname">Nome</th>
            <th data-id="treated_datetime">Data de cadastro</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>ANTONIO NUNES</td>
                <td>01/10/2005</td>
            </tr>
            <tr>
                <td>2</td>
                <td>TANCREDO NEVES</td>
                <td>02/09/2019</td>
            </tr>
            <tr>
                <td>3</td>
                <td>MARCELA NOVAES</td>
                <td>18/07/2018</td>
            </tr>
            
            <tr>
                <td>4</td>
                <td>MARCOS JAQUISON</td>
                <td>02/10/2005</td>
            </tr>
        </tbody>        
    </table>
</div>

</body>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.5.1/b-colvis-1.5.1/cr-1.4.1/fc-3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.5.1/b-colvis-1.5.1/cr-1.4.1/fc-3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.12/sorting/date-eu.js"></script>
<script src="/application/public/js/testtable.js"></script>
</html>