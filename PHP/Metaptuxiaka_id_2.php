<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Μεταπτυχιακά</title>
    <link rel="stylesheet" href="style.css">


    <style>

        .dropdown {
            float: right;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 20px;
            border: none;
            outline: none;
            color: #fff;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            right: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: #98AFC7;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #111;
            min-width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
        }

        .dropdown-content a {
            float: none;
            color: #ff4d4d;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            color: #ff4d4d;
            background-color: #2e2e2e;
        }


        .footer {
            margin-left: -8px;
            margin-bottom: -5px;
            width: 105%;
            background-color: #3b5998;
            color: white;
            text-align: left;
        }

        .footer p {
            color: #f2f2f2;
            font-size: 12px;
        }

        .footer b {
            color: white;
            font-size: 12px;
        }

        .btn-eggrafh:hover {
            cursor: pointer;
        }

        #main {
            margin-left: -15px;
        }




        .demo {
            border:1px solid #C0C0C0;
            border-collapse:collapse;
            padding:1px;
        }
        .demo th {
            border:1px solid #C0C0C0;
            padding:1px;
            background:#F0F0F0;
        }
        .demo td {
            border:1px solid #C0C0C0;
            padding:1px;
        }


        /****

        orange button

        ********/
        .btn-1 {
            background-color: #F27935;
        }
        .btn-1 .round {
            background-color: #f59965;
        }

        a {
            text-decoration: none;
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            border-radius: 30px;
            padding: 12px 53px 12px 23px;
            color: #fff;
            text-transform: uppercase;
            font-family: sans-serif;
            font-weight: bold;
            position: relative;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            display: inline-block;
        }
        a span {
            position: relative;
            z-index: 3;
        }
        a .round {
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            position: absolute;
            right: 3px;
            top: 3px;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            z-index: 2;
        }
        a .round i {
            position: absolute;
            top: 50%;
            margin-top: -6px;
            left: 50%;
            margin-left: -4px;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .txt {
            font-size: 14px;
            line-height: 1.45;
        }

        .type-1 a:hover {
            padding-left: 48px;
            padding-right: 28px;
        }
        .type-1 a:hover .round {
            width: calc(100% - 6px);
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            border-radius: 30px;
        }
        .type-1 a:hover .round i {
            left: 12%;
        }

    </style>
</head>
<body>
<?php
class News {
    // Properties
    private $title;
    private $description;
    private $article_date;
    private $reference_php;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getArticleDate()
    {
        return $this->article_date;
    }

    /**
     * @return mixed
     */
    public function getReferencePhp()
    {
        return $this->reference_php;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @param mixed $article_date
     */
    public function setArticleDate($article_date): void
    {
        $this->article_date = $article_date;
    }

    /**
     * @param mixed $reference_php
     */
    public function setReferencePhp($reference_php): void
    {
        $this->reference_php = $reference_php;
    }
}
?>
<nav class="navbar">
      <span class="open-slide">
        <a href="#" onclick="openSlideMenu()">
          <svg width="30" height="30">
              <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
              <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
              <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
          </svg>
        </a>

        <img id="logo-image" alt="Unipi logo" src="logo_unipi.png" width="50" height="50" style="float: left; margin-left: 75px; margin-top: 8px;">
        <img id="logo-image2" alt="Unipi logo 2" src="logo_unipi_2.png" width="160" height="80" style="margin-top: -4px;">

        <div class="dropdown">
          <button class="dropbtn" onclick="">&#128240;</button>
          <div id="dropdown-content" class="dropdown-content" hidden>
              <?php
              try {
                  #Connect to database
                  $connection = new PDO("pgsql:host=localhost;dbname=cs_unipi_database", "postgres", "polifolio68");
                  #Query
                  $sql = 'SELECT * from nea_tou_tmhmatos ORDER BY id desc';

                  foreach ($connection->query($sql) as $row) {
                      #Create new object
                      $obj = new News();
                      $obj->setTitle($row["title"]);
                      $obj->setDescription($row["description"]);
                      $obj->setArticleDate($row["article_date"]);
                      $obj->setReferencePhp($row["reference_jsp"]);

                      ?>
                      <a href="<?php echo $obj->getReferencePhp()?>" title=""><?php echo $obj->getArticleDate()?>
                        <p style="font-size: 16px; color: #ccc;"><?php echo $obj->getTitle()?></p>
                      </a>
                      <?php
                  }

                  $connection = null;
              } catch (PDOException $e) {
                  die("Error message: " . $e->getMessage());
              }
              ?>
          </div>
        </div>
      </span>
</nav>


<div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.php">ΚΕΝΤΡΙΚΗ</a>
    <a class="dropdown-btn">ΤΟ ΤΜΗΜΑ &#9660;</a>
    <div class="dropdown-container" hidden>
        <a href="Mhnuma_Proedrou.php">Μήνυμα Προέδρου</a>
        <a href="Diakriseis.php">Διακρίσεις</a>
    </div>
    <a class="dropdown-btn2">ΑΝΑΚΟΙΝΩΣΕΙΣ &#9660;</a>
    <div class="dropdown-container2" hidden>
        <a href="Nea_tou_Tmhmatos.php">Νέα του Τμήματος</a>
        <a href="Dioikhtikes_Prakseis.php">Διοικητικές Πράξεις</a>
    </div>
    <a class="dropdown-btn3">ΣΠΟΥΔΕΣ &#9660;</a>
    <div class="dropdown-container3" hidden>
        <a href="Proptuxiaka.php">Προπτυχιακά</a>
        <a href="Metaptuxiaka.php">Μεταπτυχιακά</a>
        <a href="Didaktorikes_Spoudes.php">Διδακτορικές Σπουδές</a>
        <a href="ELearning.php">eLearning</a>
        <a href="Odhgos_Spoudwn.php">Οδηγός Σπουδών</a>
    </div>
    <a class="dropdown-btn4">ΜΕΛΗ &#9660;</a>
    <div class="dropdown-container4" hidden>
        <a href="Didaskontes.php">Διδάσκοντες</a>
        <a href="Epitimoi_Didaktores.php">Επίτιμοι Διδάκτορες</a>
        <a href="Metadidaktorikoi_Ereunhtes.php">Μεταδιδακτορικοί Ερευνητές</a>
        <a href="Ypopshfioi_Didaktores.php">Υποψήφιοι Διδάκτορες</a>
        <a href="Grammateia.php">Γραμματεία</a>
    </div>
    <a class="dropdown-btn5">ΕΡΕΥΝΑ &#9660;</a>
    <div class="dropdown-container5" hidden>
        <a href="Tomeis_Ereunas.php">Τομείς Έρευνας</a>
        <a href="Epilegmenes_Dhmosieuseis.php">Επιλεγμένες Δημοσιεύσεις</a>
        <a href="Ereunhtika_Erga.php">Ερευνητικά Έργα</a>
        <a href="Ereunhtika_Ergasthria.php">Ερευνητικά Εργαστήρια</a>
    </div>
    <a class="dropdown-btn6">ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ &#9660;</a>
    <div class="dropdown-container6" hidden>
        <a href="Episthmonika_Sunedria.php">Επιστημονικά Συνέδρια</a>
        <a href="Omilies_Dialekseis.php">Ομιλίες, Διαλέξεις</a>
        <a href="Hmerides.php">Ημερίδες</a>
        <a href="Alles_Ekdhlwseis.php">Άλλες Εκδηλώσεις</a>
    </div>
    <a class="dropdown-btn7">ΥΠΗΡΕΣΙΕΣ &#9660;</a>
    <div class="dropdown-container7" hidden>
        <a href="Yphresies_Tmhmatos_kai_Panepisthmiou.php">Υπηρεσίες Τμήματος και Πανεπιστημίου</a>
        <a href="Sunergazomenes_Etairies.php">Συνεργαζόμενες Εταιρίες</a>
    </div>
    <a href="Epikoinwnia.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
</div>



<div id="main">
    <h2>ΠΜΣ "Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες"</h2>
    <br>
    <div class="type-1">
        <div>
            <a href="Aithsh_gia_eggrafh_id_2.php" class="btn btn-1">
                <span class="txt">Αίτηση για εγγραφή</span>
                <span class="round"><i class="fa fa-chevron-right"></i></span>
            </a>
        </div>
    </div>
    <br>
    <h3 style="color: #0066cc"><u>Κατευθύνσεις</u></h3>
    <table id ="table_kat" align="center" border="0" style="width: 100%; margin-left: -5px;">
        <tr>
            <td><button id="button_kat_1" style="background-color: #b3ccff; width: 220px; height: 95px; font-size: 12.5px; cursor: pointer; display: inline-block;"><a class="link" href="Metaptuxiaka_id_2_PSP.php">Ψηφιακός Πολιτισμός</a></button></td>
            <td><button id="button_kat_2" style="background-color: #b3ccff; width: 220px; height: 95px; font-size: 12.5px; cursor: pointer; display: inline-block;"><a class="link" href="Metaptuxiaka_id_2_EPPPST.php">Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες</a></button></td>
        </tr>
        <tr>
            <td><button id="button_kat_2" style="background-color: #b3ccff; width: 220px; height: 95px; font-size: 12.5px; cursor: pointer; display: inline-block;"><a class="link" href="Metaptuxiaka_id_2_DPPPST.php">Διαδίκτυο των Πραγμάτων και Προηγμένες Ψηφιακές Τεχνολογίες</a></button></td>
        </tr>
    </table>
    <br>
    <h3 style="color: #0066cc"><u>Συνοπτική παρουσίαση</u></h3>
    <iframe width="100%" height="315" src="https://www.youtube.com/embed/SEVEaV3ptIo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="text-align: center; margin-left: -5px"></iframe>
    <br>
    <p>Το Τμήμα Πληροφορικής της Σχολής Τεχνολογιών Πληροφορικής και Επικοινωνιών του Πανεπιστημίου Πειραιώς θα οργανώσει και θα λειτουργήσει από το ακαδημαϊκό έτος 2018-2019 Πρόγραμμα Μεταπτυχιακών Σπουδών (ΠΜΣ) με τίτλο «Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες» («Digital Culture, Smart Cities, IoT and Advanced Digital Technologies»), σύμφωνα με τις διατάξεις της απόφασης αυτής και τις διατάξεις του ν. 4485/2017.</p>
    <p>Στο Π.Μ.Σ. γίνονται δεκτοί κάτοχοι τίτλου πρώτου κύκλου σπουδών Α.Ε.Ι. της ημεδαπής ή ομοταγών ιδρυμάτων της αλλοδαπής σύμφωνα με τις διατάξεις του άρθρου 34 του ν.4485/2017, ενδεικτικά και ανάλογα με την ειδίκευση: Τμημάτων/Σχολών Τεχνολογιών Πληροφορικής και Επικοινωνιών, Θετικών Επιστημών ή Τεχνολογικών Επιστημών, Μηχανικών, Καλών Τεχνών, Αρχιτεκτόνων Μηχανικών, Πολεοδόμων, Φιλοσοφικής Σχολής, Ανθρωπιστικών Επιστημών, Γεωπονικών Επιστημών, Παιδαγωγικών, Θεολογικής, Οικονομικών και Κοινωνικών Επιστημών, Οικονομικών - Επιχειρηματικών και Διεθνών Σπουδών, Ναυτιλίας και Βιομηχανίας, Κοινωνικών Επιστημών, Μηχανικών Πολυτεχνείων ή Πολυτεχνικών Σχολών, Μηχανικών Περιβάλλοντος, Νομικών Επιστημών, Τμημάτων Πληροφορικής, Τεχνών Ήχου & Εικόνας, Πολιτισμικής Τεχνολογίας & Επικοινωνίας, Τμημάτων Τεχνολογιών Πληροφορικής και Επικοινωνιών, Διαχείρισης Πολιτισμικού Περιβάλλοντος και Νέων Τεχνολογιών, Επικοινωνίας Μέσων και Πολιτισμού, Ψηφιακών Μέσων, Επικοινωνίας και Πολιτισμικής Διαχείρισης, Συντηρητών Αρχαιοτήτων & Έργων Τέχνης, Ιστορικών και Αρχαιολόγων, Γραφιστικής, Πληροφορικής και Μέσων Μαζικής Ενημέρωσης, Διοίκησης - Οικονομίας και Επικοινωνίας, Πολιτιστικών και Τουριστικών Μονάδων, Aρχειονομίας, Bιβλιοθηκονομίας και Μουσειολογίας, Φωτογραφίας & Οπτικοακουστικών Τεχνών, Ελληνικού και Ευρωπαϊκού Πολιτισμού, Μηχανικών Πληροφορικής Τ.Ε., Φυσικών, Μαθηματικών, Χημικών, Χωροταξίας Πολεοδομίας και Περιφερειακής Ανάπτυξης, Πολιτικών Μηχανικών, Μηχανικών Παραγωγής και Διοίκησης, Μηχανικών Ορυκτών Πόρων Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών, Παιδαγωγικών Τμημάτων, Ειδικής Αγωγής, Ιστορίας - Αρχαιολογίας και Κοινωνικής Ανθρωπολογίας, Υδάτινου Περιβάλλοντος, Πολιτικής Επιστήμης και Δημόσιας Διοίκησης, Επικοινωνίας και Μέσων Μαζικής Ενημέρωσης, Επικοινωνίας Μέσων και Πολιτισμού, Θεατρικών Σπουδών, Φιλοσοφίας, Παιδαγωγικής και Ψυχολογίας, Γεωλογίας και Γεωπεριβάλλοντος, Ιστορίας και Φιλοσοφίας της Επιστήμης, Δημόσιας Διοίκησης, Οικονομικής και Περιφερειακής Ανάπτυξης, Κοινωνικών και Πολιτικών Επιστημών, Κοινωνικής Ανθρωπολογίας, Κοινωνιολογίας, Ψυχολογίας ή/και άλλων συναφών με τις κατευθύνσεις ειδικοτήτων), καθώς και πτυχιούχοι Πανεπιστημίων, Πολυτεχνείων ή Πολυτεχνικών Σχολών και ΤΕΙ ή Α.Σ.ΠΑΙ.Τ.Ε. της ημεδαπής, και ομοταγών Ιδρυμάτων ΑΕΙ της αλλοδαπής.</p>
    <p><a style="color: black; text-decoration-color: black " href="pms_dcsciot_brochure.pdf">Προβολή φυλλαδίου</a></p>
    <br>
    <h3>Σκοπός</h3>
    <p>Το Πρόγραμμα Μεταπτυχιακών Σπουδών «Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες» («Digital Culture, Smart Cities, IoT and Advanced Digital Technologies») έχει ως αντικείμενο την συντονισμένη ανάπτυξη και οργάνωση των ερευνητικών κατευθύνσεων της επιστήμης των νέων Τεχνολογιών και ειδικότερα αυτών που αφορούν σε τομείς υψηλής προτεραιότητας για τη χώρα μας, όπως είναι ο <b>Ψηφιακός Πολιτισμός, οι Έξυπνες Πόλεις, το Διαδίκτυο των Πραγμάτων (IoT), καθώς και οι Σύγχρονες Επικοινωνίες και Ψηφιακές Τεχνολογίες.</b></p>
    <p>Το ΠΜΣ απονέμει Δίπλωμα Μεταπτυχιακών Σπουδών (Δ.Μ.Σ.) με τίτλο «Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες» με τις εξής τρεις (3) ειδικεύσεις (tracks) : «Ψηφιακός Πολιτισμός», «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες», «Διαδίκτυο των Πραγμάτων (IoT) και Προηγμένες Ψηφιακές Τεχνολογίες». <b>Το Π.Μ.Σ. απευθύνεται σε αποφοίτους από διαφορετικά επιστημονικά πεδία.</b></p>
    <p><b><u>Ειδίκευση / Κατεύθυνση «Ψηφιακός Πολιτισμός» - «Digital Culture»</u></b></p>
    <p>Η Ειδίκευση / Κατεύθυνση «Ψηφιακός Πολιτισμός» - «Digital Culture» στοχεύει στην εκπαίδευση και κατάρτιση επιστημόνων διαφόρων ειδικοτήτων από θεωρητικά, θετικά και τεχνολογικά πεδία γνώσεων για την ανάδειξη, προστασία, προβολή και διαχείριση του πολιτιστικού αποθέματος με τη συμβολή προηγμένων ψηφιακών τεχνολογιών. Eφοδιάζει τους φοιτητές με τις κατάλληλες γνώσεις των τελευταίων τάσεων που επικρατούν παγκοσμίως στο αναδυόμενο διεπιστημονικό πεδίο του ψηφιακού πολιτισμού και διασφαλίζει τη χάραξη και τη διαμόρφωση νέας ψηφιακής στρατηγικής στον πολιτισμό. Προωθεί τη διάσωση και ανάδειξη της πολιτισμικής κληρονομιάς στη χώρας μας αναδεικνύοντας νέους τρόπους αποτελεσματικής διοίκησης των πολιτισμικών οργανισμών στο ευρύτερο πλαίσιο της κοινωνικής και εκπαιδευτικής πολιτικής. Ενσωματώνει μοντέρνα γνωστικά πεδία μεταξύ των οποίων είναι η μοντελοποίηση με 3Δ γραφικά, η εφαρμογή τεχνολογιών μικτής πραγματικότητας (Virtual Reality, Augmented Reality, Virtual Worlds), οι κινητές επικοινωνίες, οι τεχνολογίες διαδικτύου και μέσων κοινωνικής δικτύωσης, η επεξεργασία σημάτων και πολυμέσων, με τελικό σκοπό τη βέλτιστη ψηφιακή διαχείριση, καταγραφή και επιμέλεια της πολιτισμικής κληρονομιάς αλλά και των πτυχών του σύγχρονου πολιτισμού. Καθώς η χώρα μας διαθέτει πλούσιο πολιτιστικό απόθεμα σε μια ήπειρο (Ευρώπη) που αποτελεί και η ίδια πολιτιστική υπερδύναμη, η ενίσχυση της διεπιστημονικότητας θα συμβάλλει στην ενίσχυση της Δημιουργικής Βιομηχανίας, στην προστασία της πολιτιστικής μας κληρονομιάς και την ώθηση της σύγχρονης δημιουργίας.</p>
    <p><b><u>Ειδίκευση / Κατεύθυνση «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες» - «Smart Cities and Advanced Digital Technologies»</u></b></p>
    <p>Η Ειδίκευση / Κατεύθυνση «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες» στοχεύει να εκπαιδεύσει και να καταρτίσει επιστήμονες από διαφορετικά πεδία ώστε να μπορούν να εργαστούν στο νέο ψηφιακό αστικό τοπίο, καθώς και να σχεδιάσουν και να υποστηρίξουν νέες υπηρεσίες στις διαρκώς μεταβαλλόμενες «Έξυπνες Πόλεις», που συνδέονται με το σύγχρονο οικοσύστημα, υποδομές, λειτουργίες και υπηρεσίες, όπως οι έξυπνες μεταφορές, επικοινωνίες, έξυπνα σπίτια, ηλεκτρονική διακυβέρνηση, smart grids, έξυπνη πολιτιστική κληρονομιά, έξυπνη υγεία, έξυπνη γεωργία, έξυπνη ψηφιακή υποδομή, έξυπνη διαχείριση ενέργειας. Στοχεύει επίσης στην παροχή τεχνογνωσίας για τη διαχείριση πολύπλοκων αστικών ζητημάτων, να παράσχει τα κατάλληλα εφόδια για την ανάπτυξη καινοτόμων συστημάτων διακυβέρνησης μιας ασφαλούς και βιώσιμης πόλης, στον σχεδιασμό και υποστήριξη λειτουργικών και αποτελεσματικών μεθόδων εξοικονόμησης πόρων, καθώς και στην έξυπνη διαχείριση καταστροφών.</p>
    <p><b><u>Ειδίκευση / Κατεύθυνση «Διαδίκτυο των Πραγμάτων (IoT) και Προηγμένες Ψηφιακές Τεχνολογίες» - «Internet of Things (IoT) and Advanced Digital Technologies»</u></b></p>
    <p>Η Ειδίκευση / Κατεύθυνση «Διαδίκτυο των Πραγμάτων (IoT) και Προηγμένες Ψηφιακές Τεχνολογίες» στοχεύει να εκπαιδεύσει και να καταρτίσει επιστήμονες από διαφορετικά πεδία, αλλά κυρίως από τους τομείς των θετικών και τεχνολογικών επιστημών, να παρέχει τις κατάλληλες γνώσεις για τη σχεδίαση, διαχείριση και υποστήριξη νέων υπηρεσιών στις ΙοΤ πλατφόρμες, τη διαχείριση πολύπλοκων έργων, να παράσχει τα κατάλληλα εφόδια για το σχεδιασμό και ανάπτυξη κατάλληλων και καινοτόμων συστημάτων και υπηρεσιών, την ανάλυση μεγάλων δεδομένων, να παρέχει την τεχνογνωσία στο σχεδιασμό των αλληλεξαρτώμενων ΙοΤ συστημάτων που συνδέονται με τις λειτουργίες της ψηφιακής πόλης, των έξυπνων σπιτιών, τις μεταφορές, την κατασκευή, την ενέργεια, τα smart grids, την έξυπνη υγεία, την έξυπνη γεωργία, την έξυπνη ασφάλεια, την παροχή υπηρεσιών, τις επικοινωνίες, τις έξυπνες ψηφιακές υποδομές, την εκπαίδευση, την έξυπνη ασφάλεια, την ανάπτυξη συστημάτων διακυβέρνησης, την ασφάλεια των δεδομένων, την προστασία της ιδιωτικότητας - ακεραιότητας των προσωπικών δεδομένων, την αντιμετώπιση διαδικτυακών εισβολών, την προστασία των συσκευών από επιθέσεις, την διαλειτουργικότητα των συστημάτων και των συσκευών.</p>
    <p>Οι απόφοιτοι του Μεταπτυχιακού Προγράμματος μπορούν να εργαστούν στη δημόσια διοίκηση, Δήμους, Περιφέρειες, τεχνολογικά και ερευνητικά κέντρα, σε μια σειρά εμπλεκομένων φορέων του Πολιτισμού και Τουρισμού, σε τμήματα R&D σε μικρές και μεσαίες επιχειρήσεις, καθώς και σε μεγάλες επιχειρήσεις, σε εταιρίες που ασχολούνται με την καινοτομία τον Πολιτισμό και τον Τουρισμό και την υλοποίηση τεχνολογικών λύσεων. Οι γνώσεις που θα αποκομίσουν θα τους δώσουν τη δυνατότητα να ασκήσουν επαγγελματική συμβουλευτική και επιχειρηματικότητα σε θέματα έξυπνων πόλεων, ψηφιακού πολιτισμού, σύγχρονων ψηφιακών υπηρεσιών, τηλεπικοινωνιών και δικτύων, συμπεριλαμβανομένων των επιχειρήσεων, των διαχειριστών δικτύων ενέργειας και τηλεπικοινωνιών, των ρυθμιστικών αρχών, ιδιωτικών και δημόσιων φορέων. Οι απόφοιτοι έχουν επίσης τη δυνατότητα να συνεχίσουν τη σταδιοδρομία τους σε υφιστάμενους οργανισμούς, να αποκτήσουν τα κατάλληλα εφόδια και γνώσεις απαραίτητες για τομείς όπως η Δημόσια διοίκηση και Υπουργεία, Δήμους, Περιφέρειες, Τεχνολογικά και ερευνητικά κέντρα, καθώς και να συνεχίσουν τις σπουδές τους σε Διδακτορικό Επίπεδο, καθώς και να ξεκινήσουν τις δικές τους καινοτόμες επιχειρήσεις.</p>
    <br>
    <p><b>Χρονική Διάρκεια</b></p>
    <p>Η χρονική διάρκεια σπουδών για την απονομή του Διπλώματος Μεταπτυχιακών Σπουδών ορίζεται σε τρία (3) εξάμηνα.
        Για την απονομή του Δ.Μ.Σ. απαιτείται η παρακολούθηση των μαθημάτων διάρκειας δύο ακαδημαϊκών εξαμήνων και η εκπόνηση μεταπτυχιακής διατριβής. Κατά τη διάρκεια των δύο πρώτων εξαμήνων και για όλες τις κατευθύνσεις απαιτείται η επιτυχής παρακολούθηση των πέντε υποχρεωτικών μαθημάτων της επιλεγείσης ειδίκευσης.
        Κάθε μάθημα διδάσκεται σε δέκα τρίωρες διαλέξεις και έχει 6 Πιστωτικές Μονάδες - ECTS. Είναι υποχρεωτική η παρακολούθηση τουλάχιστον επτά από αυτές τις διαλέξεις.
        Με την επιτυχή παρακολούθηση και ολοκλήρωση του ΠΜΣ, χορηγείται Δ.Μ.Σ. 90 πιστωτικών μονάδων (ECTS). Το τρίτο εξάμηνο διατίθεται για τη εκπόνηση μεταπτυχιακής διατριβής.</p>
    <p><b>Μεταπτυχιακοί Τίτλοι</b></p>
    <p>Το ΠΜΣ απονέμει το Δίπλωμα Μεταπτυχιακών Σπουδών (Δ.Μ.Σ.) με τίτλο «Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες» («Digital Culture, Smart Cities, IoT and Advanced Digital Technologies») με τις εξής ειδικεύσεις (tracks) :</p>
    <p>●    Ψηφιακός Πολιτισμός / Digital Culture</p>
    <p>●    Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες / Smart Cities and Advanced Digital Technologies.</p>
    <p>●    Διαδίκτυο των Πραγμάτων (IoT) και Προηγμένες Ψηφιακές Τεχνολογίες / Internet of Things (IoT) and Advanced Digital Technologies.</p>
    <p>Οι ενδιαφερόμενοι μπορούν να υποβάλουν αιτήσεις <b>έως και 16 Οκτωβρίου 2020 </b>στη Γραμματεία του Προγράμματος Μεταπτυχιακών Σπουδών (Π.Μ.Σ.) του Πανεπιστημίου Πειραιώς. Περισσότερες Πληροφορίες μπορείτε να βρείτε: <a style="color: black; text-decoration-color: black " href="https://www.facebook.com/dcsciot">https://www.facebook.com/dcsciot</a>, <a style="color: black; text-decoration-color: black " href="http://www.cs.unipi.gr/dcsciot/">http://www.cs.unipi.gr/dcsciot</a>, Email: <a href="">dcsciot@unipi.gr</a></p>
    <p><b>Σε ποιους απευθύνεται το Π.Μ.Σ.</b></p>
    <p>Στο Π.Μ.Σ. γίνονται δεκτοί κάτοχοι τίτλου πρώτου κύκλου σπουδών Α.Ε.Ι. της ημεδαπής ή ομοταγών ιδρυμάτων της αλλοδαπής σύμφωνα με τις διατάξεις του άρθρου 34 του ν.4485/2017. Περισσότερες πληροφορίες μπορείτε να αναζητήσετε σε κάθε ειδίκευση/κατεύθυνση του Π.Μ.Σ. http://www.cs.unipi.gr/dcsciot</p>
    <p>Ενδεικτικά και ανάλογα με την ειδίκευση: Τμημάτων/Σχολών Τεχνολογιών Πληροφορικής και Επικοινωνιών, Μηχανικών, Καλών Τεχνών, Αρχιτεκτόνων Μηχανικών, Πολεοδόμων, Φιλοσοφικής Σχολής, Ανθρωπιστικών Επιστημών, Θετικών Επιστημών ή Τεχνολογικών Επιστημών, Γεωπονικών Επιστημών, Παιδαγωγικών, Θεολογικής, Οικονομικών και Κοινωνικών Επιστημών, Οικονομικών - Επιχειρηματικών και Διεθνών Σπουδών, Ναυτιλίας και Βιομηχανίας, Κοινωνικών Επιστημών, Μηχανικών Πολυτεχνείων ή Πολυτεχνικών Σχολών, Μηχανικών Περιβάλλοντος, Νομικών Επιστημών, Τμημάτων Πληροφορικής, Τεχνών Ήχου & Εικόνας, Πολιτισμικής Τεχνολογίας & Επικοινωνίας, Τμημάτων Τεχνολογιών Πληροφορικής και Επικοινωνιών, Διαχείρισης Πολιτισμικού Περιβάλλοντος και Νέων Τεχνολογιών, Επικοινωνίας Μέσων και Πολιτισμού, Ψηφιακών Μέσων, Επικοινωνίας και Πολιτισμικής Διαχείρισης, Συντηρητών Αρχαιοτήτων & Έργων Τέχνης, Ιστορικών και Αρχαιολόγων, Γραφιστικής, Πληροφορικής και Μέσων Μαζικής Ενημέρωσης, Διοίκησης - Οικονομίας και Επικοινωνίας, Πολιτιστικών και Τουριστικών Μονάδων, Aρχειονομίας, Bιβλιοθηκονομίας και Μουσειολογίας, Φωτογραφίας & Οπτικοακουστικών Τεχνών, Ελληνικού και Ευρωπαϊκού Πολιτισμού, Μηχανικών Πληροφορικής Τ.Ε., Φυσικών, Μαθηματικών, Χημικών, Χωροταξίας Πολεοδομίας και Περιφερειακής Ανάπτυξης, Πολιτικών Μηχανικών, Μηχανικών Παραγωγής και Διοίκησης, Μηχανικών Ορυκτών Πόρων Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών, Παιδαγωγικών Τμημάτων, Ειδικής Αγωγής, Ιστορίας - Αρχαιολογίας και Κοινωνικής Ανθρωπολογίας, Υδάτινου Περιβάλλοντος, Πολιτικής Επιστήμης και Δημόσιας Διοίκησης, Επικοινωνίας και Μέσων Μαζικής Ενημέρωσης, Επικοινωνίας Μέσων και Πολιτισμού, Θεατρικών Σπουδών, Φιλοσοφίας, Παιδαγωγικής και Ψυχολογίας, Γεωλογίας και Γεωπεριβάλλοντος, Ιστορίας και Φιλοσοφίας της Επιστήμης, Δημόσιας Διοίκησης, Οικονομικής και Περιφερειακής Ανάπτυξης, Κοινωνικών και Πολιτικών Επιστημών, Κοινωνικής Ανθρωπολογίας, Κοινωνιολογίας, Ψυχολογίας ή/και άλλων συναφών με τις κατευθύνσεις ειδικοτήτων), καθώς και πτυχιούχοι Πανεπιστημίων, Πολυτεχνείων ή Πολυτεχνικών Σχολών και ΤΕΙ ή Α.Σ.ΠΑΙ.Τ.Ε. της ημεδαπής, και ομοταγών Ιδρυμάτων ΑΕΙ της αλλοδαπής.</p>
    <p><b>Πρόγραμμα Μαθημάτων</b></p>
    <p>Η έναρξη των μαθημάτων θα πραγματοποιηθεί εντός Οκτωβρίου 2019. Οι ώρες διδασκαλίας είναι από 18:00 έως 21:00, τέσσερις ημέρες την εβδομάδα.</p>
    <p><b>Αιτήσεις</b></p>
    <p>Οι ενδιαφερόμενοι μπορούν να υποβάλουν αιτήσεις <b>έως και 16 Οκτωβρίου 2020</b> στη Γραμματεία του Προγράμματος Μεταπτυχιακών Σπουδών (Π.Μ.Σ.) του Πανεπιστημίου Πειραιώς. Περισσότερες Πληροφορίες μπορείτε να βρείτε: https://www.facebook.com/dcsciot, http://www.cs.unipi.gr/dcsciot, Email: dcsciot@unipi.gr</p>
    <div style="text-align-all: center">
        <p><b>Στοιχεία Επικοινωνίας</b></p>
        <p>Γραμματεία Π.Μ.Σ.</p>
        <p>«Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες»</p>
        <p>Τμήμα Πληροφορικής</p>
        <p>Πανεπιστήμιο Πειραιώς</p>
        <p>Καραολή και Δημητρίου 80</p>
        <p>Πειραιάς 18534</p>
        <p>5ος όροφος Γραφείο 503</p>
        <p>Τηλ.: 210 – 4142105, 210 - 4142263</p>
        <p>Φαξ: 210- 414 2264</p>
    </div>
    <br>
    <h3>Δομή και Μαθήματα</h3>
    <p>Το ΠΜΣ απονέμει το Δίπλωμα Μεταπτυχιακών Σπουδών (Δ.Μ.Σ.) με τίτλο «Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες» (Master of Science (M.Sc.) in «Digital Culture, Smart Cities, IoT and Advanced Digital Technologies») με τις εξής ειδικεύσεις (tracks) :</p>
    <ul>
        <li>Κατεύθυνση «Ψηφιακός Πολιτισμός (ΨΗΠΟΛ)»</li>
        <li>Κατεύθυνση «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες (ΕΞYΠΠΨΗΤ)»</li>
        <li>Κατεύθυνση «Διαδίκτυο των Πραγμάτων (IoT) και Προηγμένες Ψηφιακές Τεχνολογίες (IoT)»</li>
    </ul>
    <br>
    <h3>Προϋποθέσεις Εισαγωγής</h3>
    <p>Στο Π.Μ.Σ. γίνονται δεκτοί κάτοχοι τίτλου πρώτου κύκλου σπουδών Α.Ε.Ι. της ημεδαπής ή ομοταγών ιδρυμάτων της αλλοδαπής σύμφωνα με τις διατάξεις του άρθρου 34 του ν.4485/2017. Περισσότερες πληροφορίες μπορείτε να αναζητήσετε ενδεικτικά σε κάθε Ειδίκευση/Κατεύθυνση του Π.Μ.Σ. http://www.cs.unipi.gr/dcsciot</p>
    <p><b>Σε ποιους απευθύνεται η Ειδίκευση/Κατεύθυνση «Ψηφιακός Πολιτισμός» - «Digital Culture»</b></p>
    <p>Στην Ειδίκευση/Κατεύθυνση «Ψηφιακός Πολιτισμός» - «Digital Culture» γίνονται δεκτοί κάτοχοι τίτλου πρώτου κύκλου σπουδών Α.Ε.Ι. της ημεδαπής ή ομοταγών ιδρυμάτων της αλλοδαπής σύμφωνα με τις διατάξεις του άρθρου 34 του ν.4485/2017, ενδεικτικά: Τμημάτων/Σχολών Τεχνολογιών Πληροφορικής και Επικοινωνιών, Αρχιτεκτόνων Μηχανικών, Πολεοδόμων, Ανθρωπιστικών Επιστημών, Θετικών Επιστημών ή Τεχνολογικών Επιστημών, Μηχανικών, Καλών Τεχνών, Γεωπονικών Επιστημών, Φιλοσοφικής Σχολής, Παιδαγωγικών, Θεολογικής, Οικονομικών και Κοινωνικών Επιστημών, Μηχανικών Πολυτεχνείων ή Πολυτεχνικών Σχολών, Μηχανικών Περιβάλλοντος, Νομικών Επιστημών, Τμημάτων Πληροφορικής, Τεχνών Ήχου & Εικόνας, Πολιτισμικής Τεχνολογίας & Επικοινωνίας, Τμημάτων Τεχνολογιών Πληροφορικής και Επικοινωνιών, Διαχείρισης Πολιτισμικού Περιβάλλοντος και Νέων Τεχνολογιών, Επικοινωνίας Μέσων και Πολιτισμού, Ψηφιακών Μέσων, Επικοινωνίας και Πολιτισμικής Διαχείρισης, Συντηρητών Αρχαιοτήτων & Έργων Τέχνης, Ιστορικών και Αρχαιολόγων, Γραφιστικής, Πληροφορικής και Μέσων Μαζικής Ενημέρωσης, Διοίκησης - Οικονομίας και Επικοινωνίας, Πολιτιστικών και Τουριστικών Μονάδων, Aρχειονομίας, Bιβλιοθηκονομίας και Μουσειολογίας, Φωτογραφίας & Οπτικοακουστικών Τεχνών, Ελληνικού και Ευρωπαϊκού Πολιτισμού, Μηχανικών Πληροφορικής Τ.Ε., Φυσικών, Μαθηματικών, Χημικών, Χωροταξίας Πολεοδομίας και Περιφερειακής Ανάπτυξης, Πολιτικών Μηχανικών, Μηχανικών Παραγωγής και Διοίκησης, Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών, Παιδαγωγικών Τμημάτων, Ειδικής Αγωγής, Ιστορίας - Αρχαιολογίας και Κοινωνικής Ανθρωπολογίας, Πολιτικής Επιστήμης και Δημόσιας Διοίκησης, Επικοινωνίας και Μέσων Μαζικής Ενημέρωσης, Επικοινωνίας Μέσων και Πολιτισμού, Θεατρικών Σπουδών, Φιλοσοφίας, Παιδαγωγικής και Ψυχολογίας, Ιστορίας και Φιλοσοφίας της Επιστήμης, Δημόσιας Διοίκησης, Οικονομικής και Περιφερειακής Ανάπτυξης, Κοινωνικών και Πολιτικών Επιστημών, Κοινωνικής Ανθρωπολογίας, Κοινωνιολογίας, Ψυχολογίας ή/και άλλων συναφών με τις κατευθύνσεις ειδικοτήτων, καθώς και πτυχιούχοι Πανεπιστημίων, Πολυτεχνείων ή Πολυτεχνικών Σχολών και ΤΕΙ ή Α.Σ.ΠΑΙ.Τ.Ε. της ημεδαπής, και ομοταγών Ιδρυμάτων ΑΕΙ της αλλοδαπής.</p>
    <p><b>Σε ποιους απευθύνεται η Ειδίκευση/Κατεύθυνση «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες» - «Smart Cities and Advanced Digital Technologies»</b></p>
    <p>Στην Ειδίκευση/Κατεύθυνση «Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες» - «Smart Cities and Advanced Digital Technologies» γίνονται δεκτοί κάτοχοι τίτλου πρώτου κύκλου σπουδών Α.Ε.Ι. της ημεδαπής ή ομοταγών ιδρυμάτων της αλλοδαπής σύμφωνα με τις διατάξεις του άρθρου 34 του ν.4485/2017, ενδεικτικά και ανάλογα με την ειδίκευση: Τμημάτων/Σχολών Τεχνολογιών Πληροφορικής και Επικοινωνιών, Μηχανικών, Αρχιτεκτόνων Μηχανικών, Πολεοδόμων, Θετικών Επιστημών ή Τεχνολογικών Επιστημών, Παιδαγωγικών, Γεωπονικών Επιστημών, Ναυτιλίας και Βιομηχανίας, Μηχανικών Πολυτεχνείων ή Πολυτεχνικών Σχολών, Μηχανικών Περιβάλλοντος, Μηχανικών Πληροφορικής Τ.Ε., Φυσικών, Μαθηματικών, Χημικών, Χωροταξίας Πολεοδομίας και Περιφερειακής Ανάπτυξης, Πολιτικών Μηχανικών, Μηχανικών Παραγωγής και Διοίκησης, Ανθρωπιστικών Επιστημών, Οικονομικών και Κοινωνικών Επιστημών, Οικονομικών - Επιχειρηματικών και Διεθνών Σπουδών, Κοινωνικών Επιστημών, Νομικών Επιστημών, Τμημάτων Πληροφορικής, Τμημάτων Τεχνολογιών Πληροφορικής και Επικοινωνιών, Γεωλογίας και Γεωπεριβάλλοντος, Διαχείρισης Πολιτισμικού Περιβάλλοντος και Νέων Τεχνολογιών, Επικοινωνίας Μέσων και Πολιτισμού, Ψηφιακών Μέσων, Τεχνών Ήχου & Εικόνας, Πολιτισμικής Τεχνολογίας & Επικοινωνίας, Επικοινωνίας και Πολιτισμικής Διαχείρισης, Γραφιστικής, Πληροφορικής και Μέσων Μαζικής Ενημέρωσης, Διοίκησης - Οικονομίας και Επικοινωνίας, Πολιτιστικών και Τουριστικών Μονάδων, Aρχειονομίας, Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών, Φιλοσοφικής Σχολής, Παιδαγωγικών Τμημάτων, Υδάτινου Περιβάλλοντος, Πολιτικής Επιστήμης και Δημόσιας Διοίκησης, Επικοινωνίας και Μέσων Μαζικής Ενημέρωσης, Επικοινωνίας Μέσων και Πολιτισμού, Δημόσιας Διοίκησης, Οικονομικής και Περιφερειακής Ανάπτυξης, Bιβλιοθηκονομίας και Μουσειολογίας, Μηχανικών Ορυκτών Πόρων ή/και άλλων συναφών με τις κατευθύνσεις ειδικοτήτων), καθώς και πτυχιούχοι Πανεπιστημίων, Πολυτεχνείων ή Πολυτεχνικών Σχολών και ΤΕΙ ή Α.Σ.ΠΑΙ.Τ.Ε. της ημεδαπής, και ομοταγών Ιδρυμάτων ΑΕΙ της αλλοδαπής.</p>
    <p><b>Σε ποιους απευθύνεται η Ειδίκευση/Κατεύθυνση «Διαδίκτυο των Πραγμάτων (IoT) και Προηγμένες Ψηφιακές Τεχνολογίες» - «Internet of Things (IoT) and Advanced Digital Technologies»</b></p>
    <p>Στην κατεύθυνση «Διαδίκτυο των Πραγμάτων (IoT) και Προηγμένες Ψηφιακές Τεχνολογίες» - «Internet of Things (IoT) and Advanced Digital Technologies» γίνονται δεκτοί κάτοχοι τίτλου πρώτου κύκλου σπουδών Α.Ε.Ι. της ημεδαπής ή ομοταγών ιδρυμάτων της αλλοδαπής σύμφωνα με τις διατάξεις του άρθρου 34 του ν.4485/2017, ενδεικτικά και ανάλογα με την ειδίκευση: Τμημάτων/Σχολών Πληροφορικής, Τεχνολογιών Πληροφορικής και Επικοινωνιών, Επιστήμης Υπολογιστών, Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών, Ηλεκτρονικών Μηχανικών Ηλεκτρονικών Υπολογιστών, Μηχανικών Πληροφοριακών και Επικοινωνιακών Συστημάτων, Μηχανικών Ηλεκτρονικών Υπολογιστών και Τεχνολογίας Υπολογιστών, Μηχανικών Πολυτεχνείων ή Πολυτεχνικών Σχολών, Θετικών Επιστημών ή Τεχνολογικών Επιστημών, Μηχανικών Πληροφορικής Τ.Ε., Μηχανικών Τ.Ε., Μηχανικών Χωροταξίας Πολεοδομίας και Περιφερειακής Ανάπτυξης, Πολεοδόμων, Μηχανικών Περιβάλλοντος, Γεωπονικών Επιστημών, Πολιτικών Μηχανικών, Αρχιτεκτόνων Μηχανικών, Μηχανολόγων Μηχανικών, Φυσικών, Μαθηματικών, Γεωλογίας και Γεωπεριβάλλοντος, Μηχανικών Παραγωγής και Διοίκησης, Ναυτιλίας και Βιομηχανίας, Τμημάτων Ψηφιακών Μέσων, Τεχνών Ήχου & Εικόνας, Πολιτισμικής Τεχνολογίας & Επικοινωνίας, Διαχείρισης Πολιτισμικού Περιβάλλοντος και Νέων Τεχνολογιών ή /και άλλων συναφών με την κατεύθυνση ειδικοτήτων, καθώς και πτυχιούχοι Πανεπιστημίων, Πολυτεχνείων ή Πολυτεχνικών Σχολών και ΤΕΙ ή Α.Σ.ΠΑΙ.Τ.Ε. της ημεδαπής, και ομοταγών Ιδρυμάτων ΑΕΙ της αλλοδαπής.</p>
    <br>
    <h3>Έγγραφα</h3>
    <a style="color: black; text-decoration-color: black" href="prokirixi-pms-dcsciot.pdf">Πρόσκληση υποβολής αιτήσεων για το ΠΜΣ "Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες", 2020-2021</a>
    <a style="color: black; text-decoration-color: black" href="aitisi-pms-dcsciot.doc">Έντυπο αίτησης για το ΠΜΣ "Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες", 2020-2021</a>
    <a style="color: black; text-decoration-color: black" href="dilosi_metaptixiakis_ergasias_dcsciot.xls">Έντυπο δήλωσης μεταπτυχιακής εργασίας</a>
    <a style="color: black; text-decoration-color: black" href="IDRYSH_dcsciot.pdf">Ίδρυση ΠΜΣ "Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες"</a>
    <a style="color: black; text-decoration-color: black" href="Kanonismos_dcsciot.pdf">Κανονισμός ΠΜΣ "Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες"</a>
    <br>
    <h3>Πρόγραμμα Διδασκαλίας</h3>
    <a href="DCSCIOT_Lecture_Programme_V1_5_DC_A_Semester_9.pdf" style="text-decoration-color: black; color: black">Πρόγραμμα Διδασκαλίας Α' Εξαμήνου (Κατεύθυνση "Ψηφιακός Πολιτισμός")</a>
    <a href="DCSCIOT_Lecture_Programme_V1_5_SC_A_Semester_9.pdf" style="text-decoration-color: black; color: black">Πρόγραμμα Διδασκαλίας Α' Εξαμήνου (Κατεύθυνση "Έξυπνες Πόλεις και Προηγμένες Ψηφιακές Τεχνολογίες")</a>
    <a href="DCSCIOT_Lecture_Programme_V1_5_IOT_A_Semester_9.pdf" style="text-decoration-color: black; color: black">Πρόγραμμα Διδασκαλίας Α' Εξαμήνου (Κατεύθυνση "Διαδίκτυο των Πράγματων (Iot) και Προηγμένες Ψηφιακές Τεχνολογίες")</a>
    <a href="DCSCIOT_Lecture_Programme_V1_0_All_Tracks_B_Semester_30-03_03-04.pdf" style="text-decoration-color: black; color: black">Πρόγραμμα Εξ Αποστάσεως Διαλέξεων Β' Εξαμήνου, από 30/03/2020 έως 03/04/2020 (Όλες οι Κατευθύνσεις)</a>
    <a href="DCSCIOT_Lecture_Programme_V1_0_All_Tracks_B_Semester_06-04_17-04_updated.pdf" style="text-decoration-color: black; color: black">Πρόγραμμα Εξ Αποστάσεως Διαλέξεων Β' Εξαμήνου, από 06/04/2020 έως 17/04/2020 (Όλες οι Κατευθύνσεις)</a>
    <a href="Ak_Hmerologio_2019-2020.pdf" style="text-decoration-color: black; color: black">Ακαδημαϊκό Ημερολόγιο</a>
    <br>
    <h3>Προσωπικό</h3>
    <br>
    <table class="demo">
        <caption>Διδάσκοντες</caption>
        <thead>
        <tr>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ονοματεπώνυμο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Βαθμίδα</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Γραφείο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τηλέφωνο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Email</span><br></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>&nbsp;<a style="font-size:11px; box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Αναγνωστόπουλος Χρήστος-Νικόλαος</a></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής<br style="font-size:11px; box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πανεπιστημίου Αιγαίου</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:canag@unipi.gr" style="font-size:11px; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">canag@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="font-size:11px; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Βέργαδος Δημήτριος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><i style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">fax +30 210 4142119</i></td>
            <td>&nbsp;<a href="mailto:vergados@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">vergados@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2204" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Βίρβου Μαρία</a></td>
            <td style="font-size:11px;">&nbsp;Καθηγήτρια</td>
            <td style="font-size:11px;">&nbsp;507/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142269</td>
            <td>&nbsp;<a href="mailto:mvirvou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">mvirvou@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2115" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Δουληγέρης Χρήστος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;302/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142137<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><i style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">fax +30 210 4142472</i></td>
            <td>&nbsp;<a href="mailto:cdoulig@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">cdoulig@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Μιχάλας Άγγελος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;208/ΚΕKΤ</td>
            <td style="font-size:11px;">&nbsp;</td>
            <td>&nbsp;<a href="mailto:amichalas@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">amichalas@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2259" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Παναγιωτόπουλος Θεμιστοκλής</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;541/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142276</td>
            <td>&nbsp;<a href="mailto:themisp@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">themisp@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Τσιχριντζής Γεώργιος</a></td>
            <td style="font-size:11px;">&nbsp;Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;506/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142322</td>
            <td>&nbsp;<a href="mailto:geoatsi@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">geoatsi@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Αναγνωστόπουλος Ιωάννης</a></td>
            <td style="font-size:11px;">&nbsp;Αναπληρωτής Καθηγητής<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πανεπιστημίου Θεσσαλίας</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:janag@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">janag@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Διάλλα Άντα</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Αναπληρώτρια Καθηγήτρια Ευρωπαϊκής Ιστορίας στο Τμήμα Θεωρίας και Ιστορίας της Τέχνης της Ανώτατης Σχολής Καλών Τεχνών</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2183" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Κωνσταντόπουλος Χαράλαμπος</a></td>
            <td style="font-size:11px;">&nbsp;Αναπληρωτής Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142124</td>
            <td>&nbsp;<a href="mailto:konstant@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">konstant@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Φιλιππάκης Μιχαήλ</td>
            <td style="font-size:11px;">&nbsp;Αναπληρωτής Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;504/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142566</td>
            <td>&nbsp;<a href="mailto:mfilip@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">mfilip@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2256" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αλέπης Ευθύμιος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;540/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142311</td>
            <td>&nbsp;<a href="mailto:talepis@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">talepis@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Δημήτριος Ι. Βέργαδος</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/ted-dep-all/item/4784" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πατσάκης Κωνσταντίνος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;540/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142261</td>
            <td>&nbsp;<a href="mailto:kpatsak@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">kpatsak@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2227" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πικράκης Άγγελος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;505/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142128</td>
            <td>&nbsp;<a href="mailto:pikrakis@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">pikrakis@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Σακκόπουλος Ευάγγελος</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;543/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142312</td>
            <td>&nbsp;<a href="mailto:sakkopul@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">sakkopul@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Σωτηρόπουλος Διονύσιος</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;543/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142314</td>
            <td>&nbsp;<a href="mailto:dsotirop@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">dsotirop@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Τασούλας Ιωάννης</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;542/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142313</td>
            <td>&nbsp;<a href="mailto:jtas@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">jtas@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Ψυχογιός Δημήτριος</td>
            <td style="font-size:11px;">&nbsp;Επίκουρος Καθηγητής</td>
            <td style="font-size:11px;">&nbsp;319/Δεληγιώργη 107</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142399</td>
            <td>&nbsp;<a href="mailto:dpsycho@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">dpsycho@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Στεφάνου Ιωσήφ</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Ομότιμος Καθηγητής της Σχολής Αρχιτεκτόνων του Εθνικού Μετσοβίου Πολυτεχνείου,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αρχιτέκτονας πολεοδόμος,</span><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πρόεδρος του Ινστούτου Σύρου</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:jstefanou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">jstefanou@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;Fran Casino</td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;</td>
            <td style="font-size:11px;">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Ανδρουλιδάκη Αμαλία</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αρχιτέκτων Μηχανικός, Γενική Διευθύντρια Αναστήλωσης, ΥΠΠΟΑ</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Βαγενά Ευαγγελία</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">IT &amp; IP Law Expert and lecturer, CIPP/E, vice president of HADPP</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:evagena@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">evagena@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Βασιλαρά Αρχοντούλα</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:avasilara@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">avasilara@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Γρηγορακάκης Γρήγορης</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Προϊστάμενος της Εφορείας Αρχαιοτήτων Κεφαλληνίας του ΥΠΠΟΑ</span></td>
            <td style="font-size:11px;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">104/ΓΛ126</span><br></td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;Θωμάς Δασακλής</td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Κακαβάς Γεώργιος</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Διευθυντής του Νομισματικού Μουσείου</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Κακουλίδου Αλίκη</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκoυσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Γραφίστας</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:akakoulidou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">akakoulidou@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Καραμητσάνης Βασίλειος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πρόεδρος του Animasyros και της ΑΣΙΦΑ ΕΛΛΑΣ,</span><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πρόεδρος του Δ.Σ. της Εθνικής Λυρικής Σκηνής</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Κοτσώνης Ιωάννης</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Συνθέτης ηλεκτρονικής μουσικής, sound artist και αυτοσχεδιαστής</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:ykotsonis@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">ykotsonis@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Λινάκη Ε.</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Μαγγίνης Γεώργιος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Μέλος της Τριμελούς Εκτελεστικής Επιτροπής του Μουσείου Μπενάκη</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Μυριδάκης Νικόλαος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Οικονόμου Αγησίλαος</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:aecon@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">aecon@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Πάνος Παντελής</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Γενικός Διευθυντής της Αμερικανικής Σχολής Κλασικών Σπουδών στην Αθήνα (ΑΣΚΣΑ)</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Παπαπαναγιώτου Σταύρος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Ράππας Παναγιώτης</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Σκηνοθέτης, Animator, Illustrator</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Ραζής Γεράσιμος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:makisraz@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">makisraz@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Ρωμάνου Χριστίνα</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αρχαιολόγος, Τμήμα Διαχείρισης Εθνικού Αρχείου Μνημείων και Αρχαιολογικού Κτηματολογίου, Διεύθυνση Διαχείρισης Εθνικού Αρχείου Μνημείων, ΥΠΠΟΑ</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Σιούντρη Κωνσταντίνα</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αρχιτέκτων Μηχανικός Ε.Μ.Π.</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:ksiountri@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">ksiountri@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Σκόνδρας Εμμανουήλ</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Μεταδιδακτορικός Ερευνητής</span></td>
            <td style="font-size:11px;">&nbsp;208/ΚΕΚΤ</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142458,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">+30 210 4142127,</span><br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">+30 210 4142060</span></td>
            <td>&nbsp;<a href="mailto:skondras@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">skondras@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Στεφάνου Βασιλεία</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκουσα</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td style="font-size:11px;">&nbsp;<a href="mailto:vstefanou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">vstefanou@unipi.gr</a></td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Συρρής Νικόλαος</a><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"></span></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Μηχανικός Πληροφορικής, Τμήμα Διαχείρισης Εθνικού Αρχείου Μνημείων και Αρχαιολογικού Κτηματολογίου, Διεύθυνση Διαχείρισης Εθνικού Αρχείου Μνημείων, ΥΠΠΟΑ</span></td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;<a style="box-sizing: inherit; margin: auto; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center; width: 100px; cursor: pointer;">Χατζηγρηγορίου Παύλος</a></td>
            <td style="font-size:11px;">&nbsp;Διδάσκων</td>
            <td style="font-size:11px;">&nbsp;104/ΓΛ126</td>
            <td style="font-size:11px;">&nbsp;+30 210 4142479</td>
            <td>&nbsp;<a href="mailto:pchatzigrigoriou@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">pchatzigrigoriou@unipi.gr</a></td>
        </tr>
        <tbody>
    </table><br>
    <table class="demo" style="margin-left: 3px;">
        <caption><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 700; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Διοικητικό Προσωπικό</span><br></caption>
        <thead>
        <tr>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ονοματεπώνυμο</span><br></th>
            <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Γραφείο</span><br></th>
            <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τηλέφωνο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Email</span><br></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="font-size: 12px;">&nbsp;Κανατούλα Αικατερίνη</td>
            <td style="font-size: 12px;">&nbsp;<span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">503/ΚΕΚΤ</span>ς</td>
            <td style="font-size: 12px;">&nbsp;+30 210 4142105<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><i style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">fax +30 210 4142264</i></td>
            <td>&nbsp;<a href="mailto:psp@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">psp@unipi.gr</a></td>
        </tr>
        <tr>
            <td style="font-size: 12px;">&nbsp;Καλογεράκη Ελένη - Μαρία</td>
            <td style="font-size: 12px;">&nbsp;503/ΚΕΚΤ</td>
            <td style="font-size: 12px;">&nbsp;+30 210 4142263</td>
            <td><br></td>
        </tr>
        </tbody>
    </table>
    <br>
    <br>
    <table class="demo" style="margin-left: 3px;">
        <caption><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 700; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τεχνικό Προσωπικό</span><br></caption>
        <thead>
        <tr>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ονοματεπώνυμο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τίτλος</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Γραφείο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τηλέφωνο</span><br></th>
            <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Email</span><br></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="font-size: 12px;">&nbsp;Σκόνδρας Εμμανουήλ</td>
            <td style="font-size: 12px;">&nbsp;Μεταδιδακτορικός Ερευνητής</td>
            <td style="font-size: 12px;">&nbsp;208/ΚΕΚΤ</td>
            <td style="font-size: 12px;">&nbsp;+30 210 4142458,<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">+30 210 4142127</span></td>
            <td>&nbsp;<a href="mailto:skondras@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">skondras@unipi.gr</a></td>
        </tr>
        </tbody>
    </table>
    <br>
    <br>
    <table class="demo" style="margin-left: 3px;">
        <caption><span style="color: rgb(255, 255, 255); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 700; text-align: start; background-color: rgb(27, 28, 29);">Υπόμνημα</span><br></caption>
        <thead>
        <tr>
            <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Ακρωνύμιο</span><br></th>
            <th><span style="color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: left; background-color: rgb(249, 250, 251);">Επεξήγηση</span><br></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="font-size: 12px;">&nbsp;ΓΛ126</td>
            <td style="font-size: 12px;">&nbsp;Γρηγορίου Λαμπράκη 126, Πειραιάς, 18534, Ελλάδα</td>
        </tr>
        <tr>
            <td style="font-size: 12px;">&nbsp;ΚΕKΤ</td>
            <td style="font-size: 12px;">&nbsp;Κεντρικό Κτήριο, Καραολή &amp; Δημητρίου 80, Πειραιάς, 18534, Ελλάδα</td>
        </tr>
        <tbody>
    </table>
