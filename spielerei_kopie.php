SSSSTTTT


Blabla

hunk 1

hunk2

hunk3


<html>
<head>
<title>Hirsms Live-Vim-Doku</title>
</head>

<body>

<p>
Ich nutze die Gelegenheit mal für eine VIM-Dokumentation
</p>

<p>Vorab ein paar Quellen:</p>
<ul>
<li>Cookbook: http://www.oualline.com/vim-cook.html</li>
<li>Seven habits of effective text editing: http://www.moolenaar.net/habits.html</li>
<li>Help-Files online: http://vimdoc.sourceforge.net/htmldoc/usr_toc.html</li>
<li>Die Help-Feles IM SYSTEM!!! :help und dann hyperlinkmäßig auf topic.txt gehen</li>
<li>Doku als PDF: http://www.eandem.co.uk/mrw/vim/usr_doc/doc_a4s.pdf (7.3)</li>
<li>SEHR SCHÖN: http://tnerual.eriogerg.free.fr/vimqrc-ge.html</li>
<li>http://vim.wikia.com/wiki/Best_Vim_Tips gute Tricks</li>
<li></li>
<li></li>


<pre>
- äußere Bedienung
-- persönliche Einstellungen in .vimrc speichern
-- vim +[N] [datei] > Datei öffnen und gleich zu Zeile [N] springen
-- :tabnew
--- Strg+BildAuf/Down | tabn / tabp > In Tabs navigieren; Strg... funktionierte nicht: wechselte zwischen Shell-Fenstern
--- tabr / tabl > nach ganz rechts / links springen, äääh: umgekehrt komischerweise...
---- mehr zu Navigation in Tabs (und auch Nav. in Dateien ohne Tabs!): http://iblog.ikarius.net/index.php?/archives/122-Vim-Tabs.html ==> hier noch aufnehmen
--- -datei
-- :E > zum Öffnen Dateibaum anzeigen
--- Im Dateibauma kann man mit "/" suchen!


- Navigation im Text
-- k/j/h/l > hoch/runter/vor/zurück
-- +/- > hoch/runter, aber am Textanfang von eingerückten Texten
-- gg > Textanfang
--- [N] gg > springe zu Zeile N
--- /[Suchbegriff] > vorwärts suchen 
--- ?[Suchbegriff]] > rückwärts suchen
---- n (nnn) springe sukszezive zum nächsten Vorkommen von [Suchbegriff]
-- G > Textende
-- w > zum nächsten Wortanfang springen
--- N w > zum N-ten Wortanfang springen
-- e > zum nächsten Wortende springen
--- N e > zum N-ten Wortende springen
-- 0/^/$ > Anfang der Zeile / erstes Zeichen der Zeile / Ende der Zeile
--- D 0/^$ > bis Zeilenanfang/Ende löschen
-- W / B > hinter das nächste Leerzeichen springen 
---- D W/B > bis vor/nächstes Leerzeichen löschen
-- #/* [über einem Wort]: Suche genau dieses Wort rückwärts/vorwärts; mit nnnn gehts weiter
-- Strg+F / Strg+B > Seite vor / zurück
-- Strg+D / Strg+U > halbe Seite vor zurück
-- Strg+E / Strg+Y > scrollen
-- [n] f/t [Zeichen] > zum n-ten Vorkommen von [Zeichen] nach rechts/links gehen
--- ; / , > wiederholen in die eine / andere Richtung
-- {} > Absatz vor/zurück
-- m[Buchstabe] > Markierung im Text setzen und mit [Buchstabe] identifizieren
--- '[Buchstabe] > zu Markerung [Buchstabe] springen
---- Strg+o > zurück zur vorigen Cursor-Position
--- m[GROSSBUCHSTABE] > Markierung über 'aktuellen Puffer' hinaus speichern
---- [Trick: markiere Textstelle bspw mit 'a', gehe woanders hin und gebe d'a / v'a ein, dann deleted / markiert er alles bis zur Markierung]
-- split, vsplit > Fenster teilen
--- Strg+W > zwischen Fenstern hin und herspringen
--- :close / :only > aktives Fenster schließen / alle anderen außer aktives Fenster 
--- :split file.txt > file im neuen Fenster öffnen (mit :new: neue File öffnen)
-- :sh[EINGABE] / :!<befehl>[EINGABE] > Wechsel in Kommandozeile / direktes Ausführen eines Kommandos
--- exit > wenn man in der 'vim-Kommandozeile' ist, kommt man so zurück zu vim
-- % > springe zur öffnenden / schließenden Klammer () {}
-- [{ / ]} > springe zum Anfang / Ende des Codeblocks, wenn man sich mittendrin befindet
-- g = go

