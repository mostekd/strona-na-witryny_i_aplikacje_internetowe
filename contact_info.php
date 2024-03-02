<!-- contact_info.php -->
<div id="contactInfo" class="contact-container">
    <h3>Informacje Kontaktowe</h3>
    <p>Adres: ul. Szkolna 1 , 54-230 Gdańsk</p>
    <p>Telefon: 123-456-789</p>
    <p>Email: biblioteka@wesolaszkola.pl</p>

    <form class="formularz_kontaktowy">
        <label for="inquiryType">Typ zapytania:</label>
        <select id="inquiryType" name="inquiryType">
            <option value="null">--</option>
            <option value="Dostępność książki">Zapytanie o dostępność książki</option>
            <option value="Rezerwacja">Prośba o rezerwację</option>
            <option value="Inna sprawa">Inna sprawa</option>
        </select>
        <input type=text name="imie" placeholder="imię" id="imie" class="imie"></input>
        <input type=text name="nazwisko" placeholder="nazwisko" id="nazwisko" class="nazwisko"></input>
        <textarea type=text name="wiadomosc" placeholder="treść wiadomości" id="wiadomosc" class="wiadomosc"></textarea>
    </form>
</div>

<!-- strona zawiera formularz kontaktowy zdolny wysłać wiadomość e-mail na e-mail podany w punkcie nr 1 w opisie zadania (na potrzeby sprawdzenia działania funkcjonalności można zamienić na dawid-mostowski@o2.pl). 
Kopia wiadomości jest również wysyłana na adres klienta podany w formularzu. 
Formularz zawiera pola: rozwijaną listę z opcjami: “Zapytanie o dostępność książki”, “Prośba o rezerwację”, “Inna sprawa”, kolejne pola to imię, nazwisko i treść wiadomości, 
poniżej dwa przyciski wyślij i resetuj -->