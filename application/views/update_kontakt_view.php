
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="<?php echo BASE_URL. "stranica/try_update" ?>">
                <div class="form-group">
                    <label for="">Ime:</label>
                    <input type="text" class="form-control" placeholder="Ime" name="ime" value="<?php echo $kontakt['ime']; ?>"> 
                </div>
                <div class="form-group">
                    <label for="">Prezime:</label>
                    <input type="text" class="form-control" placeholder="Prezime" name="prezime" value="<?php echo $kontakt['prezime']; ?>"> 
                </div>
                <div class="form-group">
                    <label for="">Broj telefona:</label>
                    <input type="text" class="form-control" placeholder="brojTelefona"
                           name="telefon" value="<?php echo $kontakt['broj_telefona']; ?>"> 
                </div>
                 <div class="form-group">
                 <label for="">Opis</label>
                  <textarea class="form-control" name="opis" placeholder="opis prijatelja"> <?php echo $kontakt['opis_poznanstva']; ?>  </textarea>
                </div>
                <div class="form-group">
                     <input class="btn btn-default" type="submit" value="potvrdi" name="sacuvaj" > 
                </div>
                <div class="form-group">
                    <input class="btn btn-default" type="hidden" value="<?php echo $kontakt['id']; ?>" name="id"> 
                </div>
            </form>
            <?php echo "<pre>", print_r($kontakt) ,"</pre>"; ?>
        </div>
    </div>
</div>