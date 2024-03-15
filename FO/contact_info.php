<?php
include('./header.php');
?>
<!-- contact_info.php -->
<div id="contactInfo" class="contact-container">
    <h3>Informacje Kontaktowe</h3>
    <p>Adres: ul. Szkolna 1 , 54-230 Gdańsk</p>
    <p>Telefon: 123-456-789</p>
    <p>Email: biblioteka@wesolaszkola.pl</p>
    <br>
    <form class="formularz_kontaktowy">
        <label for="inquiryType">Typ zapytania:</label>
        <select class="contact_form_select" id="inquiryType" name="inquiryType">
            <option value="null">--</option>
            <option value="Dostępność książki">Zapytanie o dostępność książki</option>
            <option value="Rezerwacja">Prośba o rezerwację</option>
            <option value="Inna sprawa">Inna sprawa</option>
        </select>
        <input type=text name="imie" placeholder="imię" id="imie" class="imie"></input>
        <input type=text name="nazwisko" placeholder="nazwisko" id="nazwisko" class="nazwisko"></input>
        <input type=email name="e-mail" placeholder="adres e-mail" id="email" class="email"></input>
        <textarea type=text name="wiadomosc" placeholder="treść wiadomości" id="wiadomosc" class="wiadomosc"></textarea>

        <button class="kontakt_button" type="submit">Wyślij</button>
        <button class="kontakt_button" type="reset">Resetuj</button>
    </form>
</div>
<?php
    include('end_html.php')
?>
<!-- 
1. strona zawiera formularz kontaktowy zdolny wysłać wiadomość e-mail na e-mail biblioteka@wesolaszkola.pl (na potrzeby sprawdzenia działania funkcjonalności można zamienić na dawid-mostowski@o2.pl). 
Kopia wiadomości jest również wysyłana na adres klienta podany w formularzu. 
2. Po naciśnięciu przycisku wyślij wykonuje się czynność opisana w punkcie 1 -->