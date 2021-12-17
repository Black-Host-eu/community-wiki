<div class="pb-10">

<!-- Überschrift -->
<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="">
  <a href="#dateiendungen" data-kt-scroll-toggle=""></a>
  Dateiendungen weglassen
</h1>
<!-- Überschrift -->

<!-- -->

<!-- Text zur Überschrift -->
<div class="py-5">

  Sind wir ehrlich, Dateiendungen sind einfach nur out! <br>
  Deshalb hier der perfekte Hack, mit dem du diese einfach weglassen kannst. <br>
  Erstelle einfach eine .htaccess Datei mit folgendem Inhalt: <br><br>


											
  <div class="highlight"> <!-- Start Copy Section -->
												
    <button class="highlight-copy btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Kopiere die folgenden Zeilen">					
      kopieren						
    </button>
												
													
    <div class="highlight-code">
      <pre class=" language-bash" tabindex="0">
      <code class=" language-bash">
 						<!-- Code hier Start -->	   
    RewriteEngine on <br>
    RewriteCond %{REQUEST_FILENAME} !-d <br>
    RewriteCond %{REQUEST_FILENAME}\.html -f <br>
    RewriteRule ^(.*)$ $1.html [NC,L] <br>
						<!-- Code hier Ende -->								
      </code>
      </pre>
    </div>

  </div> <!-- Ende Copy Section -->



</div>
