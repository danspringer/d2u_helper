<div class="panel panel-edit">
	<header class="panel-heading"><div class="panel-title">D2U Helper Changelog</div></header>
	<div class="panel-body">
		<p>1.4.7-DEV</p>
		<ul>
			<li>Verhindert das Löschen von Impressum und Datenschutzerklärung solange sie in den Addoneinstellungen angegeben sind.</li>
			<li>Module 05-1 Artikelweiterleitung: Option zur Weiterleitung zu Datei im Medienpool hinzugefügt.</li>
			<li>Template 00-1: Darstellung der Sprachauswahl auf kleinen Bildschirmen verbessert.</li>
			<li>Template 00-1: Pfeil bei Verwendung des Maschinenaddons statt Grafik durch CSS ersetzt.</li>
			<li>Template 02-2: Pfeil bei Verwendung des Maschinenaddons statt Grafik durch CSS ersetzt.</li>
			<li>Template 02-2: Facebook Link öffnet jetzt in neuem Fenster.</li>
		</ul>
		<p>1.4.6</p>
		<ul>
			<li>Neue Einstellung für Im Multilevel Menü: im Untermenü beim ersten Punkt der Artikelname angezeigen lassen anstatt den Kategorienamen zu wiederholen.</li>
			<li>Dem Mutltilevel Menu wurden bei Hovereffekten für die Darstellung Transitions hinzugefügt.</li>
			<li>Anpassungen an Redaxo 5.6 (Hintergrund: https://github.com/redaxo/redaxo/pull/1827)</li>
			<li>Modul 11-1 eine Zeitsperre als Spamschutz hinzugefügt.</li>
			<li>Module Autoupdate Fehler behoben.</li>
		</ul>
		<p>1.4.5</p>
		<ul>
			<li>Modul 11-1 Kontaktformular: Hinweis zum Datenschutz jetzt optional.</li>
			<li>Modul 05-1 Artikelweiterleitung: Bugfix wenn Artikel auf den weitergeleitet werden soll gelöscht wurde.</li>
			<li>Übersetzung für Modul 11-1 in Französisch, Russisch und Chinesisch hinzugefügt.</li>
			<li>Google Fonts aus Templates entfernt (nachladen von Fonts ohne vorherige Zustimmung wurde abgemahnt).</li>
		</ul>
		<p>1.4.4</p>
		<ul>
			<li>Anpassungen an D2U News Version >= 1.1.0 (Namespace hinzugefügt).</li>
			<li>Modul 11-1 "YForm Kontaktformular (DSGVO kompatibel)" hinzugefügt.</li>
			<li>Bootstrap 4.1.1 upgrade.</li>
		</ul>
		<p>1.4.3</p>
		<ul>
			<li>Übersetzungen für Name und Kategorie aus anderen Addons in dieses Addon verschoben.</li>
			<li>+++LINK_PRIVACY_POLICY+++ wird durch den in den Einstellungen hinterlegten Artikellink per Outputfilter ersetzt.</li>
			<li>+++LINK_IMPRESS+++ wird durch den in den Einstellungen hinterlegten Artikellink per Outputfilter ersetzt.</li>
		</ul>
		<p>1.4.2</p>
		<ul>
			<li>Impressum Link zu Einstellungen hinzugefügt.</li>
		</ul>
		<p>1.4.1</p>
		<ul>
			<li>CSS aus den Templates in die Module verlagert.</li>
			<li>Anpassungen EU DSGVO für andere D2U Addon. Bitte Einstellungen anpassen.</li>
			<li>Tempaltes: Navigation markiert aktuell ausgewähltes Element.</li>
			<li>Bugfix: Falsche Fehlermeldung bei Templateinstallation entfernt.</li>
			<li>Templates: Farbe Links der Überschrift angeglichen.</li>
			<li>Backend: Farbwähler werden besser dargestellt.</li>
			<li>Upgrade Bootstrap 4.1.0.</li>
		</ul>
		<p>1.4.0</p>
		<ul>
			<li>Modul und JS Cache aktiviert.</li>
			<li>Wenn Modul CSS nachgeladen werden soll, wird es nicht nur für
				Module des D2U Helper Addons nachgeladen, sondern von allen D2U Addons.</li>
			<li>Bei Modulinstallation wird in der Zuordnungsliste nur noch Module
				angezeigt, die keinem Modul - auch Zuordnungen aus anderen D2U Addons - zugeordnet sind.</li>
			<li>Paarung von installierten Modulen / Templates kann wieder aufgehoben werden.</li>
			<li>Bugfix: Lieblingseditor nun auch wählbar wenn nur eine Sprache vorhanden ist.</li>
			<li>Module 01-x jetzt mit Lieblingseditor.</li>
			<li>WiredMinds eMetrics Trackingcode kann automatisiert hinzugefügt werden.</li>
		</ul>
		<p>1.3.2</p>
		<ul>
			<li>Automatisches Modulupdate für D2U Addon Module wird ab kommender Version wieder funktionieren.</li>
			<li>Navigation beinhaltet nun auch Maschinen und Kategorien aus D2U Maschinen Addon.</li>
			<li>Header Slider Template hinzugefügt</li>
			<li>JQuery Update 3.3.1.</li>
			<li>Auswahl des Lieblings WYSIWYG Editors.</li>
			<li>Template 03-1 Fehler beim Drucken an Bootstrap 4.0.0 angepasst.</li>
			<li>Template 01-1 Sprachwahl berücksichtigt jetzt auch Kategorien des D2U Maschinen Addons.</li>
			<li>Favicons werden in Templates nur eingebunden wenn sie im Medienpool existieren.</li>
		</ul>
		<p>1.3.1</p>
		<ul>
			<li>Template 00-1 Bugfix falls Maschinen Addon verwendet wird.</li>
			<li>Modul 02-1 (Überschrift) verbessert.</li>
			<li>Modul 03-2 (Ekko Lightbox) verbessert.</li>
			<li>Für Template 02-1 kann die Navigation in den Einstellungen auch oberhalb des Headerbildes gesetzt werden.</li>
			<li>Update bootstrap 4.</li>
			<li>Update Ekko Lightbox to version 5.3.</li>
			<li>Backendsprache Englisch hinzugefügt.</li>
			<li>Module 10-3 Box mit Downloads prüft Dokumentenrechte, falls ycom/auth_media installiert ist.</li>
		</ul>
		<p>1.3.0</p>
		<ul>
			<li>Übersetzungshilfe für Inhalte von D2U Addons hinzugefügt.</li>
			<li>Schwerer Fehler in Backend Helper behoben, wenn versteckte Felder Arrays übermitteln sollen.</li>
			<li>Option für URL Encoding als Schema Option für YRewrite hinzugefügt.</li>
		</ul>
		<p>1.2.4</p>
		<ul>
			<li>Default Lang Einstellung D2U Addon übergreifend gemacht.</li>
			<li>Bugfix wenn Standardsprache gelöscht wird.</li>
		</ul>
		<p>1.2.3</p>
		<ul>
			<li>Bessere Anpassungen Templates an URL Addon Version 1.0.0beta5.</li>
			<li>Mehrsprachige Templates: Icon in Spracheinstellungen konfigurierbar.</li>
		</ul>
		<p>1.2.2</p>
		<ul>
			<li>Update bootstrap 4 beta.</li>
			<li>Update Ekko Lightbox to version 5.2.</li>
		</ul>
		<p>1.2.1</p>
		<ul>
			<li>Modul "Artikelweiterleitung" kann nun zu beliebigen externen URLs und zu Maschinen,
				Branchen und Gebrauchtmaschinen aus dem D2U Maschinen Addon weiterleiten.
				Auch zu Immobilien aus dem D2U Immo Addon.</li>
			<li>Backendfelder durch eine ID ansprechbar um sie ausblenden zu können.</li>
		</ul>
		<p>1.2</p>
		<ul>
			<li>Module "Box mit Überschrift und Bild" hinzugefügt.</li>
			<li>Bugfix: Hintergrundfarbe bei Box wird wieder angewandt.</li>
			<li>Template: "Side Picture" und "Header Pic" Template hinzugefügt.</li>
			<li>Template: "Feed Generator" Template zum generieren von RSS, ATOM und anderen Feeds hinzugefügt.</li>
			<li>Templates: Breadcrumbs in Einstellungen ausblendbar.</li>
			<li>Google Analytics automatisch hinzufügbar.</li>
			<li>Verbesserter Installationsmodus für Templates und Module.</li>
			<li>Bugfix: wenn bei einer neuen Installation noch keine Artikel angelegt wurden.</li>
			<li>Bugfix: Ekko Lightbox bei mehrfach eingesetztem Modul wurde Lightbox mehrfach geöffnet.</li>
			<li>Ekko Lightbox hat jetzt vordefinierten Image Type d2u_helper_gallery_thumb und d2u_helper_gallery_detail.</li>
			<li>Update JQuery to 3.2.1.</li>
			<li>Für vorgefertige Templates können jetzt eigene CSS Dateien eingebunden werden.</li>
		</ul>
		<p>1.1.2</p>
		<ul>
			<li>Methode zum aktualisieren von URL Schemata hinzugefügt.</li>
			<li>Update Bootstrap to alpha-6.</li>
			<li>Update Ekko Lightbox to 5.1.1.</li>
			<li>Update Module und Template während Addonupdate bei aktiviertem Autoupdate.</li>
		</ul>
		<p>1.1.1</p>
		<ul>
			<li>Farbbug bei weißem Menühintergrund behoben</li>
		</ul>
		<p>1.1.0</p>
		<ul>
			<li>Templates hinzugefügt</li>
			<li>Farbeinstellungen erweitert</li>
			<li>Responisive MultiLevel Menü hinzugefügt</li>
		</ul>
		<p>1.0.2</p>
		<ul>
			<li>Bugfix: automatisches Modul Update während Addon Update sollte nun funktionieren.</li>
		</ul>
		<p>1.0.1</p>
		<ul>
			<li>Bugfix: Google Maps Modul</li>
		</ul>
		<p>1.0.0</p>
		<ul>
			<li>Module mit Autoupdate hinzugefügt</li>
		</ul>
	</div>
</div>