<div class="pb-10">

    <!-- Überschrift -->
    <h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="">
        <a href="#eigene-email-einrichten" data-kt-scroll-toggle=""></a>
        Wie richte ich meine eigene E-Mail Adresse ein?
    </h1>
    <!-- Überschrift -->

    <!-- -->

    <!-- Text zur Überschrift -->
    <div class="py-5">

        <p>Schritt 1: Zuerst musst du die DNS Einträge aus der Tabelle bei deiner Domain hinterlegen.</p><br>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Name</th>
                <th scope="col">Ziel</th>
                <th scope="col">Priorität</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>A</td>
                <td>mail</td>
                <td>IPv4 von web01</td>
            </tr>
            <tr>
                <td>A</td>
                <td>webmail</td>
                <td>IPv4 von web01</td>
            </tr>
            <tr>
                <td>MX</td>
                <td>@</td>
                <td>mail.deinedomain.de</td>
                <td>10</td>
            </tr>
            </tbody>
        </table>

        <br><p>Schritt 2: Wenn du die DNS Einträge hinterlegt hast, musst du dich in <a href="https://vweb01.host-control.eu" target="_blank">Plesk</a> anmelden.</p>
        <br><p>Schritt 3: Als Nächstes musst du in der Navbar an der Seite auf E-Mail gehen (Siehe Bild).</p><br><img width="1100" src="https://cdn.jonas-budde.de/screenshots/NLjlAh3lDWhWwmwcOlcFkNS9L0fGOxFy.png"><br>
        <br><p>Schritt 4: Dort kannst du nun auf E-Mail Adresse erstellen gehen und eine gewünschte E-Mail Adresse erstellen. Wenn du auf dem im Screenshot gezeigten Button klickst, landest du direkt im Webmail Client und kannst dich dort einloggen. Andernfalls kannst du deine E-Mail Adresse auch in Outlook oder ähnlichen Programmen hinterlegen.</p><br><img width="1100" src="https://cdn.jonas-budde.de/screenshots/cDowJs9IZQp2eo9bxfzODiv6FsSTzkjr.png"><br>
        <br><p>Nun ist deine eigene E-Mail Adresse einsatzbereit.</p>

    </div>
    <!-- Text zur Überschrift -->
</div>

<!-- -->