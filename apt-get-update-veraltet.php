<div class="pb-10">

<!-- Überschrift -->
<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="">
  <a href="#docker" data-kt-scroll-toggle=""></a>
  apt-get Update veraltet?
</h1>
<!-- Überschrift -->

<!-- -->

<!-- Text zur Überschrift -->
<div class="py-5">

  Unsere KVM-Server haben einige veraltet Debian Pakete, sollte ein derartiger Fehler auftreten nutze <b>apt-get dist-upgrade</b>.<br><br>

  <div class="highlight"> <!-- Start Copy Section -->
  <button class="highlight-copy btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Kopiere die folgenden Zeilen">
    Kopieren
  </button>
  <div class="highlight-code">
    <pre class=" language-bash" tabindex="0">
    <code class=" language-bash">
          <!-- Code hier Start -->
E: Repository 'http://security.debian.org/debian-security buster/updates InRelease' changed its 'Suite' value from 'stable' to 'oldstable'
N: This must be accepted explicitly before updates for this repository can be applied. See apt-secure(8) manpage for details.
N: Repository 'http://deb.debian.org/debian buster InRelease' changed its 'Version' value from '10.4' to '10.11'
E: Repository 'http://deb.debian.org/debian buster InRelease' changed its 'Suite' value from 'stable' to 'oldstable'
N: This must be accepted explicitly before updates for this repository can be applied. See apt-secure(8) manpage for details.
E: Repository 'http://deb.debian.org/debian buster-updates InRelease' changed its 'Suite' value from 'stable-updates' to 'oldstable-updates'
N: This must be accepted explicitly before updates for this repository can be applied. See apt-secure(8) manpage for details.
          <!-- Code hier Ende -->
    </code>
    </pre>
  </div>
</div> <!-- Ende Copy Section -->

</div>
<!-- Text zur Überschrift -->
</div>
<!-- -->