</div>


<div class="footer">

    <div class="col-lg-5 col-xs-12 about-company">

        <table id="footer-table" align="center" border="0" style="width: 100%; border-bottom: 1px solid #ddd;">
            <tr>
                <td style="width: 66%"><b>ΛΙΣΤΑ ΑΛΛΗΛΟΓΡΑΦΙΑΣ</b></td>
                <td><b>ΚΟΙΝΩΝΙΚΗ ΔΙΚΤΥΩΣΗ</b></td>
            </tr>
            <tr>
                <td><p>Εγγραφείτε στη λίστα αλληλογραφίας του Τμήματος:</p></td>
                <td><p>Βρείτε μας στα:</p></td>
            </tr>
            <tr>
                <td><input type="email" id="femail" name="femail" placeholder="E-mail"><button class="btn-eggrafh" onclick="alertFunction()" style="margin-left: 10px; width: 80px; text-align: center; font-size: 12px; color: #f2f2f2; background-color: darkorange;">ΕΓΓΡΑΦΗ</button></td>
                <td><a href="https://www.facebook.com/cs.unipi" target="_blank"><img src="facebook_logo.png" alt="image_facebook" width="30" height="30"></a></td>
            </tr>
        </table>

    </div>

    <div class="row mt-5">
        <div class="col copyright">
            <p class="" style="font-size: 10px;"><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
        </div>
    </div>
