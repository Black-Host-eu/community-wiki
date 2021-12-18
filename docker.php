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

  Viele Softwares unterstützen heutzutage Docker. Dies ist eine einfache Möglichkeit Webinterfaces o.ä. zu installieren.
  Hier eine Install-Anleitung:

  <div class="highlight"> <!-- Start Copy Section -->

  <button class="highlight-copy btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Kopiere die folgenden Zeilen">
    Kopieren
  </button>


  <div class="highlight-code">
    <pre class=" language-bash" tabindex="0">
    <code class=" language-bash">
          <!-- Code hier Start -->
  sudo apt-get remove docker docker-engine docker.io
  sudo apt-get update
  sudo apt install docker.io
  sudo snap install docker
  docker --version
          <!-- Code hier Ende -->
    </code>
    </pre>
  </div>
</div> <!-- Ende Copy Section -->

</div>
<!-- Text zur Überschrift -->
</div>
 Et voila :) Docker wurde erfolgreich installiert!
<!-- -->
