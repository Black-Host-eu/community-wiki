<div class="pb-10">

<!-- Überschrift -->
<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="">
  <a href="#java8" data-kt-scroll-toggle=""></a>
  Java 8 Installieren unter 1 Minute :)
</h1>
<!-- Überschrift -->

<!-- -->

<!-- Text zur Überschrift -->
<div class="py-5">
  Öfnnen sie ihr Programm wo mit sie die Consolen verbindung zu ihrem Server aufbauen.
  Und fügen sie das im Copyboard angezeigte ein.
  <div class="highlight"> <!-- Start Copy Section -->
  <button class="highlight-copy btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Kopiere die folgenden Zeilen">
    Kopieren
  </button>
  <div class="highlight-code">
    <pre class=" language-bash" tabindex="0">
    <code class=" language-bash">
          <!-- Code hier Start -->
wget https://download.java.net/openjdk/jdk8u41/ri/openjdk-8u41-b04-linux-x64-14_jan_2020.tar.gz
sudo mkdir -p /usr/lib/jvm
sudo tar zxvf openjdk-8u41-b04-linux-x64-14_jan_2020.tar.gz -C /usr/lib/jvm
sudo update-alternatives --install "/usr/bin/java" "java" "/usr/lib/jvm/jdk8u41/bin/java" 1
sudo update-alternatives --set java /usr/lib/jvm/jdk8u41/bin/java
java -version
          <!-- Code hier Ende -->
    </code>
    </pre>
  </div>
</div> <!-- Ende Copy Section -->

</div>
<!-- Text zur Überschrift -->
</div>

<!-- -->
