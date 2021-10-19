<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ΠΜΣ "Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης"</title>
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


        h2 {
            margin-left: -22px;
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


        #main{
            margin-left: -15px;
        }

        .demo {
            border:1px solid #C0C0C0;
            border-collapse:collapse;
            padding:0px;
            font-size: 11px;
        }
        .demo th {
            border:1px solid #C0C0C0;
            padding:0px;
            background:#F0F0F0;
            font-size: 11px;
        }
        .demo td {
            border:1px solid #C0C0C0;
            padding:0px;
            font-size: 11px;
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
    <h2 style="margin-left: 10px;">ΠΜΣ "Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης"</h2>
    <br>
    <div class="type-1">
        <div>
            <a href="Aithsh_gia_eggrafh_id_1.php" class="btn btn-1">
                <span class="txt">Αίτηση για εγγραφή</span>
                <span class="round"><i class="fa fa-chevron-right"></i></span>
            </a>
        </div>
        <br>
        <h3 style="color: #0066cc"><u>Κατευθύνσεις</u></h3>
        <table id ="table_kat" align="center" border="0" style="width: 100%; margin-left: -5px;">
            <tr>
                <td><button id="button_kat_1" style="background-color: #b3ccff; font-size: 12.5px; cursor: pointer; display: inline-block;"><a class="link" href="Metaptuxiaka_id_1_ETEAY.php">Ευφυείς Τεχνολογίες Επικοινωνίας Ανθρώπου-Υπολογιστή</a></button></td>
                <td><button id="button_kat_2" style="background-color: #b3ccff; font-size: 12.5px; cursor: pointer; display: inline-block;"><a class="link" href="Metaptuxiaka_id_1_PTAL.php">Προηγμένες Τεχνολογίες Ανάπτυξης Λογισμικού</a></button></td>
            </tr>
            <tr>
                <td><button id="button_kat_2" style="background-color: #b3ccff; font-size: 12.5px; cursor: pointer; display: inline-block;"><a class="link" href="Metaptuxiaka_id_1_THKY.php">Τεχνολογίες Ηλεκτρονικών και Κινητών Υπηρεσιών</a></button></td>
            </tr>
        </table>
        <br>
        <h3 style="color: #0066cc"><u>Συνοπτική παρουσίαση</u></h3>
        <p>Το Τμήμα Πληροφορικής της Σχολής Τεχνολογιών Πληροφορικής και Επικοινωνιών του Πανεπιστημίου Πειραιώς οργανώνει και λειτουργεί από το ακαδημαϊκό έτος 2018-2019 Πρόγραμμα Μεταπτυχιακών Σπουδών (ΠΜΣ) με τίτλο «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης» (Advanced Informatics and Computing Systems - Software Development and Αrtificial Intelligence) σύμφωνα με τις διατάξεις της παρούσης απόφασης και τις διατάξεις του ν. 4485/2017</p>
        <p>Το ΠΜΣ απονέμει Δίπλωμα Μεταπτυχιακών Σπουδών (Δ.Μ.Σ.) σε «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης» (Advanced Informatics and Computing Systems - Software Development and Αrtificial Intelligence) με τις εξής ειδικεύσεις:</p>
        <p>1.Ευφυείς Τεχνολογίες Επικοινωνίας Ανθρώπου - Υπολογιστή / Intelligent Technologies for HCI</p>
        <p>2.Προηγμένες Τεχνολογίες Ανάπτυξης Λογισμικού / Advanced Software Development Technologies</p>
        <p>3.Τεχνολογίες Ηλεκτρονικών και Κινητών Υπηρεσιών / e-Service and m-Service Technologies</p>
        <br>
        <h3 style="color: #0066cc"><u>Σκοπός</u></h3>
        <p>Το Πρόγραμμα Μεταπτυχιακών Σπουδών στις «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης» (Advanced Informatics and Computing Systems - Software Development and Αrtificial Intelligence) έχει ως αντικείμενο τη συντονισμένη ανάπτυξη και οργάνωση των ερευνητικών κατευθύνσεων της επιστήμης της Πληροφορικής και των νέων Τεχνολογιών και ειδικότερα αυτών που αφορούν σε τομείς υψηλής προτεραιότητας για τη χώρα μας.</p>
        <p>Το «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης» (Advanced Informatics and Computing Systems - Software Development and Αrtificial Intelligence) θεραπεύει αμιγώς τα πλέον προηγμένα ζητήματα επιστήμης στο χώρο της Πληροφορικής και των νέων τεχνολογιών. Το περιεχόμενο και η φυσιογνωμία του προγράμματος έχει διαμορφωθεί έτσι ώστε να ανταποκρίνεται με επιτυχία στις ιδιαίτερες επιστημονικές ανάγκες που προκαλεί η ταχύτατη εξέλιξη της Πληροφορικής και νέων Τεχνολογιών σε ευρωπαϊκό και διεθνές επίπεδο.</p>
        <p>Τόσο τα υποχρεωτικά μαθήματα, όσο και τα μαθήματα επιλογής, έχουν επιλεγεί ώστε να προσφέρουν στο μεταπτυχιακό φοιτητή την ειδίκευση που απαιτούν οι πλέον πρόσφατες τεχνολογικές εξελίξεις στον τομέα της Πληροφορικής και νέων τεχνολογιών, σε συνδυασμό με τα ιδιαίτερα χαρακτηριστικά και τις ανάγκες της σύγχρονης Ελληνικής και Ευρωπαϊκής Οικονομίας.</p>
        <p>Οι σκοποί του Προγράμματος Μεταπτυχιακών Σπουδών στο «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης» (Advanced Informatics and Computing Systems - Software Development and Αrtificial Intelligence) του Τμήματος Πληροφορικής του Πανεπιστημίου Πειραιώς, είναι οι εξής:</p>
        <p>·  Η προαγωγή της επιστήμης και της έρευνας στο αντικείμενο του προγράμματος σπουδών.</p>
        <p>·  Η προετοιμασία και εκπαίδευση εξειδικευμένων και ικανών μεταπτυχιακών επιστημόνων ερευνητών και στελεχών που θα προωθήσουν την ανάπτυξη της χώρας και των Ελληνικών επιχειρήσεων στην Κοινωνία της Πληροφορίας και των Νέων Τεχνολογιών, του Πολιτισμού και της Οικονομίας.</p>
        <p>·  Η ανάπτυξη της Θεωρητικής και Εφαρμοσμένης Πληροφορικής, των Τεχνολογιών Πληροφορικής και Επικοινωνιών.</p>
        <p>·  Η στενή συνεργασία μεταξύ της Ακαδημαϊκής Κοινότητας και των Επιχειρήσεων για την αποδοχή, χρήση και ανάπτυξη των πλέον προηγμένων συστημάτων Πληροφορικής και Υπηρεσιών.</p>
        <p>·  Η συνεργασία με Ελληνικούς, Ευρωπαϊκούς και Διεθνείς Επιστημονικούς Οργανισμούς, που ασχολούνται με θέματα Πληροφορικής, Νέων Τεχνολογιών, με τομείς του Πολιτισμού, της Οικονομίας κ.α.</p>
        <br>
        <h3 style="color: #0066cc"><u>Δομή και Μαθήματα</u></h3>
        <p>Η χρονική διάρκεια για την απονομή του Διπλώματος Μεταπτυχιακών Σπουδών ορίζεται σε τρία (3) ακαδημαϊκά εξάμηνα για το πρόγραμμα πλήρους φοίτησης και σε δυο (2) επιπλέον εξάμηνα για το πρόγραμμα μερικής φοίτησης.</p>
        <p>Για την απονομή του ΔΜΣ (M.Sc.) απαιτούνται:</p>
        <p>●    κατά το πρώτο εξάμηνο, για όλες τις κατευθύνσεις, η παρακολούθηση των πέντε υποχρεωτικών μαθημάτων της επιλεγείσας ειδίκευσης και ενός μαθήματος εκ των προσφερόμενων κατά το εξάμηνο αυτό από το πρόγραμμα σπουδών ως υποχρεωτικών μαθημάτων άλλων ειδικεύσεων ή ως μαθημάτων ελεύθερης επιλογής.</p>
        <p>●    κατά το δεύτερο εξάμηνο, για όλες τις ειδικεύσεις, η παρακολούθηση των πέντε υποχρεωτικών μαθημάτων της επιλεγείσας κατεύθυνσης και ενός μαθήματος εκ των προσφερόμενων κατά το εξάμηνο αυτό από το πρόγραμμα σπουδών ως υποχρεωτικών μαθημάτων άλλων ειδικεύσεων ή ως μαθημάτων ελεύθερης επιλογής.</p>
        <p>●    κατά το τρίτο εξάμηνο η εκπόνηση και συγγραφή μεταπτυχιακής διατριβής.</p>
        <p>Οι γλώσσες διδασκαλίας του Π.Μ.Σ.(M.Sc. Program) είναι η Ελληνική ή/και η Αγγλική.</p>
        <p>Κάθε μάθημα ισοδυναμεί με πέντε (5) πιστωτικές μονάδες (ECTS). Η Μεταπτυχιακή Διατριβή ισοδυναμεί με τριάντα (30) πιστωτικές μονάδες (ECTS). Συνολικά, το ΠΜΣ ισοδυναμεί με ενενήντα (90) πιστωτικές μονάδες (ECTS).</p>
        <p>Αναλυτικά, η δομή του προγράμματος μαθημάτων του ΔΜΣ «Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης» (Advanced Informatics and Computing Systems - Software Development and Αrtificial Intelligence) έχει ως ακολούθως:</p>
        <p>(Για περισσότερες πληροφορίες επιλέξτε το όνομα της κάθε κατεύθυνσης.)</p>
        <p>Με απόφαση των αρμοδίων οργάνων, μπορεί να γίνει τροποποίηση του προγράμματος των μαθημάτων καθώς και ανακατανομή των μαθημάτων του προγράμματος τόσο μεταξύ των εξαμήνων όσο και στα επιπλέον εξάμηνα σπουδών του προγράμματος μερικής φοίτησης, όπως αναλυτικά προβλέπονται στον Κανονισμό Μεταπτυχιακών Σπουδών.</p>
        <br>
        <h3 style="color: #0066cc"><u>Προϋποθέσεις Εισαγωγής</u></h3>
        <p>Στο Π.Μ.Σ. (M.Sc.) γίνονται δεκτοί, σύμφωνα με τις διατάξεις του άρθρου 34 του Ν.4485/2017, μετά από επιλογή, κατά προτεραιότητα πτυχιούχοι Τμημάτων Πληροφορικής, Τμημάτων Τεχνολογιών Πληροφορικής και Επικοινωνιών, Πολυτεχνείων ή Πολυτεχνικών Σχολών, Τμημάτων Θετικών Επιστημών Πανεπιστημίων, Μηχανικών Πληροφορικής Τ.Ε., Μηχανικών Τ.Ε., Σχολών Θετικών ή Τεχνολογικών Επιστημών, Τμημάτων Ψηφιακών Μέσων, Επικοινωνίας και Πολιτισμικής Διαχείρισης ή/και άλλων συναφών με τις κατευθύνσεις ειδικοτήτων, καθώς και πτυχιούχοι Πανεπιστημίων, Πολυτεχνείων ή Πολυτεχνικών Σχολών και ΤΕΙ ή Α.Σ.ΠΑΙ.Τ.Ε. της ημεδαπής, και ομοταγών Ιδρυμάτων ΑΕΙ της αλλοδαπής.</p>
        <p>Για τους Τίτλους Σπουδών Ιδρυμάτων της αλλοδαπής είναι απαραίτητη η προσκόμιση πράξης ή βεβαίωσης ισοτιμίας του κατά νόμο αρμοδίου οργάνου με την οποία αναγνωρίζονται ως ισότιμοι προς τους απονεμόμενους από τα Ελληνικά Ανώτατα Εκπαιδευτικά Ιδρύματα.</p>
        <br>
        <h3 style="color: #0066cc"><u>Διδάσκοντες ΠΜΣ "Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης"</u></h3>
        <table class="demo" style="margin-left: 3px;">
            <caption><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 700; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Διδάσκοντες</span><br></caption>
            <thead>
            <tr>
                <th><span style="font-size: 11px; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Ονοματεπώνυμο</span><br></th>
                <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Βαθμίδα</span><br></th>
                <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Γραφείο</span><br></th>
                <th><span style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Τηλέφωνο</span><br></th>
                <th><span style="box-sizing: inherit; font-size: 11px; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px;">Email</span><br></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2107" target="_blank" style="font-size: 11px; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Ασημακόπουλος Νικήτας</a></td>
                <td style="font-size: 11px;">&nbsp;Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;308/ΚΕΚΤ</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142145<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><i style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">fax +30 210 4142106</i></td>
                <td>&nbsp;<a href="mailto:assinik@unipi.gr" style="font-size: 11px; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">assinik@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2204" target="_blank" style="font-size: 11px; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Βίρβου Μαρία</a></td>
                <td style="font-size: 11px;">&nbsp;Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;507/ΚΕΚΤ</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142269</td>
                <td>&nbsp;<a href="mailto:mvirvou@unipi.gr" style="font-size: 11px; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">mvirvou@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2115" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Δουληγέρης Χρήστος</a></td>
                <td style="font-size: 11px;">&nbsp;Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;302/ΚΕΚΤ</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142137<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><i style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">fax +30 210 4142472</i></td>
                <td>&nbsp;<a href="mailto:cdoulig@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">cdoulig@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2273" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Θεοδωρίδης Ιωάννης</a></td>
                <td style="font-size: 11px;">&nbsp;Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;501/ΚΕΚΤ</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142449</td>
                <td>&nbsp;<a href="mailto:ytheod@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">ytheod@unipi.gr</a></td>
            </tr>
            <tr>
                <td style="font-size: 11px;">&nbsp;Μιχάλας Άγγελος</td>
                <td style="font-size: 11px;">&nbsp;Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;208/ΚΕKΤ</td>
                <td style="font-size: 11px;">&nbsp;</td>
                <td>&nbsp;<a href="mailto:amichalas@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">amichalas@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2259" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Παναγιωτόπουλος Θεμιστοκλής</a></td>
                <td style="font-size: 11px;">&nbsp;Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;541/ΚΕΚΤ</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142276</td>
                <td>&nbsp;<a href="mailto:themisp@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">themisp@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2225" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Τσικούρας Παναγιώτης-Γεώργιος</a></td>
                <td style="font-size: 11px;">&nbsp;Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;543/ΚΕΚΤ</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142313</td>
                <td>&nbsp;<a href="mailto:pgtsik@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">pgtsik@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2159" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Τσιχριντζής Γεώργιος</a></td>
                <td style="font-size: 11px;">&nbsp;Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;506/ΚΕΚΤ</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142322</td>
                <td>&nbsp;<a href="mailto:geoatsi@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(96, 164, 212); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: 0px; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">geoatsi@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2266" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Βέργαδος Δημήτριος</a></td>
                <td style="font-size: 11px;">&nbsp;Αναπληρωτής Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;104/ΓΛ126</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142479<br style="box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;"><i style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgba(0, 0, 0, 0.87); font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">fax +30 210 4142119</i></td>
                <td>&nbsp;<a href="mailto:vergados@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">vergados@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2181" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Μεταξιώτης Κωνσταντίνος</a></td>
                <td style="font-size: 11px;">&nbsp;Αναπληρωτής Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;303/ΓΛ126</td>
                <td style="font-size: 11px;">&nbsp;+302104142578</td>
                <td>&nbsp;<a href="mailto:kmetax@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">kmetax@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2256" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Αλέπης Ευθύμιος</a></td>
                <td style="font-size: 11px;">&nbsp;Επίκουρος Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;540/ΚΕΚΤ</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142311</td>
                <td>&nbsp;<a href="mailto:talepis@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">talepis@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="http://www.unipi.gr/unipi/plh-dep-all/item/2183" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Κωνσταντόπουλος Χαράλαμπος</a></td>
                <td style="font-size: 11px;">&nbsp;Επίκουρος Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;104/ΓΛ126</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142124</td>
                <td>&nbsp;<a href="mailto:konstant@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">konstant@unipi.gr</a></td>
            </tr>
            <tr>
                <td style="font-size: 11px;">&nbsp;Πελέκης Νικόλαος</td>
                <td style="font-size: 11px;">&nbsp;Επίκουρος Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;601/ΓΛ126</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142428</td>
                <td>&nbsp;<a href="mailto:npelekis@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">npelekis@unipi.gr</a></td>
            </tr>
            <tr>
                <td>&nbsp;<a href="https://www.unipi.gr/unipi/el/pikrakis.html" target="_blank" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">Πικράκης Άγγελος</a></td>
                <td style="font-size: 11px;">&nbsp;Επίκουρος Καθηγητής</td>
                <td style="font-size: 11px;">&nbsp;505/ΚΕΚΤ</td>
                <td style="font-size: 11px;">&nbsp;+30 210 4142128</td>
                <td>&nbsp;<a href="mailto:pikrakis@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">pikrakis@unipi.gr</a></td>
            </tr>
            <tr>
                <td style="font-size: 11px;">&nbsp;Καραγιώργου Σοφία</td>
                <td style="font-size: 11px;">&nbsp;Διδάσκων</td>
                <td style="font-size: 11px;">&nbsp;501/ΚΕKΤ</td>
                <td>&nbsp;</td>
                <td>&nbsp;<a href="mailto:karagior@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">karagior@unipi.gr</a></td>
            </tr>
            <tr>
                <td style="font-size: 11px;">&nbsp;Κατσιώνης Γεώργιος</td>
                <td style="font-size: 11px;">&nbsp;Διδάσκων</td>
                <td style="font-size: 11px;">&nbsp;507/ΚΕKΤ</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="font-size: 11px;">&nbsp;Λιαγκούρας Κωνσταντίνος</td>
                <td style="font-size: 11px;">&nbsp;Διδάσκων</td>
                <td style="font-size: 11px;">&nbsp;303/ΓΛ126</td>
                <td>&nbsp;</td>
                <td>&nbsp;<a href="mailto:kliagk@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">kliagk@unipi.gr</a></td>
            </tr>
            <tr>
                <td style="font-size: 11px;">&nbsp;Παπαδομιχελάκη Ξένη</td>
                <td style="font-size: 11px;">&nbsp;Διδάσκων</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="font-size: 11px;">&nbsp;Σωτηρόπουλος Διονύσιος</td>
                <td style="font-size: 11px;">&nbsp;Διδάσκων</td>
                <td style="font-size: 11px;">&nbsp;506/ΚΕKΤ</td>
                <td>&nbsp;</td>
                <td>&nbsp;<a href="mailto:dsotirop@unipi.gr" style="box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; color: rgb(25, 83, 131); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Lato, &quot;Helvetica Neue&quot;, Arial, Helvetica, sans-serif; font-size: 13.2px; text-align: center;">dsotirop@unipi.gr</a></td>
            </tr>
            <tbody>
        </table>
        <br>
        <br>
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
        <br>
        <br>
        <h3 style="color: #0066cc"><u>Επικοινωνία</u></h3>
        <div style="text-align-all: center">
            <p>Τμήμα Πληροφορικής</p>
            <p>Πανεπιστήμιο Πειραιώς</p>
            <p>Καραολή και Δημητρίου 80,</p>
            <p>Πειραιάς 18534</p>
            <p>5ος όροφος Γραφείο 503</p>
            <p>Τηλ.: 210 – 4142105, 210 - 4142263</p>
            <p>Φαξ: 210- 414 2264</p>
            <p><a style="color: black; text-decoration-color: black;" href="http://www.cs.unipi.gr">http://www.cs.unipi.gr</a></p>
            <p>Email: <a style="color: black; text-decoration-color: black;" href="psp@unipi.gr">psp@unipi.gr</a></p>
        </div>
    </div>
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