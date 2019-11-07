<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 25/10/2019
 * Time: 14:01
 * Updated:
*/


include_once "include/include_01_head.html";
include_once "include/include_02_header.html";
include_once "include/include_03_main.html";
?>

<!--
<<<<<<< HEAD
=======
>>>>>>> Premier commit de structure de fichiers
-->

<pre><code class="language-git line-numbers">gid add readme.md
git status</code></pre>

		<pre><code class="language-git line-numbers">git restore readme.md
git status</code></pre>

				<pre><code class="language-git line-numbers">git reset readme.md
git status</code></pre>

Command grouper :
<pre><code class="language-git line-numbers">git add --all</code></pre>

  <section>

    <fieldset><h2>Commande Git</h2>

      <h3>Ajouter à l'index un fichier unique</h3>

      <pre><code class="language-git line-numbers">gid add readme.md
git status</code></pre>

      <h3>Restaurer le fichier à la precedente indexation</h3>
      <pre><code class="language-git line-numbers">git restore readme.md
git status</code></pre>

      <pre><code class="language-git line-numbers">git reset readme.md
git status</code></pre>

      <h3>Ajouter à l'index grouper :</h3>
      <pre><code class="language-git line-numbers">git add --all</code></pre>

      <h3>Com‑mitta‑tion</h3>
      <pre><code class="language-git line-numbers">git commit</code></pre>

      <pre><code class="language-git line-numbers">git commit -m "Premier commit de structure de fichiers"</code></pre>

      <pre><code class="language-git line-numbers">git log</code></pre>

      <h3>Générer le distant</h3>

      <pre><code class="language-git line-numbers">git remote add Git-Hub-Origin "address git…" master</code></pre>

      <pre><code class="language-git line-numbers">git remote -v</code></pre>

      <h3>Envoyé le dépot local vers le dépot distant</h3>

      <pre><code class="language-git line-numbers">git push -u Git-Hub-Origin master</code></pre>

	    <h3>Ajouter un fichier au commit precedent</h3>
	    <p>On a oublié un fichier,<br>
		    on fait, {c'est important pour ne pash multiplier
	    git add --all

	    git commit -m "Premier commit de structure de fichiers" --amend

	    git rebase

	    git
    </fieldset>
  </section>

<?php
include_once "include/include_04_footer.html";
?>