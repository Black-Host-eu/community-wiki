<div class="pb-10">

<!-- Überschrift -->
<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="">
  <a href="#docker" data-kt-scroll-toggle=""></a>
  Wie installiere ich Docker auf meinem KVM?
</h1>
<!-- Überschrift -->

<!-- -->

<!-- Text zur Überschrift -->
<div class="py-5">

  Unsere KVM-Server haben einige veraltet Debian Pakete, sollten Fehler auftreten, wo entweder man keine packete installieren kann oder der Status code 404 zurück kommt, führe folgende Befehl-Kombinationsmöglichkeiten durch!<br><br>

  <div class="highlight"> <!-- Start Copy Section -->
  <button class="highlight-copy btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Kopiere die folgenden Zeilen">
    Kopieren
  </button>
  <div class="highlight-code">
    <pre class=" language-bash" tabindex="0">
    <code class=" language-bash">
          <!-- Code hier Start -->
Man musst grub bzw den packet-manager aktualisieren 

$  sudo su                            # ( falls du nicht im root bist was du aber bist)
$  rm -rf /var/lib/apt/lists/*        # -> entferne veraltete Settings
$  rm -R /var/lib/apt/lists/partial/* # -> entferne veraltete Settings
$  apt-get update -y                  # Update alle packete
$  apt-get upgrade -y                 # Upgrade alle upzudateten Packete
$  apt-get install grub -y            # Aktualisiere Grub (nur wenn es nicht geht)

Wenn das nicht geht, dann hat deine debian iso das EOL (end of life) erreicht also musst du das anpassen (dadurch entstehen 404 errors)
Das ganze ist in /etc/apt/sources.list durchzuführen

$  nano /etc/apt/sources.list

Optional: clear cache: 

$  apt clean 


Optional: System neustart / network neustart: 

$  reboot
$  systemctl networking 
          <!-- Code hier Ende -->
    </code>
    </pre>
  </div>
</div> <!-- Ende Copy Section -->

</div>
<!-- Text zur Überschrift -->
</div>
<!-- -->
