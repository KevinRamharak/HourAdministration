<html>
<body>
<div class="container">
    <?php include_once '../head.php'; ?>
    <?php include_once '../navs/manager.php'; ?>
    <div class="col-xs-12">
    </div>
    <div class="row">
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Goedkeuren verlofaanvragen</div>
        <!-- Table -->
        <table class="table">
            <table class="table">
                <tr>
                    <th colspan="2">Werknemer</th>
                    <th colspan="2">Verlofaanvraagdata</th>
                    <th >Akkoord</th>
                </tr>
                <?php
                require_once '../../../API/Registration_Holiday.class.php';

                $rh = new Registration_Holiday();

                $results = $rh->getPendingRequests();
                echo '<pre>';
                print_r($results);
                echo '</pre>';
                /*
                ?>
                <tr>
                    <td>voornaam</td>
                    <td>achternaam</td>
                    <td>dd/mm/jjjj</td>
                    <td>dd/mm/jjjj</td>
                    <td></td>
                </tr>
                */
                ?>
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
</body>
</html>