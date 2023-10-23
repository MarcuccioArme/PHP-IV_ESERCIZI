# PHP-IV_ESERCIZI
### Alcuni esercizi per continuare a prendere dimestichezza con PHP

#### Eserc_3 Operatori php

a) Scrivere una pagina HTML nella quale, tramite “form” inserire un numero, sul quale sarà possibile eseguire, tramite script php, una delle tre operazioni logiche “bit a bit” richieste (“shift destro”, “shift sinistro” e “not”).

Nota: trasformare il numero acquisito in input, in binario, eseguire l’operazione logica (scelta nella pagina HTML del “form” con pulsanti “radio button”), quindi visualizzare il risultato (in binario ed, eventualmente, riconvertito nella notazione di input).

b) Scrivere una pagina <b>HTML</b> nella quale, tramite “form” si possano inserire due numeri, sui quali sarà possibile calcolare, tramite <b>script php</b>, una delle tre operazioni logiche richieste (“and”, “or”. “xor”).

Nota: trasformare i numero acquisiti in input, in binario, eseguire l’operazione logica (scelta nella pagina HTML del “form” con pulsanti “radio button”), quindi visualizzare il risultato (in binario ed, eventualmente, riconvertito nella notazione di input
<br>Attenzione! L’operazione “<b>xor</b>” deve essere eseguita su variabili “intere” e non su “stringhe”, quindi…

#### Eserc 3.1 Strutture di controllo

a) Realizzare, tramite uno script PHP, una pagina Web che mostra la tavola pitagorica dei numeri fino a 10 (1*1;1*2;1*3;…;2*1;2*2;…;10*10).
<br>La tavola va formattata in modo da renderla leggibile e di facile consultazione, utilizzando i tag &lt;TABLE&gt; del linguaggio HTML.

b) Tramite un form HTML caricare due numeri interi (diversi fra loro) e calcolare tramite script php, il loro <b>minimo comune multiplo (mcm)</b> ed il loro <b>Massimo Comune Divisore (MCD)</b>

Nota: il calcolo del MCD si può effettuare tramite l’algoritmo di Euclide:
- siano <b>a</b> e <b>b</b> i due numeri
- sia <b>a &gt; b</b>
- eseguendo <b>a / b</b> si ottengono un quoziente <b>q</b> ed un resto <b>r</b>, con <b>r &lt; b</b>
- se <b>r = 0</b> allora <b>b = MCD (a,b)</b>

il <b>mcm</b> si può calcolare come:
- <b>a * b / MCD (a,b)</b>

#### Eserc 3.2 Strutture di controllo

a) Costruire una pagina Web che, in modo casuale, mostra un messaggio pubblicitario rappresentato da un’immagine (utilizzare ad esempio un file .jpg, .gif o .bmp) oppure da una scritta testuale (utilizzare ad esempio i tag &lt;BLINK&gt;…&lt;/BLINK&gt; o &lt;MARQUEE&gt;…&lt;/MARQUEE&gt; per far lampeggiare e scorrere il testo)

Nota: per ottenere il parametro che consente in modo “casuale” di visualizzare l’immagine o il testo pubblicitario, utilizzare la funzione “rand(min, max)” che restituisce un numero intero compreso tra il valore min e quello max specificati fra i parametri.
