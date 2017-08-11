    
<div class="container">
    <div class="row top-50">
        <div class="col-md-6">
            <form method="post" action="<?php echo BASE_URL . "stranica/try_insert" ?>">
                <div class="form-group">
                    <label for="">Ime:</label>
                    <input type="text" class="form-control" placeholder="Ime" name="ime"> 
                </div>
                <div class="form-group">
                    <label for="">Prezime:</label>
                    <input type="text" class="form-control" placeholder="Prezime" name="prezime"> 
                </div>
                <div class="form-group">
                    <label for="">Broj telefona:</label>
                    <input type="text" class="form-control" placeholder="brojTelefona"
                    name="telefon"> 
                </div>
                 <div class="form-group">
                 <label for="">Opis</label>
                  <textarea class="form-control" name="opis" placeholder="opis prijatelja"></textarea>
                </div>
                <div class="form-group">
                     <input class="btn btn-default" type="submit" value="potvrdi" name="sacuvaj" > 
                </div>
                
            </form>
        </div>
        <div class="col-md-6">
            <ul>
                
               
                <?php foreach ($kontakti_set as $kontakt):?>
                <li><a href="<?php echo BASE_URL . "stranica/kontakt/" .$kontakt['id']; ?>"><?php echo  $kontakt['ime'] ." " . $kontakt['prezime'];  ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
</div>