- Irgendwo zwischen Textbearbeitung und Navigation
-- . > wiederhole das letzte Kommando
-- qa, i, Tipperei, esc, q > Aufzeichnen von Tipperei im Register 'a' (oder einem anderen Buchstaben), @a: Aufrufen der Aufzeichnung --> hat irgendwie nicht geklappt (ToDo)
-- Wort vor/zurück bei Mac: Im Macvim klappts, es geht auch mit ESC+W/B!!!
-- abbr: Tset Test > Automatisches Ersetzen von Tset durch Test
-- :grep -r 'suchbegriff' . > das normale grep-Kommando
--- cn > gehe zum nächsten Treffer, auch in einer anderen Datei!!
---- das in Kombin mit split!!

-- I / A > Einfügen am Anfang / Ende der Zeile
-- o / O > Einfügen unter / über aktueller Zeile
-- rx > Zeichen unter Cursor durch x ersetzen
-- R > Zeichen ab Cursorposition ersetzen
--- set:noai > autom. Einrückung verhindern
--- set:paste > autom. Einrückung beim EINFÜGEN verhindern, d.h. die Einrückungen der Zwischenablage einfach übernehmen
--- = > Einrücken gemäß der Programmsynstax
---- == > die aktuelle Zeile / =iB > Inhalt eines Blocks (inner Block) / =% > Inhalt zwischen Klammern / =G > alles bis Dateiende formatieren
--- u > rückgängig machen
--- strg+r > wiederherstellen
--- [Wortanfang] Strg+p > schlägt alle bisherigen  Wörter vor, die mit Wortanfang beginnen
---- [Wortanfang] Strg+n > umgekehrte Reihenfolge
-- dd > aktuelle Zeile löschen; 3dd > aktuelle und zwei Nachfolgezeilen löschen
-- dw / db > aktuelles Wort löschen nach rechts/links ; 3dw > drei Wörter löschen
-- d} / d{ > Absatz bis Ende / Anfang löschen
-- c > wie d, nur daß vim in Einfügemodus switcht
--- cw > change word: Wort vor Cursor wird gelöscht und man fügt sofort neuen Text ein, der im ZWISCHENSPEICHER ist!
--- [Trick: * über xyz > cw abc > n: Springe zum nächsten Vorkommen von xyz, "." wiederhole cw, das ist als ein Suchen/Ersetzen]
-- y > Kopieren des Textes gemäß Cursor-Positionierungsbefehls
--- Visueller Modus: Text markieren und dann y: Der markierte Text ist im Zwischenspeicher
--- [n]yy|Y > [n] Zeilen kopieren
--- y$ > Rest der Zeile kopieren
--- y^ > Bis zum Beginn der Zeile kopieren (2x^ klicken)
--- y} / y{  > bis Absatz-Ende/Anfang kopieren
-- p / P > Einfügen des Zwischenspeichers hinter / vor der aktuellen Stelle
-- Markieren von Text [-> verhält sich im Wesentlich wie y!]
--- v,V oder strg+V > Zeichen, Zeilen, Blockweises markieren
---- x oder d > löschen des markierten Textes
-- Ausschneiden von Text -> verhält sich wie y und x
-- strg+n/p / strg+x strg+l [insert]> Über einem Wortanfang / Zeilanfang stehend: Vorschläge mit allen Wörtern/Zeilen, die so anfangen

- IM insert-Mode
-- Hilfe auf http://vimdoc.sourceforge.net/htmldoc/insert.html
-- Navigation (bspw S+left) klappt beim Mac irgendwie nicht!!!
-- Strg+o > führe ein Kommando aus und gehe zurück zu insert (bsp: strg+o /text > Suche nach "text" im insert-mode)
-- Strg+t/d > ganze Zeile per Tab einrücken / zurückrücken

- Hilfreiche Beispiele / Tricks
-- d2f) > d =  delete, 2te, f) = finde Klammer > "Lösche alles bis zur übernächsten Klammer"
--- statt d auch y für Kopieren, oder visueller Modus...
-- d% > alles bis zur Gegenklammer löschen (wenn auf Klammer stehend)
-- caB / ciB / cab / cib [bzw d statt c] > "change a / inner [B]lock": gesamten Inhalt eines Blocks löschen inkl./exkl. Klammer, [b]: nur ()
-- gd / gf > springe (in C, Java, PHP) zur Variablendeklaration (und dann strg+o zurück, s.o.) / öffne die Datei, im Zusammenspiel mit Split!!!

