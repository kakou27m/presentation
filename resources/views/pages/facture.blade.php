<div class="container">
    <div class="head">
        <img class="img-fluid" src="images/logo_odi.png" width="80" alt="#">
        <div class="header">
            <p class="phead"> <span class="text-danger">ORDYRA</span>MULTISERVICES </p>
            <p class="p_head">Fourniture de : produits agricoles - produits d’élevages - services d’appui</p>
        </div>
    </div>
    <hr style="color: #92b409; width:200%; margin-left:-100px;">
    <div class="subHeader">
        <div class="subleft">
            <p>Date : {{date('d-m-Y'). '  à  '.date('H:i:s')}} </p>
        </div>
        <div class="subright">
            <h5>Nom : {{$data['fullname']}} </h5>
            <h5>Contact : {{$data['phone']}} </h5>
            <h5>E-mail : {{$data['email']}}</h5>
            <h5>Lieu de Livraison: {{$data['delivery_location']}} </h5>
        </div>
    </div>
    <div class="table">
        <p>Référence : {{'P-'.date('d'.substr(date('m'),1,1).'Y')}} </p>
        <h3>PROFORMA</h3>
        <table class="productTable">
            <thead>
                <tr>
                    <th style="width: 15%">Quantité</th>
                    <th style="width: 35%">Désignation</th>
                    <th style="width: 25%">Prix unitaire HT</th>
                    <th style="width: 25%">Prix total HT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $item)
                    <tr>
                        <td> {{$item->quantity}} </td>
                        <td> {{$item->name}} </td>
                        <td> {{number_format($item->price,2,',','.').' FCFA'}} </td>
                        <td> {{number_format(($item->price*$item->quantity),2,',','.'). ' FCFA'}} </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        <table class="tAmount">
            <tbody>
                <tr>
                    <td>Total Hors Taxe</td>
                    <td class="value"> {{number_format($price,2,',','.')}} FCFA</td>
                </tr>
                <tr>
                    <td>TVA 20%</td>
                    <td class="value">{{number_format($price*0.2,2,',','.')}} FCFA</td>
                </tr>
                <tr>
                    <td>Total TTC</td>
                    <td class="value">{{number_format(($price*0.2)+$price,2,',','.')}} FCFA</td>
                </tr>
            </tbody>
        </table>
        <div class="thank">
            <p>
                En votre aimable règlement,
                <p>Cordialement.</p>
            </p>
        </div>
        <div class="footer">
            <hr style="color: #92b409; width:200%; margin-left:-100px;">
            <p>CC:1961154 Y, Régime: IS- RCCM: CI-ABJ-2019-A-21094, Compte Bancaire: 06110120000BOA,</p>
            <p>Adresse : 25 BP 2271 Abidjan 25, Tél : +22522440609, Mobile:+225 59608513, Email : ordyrainfo@gmail.com</p>
            <p>RCI- Abidjan Cocody Danga Rue Lepic, Immeuble Eden Rock, 4e étage porte 96</p>
        </div>
    </div>
</div>

<style>
    .head{
        display: inline-block;
    }
   
    .header{
        display: inline-block;
        /* margin-top: px; */
        margin-left: 50;
        margin-right: 0px;
        font-family: 'Times New Roman';
    }
    p{
        margin: 0px;
        padding: 0px;
    }
    .phead{
        margin-left: 70px;
        font-size: 20px;
        font-weight: 900;
        margin-bottom: 4px;
    }
    .text-danger{
        color: #c62821;
    }
    .p_head{
        font-size: 15px;
        font-style: italic;
    }
    .subHeader{
        width: 100%;
        font-family: arial;
    }
    .subleft{
        display: inline-block;
        width: 28%;
        margin-left: 0px;
        margin-top: 5%;
    }
    .subright{
        display: inline-block;
        float: right;
        width: 48%;
        border: 1px solid #2C3A47;
        border-radius: 10px;
        margin-top: -2%;
        text-align: left;
        padding: 10px;
    }
    .subright h4,h5{
        margin: 0px;
        font-weight: normal;
        padding: 5px;
    }
    .table{
        position: absolute;
        top: 26%;
    }
    .table h3{
        margin-bottom: 30px;
    }
    .productTable{
        justify-content: center;
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, Helvetica, sans-serif; 
    }
    .productTable thead{
        background-color: #2C3A47;
    }
    .productTable thead tr th{
        border: 1px solid #bdc3c7;
        padding: 10px;
        color: #fff;
        text-align: center;
        margin-right: 3px;
    }
    .productTable tbody tr{
    }
    .productTable tbody tr td{
        border: 1px solid #bdc3c7;
        text-align: center;
    }
    .home{
        margin-top: 20px;
    }
    .tAmount{
        padding-top: 20px;
        float: right;
    }
    .tamount tbody tr{
        margin: 10px;
        padding-right:5px ;
    }
    .tAmount tbody tr td:first-child{
        padding-right: 10px;
        text-align: center;
    }
    .value {
        border-collapse: collapse;
        border: none;
        border-right: 1px solid #bdc3c7;
        border-top: 1px solid #bdc3c7;
        border-bottom: 1px solid #bdc3c7;
        padding: 10px;
        margin: 2px;
    }
    .thank{
        position: fixed;
        top: 75%;
    }
    .footer{
        position: fixed;
        top: 80%;
        text-align: center;
        font-size: 12px;
    }
</style>