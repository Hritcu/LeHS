
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Software Requirements Specification for LeHS</title>
    <link rel="stylesheet" href="scholarly.css">
    <meta property="og:type" content="website">
  </head>
  <body>
    <header>
      <h1>Software Requirements Specification for LeHS</h1>
    </header>
      <section>
        <ol>
          <li property="schema:author" typeof="sa:ContributorRole">
            <a property="schema:author" typeof="schema:Person">
              <span property="schema:givenName">Ema</span>
              <span property="schema:familyName">Hritcu</span>
            </a>
          </li>
          <li property="schema:contributor" typeof="sa:ContributorRole">
            <a property="schema:contributor" typeof="schema:Person">
              <span property="schema:givenName">Oana</span>
              <span property="schema:familyName">Rotaru</span>
            </a>
          </li>
          <li property="schema:contributor" typeof="sa:ContributorRole">
            <a property="schema:contributor" typeof="schema:Person">
              <span property="schema:givenName">Ioana</span>
              <span property="schema:familyName">Tanasiciuc</span>
            </a>
          </li>
        </ol>
      </section>

      <section typeof="sa:table" id="Istoricul reviziilor">
        <h2>Istoricul reviziilor</h2>
        <table style="width:100%">
            <tr>
              <th>Nume</th>
              <th>Data</th> 
              <th>Versiune</th>
            </tr>
            <tr>
              <td>LeHS</td>
              <td>11 Aprilie 2021</td>
              <td>1.0</td>
            </tr>
            
          </table>
          
      </section>
      <section id="Introducere">
        <h2>1.Introducere</h2>
        <section id="Scop">
        <h3>1.1 Scop</h3>
        <p>Scopul acestui document este sa prezinte o descriere detaliata a site-ului web LeHS.
            Se va explica caracteristicile software, rolul site-ului si interfata acestuia.
            Acest document este destinat utilizatorilor si potentialilor developeri</p>
        </section>
        <section id="Conventiile documentului">
        <h3>1.2 Conventiile documentului</h3>
        <p>Acest document a fost creat pe baza template-ului IEEE for System Requirement Specification Documents.</p>
        </section>
        <section id="Public-tinta si sugestii de citire">
            <h3>1.3 Public-tinta si sugestii de citire</h3>
            <ul>
                <li>
                  Utilizatorii tipici,cei care doresc sa invete HTML si CSS
                </li>
                <li>
                  Web developers, cei care doresc sa imbunatateasca site-ul
                </li>
              </ul>
        </section>
        <section id="Domeniul de aplicare al produsului">
            <h3>1.4 Domeniul de aplicare al produsului</h3>
            <p>LeHS este un site pe care utilizatorii il pot folosi pentru a invata HTML si CSS. 
                Utilizatorii pot accesa diferite nivele cu diferite grade de dificultate pentru a-si imbunatati cunostintele.
                </p>
        </section>
        <section typeof="sa:ReferenceList" id="Referințe">
            <h3>1.5 Referinte</h3>
            <dl>
                <dd id="ref-nyt" typeof="schema:ScholarlyArticle"
                    resource="https://github.com/rick4470/IEEE-SRS-Tempate">
                  <cite property="schema:name"><a
                    href="https://github.com/rick4470/IEEE-SRS-Tempate">The IEEE Template for System Requirement Specification Documents
                    </a></cite>,
                  by
                  <span property="schema:author" typeof="schema:Person">
                    <span property="schema:name">IEEE Template for System Requirement Specification Documents</span>
                  </span>;
                </dd>
                <dd id="ref-sa-ontology" typeof="schema:ScholarlyArticle"
                    resource="https://w3c.github.io/scholarly-html/">
                  <cite property="schema:name"><a
                    href="https://w3c.github.io/scholarly-html/">The
                    Scholarly Article </a></cite>,
                  by
                  <span property="schema:author" typeof="schema:Person">
                    <span property="schema:name">Scholarly HTML</span>
                  </span>;
                </dd>
              </dl>
        </section>
      </section>
      <section typeof="sa:Results" id="Descriere generala">
        <h2>Descriere generala</h2>
        <section id="Product Perspective">
          <h3>2.1 Product Perspective</h3>
          <p>
            LeHS a fost dezvoltat pentru toata lumea care este interesata de invatarea exersarea cunostintelor
            de HTML si CSS intr-o maniera interactiva. 
          </p>
        </section>
        <section id="Functiile produsului">
          <h3>2.2 Functiile produsului</h3>
          <p>
            Pagina principala
          </p>
          <ul>
            <li>
              Alege CSS
            </li>
            <li>
              Alege HTML
            </li>
          </ul>
          <p>
            Pagina logare
          </p>
          <ul>
            <li>
              Logare prin mail
            </li>
            <li>
              Logare prin cont google
            </li>
            <li>
                Logare prin cont github
            </li>
          </ul>
          <p>
            Pagina invata html
          </p>
          <ul>
            <li>
              Alege dificultate nivel
            </li>
            <li>
              Rezolva nivel
            </li>
            <li>
               Gestioneza setari
            </li>
          </ul>
          <p>Pagina invata CSS</p>
          <ul>
            <li>
              Alege dificultate nivel
            </li>
            <li>
              Rezolva nivel
            </li>
            <li>
               Gestioneza setari
            </li>
          </ul>
          
        </section>
        <section id="Clase de utilizatori si caracteristici">
          <h3>2.3 Clase de utilizatori si caracteristici</h3>
          <ul>
            <li>
              Utilizatori obisnuiti, cum ar fi studenti, care vor sa foloseasca LeHS pentru a exersa cunostintele
              de HTML/CSS
            </li>
            <li>
              Web developers care sunt interesati in dezvoltarea produsului
            </li>
          </ul>
        </section>
        <section id="Mediu de operare">
          <h3>2.4 Mediu de operare</h3>
          <p>Windows, Mac, Linux, Android</p>
        </section>
        <section id="Constrângere de proiectare și implementare">
          <h3>2.5 Constrângere de proiectare și implementare</h3>
          <p>LeHS este dezvoltat in HTML,CSS si JS. De asemenea implementeaza MVS si se va folosi de o baza de date.
          </p>
        </section>
        <section id="Documentația utilizatorului">
          <h3>2.6 Documentația utilizatorului</h3>
          <p>
            Se va furniza un film demonstrativ având durată de 3—5 minute, la calitate HD.
          </p>
        </section>
    </section>
        <section id="Cerințe de interfață externă">
          <h2>3 Cerințe de interfață externă</h2>
          <section id="Interfata utilizator">
              <h3>3.1 Interfata utilizator</h3>
              <p>1 Pagina principala</p>
              <p>2 Pagina invata HTML</p>
              <p>3 Pagina invata CSS</p>
              <p>4 Pagina inregistrare</p>
              <p>5 Pagina conectare</p>

          </section>
          <section id="Interfete hardware">
              <h3>3.2 Interfete hardware</h3>
              <p>Un calculator cu specificatii decente/un telefon inteligent.</p>
          </section>
          <section id="Interfete software">
          <h3>3.3 Interfete software</h3>
          <p>Un browser.</p>
          </section>
          <section id="Interfete de comunicare">
          <h3>3.4 Interfete de comunicare</h3>
          <p>LeHS este un site web deci avem nevoie de conexiune la internet.</p>
          </section>
          <section id="Propritatile sistemului">
              <h2>4 Propritatile sistemului</h2>
              <section id="HTML">
                  <h3>Learn HTML</h3>
                  <p>Utilizatorii vor raspunde la anumite intrebari teoretice de forma grila sau de completat text.</p>
              </section>
              <section id="CSS">
                  <h3>Learn CSS</h3>
                  <p>Utilizatorii vor scrie cod CSS care va determina schimbari in timp real in jocul dat.</p>
              </section>
          </section>
          </section>
          
  </body>
</html>