- ToDo
-- Plugins wie Struktur-Outline (bei Texteinfügen)
-- gvim mit der Option --remote aufrufen: Serverseitiges Editieren im nicht Commandline-Modus?
-- Vim 7.3: Relative Number!! Einstellung für vimrc
-- vim 7.3: undofile > ermöglicht Rückgängigmachen auch nachdem man eine Datei zwischenzeitlich geschlossen hat!
-- warum tun's die Einstellungen für Wordwrap, textwidth, list (versteckte Zeichen anzeigen)  nicht? Version??
-- "There are more uses of multiple windows. The preview-tag mechanism is a very good example. This opens a special preview window, while keeping the cursor in the file you are working on. The text in the preview window shows, for example, the function declaration for the function name that is under the cursor. If you move the cursor to another name and leave it there for a second, the preview window will show the definition of that name. It could also be the name of a structure or a function which is declared in an include file of your project."


###### Spielwiese ##############
34

<?php   sfd 

$testvar = "test";

<?php

(sdfsdflkslf)

?>

foreach ($i>"xx") {
    print "this is a ".$testvar;
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
		sdföalksjfdkas (sfdasdfsdf) lkjsflkasf
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
echo $testvar;
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfdasdfsdf) lkjsflkasf 
  (sfd
  (sf
  (s
  (sfdasdfs
}
?>


/*
* sldfjaslkjf sfjslakfj slfjöslakjf slkfj salkfjlsakfj söalfjsölfkjs
* ölfj
* sfkjs
* sfjslfjsj s
*/

foreach ($i => $j as $k) {
	
}
    
6

 Das
Test 

234
5678

234
5678
	wwwwws dflksjf sfksf sfkjsfjDaaaaaaaaaaaqas ist ein Text
        Das ist ein Text
        Das ist ein Text
        Das ist ein Text
        Das ist ein Text
testestestest
5678

Test 

5678

    Das ist ein Text
    Das ist ein Text
    Das ist ein Text

    DDDDDDDDDDas ist ein Text
    Das ist ein Text
    Das ist ein Text
    Das ist ein Text
    Das ist ein Text
    Das ist ein Text
    D
    test
    5678

:cn

testestestestestestestestestestestestestestestestestestest
5678


5678



D
2345678

234
wwaksfjdlksad 8

234
5678

Das fj asdlkfjslkdfj slkdfjsaldf sölkfdjs df Text

5678

Das ist ein Text
Das ist ein Text
Das ist ein Text

DDDDDDDDDDas ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
Das ist ein Text
234
5678

234
5678

234
5678

234
d5678

deeeesf asölkf slfkja slfkjsaldf sadlfsjf slfkj fd slkjf lsajf lsafj asdlfkj sadlfkj safljsaf skjf lksajf lsajf salfdj asdlfkj salfkjsa fdlkjsadfl jsadfljasdfl sadfljaslfdjsaldfj asdlfjsa lfdkjsa fdlkjsfljsdf skjdflasdjf laskjdflskjdf lskdflsakjdfla sdflskjdf sjdflskjaf askjf sakjfsdfjk aslkfsdlfkj asldfj
s

234
5678





789


123
456

Suchbegriff


iaf() {
vaaaaaaaaasssssaaaa  aier sfdsdf sdfsdf sdf
sfdasf
safdsafdsfd

safdsdf sfdjlksf sfslkdf sf
sdfsalkdf slfkjs fdslkf sljfu

if({



}

Einfügen Textende
1111 dfksdflasd sfd salkfdj slfdk

</pre>
</body>
</html>
AAAAXXXXXNEUXXXXXAAAAABBBBB
