<html>
<?php include_once '../head.php'; ?>
<body>
<div class="container">
    <div class="col-xs-12">
        <div class="row">
            <?php include_once '../navs/manager.php'; ?>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="row">
            <h1>Manager</h1>
        </div>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Verlofaanvragen</div>
            <!-- Table -->
            <table class="table">
                <tr>
                    <th colspan="2">Werknemer</th>
                    <th colspan="2">Verlofaanvraagdata</th>
                    <th >Akkoord</th>
                </tr>
                <tr>
                    <td>voornaam</td>
                    <td>achternaam</td>
                    <td>dd/mm/jjjj</td>
                    <td>dd/mm/jjjj</td>
                    <td><input type="checkbox" name="denied"> Afgekeurd <input type="checkbox" name="approved"> Goedgekeurd </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <div class="form-group col-xs-12 col-md-2 col-md-offset-10">
                    <button type="submit" class="col-xs-12 btn btn-primary">
                        <div class="row">Goedgekeurd</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>