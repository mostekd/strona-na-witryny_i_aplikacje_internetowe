<?php
    
    include('../DB/db_guestbook.php');
    $baza = new db_guestbook();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['option'])){
            if($_GET['option'] == 'sendMail'){
                include("../PHPMailer.php");
                $mail = new PHPMailer\PHPMailer\PHPMailer();
 
                $mail->PluginDir = "phpmailer/";
                $mail->From = $_GET['email']; //adres naszego konta
                $mail->FromName = $_GET['imie']." ".$_GET['nazwisko'];//nagłówek From
                $mail->Host = "poczta.o2.pl";//adres serwera SMTP
                $mail->Mailer = "smtp";
                $mail->Username = "dawid-mostowski@o2.pl";//nazwa użytkownika
                $mail->Password = "jleF9mY8fTwUedmGnN0m";//nasze hasło do konta SMTP
                $mail->SMTPAuth = true;
                $mail->SetLanguage("en", "phpmailer/language/");
                
                $mail->Subject = $_GET['inquiryType'];//temat maila
                
                // w zmienną $text_body wpisujemy treść maila
                $text_body = str_replace("\n.", "\n..", $_GET['wiadomosc']);
                
                $mail->Body = $text_body;
                // adresatów dodajemy poprzez metode 'AddAddress'
                $mail->AddAddress("dawid-mostowski@o2.pl","Dawid");
                $mail->AddAddress($_GET['email'],$_GET['imie']." ".$_GET['nazwisko']);
                
                if(!$mail->Send()){
                    echo "There has been a mail error <br>";
                    echo $mail->ErrorInfo."<br>";
                }

                // Clear all addresses and attachments
                $mail->ClearAddresses();
                $mail->ClearAttachments();
                echo "mail sent <br>";
            }
        }
    }
?>
<div id="contactInfo" class="contact-container">
    <h3>Informacje Kontaktowe</h3>
    <p>Adres: ul. Szkolna 1 , 54-230 Gdańsk</p>
    <p>Telefon: 123-456-789</p>
    <p>Email: biblioteka@wesolaszkola.pl</p>
    <br>
    <form class="formularz_kontaktowy" action="./index.php" method = "get">
        <label for="inquiryType">Typ zapytania:</label>
        <select class="contact_form_select" id="inquiryType" name="inquiryType">
            <option value="null" selected>--</option>
            <option value="Dostępność książki">Zapytanie o dostępność książki</option>
            <option value="Rezerwacja">Prośba o rezerwację</option>
            <option value="Inna sprawa">Inna sprawa</option>
        </select>
        <input type=text name="imie" placeholder="imię" id="imie" class="imie"></input>
        <input type=text name="nazwisko" placeholder="nazwisko" id="nazwisko" class="nazwisko"></input>
        <input type=email name="email" placeholder="adres e-mail" id="email" class="email"></input>
        <textarea type=text name="wiadomosc" placeholder="treść wiadomości" id="wiadomosc" class="wiadomosc"></textarea>
        <input type=hidden name="id" id="id" class="id" value='contactInfo'></input>
        <input type=hidden name="option" id="option" class="option" value='sendMail'></input>

        <button class="kontakt_button" type="submit">Wyślij</button>
        <button class="kontakt_button" type="reset">Resetuj</button>
    </form>
</div>
<!-- 
1. strona zawiera formularz kontaktowy zdolny wysłać wiadomość e-mail na e-mail biblioteka@wesolaszkola.pl (na potrzeby sprawdzenia działania funkcjonalności można zamienić na dawid-mostowski@o2.pl). 
Kopia wiadomości jest również wysyłana na adres klienta podany w formularzu. 
2. Po naciśnięciu przycisku wyślij wykonuje się czynność opisana w punkcie 1 -->