<?php
if (! defined('SHODANAPIKEY')) exit;
?>


    <?php
        require_once("views/navbar.php");
    ?>
       
    <title>Results for "<?=htmlspecialchars($query)?>" | Blunder</title>

    <?php foreach($results->matches as $result):?>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body bg-light">
                    <h2>
                        <a href="index.php?page=ip&amp;ip=<?=urlencode($result->ip_str)?>">
                        <?=htmlspecialchars($result->ip_str)?>
                        </a>
                    </h2>
                    <p id="isp">ISP: <?=htmlspecialchars($result->isp)?></p>
                    <h4 id="port">Port: <?=htmlspecialchars($result->port)?></h4>
                    <?php foreach($result->hostnames as $hostname):?>
                    <p id="hostnames">Hostnames: <?=htmlspecialchars($hostname)?></p>
                    <?php endforeach;?>
                    <p id="location">Location: <?=htmlspecialchars($result->location->country_name)?></p>
                    <p id="timestamp">Added: <?=htmlspecialchars($result->timestamp)?></p>
                </div>
            </div>
        </div>
    </div>
    

    

    <?php endforeach;?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>


    



