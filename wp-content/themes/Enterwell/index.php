<?php get_header();
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />

    <div class="form">
        <p class="main-text">Prijava na Enterwell nagradnu igru!</p>
        <p class="sub-text">U ovoj igri svi dobivamo. Ti ćeš izraditi ovu cool formu, a mi ćemo imati priliku vidjeti
            tvoje zlatne linije koda</p>

        <div class="inner-shadow-rectangle">
            <img src="wp-content/themes/Enterwell/assets/i_3.svg" class="I-3-EW">
            <form id="form" enctype="multipart/form-data" method="POST"
                  action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

                <div id="drop-area" class="dragdrop-rectangle">
                    <img id="upload-icon" class="upload-icon"
                         src="wp-content/themes/Enterwell/assets/Upload_icon.svg">
                    <p id="upload-icon-text" class="drag-drop-file">Povuci i ispusti datoteku
                        kako bi započeo prijenos
                        <br><br> ili
                        <input type="file" name="img" id="fileElem" class="input-file" multiple accept=".png, .jpg, .pdf">
                        <label for="fileElem" class="text-style-1">Pretražite računalo</label>
                        <br><br><br><br><br><br>
                        <label class="formats">PODRŽANI FORMATI</label>
                        <br>
                        <label class="formats">pdf, png, jpg</label>
                    </p>
                </div>

                <div class="input1 regular-inputs">
                    <input name="bill_number" class="input-text-shared input1-text" required
                           placeholder="Broj racuna*">
                </div>

                <div class="divider"></div>

                <fieldset class="input2 legend-inputs">
                    <legend class="placeholder">Ime*</legend>
                    <input name="name" class="input-text-shared input2-text" required placeholder="Ime*">
                </fieldset>


                <fieldset class="input3 legend-inputs">
                    <legend class="placeholder">Prezime*</legend>
                    <input name="lastname" class="input-text-shared input3-text" required placeholder="Prezime*">

                </fieldset>

                <fieldset class="input4 regular-inputs">
                    <input name="address" class="input-text-shared input4-text" required placeholder="Adresa*">
                </fieldset>

                <fieldset class="input5 regular-inputs">
                    <input name="house_number" class="input-text-shared input5-text" placeholder="Kućni broj*">
                </fieldset>

                <fieldset class="input6 legend-inputs">
                    <legend class="placeholder">Mjesto*</legend>
                    <input name="place" class="input-text-shared input6-text" required placeholder="Mjesto*">
                </fieldset>

                <fieldset class="input7 regular-inputs">
                    <input name="zip_code" class="input-text-shared input7-text" required placeholder="Poštanski broj*">
                </fieldset>

                <fieldset class="input8 legend-inputs">
                    <legend class="placeholder">Država*</legend>
                    <select class="input-text-shared input6-text flag-class" name="state" required>
                        <option value="HRV">🇭🇷 Hrvatska</option>
                        <option value="BiH">🇧🇦 BiH</option>
                    </select>
                    <img class="arrow-down" src="wp-content/themes/Enterwell/assets/arrow-down.svg">
                </fieldset>

                <fieldset class="input9 regular-inputs">
                    <input name="contact" type="text" class="input-text-shared input9-text" required placeholder="Kontakt telefon*">
                </fieldset>

                <fieldset class="input10 regular-inputs">
                    <input name="email" type="email" class="input-text-shared input10-text" required placeholder="Email*">
                </fieldset>

                <input type="hidden" name="action" value="enterwell_application_form">


                <button type="submit" class="submit-button" style="border: 0; background: transparent">
                    <img src="wp-content/themes/Enterwell/assets/button.svg" style="cursor:pointer;" alt="submit"/>
                </button>
            </form>
        </div>
    </div>
<?php wp_footer(); ?>