</div>



<script>
    //
    //side-menu
    //
    function openSlideMenu(){
        document.getElementById('side-menu').style.width = '270px';
        document.getElementById('main').style.marginLeft = '270px';
    }

    function closeSlideMenu(){
        document.getElementById('side-menu').style.width = '0';
        document.getElementById('main').style.marginLeft = '0';
    }


    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content.
    This allows the user to have multiple dropdowns without any conflict */
    //
    //ΤΟ ΤΜΗΜΑ
    //
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                dropdown[0].style.backgroundColor = "#111";
                dropdown[0].innerHTML = "ΤΟ ΤΜΗΜΑ &#9660;";
            } else {
                dropdownContent.style.display = "block";
                dropdownContent.style.backgroundColor = "#262626";
                dropdown[0].style.backgroundColor = "green";
                dropdown[0].innerHTML = "ΤΟ ΤΜΗΜΑ &#9650;";
            }
        });
    }

    //
    //ΑΝΑΚΟΙΝΩΣΕΙΣ
    //
    var dropdown2 = document.getElementsByClassName("dropdown-btn2");
    var j;

    for (j = 0; j < dropdown2.length; j++) {
        dropdown2[j].addEventListener("click", function() {
            var dropdownContent2 = this.nextElementSibling;
            if (dropdownContent2.style.display === "block") {
                dropdownContent2.style.display = "none";
                dropdown2[0].style.backgroundColor = "#111";
                dropdown2[0].innerHTML = "ΑΝΑΚΟΙΝΩΣΕΙΣ &#9660;";
            } else {
                dropdownContent2.style.display = "block";
                dropdownContent2.style.backgroundColor = "#262626";
                dropdown2[0].style.backgroundColor = "green";
                dropdown2[0].innerHTML = "ΑΝΑΚΟΙΝΩΣΕΙΣ &#9650;";
            }
        });
    }

    //
    //ΣΠΟΥΔΕΣ
    //
    var dropdown3 = document.getElementsByClassName("dropdown-btn3");
    var k;

    for (k = 0; k < dropdown3.length; k++) {
        dropdown3[k].addEventListener("click", function() {
            var dropdownContent3 = this.nextElementSibling;
            if (dropdownContent3.style.display === "block") {
                dropdownContent3.style.display = "none";
                dropdown3[0].style.backgroundColor = "#111";
                dropdown3[0].innerHTML = "ΣΠΟΥΔΕΣ &#9660;";
            } else {
                dropdownContent3.style.display = "block";
                dropdownContent3.style.backgroundColor = "#262626";
                dropdown3[0].style.backgroundColor = "green";
                dropdown3[0].innerHTML = "ΣΠΟΥΔΕΣ &#9650;";
            }
        });
    }

    //
    //ΜΕΛΗ
    //
    var dropdown4 = document.getElementsByClassName("dropdown-btn4");
    var l;

    for (l = 0; l < dropdown4.length; l++) {
        dropdown4[l].addEventListener("click", function() {
            var dropdownContent4 = this.nextElementSibling;
            if (dropdownContent4.style.display === "block") {
                dropdownContent4.style.display = "none";
                dropdown4[0].style.backgroundColor = "#111";
                dropdown4[0].innerHTML = "ΜΕΛΗ &#9660;";
            } else {
                dropdownContent4.style.display = "block";
                dropdownContent4.style.backgroundColor = "#262626";
                dropdown4[0].style.backgroundColor = "green";
                dropdown4[0].innerHTML = "ΜΕΛΗ &#9650;";
            }
        });
    }

    //
    //ΕΡΕΥΝΑ
    //
    var dropdown5 = document.getElementsByClassName("dropdown-btn5");
    var m;

    for (m = 0; m < dropdown5.length; m++) {
        dropdown5[m].addEventListener("click", function() {
            var dropdownContent5 = this.nextElementSibling;
            if (dropdownContent5.style.display === "block") {
                dropdownContent5.style.display = "none";
                dropdown5[0].style.backgroundColor = "#111";
                dropdown5[0].innerHTML = "ΕΡΕΥΝΑ &#9660;";
            } else {
                dropdownContent5.style.display = "block";
                dropdownContent5.style.backgroundColor = "#262626";
                dropdown5[0].style.backgroundColor = "green";
                dropdown5[0].innerHTML = "ΕΡΕΥΝΑ &#9650;";
            }
        });
    }

    //
    //ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ
    //
    var dropdown6 = document.getElementsByClassName("dropdown-btn6");
    var n;

    for (n = 0; n < dropdown6.length; n++) {
        dropdown6[n].addEventListener("click", function() {
            var dropdownContent6 = this.nextElementSibling;
            if (dropdownContent6.style.display === "block") {
                dropdownContent6.style.display = "none";
                dropdown6[0].style.backgroundColor = "#111";
                dropdown6[0].innerHTML = "ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ &#9660;";
            } else {
                dropdownContent6.style.display = "block";
                dropdownContent6.style.backgroundColor = "#262626";
                dropdown6[0].style.backgroundColor = "green";
                dropdown6[0].innerHTML = "ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ &#9650;";
            }
        });
    }

    //
    //ΥΠΗΡΕΣΙΕΣ
    //
    var dropdown7 = document.getElementsByClassName("dropdown-btn7");
    var p;

    for (p = 0; p < dropdown7.length; p++) {
        dropdown7[p].addEventListener("click", function() {
            var dropdownContent7 = this.nextElementSibling;
            if (dropdownContent7.style.display === "block") {
                dropdownContent7.style.display = "none";
                dropdown7[0].style.backgroundColor = "#111";
                dropdown7[0].innerHTML = "ΥΠΗΡΕΣΙΕΣ &#9660;";
            } else {
                dropdownContent7.style.display = "block";
                dropdownContent7.style.backgroundColor = "#262626";
                dropdown7[0].style.backgroundColor = "green";
                dropdown7[0].innerHTML = "ΥΠΗΡΕΣΙΕΣ &#9650;";
            }
        });
    }


    //
    //ΤΕΛΕΥΤΑΙΑ ΝΕΑ
    //
    var dropdown8 = document.getElementsByClassName("dropbtn");
    var q;

    for (q = 0; q < dropdown8.length; q++) {
        dropdown8[q].addEventListener("click", function() {
            var dropdownContent8 = this.nextElementSibling;
            if (dropdownContent8.style.display === "block") {
                dropdownContent8.style.display = "none";
                dropdown8[0].style.backgroundColor = "#3b5998";
            } else {
                dropdownContent8.style.display = "block";
                dropdownContent8.style.backgroundColor = "#262626";
                dropdown8[0].style.backgroundColor = "#98AFC7";
            }
        });
    }

    //
    //Alert
    //
    function alertFunction() {
        alert("Η εγγραφή έγινε με επιτυχία!");
    }

</script>
</body>
</html>