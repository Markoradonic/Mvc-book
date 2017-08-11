<div class="container">
    <div class="row top-50">
        <div>Ime kontakta: <?php echo $kontakt['ime']; ?></div>
        <div>prezime: <?php echo $kontakt['prezime']; ?></div>
        <div>broj telefona: <?php echo $kontakt['broj_telefona']; ?></div>
        <div>opis poznanstva: <?php echo $kontakt['opis_poznanstva']; ?></div>
    </div>
    <div class="top-50">
        <a href="<?php echo BASE_URL . "stranica/izbrisi/" .$kontakt['id'];?>" class="btn btn-danger">Izbrisi</a> 
        <a href="<?php echo BASE_URL . "Stranica/uredi/" . $kontakt['id'];?>" class="btn btn-default">Uredi</a>
    </div>
</div>