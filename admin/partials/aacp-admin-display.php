<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
    <h1>ARCHE Augsburg Communication Plugin</h1>
    <h2 class="nav-tab-wrapper">
        <a class="nav-tab nav-tab-ical-sync nav-tab-active" href="#ical-sync">Ical Sync</a>
        <a class="nav-tab nav-tab-file-exports" href="#file-exports">Dateiexporte</a>
    </h2>
    <div class="tab-ical-sync">
        <h2>Ical-Synchronisation</h2>
        <p>Die Kalender in <a href="">ChurchTools</a> werden täglich automatisch exportiert, damit die 
        aktuellen Termine auf der Homepage angezeigt werden. Hier kannst du den Status sehen und bei Bedarf manuell synchronisieren.</p>
        <input type="submit" name="submit" id="synchronize-calendar" class="button button-primary" value="Jetzt synchronisieren">
        <h3>Letzte Synchronisation</h3>
        <?php 
            include (dirname(__DIR__)).'/../lib/ical/aacp-ical-sync.php';
        ?>
    </div>
    <div class="tab-file-exports hidden">
        <h2>Dateiexporte</h2>
        <p>Hier kannst du die Exporteinstellungen für verschiedene Dateien festlegen und manuell exportieren.</p>
        
        <h3>ARCHE Termine (Print-Newsletter)</h3>
        <p>Der ARCHE-Termine Print-Newsletter erscheint einmal monatlich jeweils Mitte des Vormonats.<p>
        
        <input type="submit" name="submit" id="export-print-newsletter" class="button button-primary" value="docx herunterladen">
        <div class="export-print-newsletter-response"></div>
        
        <h3>Powerpoint-Präsentation</h3>
        <p>Die Präsentation läuft jeden Sonntag vor den Gottesdiensten.<p>
        
        <input type="submit" name="submit" id="submit" class="button button-primary" value="ppp herunterladen">
        
    </div>
    
</div>